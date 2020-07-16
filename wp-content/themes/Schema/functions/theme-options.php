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
add_action( 'customize_register', 'superultra_register_theme_customizer' );
/*
 * Register Our Customizer Stuff Here
 */
function superultra_register_theme_customizer( $wp_customize ) {
	// Create custom panel.
	$wp_customize->add_panel( 'text_blocks', array(
		'priority'       => 500,
		'theme_supports' => '',
		'title'          => __( 'Front Page Section', 'superultra' ),
		'description'    => __( 'Set editable text for certain content.', 'superultra' ),
	) );
	// Add Banner Details
	// Add section
	$wp_customize->add_section( 'custom_banner_title' , array(
		'title'    => __('Change Banner Title','superultra'),
		'panel'    => 'text_blocks',
		'priority' => 10
  ) );
  
  $wp_customize->add_section( 'custom_banner_des' , array(
		'title'    => __('Change Banner Description','superultra'),
		'panel'    => 'text_blocks',
		'priority' => 10
  ) );
  
  $wp_customize->add_section( 'custom_banner_image' , array(
		'title'    => __('Change Banner Image','superultra'),
		'panel'    => 'text_blocks',
		'priority' => 10
  ) );

  //  Banner Add setting
	$wp_customize->add_setting( 'banner_title_block', array(
    'default'           => __( 'default text', 'superultra' ),
    'sanitize_callback' => 'sanitize_text'
 ) );
 
 $wp_customize->add_setting( 'banner_des_block', array(
   'default'           => __( 'default text', 'superultra' ),
   'sanitize_callback' => 'sanitize_text'
) );

$wp_customize->add_setting( 'banner_image_block', array(
 'default'           => __( 'default text', 'superultra' ),
 'sanitize_callback' => 'sanitize_text'
) );

// Add control
$wp_customize->add_control( new WP_Customize_Control(
  $wp_customize,
'custom_banner_title',
    array(
        'label'    => __( 'Banner Title', 'superultra' ),
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
        'label'    => __( 'Banner Description', 'superultra' ),
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
        'label'    => __( 'Banner Image', 'superultra' ),
        'section'  => 'custom_banner_image',
        'settings' => 'banner_image_block',
        'type'     => 'image'
    )
  )
);


  //Clients about details.

  $wp_customize->add_section( 'custom_client_title' , array(
		'title'    => __('Change Client Title','superultra'),
		'panel'    => 'text_blocks',
		'priority' => 10
  ) );
  
  $wp_customize->add_section( 'custom_client_des' , array(
		'title'    => __('Change Client Description','superultra'),
		'panel'    => 'text_blocks',
		'priority' => 10
  ) );
  
  $wp_customize->add_section( 'custom_client_image' , array(
		'title'    => __('Change Client Image','superultra'),
		'panel'    => 'text_blocks',
		'priority' => 10
  ) );

	
//Client Setting section

$wp_customize->add_setting( 'client_title_block', array(
  'default'           => __( 'default text', 'superultra' ),
  'sanitize_callback' => 'sanitize_text'
) );

$wp_customize->add_setting( 'client_des_block', array(
 'default'           => __( 'default text', 'superultra' ),
 'sanitize_callback' => 'sanitize_text'
) );

$wp_customize->add_setting( 'client_image_block', array(
'default'           => __( 'default text', 'superultra' ),
'sanitize_callback' => 'sanitize_text'
) );
	
$wp_customize->add_control( new WP_Customize_Control(
  $wp_customize,
'custom_banner_client_title',
    array(
        'label'    => __( 'Client Title', 'superultra' ),
        'section'  => 'custom_client_title',
        'settings' => 'client_title_block',
        'type'     => 'text'
    )
  )
);

$wp_customize->add_control( new WP_Customize_Control(
$wp_customize,
'custom_client_des',
    array(
        'label'    => __( 'Client Description', 'superultra' ),
        'section'  => 'custom_client_des',
        'settings' => 'client_des_block',
        'type'     => 'textarea'
    )
  )
);

$wp_customize->add_control( new WP_Customize_Image_Control(
$wp_customize,
'custom_client_image',
    array(
        'label'    => __( 'Profile Image', 'superultra' ),
        'section'  => 'custom_client_image',
        'settings' => 'client_image_block',
        'type'     => 'image'
    )
  )
);

// Sanitize text
function sanitize_text( $text ) {
  return sanitize_text_field( $text );
}
}

//features section
add_action( 'customize_register', 'superultra_register_theme_customizer_feature');

function superultra_register_theme_customizer_feature ($wp_customize){

$wp_customize->add_panel( 'text_feature_blocks', array(
  'priority'       => 500,
  'theme_supports' => '',
  'title'          => __( 'Feature On Section', 'superultra' ),
  'description'    => __( 'Set editable text for certain content.', 'superultra' ),
) );
// Add Feature On Details
// Add section
$wp_customize->add_section( 'custom_feature_links1' , array(
  'title'    => __('Update Feature Link1','superultra'),
  'panel'    => 'text_feature_blocks',
  'priority' => 10
) );

$wp_customize->add_section( 'custom_feature_links2' , array(
  'title'    => __('Update Feature Link2','superultra'),
  'panel'    => 'text_feature_blocks',
  'priority' => 10
) );

$wp_customize->add_section( 'custom_feature_links3' , array(
  'title'    => __('Update Feature Link3','superultra'),
  'panel'    => 'text_feature_blocks',
  'priority' => 10
) );

$wp_customize->add_section( 'custom_feature_links4' , array(
    'title'    => __('Update Feature Link4','superultra'),
    'panel'    => 'text_feature_blocks',
    'priority' => 10
  ) );

  $wp_customize->add_section( 'custom_feature_links5' , array(
    'title'    => __('Update Feature Link5','superultra'),
    'panel'    => 'text_feature_blocks',
    'priority' => 10
  ) );

  $wp_customize->add_section( 'custom_feature_links6' , array(
    'title'    => __('Update Feature Link6','superultra'),
    'panel'    => 'text_feature_blocks',
    'priority' => 10
  ) );

//  Feature Add setting
$wp_customize->add_setting( 'feature_on_block1', array(
  'default'           => __( 'default text', 'superultra' ),
  'sanitize_callback' => 'sanitize_text'
) );

$wp_customize->add_setting( 'feature_on_block2', array(
 'default'           => __( 'default text', 'superultra' ),
 'sanitize_callback' => 'sanitize_text'
) );

$wp_customize->add_setting( 'feature_on_block3', array(
'default'           => __( 'default text', 'superultra' ),
'sanitize_callback' => 'sanitize_text'
) );

$wp_customize->add_setting( 'feature_on_block4', array(
    'default'           => __( 'default text', 'superultra' ),
    'sanitize_callback' => 'sanitize_text'
));

$wp_customize->add_setting( 'feature_on_block5', array(
    'default'           => __( 'default text', 'superultra' ),
    'sanitize_callback' => 'sanitize_text'
    ) );

$wp_customize->add_setting( 'feature_on_block6', array(
    'default'           => __( 'default text', 'superultra' ),
    'sanitize_callback' => 'sanitize_text'
    ) );

// Add control
$wp_customize->add_control( new WP_Customize_Control(
$wp_customize,
'custom_feature_links1',
  array(
      'label'    => __( 'Feature Link1', 'superultra' ),
      'section'  => 'custom_feature_links1',
      'settings' => 'feature_on_block1',
      'type'     => 'text'
  )
)
);

$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'custom_feature_links1',
      array(
          'label'    => __( 'Feature Link1', 'superultra' ),
          'section'  => 'custom_feature_links1',
          'settings' => 'feature_on_block1',
          'type'     => 'text'
      )
    )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'custom_feature_links2',
          array(
              'label'    => __( 'Feature Link2', 'superultra' ),
              'section'  => 'custom_feature_links2',
              'settings' => 'feature_on_block2',
              'type'     => 'text'
          )
        )
        );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'custom_feature_links3',
              array(
                  'label'    => __( 'Feature Link3', 'superultra' ),
                  'section'  => 'custom_feature_links3',
                  'settings' => 'feature_on_block3',
                  'type'     => 'text'
              )
            )
            );

            $wp_customize->add_control( new WP_Customize_Control(
                $wp_customize,
                'custom_feature_links4',
                  array(
                      'label'    => __( 'Feature Link4', 'superultra' ),
                      'section'  => 'custom_feature_links4',
                      'settings' => 'feature_on_block4',
                      'type'     => 'text'
                  )
                )
                );

                $wp_customize->add_control( new WP_Customize_Control(
                    $wp_customize,
                    'custom_feature_links5',
                      array(
                          'label'    => __( 'Feature Link5', 'superultra' ),
                          'section'  => 'custom_feature_links5',
                          'settings' => 'feature_on_block5',
                          'type'     => 'text'
                      )
                    )
                    );

                    $wp_customize->add_control( new WP_Customize_Control(
                        $wp_customize,
                        'custom_feature_links6',
                          array(
                              'label'    => __( 'Feature Link6', 'superultra' ),
                              'section'  => 'custom_feature_links6',
                              'settings' => 'feature_on_block6',
                              'type'     => 'text'
                          )
                        )
                        );

    //feature images

$wp_customize->add_section( 'custom_feature_image1' , array(
    'title'    => __('Update Feature Image1','superultra'),
    'panel'    => 'text_feature_blocks',
    'priority' => 10
) );

$wp_customize->add_section( 'custom_feature_image2' , array(
    'title'    => __('Update Feature Image2','superultra'),
    'panel'    => 'text_feature_blocks',
    'priority' => 10
) );

$wp_customize->add_section( 'custom_feature_image3' , array(
    'title'    => __('Update Feature Image3','superultra'),
    'panel'    => 'text_feature_blocks',
    'priority' => 10
) );

$wp_customize->add_section( 'custom_feature_image4' , array(
    'title'    => __('Update Feature Image4','superultra'),
    'panel'    => 'text_feature_blocks',
    'priority' => 10
) );

$wp_customize->add_section( 'custom_feature_image5' , array(
    'title'    => __('Update Feature Image5','superultra'),
    'panel'    => 'text_feature_blocks',
    'priority' => 10
) );

$wp_customize->add_section( 'custom_feature_image6' , array(
    'title'    => __('Update Feature Image6','superultra'),
    'panel'    => 'text_feature_blocks',
    'priority' => 10
) );

  //setting

$wp_customize->add_setting( 'feature_image_block1', array(
    'default'           => __( 'default text', 'superultra' ),
    'sanitize_callback' => 'sanitize_text'
) );
  
$wp_customize->add_setting( 'feature_image_block2', array(
    'default'           => __( 'default text', 'superultra' ),
    'sanitize_callback' => 'sanitize_text'
) );
  
$wp_customize->add_setting( 'feature_image_block3', array(
    'default'           => __( 'default text', 'superultra' ),
    'sanitize_callback' => 'sanitize_text'
) );
  
$wp_customize->add_setting( 'feature_image_block4', array(
    'default'           => __( 'default text', 'superultra' ),
    'sanitize_callback' => 'sanitize_text'
));

$wp_customize->add_setting( 'feature_image_block5', array(
    'default'           => __( 'default text', 'superultra' ),
    'sanitize_callback' => 'sanitize_text'
) );
  
$wp_customize->add_setting( 'feature_image_block6', array(
    'default'           => __( 'default text', 'superultra' ),
    'sanitize_callback' => 'sanitize_text'
) );
//control

$wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'custom_feature_image1',
        array(
        'label'    => __( 'Add Feature Image1', 'superultra' ),
        'section'  => 'custom_feature_image1',
        'settings' => 'feature_image_block1',
        'type'     => 'image'
        )
    )
);

$wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'custom_feature_image2',
        array(
        'label'    => __( 'Add Feature Image2', 'superultra' ),
        'section'  => 'custom_feature_image2',
        'settings' => 'feature_image_block2',
        'type'     => 'image'
        )
    )
);

$wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'custom_feature_image3',
        array(
        'label'    => __( 'Add Feature Image3', 'superultra' ),
        'section'  => 'custom_feature_image3',
        'settings' => 'feature_image_block3',
        'type'     => 'image'
        )
    )
);

$wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'custom_feature_image4',
        array(
        'label'    => __( 'Add Feature Image4', 'superultra' ),
        'section'  => 'custom_feature_image4',
        'settings' => 'feature_image_block4',
        'type'     => 'image'
        )
    )
);

$wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'custom_feature_image5',
        array(
        'label'    => __( 'Add Feature Image5', 'superultra' ),
        'section'  => 'custom_feature_image5',
        'settings' => 'feature_image_block5',
        'type'     => 'image'
        )
    )
);

$wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'custom_feature_image6',
        array(
        'label'    => __( 'Add Feature Image6', 'superultra' ),
        'section'  => 'custom_feature_image6',
        'settings' => 'feature_image_block6',
        'type'     => 'image'
        )
    )
);



                        
}



?>