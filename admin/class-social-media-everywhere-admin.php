<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       www.luiscabre.com
 * @since      1.0.0
 *
 * @package    Social_Media_Everywhere
 * @subpackage Social_Media_Everywhere/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Social_Media_Everywhere
 * @subpackage Social_Media_Everywhere/admin
 * @author     Luis Cabre <luiscabre.com@gmail.com>
 */
class Social_Media_Everywhere_Admin {

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

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Social_Media_Everywhere_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Social_Media_Everywhere_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/social-media-everywhere-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style('boostrap-css', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Social_Media_Everywhere_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Social_Media_Everywhere_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/social-media-everywhere-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'boostrap-js', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );

	}


	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
    public function my_admin_menu() {
     	add_menu_page( 'Social Media Everywhere Settings', 'Social Media Settings', 'manage_options', 'social-media-everywhere/mainsettings.php', array( $this , 'socialmediaeverywhere_admin_page') , 'dashicons-heart', 250  );
	    // add_submenu_page( 'wp10test/wp10settingsgeneral.php', 'Sub 1', 'WP10 Importer', 'manage_options', 'wp10test/wp10importer.php', array( $this , 'wp10importercall' ));
	}

    public function socialmediaeverywhere_admin_page() {
		require_once 'partials/social-media-everywhere-admin-display.php';
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function register_groupsocialmedia_settings() {
		register_setting( 'groupsocialmedia', 'facebook' );
		register_setting( 'groupsocialmedia', 'twitter' );
		register_setting( 'groupsocialmedia', 'instagram' );
	}  
   
	  



	 
}
