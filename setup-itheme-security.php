<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.wpthemestore.co.uk
 * @since             1.0.0
 * @package           Setup_Itheme_Security
 *
 * @wordpress-plugin
 * Plugin Name:       Setup iTheme security
 * Plugin URI:        https://www.wpthemestore.co.uk
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ahir Hemant
 * Author URI:        https://www.wpthemestore.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       setup-itheme-security
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
define( 'SETUP_ITHEME_SECURITY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-setup-itheme-security-activator.php
 */
function activate_setup_itheme_security() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-setup-itheme-security-activator.php';
	Setup_Itheme_Security_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-setup-itheme-security-deactivator.php
 */
function deactivate_setup_itheme_security() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-setup-itheme-security-deactivator.php';
	Setup_Itheme_Security_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_setup_itheme_security' );
register_deactivation_hook( __FILE__, 'deactivate_setup_itheme_security' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-setup-itheme-security.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_setup_itheme_security() {

	$plugin = new Setup_Itheme_Security();
	$plugin->run();

}
run_setup_itheme_security();
