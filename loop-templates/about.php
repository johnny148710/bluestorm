
<div class="container-fluid about">
    <?php $about_query = new WP_Query( 'pagename=about-us' ); ?>
    <div class="row">
        <?php if ( $about_query->have_posts() ) : ?>
            <?php while ( $about_query->have_posts() ) : $about_query->the_post(); ?>
           <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <div class="col-md-6 about__image-container" style="background-image: url('<?php echo $backgroundImg[0]; ?>'); background-position: center;">
                <?php // the_post_thumbnail(); ?>
            </div>
            <div class="col-md-6 about__text-container">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
