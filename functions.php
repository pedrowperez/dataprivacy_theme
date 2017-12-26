<?php 

    add_theme_support('post-thumbnails');
	
    add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */






function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}


function max_title_length( $title, $max = 300 ) {
    return strlen( $title ) > $max ?
        substr( $title, 0, $max ). "&hellip;" : $title;
}



add_action( 'widgets_init', 'incubus_widgets_init' );
function incubus_widgets_init() {
    register_sidebar( array(
        'name' => __( 'After Slide', 'Incubus' ),
        'id' => 'sec-header-widget',
        'description' => '',
        'before_widget' => '<div class="category-widget">',
		'after_widget'  => '</div>',
        ) );
        register_sidebar( array(
        'name' => __( 'Social Sidebar', 'Incubus' ),
        'id' => 'social-sidebar',
        'description' => '',
        'before_widget' => '<div class="social-media-icons box-child">',
		'after_widget'  => ' </div>',
    ) );
}

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );

// numbered pagination
// function pagination($pages = '', $range = 4)
// {  
//      $showitems = ($range * 2)+1;  
 
//      global $paged;
//      if(empty($paged)) $paged = 1;
 
//      if($pages == '')
//      {
//          global $wp_query;
//          $pages = $wp_query->max_num_pages;
//          if(!$pages)
//          {
//              $pages = 1;
//          }
//      }   
 
//      if(1 != $pages)
//      {
//          echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
//          if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
//          if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
//          for ($i=1; $i <= $pages; $i++)
//          {
//              if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
//              {
//                  echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
//              }
//          }
 
//          if ($paged < $pages && $showitems < $pages) echo "<a class='nextbutton' href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
//          if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
//          echo "</div>\n";
//      }
// }
// function custom_posts_per_page($query) {
//     if (wp_is_mobile()) {
//         $query->set('posts_per_page', 3);
//     } //endif
// } //function

//this adds the function above to the 'pre_get_posts' action     
// add_action('pre_get_posts', 'custom_posts_per_page');

?>