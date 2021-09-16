<footer class="bg-light text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row navbar-expand-lg">
            <!--Grid column-->
            <?php wp_nav_menu(
                array(
                    'menu' => 'secondary',
                    'depth' => '2',
                    'menu_class' => 'col-9 col-md-12 mb-4 mb-md-0 navbar-nav justify-content-center',
                    'theme_location' => 'secondary',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker()
                )
            ); ?>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © <?php echo date('Y'); ?> Copyright
        <a class="text-dark" href="<?php bloginfo('url')?>"><?php echo get_bloginfo('name'); ?></a>
    </div>
    <!-- Copyright -->
</footer>

<?php wp_footer(); ?>
<script type="text/javascript">
    /*var nav = document.querySelector('nav');
    var navlink = document.querySelector('a');

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 500) {
            nav.classList.add('bg-frontpage', 'shadow');
            navlink.classList.remove('text-white');
        } else {
            nav.classList.remove('bg-frontpage', 'shadow');
            navlink.classList.remove('text-white');
        }
    });*/

    $(document).ready(function() {
        $(window).scroll(function(event) {
            var scroll = $(window).scrollTop();
            if (scroll > 500) {
                $('#primary-navbar').addClass('bg-frontpage shadow');
                /*$('.nav-link, .navbar-brand').removeClass('text-white');
                $('.nav-link, .navbar-brand').addClass('text-dark');*/
            } else if (scroll < 800) {
                $('#primary-navbar').removeClass('bg-frontpage shadow');
                /*$('.nav-link, .navbar-brand').removeClass('text-dark');
                $('.nav-link, .navbar-brand').addClass('text-white');*/
            }
        });
    });
</script>

</body>

</html>