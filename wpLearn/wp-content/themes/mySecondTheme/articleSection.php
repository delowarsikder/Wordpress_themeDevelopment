<article id="article_section">
                            <h2><a href="<?php permalink_link(); ?>"><?php the_title(); ?></a></h2>
                            <div class="feature_image">
                                <a href="<?php permalink_link(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>

                            <div class="post_meta">
                                Posted By :<?php the_author_posts_link(); ?> | Post in : <?php the_time('M d,Y'); ?>
                                | Category : <?php the_category(','); ?> | <?php comments_popup_link($zero = 'No Comment', $one = '1 Comment', $more = '% Comments', $css_class = 'my_comment_class', $none = 'Comments Off'); ?>
                            </div>

                            <!-- custom excert  -->
                            <?php excerpt('49'); ?>

                        </article>