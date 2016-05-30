<?php

/*
Template Name: Main content with right sidebar
*/

?>

  <?php get_header(); ?>

    <div class="grid">

      <div class="container">

        <main class="main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
          <?php endwhile; else: ?>
            <h1><?php _e( 'No posts were found!', THEME_NAME ); ?></h1>
          <?php endif; ?>

          <ul class="pagination">
            <?php if ( get_next_posts_link() ) : ?>
              <li><?php next_posts_link( __('Older Posts', THEME_NAME) ); ?></li>
            <?php endif; ?>
            <?php if ( get_previous_posts_link() ) : ?>
              <li><?php previous_posts_link( __('Newer Posts', THEME_NAME) ); ?></li>
            <?php endif; ?>
          </ul>

        </main>

        <?php get_sidebar('right'); ?>

      </div>

    </div>

<?php get_footer(); ?>
