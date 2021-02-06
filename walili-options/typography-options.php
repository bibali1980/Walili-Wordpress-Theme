<?php

Redux::setSection( 'walili-options', array(
    'title'            => esc_html__( 'Typography', 'walili' ),
    'id'               => 'walili-typography_opt',
    'customizer_width' => '400px',
    'icon'             => 'las la-spell-check',
));

Redux::setSection( 'walili-options', array(
    'title'            => esc_html__( 'Body', 'walili' ),
    'id'               => 'walili-typography_opt_body',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'body-typography-id',
            'type'      => 'typography',
            'title'     => esc_html__( 'Body Typography', 'walili' ),
            'default'        => array(
                'font-family'    => 'Poppins',
                'font-size'      => '14px',
                'font-weight'     => '400',
                'line-height'    => '25px',
                'color'          => '#566573',
              ),
            'output'    => 'body'
        ),
    )
));


/*** Headers Typography ***/
Redux::setSection( 'walili-options', array(
    'title'            => esc_html__( 'Headers Typography', 'walili' ),
    'id'               => 'headers-typography-options',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'        => 'headers-typography-options-id',
            'type'      => 'info',
            'style'     => 'info',
            'desc'      => esc_html__( 'This tab contains general typography options. Additional typography options for specific areas can be found within other tabs. Example: For menu typography options go to the Menu Options tab.', 'walili' )
        ),

        array(
            'id'        => 'h1-typography',
            'type'      => 'typography',
            'title'     => esc_html__( 'H1 Headers Typography', 'walili' ),
            'output'    => 'h1, .h1'
        ),

        array(
            'id'        => 'h2-typography',
            'type'      => 'typography',
            'title'     => esc_html__( 'H2 Headers Typography', 'walili' ),
            'output'    => 'h2, .h2'
        ),
        array(
            'id'        => 'h3-typography',
            'type'      => 'typography',
            'title'     => esc_html__( 'H3 Headers Typography', 'walili' ),
            'output'    => 'h3, .h3'
        ),

        array(
            'id'        => 'h4-typography',
            'type'      => 'typography',
            'title'     => esc_html__( 'H4 Headers Typography', 'walili' ),
            'output'    => 'h4, .h4'
        ),

        array(
            'id'        => 'h5-typography',
            'type'      => 'typography',
            'title'     => esc_html__( 'H5 Headers Typography', 'walili' ),
            'output'    => 'h5, .h5'
        ),

        array(
            'id'        => 'h6-typography',
            'type'      => 'typography',
            'title'     => esc_html__( 'H6 Headers Typography', 'walili' ),
            'output'    => 'h6, .h6'
        ),
    )
));
