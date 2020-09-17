<?php
//calling stylesheet

use function PHPSTORM_META\map;

function calling_resources()
{
    // wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_style($handle = "style", $src = get_stylesheet_uri(), $deps, $ver = '1.0.0', $media);
    wp_enqueue_style($handle = "comments_style", $src = get_template_directory_uri().'/css/comments.css', $deps, $ver = '1.0.0', $media);
}
add_action($tag = "wp_enqueue_scripts", $function_to_add = "calling_resources", $priority, $accepted_args);
// add_action("wp_enqueue_scripts", "calling_resources");

function our_theme_setup()
{
    //calling register navbar menu
    register_nav_menus(array(
        'header_menu' => __('Header Menu'),
        'footer_menu' => __('Footer Menu'),
    ));
    //calling feature thubnails image
    add_theme_support('post-thumbnails');
}
// add_action('init', 'our_theme_setup');
add_action('after_setup_theme', 'our_theme_setup');


//sidebar initialization

function ourWidgetInit()
{
    register_sidebar(array(
        'name' => 'Primary Sidebar',
        'id' => 'sidebar1',
        'before_widget' => '<div class="sidebar_single_area clear">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="wid_heading">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Bottom Widgets Left',
        'id' => 'sidebar2',
        'before_widget' => '<div class="b_f_s_wrap">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="red">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Bottom Widgets middle',
        'id' => 'sidebar3',
        'before_widget' => '<div class="b_f_s_wrap">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="green">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Bottom Widgets Right',
        'id' => 'sidebar4',
        'before_widget' => '<div class="b_f_s_wrap">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="orange">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'ourWidgetInit');

// Excerpt Function
// const var $readmore='readmore';

function excerpt($num)
{
    $limit = $num + 1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . " <a href='" . get_permalink($post->ID) . "' class='readmore'>Continue Reading &raquo;</a>";
    echo $excerpt;
}

/* Custom Pagination */
function pagination($pages = '', $range = 4){ 
    $showitems = ($range * 2)+1;        
	global $paged;     
	if(empty($paged)) $paged = 1;      
	if($pages == ''){         
		global $wp_query;         
		$pages = $wp_query->max_num_pages;         
		if(!$pages){$pages = 1;}
	}
	if(1 != $pages){
		echo "<div class=\"pagination\"><span>Page No- ".$paged." of ".$pages."</span>";
		
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
			echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
		
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";             
				}
		} 
		if ($paged < $pages && $showitems < $pages) 
			echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next Page &rsaquo;</a>";           if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last Page &raquo;</a>";
		echo "</div>\n";
	}}
