<?php
add_shortcode( 'wc_login_form', 'separate_login_form' );
  
function separate_login_form() {
    
   //if ( is_admin() ) return;
  // if ( is_user_logged_in() ) return; 
   ob_start();
   
   woocommerce_login_form( array( 
    'redirect' => 'http://localhost/wordpress-allergynz/',
    'hidden'   => false ) );
   return ob_get_clean();
}

add_shortcode( 'wc_reg_form', 'separate_registration_form' );
    
function separate_registration_form() {
//    if ( is_admin() ) return;
//    if ( is_user_logged_in() ) return;
   ob_start();
 
   // NOTE: THE FOLLOWING <FORM></FORM> IS COPIED FROM woocommerce\templates\myaccount\form-login.php
   // IF WOOCOMMERCE RELEASES AN UPDATE TO THAT TEMPLATE, YOU MUST CHANGE THIS ACCORDINGLY
}
//    do_action( 'woocommerce_before_customer_login_form' );
  
?>