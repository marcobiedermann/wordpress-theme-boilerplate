<?php get_header(); ?>

    <div class="container">

      <div class="row">

        <main class="main col-8">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', get_post_format() ); ?>

          <?php endwhile; else: ?>

            <h1><?php _e( 'No posts were found!', 'THEME_NAME' ); ?></h1>

          <?php endif; ?>

          <ul>
            <?php if ( get_next_posts_link() ) : ?>
              <li><?php next_posts_link( __('Older Posts', 'THEME_NAME') ); ?></li>
            <?php endif; ?>
            <?php if ( get_previous_posts_link() ) : ?>
              <li><?php previous_posts_link( __('Newer Posts', 'THEME_NAME') ); ?></li>
            <?php endif; ?>
          </ul>

        </main>

        <aside class="sidebar sidebar-right col-4">

          <?php get_sidebar(); ?>

        </aside>

      </div>

    </div>

<?php get_footer(); ?>
