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
function child_enqueue_styles() {

	$uri = get_theme_file_uri();
	$ver = WFD_CHILD_DEV_MODE ? time() : false;

	wp_register_style( 'astra-child-theme-css', $uri . '/dist/css/style.css', [ 'astra-theme-css' ], $ver, 'all' );

	wp_enqueue_style( 'astra-child-theme-css' );

	wp_register_script( 'astra-child-theme-bundle', $uri . '/dist/js/app.js', [], $ver, true );

	wp_enqueue_script( 'astra-child-theme-bundle' );

}
