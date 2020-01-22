<?php
/**
 * Adds async/defer attributes to enqueued / registered scripts.
 *
 * If #12009 lands in WordPress, this function can no-op since it would be handled in core.
 *
 * @link https://core.trac.wordpress.org/ticket/12009
 * @param string $tag    The script tag.
 * @param string $handle The script handle.
 * @return array
 */
function wfd_filter_script_loader_tag( $tag, $handle ) {

	foreach ( array( 'async', 'defer' ) as $attr ) {
		if ( ! wp_scripts()->get_data( $handle, $attr ) ) {
			continue;
		}

		// Prevent adding attribute when already added in #12009.
		if ( ! preg_match( ":\s$attr(=|>|\s):", $tag ) ) {
			$tag = preg_replace( ':(?=></script>):', " $attr", $tag, 1 );
		}

		// Only allow async or defer, not both.
		break;
	}

	return $tag;
}

/**
 * We can't control the scripts loaded by plugins so this function adds defer
 * to any scripts that are not specifically excluded or where we've added async as above.
 * See https://www.youtube.com/watch?v=PlTG5I6Qi-o
 * This 'should' assist with avoiding render blocking and keep our site loading quickly.
 *
 * @param [type] $url
 * @return $url
 */
function wfd_defer_parsing_of_js( $url ) {
	if ( is_admin() ) {
		return $url; // don't break WP Admin
	}
	if ( false === strpos( $url, '.js' ) ) {
		return $url;
	}
	if ( strpos( $url, 'jquery.js' ) ) {
		return $url;
	}
	// don't change our bundle (frontend.js) as we've added async to this already - see above function.
	if ( strpos( $url, 'frontend.js' ) ) {
		return $url;
	}
	return str_replace( 'src', 'defer src', $url );
}

