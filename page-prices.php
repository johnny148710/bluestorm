<?php
/**
* template name: Prices
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>
<?php get_template_part('/components/hero'); ?>

<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">
		<main class="site-main" id="main">
			<?php while ( have_posts() ) { the_post();
				get_template_part( 'loop-templates/content', 'page' );
			} ?>
		</main><!-- #main -->
	</div><!-- #content -->
    <?php if( have_rows('prices_information') ):
        while( have_rows('prices_information') ) : the_row(); ?>
            <div class="container-fluid prices-container">
                <div class="container">
                    <div class="row">
                        <?php    
                        $prices_title = get_sub_field('prices_title');
                        $prices_copy = get_sub_field('prices_copy');
                        $prices_amount = get_sub_field('prices_amount');?>
                        
                        <div class="col-md-3">
                            <h1><?php echo($prices_title); ?></h1>
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo($prices_copy); ?></h4>
                        </div>
                        <div class="col-md-3">
                            <h5><?php echo($prices_amount); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
    endif; ?>

</div>

<?php get_footer(); ?>