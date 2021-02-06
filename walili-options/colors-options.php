<?php

// Color option
Redux::setSection( 'walili-options', array(
	'title'     => esc_html__( 'Colors', 'walili' ),
	'id'        => 'color',
	'icon'      => 'las la-brush',
	'fields'    => array(

        array(
            'id'        => 'body-typography-notification-id',
            'type'      => 'info',
            'style'     => 'info',
            'desc'      => esc_html__( 'This tab contains general colors options. Additional colors options for specific areas can be found within other tabs. Example: For menu colors options go to the Menu Options tab.', 'walili' )
        ),

        array(
            'id'          => 'accent-color-id',
            'type'        => 'color',
            'title'       => esc_html__( 'Accent Color', 'walili' ),
            'default' => '#00c853',
        ),


        array(
            'id'          => 'links-color-id',
            'type'        => 'link_color',
            'title'       => esc_html__( 'Links Color', 'walili' ),
            'default'  => array(
              'regular'  => '#566573',
              'hover'    => '#00c853',
              'active'   => '#00c853',
           )
        )
	)
));
