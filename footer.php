<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Starter
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <?php $date = date('Y', time()); ?>
    
		<div class="footer-info">&copy; <?php echo $date?></div>
    <div class="footer-text">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </div>
    
    <?php $image=get_template_directory_uri().'/images/to-top@2x.png'; ?>
    <a id="toTop" href="#"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="<?php echo $image ?>"></a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>