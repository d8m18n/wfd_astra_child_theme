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
define( 'CHILD_DEV_MODE', true );


/**
 * Includes
 */
require_once get_theme_file_path( '/includes/front/enqueue.php' );
require_once get_theme_file_path( '/includes/editor/editor-setup.php' );
require_once get_theme_file_path( '/includes/front/async-defer.php' );
require_once get_theme_file_path( '/includes/front/blog-navigation.php' );
require_once get_theme_file_path( '/includes/front/seofunctions.php' );
require_once get_theme_file_path( '/classes/class-twentynineteen-svg-icons.php' );
require_once get_theme_file_path( '/includes/front/icon-functions.php' );
require_once get_theme_file_path( '/includes/front/social-nav.php' );
require_once get_theme_file_path( '/includes/front/preconnects.php' );

/**
 * Hooks
 */
add_action( 'wp_enqueue_scripts', 'wfd_enqueue_styles', 10 );
add_action( 'after_setup_theme', 'wfd_editor_setup', 15 );
add_action( 'init', 'wfd_register_social_menu' );
add_action( 'astra_footer_before', 'wfd_add_social_links' );
add_filter( 'script_loader_tag', 'wfd_filter_script_loader_tag', 10, 2 );
add_filter( 'script_loader_tag', 'wfd_defer_parsing_of_js', 11, 1 );
add_filter( 'wp_resource_hints', 'wfd_resource_hints', 10, 2 );
add_filter( 'astra_color_palettes', 'wfd_astra_color_palettes', 15 );
add_filter( 'astra_single_post_navigation', 'wfd_change_next_prev_text', 10, 1 );
add_filter( 'get_avatar', 'wfd_gravatar_alt' );
