<?php
/**
 * Wfd-child editor colors.
 * In this file we create color pallettes for both the color picker in the customizer, and the color
 * pallettes offered in blocks.
 *
 * @package    WordPress
 * @subpackage Wfd-child
 * @since      wfd-child 1.0.0
 */

/**
 * Modify astra theme color picker default colors. Edit this file to include your most used colors.
 *
 * @return colors
 */
function wfd_astra_color_palettes() {
	$color_palettes = array(
		'#ffffff', // neutral-00 ( White ).
		'#111111', // neutral.
		'#4a9892', // primary.
		'#2e807a', // primary-darker.
		'#fbf4ae', // primary-lighter.
		'#d84f58', // secondary.
		'#c82c37', // secondary-darker.
		'#e17980', // secondary-lighter.
	);

	return $color_palettes;
}

/**
 * Function to provide Gutenberg editor color pallette for your theme design, and other theme support settings.
 * Probably a few too many colors, trim to suit your project. This uses WebFoundations generic naming convention
 * for colors so we only need to change hex codes.
 * See https://design.lyft.com/re-approaching-color-9e604ba22c88 and https://www.colorbox.io/
 * Editor color pallette css variables are set in src/css/base/variables.css their classes defined
 * in src/css/base/editor-colors.css
 *
 * @return void
 */
function wfd_editor_setup() {
	add_theme_support( 'disable-custom-colors' );
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'primary', 'wfd' ),
				'slug'  => 'primary',
				'color' => '#276777',
			),
			array(
				'name'  => __( 'primary-darker', 'wfd' ),
				'slug'  => 'primary-darker',
				'color' => '#215664',
			),
			array(
				'name'  => __( 'primary-lighter', 'wfd' ),
				'slug'  => 'primary-lighter',
				'color' => '#388a9f',
			),
			array(
				'name'  => __( 'primary-50', 'wfd' ),
				'slug'  => 'primary-50',
				'color' => '#57b0c6',
			),
			array(
				'name'  => __( 'primary-25', 'wfd' ),
				'slug'  => 'primary-25',
				'color' => '#9cd1de',
			),
			array(
				'name'  => __( 'primary-10', 'wfd' ),
				'slug'  => 'primary-10',
				'color' => '#d9edf2',
			),
			array(
				'name'  => __( 'primary-05', 'wfd' ),
				'slug'  => 'primary-05',
				'color' => '#eef7f9',
			),
			array(
				'name'  => __( 'secondary', 'wfd' ),
				'slug'  => 'secondary',
				'color' => '#d84f58',
			),
			array(
				'name'  => __( 'secondary-darker', 'wfd' ),
				'slug'  => 'secondary-darker',
				'color' => '#a7252e',
			),
			array(
				'name'  => __( 'secondary-lighter', 'wfd' ),
				'slug'  => 'secondary-lighter',
				'color' => '#bc2a33',
			),
			array(
				'name'  => __( 'secondary-50', 'wfd' ),
				'slug'  => 'secondary-50',
				'color' => '#e07178',
			),
			array(
				'name'  => __( 'secondary-25', 'wfd' ),
				'slug'  => 'secondary-25',
				'color' => '#e8979c',
			),
			array(
				'name'  => __( 'secondary-10', 'wfd' ),
				'slug'  => 'secondary-10',
				'color' => '#f6d5d7',
			),
			array(
				'name'  => __( 'secondary-05', 'wfd' ),
				'slug'  => 'secondary-05',
				'color' => '#fbeaeb',
			),
			array(
				'name'  => __( 'neutral', 'wfd' ), // Black.
				'slug'  => 'neutral',
				'color' => '#111',
			),
			array(
				'name'  => __( 'neutral-80', 'wfd' ),
				'slug'  => 'neutral-80',
				'color' => '#333',
			),
			array(
				'name'  => __( 'neutral-60', 'wfd' ),
				'slug'  => 'neutral-60',
				'color' => '#666',
			),
			array(
				'name'  => __( 'neutral-40', 'wfd' ),
				'slug'  => 'neutral-40',
				'color' => '#999',
			),
			array(
				'name'  => __( 'neutral-20', 'wfd' ),
				'slug'  => 'neutral-20',
				'color' => '#ddd',
			),
			array(
				'name'  => __( 'neutral-15', 'wfd' ),
				'slug'  => 'neutral-15',
				'color' => '#eee',
			),
			array(
				'name'  => __( 'neutral-10', 'wfd' ),
				'slug'  => 'neutral-10',
				'color' => '#f4f4f4',
			),
			array(
				'name'  => __( 'neutral-05', 'wfd' ),
				'slug'  => 'neutral-05',
				'color' => '#fafafa',
			),
			array(
				'name'  => __( 'neutral-00', 'wfd' ), // White.
				'slug'  => 'neutral-00',
				'color' => '#FFFFFF',
			),
			array(
				'name'  => __( 'ui-red', 'wfd' ),
				'slug'  => 'ui-red',
				'color' => '#DF2A4A',
			),
			array(
				'name'  => __( 'ui-red-darker', 'wfd' ),
				'slug'  => 'ui-red-darker',
				'color' => '#AB2039',
			),
			array(
				'name'  => __( 'ui-red-lighter', 'wfd' ),
				'slug'  => 'ui-red-lighter',
				'color' => '#F83C5D',
			),
			array(
				'name'  => __( 'ui-green', 'wfd' ),
				'slug'  => 'ui-green',
				'color' => '#32A27A',
			),
			array(
				'name'  => __( 'ui-green-darker', 'wfd' ),
				'slug'  => 'ui-green-darker',
				'color' => '#278060',
			),
			array(
				'name'  => __( 'ui-green-lighter', 'wfd' ),
				'slug'  => 'ui-green-lighter',
				'color' => '#4DC69A',
			),
		)
	);
}
