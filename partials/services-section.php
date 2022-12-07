<!-- Start services section -->
<section class="services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php the_field('service-header');?>
                <!-- Get post from services -->
                <div class="row">
                    <?php
                        $loop = new WP_Query(array(
                            'post_type' => 'services', 'posts_per_page' => 12,
                            'orderby' => 'meta_value',
                            'order' => 'ASC'
                        ));
                        while ($loop->have_posts()) : $loop->the_post();
                    ?>
                        <div class="col-md-3 services--content">
                            <!-- Get post Icon -->
                                <?php 
                                    $servicesIcon = get_field('service-icon');
                                    if( ( $servicesIcon ) ):?>
                                        <img src="<?php echo esc_url($servicesIcon['url']); ?>" alt="<?php echo esc_attr($servicesIcon['alt']);?>" />
                                <?php endif; ?>
                            <!-- Get post Icon -->

                            <!-- Get post title -->
                                <p><?php the_field('service-title');?></p>
                            <!-- Get post title -->
                            
                            <!-- Get post description -->
                                <p class="font-sm"></p><?php the_field('service-desc');?>
                            <!-- Get post description -->
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                </div>
                <!-- Get post from services -->
            </div>
        </div>
    </div>
</section>
<!-- End services section -->