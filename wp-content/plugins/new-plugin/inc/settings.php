<?php 
function wpac_settings_page_html(){
   if(!is_admin()){
      return;
   }
?>
<div class="wrap">
   <h1><?php echo esc_html(get_admin_page_title())?></h1>
   <form action="actions.php" method="post">
   <?php
    settings_fields('wpac-setttings');
    do_settings_sections('wpac-settings');
    submit_button('save Changes')   ?>
   </form>
</div>
<?php
}

function wpac_register_menu_page(){
// wp_enqueue_scripts
add_menu_page('wpac Like System', 'wpac Settings', 'manage_options', 'wpac-settings', 'wpac_settings_page_html', 'dashicons-admin-tools',30);
}
add_action('admin_menu', 'wpac_register_menu_page');


function wpac_plugin_settings(){
   register_setting('wpac-setttings', 'wpac_like_label');
   register_setting('wpac-setttings', 'wpac_dislike_label');

   add_settings_section('wpac_label_settings_section', 'wpac Button Label', 'wpac_plugin_settings_section_cb', 'wpac-settings');

   add_settings_field('wpac_like_label_field', 'Like Button Label', 'wpac_like_lablel_field_cb' ,'wpac-settings','wpac_label_settings_section',);

   add_settings_field('wpac_disike_label_field', 'Dislike Button Label', 'wpac_dislike_lablel_field_cb' ,'wpac-settings','wpac_label_settings_section',);
}
add_action('admin_init', 'wpac_plugin_settings');

function wpac_plugin_settings_section_cb(){
   echo '<p>Define Button Label</p>';
}


function wpac_like_lablel_field_cb(){
   	// get the value of the setting we've registered with register_setting()
	$setting = get_option('wpac_like_label');
	// output the field
	?>
	<input type="text" name="wpac_like_label" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
    <?php

}

function wpac_dislike_lablel_field_cb(){
   // get the value of the setting we've registered with register_setting()
$setting = get_option('wpac_dislike_label');
// output the field
?>
<input type="text" name="wpac_dislike_label" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
 <?php

}
?>