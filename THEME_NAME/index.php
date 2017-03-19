<?php get_header(); ?>

		<div class="grid">

			<div class="container">

				<main class="main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; else: ?>
						<h1><?php _e( 'No posts were found!', THEME_NAME ); ?></h1>
					<?php endif; ?>

					<?php the_posts_pagination( array(
					 'mid_size'  => 2,
					 'prev_text' => __( 'Prev', THEME_NAME ),
					 'next_text' => __( 'Next', THEME_NAME ),
					) ); ?>

				</main>

			</div>

		</div>

<?php get_footer(); ?>
