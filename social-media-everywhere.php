<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.luiscabre.com
 * @since             1.0.0
 * @package           Social_Media_Everywhere
 *
 * @wordpress-plugin
 * Plugin Name:       Social Media Everywhere
 * Plugin URI:        www.luiscabre.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Luis Cabre
 * Author URI:        www.luiscabre.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       social-media-everywhere
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
define( 'SOCIAL_MEDIA_EVERYWHERE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-social-media-everywhere-activator.php
 */
function activate_social_media_everywhere() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-social-media-everywhere-activator.php';
	Social_Media_Everywhere_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-social-media-everywhere-deactivator.php
 */
function deactivate_social_media_everywhere() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-social-media-everywhere-deactivator.php';
	Social_Media_Everywhere_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_social_media_everywhere' );
register_deactivation_hook( __FILE__, 'deactivate_social_media_everywhere' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-social-media-everywhere.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_social_media_everywhere() {

	$plugin = new Social_Media_Everywhere();
	$plugin->run();

}
run_social_media_everywhere();
