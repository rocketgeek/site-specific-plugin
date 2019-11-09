<?php
/**
 * Plugin Name:       My Site Specific Custom Code
 * Description:       A handy little plugin to contain your site's customisation snippets.
 * Plugin URI:        http://github.com/rocketgeek/site-specific-plugin
 * Version:           1.0.0
 * Author:            RocketGeek
 * Author URI:        https://rocketgeek.com/
 * Requires at least: 3.0.0
 * Tested up to:      5.4
 *
 * @package    My_Site_Customizations
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Main Theme_Customisations Class
 *
 * @class My_Site_Customizations
 * @version	1.0.0
 * @since 1.0.0
 * @package	My_Site_Customizations
 */
final class My_Site_Customizations {

	/**
	 * Initialize the plugin.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'enqueue' ), -1 );
		require_once( 'custom/functions.php' );
	}

	/**
	 * Setup all the things
	 */
	public function enqueue() {
		add_action( 'wp_enqueue_scripts', array( $this, 'custom_css' ), 999 );
		add_action( 'wp_enqueue_scripts', array( $this, 'custom_js' ) );
	}

	/**
	 * Enqueue custom CSS
	 *
	 * @return void
	 */
	public function custom_css() {
		wp_enqueue_style( 'custom-css', plugins_url( '/custom/style.css', __FILE__ ) );
	}

	/**
	 * Enqueue custom Javascript
	 *
	 * @return void
	 */
	public function custom_js() {
		wp_enqueue_script( 'custom-js', plugins_url( '/custom/custom.js', __FILE__ ), array( 'jquery' ) );
	}

} // End Class

/**
 * The 'main' function
 *
 * @return void
 */
function my_site_custom_plugin() {
	global $my_custom;
	$my_custom = new My_Site_Customizations();
}

/**
 * Initialize the plugin
 */
add_action( 'plugins_loaded', 'my_site_custom_plugin' );
