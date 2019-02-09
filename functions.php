<?php

  //this function removes the admin bar from theme.
  function my_function_admin_bar(){ return false; }
  add_filter( 'show_admin_bar' , 'my_function_admin_bar');

  function elite_hemp_files() {
    wp_enqueue_script('elite-hemp-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('elite-hemp_styles', get_stylesheet_uri(), NULL, microtime());
  }

  add_action('wp_enqueue_scripts', 'elite_hemp_files');

// This function updates the head with a dynamic title tag.
  function elite_hemp() {
    register_nav_menu('headerMenuLocation', 'Header Menu');
    register_nav_menu('footerMenuOne', 'Footer One');
    register_nav_menu('footerMenuTwo', 'Footer Two');
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'elite_hemp');
 ?>
