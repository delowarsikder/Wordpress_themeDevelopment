<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if (is_single() || is_page()) {
                wp_title('', true);
            } elseif (is_front_page()) {
                bloginfo('description');
            } else {
                bloginfo('description');
            } ?> | <?php bloginfo('name'); ?>
    </title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/1.jpg" type="image/jpg">
    <!-- //css -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"> -->

    <?php wp_head(); ?>

</head>


<body <?php body_class($class); ?>>

    <!-- social icon -->

    <?php get_template_part($slug = 'social_IconSidebar', $name = 'socialIcon') ?>

    <!-- goto -->
    <div id="top"></div>

    <!-- header section -->
    <div class="main_wrapper header_bg">
        <div class="wrap">
            <header>
                <div class="header">
                    <h3><a href="<?php echo home_url(); ?>"><?php bloginfo($show = 'name'); ?></a> </h3>
                    <p><?php bloginfo($show = 'description'); ?></p>
                    <div class="cust_search">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </header>
        </div>
    </div>