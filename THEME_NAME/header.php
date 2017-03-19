<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?= IMAGES ?>/favicon.ico">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">

	<header class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

		<div class="grid">

			<div class="logo">
				<a href="<?= home_url(); ?>">
					<img src="<?= IMAGES ?>/logo.png" alt="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>">
				</a>
			</div>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu'           => 'primary-menu',
				) );
			?>

		</div>

	</header>
