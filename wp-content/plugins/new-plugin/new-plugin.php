<?php 
/**
 * Plugin Name: New Plugin
 * Plugin URI: atul@plugin.com
 * Author: Atul
 * Author URI: atul@wp.com
 * version:1.0
 * Lisense: new
 * Lisense URI: new@n.com
 * Text Domain: new@new.com
 */

 //If this file is called directly, abort.
 if(!defined('WPINC')) {
   die;
}

defined( 'WKMP_FILE' ) || define( 'WKMP_FILE', __FILE__ );
defined( 'WKMP_PLUGIN_FILE' ) || define( 'WKMP_PLUGIN_FILE', plugin_dir_path( __FILE__ ) );
defined( 'WKMP_PLUGIN_URL' ) || define( 'WKMP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

  function wpac_plugin_scripts(){
     wp_enqueue_style('wpac-css', WKMP_PLUGIN_URL. 'assets/css/main.css');
     wp_enqueue_script('wpac-js', WKMP_PLUGIN_URL. 'assets/js/main.js');
  }

add_action('wp_enqueue_scripts' , 'wpac_plugin_scripts' );


require plugin_dir_path(__FILE__) .'inc/settings.php';


?>