<?php
defined( 'WKMP_FILE' ) || define( 'WKMP_FILE', __FILE__ );
defined( 'WKMP_PLUGIN_FILE' ) || define( 'WKMP_PLUGIN_FILE', plugin_dir_path( __FILE__ ) );
defined( 'WKMP_PLUGIN_URL' ) || define( 'WKMP_PLUGIN_URL', get_template_directory_uri( ) );
do_action('wp_enqueue_scripts');


/**
 *To make functions for woodworking 
 */
class wood_theme_handler {

	/**
	 * constructor methods for classes
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array($this, 'wpdocs_theme_name_scripts') );
		register_nav_menus(array('primary-menu' => 'Top-menu'));
		add_theme_support('post-thumbnails');
		add_theme_support('custom-header');
		
	}

	/**
	 * Add script and style
	 */
	public function wpdocs_theme_name_scripts() {
		wp_enqueue_style( 'wood-script', WKMP_PLUGIN_URL.'/assets/css/front.css' );
	}
	
	/**
	 * To add menu
	 */
	

}

new wood_theme_handler();

?>