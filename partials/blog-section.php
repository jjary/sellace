<!-- Start blog section -->
<section class="posts">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="posts--header">
                    <h2><?php the_field('blog-header');?></h2>
                    <?php
                        $buttonBlog = get_field('blog-btn') 
                    ; ?>
                    <a href="<?php echo $buttonBlog['url']; ?>" target="<?php echo $buttonBlog['target']; ?>" type="button" class="primary-button"><?php echo $buttonBlog['title']; ?>
                    </a> 
                </div>
                <div class="posts-desktop">
                    <!-- Get post from posts -->
                    <div class="row">
                        <?php
                            $loop = new WP_Query(array(
                                'post_type' => 'post', 'posts_per_page' => 3,
                                'orderby' => 'meta_value',
                                'order' => 'ASC'
                            ));
                            while ($loop->have_posts()) : $loop->the_post();
                        ?>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                    <div class="posts--content">
                                        <!-- Get post image -->
                                    <?php 
                                        $postImg = get_field('post-img');
                                        if( ( $postImg ) ):?>
                                            <img src="<?php echo esc_url($postImg['url']); ?>" alt="<?php echo esc_attr($postImg['alt']);?>" />
                                    <?php endif; ?>
                                    <!-- Get post image -->

                                    <!-- Get post title -->
                                        <p><?php the_field('post-title');?></p>
                                    <!-- Get post title -->

                                    <!-- Get Author and date -->
                                        <div class="posts--date">
                                            <p class="font-sm"><?php the_field('post-date');?></p>
                                            <a class="post-link" href="<?php the_permalink();?>">Czytaj<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    <!-- Get Author and date -->
                                    </div>
                            </div>
                            <?php wp_reset_postdata(); ?>
                        <?php endwhile; ?>
                    </div>
                    <!-- Get post from posts -->
                </div>

                <div class="posts-large">
                    <!-- Get post from posts -->
                    <div class="row">
                        <?php
                            $loop = new WP_Query(array(
                                'post_type' => 'post', 'posts_per_page' => 2,
                                'orderby' => 'meta_value',
                                'order' => 'ASC'
                            ));
                            while ($loop->have_posts()) : $loop->the_post();
                        ?>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                    <div class="posts--content">
                                        <!-- Get post image -->
                                    <?php 
                                        $postImg = get_field('post-img');
                                        if( ( $postImg ) ):?>
                                            <img src="<?php echo esc_url($postImg['url']); ?>" alt="<?php echo esc_attr($postImg['alt']);?>" />
                                    <?php endif; ?>
                                    <!-- Get post image -->

                                    <!-- Get post title -->
                                        <p><?php the_field('post-title');?></p>
                                    <!-- Get post title -->

                                    <!-- Get Author and date -->
                                        <div class="posts--date">
                                            <p class="font-sm"><?php the_field('post-date');?></p>
                                            <a class="post-link" href="<?php the_permalink();?>">Czytaj<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    <!-- Get Author and date -->
                                    </div>
                            </div>
                            <?php wp_reset_postdata(); ?>
                        <?php endwhile; ?>
                    </div>
                    <!-- Get post from posts -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End blog section -->