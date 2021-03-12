<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.luiscabre.com
 * @since      1.0.0
 *
 * @package    Social_Media_Everywhere
 * @subpackage Social_Media_Everywhere/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Social_Media_Everywhere
 * @subpackage Social_Media_Everywhere/includes
 * @author     Luis Cabre <luiscabre.com@gmail.com>
 */
class Social_Media_Everywhere_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'social-media-everywhere',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
