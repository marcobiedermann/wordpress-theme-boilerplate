<?php
/**
 * The right sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since 1.0
 * @version 1.0
 */

?>

<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
	<aside class="sidebar sidebar-right" role="complementary">
		<?php dynamic_sidebar( 'sidebar-right' ); ?>
	</aside>
<?php endif; ?>
