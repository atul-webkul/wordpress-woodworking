<?php


 class Wk_Main_handler {

  public function __construct()
 {
    
    
  if(is_admin()){

    new Wk_Admin_Hook();
    new Wk_Admin_Function();  
}
  else{
    new Wk_Admin_Hook();
    new Wk_Admin_Function();
  }


 }






}