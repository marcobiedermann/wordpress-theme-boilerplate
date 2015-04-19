<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="post-date"><?php the_time( get_option( 'date_format' ) ); ?>, <?php _e( 'by', THEME_NAME ); ?> <?php the_author_posts_link(); ?></p>

  </header>

  <main>

    <?php the_content( __('Read more', THEME_NAME) ); ?>

  </main>

  <footer>

    <?php

      if (comments_open() && !post_password_required()) {
        comments_popup_link( '0', '1', '%', 'article-meta-comments' );
      }

    ?>

    <ul class="post-categories">

      <li><?php the_category( '</li><li>' ); ?></li>

    </ul>

  </footer>

</article>
