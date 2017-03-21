<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since 1.0
 * @version 1.0
 */
?>

<h3><?php comments_number( '0 Comments', 'One Comment', '% Comments' ); ?></h3>

<ol class="comments-list">
	<?php wp_list_comments(); ?>
</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<ul>
	<?php if ( get_previous_comments_link() ) : ?>
		<li><?php previous_comments_link( __( 'Older Comments', 'THEME_NAME' ) ); ?></li>
	<?php endif; ?>
	<?php if ( get_next_comments_link() ) : ?>
		<li><?php next_comments_link( __( 'Newer Comments', 'THEME_NAME' ) ); ?></li>
	<?php endif; ?>
</ul>
<?php endif; ?>

<?php comment_form(); ?>
