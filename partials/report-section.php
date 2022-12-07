<!-- Report section start -->
<section class="report">
    <div class="container-fluid">
        <div class="row">
            <!-- Get values from cpt report -->
            <div class="col-12 report--wrapper">
                <div class="row">
                    <?php
                        $loop = new WP_Query(array(
                            'post_type' => 'report', 'posts_per_page' => 6,
                            'orderby' => 'meta_value',
                            'order' => 'ASC'
                        ));
                        while ($loop->have_posts()) : $loop->the_post();
                    ?>                            
                        <div class="col-md-4 col-sm-12">
                            <ul>
                                <li>
                                    <div class="report--wrapper__content">
                                        <h3><?php the_field('report-value');?></h3>
                                        <p class="font-sm"><?php the_field('report-desc');?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <!-- Get values from cpt report -->
        </div>
        <div class="row">
            <div class="col-12">
                <hr class="report-line">
            </div>
        </div>
        <div class="row">
            <div class="col-12 report-btn">
                <?php
                    $buttonReport = get_field('report-btn') 
                ; ?>
                <a href="<?php echo $buttonReport['url']; ?>" target="<?php echo $buttonReport['target']; ?>" type="button" class="primary-button"><?php echo $buttonReport['title']; ?>
                </a> 
            </div>
        </div>
    </div>
</section>
<!-- Report section end -->