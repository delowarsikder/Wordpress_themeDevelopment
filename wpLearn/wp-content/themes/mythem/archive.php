<?php get_header(); ?>

<!-- <?php get_template_part($slug = 'myText', $name = 'myText'); ?>this line test sample php file -->
<div class="content_wrapper">
	<div class="left_content">
		<?php
		if (have_posts()) :


		?>
			<h2 class="archive_heding">

				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. 
				?>

				<?php /* If this is a category archive */ if (is_category()) { ?>

					<?php _e('Archive For'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category'); ?>

				<?php /* If this is a tag archive */  } elseif (is_tag()) { ?>

					<?php _e('Archive For'); ?> <?php single_tag_title(); ?> <?php _e('Tag'); ?>

				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>

					<?php _e(' Archive For '); ?> <?php the_time('F jS, Y'); ?>

				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

					<?php _e('Archive For'); ?> <?php the_time('F, Y'); ?>

				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

					<?php _e('Archive For'); ?> <?php the_time('Y'); ?>

				<?php /* If this is a search */ } elseif (is_search()) { ?>

					<?php _e('Search Results'); ?>

				<?php /* If this is an author archive */ } elseif (is_author()) { ?>

					<?php _e('Author Archive For'); ?> '<?php echo get_the_author(); ?>'
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

					<?php _e('Blog Archives'); ?>

				<?php } ?>
			</h2>

			<?php

			while (have_posts()) : the_post();
			?>
				<?php get_template_part($slug = 'articleSection', $name = 'article'); ?>
				<!-- slug =file name,name =any name you can provide--><?php get_template_part($slug = 'articleSection', $name = 'article'); ?>
				<!-- slug =file name,name =any name you can provide-->
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
	<?php get_sidebar(); ?>
	<br class="clear" />

</div>
<!-- <?php get_template_part('top_footer_wedgets') ?> -->
<?php get_footer(); ?>