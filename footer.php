<!-- Start footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row footer--wrapper">
            <!-- Site logo start-->
            <div class="col-md-6 col-sm-12 footer--logo">
                <a href="#">
                    <?php
                        dynamic_sidebar('footer-logo')
                    ;?>
                </a>
                <p><?php the_field('footer-desc');?></p>
            </div>
            <!-- Site logo end-->

            <div class="col-md-6 col-sm-12 footer--nav">
                <?= wp_nav_menu([
                        'menu' => 'footer-menu',
                        'container' => 'nav',
                        'container_class' => 'footer-menu',
                        'container_aria_label' => 'footer menu of page',
                        'theme_location' => 'footer-menu',
                        'menu_class'     => 'footer-menu',
                        'menu_id'     => 'nav-menu',
                        'add_a_class'     => 'menuItem',
                        'fallback_cb' => false
                    ]) ?>
            </div>
        </div>
        <hr class="footer--divider">
        <div class="row footer--copy">
            <div class="col-md-4 col-sm-12 footer--copy__left">
                <p class="font-sm">© Mobilizacja Biznesu <?php echo date("Y");?></p>
                <a href="#"><p class="font-sm">Polityka prywatności</p></a>
            </div>
            <div class="col-md-8 col-sm-12 footer--copy__right">
                <p>Projekt strony internetowej stworzony przez Agencję Interaktywną Wzór</p>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->

<?php wp_footer();?>
</body>
</html>