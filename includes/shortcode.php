<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.2
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Portfolium Shortcode
 * Register [portfolium id="" width=""] shortcode.
 *
 * @since 1.1
 */
function portfolium_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'id'    => '',
			'width' => '637'
		), $atts
	);

	// Embed code
	$embed_code = '<div class="portfolium-entry-widget" data-id="' . $atts['id'] . '" data-width="' . $atts['width'] . '"></div><script src="https://portfolium.com/js/prod/portfolium.js" async></script>';

	// Return embed code
	return $embed_code;

}
add_shortcode( 'portfolium', 'portfolium_shortcode' );
