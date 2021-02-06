<?php


// Header Options
Redux::setSection( 'walili-options', array(
    'title'            => esc_html__('Header Options', 'walili' ),
    'id'               => 'header-options',
    'customizer_width' => '400px',
    'icon'             => 'las la-arrow-up',
));


//Header Layout Options
Redux::setSection('walili-options', array(
    'title'            => esc_html__('Header Layout', 'walili' ),
    'id'               => 'header-layout-type',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

      array(
          'id'      => 'is-sticky-header',
          'type'    => 'switch',
          'title'   => esc_html__('Header Sticky', 'walili' ),
          'on'      => esc_html__('Enable', 'walili'),
          'off'     => esc_html__('Disable', 'walili'),
          'default' => true,
      ),

        array(
            'id'       => 'header-layout-type',
            'type'     => 'radio',
            'title'    => __('Header layout type', 'walili' ),
            'options'  => array(
                '1' => 'Boxed',
                '2' => 'Full width'
            ),
            'default'  => '1'
        ),

        array(
            'id'       => 'menu-alignment-type',
            'type'     => 'radio',
            'title'    => __('Menu Alignment', 'walili' ),
            'options'  => array(
                '1' => 'Right',
                '2' => 'Left',
                '3' => 'Center'
            ),
            'default'  => '3'
        ),

        array(
            'id'      => 'search-icon-header',
            'type'    => 'switch',
            'title'   => esc_html__( 'Search icon', 'walili' ),
            'on'      => esc_html__('Enable', 'walili'),
            'off'     => esc_html__('Disable', 'walili'),
            'default' => false,
        ),

        array(
            'id'        => 'header-background-color',
            'type'      => 'color',
            'title'     => esc_html__('Header background color', 'walili' ),
            'default' => 'transparent',
        ),

        array(
            'required' => array('is-sticky-header', '=', '1'),
            'id'        => 'header-sticky-background-color',
            'type'      => 'color',
            'title'     => esc_html__('Header sticky background  color', 'walili' ),
            'default' => '#FFFFFF',
        ),

    )
) );


// Header banner Options
Redux::setSection( 'walili-options', array(
    'title'            => esc_html__( 'Header Banner', 'walili' ),
    'id'               => 'header-banner-options-id',
    'customizer_width' => '400px',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

      array(
          'id'      => 'is-header-banner',
          'type'    => 'switch',
          'title'   => esc_html__( 'Banner visibility', 'walili' ),
          'on'      => esc_html__('Enable', 'walili'),
          'off'     => esc_html__('Disable', 'walili'),
          'default' => true,
      ),

      array(
        'required' => array('is-header-banner', '=', '1'),
        'title'     => esc_html__( 'Banner height', 'walili' ),
        'id'        => 'header-banner-height',
        'type'      => 'dimensions',
        'width'      => False,
        'units'     => array( 'em','px','%' ),
        'default'  => array(
          'height'  => '350px',
          'units'  => 'px',
      ),
    ),

    array(
       'required' => array('is-header-banner', '=', '1'),
       'title'     => esc_html__( 'Title/Subtitle top margin', 'walili' ),
       'id'        => 'header-banner-title-subtitle-top-margin',
       'type'      => 'spacing',
       'mode'      => 'margin',
       'bottom'      => False,
       'left'      => False,
       'right'      => False,
       'units'     => array( 'em', 'px', '%' ),
       'default'  => array(
         'margin-top'     => '150px',
         'units'   => 'px',
     ),
   ),

    array(
      'required' => array('is-header-banner', '=', '1'),
        'id'      => 'is-header-banner-bubbles-animation',
        'type'    => 'switch',
        'title'   => esc_html__( 'Banner bubbles animation', 'walili' ),
        'on'      => esc_html__('Enable', 'walili'),
        'off'     => esc_html__('Disable', 'walili'),
        'default' => true,
    ),

      array(
          'required' => array('is-header-banner', '=', '1'),
          'id'       => 'header-banner-type',
          'type'     => 'radio',
          'title'    => __('Banner type', 'walili' ),
          'options'  => array(
              '1' => 'Color',
              '2' => 'Image',
          ),
          'default'  => '1'
      ),

    array(
        'required' => array('header-banner-type', '=', '1'),
        'id'        => 'header-banner-background-color',
        'title'    => __('Banner background color', 'walili' ),
        'type'      => 'color_gradient',
        'default'   => array(
            'from'  => '#7600e5',
            'to'    => '#0042f9',
        )
    ),

    array(
        'required' => array('header-banner-type', '=', '1'),
        'id'       => 'header-banner-color-background-Shape',
        'type'     => 'media',
        'title'    => esc_html__('Background Shape', 'walili' ),
        'compiler' => true,
        'default'  => array(
            'url' => get_template_directory_uri() . '/images/header-banner/header_banner_shape.png',
        )
    ),

    array(
        'required' => array('header-banner-type', '=', '2'),
        'id'       => 'header-banner-image-background-image',
        'type'     => 'media',
        'title'    => esc_html__('Background image', 'walili' ),
        'compiler' => true,
        'default'  => array(
            'url' => get_template_directory_uri() . '/images/header-banner/header_banner_image.png',
        )
    ),

    array(
        'required' => array('header-banner-type', '=', '2'),
        'id'       => 'header-banner-image-background-image-shape',
        'type'     => 'media',
        'title'    => esc_html__('Background image shape', 'walili' ),
        'compiler' => true,
        'default'  => array(
            'url' => get_template_directory_uri() . '/images/header-banner/header_banner_shape.png',
        )
    ),

    array(
      'required' => array('is-header-banner', '=', '1'),
        'title'         => esc_html__('Banner Title Typography', 'walili'),
        'id'            => 'header-banner-typography',
        'type'          => 'typography',
        'text-align'    => false,
        'default'        => array(
            'font-family'    => 'Poppins',
            //'letter-spacing' => '0.5px',
            'font-size'      => '50px',
            'font-weight'     => '700',
            'line-height'    => '50px',
            'color'          => '#FFFFFF',
          ),
    ),

    array(
      'required' => array('is-header-banner', '=', '1'),
        'title'         => esc_html__('Banner Subtitle Typography', 'walili'),
        'id'            => 'header-banner-subtitle-typography',
        'type'          => 'typography',
        'text-align'    => false,
        'default'        => array(
            'font-family'    => 'Poppins',
            //'letter-spacing' => '0.5px',
            'font-size'      => '18px',
            'font-weight'     => '300',
            'line-height'    => '18px',
            'color'          => '#FFFFFF',
          ),
    ),
        array(
          'required' => array('is-header-banner', '=', '1'),
        'id'       => 'header-banner-title-subtitle-position',
        'type'     => 'button_set',
        'title'    => esc_html__('Title/Subtitle alignment', 'walili' ),
        'options' => array(
            'left' => esc_html__( 'Left', 'walili' ),
            'center' => esc_html__( 'Center', 'walili' ),
            'right' => esc_html__( 'Right', 'walili' )
        ),
        'default' => 'center'
     ),


  )
));


// Logo options
Redux::setSection('walili-options', array(
    'title'            => esc_html__('Header Logo', 'walili' ),
    'id'               => 'logo-options-id',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

        array(
            'title'     => esc_html__('Header logo', 'walili'),
            'id'        => 'main-logo-id',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => get_template_directory_uri() . '/images/logo/main-logo.png',
            )
        ),

        array(
            'title'     => esc_html__('Sticky header logo', 'walili'),
            'id'        => 'sticky-logo-id',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => get_template_directory_uri() . '/images/logo/main-logo-sticky.png',
            )
        ),

        array(
          'title'     => esc_html__( 'Logo dimensions', 'walili' ),
          'id'        => 'header-logo-dimensions',
          'type'      => 'dimensions',
          'units'     => array( 'em','px','%' ),
          'default'  => array(
            'width'   => '160px',
            'height'  => '40px',
            'units'  => 'px',
        ),
      ),

      array(
          'title'     => esc_html__( 'Logo Padding', 'walili' ),
          'id'        => 'header-logo-padding',
          'type'      => 'spacing',
          'mode'      => 'padding',
          'units'     => array( 'em', 'px', '%' ),
          'default'  => array(
            'padding-top'     => '0px',
            'padding-right'   => '0px',
            'padding-bottom'  => '0px',
            'padding-left'    => '0px',
            'padding-units'   => 'px',
        ),
      ),


    )
) );


// Header button Options
Redux::setSection( 'walili-options', array(
    'title'            => esc_html__( 'Header Button', 'walili' ),
    'id'               => 'header-button-options-id',
    'customizer_width' => '400px',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

    array(
        'id'      => 'is-header-button',
        'type'    => 'switch',
        'title'   => esc_html__('Button visibility', 'walili' ),
        'on'      => esc_html__('Enable', 'walili'),
        'off'     => esc_html__('Disable', 'walili'),
        'default' => true,
    ),

        array(
            'required' => array('is-header-button', '=', '1'),
            'id'       => 'header-button-text',
            'type'     => 'text',
            'title'    => esc_html__('Button label', 'walili' ),
            'default'  => 'Donate'
        ),

        array(
           'required' => array('is-header-button', '=', '1'),
            'title'         => esc_html__('Button Typography', 'walili'),
            'id'            => 'header-button-typography',
            'type'          => 'typography',
            'text-align'    => false,
            'color'         =>false,
            'default'        => array(
                'font-family'    => 'Poppins',
                'font-size'      => '15px',
                'font-weight'     => '600',
                'line-height'    => '15px',
              ),
        ),

          // button icons
        array(
          'required' => array('is-header-button', '=', '1'),
            'id'       => 'header-button-icon',
            'type'     => 'select',
            'select2'  => array( 'containerCssClass' => 'FALSE' ),
            'title'    => 'Button icon',
            'class'    => 'font-icons',
            'options'  => la_icons(),
            'default'  => 'las la-hand-holding-usd',
        ),

        array(
          'required' => array('is-header-button', '=', '1'),
            'id'       => 'header-button-icon-position',
            'type'     => 'radio',
            'title'    => __('Button icon position', 'walili' ),
            'options'  => array(
                '1' => 'Right',
                '2' => 'Left',
            ),
            'default'  => '2'
        ),

        array(
            'required' => array('is-header-button', '=', '1'),
            'id'       => 'header-button-url',
            'type'     => 'text',
            'title'    => esc_html__('Button link', 'walili' ),
            'default'  => 'http://paypal.me/bibali1980'
        ),


                            array(
                              'required' => array('is-header-button', '=', '1'),
                              'title'     => esc_html__( 'Header button radius', 'walili' ),
                              'id'        => 'header-button-radius',
                              'type'      => 'dimensions',
                              'height'      => false,
                              'units'     => array( 'em','px','%' ),
                              'default'  => array(
                                'width'   => '10px',
                                'units'  => 'px',
                            ),
                          ),

                            array(
                              'required' => array('is-header-button', '=', '1'),
                              'title'     => esc_html__( 'Header button dimensions', 'walili' ),
                              'id'        => 'header-button-dimensions',
                              'type'      => 'dimensions',
                              'units'     => array( 'em','px','%' ),
                              'default'  => array(
                                'width'   => '150px',
                                'height'  => '50px',
                                'units'  => 'px',
                            ),
                          ),

        array(
            'required' => array('is-header-button', '=', '1'),
            'id'       => 'header-button-colors-id-section',
            'type'     => 'section',
            'title'    => esc_html__('Button colors', 'walili' ),
            'indent'    => true,
          ),

              array(
                'required' => array('is-header-button', '=', '1'),
                  'id'        => 'header-button-colors-font-color',
                  'type'      => 'color',
                  'title'     => esc_html__('Font  color', 'walili' ),
                  'default' => '#FFFFFF',
              ),

              array(
                'required' => array('is-header-button', '=', '1'),
                  'id'        => 'header-button-colors-border-color',
                  'type'      => 'color',
                  'title'     => esc_html__('Border  color', 'walili' ),
                  'default' => '#00c853',
              ),

              array(
                'required' => array('is-header-button', '=', '1'),
                  'id'        => 'header-button-colors-background-color',
                  'type'      => 'color',
                  'title'     => esc_html__('Background  color', 'walili' ),
                  'default' => '#00c853',
              ),

              array(
                'required' => array('is-header-button', '=', '1'),
                  'id'        => 'header-button-colors-hover-font-color',
                  'type'      => 'color',
                  'title'     => esc_html__('Hover font  color', 'walili' ),
                  'default' => '#00c853',
              ),

              array(
                'required' => array('is-header-button', '=', '1'),
                  'id'        => 'header-button-colors-hover-border-color',
                  'type'      => 'color',
                  'title'     => esc_html__('Hover border  color', 'walili' ),
                  'default' => '#00c853',
              ),

              array(
                'required' => array('is-header-button', '=', '1'),
                  'id'        => 'header-button-colors-hover-background-color',
                  'type'      => 'color',
                  'title'     => esc_html__('Hover background  color', 'walili' ),
                  'default' => '#FFFFFF',
              ),


              array(
                  'required' => array('is-header-button', '=', '1'),
                  'id'       => 'sticky-header-button-colors-id',
                  'type'     => 'section',
                  'title'    => esc_html__('Sticky button colors', 'walili' ),
                  'indent'    => true,
                ),

                    array(
                      'required' => array('is-header-button', '=', '1'),
                        'id'        => 'sticky-header-button-colors-font-color',
                        'type'      => 'color',
                        'title'     => esc_html__('Sticky font  color', 'walili' ),
                        'default' => '#00c853',
                    ),

                    array(
                      'required' => array('is-header-button', '=', '1'),
                        'id'        => 'sticky-header-button-colors-border-color',
                        'type'      => 'color',
                        'title'     => esc_html__('Sticky border  color', 'walili' ),
                        'default' => '#00c853',
                    ),

                    array(
                      'required' => array('is-header-button', '=', '1'),
                        'id'        => 'sticky-header-button-colors-background-color',
                        'type'      => 'color',
                        'title'     => esc_html__('Sticky background  color', 'walili' ),
                        'default' => '#FFFFFF',
                    ),

                    array(
                      'required' => array('is-header-button', '=', '1'),
                        'id'        => 'sticky-header-button-colors-hover-font-color',
                        'type'      => 'color',
                        'title'     => esc_html__('Sticky hover font  color', 'walili' ),
                        'default' => '#FFFFFF',
                    ),

                    array(
                      'required' => array('is-header-button', '=', '1'),
                        'id'        => 'sticky-header-button-colors-hover-border-color',
                        'type'      => 'color',
                        'title'     => esc_html__('Sticky hover border  color', 'walili' ),
                        'default' => '#00c853',
                    ),

                    array(
                      'required' => array('is-header-button', '=', '1'),
                        'id'        => 'sticky-header-button-colors-hover-background-color',
                        'type'      => 'color',
                        'title'     => esc_html__('Sticky hover background  color', 'walili' ),
                        'default' => '#00c853',
                    ),



      )
) );


//Header search button
Redux::setSection('walili-options', array(
    'title'            => __('Header Search Icon', 'walili' ),
    'id'               => 'header-search-icon',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

        array(
            'id'      => 'search-icon-header',
            'type'    => 'switch',
            'title'   => esc_html__( 'Search icon', 'walili' ),
            'on'      => esc_html__('Enable', 'walili'),
            'off'     => esc_html__('Disable', 'walili'),
            'default' => false,
        ),

        array(
          'required' => array('search-icon-header', '=', '1'),
            'id'        => 'search-icon-header-color',
            'type'      => 'color',
            'title'     => esc_html__('Header search icon color', 'walili' ),
            'default' => '#FFFFFF',
        ),

        array(
            'required' => array('search-icon-header', '=', '1'),
            'id'        => 'search-icon-header-sticky-color',
            'type'      => 'color',
            'title'     => esc_html__('Header search icon sticky color', 'walili' ),
            'default' => '#566573',
        ),

    )
) );



 ?>
