<?php
//calling stylesheet

use function PHPSTORM_META\map;

function calling_resources()
{   //css
    wp_enqueue_style($handle = "mainstyle", $src = get_stylesheet_uri(), $deps, $ver = '1.0.1', $media);
    wp_enqueue_style($handle = "nivo-slider-style", $src = get_template_directory_uri().'/css/nivo-slider.css', $deps, $ver = '1.0.0', $media);
    wp_enqueue_style($handle = "nivo-default", $src = get_template_directory_uri().'/themes/default/default.css', $deps, $ver = '1.0.0', $media);
    wp_enqueue_style($handle = "nivo-bar", $src = get_template_directory_uri().'/themes/bar/bar.css', $deps, $ver = '1.0.0', $media);
    wp_enqueue_style($handle = "nivo-light", $src = get_template_directory_uri().'/themes/light/light.css', $deps, $ver = '1.0.0', $media);
    wp_enqueue_style($handle = "nivo-dark", $src = get_template_directory_uri().'/themes/dark/dark.css', $deps, $ver = '1.0.0', $media);
    wp_enqueue_style($handle = "nivo-slider", $src = get_template_directory_uri().'/themes/nivo-slider.css', $deps, $ver = '1.0.0', $media);
    //style for comment section
    wp_enqueue_style($handle = "comments_style", $src = get_template_directory_uri().'/css/comments.css', $deps, $ver = '1.0.0', $media);
    //script
    wp_enqueue_script($handle = "nivo-slider-js1", $src = get_template_directory_uri().'/js/jquery-1.9.0.min.js', $deps, $ver = '1.0.0', $media);
    wp_enqueue_script($handle = "nivo-slider-js2", $src = get_template_directory_uri().'/js/jquery.nivo.slider.js', $deps, $ver = '1.0.0', $media);
    
}
add_action($tag = "wp_enqueue_scripts", $function_to_add = "calling_resources", $priority, $accepted_args);

//set up main menu
function our_main_menu(){
    //calling register navbar menu
    register_nav_menus(array(
        'main_menu' => __('Main menu'),
    ));
    //calling feature thubnails image
    add_theme_support('post-thumbnails');

    //Slider
	register_post_type('customslider' , array(
		'labels' => array(
			'name' => 'Slider',
			'add_new_item' => 'Add New Slider',
		),
		'public' => true,
		'supports' => array(
			'title', 'thumbnail'
		),
	));
}
// add_action('init', 'our_theme_setup');
add_action('after_setup_theme', 'our_main_menu');


//sidebar initialization

function ourWidgetInit()
{
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'id' => 'main_sidebar',
        'before_widget' => '<div class="right_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'ourWidgetInit');

// // for excert 
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