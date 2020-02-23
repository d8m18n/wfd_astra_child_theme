<?php
/**
 * Wfd-child enqueue scripts.
 *
 * @package WordPress
 * @subpackage Wfd-child
 * @since wfd-child 1.0.0
 */

/**
 * Enqueue child theme styles and scripts
 *
 * @return void
 */
function wfd_enqueue_styles() {

	$uri = get_theme_file_uri();
	$ver = WFD_CHILD_DEV_MODE ? time() : false;

	wp_register_style( 'astra-child-theme-styles', $uri . '/dist/css/frontend.css', [ 'astra-theme-css' ], $ver, 'all' );

	wp_enqueue_style( 'astra-child-theme-styles' );

	wp_register_script( 'astra-child-theme-bundle', $uri . '/dist/js/frontend.js', [], $ver, true );

	wp_enqueue_script( 'astra-child-theme-bundle' );
	wp_script_add_data( 'astra-child-theme-bundle', 'async', true );

}
