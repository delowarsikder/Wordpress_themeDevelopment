<article class="home_article_wrapper">
    <h2><a href="<?php permalink_link(); ?>"><?php the_title(); ?></a></h2>
    <div class="feature_image">
        <a href="<?php permalink_link(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>

    <div class="post_meta">
        Posted By :<?php the_author_posts_link(); ?> | Post in : <?php the_time('M d,Y'); ?>
        | Category : <?php the_category(','); ?> | <?php comments_popup_link($zero = 'No Comment', $one = '1 Comment', $more = '% Comments', $css_class = 'my_comment_class', $none = 'Comments Off'); ?>
    </div>
    <!-- <p><?php the_content(); ?></p>	 show all line -->
    <!-- show only few line the read more -->
    <!-- <p><?php the_excerpt(); ?></p>	 -->

    <!-- custom excert  -->
    <?php echo excerpt('20'); ?>


</article>