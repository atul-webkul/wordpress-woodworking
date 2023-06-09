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
		add_action( 'after_setup_theme', array($this, 'register_my_menu' ) );
		add_action( 'after_setup_theme', array($this, 'featureImage' ) );
		add_action( 'after_setup_theme', array($this, 'headerLogo' ) );	
		add_action( 'after_setup_theme', array($this, 'customBackground' ) );	
		add_action( 'after_setup_theme', array($this, 'widget' ) );	
		add_action( 'after_setup_theme', array($this, 'addExcerpt' ) );	
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
	public function register_my_menu() {
		register_nav_menus( array( 'primary-menu' => 'Top-menu') );
	}

	/**
	 * To add thumbnail option in admin
	 */
	public function featureImage() {
		add_theme_support('post-thumbnails');
	}

	/**
	 * To add Header Image
	 */
	public function headerLogo()
	{
		add_theme_support('custom-header');
	}

	/**
	 * To add widget in admin
	 */
	public function widget(){
		register_sidebar(
			array(
				'name' => 'Sidebar',
				'id' => 'Sidebar'
			)
			);
	}
	/**
	 * To add custom background image
	 */
	public function customBackground() {
		add_theme_support('custom-background');
	}

	/**
	 * To Add Excerpt option
	 */
	public function addExcerpt() {
		add_post_type_support('page', 'excerpt');
	}

}

new wood_theme_handler();

?>