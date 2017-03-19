<?php get_header(); ?>

	<div class="grid">

		<div class="container">

			<main class="main">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; else: ?>
					<h1><?php _e( 'No posts were found!', 'THEME_NAME' ); ?></h1>
				<?php endif; ?>

				<h3>About <?php the_author_posts_link(); ?></h3>
				<?= get_avatar( get_the_author_meta( 'ID' ) ); ?>
				<p><?php the_author_meta( 'description' ); ?></p>

				<div id="comments">
					<?php comments_template( '', true ); ?>
				</div>

				<?php the_posts_pagination( array(
				 'mid_size'  => 2,
				 'prev_text' => __( 'Prev', THEME_NAME ),
				 'next_text' => __( 'Next', THEME_NAME ),
				) ); ?>

			</main>

		</div>

	</div>

<?php get_footer(); ?>
