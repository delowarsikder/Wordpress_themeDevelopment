<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('cherset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
</head>
<body <?php body_class();?>>
<!-- dynamic home and tangile  -->
    <h1><a href="<?php echo home_url()?>"><?php bloginfo('name'); ?></a></h1>
    <h3><?php bloginfo('descriptio')?></h3>
    <!-- post section -->
    <?php 
    if (have_posts()):
        while(have_posts()): the_post();
        ?>
            <h2><a href="<?php echo the_permalink();?>"><?php the_title();?></a></h2>
            <p><?php the_content();?></p>
        <?php
        endwhile;    
        # code...
    else:
        echo "NO post here";
    endif;

    ?>
</body>
</html>