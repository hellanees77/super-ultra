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


?>