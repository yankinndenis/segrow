<?php

/**
 * The plugin bootstrap file
 *
 *
 * @link              yankinndenis@gmail.com
 * @since             1.0.0
 * @package           Segrow
 *
 * @wordpress-plugin
 * Plugin Name:       Segrow CRM
 * Plugin URI:        segrow
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Denis Yankin
 * Author URI:        yankinndenis@gmail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       segrow
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
define( 'SEGROW_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-segrow-activator.php
 */
function activate_segrow() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-segrow-activator.php';
	Segrow_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-segrow-deactivator.php
 */
function deactivate_segrow() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-segrow-deactivator.php';
	Segrow_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_segrow' );
register_deactivation_hook( __FILE__, 'deactivate_segrow' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-segrow.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_segrow() {

	$plugin = new Segrow();
	$plugin->run();
}
run_segrow();


add_action( 'admin_menu', 'Api_Link' );
function Api_Link()
{
 add_menu_page(
 'Segrow CRM',
 'Segrow CRM', 
 'manage_options',
 'segrow/public/partials/segrow-public-display.php' 
 );
}