<?php

//Widgets Options
Redux::setSection( 'walili-options', array(
  'title'            => esc_html__('Widgets Options', 'walili' ),
  'id'               => 'widgets-options',
  'customizer_width' => '400px',
  'icon'             => 'las la-window-maximize',
  'fields'           => array(


    array(
        'id'       => 'header-button-colors-id',
        'type'     => 'section',
        'title'    => esc_html__('Footer Widgets Options', 'walili' ),
        'indent'    => true,
      ),

    array(
        'title'         => esc_html__('Widgets Title Typography', 'walili'),
        'id'            => 'footer-widget-title-typography',
        'type'          => 'typography',
        'text-align'    => false,
        'default'        => array(
            'font-family'    => 'Poppins',
            //'letter-spacing' => '0.5px',
            'font-size'      => '18px',
            'font-weight'     => '600',
            'line-height'    => '18px',
            'color'          => '#ffffff',
          ),
    ),

    array(
        'title'         => esc_html__('Widgets Content Typography', 'walili'),
        'id'            => 'footer-widget-content-typography',
        'type'          => 'typography',
        'text-align'    => false,
        'default'        => array(
            'font-family'    => 'Poppins',
            //'letter-spacing' => '0.5px',
            'font-size'      => '16px',
            'font-weight'     => '300',
            'line-height'    => '20px',
            'color'          => '#ffffff',
          ),
    ),


  )
));



 ?>
