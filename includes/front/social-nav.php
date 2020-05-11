<?php
/**
 * Wfd-child Social Navigation with SVG Icons.
 *
 * @package WordPress
 * @subpackage Wfd-child
 * @since wfd-child 1.0.0
 */

/**
 * Register Social Navigation Menu.
 */
function wfd_register_social_menu() {
	register_nav_menus(
		array(
			'social' => __( 'Social Links Menu', 'wfd' ),
		)
	);
}

function wfd_add_social_links() {
	if ( has_nav_menu( 'social' ) ) {
		?>
		<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'wfd' ); ?>">
		<?php

		wp_nav_menu(
			array(
				'theme_location' => 'social',
				'menu_class'     => 'social-links-menu',
				'link_before'    => '<span class="screen-reader-text">',
				'link_after'     => '</span>' . wfd_get_social_icon_svg( 'link' ),
				'depth'          => 1,
			)
		)
		?>
		</nav><!-- .social-navigation -->
		<?php
	}
}
