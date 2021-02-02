<?php

//version number
define( 'GENERATE_VERSION', '0.1.0' );

//Enqueue scripts and styles.
function wpstarter_scripts() {

  //stylesheet
  wp_enqueue_style( 'wpstarter-style', get_template_directory_uri() . "/style.css", array(), _S_VERSION );

  //nav
  wp_enqueue_script( 'wpstarter-nav', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
  wp_enqueue_style( 'wpstarter-style-nav', get_template_directory_uri() . "/css/nav.css", array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'wpstarter_scripts' );


  function wpstarter_setup() {
  // adds theme support for various features
  add_theme_support( 'title-tag' ); //change <title>
  add_theme_support( 'post-thumbnails' );

  }
add_action( 'after_setup_theme', 'wpstarter_setup' );


//removes the admin bar during development 
add_filter('show_admin_bar', '__return_false');