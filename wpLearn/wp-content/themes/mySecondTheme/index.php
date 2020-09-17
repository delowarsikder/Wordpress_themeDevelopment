<?php get_header($name); ?>
<!-- navigation section -->

<?php get_template_part($slug = 'menu', $name = 'menu') ?>
<?php get_template_part($slug = 'slider', $name = 'slider') ?>


<!-- content section -->
<div class="main_wrapper content_bg">
    <div class="wrap">
        <div class="content_wrapper">
            <div class="content_left">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <?php get_template_part($slug='articleSection', $name='article');?><!-- slug =file name,name =any name you can provide-->

                <?php
                    endwhile;

                else :
                    echo 'No post found!!';
                endif;
                ?>
                <!-- paging system-->
                <div class="main_pagination">
                    <?php if (function_exists("pagination")) {
                        pagination($additional_loop->max_num_pages);
                    } ?>
                </div>
            </div>
            <!-- right sidebar -->
            <?php get_sidebar(); ?>



            <br class="clear" />
        </div>
    </div>
</div>
<?php get_footer($name); ?>