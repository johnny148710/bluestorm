<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="wrapper" id="archive-wrapper">

	<div class="container" id="content" tabindex="-1">

			<main class="row site-main" id="main">

				<?php
				if ( have_posts() ) {
					?>
					<header class="col-md-12 page-header">
						<h1><?php post_type_archive_title(); ?></h1>
					</header><!-- .page-header -->
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();

						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

			</main><!-- #main -->

			<?php
			// Display the pagination component.
			understrap_pagination(); ?>
	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
