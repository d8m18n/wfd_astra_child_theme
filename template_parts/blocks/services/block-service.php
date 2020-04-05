<?php
/**
 * Render template for the Frontpage Services Block
 *
 * @package WordPress
 * @subpackage Wfd-child
 * @since wfd-child 1.0.0
 */

$class_name = 'homepage-service';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

$service_icon        = get_field( 'service_icon' );
$service_title       = get_field( 'service_title' );
$service_description = get_field( 'service_description' );
$size                = 'full';
$icon                = true;

?>

<div class="<?php echo esc_attr( $class_name ); ?>">
	<?php
	if ( $service_icon ) {
		echo '<div class="service-icon">';
		echo wp_get_attachment_image( $service_icon, $size, $icon );
		echo '</div>';
	}
	if ( $service_title ) {
		echo '<div class="service-heading">';
		echo '<h2 class="service-title">' . esc_html( $service_title ) . '</h2>';
		echo '</div>';
	}
	if ( $service_description ) {
		echo '<div class="service-description">';
		echo wp_kses_post( $service_description );
		echo '</div>';
	}
	?>
</div>
