<?php
    # template name: home

    get_header();

    get_template_part('/components/hero'); ?>
    <div class="wrapper" id="page-wrapper">
		<?php get_template_part('/components/services'); ?>
		<?php get_template_part('/loop-templates/about'); ?>
		<?php get_template_part('/loop-templates/what-we-do'); ?>
		<?php get_template_part('/loop-templates/testimonials'); ?>	
		<?php get_template_part('components/blog-feed'); ?>
    	
	</div><!-- #page-wrapper -->

<?php get_footer();
