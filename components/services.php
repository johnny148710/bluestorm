<div class="container services">
    <div class="row">
        <div class="col-md-12 services__text-container">
            <h2 class="text-center">Our Services</h2>
        </div>

        <?php if( have_rows('our_services') ): ?>
            <?php while( have_rows('our_services') ) : the_row(); ?>
                <div class="col-md-4 services__info-container">
                    <div class="row">
                        <div class="col-3 col-md-4">
                        <?php $image = get_sub_field('service_image');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        </div>
                        <div class="col-9 col-md-8">
                            <h3><?php the_sub_field('service_title'); ?></h3>
                            <p><?php the_sub_field('service_description'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
