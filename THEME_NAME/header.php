<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<? echo IMAGES ?>/favicon.ico">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">

	<header class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

		<div class="grid">

			<div class="logo">
				<a href="<? echo home_url(); ?>">
					<img src="<? echo IMAGES ?>/logo.png" alt="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>">
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
