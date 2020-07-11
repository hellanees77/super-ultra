<?php 
function add_theme_scripts() {

    wp_enqueue_style( 'google-styles','https://fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700,800|Nunito+Sans:400,400i,600,600i,700,700i' );
    wp_enqueue_style( 'fontawesome-all-css', get_template_directory_uri(). '/assets/css/fontawesome-all.css');
    wp_enqueue_style( 'raratheme-companion-public-css', get_template_directory_uri(). '/assets/css/raratheme-companion-public.css');
    wp_enqueue_style( 'style-css', get_template_directory_uri(). '/assets/css/style.css');
  
    // wp_enqueue_script( 'jsdate', get_template_directory_uri() . '/assets/js/jquery-1.12.0.js');
    // wp_enqueue_script( 'jsdatepicker', get_template_directory_uri() . '/assets/js/custom.js');
  
    wp_enqueue_script( 'jquery-1-12-0-js', get_template_directory_uri() . '/assets/js/jquery-1.12.0.js', array ( 'jquery' ), null, false);
   wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), null, false);
   //wp_enqueue_script( 'sticky-sidebar-js', get_template_directory_uri() . '/assets/js/sticky-sidebar.js', array ( 'jquery' ), null, false);

  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>