<!-- slider  -->
<div class="main_wrapper slider_bg">
    <div class="wrap">
        <section>
            <div class="slider_wrapper">
                <div class="slider-wrapper theme-light">
                    <div id="slider" class="nivoSlider">
                        <!-- dynamic slider -->
                        <?php
                        $custslider = new WP_Query(
                            array(
                                'post_type' => 'customslider',
                            )
                        );

                        while ($custslider->have_posts()) : $custslider->the_post(); ?>

                            <?php the_post_thumbnail(); ?>

                        <?php endwhile;

                        ?>

                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/toystory.jpg" data-thumb="images/toystory.jpg" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/up.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/walle.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/nemo.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" /> -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>