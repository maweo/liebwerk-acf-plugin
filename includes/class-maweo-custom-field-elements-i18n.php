<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.maweo.at
 * @since      1.0.0
 *
 * @package    Maweo_Custom_Field_Elements
 * @subpackage Maweo_Custom_Field_Elements/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Maweo_Custom_Field_Elements
 * @subpackage Maweo_Custom_Field_Elements/includes
 * @author     MAWEO <office@maweo.at>
 */
class Maweo_Custom_Field_Elements_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'maweo-custom-field-elements',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
