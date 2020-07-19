<?php 
/*Functions*/

/**
 * CUSTOM FUNCTIONS
 * ****************
 */
$functionpath = TEMPLATEPATH.'/functions/';
require_once($functionpath.'enqueue.php');
require_once($functionpath.'theme-options.php');
require_once($functionpath.'theme-widgets.php');
/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**post thumbnails */
add_theme_support( 'post-thumbnails' );

/**
 * Add Menu
 */
add_theme_support( 'menus' );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'top'     => __( 'Top' ,'schema'),
    'top-menu'=> __( 'Top Menu', 'schema' ),
    'social'  => __( 'Social Links Menu', 'schema' ),
    'footer'  => __( 'Footer Menu' , 'schema')
    
) );

//Support svg images
function my_own_mime_types( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'my_own_mime_types' );






// pagination
function get_pagination($range = 4,$max_page=0){
	// $paged - number of the current page
	global $paged, $wp_query;
	// How much pages do we have?
	if ( !$max_page || $max_page==0 ) {
	  echo $max_page = $wp_query->max_num_pages;
	}
	// We need the pagination only if there are more than 1 page
	if($max_page > 1){
	  if(!$paged){
		$paged = 1;
	  }
	  // On the first page, don't put the First page link
	  if($paged != 1){
		echo "<a class='page-numbers prev' href=" . get_pagenum_link($paged-1) . " aria-label='Next' aria-hidden='true'> 
		<span>&larr;</span>
		Prev
		 </a>";
	  }
	  // To the previous page
	  //previous_posts_link(' « ');
	  // We need the sliding effect only if there are more pages than is the sliding range
	  if($max_page > $range){
		// When closer to the beginning
		if($paged < $range){
		  for($i = 1; $i <= ($range + 1); $i++){
				echo "<a class='page-numbers";
		  		if($i==$paged) echo " current";
				echo "'";

		  echo " href='" . get_pagenum_link($i) ."'";
		  
		  echo ">$i</a>";
		  }
		}
		// When closer to the end
		elseif($paged >= ($max_page - ceil(($range/2)))){
		  for($i = $max_page - $range; $i <= $max_page; $i++){
			echo "<a class='page-numbers";
		  	if($i==$paged) echo " current";
			echo "'";
		  echo "> href='" . get_pagenum_link($i) ."'";
		  
		  echo ">$i</a>";        }
		}
		// Somewhere in the middle
		elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
		  for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){
				echo "<a class='page-numbers";
		  		if($i==$paged) echo " current";
				echo "'";
		  echo "> href='" . get_pagenum_link($i) ."'";
		  
		  echo ">$i</a>";
		  }
		}
	  }
	  // Less pages than the range, no sliding effect needed
	  else{
		for($i = 1; $i <= $max_page; $i++){
		  echo "<a class='page-numbers' ";
		  if($i==$paged) echo " current";
		  echo "'";
		  echo "> href='" . get_pagenum_link($i) ."'";
		  
		  echo ">$i</a>";
		}
	  }
	  // Next page
	  //next_posts_link(' » ');
	  // On the last page, don't put the Last page link
	  if($paged != $max_page){
		echo "<a class='page-numbers next' href=" . get_pagenum_link($paged+1) . " aria-label='Next'> 
		Next <span>&rarr;</span>
		</a>";
	  }
	}
  }

?>
