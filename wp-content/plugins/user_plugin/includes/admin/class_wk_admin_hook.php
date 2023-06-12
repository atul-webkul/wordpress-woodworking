<?php 



class Wk_Admin_Hook {


public function __construct()
{
    $function_handler = new Wk_Admin_Function();
    add_filter('manage_users_columns', array($function_handler,'user_id_column_header') );
    add_filter('manage_users_custom_column', array($function_handler,'user_id_column_content'), 10, 3);
    
}



}