<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title(''); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">

  <link rel="shortcut icon" href="<?= IMAGES ?>/favicon.ico">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">

  <header class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

    <div class="container">

      HEADER

      <div class="logo">

        <a href="<?= home_url(); ?>">

          <img src="<?= IMAGES ?>/logo.png" alt="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>">

        </a>

      </div>

      <?php wp_nav_menu( array(
        'theme_location' => 'nav-main'
      ) ); ?>

    </div>

  </header>
