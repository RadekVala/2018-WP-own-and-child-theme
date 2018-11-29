<?php

require_once('bs4navwalker.php');

function demolayout_enqueue_styles() {

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'demolayout_enqueue_styles');

function demolayout_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'demolayout_enqueue_scripts');

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
    //if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
    //}
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );