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
 * Portfolium oEmbed
 * Register oEmbed provider.
 *
 * @since 1.0
 */
function portfolium_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www\.)?portfolium.com/entry/.*#i', 'https://api.portfolium.com/oembed/', true );

}
add_action( 'init', 'portfolium_oembed_provider' );
