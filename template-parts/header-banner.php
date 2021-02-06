<?php

$opt = get_option('walili-options');

$title_excerpt = $opt['post-title-length'];
$subtitle_excerpt = $opt['post-excerpt'];

$is_header_banner_bubbles_animation = $opt['is-header-banner-bubbles-animation'];

$is_post_author = $opt['is-post-author'];
$is_post_comments = $opt['is-post-comments'];

$title_banner_excerpt = $opt['post-title-length'] ;
$subtitle_banner_excerpt = $opt['post-excerpt'];

function header_banner_title() {
    $opt = get_option('walili-options');
    $blog_title = '';
    if ( is_home() ) {
        $blog_title = !empty($opt['blog-page-title']) ? $opt['blog-page-title'] : $blog_title = 'Blog';
    } elseif ( is_page() || is_single() ) {
        while ( have_posts() ) : the_post();
            $blog_title = get_the_title();
        endwhile;
    } elseif ( is_category() ) {
        $blog_title = single_cat_title('', false);
    } elseif ( is_archive() ) {
        $blog_title = get_the_archive_title();
    } elseif ( is_search() ) {
        $blog_title = 'Search result for: “' . get_search_query() . '”';
    } else {
        $blog_title = get_the_title();
    }
    return $blog_title;
}

function header_banner_subtitle(){
  $opt = get_option('walili-options');
  $blog_subtitle = '';
  if (is_home() ) {
            $blog_subtitle = !empty($opt['blog-page-subtitle']) ? $opt['blog-page-subtitle'] : get_bloginfo( 'description' );
        }
        elseif (is_page() || is_single() ) {
            if (has_excerpt()) {
                while (have_posts() ) {
                    the_post();
                    $blog_subtitle = nl2br(get_the_excerpt(get_the_ID() ));
                }
            }
        }
        elseif ( is_archive() ) {
            echo '';
        }
        return $blog_subtitle;
  }


$foo = False;
if(function_exists('get_field')){
  $banner_type = get_field('banner_type');
  if($banner_type == 'Custom Banner'){
    $banner_background_image = get_field('banner_background_image');
    $foo = True;
  }
}

?>


<section class="banner_area">
  <?php if($foo == True) : ?>
    <div  class='banner_shap'>
     <?php if(!empty($banner_background_image)) : ?>
            <img src='<?php echo esc_html($banner_background_image); ?>' class='banner_shap'/>
     <?php endif; ?>
   </div>
    <?php elseif($opt['header-banner-type'] == '1') : ?>
    <div  class='banner_shap'>
     <?php if(!empty($opt['header-banner-color-background-Shape']['url'])) : ?>
            <img src='<?php echo esc_html($opt['header-banner-color-background-Shape']['url']); ?>' class='banner_shap'/>
     <?php endif; ?>
   </div>
  <?php elseif($opt['header-banner-type'] == '2') : ?>
      <?php if(!empty($opt['header-banner-image-background-image']['url'])) : ?>
              <img src='<?php echo esc_html($opt['header-banner-image-background-image']['url']); ?>' class='banner_shap'/>
      <?php endif; ?>
        <?php if(!empty($opt['header-banner-image-background-image-shape']['url'])) : ?>
          <img src='<?php echo esc_html($opt['header-banner-image-background-image-shape']['url']); ?>' class='banner_shap'/>
        <?php endif; ?>
  <?php endif; ?>


        <div class="container">
          <div class="banner_content text-<?php echo esc_html($opt['header-banner-title-subtitle-position']); ?>">
            <h1 style="
            font-weight: <?php echo esc_html($opt['header-banner-typography']['font-weight']); ?>;
            color:<?php echo esc_html($opt['header-banner-typography']['color']); ?>;
            font-family: <?php echo esc_html($opt['header-banner-typography']['font-family']); ?>;
            ">
              <?php echo wp_trim_words(header_banner_title(), $title_banner_excerpt); ?>
            </h1>
            <p style="
            margin-bottom: 10px;
            font-weight: <?php echo esc_html($opt['header-banner-subtitle-typography']['font-weight']); ?>;
            color:<?php echo esc_html($opt['header-banner-subtitle-typography']['color']); ?>;
            line-height: <?php echo esc_html($opt['header-banner-subtitle-typography']['line-height']); ?>;
            font-family: <?php echo esc_html($opt['header-banner-subtitle-typography']['font-family']); ?>;
            ">
              <?php echo wp_trim_words(header_banner_subtitle(), $subtitle_banner_excerpt); ?>
              <?php if(is_singular('post')): ?>
                <ol class="list-unstyled" style="
                color:<?php echo esc_html($opt['header-banner-subtitle-typography']['color']); ?>;
                font-family: <?php echo esc_html($opt['header-banner-subtitle-typography']['font-family']); ?>;
                ">
                  <?php if ( $is_post_author == '1' ) : ?>
                      <li> <?php esc_html_e( 'By', 'walili' ) ?>
                          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" style="
                          color:<?php echo esc_html($opt['header-banner-subtitle-typography']['color']); ?>;
                          ">
                              <?php echo get_the_author(); ?>
                          </a>
                      </li>
                  <?php endif; ?>
                  <?php if ( $is_post_comments == '1' ) : ?>
                      <i class="las la-angle-right"></i>
                      <li> <?php walili_comment_count( get_the_ID() ) ?> </li>
                  <?php endif; ?>
              </ol>
              <?php endif; ?>
            </p>
          </div>
        </div>

        <?php if ( $is_header_banner_bubbles_animation == '1' ) : ?>
              <div id="bubbles-animation"></div>
        <?php endif; ?>

</section>
