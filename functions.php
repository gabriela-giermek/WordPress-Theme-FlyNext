<?php
/**
 * FlyNext functions and definitions
 *
 * @package FlyNext
 * @since FlyNext 1.0
 */

 if ( ! function_exists( 'flynext_setup' ) ) {
	function flynext_setup() {
		/**
		 * Enable support for document title tag.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
 }
 add_action( 'after_setup_theme', 'flynext_setup' );


if ( ! function_exists( 'flynext_scripts' ) ) {
/**
 * Enqueue styles and scripts.
 *
 * @since FlyNext 1.0
 * @return void
 */

	function flynext_scripts() {
		wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/style.css', false, time(), 'all' );
		wp_enqueue_style( 'default', get_stylesheet_uri(), false, time(), 'all' );
		
		wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/js/main.js', false, time(), true );
	}
}
add_action( 'wp_enqueue_scripts', 'flynext_scripts' );


/**
 * Allow SVG
 */
function svg_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';

  return $mimes;
}
add_filter('upload_mimes', 'svg_mime_types');


/**
 * Custom functions for the theme
 */
require get_template_directory() . '/inc/acf-blocks.php';



/**
 * Template parts
 */
require_once( 'template-parts/theme-settings/functions.php' );