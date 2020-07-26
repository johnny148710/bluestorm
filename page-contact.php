<?php
/**
* template name: contact us
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<?php get_template_part('/components/hero'); ?>
<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">
		<main class="site-main" id="main">
			<?php while ( have_posts() ) { the_post();
				get_template_part( 'loop-templates/content', 'page' );
			} ?>
		</main><!-- #main -->
	</div><!-- #content -->
	<div class="container-fluid">
		<div class="row no-gutters">
			<div class="col-md-6 light-grey">
			<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" ]'); ?>
			<p><i class="fa fa-phone" aria-hidden="true"></i>
			<a href="tel:<?php the_field('contact_telephone'); ?>"><?php the_field('contact_telephone'); ?></a></p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i>
			<a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></p>
			<i class="fa fa-map-marker" aria-hidden="true"></i>
			<?php the_field('contact_address'); ?>
			</div>
			<div class="col-md-6 map-container">
				<?php $location = get_field('google_map');
				if( !empty($location) ): ?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div><!-- #page-wrapper -->

<?php
get_footer();
