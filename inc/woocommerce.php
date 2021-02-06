<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Walili
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function walili_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 825,
			'gallery_thumbnail_image_width' => 500,
			'single_image_width' => 825,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'walili_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function walili_woocommerce_scripts() {
	wp_enqueue_style( 'walili-woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), _S_VERSION );

	//wp_enqueue_style( 'woocommerce-style', WC()->plugin_url() . '/assets/css/woocommerce.css', array(), _S_VERSION );

//i copy woocommerce star font to my theme fonts folder and i add the path in woocommerce.css file
 /*
	$font_path   = WC()->plugin_url() . '/assets/fonts/';
		$inline_font = '@font-face {
			font-family: star;
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
			 url("' . $font_path . 'star.woff) format("woff"),
			  url("' . $font_path . 'star.ttf) format("truetype"),
				 url("' . $font_path . 'star.svg#star) format("svg");
			font-weight: 400;
			font-style: normal
		}';

	wp_add_inline_style( 'walili-min', $inline_font );
	*/
}
add_action( 'wp_enqueue_scripts', 'walili_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function walili_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'walili_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function walili_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 4,
		'columns'        => 4,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'walili_woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'walili_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function walili_woocommerce_wrapper_before() {
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php
	}
}
add_action( 'woocommerce_before_main_content', 'walili_woocommerce_wrapper_before' );

if ( ! function_exists( 'walili_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function walili_woocommerce_wrapper_after() {
		?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'walili_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'walili_woocommerce_header_cart' ) ) {
			walili_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'walili_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function walili_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		walili_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'walili_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'walili_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function walili_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View shopping cart', 'walili' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'walili' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<i class="las la-shopping-cart"></i>
			<span class="count"><?php echo esc_html( $item_count_text ); ?></span>
			<!--
			   <span class="topamount">
					 <?php
					 /*
					      $opt = get_option('walili-options');
								if($opt['shop-cart-icon-amount'] == '1'){
									echo wp_kses_data( WC()->cart->get_cart_subtotal() );
								}
							*/
					  ?>
				 </span>
			 -->
		</a>
		<?php
	}
}

if ( ! function_exists( 'walili_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function walili_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>

		<li id="site-header-cart" class="site-header-cart px-2">
				<?php walili_woocommerce_cart_link(); ?>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
</li>
		<?php
	}
}

/*
Header Login/Logout
*/
//add_filter( 'wp_nav_menu_items', 'my_account_loginout_link', 10, 2 );
/**
 * Add WooCommerce My Account Login/Logout to Registered Menu
 *
 * @link https://support.woothemes.com/hc/en-us/articles/203106357-Add-Login-Logout-Links-To-The-Custom-Primary-Menu-Area
 */
function wo_account_loginout_link() {
	$items ='';
    if (is_user_logged_in()) { //change your theme registered menu name to suit
			  //$items.='<div class="ribbon-userlogin"><span class="text">' . (wp_get_current_user()->display_name)[0] . '</span></div>';
        //$items .= '<a href="'. wp_logout_url( get_permalink( wc_get_page_id( 'shop' ) ) ) .'">Log Out</a>'; //change logout link, here it goes to 'shop', you may want to put it to 'myaccount'
        $items .= '<li id="useraccount" class="px-2"><a href="'. get_permalink( wc_get_page_id( 'myaccount' ) ) .'" title="My Account"><div class="ribbon-userlogin"><span class="text">' . (wp_get_current_user()->display_name)[0] . '</span></div></a></li>';
		}
    elseif (!is_user_logged_in()) {//change your theme registered menu name to suit
				//$items = '<div class="loginregister"> <i class="fa fa-user"></i></div>';
        $items .= '<li id="useraccount-out" class="px-2"><a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '"  title="Login/Register"><div class="userout"> <i class="las la-user-circle"></i> </div></a></li>';
    }
    return $items;
}


/*
Placeholder
*/
add_filter('woocommerce_placeholder_img_src', 'walili_woocommerce_placeholder_img_src', 10, 1);
function walili_woocommerce_placeholder_img_src( $src ) {
	return get_template_directory_uri() . '/images/placeholder/placeholder.png';
}

add_filter('woocommerce_placeholder_img', 'walili_woocommerce_placeholder_img', 10, 3);
function walili_woocommerce_placeholder_img($image_html, $size, $dimensions){
	$size2       = ecommerce_market_get_image_size($size);
	$image      = wc_placeholder_img_src( $size );
	$image_html = '<img src="' . esc_attr( $image ) . '" alt="' . esc_attr__( 'Placeholder', 'woocommerce' ) . '" width="' . esc_attr( $size2['width'] ) . '" class="woocommerce-placeholder wp-post-image" height="' . esc_attr( $size2['height'] ) . '" />';

	return $image_html;
}

function ecommerce_market_get_image_size( $name ) {
	global $_wp_additional_image_sizes;

	if ( isset( $_wp_additional_image_sizes[$name] ) )
		return $_wp_additional_image_sizes[$name];

	return false;
}

/*
Show cart widget in all pages
*/
add_filter( 'woocommerce_widget_cart_is_hidden', 'always_show_cart', 40, 0 );
function always_show_cart() {
    return false;
}
