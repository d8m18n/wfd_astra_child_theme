<?php
/**
 * Wfd-child preconnect functions. Functions that add preconnects to required resources.
 *
 * @package WordPress
 * @subpackage Wfd-child
 * @since wfd-child 1.0.0
 */

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function wfd_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'astra-google-fonts', 'enqueued' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}
	return $urls;
}
