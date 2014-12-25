<?php

  define( 'THEMEROOT', get_stylesheet_directory_uri() );
  define( 'IMAGES', THEMEROOT . '/images' );
  define( 'SCRIPTS', THEMEROOT . '/js' );

  function register_menus() {
    register_nav_menus( array(
      'nav-main' => __( 'Main Navigation', 'THEME_NAME' )
    ) );
  }

  add_action( 'init', 'register_menus' );

  if ( function_exists( 'register_sidebar') ) {

    register_sidebar(
      array(
        'name' => __( 'Right Sidebar', 'THEME_NAME' ),
        'id' => 'sidebar-right',
        'description' => __( 'Right Sidebar content', 'THEME_NAME' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>'
      )
    );

  }

?>
