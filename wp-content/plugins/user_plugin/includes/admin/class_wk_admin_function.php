<?php

class Wk_Admin_Function {
     /**
      *Add custom column header 
      */ 
    public function user_id_column_header($columns) {
        $columns['user_id'] = 'User ID';

        return $columns;
    }
   
    /**
     * Add custom column content
     * 
     */
    public function user_id_column_content( $value, $column_name, $user_id ) {
        if ($column_name === 'user_id') {

            return $user_id;
        }

        return $value;
    }
}