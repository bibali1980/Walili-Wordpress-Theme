<?php
$opt = get_option('walili-options');

$is_shop_header_banner_bubbles_animation = $opt['is-shop-header-banner-bubbles-animation'];

function header_banner_title() {
    $opt = get_option('walili-options');
    if ( is_shop() ) {
        echo !empty($opt['shop-title']) ? esc_html($opt['shop-title']) : esc_html__( 'Shop', 'walili' );
    }
    elseif ( is_home() ) {
        $blog_title = !empty($opt['blog-page-title']) ? $opt['blog-page-title'] : esc_html__( 'Blog', 'walili' );
        echo esc_html($blog_title);
    } elseif ( is_page() || is_single() ) {
        while ( have_posts() ) : the_post();
            the_title();
        endwhile;
    } elseif ( is_category() ) {
        single_cat_title();
    } elseif ( is_archive() ) {
        the_archive_title();
    } elseif ( is_search() ) {
        esc_html_e( 'Search result for: “', 'walili' );
        echo get_search_query() . '”';
    } else {
        the_title();
    }
}

function header_banner_subtitle(){
  $opt = get_option('walili-options');

  if ( is_shop() ) {
    $shop_blog_subtitle = !empty($opt['shop-subtitle']) ? $opt['shop-subtitle'] : '';
    echo esc_html($shop_blog_subtitle);
  }
  elseif (is_home() ) {
            $blog_subtitle = !empty($opt['blog-page-subtitle']) ? $opt['blog-page-subtitle'] : get_bloginfo( 'description' );
            echo esc_html($blog_subtitle);
        }
        elseif (is_page() || is_single() ) {
            if (has_excerpt()) {
                while (have_posts() ) {
                    the_post();
                    echo wp_trim_words(get_the_excerpt(get_the_ID()), 40,'.....');
                    //echo nl2br(get_the_excerpt(get_the_ID() ));
                }
            }
        }
        elseif ( is_archive() ) {
            echo '';
        }
}

$foo = False;
if(function_exists('get_field')){
  $post_id = '';
  if(is_shop()){
      $post_id = get_option( 'woocommerce_shop_page_id' );
  }
  $banner_type = get_field('banner_type',$post_id);

  if($banner_type == 'Custom Banner'){
    $banner_background_image = get_field('banner_background_image',$post_id);
    $foo = True;
  }
}

?>

<section class="shop_banner_area">
  <?php if($foo == True) : ; ?>
    <div  class='shop_banner_shap'>
     <?php if(!empty($banner_background_image)) : ?>
            <img src='<?php echo esc_html($banner_background_image); ?>' class='shop_banner_shap' />
     <?php endif; ?>
   </div>
<?php elseif($opt['shop-header-banner-type'] == '1') : ?>
    <div  class='shop_banner_shap'>
     <?php if(!empty($opt['shop-header-banner-color-background-Shape']['url'])) : ?>
            <img src='<?php echo esc_html($opt['shop-header-banner-color-background-Shape']['url']); ?>' class='shop_banner_shap' />
     <?php endif; ?>
   </div>
  <?php elseif($opt['shop-header-banner-type'] == '2') : ?>
      <?php if(!empty($opt['shop-header-banner-image-background-image']['url'])) : ?>
              <img src='<?php echo esc_html($opt['shop-header-banner-image-background-image']['url']); ?>' class='shop_banner_shap' />
      <?php endif; ?>
        <?php if(!empty($opt['shop-header-banner-image-background-image-shape']['url'])) : ?>
          <img src='<?php echo esc_html($opt['shop-header-banner-image-background-image-shape']['url']); ?>' class='shop_banner_shap' />
        <?php endif; ?>
  <?php endif; ?>


        <div class="container">
          <div class="shop_banner_content text-<?php echo esc_html($opt['shop-header-banner-title-subtitle-position']); ?>">
            <h1 style="
            font-weight: <?php echo esc_html($opt['shop-header-banner-typography']['font-weight']); ?>;
            color:<?php echo esc_html($opt['shop-header-banner-typography']['color']); ?>;
            font-family: <?php echo esc_html($opt['shop-header-banner-typography']['font-family']); ?>;
            ">
              <?php header_banner_title(); ?>
            </h1>

            <p class="f_300 w_color f_size_16 l_height26" style="
            margin-bottom: 10px;
            font-weight: <?php echo esc_html($opt['shop-header-subtitle-banner-typography']['font-weight']); ?>;
            color:<?php echo esc_html($opt['shop-header-subtitle-banner-typography']['color']); ?>;
            line-height: <?php echo esc_html($opt['shop-header-subtitle-banner-typography']['line-height']); ?>;
            font-family: <?php echo esc_html($opt['shop-header-subtitle-banner-typography']['font-family']); ?>;
            ">
              <?php header_banner_subtitle(); ?>
            </p>
          </div>
        </div>

        <?php if ( $is_shop_header_banner_bubbles_animation == '1' ) : ?>
              <div id="shop_bubbles-animation" ></div>
        <?php endif; ?>

</section>
