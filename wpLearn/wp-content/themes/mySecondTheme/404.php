<?php get_header(); ?>

<!-- <?php get_template_part($slug = 'myText', $name = 'myText'); ?>this line test sample php file -->
<!-- content section -->
<div class="main_wrapper content_bg">
    <div class="wrap">
<div class="content_wrapper">
	<div class="left_content">
	<!-- show 404 error -->
	<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Not Found 404 error', 'mytheme' ); ?></h1>
            </header>
 
            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>
 
                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->
 
        </div><!-- #content -->
    </div><!-- #primary -->
	</div>

</div>
    </div>
</div>
<?php get_footer(); ?>