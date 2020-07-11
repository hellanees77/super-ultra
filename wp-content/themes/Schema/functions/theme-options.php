<?php 
// Add theme support for Custom Logo.
add_theme_support(
    'custom-logo',
    array(
        'width'      => 250,
        'height'     => 250,
        'flex-width' => true,
    )
);
/**Add theme support for Banner text field */
add_action( 'customize_register', 'genesischild_register_theme_customizer' );
/*
 * Register Our Customizer Stuff Here
 */
function genesischild_register_theme_customizer( $wp_customize ) {
	// Create custom panel.
	$wp_customize->add_panel( 'text_blocks', array(
		'priority'       => 500,
		'theme_supports' => '',
		'title'          => __( 'Banner Details', 'genesischild' ),
		'description'    => __( 'Set editable text for certain content.', 'genesischild' ),
	) );
	// Add Banner Details
	// Add section
	$wp_customize->add_section( 'custom_banner_title' , array(
		'title'    => __('Change Banner Title','genesischild'),
		'panel'    => 'text_blocks',
		'priority' => 10
  ) );
  
  $wp_customize->add_section( 'custom_banner_des' , array(
		'title'    => __('Change Banner Description','genesischild'),
		'panel'    => 'text_blocks',
		'priority' => 10
  ) );
  
  $wp_customize->add_section( 'custom_banner_image' , array(
		'title'    => __('Change Banner Image','genesischild'),
		'panel'    => 'text_blocks',
		'priority' => 10
  ) );
	// Add setting
	$wp_customize->add_setting( 'banner_title_block', array(
		 'default'           => __( 'default text', 'genesischild' ),
		 'sanitize_callback' => 'sanitize_text'
  ) );
  
  $wp_customize->add_setting( 'banner_des_block', array(
    'default'           => __( 'default text', 'genesischild' ),
    'sanitize_callback' => 'sanitize_text'
 ) );

 $wp_customize->add_setting( 'banner_image_block', array(
  'default'           => __( 'default text', 'genesischild' ),
  'sanitize_callback' => 'sanitize_text'
) );
	// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'custom_banner_title',
		    array(
		        'label'    => __( 'Banner Title', 'genesischild' ),
		        'section'  => 'custom_banner_title',
		        'settings' => 'banner_title_block',
		        'type'     => 'text'
		    )
	    )
  );

  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
  'custom_banner_des',
      array(
          'label'    => __( 'Banner Description', 'genesischild' ),
          'section'  => 'custom_banner_des',
          'settings' => 'banner_des_block',
          'type'     => 'textarea'
      )
    )
);

$wp_customize->add_control( new WP_Customize_Image_Control(
  $wp_customize,
'custom_banner_image',
    array(
        'label'    => __( 'Banner Image', 'genesischild' ),
        'section'  => 'custom_banner_image',
        'settings' => 'banner_image_block',
        'type'     => 'image'
    )
  )
);
  // Sanitize text
	function sanitize_text( $text ) {
    return sanitize_text_field( $text );
}
}

?>