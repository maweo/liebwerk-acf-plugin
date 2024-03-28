<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.maweo.at
 * @since             1.0.0
 * @package           Maweo_Custom_Field_Elements
 *
 * @wordpress-plugin
 * Plugin Name:       MAWEO: WordPress Custom Field Elements
 * Plugin URI:        https://www.maweo.at
 * Description:       Plugin to enable MAWEO-sections for Advancd Custom Fields in a WordPress-Install 
 * Version:           1.0.0
 * Author:            MAWEO
 * Author URI:        https://www.maweo.at
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       maweo-custom-field-elements
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MAWEO_CUSTOM_FIELD_ELEMENTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-maweo-custom-field-elements-activator.php
 */
function activate_maweo_custom_field_elements() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-maweo-custom-field-elements-activator.php';
	Maweo_Custom_Field_Elements_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-maweo-custom-field-elements-deactivator.php
 */
function deactivate_maweo_custom_field_elements() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-maweo-custom-field-elements-deactivator.php';
	Maweo_Custom_Field_Elements_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_maweo_custom_field_elements' );
register_deactivation_hook( __FILE__, 'deactivate_maweo_custom_field_elements' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-maweo-custom-field-elements.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_maweo_custom_field_elements() {

	$plugin = new Maweo_Custom_Field_Elements();
	$plugin->run();

}
run_maweo_custom_field_elements();
