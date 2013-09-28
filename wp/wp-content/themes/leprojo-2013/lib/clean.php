<?php
/*********************
Start all the functions
at once for Reverie.
*********************/

// start all the functions
add_action('after_setup_theme','basement_startup');

function basement_startup() {

    // launching operation cleanup
    add_action( 'init', 'basement_head_cleanup' );
    // remove WP version from RSS
    add_filter( 'the_generator', 'basement_rss_version' );

    // remove pesky injected css for recent comments widget
    add_filter( 'wp_head', 'reverie_remove_wp_widget_recent_comments_style', 1  );
    // clean up comment styles in the head
    add_action( 'wp_head', 'reverie_remove_recent_comments_style', 1 );
    // clean up gallery output in wp
    add_filter( 'gallery_style', 'reverie_gallery_style' );
    // ie conditional wrapper
    add_filter( 'style_loader_tag', 'basement_ie_conditional', 10, 2 );
    
    // additional post related cleaning
    add_filter( 'img_caption_shortcode', 'reverie_cleaner_caption', 10, 3 );
    add_filter( 'get_image_tag_class', 'reverie_image_tag_class', 0, 4 );
    add_filter( 'get_image_tag', 'reverie_image_editor', 0, 4 );
    add_filter( 'the_content', 'reverie_img_unautop', 30 );

} /* end basement_startup */


/**********************
WP_HEAD GOODNESS
The default WordPress head is
a mess. Let's clean it up.

Thanks for Bones
http://themble.com/bones/
**********************/

function basement_head_cleanup() {
	// category feeds
	// remove_action( 'wp_head', 'feed_links_extra', 3 );
	// post and comment feeds
	// remove_action( 'wp_head', 'feed_links', 2 );

	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// index link
	remove_action( 'wp_head', 'index_rel_link' );
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
  // remove WP version from css
  add_filter( 'style_loader_src', 'reverie_remove_wp_ver_css_js', 9999 );
  // remove Wp version from scripts
  add_filter( 'script_loader_src', 'reverie_remove_wp_ver_css_js', 9999 );
  
  // Originally from http://wpengineer.com/1438/wordpress-header/ 
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

  global $wp_widget_factory;
  remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));

  add_filter('use_default_gallery_style', '__return_null');

  if (!class_exists('WPSEO_Frontend')) {
    remove_action('wp_head', 'rel_canonical');
    add_action('wp_head', 'basement_rel_canonical');
  }
} /* end head cleanup */

function basement_rel_canonical() {
  global $wp_the_query;

  if (!is_singular()) {
    return;
  }

  if (!$id = $wp_the_query->get_queried_object_id()) {
    return;
  }

  $link = get_permalink($id);
  echo "\t<link rel=\"canonical\" href=\"$link\">\n";
}
add_action('init', 'basement_head_cleanup');


// remove WP version from RSS
function basement_rss_version() { return ''; }


/**
 * Clean up language_attributes() used in <html> tag
 *
 * Change lang="en-US" to lang="en"
 * Remove dir="ltr"
 */
function basement_language_attributes() {
  $attributes = array();
  $output = '';

  if (function_exists('is_rtl')) {
    if (is_rtl() == 'rtl') {
      $attributes[] = 'dir="rtl"';
    }
  }

  $lang = get_bloginfo('language');

  if ($lang && $lang !== 'en-US') {
    $attributes[] = "lang=\"$lang\"";
  } else {
    $attributes[] = 'lang="en"';
  }

  $output = implode(' ', $attributes);
  $output = apply_filters('basement_language_attributes', $output);

  return $output;
}
add_filter('language_attributes', 'basement_language_attributes');


/**
 * Manage output of wp_title()
 */
function basement_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'basement_wp_title', 10);


/**
* remove WP version from scripts
**/
function reverie_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}


/**
* remove injected CSS for recent comments widget
**/
function reverie_remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}

/**
* remove injected CSS for recent comments
**/
function reverie_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}
/**
* remove injected CSS  from gallery
**/
function reverie_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}


/**
 * Clean up output of stylesheet <link> tags
 * Remove "type='text/css' media='all'"
 */
function basement_clean_style_tag($input) {
  preg_match_all("!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches);
  // Only display media if it is meaningful
  $media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';
  return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}
add_filter('style_loader_tag', 'basement_clean_style_tag');



/**
* Add the conditional wrapper around ie stylesheet 
* If USE_IE_ONLY_STYLE_SHEET is true in config.php
* Source: http://code.garyjones.co.uk/ie-conditional-style-sheets-wordpress/
**/
function basement_ie_conditional( $tag, $handle ) {
	if ( 'use-ie-only-style-sheet' == $handle )
		$tag = '<!--[if lt IE 9]>' . "\n" . $tag . '<![endif]-->' . "\n";
	return $tag;
}

/**
 * Add and remove body_class() classes
 */
function basement_body_class($classes) {
  // Add post/page slug
  if (is_single() || is_page() && !is_front_page()) {
    $classes[] = basename(get_permalink());
  }

  // Remove unnecessary classes
  $home_id_class = 'page-id-' . get_option('page_on_front');
  $remove_classes = array(
    'page-template-default',
    $home_id_class
  );
  $classes = array_diff($classes, $remove_classes);

  return $classes;
}
add_filter('body_class', 'basement_body_class');


/**
 * Wrap embedded media as suggested by Readability
 *
 * @link https://gist.github.com/965956
 * @link http://www.readability.com/publishers/guidelines#publisher
 */
function basement_embed_wrap($cache, $url, $attr = '', $post_ID = '') {
  return '<div class="entry-content-asset">' . $cache . '</div>';
}
add_filter('embed_oembed_html', 'basement_embed_wrap', 10, 4);


/**
 * Add class="thumbnail" to attachment items
 */
function basement_attachment_link_class($html) {
  $postid = get_the_ID();
  $html = str_replace('<a', '<a class="thumbnail"', $html);
  return $html;
}
add_filter('wp_get_attachment_link', 'basement_attachment_link_class', 10, 1);




/**
 * Add thumbnail styling to images with captions
 * Use <figure> and <figcaption>
 *
 * @link http://justintadlock.com/archives/2011/07/01/captions-in-wordpress
 */
function basement_caption($output, $attr, $content) {
  if (is_feed()) {
    return $output;
  }

  $defaults = array(
    'id'      => '',
    'align'   => 'alignnone',
    'width'   => '',
    'caption' => ''
  );

  $attr = shortcode_atts($defaults, $attr);

  // If the width is less than 1 or there is no caption, return the content wrapped between the [caption] tags
  if ($attr['width'] < 1 || empty($attr['caption'])) {
    return $content;
  }

  // Set up the attributes for the caption <figure>
  $attributes  = (!empty($attr['id']) ? ' id="' . esc_attr($attr['id']) . '"' : '' );
  $attributes .= ' class="thumbnail wp-caption ' . esc_attr($attr['align']) . '"';
  $attributes .= ' style="width: ' . esc_attr($attr['width']) . 'px"';

  $output  = '<figure' . $attributes .'>';
  $output .= do_shortcode($content);
  $output .= '<figcaption class="caption wp-caption-text">' . $attr['caption'] . '</figcaption>';
  $output .= '</figure>';

  return $output;
}
add_filter('img_caption_shortcode', 'basement_caption', 10, 3);


/*********************
Post related cleaning
*********************/
/* Customized the output of caption, you can remove the filter to restore back to the WP default output. Courtesy of DevPress. http://devpress.com/blog/captions-in-wordpress/ */
function reverie_cleaner_caption( $output, $attr, $content ) {

	/* We're not worried abut captions in feeds, so just return the output here. */
	if ( is_feed() )
		return $output;

	/* Set up the default arguments. */
	$defaults = array(
		'id' => '',
		'align' => 'alignnone',
		'width' => '',
		'caption' => ''
	);

	/* Merge the defaults with user input. */
	$attr = shortcode_atts( $defaults, $attr );

	/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
	if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
		return $content;

	/* Set up the attributes for the caption <div>. */
	$attributes = ' class="figure ' . esc_attr( $attr['align'] ) . '"';

	/* Open the caption <div>. */
	$output = '<figure' . $attributes .'>';

	/* Allow shortcodes for the content the caption was created for. */
	$output .= do_shortcode( $content );

	/* Append the caption text. */
	$output .= '<figcaption>' . $attr['caption'] . '</figcaption>';

	/* Close the caption </div>. */
	$output .= '</figure>';

	/* Return the formatted, clean caption. */
	return $output;
	
} /* end reverie_cleaner_caption */

// Clean the output of attributes of images in editor. Courtesy of SitePoint. http://www.sitepoint.com/wordpress-change-img-tag-html/
function reverie_image_tag_class($class, $id, $align, $size) {
	$align = 'align' . esc_attr($align);
	return $align;
} /* end reverie_image_tag_class */

// Remove width and height in editor, for a better responsive world.
function reverie_image_editor($html, $id, $alt, $title) {
	return preg_replace(array(
			'/\s+width="\d+"/i',
			'/\s+height="\d+"/i',
			'/alt=""/i'
		),
		array(
			'',
			'',
			'',
			'alt="' . $title . '"'
		),
		$html);
} /* end reverie_image_editor */

// Wrap images with figure tag. Courtesy of Interconnectit http://interconnectit.com/2175/how-to-remove-p-tags-from-images-in-wordpress/
function reverie_img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<figure>$1</figure>', $pee);
    return $pee;
} /* end reverie_img_unautop */
?>
