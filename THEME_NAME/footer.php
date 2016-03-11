  <footer class="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

    <div class="container">

      <p><a href="#top"><?php _e( 'Go to Top', THEME_NAME ); ?></a></p>
      <p>© <span itemprop="copyrightYear"><?= date( 'Y' ); ?></span> <a href="<?= home_url(); ?>"><?php bloginfo( 'name' ); ?></a></p>

    </div>

  </footer>

  <?php wp_footer(); ?>

</body>
</html>
