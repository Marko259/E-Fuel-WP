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
        <div class="container-fluid fixed-top">
            <div id="SideNav" class="sidenav flex justify-center pt-8 sm:justify-start sm:pt-0">
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
                        'depth' => 2,
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker()
                    )
                );
                ?>
            </div>
        </div>
    <?php endif; ?>
    <a class="announcement_link position-static" href="#">
        <div class="announcement" align="center">
            <p class="announcement_text">📣📣 ❗️ Se vores vilde tilbud her ❗️ 📣📣</p>
        </div>
    </a>
    <header role="banner" id="top" class="header container-fluid sticky-top">
        <div class="row align-items-center justify-content-between">
            <div class="col-2" align="left">
                <span class="align-bottom" onclick="openNav()"><i class="fas fa-thin fa-bars fa-2x"></i></span>
            </div>
            <div class="col-2" align="center">
                <div class="d-flex align-items-center">
                    <a href="<?php bloginfo('url') ?>">
                        <?php
                        if (function_exists('the_custom_logo')) :
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'medium');
                        ?>
                            <img src="<?php echo $logo[0] ?>" alt="img" class="img-fluid mx-auto d-block">
                        <?php else :
                        ?>

                        <?php echo get_bloginfo('name');

                        endif ?>
                    </a>
                </div>
            </div>
            <div class="col-2" align="right">
                <div class="row justify-content-end align-items-center h-100">
                    <div class="col-1 col-xs-1">
                        <a class="text-dark" href="#"><i class="fas fa-search fa-2x"></i></a>
                    </div>
                    <div class="col-1 col-xs-1">
                        <a class="text-dark" href="#"><i class="fas fa-shopping-bag fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>