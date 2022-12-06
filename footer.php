<!-- Start footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row footer--wrapper">
            <!-- Site logo start-->
            <div class="col-md-6 col-lg-6 footer--logo">
                <a href="#">
                    <?php
                        dynamic_sidebar('footer-logo')
                    ;?>
                </a>
                <p>From year to year we strive to invent the most innovative technology that is used by both small enterprises and space enterprises.</p>
            </div>
            <!-- Site logo end-->

            <div class="col-md-6 col-lg-6 footer--nav">
                <a href="#">Blog</a>
                <a href="#">Kontakt</a>
                <a href="#">Pobierz z NDA</a>
            </div>
        </div>
        <hr class="footer--divider">
        <div class="row footer--copy">
            <div class="col-4 footer--copy__left">
                <p>© Mobilizacja Biznesu <?php echo date("Y");?></p>
                <a href="#">Polityka prywatności</a>
            </div>
            <div class="col-8 footer--copy__right">
                <p>Projekt strony internetowej stworzony przez Agencję Interaktywną Wzór</p>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->

<div className="scroll-to-top">
    <span class="scrl-btn scrl-btn-position scrl-btn-style"><i class="fa-solid fa-angles-up"></i>
</div>

<?php wp_footer();?>
</body>
</html>