<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<nav id="account_dashboard_links_id" class="account_dashboard_links woocommerce-MyAccount-navigation">
	<ul>
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>

		<?php
			switch (strtolower($label)) {
			case 'dashboard': $icon = '<i class="las la-bars"></i>';break;
			case 'orders': $icon = '<i class="las la-shopping-basket"></i>';break;
			case 'downloads': $icon = '<i class="las la-download"></i>';break;
			case 'addresses': $icon = '<i class="las la-map-marked"></i>';break;
			case 'account details': $icon = '<i class="las la-user"></i>';break;
			case 'logout': $icon = '<i class="las la-sign-out-alt"></i>';break;
			default:$icon = '';break;
		   }
		?>
			<li class="<?php echo wc_get_account_menu_item_classes( $endpoint );?>">
			<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo $icon; ?> <?php echo esc_html( $label ); ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
