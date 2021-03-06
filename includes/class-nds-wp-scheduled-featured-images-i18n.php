<?php
/**
 * Define the internationalization functionality.
 *
 * @link       https://www.ndigitals.com/
 * @since      1.0.0
 * @package    Nds_Wp_Scheduled_Featured_Images
 * @subpackage Nds_Wp_Scheduled_Featured_Images/includes
 * @author     Tim Nolte <tim.nolte@ndigitals.com>
 */

/**
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @package    Nds_Wp_Scheduled_Featured_Images
 * @subpackage Nds_Wp_Scheduled_Featured_Images/includes
 * @author     Tim Nolte <tim.nolte@ndigitals.com>
 */
class Nds_Wp_Scheduled_Featured_Images_I18n {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'nds-wp-scheduled-featured-images',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
