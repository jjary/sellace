<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <!-- Meta tags -->
    <meta name="author" content="golizard"/>
    <meta name="copyright" content="Copyright Golizard"/>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="geo.region" content="PL">


    <meta property="og:site_name" content="example.pl">
    <meta property="og:title" content="Title">
    <meta property="og:description" content="...">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.example.pl">
    <meta property="og:image" content="...">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="350">
    <meta property="og:image:height" content="170">
    <!-- Meta tags -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/hk-groteks" rel="stylesheet">
    <!-- Fonts -->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<!-- Start header -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <!-- Site logo start-->
            <div class="col-md-2 col-sm-6 header--logo">
                <a href="<?php echo get_home_url();?>">
                    <?php 
                        $logo_id = get_theme_mod( 'custom_logo' );
                        echo wp_get_attachment_image( $logo_id , 'small' )
                    ;?>
                </a>
            </div>
            <!-- Site logo end-->
            
            <!-- Site navigation start-->
            <div class="col-md-8 col-sm-6 header--wrapper">
                <!-- Start Menu dropdown -->
                    <div class="navigation">
                        <?= wp_nav_menu([
                            'menu' => 'main-menu',
                            'container' => 'nav',
                            'container_class' => 'menu',
                            'container_aria_label' => 'main menu of page',
                            'theme_location' => 'main-menu',
                            'menu_class'     => 'primary-menu',
                            'menu_id'     => 'nav-menu',
                            'add_a_class'     => 'menuItem',
                            'fallback_cb' => false
                        ]) ?>
                    </div>

                    <div class="header--wrapper__toggle">
                        <i class="fas fa-bars menuIcon"></i>
                        <i class="fa-regular fa-rectangle-xmark closeIcon"></i>
                    </div>
                <!-- End Menu dropdown -->

                <nav class="header--wrapper__nav">
                    <!-- Start navigation -->
                    <?= wp_nav_menu([
                        'menu' => 'main-menu',
                        'container' => 'nav',
                        'container_class' => 'menu-wrapper',
                        'container_aria_label' => 'main menu of page',
                        'theme_location' => 'main-menu',
                        'menu_class'     => 'primary-menu',
                        'menu_id'     => 'nav-menu',
                        'add_a_class'     => 'menuItem',
                        'fallback_cb' => false
                    ]) ?>
                    <!-- End navigation -->

                </nav>
            </div>        
            <!-- Site navigation end-->

            <!-- Social medial icons start -->
            <div class="col-2 header--wrapper">
                <div class="header--wrapper__button">
                    <button class="secondary-button">Pobierz NDA</button>
                </div>
            </div>
            <!-- Social medial icons end -->
        </div>
    </div>
</header>
<!-- End header -->
