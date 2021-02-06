<?php

function custom_style() {
    $opt = get_option('walili-options');
    $custom_style = '';

      //Colors
      $accent_color = $opt['accent-color-id'];
      $custom_style.=".page-links .post-page-numbers, .blog-section .blog-items .post_date, .blog-items-single blockquote::before, blockquote::before,
      .blog-items-single blockquote::after, blockquote::after, .is-style-outline .wp-block-button__link, .blog-section .blog-content h2:hover,
      #commentform .btn:hover,#search-section .go-home-button:hover, .page-numbers, .page-numbers:visited, #recentcomments .recentcomments::before {
          color: $accent_color;
      }";

      $custom_style.=".page-links .post-page-numbers, .page-links .post-page-numbers.current, .back-to-top, .mejs-container .mejs-controls,
      .wp-block-button__link, .post .featured_post, .post_tag span a:hover, .post_tag span a:active, #commentform .btn, .page-numbers.current,
      .page-numbers:hover, #search-section .go-home-button, #recentcomments .recentcomments:hover::before {
          background-color: $accent_color;
      }";

      $custom_style.=".page-links .post-page-numbers, .page-links .post-page-numbers.current, .blog-items-single blockquote, blockquote,
      .is-style-outline .wp-block-button__link, #commentform .btn, .page-numbers, #search-section .go-home-button, #search-section .search-form .search-field:hover,
      #recentcomments .recentcomments::before, #recentcomments .recentcomments:hover::before {
          border-color: $accent_color;
      }";

      $custom_style.=".blog-section .blog-items .post_date{
        -webkit-box-shadow: 1px 1px 1px 1px $accent_color;
        box-shadow: 1px 1px 1px 1px $accent_color;
      }";

      $custom_style.=".blog-section .blog-items:hover, .form-control:hover {
        border: 1px solid $accent_color;
        -webkit-box-shadow: 0px 0px 1px 0px $accent_color;
        box-shadow: 0px 0px 1px 0px $accent_color;
      }";

     //Links Colors
     $links_color_regular = $opt['links-color-id']['regular'];
     $accent_color_hover = $opt['links-color-id']['hover'];
     $accent_color_active = $opt['links-color-id']['active'];

     $custom_style.="a{
         color: $links_color_regular;
     }";
     $custom_style.="a:visited{
         color: $links_color_regular;
     }";
     $custom_style.="a:hover, a:visited:hover {
         color: $accent_color_hover;
     }";
     $custom_style.="a:active{
         color: $accent_color_active;
     }";

     //.form-control:focus
     $custom_style.=".form-control:focus
     {
       border-color: $accent_color_active;
       box-shadow: 0px 0px 1px 0px $accent_color_active;
     }";

    //Preloader
    if($opt['is-preloading'] == '1'){
      $custom_style.=".main-preloader{position: fixed;height: 100%;width: 100%;left: 0;top: 0;z-index: 9999;-webkit-box-align: center;-ms-flex-align: center;align-items: center;cursor: default;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;}.preloader-content{position: absolute;z-index: 1000;}";
      $preloading_type = $opt['preloading-type'];
      $preloading_background_color = $opt['preloading-background-color'];
      $custom_style.=".main-preloader{background-color:$preloading_background_color;}";
      if($preloading_type == '1'){
              $preloader_default = $opt['preloader-default'];
              $preloader_color = $opt['preloader-color'];
              if($preloader_default == 'preloader_1'){
                $custom_style.=".spinner_2 > div {margin-bottom: 2rem;display: inline-block;width: 1rem;height: 1rem;border-radius: 100%;background-color: $preloader_color;-webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;animation: sk-bouncedelay 1.4s infinite ease-in-out both;}.spinner_2 .bounce1 {-webkit-animation-delay: -0.32s;animation-delay: -0.32s;}.spinner_2 .bounce2 {-webkit-animation-delay: -0.16s;animation-delay: -0.16s;}@-webkit-keyframes sk-bouncedelay {0%, 80%, 100% {-webkit-transform: scale(0);}40% {-webkit-transform: scale(1.0);}}";
              }elseif ($preloader_default == 'preloader_2') {
                $custom_style.=".la-ball-spin-clockwise,.la-ball-spin-clockwise > div {margin-bottom: 2rem;position: relative;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}.la-ball-spin-clockwise {display: block;font-size: 0;color: $preloader_color;}.la-ball-spin-clockwise > div {display: inline-block;float: none;background-color: currentColor;border: 0 solid currentColor;}.la-ball-spin-clockwise {width: 3rem;height: 3rem;}.la-ball-spin-clockwise > div {position: absolute;top: 50%;left: 50%;width: 8px;height: 8px;margin-top: -4px;margin-left: -4px;border-radius: 100%;-webkit-animation: ball-spin-clockwise 1s infinite ease-in-out;-moz-animation: ball-spin-clockwise 1s infinite ease-in-out;-o-animation: ball-spin-clockwise 1s infinite ease-in-out;animation: ball-spin-clockwise 1s infinite ease-in-out;}.la-ball-spin-clockwise > div:nth-child(1) {top: 5%;left: 50%;-webkit-animation-delay: -.875s;-moz-animation-delay: -.875s;-o-animation-delay: -.875s;animation-delay: -.875s;}.la-ball-spin-clockwise > div:nth-child(2) {top: 18.1801948466%;left: 81.8198051534%;-webkit-animation-delay: -.75s;-moz-animation-delay: -.75s;-o-animation-delay: -.75s;animation-delay: -.75s;}.la-ball-spin-clockwise > div:nth-child(3) {top: 50%;left: 95%;-webkit-animation-delay: -.625s;-moz-animation-delay: -.625s;-o-animation-delay: -.625s;animation-delay: -.625s;}.la-ball-spin-clockwise > div:nth-child(4) {top: 81.8198051534%;left: 81.8198051534%;-webkit-animation-delay: -.5s;-moz-animation-delay: -.5s;-o-animation-delay: -.5s;animation-delay: -.5s;}.la-ball-spin-clockwise > div:nth-child(5) {top: 94.9999999966%;left: 50.0000000005%;-webkit-animation-delay: -.375s;-moz-animation-delay: -.375s;-o-animation-delay: -.375s;animation-delay: -.375s;}.la-ball-spin-clockwise > div:nth-child(6) {top: 81.8198046966%;left: 18.1801949248%;-webkit-animation-delay: -.25s;-moz-animation-delay: -.25s;-o-animation-delay: -.25s;animation-delay: -.25s;}.la-ball-spin-clockwise > div:nth-child(7) {top: 49.9999750815%;left: 5.0000051215%;-webkit-animation-delay: -.125s;-moz-animation-delay: -.125s;-o-animation-delay: -.125s;animation-delay: -.125s;}.la-ball-spin-clockwise > div:nth-child(8) {top: 18.179464974%;left: 18.1803700518%;-webkit-animation-delay: 0s;-moz-animation-delay: 0s;-o-animation-delay: 0s;animation-delay: 0s;}@keyframes ball-spin-clockwise {0%,100% {opacity: 1;-webkit-transform: scale(1);-moz-transform: scale(1);-o-transform: scale(1);transform: scale(1);}20% {opacity: 1;}80% {opacity: 0;-webkit-transform: scale(0);-moz-transform: scale(0);-o-transform: scale(0);transform: scale(0);}}";
              }elseif ($preloader_default == 'preloader_3') {
                $custom_style.=".spinner_3 {-webkit-animation: spinner3 1s infinite linear;animation: spinner3 1s infinite linear;border-radius: 50%;border: 3px solid ".$preloader_color."1C;border-top-color: ".$preloader_color."1C;border-top-color: $preloader_color;height: 7em;margin: 0 auto 3.5em;width: 7em;}@keyframes spinner3{to{-webkit-transform:rotateZ(360deg);transform:rotateZ(360deg)}}";
              }elseif ($preloader_default == 'preloader_4') {
                $custom_style.=".la-ball-scale-multiple,.la-ball-scale-multiple > div {margin-bottom: 2rem;position: relative;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}.la-ball-scale-multiple {display: block;font-size: 0;color: $preloader_color;}.la-ball-scale-multiple > div {display: inline-block;float: none;background-color: currentColor;border: 0 solid currentColor;}.la-ball-scale-multiple {width: 7rem;height: 7rem;}.la-ball-scale-multiple > div {position: absolute;top: 0;left: 0;width: 7rem;height: 7rem;border-radius: 100%;opacity: 0;-webkit-animation: ball-scale-multiple 1.5s 0s linear infinite;-moz-animation: ball-scale-multiple 1.5s 0s linear infinite;-o-animation: ball-scale-multiple 1.5s 0s linear infinite;animation: ball-scale-multiple 1.5s 0s linear infinite;}.la-ball-scale-multiple > div:nth-child(2) {-webkit-animation-delay: .2s;-moz-animation-delay: .2s;-o-animation-delay: .2s;animation-delay: .2s;}.la-ball-scale-multiple > div:nth-child(3) {-webkit-animation-delay: .4s;-moz-animation-delay: .4s;-o-animation-delay: .4s;animation-delay: .4s;}@keyframes ball-scale-multiple {0% {opacity: 0;-webkit-transform: scale(0);-moz-transform: scale(0);-o-transform: scale(0);transform: scale(0);}5% {opacity: .75;}100% {opacity: 0;-webkit-transform: scale(1);-moz-transform: scale(1);-o-transform: scale(1);transform: scale(1);}}";
              }
      }elseif ($preloading_type == '2') {
        // code...
      }
    }

    //Header Logo
    $header_logo_width = $opt['header-logo-dimensions']['width'];
    $header_logo_height = $opt['header-logo-dimensions']['height'];

    $header_logo_padding_top = $opt['header-logo-padding']['padding-top'];
    $header_logo_padding_right = $opt['header-logo-padding']['padding-right'];
    $header_logo_padding_bottom = $opt['header-logo-padding']['padding-bottom'];
    $header_logo_padding_left = $opt['header-logo-padding']['padding-left'];

    $custom_style.="#header-main-logo, #sticky-main-logo
    {
      width: $header_logo_width;
      height: $header_logo_height;
      padding: $header_logo_padding_top $header_logo_padding_right $header_logo_padding_bottom $header_logo_padding_left;
    }";

    //header button
    if($opt['is-header-button'] == '1' ) {
      $header_button_colors_font_color = $opt['header-button-colors-font-color'];
      $header_button_colors_border_color = $opt['header-button-colors-border-color'];
      $header_button_colors_background_color = $opt['header-button-colors-background-color'];
      $header_button_colors_hover_font_color = $opt['header-button-colors-hover-font-color'];
      $header_button_colors_hover_border_color = $opt['header-button-colors-hover-border-color'];
      $header_button_colors_hover_background_color = $opt['header-button-colors-hover-background-color'];

      $header_button_dimensions_width = $opt['header-button-dimensions']['width'];
      $header_button_dimensions_height = $opt['header-button-dimensions']['height'];

      $header_button_radius = $opt['header-button-radius']['width'];

      $custom_style.="#header-button > .top-button
      {
          color: $header_button_colors_font_color;
          border-color: $header_button_colors_border_color;
          background-color: $header_button_colors_background_color;
          width: $header_button_dimensions_width;
          height: $header_button_dimensions_height;
          border-radius: $header_button_radius;
          border-width: 1.5px;
          border-style: solid;
          display: table-cell;
          -webkit-box-shadow: 0px 10px 20px 0px rgba(0, 11, 40, 0.1);
          box-shadow: 0px 10px 20px 0px rgba(0, 11, 40, 0.1);
      }";

      $custom_style.="#header-button > .top-button:hover
      {
          color: $header_button_colors_hover_font_color;
          border-color: $header_button_colors_hover_border_color;
          background-color: $header_button_colors_hover_background_color;
          -webkit-box-shadow: 0px 10px 20px 0px rgba(0, 11, 40, 0.1);
          box-shadow: 0px 10px 20px 0px rgba(0, 11, 40, 0.1);
      }";
      if($opt['is-sticky-header'] == '1'){
            //header sticky button
            $sticky_header_button_colors_font_color = $opt['sticky-header-button-colors-font-color'];
            $sticky_header_button_colors_border_color = $opt['sticky-header-button-colors-border-color'];
            $sticky_header_button_colors_background_color = $opt['sticky-header-button-colors-background-color'];
            $sticky_header_button_colors_hover_font_color = $opt['sticky-header-button-colors-hover-font-color'];
            $sticky_header_button_colors_hover_border_color = $opt['sticky-header-button-colors-hover-border-color'];
            $sticky_header_button_colors_hover_background_color = $opt['sticky-header-button-colors-hover-background-color'];

            $custom_style.=".navbar-expand-lg.fixed-top #header-button > .top-button
            {
                color: $sticky_header_button_colors_font_color;
                border-color: $sticky_header_button_colors_border_color;
                background-color: $sticky_header_button_colors_background_color;
            }";
            $custom_style.=".navbar-expand-lg.fixed-top #header-button > .top-button:hover
            {
                color: $sticky_header_button_colors_hover_font_color;
                border-color: $sticky_header_button_colors_hover_border_color;
                background-color: $sticky_header_button_colors_hover_background_color;
            }";
      }
    }

    //Header search buttons
    if( $opt['search-icon-header'] == '1' ) {
      $search_icon_header_color = $opt['search-icon-header-color'];
      $search_icon_header_sticky_color = $opt['search-icon-header-sticky-color'];
      $main_menu_active_font_color = $opt['main-menu-active-font-color'];
      $custom_style.=".site-header #header-search-icon a
      {
        color: $search_icon_header_color;
      }";
      $custom_style.=".site-header #header-search-icon a:hover
      {
        color: $accent_color_hover;
      }";
      $custom_style.=".site-header .navbar-expand-lg.fixed-top #header-search-icon a
      {
        color: $search_icon_header_sticky_color;
      }";
      $custom_style.=".site-header .navbar-expand-lg.fixed-top #header-search-icon a:hover
      {
        color: $accent_color_hover;
      }";
    }

   //Header Search
   if($opt['search-icon-header'] == '1'){
     //search overlay
     $custom_style.=".overlay {
       height: 100%;
       width: 100%;
       display: none;
       position: fixed;
       z-index: 1;
       top: 0;
       left: 0;
       background-color: rgb(0,0,0);
       background-color: rgba(0,0,0, 0.9);
       }
     .overlay-content {
       position: relative;
       top: 40%;
       width: 80%;
       text-align: center;
       margin-top: 30px;
       margin: auto;
       }
     .overlay .closebtn {
       position: absolute;
       top: 20px;
       right: 45px;
       font-size: 30px;
       cursor: pointer;
       color: white;
       }
     .overlay .closebtn:hover {
       color: #ccc;
       }
     .overlay #searchform input{
       border: none;
       border-bottom-color: currentcolor;
       border-bottom-style: none;
       border-bottom-width: medium;
       height: 55px;
       padding: 0 15px;
       padding-left: 15px;
       font-size: 16px;
       padding-left: 0;
       width: 100%;
       color: #fff;
       background: transparent;
       border-bottom: 2px solid rgba(255, 255, 255, 0.6);
       border-radius: 0;
       outline: none;
       }
     .overlay button {
       border: none;
       background: transparent;
       border-radius: 0;
       border-top-left-radius: 0px;
       border-bottom-left-radius: 0px;
       height: 55px;
       border-bottom-left-radius: 0;
       border-top-left-radius: 0;
       color: rgba(255, 255, 255, 0.6);
       padding: 0;
       outline: none !important;
       -webkit-box-shadow: none !important;
       box-shadow: none !important;
       cursor: pointer;
       margin-left: 0;
       position: absolute;
       right: 0;
       }
     .overlay button i{
       color: rgba(255, 255, 255, 0.6);
       font-size: 30px;
       }";
   }

    //header background color
    $header_background_color = $opt['header-background-color'];
    $custom_style.=".site-header .navbar-expand-lg
    {
          background: $header_background_color;
    }";
    if($opt['is-sticky-header'] == '1'){
          //header sticky background color
          $header_sticky_background_color = $opt['header-sticky-background-color'];
          $custom_style.=".navbar-expand-lg.fixed-top
          {
                background: $header_sticky_background_color;
          }";
    }


    //menu menu
    $main_menu_font_family = $opt['main-menu-typography']['font-family'];
    $main_menu_font_size = $opt['main-menu-typography']['font-size'];
    $main_menu_font_line_height = $opt['main-menu-typography']['line-height'];
    $main_menu_font_weight = $opt['main-menu-typography']['font-weight'];

    $main_menu_font_color = $opt['main-menu-font-color'];
    $main_menu_active_font_color = $opt['main-menu-active-font-color'];

    $custom_style.=".navbar-expand-lg .navbar-nav > li > a
    {
          font-family: $main_menu_font_family;
          font-size: $main_menu_font_size;
          line-height: $main_menu_font_line_height;
          font-weight: $main_menu_font_weight;
          color: $main_menu_font_color;
    }";
    $custom_style.=".navbar-expand-lg .navbar-nav > li > a:active
    {
        color: $main_menu_active_font_color;
    }";
    $custom_style.=".navbar-expand-lg .navbar-nav > li > a:hover
    {
        color: $main_menu_active_font_color;
    }";

    /*Menu underline color*/
    $main_menu_active_font_color = $opt['main-menu-active-font-color'];
    $main_menu_sticky_active_font_color = $opt['main-menu-sticky-active-font-color'];
    $custom_style.="@media only screen and (min-width: 992px) {
      .navbar-expand-lg .menu-item > .nav-link::before
      {
            background-color:$main_menu_active_font_color;
      }
      .navbar-expand-lg.fixed-top .menu-item > .nav-link::before
      {
            background-color:$main_menu_sticky_active_font_color;
      }
    }";

   //header banner size and title subtitle size
    $header_banner_height = $opt['header-banner-height']['height'];
    $header_banner_height_mobile = (str_replace('px','',$header_banner_height)-150) .'px';

    $header_content_top_margin = $opt['header-banner-title-subtitle-top-margin']['margin-top'];
    $header_content_top_margin_mobile = ((str_replace('px','',$header_content_top_margin)/2)+20) .'px';

    $header_banner_typography_font_size = $opt['header-banner-typography']['font-size'];
    $header_banner_typography_font_size_mobile = (str_replace('px','',$header_banner_typography_font_size)/2) .'px';

    $header_banner_typography_line_height = $opt['header-banner-typography']['line-height'];

    $header_banner_subtitle_typography_font_size = $opt['header-banner-subtitle-typography']['font-size'];

    $custom_style.="@media only screen and (min-width: 768px) {
      .banner_area, .banner_shap, #bubbles-animation
      {
        height: $header_banner_height;
      }
      .banner_content
      {
        margin-top: $header_content_top_margin;
      }
      .banner_content h1
      {
        font-size: $header_banner_typography_font_size;
        line-height: $header_banner_typography_line_height;
      }
      .banner_content p
      {
        font-size: $header_banner_subtitle_typography_font_size;
      }
    }";

    $custom_style.="@media only screen and (max-width: 768px) {
      .banner_area, .banner_shap, #bubbles-animation
      {
        height: $header_banner_height_mobile;
      }
      .banner_content
      {
        margin-top: $header_content_top_margin_mobile;
      }
      .banner_content h1
      {
        font-size: $header_banner_typography_font_size_mobile;
        white-space: nowrap;
        overflow: hidden;
      }
      .banner_content p
      {
        white-space: nowrap;
        overflow: hidden;
      }
    }";

    if ( class_exists( 'WooCommerce' ) )
    {
      if(is_woocommerce() || is_shop() || is_product_category() || is_product_tag() || is_product() ||
         is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url())
         {
           //header banner size and title subtitle size
           $shop_header_banner_height = $opt['shop-header-banner-height']['height'];
           $shop_header_banner_height_mobile = (str_replace('px','',$shop_header_banner_height)-150) .'px';
           $shop_header_content_top_margin = $opt['shop-header-banner-title-subtitle-top-margin']['margin-top'];
           $shop_header_content_top_margin_mobile = ((str_replace('px','',$shop_header_content_top_margin)/2)+20) .'px';

           $shop_header_banner_typography_font_size = $opt['shop-header-banner-typography']['font-size'];
           $shop_header_banner_typography_font_size_mobile = (str_replace('px','',$shop_header_banner_typography_font_size)/2) .'px';
           $shop_header_banner_typography_line_height = $opt['shop-header-banner-typography']['line-height'];
           $shop_header_banner_subtitle_typography_font_size = $opt['shop-header-subtitle-banner-typography']['font-size'];

            $custom_style.="@media only screen and (min-width: 768px) {
              .shop_banner_area, .shop_banner_shap, #shop_bubbles-animation
              {
                height: $shop_header_banner_height;
              }
              .shop_banner_content
              {
                margin-top: $shop_header_content_top_margin;
              }
              .shop_banner_content h1
              {
                font-size: $shop_header_banner_typography_font_size;
                line-height: $shop_header_banner_typography_line_height;
              }
              .shop_banner_content p
              {
                font-size: $shop_header_banner_subtitle_typography_font_size;
              }
            }";

            $custom_style.="@media only screen and (max-width: 768px) {
              .shop_banner_area, .shop_banner_shap, #shop_bubbles-animation
              {
                height: $shop_header_banner_height_mobile;
              }
              .shop_banner_content
              {
                margin-top: $shop_header_content_top_margin_mobile;
              }
              .shop_banner_content h1
              {
                font-size: $shop_header_banner_typography_font_size_mobile;
                white-space: nowrap;
                overflow: hidden;
              }
              .shop_banner_content p
              {
                white-space: nowrap;
                overflow: hidden;
              }
            }";
         }
       }

    //header toggler
    $custom_style.=".site-header .navbar .navbar-toggler .toggler-icon
    {
        background-color: $main_menu_font_color;
    }";

    if($opt['is-sticky-header'] == '1'){

          //menu Sticky
          $main_menu_sticky_font_color = $opt['main-menu-sticky-font-color'];
          $main_menu_sticky_active_font_color = $opt['main-menu-sticky-active-font-color'];

          $custom_style.=".navbar-expand-lg.fixed-top .navbar-nav > li > a
          {
              color: $main_menu_sticky_font_color;
          }";
          $custom_style.=".navbar-expand-lg.fixed-top .navbar-nav > li > a:hover
          {
              color: $main_menu_sticky_active_font_color;
          }";
          $custom_style.=".navbar-expand-lg.fixed-top .navbar-nav > li > a:active
          {
              color: $main_menu_sticky_active_font_color;
          }";

          //header toggler
          $custom_style.=".site-header .navbar.fixed-top .navbar-toggler .toggler-icon
          {
              background-color: $main_menu_sticky_font_color;
          }";
       }

    /*Dropdown item*/
    $dropdown_item_font_color = $opt['dropdown-item-font-color'];
    $dropdown_item_hover_font_color = $opt['dropdown-item-hover-font-color'];
    $custom_style.=".dropdown-item{
    	color:$dropdown_item_font_color;
    }";
    $custom_style.=".dropdown-item:visited{
      color:$dropdown_item_font_color;
    }";
    /*drop down menu mobile color*/
    $custom_style.="@media only screen and (max-width: 991px) {
        #bs-example-navbar-collapse-1 .nav-link{
          color: $dropdown_item_font_color;
        }
        #bs-example-navbar-collapse-1 .nav-link:hover{
          color: $dropdown_item_hover_font_color;
        }
      }";

    $custom_style.=".dropdown-item:hover {
      color: $dropdown_item_hover_font_color;
      border-left: 3px solid $dropdown_item_hover_font_color;
    }";

    $custom_style.=".dropdown-menu .menu-item-has-children a{
        color: $dropdown_item_font_color;
    }";

    $custom_style.=".dropdown-menu .menu-item-has-children a:visited{
        color: $dropdown_item_font_color;
    }";

    $custom_style.=".dropdown-menu .menu-item-has-children a:hover{
        color: $dropdown_item_hover_font_color;
    }";

    $custom_style.=".dropdown-menu .menu-item-has-children::after{
        color: $dropdown_item_font_color;
    }";

    $custom_style.=".dropdown-menu .menu-item-has-children:visited::after{
        color: $dropdown_item_font_color;
    }";

    $custom_style.=".dropdown-menu .menu-item-has-children:hover::after{
        color: $dropdown_item_hover_font_color;
    }";

    //header banner
    if ( class_exists( 'WooCommerce' ) ) {
      if(is_woocommerce() || is_shop() || is_product_category() || is_product_tag() || is_product() ||
         is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url()){
           if($opt['is-shop-header-banner'] == '1' ){
             $foo = False;
             if(function_exists('get_field')){
               $post_id = '';
               if(is_shop()){
                   $post_id = get_option( 'woocommerce_shop_page_id' );
               }
               $banner_type = get_field('banner_type',$post_id);
               if($banner_type == 'Custom Banner'){
                 $header_banner_background_color_from = get_field('banner_background_color_from',$post_id);
                 $header_banner_background_color_to = get_field('banner_background_color_to',$post_id);
                 $foo = True;
               }
             }
             if($foo == False){
               $header_banner_background_color_from = $opt['shop-header-banner-background-color']['from'];
               $header_banner_background_color_to = $opt['shop-header-banner-background-color']['to'];
             }
           }
      }
      else{
        if($opt['is-header-banner'] == '1'){
          $foo = False;
          if(function_exists('get_field')){
            $banner_type = get_field('banner_type');
            if($banner_type == 'Custom Banner'){
              $header_banner_background_color_from = get_field('banner_background_color_from');
              $header_banner_background_color_to = get_field('banner_background_color_to');
              $foo = True;
            }
          }
          if($foo == False){
            $header_banner_background_color_from = $opt['header-banner-background-color']['from'];
            $header_banner_background_color_to = $opt['header-banner-background-color']['to'];
          }
      }
    }
  }
  else{
    if($opt['is-header-banner'] == '1'){
      $foo = False;
      if(function_exists('get_field')){
        $banner_type = get_field('banner_type');
        if($banner_type == 'Custom Banner'){
          $header_banner_background_color_from = get_field('banner_background_color_from');
          $header_banner_background_color_to = get_field('banner_background_color_to');
          $foo = True;
        }
      }
      if($foo == False){
        $header_banner_background_color_from = $opt['header-banner-background-color']['from'];
        $header_banner_background_color_to = $opt['header-banner-background-color']['to'];
      }
  }
  }

  /* to generate random header background color
  function random_color_part() {
      return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
  }

  function random_color() {
      return '#' . random_color_part() . random_color_part() . random_color_part();
  }

  $header_banner_background_color_from = random_color();
  $header_banner_background_color_to = random_color();
  */

  $custom_style.=".banner_area .banner_shap, .shop_banner_area .shop_banner_shap
  {
    background-image: -moz-linear-gradient(180deg, $header_banner_background_color_from 0%, $header_banner_background_color_to 100%);
    background-image: -webkit-linear-gradient(180deg, $header_banner_background_color_from 0%, $header_banner_background_color_to 100%);
    background-image: -ms-linear-gradient(180deg, $header_banner_background_color_from 0%, $header_banner_background_color_to 100%);
  }";

        //Footer Widget
      if($opt['is-footer-banner'] == '1'){
        if($opt['footer-background-style'] == '1'){
          if (is_active_sidebar('footer_widget'))
          {
            $footer_widget_title_typography_font_size = $opt['footer-widget-title-typography']['font-size'];
            $footer_widget_title_typography_font_weight = $opt['footer-widget-title-typography']['font-weight'];
            $footer_widget_title_typography_color = $opt['footer-widget-title-typography']['color'];
            $footer_widget_title_typography_line_height = $opt['footer-widget-title-typography']['line-height'];
            $footer_widget_title_typography_font_family = $opt['footer-widget-title-typography']['font-family'];

            $custom_style.=".footer-widget .widget-title
            {
                font-size: $footer_widget_title_typography_font_size;
                font-weight: $footer_widget_title_typography_font_weight;
                color: $footer_widget_title_typography_color;
                line-height: $footer_widget_title_typography_line_height;
                font-family: $footer_widget_title_typography_font_family;
            }";

            $footer_widget_content_typography_font_size = $opt['footer-widget-content-typography']['font-size'];
            $footer_widget_content_typography_font_weight = $opt['footer-widget-content-typography']['font-weight'];
            $footer_widget_content_typography_color = $opt['footer-widget-content-typography']['color'];
            $footer_widget_content_typography_line_height = $opt['footer-widget-content-typography']['line-height'];
            $footer_widget_content_typography_font_family = $opt['footer-widget-content-typography']['font-family'];

            $custom_style.=".footer-widget ul li a, .footer-widget caption, .footer-widget p, .footer-widget td, .footer-widget th, .footer-widget input, .footer-widget i
            .footer-widget h1, .footer-widget h2, .footer-widget h3, .footer-widget h4, .footer-widget h5, .footer-widget h6
            {
                font-size: $footer_widget_content_typography_font_size;
                font-weight: $footer_widget_content_typography_font_weight;
                color: $footer_widget_content_typography_color;
                line-height: $footer_widget_content_typography_line_height;
                font-family: $footer_widget_content_typography_font_family;
            }";
          }

          //Footer Background Color
          if($opt['footer-background-type'] == '1'){
            $footer_background_color_from = $opt['footer-background-color']['from'];
            $footer_background_color_to = $opt['footer-background-color']['to'];
            $custom_style.=".main-footer .footer-shap
            {
              background-image: -moz-linear-gradient(180deg, $footer_background_color_from 0%, $footer_background_color_to 100%);
              background-image: -webkit-linear-gradient(180deg, $footer_background_color_from 0%, $footer_background_color_to 100%);
              background-image: -ms-linear-gradient(180deg, $footer_background_color_from 0%, $footer_background_color_to 100%);
            }";
          }
        }
      }
        //Bottom footer
        if($opt['is-bottom-footer-banner'] == '1')
        {
          $bottom_footer_bacground_color = $opt['footer-bottom-background-color'];
          $custom_style.=".footer_bottom
          {
              background-color: $bottom_footer_bacground_color;
          }";

          $bottom_footer_left_text_typography_link_color = $opt['bottom-footer-left-text-typography-link-color'];
          $custom_style.=".footer_bottom .bottom-footer-alignment2 a
          {
              color: $bottom_footer_left_text_typography_link_color;
          }";

          $bottom_footer_right_text_typography_link_color = $opt['bottom-footer-right-text-typography-link-color'];
          $custom_style.=".footer_bottom .bottom-footer-alignment3 a
          {
              color: $bottom_footer_left_text_typography_link_color;
          }";

          $custom_style.=".footer_bottom .bottom-footer-alignment2 a:hover, .footer_bottom .bottom-footer-alignment3 a:hover
          {
              color: $accent_color;
          }";


        }

        //Error 404 pages
        if(is_404() ){
          if($opt['error-page-background-type'] == '1'){
            $error_page_color_background_color_from = $opt['error-page-color-background-color']['from'];
            $error_page_color_background_color_to = $opt['error-page-color-background-color']['to'];
            $custom_style.=".banner_area_error_page .banner_shap_error_page
            {
              background-image: -moz-linear-gradient(180deg, $error_page_color_background_color_from 0%, $error_page_color_background_color_to 100%);
              background-image: -webkit-linear-gradient(180deg, $error_page_color_background_color_from 0%, $error_page_color_background_color_to 100%);
              background-image: -ms-linear-gradient(180deg, $error_page_color_background_color_from 0%, $error_page_color_background_color_to 100%);
            }";
          }
        }

// Contact form SEND background color
$custom_style.=".wpcf7 .wpcf7-form .wpcf7-submit
{
     background-color: $accent_color;
}";

        //Shop
        if (class_exists('WooCommerce')){

          //shop header icon count
          if($opt['is-shop-cart-icon-header'] == '1'){

            $shop_cart_icon_count_background_color = $opt['shop-cart-icon-count-background-color'];
            $custom_style.=".site-header .site-header-cart .count
            {
                background-color: $shop_cart_icon_count_background_color;
            }";

            $shop_cart_icon_background_color = $opt['shop-cart-icon-background-color'];
            $custom_style.=".site-header .site-header-cart .cart-contents
            {
                color: $shop_cart_icon_background_color;
            }";

            if($opt['is-sticky-header'] == '1'){
              $shop_cart_icon_count_sticky_background_color = $opt['shop-cart-icon-count-sticky-background-color'];
              $custom_style.=".site-header .navbar-expand-lg.fixed-top .site-header-cart .count
              {
                  background-color: $shop_cart_icon_count_sticky_background_color;
              }";

              $shop_cart_icon_sticky_background_color = $opt['shop-cart-icon-sticky-background-color'];
              $custom_style.=".site-header .navbar-expand-lg.fixed-top .site-header-cart .cart-contents
              {
                  color: $shop_cart_icon_sticky_background_color;
              }";
            }
          }

          //shop user login/out icon
          if($opt['is-shop-login-icon-header'] == '1'){
            $user_logged_out_icon_color = $opt['user-logged-out-icon-color'];
            $custom_style.=".site-header #useraccount-out .userout
            {
                color: $user_logged_out_icon_color;
            }";

            $user_logged_in_icon_color = $opt['user-logged-in-icon-color'];
            $custom_style.=".site-header #useraccount .ribbon-userlogin
            {
                background-color: $user_logged_in_icon_color;
            }";

            if($opt['is-sticky-header'] == '1'){
              $user_logged_out_icon_sticky_color = $opt['user-logged-out-icon-sticky-color'];
              $custom_style.=".site-header .navbar-expand-lg.fixed-top #useraccount-out .userout
              {
                  color: $user_logged_out_icon_sticky_color;
              }";

              $user_logged_in_icon_sticky_color = $opt['user-logged-in-icon-sticky-color'];
              $custom_style.=".site-header .navbar-expand-lg.fixed-top #useraccount .ribbon-userlogin
              {
                  background-color: $user_logged_in_icon_sticky_color;
              }";
            }
          }
          //shop header icon Amount
          /*
          if($opt['shop-cart-icon-amount'] == '1'){
            $shop_cart_icon_amount_typography_font_size = $opt['shop-cart-icon-amount-typography']['font-size'];
            $shop_cart_icon_amount_typography_font_weight = $opt['shop-cart-icon-amount-typography']['font-weight'];
            $shop_cart_icon_amount_typography_color = $opt['shop-cart-icon-amount-typography']['color'];
            $shop_cart_icon_amount_typography_line_height = $opt['shop-cart-icon-amount-typography']['line-height'];
            $shop_cart_icon_amount_typography_font_family = $opt['shop-cart-icon-amount-typography']['font-family'];
            $custom_style.=".site-header .site-header-cart .topamount
            {
                font-size: $shop_cart_icon_amount_typography_font_size;
                font-weight: $shop_cart_icon_amount_typography_font_weight;
                color: $shop_cart_icon_amount_typography_color;
                line-height: $shop_cart_icon_amount_typography_line_height;
                font-family: $shop_cart_icon_amount_typography_font_family;
            }";

            $shop_cart_icon_amount_sticky_typography_font_size = $opt['shop-cart-icon-amount-sticky-typography']['font-size'];
            $shop_cart_icon_amount_sticky_typography_font_weight = $opt['shop-cart-icon-amount-sticky-typography']['font-weight'];
            $shop_cart_icon_amount_sticky_typography_color = $opt['shop-cart-icon-amount-sticky-typography']['color'];
            $shop_cart_icon_amount_sticky_typography_line_height = $opt['shop-cart-icon-amount-sticky-typography']['line-height'];
            $shop_cart_icon_amount_sticky_typography_font_family = $opt['shop-cart-icon-amount-sticky-typography']['font-family'];
            $custom_style.=".site-header .navbar-expand-lg.fixed-top .site-header-cart .topamount
            {
                font-size: $shop_cart_icon_amount_sticky_typography_font_size;
                font-weight: $shop_cart_icon_amount_sticky_typography_font_weight;
                color: $shop_cart_icon_amount_sticky_typography_color;
                line-height: $shop_cart_icon_amount_sticky_typography_line_height;
                font-family: $shop_cart_icon_amount_sticky_typography_font_family;
            }";
          }
          */

          //SALE! ribbon color
          $shop_product_sale_ribbon_color = $opt['shop-product-sale-ribbon-color'];
          $custom_style.=".products .ribbon-sale
          {
              background-color: $shop_product_sale_ribbon_color;
          }";

          //Out Of Stock color
          $shop_product_out_of_stock_ribbon_color = $opt['shop-product-out-of-stock-ribbon-color'];
          $custom_style.=".products .ribbon-out-of-stock
          {
              background-color: $shop_product_out_of_stock_ribbon_color;
          }";

          //Add to cart color
          $shop_product_add_to_cart_color = $opt['shop-product-add-to-cart-color'];
          $custom_style.=".products .product_type_external, .products .product_type_simple, .products .product_type_grouped, .products .product_type_variable,
          #site-header-cart .woocommerce-mini-cart__buttons .button, .cart .single_add_to_cart_button, .form-submit #submit_id,
          .woocommerce-page table.cart td.actions .coupon .button, .woocommerce-page table.cart td.actions .button,
          .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
          #place_order, .woocommerce .checkout_coupon .button, .woocommerce-address-fields .button, .woocommerce-EditAccountForm .button,
          .woocommerce-FormRow .woocommerce-Button.button, .woocommerce-form-row .woocommerce-Button.button, .woocommerce-form-login__submit,
          .account_dashboard_links .woocommerce-MyAccount-navigation-link, .woocommerce-orders-table__cell .view, .woocommerce-Address-title .edit
          {
              background-color: $shop_product_add_to_cart_color;
              border-color: $shop_product_add_to_cart_color;
          }";

          $custom_style.=".products .product-shopping-icon a , .products .product-quickview-icon a, .products .wihslist-button a,
          .products .product_type_external:hover, .products .product_type_variable:hover , .products .product_type_grouped:hover , .products .product_type_simple:hover,
          .products .button.product_type_simple.added:hover::after, #site-header-cart .widget_shopping_cart_content .woocommerce-mini-cart__empty-message,
          #site-header-cart .woocommerce-mini-cart__buttons .button:hover, .cart .single_add_to_cart_button:hover, .form-submit #submit_id:hover,
          .woocommerce-page table.cart td.actions .coupon .button:hover, .woocommerce-page table.cart td.actions .button:hover,
          .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,
          .woocommerce-page table.cart td.actions .button:disabled[disabled]:hover, #place_order:hover, .woocommerce .checkout_coupon .button:hover,
          .woocommerce-address-fields .button:hover, .woocommerce-EditAccountForm .button:hover,.woocommerce-FormRow .woocommerce-Button.button:hover, .woocommerce-form-row .woocommerce-Button.button:hover, .woocommerce-form-login__submit:hover,
          .account_dashboard_links .woocommerce-MyAccount-navigation-link:hover a, .woocommerce-orders-table__cell .view:hover, .woocommerce-Address-title .edit:hover
          {
              color: $shop_product_add_to_cart_color;
              border-color: $shop_product_add_to_cart_color;
          }";

          $custom_style.=".products .product-shopping-icon a:hover, .products .product-quickview-icon a:hover, .products .wihslist-button a:hover
          {
            background-color: $shop_product_add_to_cart_color;
          }";

          $custom_style.=".products .product:hover
          {
            border-color: $shop_product_add_to_cart_color;
          }";

          //cart icon
          if( $opt['is-shop-cart-icon-header'] == '1' ) {
            $custom_style.=".site-header #site-header-cart a:hover
            {
              color: $accent_color_hover;
            }";
          }

          //login icon
          if( $opt['is-shop-login-icon-header'] == '1' ) {
            $custom_style.=".site-header #useraccount-out .userout:hover
            {
              color: $accent_color_hover;
            }";
          }

          //mini cart title color
          $shop_product_minicart_title_color = $opt['shop-product-product-title-typography']['color'];
          $custom_style.="#site-header-cart .woocommerce-mini-cart-item a, #site-header-cart .woocommerce-mini-cart-item a:visited
          {
              color: $shop_product_minicart_title_color;
          }";

          //mini cart price amount color
          $shop_product_minicart_priceamount_color = $opt['shop-product-product-price-typography']['color'];
          $custom_style.="#site-header-cart .quantity
          {
              color: $shop_product_minicart_priceamount_color;
          }";

          $custom_style.="#author:hover, #email:hover, #comment:hover, #username:hover, #password:hover, #reg_email:hover, #user_login:hover,
          .woocommerce-address-fields input:hover, .woocommerce-EditAccountForm input:hover
          {
              border: 1px solid $shop_product_add_to_cart_color;
              -webkit-box-shadow: 0px 0px 1px 0px $shop_product_add_to_cart_color;
              box-shadow: 0px 0px 1px 0px $shop_product_add_to_cart_color;
          }";

          //rating color
          if($opt['is-shop-product-rating'] == '1'){
            $shop_product_rating_color = $opt['shop-product-rating-color'];
            $custom_style.=".product-details .star-rating
            {
                color: $shop_product_rating_color;
            }";

            //shop single produc rating color
            $custom_style.=".woocommerce-product-rating, .comment-form-rating .stars:hover a::before
            {
                color: $shop_product_rating_color;
            }";

          }

          //shop single product tabs
          $custom_style.=".woocommerce div.product .woocommerce-tabs ul.tabs li.active a
          {
              color: $shop_product_add_to_cart_color;
          }";
          $custom_style.=".woocommerce div.product .woocommerce-tabs ul.tabs::before, .woocommerce div.product .woocommerce-tabs ul.tabs li
          {
              border-color: $shop_product_add_to_cart_color;
          }";
          $custom_style.=".woocommerce div.product .woocommerce-tabs ul.tabs li
          {
              background-color: $shop_product_add_to_cart_color;
          }";

          //product rating position
          if($opt['is-shop-product-rating'] == '1'){
            $opt = get_option('walili-options');
            $shop_product_price_title_rating_position = $opt['shop-product-title-price-addtocart-position'];
             $rating_position = "margin-left: auto;margin-right: auto;";
             switch ($shop_product_price_title_rating_position) {
            	case 'left': $rating_position = "margin-right: auto;"; break;
            	case 'right': $rating_position = "margin-left: auto;"; break;
             }
             $custom_style.=".product-details .star-rating
             {
                 $rating_position;
             }";
          }

        }


    wp_add_inline_style('walili-min', $custom_style);

  }

add_action( 'wp_enqueue_scripts', 'custom_style' );



 ?>
