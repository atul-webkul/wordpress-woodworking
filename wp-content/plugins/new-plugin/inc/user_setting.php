
<?php
// Add custom column header
function user_id_column_header($columns) {
    $columns['user_id'] = 'User ID';

    return $columns;
}
add_filter('manage_users_columns', 'user_id_column_header');

// Add custom column content
function user_id_column_content( $value, $column_name, $user_id ) {
    if ($column_name === 'user_id') {

        return $user_id;
    }

    return $value;
}
add_filter('manage_users_custom_column', 'user_id_column_content', 10, 3);

?>