<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Walili
*/

// Theme settings options
$opt = get_option('walili-options');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php
  //Preloading
  if($opt['is-preloading'] == '1') {
    get_template_part('template-parts/pre-loading');
  }

  //header layout
  $stiky_or_fixed = 'sticky';
  if($opt['is-sticky-header'] == '0' ) {
    $stiky_or_fixed = 'fixed';
  }

  //meny layout
  $boxed_wide_full_screen_style_class = 'container-fluid';
  if( $opt['header-layout-type'] == '1' ) {
    $boxed_wide_full_screen_style_class = 'container';
  }


  //menu position
  $menu_position = ' ml-auto mr-auto';
  $menu_alignment_type = $opt['menu-alignment-type'];
  if( $menu_alignment_type == '1' ) {
    $menu_position = ' ml-auto';
  }
  else if($menu_alignment_type == '2')
  {
    $menu_position = ' mr-auto';
  }
  ?>



  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'walili' ); ?></a>

    <header id="masthead" class="site-header">
      <nav id="main-nav" class="navbar navbar-expand-lg <?php echo esc_html($stiky_or_fixed); ?>" role="navigation">
        <div id="top-container" class="<?php echo esc_html($boxed_wide_full_screen_style_class); ?>">

          <?php
          //Logo
          get_template_part('template-parts/logo');
          ?>

          <ul class="navbar-nav flex-row attr-nav d-flex order-lg-1 ml-auto align-items-center">

            <!-- Header button -->
            <?php
            if($opt['is-header-button'] == '1' ) {
              get_template_part('template-parts/header-button');
            }
             ?>

          <!-- Header search -->
          <?php
          if( $opt['search-icon-header'] == '1' ) {
            get_template_part('template-parts/search-header');
          }
          ?>

          <?php
          if ( class_exists( 'WooCommerce' ) ) {
            //Header cart
            if( $opt['is-shop-cart-icon-header'] == '1' ) {
              if ( function_exists( 'walili_woocommerce_header_cart' ) ) {
                walili_woocommerce_header_cart();
              }
            }
            //Header Login Register
            if( $opt['is-shop-login-icon-header'] == '1' ) {
              echo wo_account_loginout_link();
            }
          }
        	?>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
          </button>
        </ul>

          <?php
          if(has_nav_menu('main_menu')){
            wp_nav_menu( array(
              'theme_location'    => 'main_menu',
              'depth'             => 5, // numder of dropdowns.
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav ' . $menu_position ,
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
          }

          ?>


        </div>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <?php


    function check_header($type){
      if(function_exists('get_field')){
        $post_id = '';
        if ( class_exists( 'WooCommerce' ) ) {
          if(is_shop()){
              $post_id = get_option( 'woocommerce_shop_page_id' );
          }
        }
        $is_banner = get_field('is_banner',$post_id);

        if($is_banner == 1 || $is_banner === NULL){
          if($type == 'shop'){
             get_template_part('template-parts/shop-header-banner');
          }
          else{
            get_template_part('template-parts/header-banner');
          }
        }
      }
      else{
        if($type == 'shop'){
           get_template_part('template-parts/shop-header-banner');
        }
        else{
          get_template_part('template-parts/header-banner');
        }
      }
    }

    if( is_404() ) {

    }else{
      if ( class_exists( 'WooCommerce' ) ) {
        if(is_woocommerce() || is_shop() || is_product_category() || is_product_tag() || is_product() ||
           is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url()){
             if($opt['is-shop-header-banner'] == '1' ){
                check_header('shop');
             }
        }
        else{
          if($opt['is-header-banner'] == '1' ){
            check_header('blog');
          }
        }
      }
      else{
        if($opt['is-header-banner'] == '1' ){
          check_header('blog');
        }
      }
    }

    ?>


<div id="content" class="site-content">
