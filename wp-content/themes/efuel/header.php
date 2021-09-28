<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!---Linking Pages Start-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99d3ff8338.js" crossorigin="anonymous"></script>
    <link href="https://fonts.shopifycdn.com">
    <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>

    <?php wp_head() ?>
    <!---Linking Pages End-->
</head>

<body>
    <?php if (has_nav_menu('primary')) : ?>
        <div class="container-fluid">
            <div id="SideNav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'nav navbar',
                        'container_id' => 'navbarNavDropdown',
                        'menu_class' => 'navbar-nav',
                        'theme_location' => 'primary',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker()
                    )
                );
                ?>
            </div>
        </div>
    <?php endif; ?>
    <a class="announcement_link fixed-static" href="#">
        <div class="announcement">
            <p class="announcement_text">📣📣 ❗️ VILDE TILBUD PÅ X-GAMER ❗️ 📣📣</p>
        </div>
    </a>
    <header role="banner" id="top" class="header sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <span class="align-bottom" onclick="openNav()"><i class="fas fa-thin fa-bars fa-2x"></i></span>
                </div>
                <div class="col-lg-5">
                    <div class="page-header d-flex justify-content-center">
                        <a href="<?php bloginfo('url') ?>">
                            <?php
                            if (function_exists('the_custom_logo')) :
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $logo = wp_get_attachment_image_src($custom_logo_id, 'medium');
                            ?>
                                <img src="<?php echo $logo[0] ?>" alt="img" class="img-fluid">
                            <?php else :
                            ?>

                            <?php echo get_bloginfo('name');

                            endif ?>
                        </a>
                        <!--<a class="float-right text-dark" href="#"><i class="fas fa-search"></i></a>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" id="primary-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php /* bloginfo('url') */ ?>"> -->

    <?php /*
                if (function_exists('the_custom_logo')) :
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id); */
    ?>
    <!--<img src="<?php /* echo $logo[0] */ ?>" class="img-fluid Logo" alt="logo">-->
    <?php /* endif */
    ?>

    <?php /* echo get_bloginfo('name'); */ ?></a>
    <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>-->
    <?php
    /* wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse justify-content-end',
                        'container_id' => 'navbarNav',
                        'menu_class' => 'navbar-nav',
                        'theme_location' => 'primary',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker()
                    )
                ); */
    ?>
    <!--<ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                </ul> -->
    <!--</div>
        </div>
    </nav>-->