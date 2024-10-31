<?php
/*
Plugin Name: Prevent XMLRPC
Plugin URI: http://wordpress.org/extend/plugins/prevent-xmlrpc/
Description: 
Author: Nathan Briggs
Version: 1.0
Author URI: http://wpshine.com
*/

add_filter( 'wp_xmlrpc_server_class', 'nath_wp_xmlrpc_server_class' );

function nath_wp_xmlrpc_server_class() {
	return 'nath_wp_xmlrpc_server';
}

require_once(ABSPATH . WPINC . '/class-IXR.php');

class nath_wp_xmlrpc_server extends IXR_Server {

	/**
	 * Register all of the XMLRPC methods that XMLRPC server understands.
	 *
	 * Sets up server and method property. Passes XMLRPC
	 * methods through the 'xmlrpc_methods' filter to allow plugins to extend
	 * or replace XMLRPC methods.
	 *
	 * @since 1.5.0
	 *
	 * @return wp_xmlrpc_server
	 */
	function __construct() {
		$this->methods = array(
			// PingBack
			'pingback.ping' => 'this:pingback_ping',
			'pingback.extensions.getPingbacks' => 'this:pingback_extensions_getPingbacks',

			'demo.sayHello' => 'this:sayHello',
			'demo.addTwoNumbers' => 'this:addTwoNumbers'
		);

		$this->initialise_blog_option_info();
		$this->methods = apply_filters('xmlrpc_methods', $this->methods);
	}

	function serve_request() {
	}
	
	/**
	 * Set up blog options property.
	 *
	 * Passes property through 'xmlrpc_blog_options' filter.
	 *
	 * @since 2.6.0
	 */
	function initialise_blog_option_info() {
		global $wp_version;

		$this->blog_options = array(
		);
	}
}
