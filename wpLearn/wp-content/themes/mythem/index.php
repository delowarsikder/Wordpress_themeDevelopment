<?php get_header(); ?>

<!-- <?php get_template_part($slug = 'myText', $name = 'myText'); ?>this line test sample php file -->
<div class="content_wrapper">
	<div class="left_content">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>

		<?php get_template_part($slug='articleSection', $name='article');?><!-- slug =file name,name =any name you can provide-->
				
		<?php
			endwhile;
		else :
			echo "No Post Found!!";
		endif;
		?>
		<!--add paging one way default -->
		<!-- <?php next_posts_link($label, $max_page); ?>
		<?php previous_posts_link($label); ?> -->

		<!--paging try to like it bari -->
		<div class="main_pagination">
			<?php if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
			} ?>
		</div>

	</div>
	<!-- sidebar right -->
	<?php get_sidebar(); ?>
	<br class="clear" />

</div>
<!-- set widgets down to body -->
<?php get_template_part('top_footer_wedgets') ?>
<?php get_footer(); ?>