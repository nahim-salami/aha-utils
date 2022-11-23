<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/nahim-salami
 * @since             1.0.0
 * @package           Aha_Utils
 *
 * @wordpress-plugin
 * Plugin Name:       Ahime Admin Utils
 * Plugin URI:        https://ahi-me.com
 * Description:       This is a tool dedicated to wordpress plugin developers. It allows you to add fields and different interface.
 * Version:           1.0.0
 * Author:            Nahim SALAMI
 * Author URI:        https://https://github.com/nahim-salami
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       aha-utils
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
define( 'AHA_UTILS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-aha-utils-activator.php
 */
function activate_aha_utils() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aha-utils-activator.php';
	Aha_Utils_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-aha-utils-deactivator.php
 */
function deactivate_aha_utils() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aha-utils-deactivator.php';
	Aha_Utils_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_aha_utils' );
register_deactivation_hook( __FILE__, 'deactivate_aha_utils' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-aha-utils.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_aha_utils() {

	$plugin = new Aha_Utils();
	$plugin->run();

}
run_aha_utils();
