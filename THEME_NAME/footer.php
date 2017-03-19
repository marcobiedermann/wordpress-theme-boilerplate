	<footer class="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

		<div class="grid">

			<p><a href="#top"><?php _e( 'Go to Top', THEME_NAME ); ?></a></p>
			<p>© <span itemprop="copyrightYear"><? echo date( 'Y' ); ?></span> <a href="<? echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></p>

		</div>

	</footer>

	<?php wp_footer(); ?>

</body>
</html>
