<?php
/**
 * Walili functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Walili
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'walili_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function walili_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Walili, use a find and replace
		 * to change 'walili' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'walili', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_post_type_support( 'page', 'excerpt' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_editor_style();

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', array( 'audio', 'video' ) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main_menu'   => esc_html__( 'Main menu', 'walili' ),
			 )
		 );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'walili_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'walili_setup' );

// Register Elementor Locations
function walili_register_elementor_locations( $elementor_theme_manager ) {
	$elementor_theme_manager->register_all_core_location();
};
add_action( 'elementor/theme/register_locations', 'walili_register_elementor_locations' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function walili_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'walili_content_width', 1200 );
}
add_action( 'after_setup_theme', 'walili_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function walili_scripts() {

	wp_register_style('bootstrap' ,get_template_directory_uri() . '/css/bootstrap.min.css' , array() , true , 'all' );
	wp_enqueue_style('bootstrap');

	wp_register_style('walili-min' ,get_template_directory_uri() . '/css/walili.min.css' , array() , true , 'all' );
	wp_enqueue_style('walili-min');

	wp_register_script('particles-min' , get_template_directory_uri() . '/js/particles.min.js' , array() , true , true);// true to pute js in footer , false is to pute js in header
	wp_enqueue_script('particles-min');

	wp_register_script('walili-min' , get_template_directory_uri() . '/js/walili.min.js' , array() , true , true);// true to pute js in footer , false is to pute js in header
	wp_enqueue_script('walili-min');

	wp_enqueue_script('jquery');

	wp_register_script('bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array() , true , true);// true to pute js in footer , false is to pute js in header
	wp_enqueue_script('bootstrap-js');

	//wp_register_style('font-awesome' ,get_template_directory_uri() . '/css/fontawesome.min.css' , array() , true , 'all' );
	//wp_enqueue_style('font-awesome');

	wp_register_style('line-awesome' ,get_template_directory_uri() . '/css/line-awesome/1.3.0/css/line-awesome.min.css' , array() , true , 'all' );
	wp_enqueue_style('line-awesome');

	//wp_register_script('jquery' , get_template_directory_uri() . '/js/jquery.min.js' , array() , false , true);// true to pute js in footer , false is to pute js in header
	//wp_enqueue_script('jquery');

	wp_register_script('popper' , get_template_directory_uri() . '/js/popper.min.js' , array() , true , true);// true to pute js in footer , false is to pute js in header
	wp_enqueue_script('popper');

	wp_enqueue_style( 'walili-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'walili-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'walili_scripts' );

/**
 * Configure one click demo
 */
require get_template_directory() . '/inc/one-click-demo-config.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
