<?php

Redux::setSection( 'walili-options', array(
	'title'     => esc_html__( 'Blog Options', 'walili' ),
	'id'        => 'blog_page',
	'icon'      => 'las la-blog',
));


Redux::setSection( 'walili-options', array(
	'title'     => esc_html__( 'Blog archive', 'walili' ),
	'id'        => 'blog-archive-options-id',
	'icon'      => '',
	'subsection' => true,
	'fields'    => array(

		array(
				'title'     => esc_html__( 'Blog Page Title', 'walili' ),
				'id'        => 'blog-page-title',
				'type'      => 'text',
				'default'   => esc_html__( '', 'walili' )
		),

		array(
				'title'     => esc_html__( 'Blog Page Subtitle', 'walili' ),
				'id'        => 'blog-page-subtitle',
				'type'      => 'text',
				'default'   => esc_html__( '', 'walili' )
		),

        array(
            'title'     => esc_html__( 'Blog Layout', 'walili' ),
            'id'        => 'blog_layout',
            'type'      => 'image_select',
            'options'   => array(
                'list' => array(
                    'alt' => esc_html__( 'List Layout', 'walili' ),
                    'img' => get_template_directory_uri() . '/images/layouts/list.png'
                ),
                'grid' => array(
                    'alt' => esc_html__( 'Grid Layout', 'walili' ),
                    'img' => get_template_directory_uri() . '/images/layouts/grid.png'
                ),
            ),
            'default' => 'grid'
        ),

				array(
						'title'     => esc_html__( 'Sidebar', 'walili' ),
						'id'        => 'blog-sidebar-type',
						'type'      => 'image_select',
						'options'   => array(
								'sidebar-left' => array(
										'alt' => esc_html__( 'Left Sidebar', 'walili' ),
										'img' => get_template_directory_uri() . '/images/sidebar/sidebar_left.png'
								),
								'sidebar-right' => array(
										'alt' => esc_html__( 'Right Sidebar', 'walili' ),
										'img' => get_template_directory_uri() . '/images/sidebar/sidebar_right.png',
								),
								'sidebar-none' => array(
										'alt' => esc_html__( 'Full Width', 'walili' ),
										'img' => get_template_directory_uri() . '/images/sidebar/sidebar_none.png',
								),
						),
						'default' => 'sidebar-right'
				),

        array(
            'title'     => esc_html__( 'Post title length', 'walili' ),
            'id'        => 'post-title-length',
            'type'      => 'slider',
            'default'   => 10,
            "min"       => 1,
            "step"      => 1,
            "max"       => 50,
            'display_value' => 'text',
        ),
        array(
            'title'     => esc_html__( 'Post word excerpt', 'walili' ),
            'id'        => 'post-excerpt',
            'type'      => 'slider',
            'default'   => 20,
            "min"       => 1,
            "step"      => 1,
            "max"       => 500,
            'display_value' => 'text'
        ),
        array(
            'title'     => esc_html__( 'Read More', 'walili' ),
            'id'        => 'read-more',
            'type'      => 'text',
            'default'   => esc_html__( 'Read More', 'walili' )
        ),

				array(
					'title'     => esc_html__( 'Post Comments', 'walili' ),
					'id'        => 'is-post-comments',
					'type'      => 'switch',
								'on'        => esc_html__( 'Show', 'walili' ),
								'off'       => esc_html__( 'Hide', 'walili' ),
								'default'   => '1',
				),

		array(
			'title'     => esc_html__( 'Post meta visibility', 'walili' ),
			'id'        => 'is-post-meta',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'walili' ),
            'off'       => esc_html__( 'Hide', 'walili' ),
            'default'   => '1',
		),
		array(
			'title'     => esc_html__( 'Post date', 'walili' ),
			'id'        => 'is-post-date',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'walili' ),
            'off'       => esc_html__( 'Hide', 'walili' ),
            'default'   => '1',
            'required' => array( 'is-post-meta', '=', 1 )
		),

    array(
      'title'     => esc_html__( 'Post author', 'walili' ),
      'id'        => 'is-post-author',
      'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'walili' ),
            'off'       => esc_html__( 'Hide', 'walili' ),
            'default'   => '1',
            'required' => array( 'is-post-meta', '=', 1 )
    ),

		array(
			'title'     => esc_html__( 'Post category', 'walili' ),
			'id'        => 'is-post-cat',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'walili' ),
            'off'       => esc_html__( 'Hide', 'walili' ),
            'default'   => '1',
            'required' => array( 'is-post-meta', '=', 1 )
		),
	)
));


Redux::setSection( 'walili-options', array(
	'title'     => esc_html__( 'Blog single', 'walili' ),
	'id'        => 'blog-single-options-id',
	'icon'      => '',
	'subsection' => true,
	'fields'    => array(

		array(
			'title'     => esc_html__( 'Post Tag', 'walili' ),
			'id'        => 'is-post-tag',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'walili' ),
            'off'       => esc_html__( 'Hide', 'walili' ),
            'default'   => '1'
		),
        array(
            'title'     => esc_html__( 'Post meta visibility', 'walili' ),
            'id'        => 'is-single-post-meta',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'walili' ),
            'off'       => esc_html__( 'Hide', 'walili' ),
            'default'   => '1',
        ),
        array(
            'title'     => esc_html__( 'Categories', 'walili' ),
            'id'        => 'is-single-categories',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'walili' ),
            'off'       => esc_html__( 'Hide', 'walili' ),
            'default'   => '1',
            'required' => array( 'is-single-post-meta', '=', 1 )
        ),
        array(
            'title'     => esc_html__( 'Post Author Name', 'walili' ),
            'id'        => 'is-single-post-author',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'walili' ),
            'off'       => esc_html__( 'Hide', 'walili' ),
            'default'   => '1',
            'required' => array( 'is-single-post-meta', '=', 1 )
        ),
        array(
            'title'     => esc_html__( 'Post Date', 'walili' ),
            'id'        => 'is-single-post-date',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'walili' ),
            'off'       => esc_html__( 'Hide', 'walili' ),
            'default'   => '1',
            'required' => array( 'is-single-post-meta', '=', 1 )
        ),
				array(
						'title'     => esc_html__( 'Share buttons', 'walili' ),
						'id'        => 'is-single-post-share-buttons',
						'type'      => 'switch',
						'on'        => esc_html__( 'Show', 'walili' ),
						'off'       => esc_html__( 'Hide', 'walili' ),
						'default'   => '1',
				),
	)
));
