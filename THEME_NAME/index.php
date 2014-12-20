<?php get_header(); ?>

    <div class="container">

      <div class="row">

        <main class="main col-8">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article>

              <header>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="post-date"><?php the_time( get_option( 'date_format' ) ); ?>, <?php _e( 'by', 'THEME_NAME' ); ?> <?php the_author_posts_link(); ?></p>

              </header>

              <main>

                <?php if ( has_post_thumbnail() ) : ?>

                  <figure>

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

                  <li><?php the_category( '</li><li>' ); ?></li>

                </ul>

              </footer>

            </article>

          <?php endwhile; else: ?>

            <h1><?php _e( 'No posts were found!', 'THEME_NAME' ); ?></h1>

          <?php endif; ?>

        </main>

        <aside class="sidebar sidebar-right col-4">

          <?php get_sidebar(); ?>

        </aside>

      </div>

    </div>

<?php get_footer(); ?>
