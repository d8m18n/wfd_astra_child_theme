<?php
/**
 * wfd-child blog post navigation - functions that control how we navigate through posts.
 *
 * @package WordPress
 * @subpackage wfd-child
 * @since wfd-child 1.0.0
 */

/**
 * Function to change the Next Post/ Previous post text.
 *
 * @param array $args Arguments for next post / previous post links.
 * @return array
 */
function wfd_change_next_prev_text( $args ) {
	$next_post = get_next_post();
	$prev_post = get_previous_post();
	$next_text = false;
	if ( $next_post ) {
		$next_text = sprintf(
			'%s <span class="ast-right-arrow">→</span>',
			$next_post->post_title
		);
	}
	$prev_text = false;
	if ( $prev_post ) {
		$prev_text = sprintf(
			'<span class="ast-left-arrow">←</span> %s',
			$prev_post->post_title
		);
	}
	$args['next_text'] = $next_text;
	$args['prev_text'] = $prev_text;
	return $args;
}
