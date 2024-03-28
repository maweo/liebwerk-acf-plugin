<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.maweo.at
 * @since      1.0.0
 *
 * @package    Maweo_Custom_Field_Elements
 * @subpackage Maweo_Custom_Field_Elements/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Maweo_Custom_Field_Elements
 * @subpackage Maweo_Custom_Field_Elements/admin
 * @author     MAWEO <office@maweo.at>
 */
class Maweo_Custom_Field_Elements_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function register_custom_fields() {
		if (!class_exists('ACF')) {
			return;
		}

		require_once('fields/element-group.php');
	}

	public function register_custom_post_type_fields() {
		if (!class_exists('ACF')) {
			return;
		}

		require_once('fields/cpt.php');
	}

	public function register_option_fields() {
		if (!class_exists('ACF')) {
			return;
		}
		
		require_once('fields/options.php');
	}
}
