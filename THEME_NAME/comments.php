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
