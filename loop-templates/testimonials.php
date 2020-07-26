
<?php
    $testimonial_loop = new WP_Query( array(
        'post_type' => 'testimonials',
        'posts_per_page' => -1,

    ) ); ?>

<div class="container-fluid testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <img src="<?php bloginfo('template_directory');?>/img/speechmarks.png" alt="">
            </div>
        </div>
    <?php if ( $testimonial_loop->have_posts() ) : ?>
        <div class="testimonial__inner-container">
            <?php while ( $testimonial_loop->have_posts() ) : $testimonial_loop->the_post(); ?>
                <div class="text-center">
                <?php the_content(); ?>
                <h4><?php the_title(); ?></h4>
                </div>     
            <?php endwhile; ?>
        </div>
    <?php endif; wp_reset_postdata(); ?>
    </div>
</div>