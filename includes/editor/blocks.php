<?php
/**
 * wfd-child register blocks.
 * Registering custom blocks used in thois site ( created with ACF Pro ).
 *
 * @package WordPress
 * @subpackage wfd-child
 * @since wfd-child 1.0.0
 */

/**
 * Function to register the fromt page services block.
 *
 * @return void
 */
function wfd_services_block() {
	if ( function_exists( 'acf_register_block_type' ) ) {
		acf_register_block_type(
			array(
				'name'            => 'service',
				'title'           => __( 'Service Blurb' ),
				'description'     => ( 'A custom block for displaying service descriptions' ),
				'render_template' => 'template_parts/blocks/services/block-service.php',
				'enqueue_style'   => get_stylesheet_directory_uri() . '/template_parts/blocks/services/block-service.css',
				'category'        => 'layout',
				'icon'            => 'admin-generic',
				'keywords'        => array( 'layout' ),
			)
		);
	}
}
