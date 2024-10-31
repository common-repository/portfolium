<?php
/*
Plugin Name: Portfolium
Plugin URI:  https://wordpress.org/plugins/portfolium/
Description: Embed projects, skills and experiences from Portfolium.com into your WordPress site.
Version:     1.4
Author:      Rami Yushuvaev
Author URI:  https://GenerateWP.com/
Text Domain: portfolium
*/



/*
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.2
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Include plugin files
 */
include_once ( plugin_dir_path( __FILE__ ) . 'includes/i18n.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/oembed.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/shortcode.php' );
