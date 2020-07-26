<div class="container-fluid hero">
    <?php if ( has_post_thumbnail() ) { ?>
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

        <div class="hero__featured-image-container container-fluid" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: center;">

        <?php if( !is_front_page()): ?>
            <h1 class="internal-heading"><?php the_title(); ?></h1>
        <?php endif; ?>
            <div class="text-center hero__title-container">
                <h1><?php the_field('hero_title'); ?></h1>
                <p><?php the_field('hero_copy');?></p>
                <?php $link = get_field('hero_link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                    <a class="btn button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
            <img class="mouse-icon js-mouse-icon" src="<?php bloginfo('template_directory'); ?>/img/mouse-icon.png" alt="">
        </div>
    <?php }
    else { ?>
        <div class="slider-outer-container">
            <div class="slider-container">
                <?php if( have_rows('slider_repeater') ): ?>
                    <?php while( have_rows('slider_repeater') ) : the_row(); ?>
                        <?php $image = get_sub_field('slider_image'); ?>
                        <div class="slide-container" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
                            <div class="slider-text-container text-center">
                                <h1><?php the_sub_field('slider_title'); ?></h1>
                                <?php the_sub_field('slider_text'); ?>
                                <a class="btn button <?php the_sub_field('slider_link'); ?>">Read more</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="arrow-container">
                <div class="intro-prev slick-arrow" style="display: block;">
                    <i class="fa fa-chevron-left fa-2x"></i>
                </div>
                <div class="intro-next slick-arrow" style="display: block;">
                    <i class="fa fa-chevron-right fa-2x"></i>
                </div>
            </div>
            <img class="mouse-icon js-mouse-icon" src="<?php bloginfo('template_directory'); ?>/img/mouse-icon.png" alt="">
        </div>
       
    <?php } ?>
</div>
