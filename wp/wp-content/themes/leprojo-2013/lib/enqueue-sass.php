<?php
/*********************
Enqueue the proper CSS
if you use Sass.
*********************/
function reverie_sass_style()
{
	// Register the main style
	wp_register_style( 'fonts', 'http://fast.fonts.net/cssapi/1769b8a5-1097-4dd8-93dc-391a479703e1.css', array(), '', 'all' );
	wp_enqueue_style( 'fonts' );

	// Register the main style
	wp_register_style( 'reverie-stylesheet', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );
	wp_enqueue_style( 'reverie-stylesheet' );
	
	if ( USE_IE_ONLY_STYLE_SHEET ) {
	  // ie-only style sheet
	  wp_register_style( 'use-ie-only-style-sheet', get_template_directory_uri() . '/assets/css/ie.css', array(), '' );
	  wp_enqueue_style('use-ie-only-style-sheet');
	}
}
add_action( 'wp_enqueue_scripts', 'reverie_sass_style' );
?>