<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope="itemscope" itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

  <header>

    <?php if ( is_single() ): ?>
      <h1 itemprop="name headline"><?php the_title(); ?></h1>
    <?php else: ?>
        <h2 itemprop="name headline"><a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></h2>
    <?php endif; ?>

    <p class="post-date"><?php the_time( get_option( 'date_format' ) ); ?>, <?php _e( 'by', 'THEME_NAME' ); ?> <?php the_author_posts_link(); ?></p>

  </header>

  <main itemprop="articleBody description">

    <?php if ( has_post_thumbnail() ) : ?>

      <figure class="post-thumbnail">

        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>

      </figure>

    <?php endif; ?>

    <?php the_content( __('Read more', 'THEME_NAME') ); ?>

  </main>

  <footer>

    <?php

      if (comments_open() && !post_password_required()) {
        comments_popup_link( '0', '1', '%', 'article-meta-comments' );
      }

    ?>

    <ul class="post-categories">

      <li itemprop="about"><?php the_category( '</li><li>' ); ?></li>

    </ul>

    <?php if ( has_tag() ): ?>

      <ul class="post-tags"><?php the_tags( '<li itemprop="keywords">', '</li><li>', '</li>' ); ?></ul>

    <?php endif; ?>

  </footer>

</article>
