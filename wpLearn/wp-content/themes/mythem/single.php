<?php get_header(); ?>

<!-- <?php get_template_part($slug = 'myText', $name = 'myText'); ?>this line test sample php file -->
<div class="content_wrapper">
	<div class="left_content">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
				<article class="home_article_wrapper">
					<h2><a href="<?php permalink_link(); ?>"><?php the_title(); ?></a></h2>
					<div class="feature_image">
						<a href="<?php permalink_link(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>

					<div class="post_meta">
						Posted By :<?php the_author_posts_link(); ?> | Post in : <?php the_time('M d,Y'); ?>
						| Category : <?php the_category(','); ?> | <?php comments_popup_link($zero = 'No Comment', $one = '1 Comment', $more = '% Comments', $css_class = 'my_comment_class', $none = 'Comment Off'); ?>
					</div>
					
					<p><?php the_content(); ?></p>
					<?php comments_template($file, $separate_comments); ?>
				</article>
		<?php
			endwhile;
		else :
			echo "No Post Found!!";
		endif;
		?>
	</div>
	<?php get_sidebar(); ?>
	<br class="clear" />
</div>
<?php get_footer(); ?>