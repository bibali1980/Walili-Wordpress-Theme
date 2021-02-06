<?php

// menu options
Redux::setSection('walili-options', array(
    'title'            => esc_html__( 'Menu Options', 'walili' ),
    'id'               => 'menu-options-id',
    'icon'             => 'las la-bars',
));


Redux::setSection('walili-options', array(
    'title'            => esc_html__( 'Main Menu', 'walili' ),
    'id'               => 'main-menu-options-id',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'            => 'main-menu-typography',
            'type'          => 'typography',
            'title'         => esc_html__( 'Menu Typography', 'walili' ),
            'text-align'    => false,
            'color'         => false,
            'default'        => array(
                'font-family'    => 'Poppins',
                'font-size'      => '15px',
                'font-weight'     => '600',
                'line-height'    => '15px',
              ),
        ),

        array(
            'title'         => esc_html__( 'Main menu font color', 'walili' ),
            'id'            => 'main-menu-font-color',
            'type'          => 'color',
            'default'        => '#FFFFFF',
        ),

        array(
            'title'         => esc_html__( 'Main menu hover/active font color', 'walili' ),
            'id'            => 'main-menu-active-font-color',
            'type'          => 'color',
            'default'        => '#FFFFFF',
        ),

      //main menu Sticky
      array(
          'title'         => esc_html__( 'Main menu Sticky font color', 'walili' ),
          'id'            => 'main-menu-sticky-font-color',
          'type'          => 'color',
          'default'        => '#566573',
      ),

      array(
          'title'         => esc_html__( 'Main menu Sticky hover/active font color', 'walili' ),
          'id'            => 'main-menu-sticky-active-font-color',
          'type'          => 'color',
          'default'        => '#566573',
      ),

/*Dropdown menu items*/
      array(
          'id'       => 'dropdown-menu-items',
          'type'     => 'section',
          'title'    => esc_html__('Dropdown items', 'walili' ),
          'indent'    => true,
        ),

        array(
            'title'         => esc_html__( 'Dropdown item font color', 'walili' ),
            'id'            => 'dropdown-item-font-color',
            'type'          => 'color',
            'default'        => '#566573',
        ),

        array(
            'title'         => esc_html__( 'Dropdown item hover font color', 'walili' ),
            'id'            => 'dropdown-item-hover-font-color',
            'type'          => 'color',
            'default'        => '#00c853',
        ),

    )
));

//Top Menu


 ?>
