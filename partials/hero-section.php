<!-- Start hero -->
<section id="start" class="hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12 hero--left-col">
                    <h1><?php the_field('hero-header');?></h1>
                    <p><?php the_field('hero-desc');?></p>
                    <div class="hero--left-col__contact">
                        <div class="hero--left-col__contact">
                            <?php
                                $buttonHero = get_field('hero-btn') 
                            ; ?>
                            <a href="<?php echo $buttonHero['url']; ?>" target="<?php echo $buttonHero['target']; ?>" type="button" class="primary-button"><?php echo $buttonHero['title']; ?>
                            </a> 
                            <a href="tel:<?php the_field('hero-number');?>"><?php the_field('hero-number');?></a>
                        </div> 
                    </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="hero--right-col">
                    <?php 
                        $heroImg = get_field('hero-img');
                        if( ( $heroImg ) ):?>
                            <img src="<?php echo esc_url($heroImg['url']); ?>" alt="<?php echo esc_attr($heroImg['alt']);?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End hero -->