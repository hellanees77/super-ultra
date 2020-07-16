<?php 
/*Functions*/

/**
 * CUSTOM FUNCTIONS
 * ****************
 */
$functionpath = TEMPLATEPATH.'/functions/';
require_once($functionpath.'enqueue.php');
require_once($functionpath.'theme-options.php');
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


?>
