<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since 1.0
 * @version 1.0
 */

?>

<?php get_header(); ?>

<div class="container">

	<main class="main">

		<h1>Oops. Page not found!</h1>
		<p>It seems that you are looking for something that is not here.</p>
		<p>Return to <a href="<?php echo home_url(); ?>">homepage</a>.</p>

	</main>

</div>

<?php get_footer(); ?>
