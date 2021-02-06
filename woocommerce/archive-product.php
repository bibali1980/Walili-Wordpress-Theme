<?php
/**
* The Template for displaying product archives, including the main shop page which is a post type archive
*
* This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see https://docs.woocommerce.com/document/template-structure/
* @package WooCommerce/Templates
* @version 3.4.0
*/

defined( 'ABSPATH' ) || exit;

$is_active_sidebar = is_active_sidebar( 'shop_widget' );

$opt = get_option('walili-options');

if ($opt['shop-sidebar-type'] == 'sidebar-left' || $opt['shop-sidebar-type'] == 'sidebar-right') {
  if($is_active_sidebar){
    $main_column_number = 9;
  }
  else{
    $main_column_number = 12;
  }
}
else{
  $main_column_number = 12;
}

$shop_layout_type = $opt['shop-layout-type'];
if ($shop_layout_type == 'shop-layout-list') {
  $columns = 12;
}
elseif ($shop_layout_type == 'shop-layout-grid') {
  $shop_grid_page_column = $opt['shop-grid-page-column'];
  if($shop_grid_page_column == 2){
    $columns = 6;
  }
  elseif($shop_grid_page_column == 3){
    $columns = 4;
    $rows = 3;
  }
  elseif($shop_grid_page_column == 4){
    $columns = 3;
  }
}


get_header( 'shop' );

/**
* Hook: woocommerce_before_main_content.
*
* @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
* @hooked woocommerce_breadcrumb - 20
* @hooked WC_Structured_Data::generate_website_data() - 30
*/
//do_action( 'woocommerce_before_main_content' );

?>

<header class="woocommerce-products-header">
  <div class="shop-product-pagination-sorting container">
<div class="row">
<?php
if ( woocommerce_product_loop() ) {

  /**
  * Hook: woocommerce_before_shop_loop.
  *
  * @hooked woocommerce_output_all_notices - 10
  * @hooked woocommerce_result_count - 20
  * @hooked woocommerce_catalog_ordering - 30
  */
  do_action( 'woocommerce_before_shop_loop' );

  ?>
  </div>
  </div>

  <section class="shop-main-section">
    <div class="container">
            <div class="row">
        <?php if ($main_column_number == '9' && $opt['shop-sidebar-type'] == 'sidebar-left'): ?>
          <div class="col-md-3 col-sm-12 pr-4">
            <div class="shop-sidebar">
              <?php dynamic_sidebar( 'shop_widget' ); ?>
            </div>
          </div>
        <?php endif; ?>

        <div class="col-md-<?php echo esc_attr($main_column_number); ?> col-sm-12">
          <div class="shop-section">
            <?php
            woocommerce_product_loop_start();

            if ( wc_get_loop_prop( 'total' ) ) {
              while ( have_posts() ) : the_post();
              ?>
              <div id="shop-archive-list-grid"  class="col-md-<?php echo esc_attr($columns); ?> col-sm-12 p-2">
                <?php
                /**
                * Hook: woocommerce_shop_loop.
                */
                do_action( 'woocommerce_shop_loop' );

                wc_get_template_part( 'content', 'product' );
                ?>
              </div>

              <?php

            endwhile;
          }

          woocommerce_product_loop_end();

          /**
          * Hook: woocommerce_after_shop_loop.
          *
          * @hooked woocommerce_pagination - 10
          */
          do_action( 'woocommerce_after_shop_loop' );

          ?>
        </div>

      </div>

      <?php if ($main_column_number == '9' && $opt['shop-sidebar-type'] == 'sidebar-right'): ?>
        <div class="col-md-3 col-sm-12 pl-4">
          <div class="shop-sidebar">
            <?php dynamic_sidebar( 'shop_widget' ); ?>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php
} else {
  /**
  * Hook: woocommerce_no_products_found.
  *
  * @hooked wc_no_products_found - 10
  */
  do_action( 'woocommerce_no_products_found' );
}

/**
* Hook: woocommerce_after_main_content.
*
* @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
*/
do_action( 'woocommerce_after_main_content' );


get_footer( 'shop' );
