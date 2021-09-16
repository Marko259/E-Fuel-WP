<?php get_header(); ?>
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
        <h1 class="text-white">Welcome to <em><?php echo get_bloginfo('name'); ?></em></h1>
    </div>
</div>

<div class="container my-5 d-grid gap-5">
    <h1 class="d-flex justify-content-center">Short description about our services</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="http://vps02.r159.dk/wordpress/wp-content/themes/flying-web-solutions/assets/images/Startpage - background.jpg" alt="img" class="img-fluid float-left">
        </div>
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.</p>
        </div>
    </div>
</div>
<div class="container my-5 d-grid gap-5">
    <h1 class="d-flex justify-content-center">Short description about us</h1>
    <div class="row">
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.</p>
        </div>
        <div class="col-md-6">
            <img src="http://vps02.r159.dk/wordpress/wp-content/themes/flying-web-solutions/assets/images/Logo.png" alt="img" class="img-fluid float-left">
        </div>
    </div>
</div>
<div class="container my-5 d-grid gap-5">
    <h1 class="d-flex justify-content-center">Latest Blog Posts</h1>
    <?php
    $query = new WP_Query(array(
        'posts_per_page' => ''
    ));
    if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="p-5 border">
                <h1><?php the_title(); ?></h1>
                <p>
                    <?php the_excerpt(); ?>
                </p>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <div class="p-5 border">
            <p>
                <?php __('No News'); ?>
            </p>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>