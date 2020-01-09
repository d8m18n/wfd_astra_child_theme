<?php
/**
 * Wfd-child editor colors.
 * In this file we create color pallettes for both the color picker in the customizer, and the color  pallettes offered in blocks.
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
		'#ffffff', // Grey00 ( White )
		'#020202', // Grey100
		'#B52003', // Primary80
		'#C72C05', // Primary70
		'#D73E0F', // Primary60
		'#063746', // Secondary80
		'#136671', // Secondary70
		'#259296', // Secondary60
	);

	return $color_palettes;
}

/**
 * Function to provide Gutenberg editor color pallette for your theme design, and other theme support settings. Probably a few too many colors, trim to suit your project. This uses WebFoundations naming convention for colors so we only need to change hex codes.
 * See https://design.lyft.com/re-approaching-color-9e604ba22c88 and https://www.colorbox.io/
 *
 * @return void
 */
function wfd_editor_setup() {
	add_theme_support( 'disable-custom-colors' );
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'primary100', 'wfd' ),
				'slug'  => 'primary100',
				'color' => '#8A0B00',
			),
			array(
				'name'  => __( 'primary90', 'wfd' ),
				'slug'  => 'primary90',
				'color' => '#9F1401',
			),
			array(
				'name'  => __( 'primary80', 'wfd' ),
				'slug'  => 'primary80',
				'color' => '#B52003',
			),
			array(
				'name'  => __( 'primary70', 'wfd' ),
				'slug'  => 'primary70',
				'color' => '#C72C05',
			),
			array(
				'name'  => __( 'primary60', 'wfd' ),
				'slug'  => 'primary60',
				'color' => '#D73E0F',
			),
			array(
				'name'  => __( 'primary50', 'wfd' ),
				'slug'  => 'primary50',
				'color' => '#E45121',
			),
			array(
				'name'  => __( 'primary40', 'wfd' ),
				'slug'  => 'primary40',
				'color' => '#ED673B',
			),
			array(
				'name'  => __( 'primary30', 'wfd' ),
				'slug'  => 'primary30',
				'color' => '#F4835D',
			),
			array(
				'name'  => __( 'primary20', 'wfd' ),
				'slug'  => 'primary20',
				'color' => '#F9A386',
			),
			array(
				'name'  => __( 'primary10', 'wfd' ),
				'slug'  => 'primary10',
				'color' => '#FDC7B5',
			),
			array(
				'name'  => __( 'primary05', 'wfd' ),
				'slug'  => 'primary05',
				'color' => '#FED8CD',
			),
			array(
				'name'  => __( 'primary00', 'wfd' ),
				'slug'  => 'primary00',
				'color' => '#FFEBE4',
			),
			array(
				'name'  => __( 'secondary100', 'wfd' ),
				'slug'  => 'secondary100',
				'color' => '#060508',
			),
			array(
				'name'  => __( 'secondary90', 'wfd' ),
				'slug'  => 'secondary90',
				'color' => '#0F1227',
			),
			array(
				'name'  => __( 'secondary80', 'wfd' ),
				'slug'  => 'secondary80',
				'color' => '#063746',
			),
			array(
				'name'  => __( 'secondary70', 'wfd' ),
				'slug'  => 'secondary70',
				'color' => '#136671',
			),
			array(
				'name'  => __( 'secondary60', 'wfd' ),
				'slug'  => 'secondary60',
				'color' => '#259296',
			),
			array(
				'name'  => __( 'secondary50', 'wfd' ),
				'slug'  => 'secondary50',
				'color' => '#3DB3B1',
			),
			array(
				'name'  => __( 'secondary40', 'wfd' ),
				'slug'  => 'secondary40',
				'color' => '#58CAC6',
			),
			array(
				'name'  => __( 'secondary30', 'wfd' ),
				'slug'  => 'secondary30',
				'color' => '#77DDDA',
			),
			array(
				'name'  => __( 'secondary20', 'wfd' ),
				'slug'  => 'secondary20',
				'color' => '#9AE9EA',
			),
			array(
				'name'  => __( 'secondary10', 'wfd' ),
				'slug'  => 'secondary10',
				'color' => '#BEF1F5',
			),
			array(
				'name'  => __( 'secondary05', 'wfd' ),
				'slug'  => 'secondary05',
				'color' => '#D9F5FA',
			),
			array(
				'name'  => __( 'secondary00', 'wfd' ),
				'slug'  => 'secondary00',
				'color' => '#F6FDFF',
			),
			array(
				'name'  => __( 'grey100', 'wfd' ), // Black
				'slug'  => 'grey100',
				'color' => '#020202',
			),
			array(
				'name'  => __( 'grey90', 'wfd' ),
				'slug'  => 'grey90',
				'color' => '#080808',
			),
			array(
				'name'  => __( 'grey80', 'wfd' ),
				'slug'  => 'grey80',
				'color' => '#181818',
			),
			array(
				'name'  => __( 'grey70', 'wfd' ),
				'slug'  => 'grey70',
				'color' => '#323232',
			),
			array(
				'name'  => __( 'grey60', 'wfd' ),
				'slug'  => 'grey60',
				'color' => '#585858',
			),
			array(
				'name'  => __( 'grey50', 'wfd' ),
				'slug'  => 'grey50',
				'color' => '#848484',
			),
			array(
				'name'  => __( 'grey40', 'wfd' ),
				'slug'  => 'grey40',
				'color' => '#AEAEAE',
			),
			array(
				'name'  => __( 'grey30', 'wfd' ),
				'slug'  => 'grey30',
				'color' => '#D1D1D1',
			),
			array(
				'name'  => __( 'grey20', 'wfd' ),
				'slug'  => 'grey20',
				'color' => '#E9E9E9',
			),
			array(
				'name'  => __( 'grey10', 'wfd' ),
				'slug'  => 'grey10',
				'color' => '#F7F7F7',
			),
			array(
				'name'  => __( 'grey05', 'wfd' ),
				'slug'  => 'grey05',
				'color' => '#FBFBFB',
			),
			array(
				'name'  => __( 'grey00', 'wfd' ), // White
				'slug'  => 'grey00',
				'color' => '#FFFFFF',
			),
		)
	);
}

/**
 * Experimental feature - not yet working
 *
 * @return void
 */
function wfd_editor_gradients() {
	add_theme_support(
		'__experimental-editor-gradient-presets',
		array(
			array(
				'name'     => __( 'Vivid cyan blue to vivid purple', 'themeLangDomain' ),
				'gradient' => 'linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)',
				'slug'     => 'vivid-cyan-blue-to-vivid-purple',
			),
			array(
				'name'     => __( 'Vivid green cyan to vivid cyan blue', 'themeLangDomain' ),
				'gradient' => 'linear-gradient(135deg,rgba(0,208,132,1) 0%,rgba(6,147,227,1) 100%)',
				'slug'     => 'vivid-green-cyan-to-vivid-cyan-blue',
			),
			array(
				'name'     => __( 'Light green cyan to vivid green cyan', 'themeLangDomain' ),
				'gradient' => 'linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%)',
				'slug'     => 'light-green-cyan-to-vivid-green-cyan',
			),
			array(
				'name'     => __( 'Luminous vivid amber to luminous vivid orange', 'themeLangDomain' ),
				'gradient' => 'linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%)',
				'slug'     => 'luminous-vivid-amber-to-luminous-vivid-orange',
			),
			array(
				'name'     => __( 'Luminous vivid orange to vivid red', 'themeLangDomain' ),
				'gradient' => 'linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%)',
				'slug'     => 'luminous-vivid-orange-to-vivid-red',
			),
		)
	);
}
