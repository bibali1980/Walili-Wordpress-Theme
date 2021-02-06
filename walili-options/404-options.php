<?php


// error page options
Redux::setSection( 'walili-options', array(
  'title'            => esc_html__('404 Error Page', 'walili' ),
  'id'               => 'error-page-options',
  'customizer_width' => '400px',
  'icon'             => 'las la-exclamation-triangle',
    'fields'           => array(


      array(
          'id'       => 'error-page-background-type',
          'type'     => 'radio',
          'title'    => __('Error page background type', 'walili' ),
          'options'  => array(
              '1' => 'Color',
              '2' => 'Image',
          ),
          'default'  => '1'
      ),

    array(
        'required' => array('error-page-background-type', '=', '1'),
        'id'        => 'error-page-color-background-color',
        'title'    => __('Error page background color', 'walili' ),
        'type'      => 'color_gradient',
        'default'   => array(
            'from'  => '#7600e5',
            'to'    => '#0042f9',
        )
    ),

    array(
        'required' => array('error-page-background-type', '=', '1'),
        'id'       => 'error-page-color-background-Shape',
        'type'     => 'media',
        'title'    => esc_html__('Error page background Shape', 'walili' ),
        'compiler' => true,
        'default'  => array(
            'url' => get_template_directory_uri() . '/images/header-banner/header_banner_shape.png',
        )
    ),

    array(
        'required' => array('error-page-background-type', '=', '2'),
        'id'       => 'error-page-image-background-image',
        'type'     => 'media',
        'title'    => esc_html__('Error page background image', 'walili' ),
        'compiler' => true,
        'default'  => array(
            'url' => get_template_directory_uri() . '/images/header-banner/header_banner_image.png',
        )
    ),

    array(
        'required' => array('error-page-background-type', '=', '2'),
        'id'       => 'error-page-image-background-image-shape',
        'type'     => 'media',
        'title'    => esc_html__('Error page background image shape', 'walili' ),
        'compiler' => true,
        'default'  => array(
            'url' => get_template_directory_uri() . '/images/header-banner/header_banner_shape.png',
        )
    ),


    array(
        'title'     => esc_html__( 'Page error title', 'walili' ),
        'id'        => 'page-error-title',
        'type'      => 'text',
        'default'   => esc_html__( 'Error. PAGE NOT FOUND.', 'walili' ),
    ),

    array(
        'title'         => esc_html__('Page error title Typography', 'walili'),
        'id'            => 'page-error-title-typography',
        'type'          => 'typography',
        'text-align'    => false,
        'default'        => array(
            'font-family'    => 'Poppins',
            'font-size'      => '50px',
            'font-weight'     => '700',
            'line-height'    => '20px',
            'color'          => '#FFFFFF',
          ),
    ),

        array(
        'title'     => esc_html__( 'Page error subtitle', 'walili' ),
        'id'        => 'page-error-subtitle',
        'type'      => 'textarea',
        'default'   => esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'walili' ),
        ),

        array(
            'title'         => esc_html__('Page error subtitle Typography', 'walili'),
            'id'            => 'page-error-subtitle-typography',
            'type'          => 'typography',
            'text-align'    => false,
            'default'        => array(
                'font-family'    => 'Poppins',
                'font-size'      => '28px',
                'font-weight'     => '400',
                'line-height'    => '20px',
                'color'          => '#FFFFFF',
              ),
        ),

        array(
            'id'      => 'error-page-is-show-search-box',
            'type'    => 'switch',
            'title'   => esc_html__( 'Search Box visibility', 'walili' ),
            'on'      => esc_html__('Enable', 'walili'),
            'off'     => esc_html__('Disable', 'walili'),
            'default' => true,
        ),

        array(
            'id'      => 'error-page-is-show-go-home-button',
            'type'    => 'switch',
            'title'   => esc_html__( 'Go Back home visibility', 'walili' ),
            'on'      => esc_html__('Enable', 'walili'),
            'off'     => esc_html__('Disable', 'walili'),
            'default' => true,
        ),


        array(
            'required' => array('error-page-is-show-go-home-button', '=', '1'),
            'title'     => esc_html__( 'Home button label', 'walili' ),
            'id'        => 'go-back-to-home-page-text',
            'type'      => 'text',
            'default'   => esc_html__( 'Go Back to home Page', 'walili' ),
        ),


  )
));



 ?>
