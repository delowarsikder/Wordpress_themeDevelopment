<?php get_header(); ?>

<!-- content section -->
<div class="main_wrapper content_bg">
    <div class="wrap">
<div class="content_wrapper">
	<div class="left_content">
		<?php
		if (have_posts()) :
		?>
			<div class="search_object">
				<h2>Search Results for : <?php the_search_query(); ?></h2>
			</div>

			<?php
			while (have_posts()) : the_post();
			?>
				<?php get_template_part($slug='articleSection', $name='article');?><!-- slug =file name,name =any name you can provide-->
		<?php
			endwhile;
		else :
			echo "No Post Found!!";
		endif;
		?>

		<!--paging try to like it bari -->
		<div class="main_pagination">
			<?php if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
			} ?>
		</div>

	</div>

</div>
	</div>
</div>
<?php get_footer(); ?>