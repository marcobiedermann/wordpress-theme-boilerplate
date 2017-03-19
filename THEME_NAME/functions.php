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
	'caption',
	'comment-form',
	'comment-list',
	'gallery',
	'search-form',
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

// WooCommerce
add_theme_support( 'woocommerce' );

// Remove generator tag
function remove_generator() {
	return '';
}

add_filter( 'the_generator', 'remove_generator' );

// remove version param from any enqueued scripts
function loader_src( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}

	return $src;
}

add_filter( 'style_loader_src', 'loader_src', 9999 );
add_filter( 'script_loader_src', 'loader_src', 9999 );

// Load translation files
load_theme_textdomain( THEME_NAME, get_template_directory() . '/languages' );

// Register Menus
register_nav_menus( array(
	'primary' => __( 'Primary Menu', THEME_NAME )
) );

// Register sidebar
register_sidebar(
	array(
		'id'          => 'sidebar-left',
		'description' => __( 'Left sidebar content', THEME_NAME ),
		'name'        => __( 'Left sidebar', THEME_NAME ),
	)
);

register_sidebar(
	array(
		'id'          => 'sidebar-right',
		'description' => __( 'Right sidebar content', THEME_NAME ),
		'name'        => __( 'Right sidebar', THEME_NAME ),
	)
);

// Load Stylesheets
wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0', 'all' );

// Load Scripts
wp_enqueue_script( 'main_script', THEMEROOT . '/js/main.js', array('jquery'), '1.0.0', true );
