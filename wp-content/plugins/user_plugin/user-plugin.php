<?php
/*
Plugin Name: User ID Column
Description: Adds a User ID column to the WP Users table.
Version: 1.0
Author: Atul
Author URI: Your Website
*/

defined( 'WKMP_FILE' ) || define( 'WKMP_FILE', __FILE__ );
defined( 'WKMP_PLUGIN_FILE' ) || define( 'WKMP_PLUGIN_FILE', plugin_dir_path( __FILE__ ) ); 
defined( 'WKMP_PLUGIN_URL' ) || define( 'WKMP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

include WKMP_PLUGIN_FILE .'/inc/autoload.php';
 new Wk_Main_handler();