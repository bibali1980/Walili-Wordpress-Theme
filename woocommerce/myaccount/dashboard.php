<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<p><?php
	printf(
		/* translators: 1: user display name 2: logout url */
		__( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url() )
	);
?></p>

<p><?php
	printf(
		__( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
?></p>

<ul class="account_dashboard_links row">
<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
	<?php
	if ( 'dashboard' == $endpoint ) :
		continue;
	endif;
	?>
	<li class="col-md-3 col-sm-12 <?php echo esc_attr( wc_get_account_menu_item_classes( $endpoint ) ); ?> px-1 py-3 mx-1 my-1">
		<div>
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
		<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo $icon; ?> <?php echo esc_html( $label ); ?></a>
		</div>
	</li>
<?php endforeach; ?>
</ul>
