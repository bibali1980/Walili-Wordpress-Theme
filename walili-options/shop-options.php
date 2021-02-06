<?php

if ( class_exists( 'WooCommerce' ) ) {

  // Shop Options
  Redux::setSection( 'walili-options', array(
      'title'            => esc_html__('Shop Options', 'walili' ),
      'id'               => 'shop-page-options',
      'customizer_width' => '400px',
      'icon'             => 'las la-shopping-cart',
  ));

  // Header shop banner options
  Redux::setSection( 'walili-options', array(
      'title'            => esc_html__( 'Header Banner', 'walili' ),
      'id'               => 'shop-header-banner-options-id',
      'customizer_width' => '400px',
      'subsection'       => true,
      'icon'             => '',
      'fields'           => array(

        array(
            'id'      => 'is-shop-header-banner',
            'type'    => 'switch',
            'title'   => esc_html__( 'Banner visibility', 'walili' ),
            'on'      => esc_html__('Enable', 'walili'),
            'off'     => esc_html__('Disable', 'walili'),
            'default' => true,
        ),

        array(
          'required' => array('is-shop-header-banner', '=', '1'),
          'title'     => esc_html__( 'Banner height', 'walili' ),
          'id'        => 'shop-header-banner-height',
          'type'      => 'dimensions',
          'width'      => False,
          'units'     => array( 'em','px','%' ),
          'default'  => array(
            'height'  => '350px',
            'units'  => 'px',
        ),
      ),

      array(
         'required' => array('is-shop-header-banner', '=', '1'),
         'title'     => esc_html__( 'Title/Subtitle top margin', 'walili' ),
         'id'        => 'shop-header-banner-title-subtitle-top-margin',
         'type'      => 'spacing',
         'mode'      => 'margin',
         'bottom'      => False,
         'left'      => False,
         'right'      => False,
         'units'     => array( 'em', 'px', '%' ),
         'default'  => array(
           'margin-top'     => '150px',
           'units'   => 'px',
       ),
     ),

        array(
          'required' => array('is-shop-header-banner', '=', '1'),
            'id'      => 'is-shop-header-banner-bubbles-animation',
            'type'    => 'switch',
            'title'   => esc_html__( 'Banner bubbles animation', 'walili' ),
            'on'      => esc_html__('Enable', 'walili'),
            'off'     => esc_html__('Disable', 'walili'),
            'default' => true,
        ),

        array(
            'required' => array('is-shop-header-banner', '=', '1'),
            'id'       => 'shop-header-banner-type',
            'type'     => 'radio',
            'title'    => __('Banner type', 'walili' ),
            'options'  => array(
                '1' => 'Color',
                '2' => 'Image',
            ),
            'default'  => '1'
        ),

      array(
          'required' => array('shop-header-banner-type', '=', '1'),
          'id'        => 'shop-header-banner-background-color',
          'title'    => __('Banner background color', 'walili' ),
          'type'      => 'color_gradient',
          'default'   => array(
              'from'  => '#7600e5',
              'to'    => '#0042f9',
          )
      ),

      array(
          'required' => array('shop-header-banner-type', '=', '1'),
          'id'       => 'shop-header-banner-color-background-Shape',
          'type'     => 'media',
          'title'    => esc_html__('Background Shape', 'walili' ),
          'compiler' => true,
          'default'  => array(
              'url' => get_template_directory_uri() . '/images/shop/shop_shap.png',
          )
      ),

      array(
          'required' => array('shop-header-banner-type', '=', '2'),
          'id'       => 'shop-header-banner-image-background-image',
          'type'     => 'media',
          'title'    => esc_html__('Background image', 'walili' ),
          'compiler' => true,
          'default'  => array(
              'url' => get_template_directory_uri() . '/images/shop/shop_bg.png',
          )
      ),

      array(
          'required' => array('shop-header-banner-type', '=', '2'),
          'id'       => 'shop-header-banner-image-background-image-shape',
          'type'     => 'media',
          'title'    => esc_html__('Background image shape', 'walili' ),
          'compiler' => true,
          'default'  => array(
              'url' => get_template_directory_uri() . '/images/shop/shop_shap.png',
          )
      ),

      array(
        'required' => array('is-shop-header-banner', '=', '1'),
     'title'     => esc_html__( 'Page title', 'walili' ),
     'id'        => 'shop-title',
     'type'      => 'text',
     'default'   => esc_html__( 'Shop', 'walili' ),
     ),

      array(
        'required' => array('is-shop-header-banner', '=', '1'),
          'title'         => esc_html__('Banner Title Typography', 'walili'),
          'id'            => 'shop-header-banner-typography',
          'type'          => 'typography',
          'text-align'    => false,
          'default'        => array(
              'font-family'    => 'Poppins',
              //'letter-spacing' => '0.5px',
              'font-size'      => '30px',
              'font-weight'     => '700',
              'line-height'    => '30px',
              'color'          => '#FFFFFF',
            ),
      ),

      array(
        'required' => array('is-shop-header-banner', '=', '1'),
          'title'     => esc_html__( 'Shop Page Subtitle', 'walili' ),
          'id'        => 'shop-subtitle',
          'type'      => 'textarea',
          'default'   => esc_html__( 'Shop Subtitle', 'walili' ),
      ),

      array(
        'required' => array('is-shop-header-banner', '=', '1'),
          'title'         => esc_html__('Banner Subtitle Typography', 'walili'),
          'id'            => 'shop-header-subtitle-banner-typography',
          'type'          => 'typography',
          'text-align'    => false,
          'default'        => array(
              'font-family'    => 'Poppins',
              //'letter-spacing' => '0.5px',
              'font-size'      => '16px',
              'font-weight'     => '300',
              'line-height'    => '16px',
              'color'          => '#FFFFFF',
            ),
      ),

          array(
            'required' => array('is-shop-header-banner', '=', '1'),
          'id'       => 'shop-header-banner-title-subtitle-position',
          'type'     => 'button_set',
          'title'    => esc_html__('Title/Subtitle alignment', 'walili' ),
          'options' => array(
              'left' => esc_html__( 'Left', 'walili' ),
              'center' => esc_html__( 'Center', 'walili' ),
              'right' => esc_html__( 'Right', 'walili' )
          ),
          'default' => 'center'
       ),

    )
  ));


  // Shop page layout
  Redux::setSection( 'walili-options', array(
    'title'            => esc_html__( 'Page Layout', 'walili' ),
    'id'               => 'shop-page-layout-id',
    'customizer_width' => '400px',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

          array(
              'title'     => esc_html__( 'Layout', 'walili' ),
              'id'        => 'shop-layout-type',
              'type'      => 'image_select',
              'options'   => array(
                  'shop-layout-list' => array(
                      'alt' => esc_html__( 'List Layout', 'walili' ),
                      'img' => get_template_directory_uri() . '/images/layouts/list.png'
                  ),
                  'shop-layout-grid' => array(
                      'alt' => esc_html__( 'Grid Layout', 'walili' ),
                      'img' => get_template_directory_uri() . '/images/layouts/grid.png'
                  ),
              ),
              'default' => 'shop-layout-grid'
          ),

          array(
            'required' => array('shop-layout-type', '=', 'shop-layout-grid'),
              'title'     => esc_html__( 'Shop Page Column', 'walili' ),
              'id'        => 'shop-grid-page-column',
              'type'      => 'select',
              'default'   => '3',
              'options'   => array(
                  '2' => esc_html__( 'Two Column', 'walili' ),
                  '3' => esc_html__( 'Three Column', 'walili' ),
                  '4' => esc_html__( 'Four Column', 'walili' ),
              )
          ),

          array(
              'title'     => esc_html__( 'Sidebar', 'walili' ),
              'id'        => 'shop-sidebar-type',
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


      ),
  ));


  // Shop cart icon
  Redux::setSection( 'walili-options', array(
    'title'            => esc_html__( 'Cart Icon', 'walili' ),
    'id'               => 'shop-cart-icon-id',
    'customizer_width' => '400px',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

      array(
          'id'      => 'is-shop-cart-icon-header',
          'type'    => 'switch',
          'title'   => esc_html__( 'Cart icon', 'walili' ),
          'on'      => esc_html__('Enable', 'walili'),
          'off'     => esc_html__('Disable', 'walili'),
          'default' => false,
      ),

      array(
          'required' => array('is-shop-cart-icon-header', '=', '1'),
          'id'       => 'shop-cart-icon-section-id',
          'type'     => 'section',
          'title'    => esc_html__('Cart Icon Colors', 'walili' ),
          'indent'    => true,
        ),

      array(
          'required' => array('is-shop-cart-icon-header', '=', '1'),
          'id'        => 'shop-cart-icon-background-color',
          'type'      => 'color',
          'title'     => esc_html__('Cart icon background color', 'walili' ),
          'default' => '#FFFFFF',
      ),


      array(
          'required' => array('is-shop-cart-icon-header', '=', '1'),
          'id'        => 'shop-cart-icon-sticky-background-color',
          'type'      => 'color',
          'title'     => esc_html__('Cart icon Sticky background color', 'walili' ),
          'default' => '#566573',
      ),

      array(
          'required' => array('is-shop-cart-icon-header', '=', '1'),
          'id'       => 'shop-count-section-id',
          'type'     => 'section',
          'title'    => esc_html__('Products Count Colors', 'walili' ),
          'indent'    => true,
        ),

      array(
          'required' => array('is-shop-cart-icon-header', '=', '1'),
          'id'        => 'shop-cart-icon-count-background-color',
          'type'      => 'color',
          'title'     => esc_html__('Products Count background color', 'walili' ),
          'default' => '#00c853',
      ),


      array(
          'required' => array('is-shop-cart-icon-header', '=', '1'),
          'id'        => 'shop-cart-icon-count-sticky-background-color',
          'type'      => 'color',
          'title'     => esc_html__('Products Count Sticky background color', 'walili' ),
          'default' => '#00c853',
      ),

  /*
      array(
        'required' => array('is-shop-cart-icon-header', '=', '1'),
          'id'      => 'shop-cart-icon-amount',
          'type'    => 'switch',
          'title'   => esc_html__( 'Total Amount', 'walili' ),
          'on'      => esc_html__('Show', 'walili'),
          'off'     => esc_html__('Hide', 'walili'),
          'default' => true,
      ),

      array(
        'required' => array('shop-cart-icon-amount', '=', '1'),
          'title'         => esc_html__('Amount Typography', 'walili'),
          'id'            => 'shop-cart-icon-amount-typography',
          'type'          => 'typography',
          'text-align'    => false,
          'default'        => array(
              'font-family'    => 'Poppins',
              //'letter-spacing' => '0.5px',
              'font-size'      => '16px',
              'font-weight'     => '300',
              'line-height'    => '10px',
              'color'          => '#FFFFFF',
            ),
      ),

      array(
        'required' => array('shop-cart-icon-amount', '=', '1'),
          'title'         => esc_html__('Amount Sticky Typography', 'walili'),
          'id'            => 'shop-cart-icon-amount-sticky-typography',
          'type'          => 'typography',
          'text-align'    => false,
          'default'        => array(
              'font-family'    => 'Poppins',
              //'letter-spacing' => '0.5px',
              'font-size'      => '16px',
              'font-weight'     => '300',
              'line-height'    => '10px',
              'color'          => '#808080',
            ),
      ),

      */


      ),
  ));

  // Shop login icon
  Redux::setSection( 'walili-options', array(
    'title'            => esc_html__( 'Login Icon', 'walili' ),
    'id'               => 'shop-login-icon-id',
    'customizer_width' => '400px',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

      array(
          'id'      => 'is-shop-login-icon-header',
          'type'    => 'switch',
          'title'   => esc_html__( 'Login icon', 'walili' ),
          'on'      => esc_html__('Enable', 'walili'),
          'off'     => esc_html__('Disable', 'walili'),
          'default' => false,
      ),

      array(
          'required' => array('is-shop-login-icon-header', '=', '1'),
          'id'       => 'user-logged-out-icon-header-id',
          'type'     => 'section',
          'title'    => esc_html__('User Logged Out', 'walili' ),
          'indent'    => true,
        ),

      array(
        'required' => array('is-shop-login-icon-header', '=', '1'),
          'id'        => 'user-logged-out-icon-color',
          'type'      => 'color',
          'title'     => esc_html__('Header user logged out icon color', 'walili' ),
          'default' => '#FFFFFF',
      ),

      array(
          'required' => array('is-shop-login-icon-header', '=', '1'),
          'id'        => 'user-logged-out-icon-sticky-color',
          'type'      => 'color',
          'title'     => esc_html__('Header user logged out icon sticky color', 'walili' ),
          'default' => '#566573',
      ),


          array(
              'required' => array('is-shop-login-icon-header', '=', '1'),
              'id'       => 'user-logged-in-icon-header-id',
              'type'     => 'section',
              'title'    => esc_html__('User Logged In', 'walili' ),
              'indent'    => true,
            ),

          array(
            'required' => array('is-shop-login-icon-header', '=', '1'),
              'id'        => 'user-logged-in-icon-color',
              'type'      => 'color',
              'title'     => esc_html__('Header user logged in icon color', 'walili' ),
              'default' => '#00c853',
          ),

          array(
              'required' => array('is-shop-login-icon-header', '=', '1'),
              'id'        => 'user-logged-in-icon-sticky-color',
              'type'      => 'color',
              'title'     => esc_html__('Header user logged in icon sticky color', 'walili' ),
              'default' => '#00c853',
          ),



      ),
  ));


  // Shop Product
  Redux::setSection( 'walili-options', array(
    'title'            => esc_html__( 'Store Product', 'walili' ),
    'id'               => 'shop-product-id',
    'customizer_width' => '400px',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

      array(
          'id'        => 'shop-product-sale-ribbon-color',
          'type'      => 'color',
          'title'     => esc_html__('SALE! ribbon color', 'walili' ),
          'default' => '#00c853',
      ),

      array(
          'id'        => 'shop-product-out-of-stock-ribbon-color',
          'type'      => 'color',
          'title'     => esc_html__('Outof stock ribbon color', 'walili' ),
          'default' => '#ef1515',
      ),

      array(
          'id'        => 'shop-product-add-to-cart-color',
          'type'      => 'color',
          'title'     => esc_html__('All shop buttons color (add to cart, quick view, viw cart, checkout, place order, Apply coupon, login, register, reset passowrd, save address... etc)', 'walili' ),
          'default' => '#0210dd',
      ),

      array(
          'title'         => esc_html__('Product Title Typography', 'walili'),
          'id'            => 'shop-product-product-title-typography',
          'type'          => 'typography',
          'text-align'    => false,
          'default'        => array(
              'font-family'    => 'Poppins',
              'font-size'      => '18px',
              'font-weight'     => '500',
              'line-height'    => '18px',
              'color'          => '#172b4c',
            ),
      ),

      array(
          'title'         => esc_html__('Product Price Typography', 'walili'),
          'id'            => 'shop-product-product-price-typography',
          'type'          => 'typography',
          'text-align'    => false,
          'default'        => array(
              'font-family'    => 'Poppins',
              'font-size'      => '14px',
              'font-weight'     => '500',
              'line-height'    => '14px',
              'color'          => '#172b7e',
            ),
      ),

      array(
          'id'      => 'is-shop-product-rating',
          'type'    => 'switch',
          'title'   => esc_html__( 'Rating visibility', 'walili' ),
          'on'      => esc_html__('Enable', 'walili'),
          'off'     => esc_html__('Disable', 'walili'),
          'default' => true,
      ),

      array(
          'required' => array('is-shop-product-rating', '=', '1'),
          'id'        => 'shop-product-rating-color',
          'type'      => 'color',
          'title'     => esc_html__('Rating color', 'walili' ),
          'default' => '#ee1044',
      ),

        array(
        'id'       => 'shop-product-title-price-addtocart-position',
        'type'     => 'button_set',
        'title'    => esc_html__('(Title, Price, Add to cart, Rating) alignment', 'walili' ),
        'options' => array(
            'left' => esc_html__( 'Left', 'walili' ),
            'center' => esc_html__( 'Center', 'walili' ),
            'right' => esc_html__( 'Right', 'walili' )
        ),
        'default' => 'left'
     ),

     array(
         'title'     => esc_html__( 'Share buttons', 'walili' ),
         'id'        => 'is-shop-post-share-buttons',
         'type'      => 'switch',
         'on'        => esc_html__( 'Show', 'walili' ),
         'off'       => esc_html__( 'Hide', 'walili' ),
         'default'   => '1',
     ),



      ),
  ));

}else{

  Redux::setSection( 'walili-options', array(
    'title'            => esc_html__('Shop Options', 'walili' ),
    'id'               => 'shop-page-options',
    'customizer_width' => '400px',
    'icon'             => 'las la-shopping-cart',
  	'fields'    => array(

          array(
              'id'        => 'no-WooCommerce-warning-id',
              'type'      => 'info',
              'style'     => 'critical',
              'icon' => 'el-icon-info-sign',
              'title' => __('Warning.', 'walili'),
              'desc'      => esc_html__( 'You MUST install and activate WooCommerce plugin to use shop settings', 'walili' )
          ),

  	)
  ));
}
 ?>
