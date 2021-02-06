<?php
/**
* The template for displaying product content within loops
*
* This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see     https://docs.woocommerce.com/document/template-structure/
* @package WooCommerce/Templates
* @version 3.6.0
*/

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$opt = get_option('walili-options');

$shop_product_price_title_rating_position = $opt['shop-product-title-price-addtocart-position'];

$is_layout_list = False;
$discription_display = 'none';
$shop_layout_type = $opt['shop-layout-type'];
if ($shop_layout_type == 'shop-layout-list') {
  $is_layout_list = True;
	$discription_display = 'block';
}
//Image Thumbnail Size
$shop_layout_type = $opt['shop-layout-type'];
if ($shop_layout_type == 'shop-layout-list') {
	$image_thumbnail_size = 'shop-default-image';
}
elseif ($shop_layout_type == 'shop-layout-grid') {
  $shop_grid_page_column = $opt['shop-grid-page-column'];
  if($shop_grid_page_column == 2){
		if ($opt['shop-sidebar-type'] == 'sidebar-left' || $opt['shop-sidebar-type'] == 'sidebar-right') {
			$image_thumbnail_size = 'shop-grid-two-column';
		}
		else{
			$image_thumbnail_size = 'shop-grid-two-column-no-sidebar';
		}
  }
  elseif($shop_grid_page_column == 3){
		if ($opt['shop-sidebar-type'] == 'sidebar-left' || $opt['shop-sidebar-type'] == 'sidebar-right') {
			$image_thumbnail_size = 'shop-default-image';
		}
		else{
			$image_thumbnail_size = 'shop-grid-two-column';
		}
  }
  elseif($shop_grid_page_column == 4){
		$image_thumbnail_size = 'shop-default-image';
  }
}

$is_shop = False;
if (is_shop()) {
	$is_shop = True;
}

?>

<li <?php wc_product_class( '', $product ); ?>>
	<?php if($product->is_on_sale()) : ?>
		<?php
		$percentage = '';
		if ( $product->get_type() == 'grouped')
		{
				$children = $product->get_children();
		    foreach ($children as $key => $value) {
		      $_product = wc_get_product( $value );
		      $regular_price = $_product->get_regular_price();
					$sale_price = $_product->get_sale_price();
					if($sale_price != '' && $sale_price != $regular_price){
						$percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
						break;
					}
		    }
		}elseif( $product->get_type() == 'simple')
		{
			$percentage = round( ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100 );
		}

		 ?>

		<?php if($percentage!=''): ?>
			<div class="ribbon-sale">
			 <span class="text"><?php esc_html_e('Sale!', 'walili') ?><span class="small"><?php echo("-".$percentage."%"); ?></span></span>
		 </div>
		<?php endif; ?>

	<?php elseif ( ! $product->managing_stock() && ! $product->is_in_stock() ) : ?>
		<div class="ribbon-out-of-stock">
			<span class=""><?php esc_html_e('Out', 'walili') ?><span class="small"><?php esc_html_e('of stock', 'walili') ?></span></span>
		</div>
	<?php endif; ?>

	<?php if($is_layout_list && $is_shop){
		echo '<div class="shop-list-container container"> <div class="shop-list-row row"><div class="shop-list-class4 col-md-4 col-sm-12">';
	}else {
		echo '<div class="shop-list-container"> <div class="shop-list-row"><div class="shop-list-class4">';
	}
	?>

	<div class="product-thumbnail-div">
		<div class="product-image-div">
				<a href="<?php the_permalink() ?>" class="product-image">
					<?php
					if(has_post_thumbnail()){
						the_post_thumbnail($image_thumbnail_size);
						$attachment_ids = $product->get_gallery_image_ids();
						if(count($attachment_ids) > 0){
							 echo '<div class="product-image-second">'. wp_get_attachment_image($attachment_ids[0], $image_thumbnail_size) .'</div>';
						}
					}else{
						echo woocommerce_get_product_thumbnail($image_thumbnail_size);
					}
					 ?>
				</a>
		</div>

		<div class="product-whitelist-shopping-cart-icon">
			<?php if(shortcode_exists('ti_wishlists_addtowishlist')): ?>
				<span class="wihslist-button" title="<?php esc_attr_e('Add To Wishlist', 'walili') ?>">
					<a href="#">
						<i class="las la-heart"></i>
						<?php echo  do_shortcode('[ti_wishlists_addtowishlist]') ; ?>
					</a>
				</span>
			<?php endif; ?>

		<?php if ( $product->managing_stock() || $product->is_in_stock() ) : ?>
			<span class="product-shopping-icon" title="<?php echo esc_attr($product->single_add_to_cart_text()) ?>">
				<a href="?add-to-cart=<?php echo get_the_ID() ?>">
					<i class="las la-cart-plus"></i>
				</a>
			</span>
		<?php endif; ?>

      <!--
			<span class="product-quickview-icon" title="Quick view">
				<a data-product-id="<?php //echo get_the_ID() ?>" class="quick_view button" >
					<i class="las la-eye"></i>
				</a>
			</span>
		-->
		</div>
	</div>

	<?php if($is_layout_list && $is_shop){
		echo '</div><div class="shop-list-class8 col-md-8 col-sm-12">';
	}
	else{
		echo '</div><div class="shop-list-class8">';
	}
	 ?>

	<div class="product-details text-<?php echo esc_html($shop_product_price_title_rating_position); ?>" >
		<a href="<?php the_permalink() ?>">
			<h5 class="product-title" style="
			font-size: <?php echo esc_html($opt['shop-product-product-title-typography']['font-size']); ?>;
			font-weight: <?php echo esc_html($opt['shop-product-product-title-typography']['font-weight']); ?>;
			color:<?php echo esc_html($opt['shop-product-product-title-typography']['color']); ?>;
			line-height: <?php echo esc_html($opt['shop-product-product-title-typography']['line-height']); ?>;
			font-family: <?php echo esc_html($opt['shop-product-product-title-typography']['font-family']); ?>;
			"> <?php the_title() ?> </h5>

		<div class="product-price" style="
		font-size: <?php echo esc_html($opt['shop-product-product-price-typography']['font-size']); ?>;
		font-weight: <?php echo esc_html($opt['shop-product-product-price-typography']['font-weight']); ?>;
		color:<?php echo esc_html($opt['shop-product-product-price-typography']['color']); ?>;
		line-height: <?php echo esc_html($opt['shop-product-product-price-typography']['line-height']); ?>;
		font-family: <?php echo esc_html($opt['shop-product-product-price-typography']['font-family']); ?>;
		">
			<?php woocommerce_template_loop_price(); ?>
		</div>

		<?php if($opt['is-shop-product-rating'] == '1'): ?>
			<div class="product-rating">
				<?php //woocommerce_template_single_rating() ?>
				<?php wc_get_template( 'single-product/custom-rating.php' ); ?>
			</div>
		<?php endif; ?>

		<?php if($is_shop): ?>
			<div class="shop-product-description-id product-description" style="display: <?php echo $discription_display; ?>;
			color:<?php echo esc_html($opt['shop-product-product-title-typography']['color']); ?>;
			font-family: <?php echo esc_html($opt['shop-product-product-title-typography']['font-family']); ?>;
			">
				<?php echo wp_trim_words($product->get_data()['description'], 30); ?>
			</div>
		<?php endif; ?>
		</a>

<div class="woocommerce-after-shop-loop-item text-<?php echo esc_html($shop_product_price_title_rating_position); ?>" ">
	<?php
	do_action( 'woocommerce_after_shop_loop_item' );
	echo '</div></div></div>';
	?>
</div>
</div>
</li>
