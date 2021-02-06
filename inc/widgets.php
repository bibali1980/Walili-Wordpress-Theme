<?php


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function walili_widgets_init() {

$opt = get_option('walili-options');
$footer_column_number = $opt['footer-column-number'];

	register_sidebar(
		array(
			'name'          => esc_html__( 'Walili Footer Widgets', 'walili' ),
			'id'            => 'footer_widget',
			'description'   => esc_html__( 'Add widgets here for widget Footer area.', 'walili' ),
			'before_widget' => '<div id="%1$s" class="widget footer-widget col-md-' . $footer_column_number . ' col-sm-12 %2$s">
													<div class="footer-widget-inner">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="widget-title footer-title">',
			'after_title'   => '</h3>'
		)
	);

		register_sidebar(array(
			'name'          => esc_html__('Walili Blog Sidebar Widgets', 'walili'),
			'description'   => esc_html__('Add widgets in the blog sidebar widgets area.', 'walili'),
			'id'            => 'blog_widget',
			'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>'
	  )
	);


register_sidebar(array(
	'name'          => esc_html__('Walili Shop Sidebar Widgets', 'walili'),
	'description'   => esc_html__('Add widgets in the Shop sidebar widgets area.', 'walili'),
	'id'            => 'shop_widget',
	'before_widget' => '<div id="%1$s" class="widget shop-widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>'
)
);


}
add_action( 'widgets_init', 'walili_widgets_init' );



 ?>
