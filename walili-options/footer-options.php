<?php


// Footer Options
Redux::setSection( 'walili-options', array(
    'title'            => esc_html__('Footer Options', 'walili' ),
    'id'               => 'footer-options',
    'customizer_width' => '400px',
    'icon'             => 'las la-arrow-down',
));


//Main Footer Options
Redux::setSection( 'walili-options', array(
    'title'            => esc_html__( 'Main Footer', 'walili' ),
    'id'               => 'footer-background-options-id',
    'customizer_width' => '400px',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

	      array(
          'id'      => 'is-footer-banner',
          'type'    => 'switch',
          'title'   => esc_html__( 'Footer visibility', 'walili' ),
          'on'      => esc_html__('Enable', 'walili'),
          'off'     => esc_html__('Disable', 'walili'),
          'default' => true,
      ),

      array(
	  'required' => array('is-footer-banner', '=', '1'),
          'id'       => 'footer-background-style',
          'type'     => 'radio',
          'title'    => __('Footer background type', 'walili' ),
          'options'  => array(
              '1' => 'Default',
              '2' => 'Customizable',
          ),
          'default'  => '1'
      ),

      array(
      'required' => array('footer-background-style', '=', '1'),
      'id'        => 'main_footer_style_warning_1',
      'type'      => 'info',
      'style'     => 'info',
      'title'     => esc_html__( 'Default Footer', 'walili' ),
      'desc'      => esc_html__( 'You can add footer content by (Walili footer widgets) that you can find under: Appearance->Widgets', 'walili' ),
      ),

    array(
    'required' => array('footer-background-style', '=', '2'),
    'id'        => 'main_footer_style_warning_2',
    'type'      => 'info',
    'style'     => 'info',
    'title'     => esc_html__( 'Customizable Footer', 'walili' ),
    'desc'      => esc_html__( 'You can edit your Footer template with Elementor , the (Walili Customizable Footer) is under: Templates->Saved Templates->Walili Customizable Footer', 'walili' ),
    ),


      array(
          'required' => array('footer-background-style', '=', '1'),
          'id'       => 'footer-background-type',
          'type'     => 'radio',
          'title'    => __('Footer background type', 'walili' ),
          'options'  => array(
              '1' => 'Color',
              '2' => 'Image',
          ),
          'default'  => '1'
      ),

        array(
        'required' => array('footer-background-style', '=', '1'),
        'title'     => esc_html__( 'Footer Column', 'walili' ),
        'id'        => 'footer-column-number',
        'type'      => 'select',
        'default'   => '3',
        'options'   => array(
            '6' => esc_html__( 'Two Column', 'walili' ),
            '4' => esc_html__( 'Three Column', 'walili' ),
            '3' => esc_html__( 'Four Column', 'walili' ),
        )
      ),

    array(
        'required' => array('footer-background-type', '=', '1'),
        'id'        => 'footer-background-color',
        'title'    => __('Footer background color', 'walili' ),
        'type'      => 'color_gradient',
        'default'   => array(
            'from'  => '#0e8da1',
            'to'    => '#4627f0',
        )
    ),

    array(
        'required' => array('footer-background-type', '=', '1'),
        'id'       => 'footer-background-color-background-Shape',
        'type'     => 'media',
        'title'    => esc_html__('Footer background Shape', 'walili' ),
        'compiler' => true,
        'default'  => array(
            'url' => get_template_directory_uri() . '/images/footer/footer_shap.png',
        )
    ),

    array(
        'required' => array('footer-background-type', '=', '2'),
        'id'       => 'footer-background-image-background-image',
        'type'     => 'media',
        'title'    => esc_html__('Footer background image', 'walili' ),
        'compiler' => true,
        'default'  => array(
            'url' => get_template_directory_uri() . '/images/footer/footer_bg.png',
        )
    ),

    array(
        'required' => array('footer-background-type', '=', '2'),
        'id'       => 'footer-background-image-background-shape',
        'type'     => 'media',
        'title'    => esc_html__('Footer background image shape', 'walili' ),
        'compiler' => true,
        'default'  => array(
            'url' => get_template_directory_uri() . '/images/footer/footer_shap.png',
        )
    ),

    array(
      'required' => array('footer-background-style', '=', '1'),
        'title'         => esc_html__('Footer Widget Title Typography', 'walili'),
        'id'            => 'footer-widget-title-typography',
        'type'          => 'typography',
        'text-align'    => false,
        'default'        => array(
            'font-family'    => 'Poppins',
            //'letter-spacing' => '0.5px',
            'font-size'      => '26px',
            'font-weight'     => '600',
            'line-height'    => '20px',
            'color'          => '#263b80',
          ),
    ),

    array(
      'required' => array('footer-background-style', '=', '1'),
        'title'         => esc_html__('Footer Widget Content Typography', 'walili'),
        'id'            => 'footer-widget-content-typography',
        'type'          => 'typography',
        'text-align'    => false,
        'default'        => array(
            'font-family'    => 'Poppins',
            //'letter-spacing' => '0.5px',
            'font-size'      => '16px',
            'font-weight'     => '300',
            'line-height'    => '20px',
            'color'          => '#658cc4',
          ),
    ),


  )
));



// Bottom Footer Options
Redux::setSection('walili-options', array(
    'title'            => esc_html__('Bottom Footer', 'walili' ),
    'id'               => 'bottom-footer-options-id',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

      array(
          'id'      => 'is-bottom-footer-banner',
          'type'    => 'switch',
          'title'   => esc_html__( 'Bottom footer visibility', 'walili' ),
          'on'      => esc_html__('Enable', 'walili'),
          'off'     => esc_html__('Disable', 'walili'),
          'default' => true,
      ),

      array(
        'required' => array('is-bottom-footer-banner', '=', '1'),
          'id'        => 'footer-bottom-background-color',
          'type'      => 'color',
          'title'     => esc_html__('Background  color', 'walili' ),
          'default' => '#1148f7',
      ),

      array(
        'required' => array('is-bottom-footer-banner', '=', '1'),
          'title'     => esc_html__('Left Content', 'walili'),
          'id'        => 'bottom-footer-left-text',
          'type'      => 'editor',
          'default'   => '© {{{year}}} <a href="#">Walili Theme</a> All rights reserved',
          'args'    => array(
              'wpautop'       => true,
              'media_buttons' => false,
              'textarea_rows' => 10,
              'teeny'         => false,
              'quicktags'     => false,
          )
      ),

      array(
        'required' => array('is-bottom-footer-banner', '=', '1'),
          'title'         => esc_html__('Left Content Typography', 'walili'),
          'id'            => 'bottom-footer-left-text-typography',
          'type'          => 'typography',
          'text-align'    => false,
          'default'        => array(
              'font-family'    => 'Poppins',
              //'letter-spacing' => '0.5px',
              'font-size'      => '16px',
              'font-weight'     => '300',
              'line-height'    => '16px',
              'color'          => '#FFFFFF',
            ),
      ),

      array(
        'required' => array('is-bottom-footer-banner', '=', '1'),
          'id'        => 'bottom-footer-left-text-typography-link-color',
          'type'      => 'color',
          'title'     => esc_html__('Left Content Links Color', 'walili' ),
          'default' => '#181623',
      ),

      array(
        'required' => array('is-bottom-footer-banner', '=', '1'),
          'title'     => esc_html__('Right Content', 'walili'),
          'id'        => 'bottom-footer-right-text',
          'type'      => 'editor',
          'default'   => '<a href="#">Support</a>   <a href="#">Security</a>   <a href="#">Privacy</a>',
          'args'    => array(
              'wpautop'       => true,
              'media_buttons' => false,
              'textarea_rows' => 10,
              'teeny'         => false,
              'quicktags'     => false,
          )
      ),

      array(
        'required' => array('is-bottom-footer-banner', '=', '1'),
          'title'         => esc_html__('Right Content Typography', 'walili'),
          'id'            => 'bottom-footer-right-text-typography',
          'type'          => 'typography',
          'text-align'    => false,
          'default'        => array(
              'font-family'    => 'Poppins',
              //'letter-spacing' => '0.5px',
              'font-size'      => '16px',
              'font-weight'     => '300',
              'line-height'    => '16px',
              'color'          => '#FFFFFF',
            ),
      ),

      array(
        'required' => array('is-bottom-footer-banner', '=', '1'),
          'id'        => 'bottom-footer-right-text-typography-link-color',
          'type'      => 'color',
          'title'     => esc_html__('Right Content Links Color', 'walili' ),
          'default' => '#181623',
      ),


    )
) );


 ?>
