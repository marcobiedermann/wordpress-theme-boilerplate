<?php get_header(); ?>

  <div class="grid">

    <div class="grid-row">

      <main class="main grid-col grid-col-9">

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

        <ul class="pagination">
          <?php if ( get_next_post_link() ) : ?>
            <li><?php next_post_link( '%link', __( 'Previous post', 'THEME_NAME' ) ); ?></li>
          <?php endif; ?>
          <?php if ( get_previous_post_link() ) : ?>
            <li><?php previous_post_link( '%link', __( 'Next post', 'THEME_NAME' ) ); ?></li>
          <?php endif; ?>
        </ul>

      </main>

      <?php get_sidebar(); ?>

    </div>

  </div>

<?php get_footer(); ?>
