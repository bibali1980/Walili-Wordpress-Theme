  <?php

  // Preloader Options
  Redux::setSection( 'walili-options', array(
      'title'            => esc_html__( 'Preloader Options', 'walili' ),
      'id'               => 'preloader-options-id',
      'customizer_width' => '400px',
      'icon'             => 'las la-spinner',
      'fields'           => array(

      array(
          'id'      => 'is-preloading',
          'type'    => 'switch',
          'title'   => esc_html__( 'Pre-loading', 'walili' ),
          'on'      => esc_html__('Enable', 'walili'),
          'off'     => esc_html__('Disable', 'walili'),
          'default' => true,
      ),

      /*
      Preloading type
      */
      array(
        'required' => array('is-preloading', '=', '1'),
          'id'       => 'preloading-type',
          'type'     => 'radio',
          'title'    => __('Pre-loading type', 'walili' ),
          'options'  => array(
              '1' => 'Default',
              '2' => 'Custom',
          ),
          'default'  => '1'
      ),

      array(
        'required' => array('preloading-type', '=', '1'),
          'title'     => esc_html__( 'Preloader', 'walili' ),
          'id'        => 'preloader-default',
          'type'      => 'image_select',
          'options'   => array(
              'preloader_1' => array(
                  'alt' => esc_html__( 'Preloader 1', 'walili' ),
                  'img' => get_template_directory_uri() . '/images/preloader/preloader_1.png'
              ),
              'preloader_2' => array(
                  'alt' => esc_html__( 'Preloader 2', 'walili' ),
                  'img' => get_template_directory_uri() . '/images/preloader/preloader_2.png'
              ),
              'preloader_3' => array(
                  'alt' => esc_html__( 'Preloader 3', 'walili' ),
                  'img' => get_template_directory_uri() . '/images/preloader/preloader_3.png'
              ),
              'preloader_4' => array(
                  'alt' => esc_html__( 'Preloader 4', 'walili' ),
                  'img' => get_template_directory_uri() . '/images/preloader/preloader_4.png'
              ),
          ),
          'default' => 'preloader_4'
      ),
              /**
               * Preloading image
               */
              array(
                  'required' => array('preloading-type', '=', '2'),
                  'id'       => 'preloading-image',
                  'type'     => 'media',
                  'title'    => esc_html__( 'Preloader GIF image', 'walili' ),
                  'compiler' => true,
                    'default'  => array(
                      'url' => get_template_directory_uri() . '/images/preloader/preloader.gif',
                  )
              ),

              /*
              preloading background
              */
              array(
                'required' => array('is-preloading', '=', '1'),
                  'id'        => 'preloading-background-color',
                  'type'      => 'color',
                  'title'     => esc_html__('Background page color', 'walili' ),
                  'default' => '#FFFFFF',
              ),
              /*
              Preloader color
              */
              array(
                'required' => array('preloading-type', '=', '1'),
                  'id'        => 'preloader-color',
                  'type'      => 'color',
                  'title'     => esc_html__('Preloader color', 'walili' ),
                  'default' => '#1148f7',
              ),

            /**
           * Preloading Text
           */
          array(
              'required' => array('is-preloading', '=', '1'),
              'id'       => 'loading-text',
              'type'     => 'text',
              'title'    => esc_html__( 'Loading Text', 'walili' ),
              'default'  => 'Loading...'
          ),

          array(
             'required' => array('is-preloading', '=', '1'),
              'title'         => esc_html__('Loading Typography', 'walili'),
              'id'            => 'loading-typography',
              'type'          => 'typography',
              'text-align'    => false,
              'default'        => array(
                  'font-family'    => 'Poppins',
                  //'letter-spacing' => '0.5px',
                  'font-size'      => '18px',
                  'font-weight'     => '500',
                  'line-height'    => '18px',
                  'color'          => '#1148f7',
                ),
          ),



    )
  ));





   ?>
