<?php
function mytheme_widgets_init() {
    register_sidebar( array (
        'name' => __( 'Main Sidebar', 'your-text-domain' ),
        'id' => 'sidebar-1',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'your-text-domain' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action( 'widgets_init', 'mytheme_widgets_init' );

function footer_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer Widgets',
        'id'            => 'footer_1',
        'before_widget' => '<div class="col"><section class="widget %2$s">',
        'after_widget' => '</section></div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footer_widgets_init' );


function what_do_you_widgets_init() {

    register_sidebar( array(
        'name'          => 'What Do You Widgets',
        'id'            => 'what_do_you_1',
        'before_widget' => '<section class="widget widget_rrtc_icon_text_widget"><div class="rtc-itw-inner-holder"><div class="rtc-itw-holder"><div class="text-holder">',
        'after_widget' => '</div></div></div></section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'what_do_you_widgets_init' );