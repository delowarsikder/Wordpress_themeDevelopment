<?php get_header(); ?>

<!-- <?php get_template_part($slug = 'myText', $name = 'myText'); ?>this line test sample php file -->
<div class="content_wrapper">
	<div class="left_content">
	<h2>Custom heading</h2>
		<?php
		if(have_posts()):
			while(have_posts()):the_post();
			?>
			<article class="home_article_wrapper">
					<h2><a href="<?php permalink_link();?>"><?php the_title();?></a></h2>	
					<div class="feature_image">
					<a href="<?php permalink_link();?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<p><?php the_content();?></p>	
			</article>
			<?php
			endwhile;
		else:
			echo "No Post Found!!";
		endif;	
		?>
	</div>
	<?php get_sidebar();?>
	<br class="clear" />
</div>
<?php get_footer(); ?>