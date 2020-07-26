
<?php
    $what_we_do_loop = new WP_Query( array(
        'post_type' => 'what_we_do',
        'posts_per_page' => -1,

    ) ); ?>

<div class="container what-we-do">
    <?php if ( $what_we_do_loop->have_posts() ) : ?>
        <div class="row">
            <?php while ( $what_we_do_loop->have_posts() ) : $what_we_do_loop->the_post(); ?>
                <div class="col-md-4 what-we-do__single-container">
                    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                    <div class="what-we-do__image-container" style="background-image: url('<?php echo $backgroundImg[0]; ?>');"></div>
                    <div class="what-we-do__text-container">
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; wp_reset_postdata(); ?>
</div>

<div class="container what-we-do what-we-do-mobile mobile-slider-js">
    <?php if ( $what_we_do_loop->have_posts() ) : ?>
        <?php while ( $what_we_do_loop->have_posts() ) : $what_we_do_loop->the_post(); ?>
            <div class="what-we-do-mobile__single-container">
                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                <div class="what-we-do-mobile__image-container" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
                <div class="what-we-do-mobile__text-container">
                    <h4><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                </div>
            </div>

            </div>
        <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
</div>