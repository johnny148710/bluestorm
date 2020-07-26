<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>

<div class="wrapper" id="wrapper-footer">
	<div class="container-fluid newsletter">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>Subscribe to our newsletter to get the latest news</h3>
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" ]'); ?>
				</div>
			</div>
		</div>
	</div>
	<footer class="container-fluid">
	<div class="container">
	<div class="row">
			<div class="col-md-6 contact">
				<?php echo file_get_contents( get_template_directory() . '/img/svg/logo.svg'); ?>
				<h4><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:01482649343"> 01482 649343</a></h4>
				<h4><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:sales@bluestormdesign.co.uk">sales@bluestormdesign.co.uk</a></h4>
			</div><!--col end -->
			<div class="col-md-6 text-right">
			<div class="social">
				<a href="https://www.facebook.com/bluestormdesign" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
				<a href="https://twitter.com/bluestormdesign" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/bluestormdesign/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
			</div>
			<div class="policies">
				<a href="#">Terms &amp; Conditions</a>
				<a href="#">Privacy Policy</a>
				<a href="#">Accessibility</a>
				<a href="#">Sitemap</a>
				<p>Web design by <a href="https://www.bluestormdesign.co.uk" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/bluestorm.png" alt=""></a></p>
			</div>


			</div>
		</div><!-- row end -->
	</div>

	</footer><!-- container end -->
</div><!-- wrapper end -->


<?php wp_footer(); ?>

</body>

</html>

