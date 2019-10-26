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

/**
 * Hooks
 */
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
