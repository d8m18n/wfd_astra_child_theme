<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'WFD_CHILD_DEV_MODE', true );


/**
 * Includes
 */
require_once get_theme_file_path( '/includes/front/enqueue.php' );
require_once get_theme_file_path( '/includes/editor/editor-colors.php' );

/**
 * Hooks
 */
add_action( 'wp_enqueue_scripts', 'wfd_enqueue_styles', 15 );
add_action( 'after_setup_theme', 'wfd_editor_colors', 10 );
add_action( 'after_setup_theme', 'wfd_disable_custom_colors', 10 ); // Comment this line out if you want to allow custom colors in the Gutenberg editor.
add_filter( 'astra_color_palettes', 'wfd_astra_color_palettes', 10 );

