<?php get_header($name); ?>
<!-- navigation section -->

<?php get_template_part($slug = 'menu', $name = 'menu') ?>

<!-- content section -->
<div class="main_wrapper content_bg">
    <div class="wrap">
        <div class="content_wrapper">
            <div class="content_left">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <article id="article_section">
                            <h2>
                                <a href="<?php the_permalink($post); ?>"><?php the_title(); ?></a>
                            </h2>
                            <a href="<?php the_permalink($post); ?>"><?php the_post_thumbnail($size, $attr); ?></a>
                            <p><?php the_content($more_link_text, $strip_teaser); ?></p>
                        </article>

                <?php
                    endwhile;

                else :
                    echo 'No post found!!';
                endif;
                ?>

            </div>
        </div>
    </div>
</div>
<?php get_footer($name); ?>