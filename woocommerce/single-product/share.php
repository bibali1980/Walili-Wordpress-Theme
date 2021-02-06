<?php
/**
 * Single Product Share
 *
 * Sharing plugins can hook into here or you can add your own code directly.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/share.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//do_action( 'woocommerce_share' ); // Sharing plugins can hook into here.
$opt = get_option('walili-options');
if($opt['is-shop-post-share-buttons'] == '1'){
	wp_register_script('pinit' , get_template_directory_uri() . '/js/pinit.js' , array() , true , true);// true to pute js in footer , false is to pute js in header
	wp_enqueue_script('pinit');
	social_sharing_buttons();
}
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
