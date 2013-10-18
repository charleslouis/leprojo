<?php
/*********************
Enqueue the proper CSS
if you use vanilla CSS.
*********************/
function reverie_css_style()
{	
	// normalize stylesheet
	wp_register_style( 'reverie-normalize-stylesheet', get_template_directory_uri() . '/assets/css/normalize.css', array(), '' );
	
	// foundation stylesheet
	wp_register_style( 'reverie-foundation-stylesheet', get_template_directory_uri() . '/assets/css/foundation.css', array(), '' );	
	
	// Register the main style under root directory
	wp_register_style( 'reverie-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
	
	// ie-only style sheet
  wp_register_style( 'reverie-ie-only', get_template_directory_uri() . '/assets/css/ie.css', array(), '' );

	wp_enqueue_style( 'reverie-normalize-stylesheet' );
	wp_enqueue_style( 'reverie-foundation-stylesheet' );
	wp_enqueue_style( 'reverie-stylesheet' );
  wp_enqueue_style(' reverie-ie-only' );
	
}
add_action( 'wp_enqueue_scripts', 'reverie_css_style' );
?>