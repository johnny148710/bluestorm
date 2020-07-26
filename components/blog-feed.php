<?php
    $postLoop = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 3,

    ) ); ?>
    <div class="container posts">
        <div class="row">
        <div class="col-md-12 text-center">
            <h2>Latest News</h2>
        </div>
            <?php if ( $postLoop->have_posts() ) : ?>
                <?php while ( $postLoop->have_posts() ) : $postLoop->the_post(); ?>
                <div class="col-md-4 posts">
                    <div class="row mobile-padding">
                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                        <div class="col-4 col-md-12 posts__image-container" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
                        </div>
                        <div class="col-8 col-md-12 posts__text-container">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j F, Y') ?></p>
                        </div>                    
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>