<?php
/**
 * Wfd-child editor colors.
 * In this file we create color pallettes for both the color picker in the customizer, and the color
 * pallettes offered in blocks.
 *
 * @package WordPress
 * @subpackage Wfd-child
 * @since wfd-child 1.0.0
 */

/**
 * Function to modify astra theme color picker default colors. Edit this file to include your most used colors.
 *
 * @return void
 */
function wfd_astra_color_palettes() {

	$color_palettes = array(
		'#ffffff', // grey-00 ( White )
		'#020202', // grey-100
		'#9F1401', // primary-90
		'#C72C05', // primary-70
		'#D73E0F', // primary-60
		'#063746', // secondary-80
		'#136671', // secondary-70
		'#259296', // secondary-60
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
				'name'  => __( 'primary-100', 'wfd' ),
				'slug'  => 'primary-100',
				'color' => '#8A0B00',
			),
			array(
				'name'  => __( 'primary-90', 'wfd' ),
				'slug'  => 'primary-90',
				'color' => '#9F1401',
			),
			array(
				'name'  => __( 'primary-80', 'wfd' ),
				'slug'  => 'primary-80',
				'color' => '#B52003',
			),
			array(
				'name'  => __( 'primary-70', 'wfd' ),
				'slug'  => 'primary-70',
				'color' => '#C72C05',
			),
			array(
				'name'  => __( 'primary-60', 'wfd' ),
				'slug'  => 'primary-60',
				'color' => '#D73E0F',
			),
			array(
				'name'  => __( 'primary-50', 'wfd' ),
				'slug'  => 'primary-50',
				'color' => '#E45121',
			),
			array(
				'name'  => __( 'primary-40', 'wfd' ),
				'slug'  => 'primary-40',
				'color' => '#ED673B',
			),
			array(
				'name'  => __( 'primary-30', 'wfd' ),
				'slug'  => 'primary-30',
				'color' => '#F4835D',
			),
			array(
				'name'  => __( 'primary-20', 'wfd' ),
				'slug'  => 'primary-20',
				'color' => '#F9A386',
			),
			array(
				'name'  => __( 'primary-10', 'wfd' ),
				'slug'  => 'primary-10',
				'color' => '#FDC7B5',
			),
			array(
				'name'  => __( 'primary-05', 'wfd' ),
				'slug'  => 'primary-05',
				'color' => '#FED8CD',
			),
			array(
				'name'  => __( 'primary-00', 'wfd' ),
				'slug'  => 'primary-00',
				'color' => '#FFEBE4',
			),
			array(
				'name'  => __( 'secondary-100', 'wfd' ),
				'slug'  => 'secondary-100',
				'color' => '#060508',
			),
			array(
				'name'  => __( 'secondary-90', 'wfd' ),
				'slug'  => 'secondary-90',
				'color' => '#0F1227',
			),
			array(
				'name'  => __( 'secondary-80', 'wfd' ),
				'slug'  => 'secondary-80',
				'color' => '#063746',
			),
			array(
				'name'  => __( 'secondary-70', 'wfd' ),
				'slug'  => 'secondary-70',
				'color' => '#136671',
			),
			array(
				'name'  => __( 'secondary-60', 'wfd' ),
				'slug'  => 'secondary-60',
				'color' => '#259296',
			),
			array(
				'name'  => __( 'secondary-50', 'wfd' ),
				'slug'  => 'secondary-50',
				'color' => '#3DB3B1',
			),
			array(
				'name'  => __( 'secondary-40', 'wfd' ),
				'slug'  => 'secondary-40',
				'color' => '#58CAC6',
			),
			array(
				'name'  => __( 'secondary-30', 'wfd' ),
				'slug'  => 'secondary-30',
				'color' => '#77DDDA',
			),
			array(
				'name'  => __( 'secondary-20', 'wfd' ),
				'slug'  => 'secondary-20',
				'color' => '#9AE9EA',
			),
			array(
				'name'  => __( 'secondary-10', 'wfd' ),
				'slug'  => 'secondary-10',
				'color' => '#BEF1F5',
			),
			array(
				'name'  => __( 'secondary-05', 'wfd' ),
				'slug'  => 'secondary-05',
				'color' => '#D9F5FA',
			),
			array(
				'name'  => __( 'secondary-00', 'wfd' ),
				'slug'  => 'secondary-00',
				'color' => '#F6FDFF',
			),
			array(
				'name'  => __( 'grey-100', 'wfd' ), // Black
				'slug'  => 'grey-100',
				'color' => '#020202',
			),
			array(
				'name'  => __( 'grey-90', 'wfd' ),
				'slug'  => 'grey-90',
				'color' => '#080808',
			),
			array(
				'name'  => __( 'grey-80', 'wfd' ),
				'slug'  => 'grey-80',
				'color' => '#181818',
			),
			array(
				'name'  => __( 'grey-70', 'wfd' ),
				'slug'  => 'grey-70',
				'color' => '#323232',
			),
			array(
				'name'  => __( 'grey-60', 'wfd' ),
				'slug'  => 'grey-60',
				'color' => '#585858',
			),
			array(
				'name'  => __( 'grey-50', 'wfd' ),
				'slug'  => 'grey-50',
				'color' => '#848484',
			),
			array(
				'name'  => __( 'grey-40', 'wfd' ),
				'slug'  => 'grey-40',
				'color' => '#AEAEAE',
			),
			array(
				'name'  => __( 'grey-30', 'wfd' ),
				'slug'  => 'grey-30',
				'color' => '#D1D1D1',
			),
			array(
				'name'  => __( 'grey-20', 'wfd' ),
				'slug'  => 'grey-20',
				'color' => '#E9E9E9',
			),
			array(
				'name'  => __( 'grey-10', 'wfd' ),
				'slug'  => 'grey-10',
				'color' => '#F7F7F7',
			),
			array(
				'name'  => __( 'grey-05', 'wfd' ),
				'slug'  => 'grey-05',
				'color' => '#FBFBFB',
			),
			array(
				'name'  => __( 'grey-00', 'wfd' ), // White
				'slug'  => 'grey-00',
				'color' => '#FFFFFF',
			),
		)
	);
}
