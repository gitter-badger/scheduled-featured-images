<?php
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @link       https://www.ndigitals.com/
 * @since      1.0.0
 * @package    NDS_WP_ScheduledFeaturedImages
 * @subpackage NDS_WP_ScheduledFeaturedImages\Site
 * @author     Tim Nolte <tim.nolte@ndigitals.com>
 */

namespace NDS_WP_ScheduledFeaturedImages\Site;

/**
 * Class that handles all of the public-facing functionality of the plugin.
 *
 * @package    NDS_WP_ScheduledFeaturedImages
 * @subpackage NDS_WP_ScheduledFeaturedImages\Site
 * @author     Tim Nolte <tim.nolte@ndigitals.com>
 */
class Loader {

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
	 * @param      string $plugin_name       The name of the plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Scheduled_Featured_Images_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Scheduled_Featured_Images_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/public.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Scheduled_Featured_Images_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Scheduled_Featured_Images_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/public.min.js', array( 'jquery' ), $this->version, false );

	}

}
