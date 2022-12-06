<!-- Tools section start -->
<section class="tools">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 tools--right">
                <?php 
                    $toolsImg = get_field('tools-img');
                    if( ( $toolsImg ) ):?>
                        <img src="<?php echo esc_url($toolsImg['url']); ?>" alt="<?php echo esc_attr($toolsImg['alt']);?>" />
                <?php endif; ?>
            </div>
            <!-- Get tools from cpt tools -->
            <div class="col-6 tools--left">
                <h2><?php the_field('tools-header');?></h2>
                    <?php
                        $loop = new WP_Query(array(
                            'post_type' => 'tools', 'posts_per_page' => 6,
                            'orderby' => 'meta_value',
                            'order' => 'ASC'
                        ));
                        while ($loop->have_posts()) : $loop->the_post();
                    ?>                            
                        <div class="tools--left__wrapper">
                            <?php the_field('tools-icon');?>
                            <?php the_field('tools-desc');?>
                        </div>
                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <!-- Get tools from cpt tools -->
        </div>
    </div>
</section>
<!-- Tools section End -->

