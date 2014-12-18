<?php

  define('THEMEROOT', get_stylesheet_directory_uri());
  define('IMAGES', THEMEROOT . '/images');
  define('SCRIPTS', THEMEROOT . '/js');

  function register_menus() {
    register_nav_menus(array(
      'nav-main' => __('Main Navigation', 'THEME_NAME')
    ));
  }

  add_action('init', 'register_menus');

?>
