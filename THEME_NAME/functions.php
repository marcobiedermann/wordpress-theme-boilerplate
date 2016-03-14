<?php

// Constants
define( 'THEME_NAME', 'THEME_NAME' );
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMAGES', THEMEROOT . '/images' );
define( 'SCRIPTS', THEMEROOT . '/js' );

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption',
) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array(
  'aside',
  'audio',
  'chat',
  'gallery',
  'image',
  'link',
  'quote',
  'status',
  'video',
) );

// Load translation files
load_theme_textdomain( THEME_NAME, get_template_directory() . '/languages' );

// Register Menus
register_nav_menus( array(
  'primary' => __( 'Primary Menu', THEME_NAME )
) );

// Register sidebar
register_sidebar(
  array(
    'id'          => 'sidebar',
    'description' => __( 'Sidebar content', THEME_NAME ),
    'name'        => __( 'Sidebar', THEME_NAME ),
  )
);

// Load Stylesheets
wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0', 'all' );

// Load Scripts
wp_enqueue_script( 'main_script', THEMEROOT . '/js/main.js', array('jquery'), '1.0.0', true );
