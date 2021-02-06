<?php

// Donation option
Redux::setSection( 'walili-options', array(
	'title'     => esc_html__( 'Donation', 'walili' ),
	'id'        => 'donation',
	'icon'      => 'las la-hand-holding-usd',
	'fields'    => array(

        array(
            'id'        => 'donation-id',
            'type'      => 'info',
            'style'     => 'info',
            'title' => __('Donation', 'walili'),
            'icon'      => 'las la-hand-holding-usd',
            'desc'      => esc_html__( 'Please buy me a coffee.', 'walili' )
        ),

        array(
       'id'       => 'donation-text',
       'type'     => 'text',
       'title'    => __('Donation Link', 'walili'),
       'desc'     => __('Please copy the link to your browser.', 'walili'),
       'default'  => 'http://paypal.me/bibali1980'
       ),

	)
));
