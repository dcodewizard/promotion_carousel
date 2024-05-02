<?php

/**
 * Plugin Name: Promotion Carousel Block
 * Plugin URI:  ... (Your plugin URI if any)
 * Description: A Gutenberg block for displaying a carousel of promotions.
 * Version:     1.0.0
 * Author:      Your Name
 * Author URI:  ... (Your website URL if any)
 * License:     GPLv2 or later
 * Text Domain: promotion-carousel
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register Promotion Carousel Block
 */
function register_promotion_carousel_block() {
  register_block_type( 'promotion-carousel/promotion-carousel', array(
    'title' => __( 'Promotion Carousel', 'promotion-carousel' ),
    'description' => __( 'Display a carousel of promotions.', 'promotion-carousel' ),
    'category' => 'common',
    'icon' => 'carousel', // Choose an appropriate icon
    'keywords' => array( 'promotion', 'carousel' ),
    'attributes' => array(
      'postsToShow' => array(
        'type' => 'number',
        'default' => 3,
      ),
    ),
    'editorScript' => 'promotion-carousel/promotion-carousel.editor.script.js',
    'editorStyle' => 'promotion-carousel/promotion-carousel.editor.style.css',
    'script' => 'promotion-carousel/promotion-carousel.script.js', // Separate script for frontend functionality
    'style' => 'promotion-carousel/promotion-carousel.style.css',
  ) );
}

add_action( 'init', 'register_promotion_carousel_block' );

// Enqueue editor and frontend scripts and styles (assuming functions.php is your main plugin file)
function promotion_carousel_enqueue_scripts() {
  wp_enqueue_script( 'promotion-carousel-editor', plugin_dir_url( __FILE__ ) . 'promotion-carousel/promotion-carousel.editor.script.js', array( 'wp-blocks', 'wp-editor' ), '1.0.0', true );
  wp_enqueue_style( 'promotion-carousel-editor', plugin_dir_url( __FILE__ ) . 'promotion-carousel/promotion-carousel.editor.style.css', array( 'wp-edit-blocks' ), '1.0.0' );
  wp_enqueue_script( 'promotion-carousel-script', plugin_dir_url( __FILE__ ) . 'promotion-carousel/promotion-carousel.script.js', array( 'swiper' ), '1.0.0', true ); // Add dependency on 'swiper'
  wp_enqueue_style( 'promotion-carousel-style', plugin_dir_url( __FILE__ ) . 'promotion-carousel/promotion-carousel.style.css', array(), '1.0.0' );
  wp_enqueue_style( 'swiper-style', '//unpkg.com/swiper@8/swiper-bundle.min.css' ); // Enqueue Swiper.js styles from CDN
}

add_action( 'wp_enqueue_scripts', 'promotion_carousel_enqueue_scripts' );