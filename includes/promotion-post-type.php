<?php

function create_promotion_post_type() {
  $labels = array(
    'name'                => _x( 'Promotions', 'Post Type General Name', 'literati-example' ),
    'singular_name'       => _x( 'Promotion', 'Post Type Singular Name', 'literati-example' ),
    'menu_name'           => __( 'Promotions', 'literati-example' ),
    'parent_item_colon'   => __( 'Parent Promotion:', 'literati-example' ),
    'all_items'           => __( 'All Promotions', 'literati-example' ),
    'view_item'           => __( 'View Promotion', 'literati-example' ),
    'add_new_item'        => __( 'Add New Promotion', 'literati-example' ),
    'add_new'             => __( 'Add New Promotion', 'literati-example' ),
    'edit_item'           => __( 'Edit Promotion', 'literati-example' ),
    'update_item'         => __( 'Update Promotion', 'literati-example' ),
    'search_items'         => __( 'Search Promotions', 'literati-example' ),
    'not_found'           => __( 'No Promotions found', 'literati-example' ),
    'not_found_in_trash'  => __( 'No Promotions found in Trash', 'literati-example' ),
  );
  $args = array(
    'label'               => __( 'promotion', 'literati-example' ),
    'description'         => __( 'Promotions for your website', 'literati-example' ),
    'public'              => true,
    'can_export'          => true,
    'has_archive'          => true,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'menu_icon'           => 'dashicons-megaphone', // Choose an appropriate icon
    'labels'              => $labels,
    'meta_box_cb'         => 'add_promotion_meta_boxes', // Function to add custom fields meta box
  );
  register_post_type( 'promotion', $args );
}

add_action( 'init', 'create_promotion_post_type' );

// Function to add custom fields meta box
function add_promotion_meta_boxes() {
  add_meta_box(
    'promotion_details',
    __( 'Promotion Details', 'literati-example' ),
    'promotion_meta_box_callback',
    'promotion',
    'normal',
    'high'
  );
}

// Function to render the custom fields meta box
function promotion_meta_box_callback( $post ) {
  wp_nonce_field( 'save_promotion_data', 'promotion_nonce' );

  // Get existing values from meta data (if any)
  $header = get_post_meta( $post->ID, 'promotion_header', true );
  $text = get_post_meta( $post->ID, 'promotion_text', true );
  $button_text = get_post_meta( $post->ID, 'promotion_button_text', true );
  $image_id = get_post_meta( $post->ID, 'promotion_image', true );
}
  ?>