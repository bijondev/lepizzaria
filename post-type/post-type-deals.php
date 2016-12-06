<?php
function bms_create_posttype_deals() {

 register_post_type( 'deals',
 // CPT Options
  array(
   'labels' => array(
    'name' => __( 'Deals' ),
    'singular_name' => __( 'Deals' )
   ),
   'public' => true,
   'has_archive' => true,
   'menu_icon' => '',
   'show_ui'               => true,
   'publicaly_queryable' => false,
   'show_in_menu'          => 'fc-order-dashboad',
   'capabilities' => array(
    //'create_posts' => false, // Removes support for the "Add New" function ( use 'do_not_allow' instead of false for multisite set ups )
  ),
   'supports'           => array( 'title', 'editor','thumbnail', 'comments' )
  )
 );

}
// Hooking up our function to theme setup
add_action( 'init', 'bms_create_posttype_deals' );
?>