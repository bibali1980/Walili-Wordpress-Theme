<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package walili
 */

$opt = get_option('walili-options');

$is_post_tag  = $opt['is-post-tag'] ;

$is_single_post_meta= $opt['is-single-post-meta'];
$is_single_categories = $opt['is-single-categories'] ;
$is_single_post_author = $opt['is-single-post-author'];
$is_single_post_date = $opt['is-single-post-date'];

?>

<div <?php post_class('blog-section blog_single') ?>>
    <article class="blog-items-single">
        <div class="blog-content-single">
            <?php
            the_content();
            wp_link_pages( array(
	            'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'walili' ) . '</span>',
	            'after'       => '</div>',
	            'link_before' => '<span>',
	            'link_after'  => '</span>',
	            'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'walili' ) . ' </span>%',
	            'separator'   => '<span class="screen-reader-text">, </span>',
            ));
            ?>
        </div>
    </article>

    <div class="blog-content">
  <?php if($is_single_post_meta=='1') : ?>
                <ul class="post-info">
          <?php if($is_single_post_date=='1') : ?>
              <li> <?php esc_html_e('Date:', 'walili'); ?>
                  <span><a href="<?php walili_day_link(); ?> "> <?php the_time(get_option('date_format')); ?></a> </span>
              </li>
          <?php endif; ?>

          <?php if($is_single_post_author=='1') : ?>
              <li> <?php esc_html_e('Author:', 'walili'); ?>
                  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')) ?>">
                      <?php echo get_the_author_meta('display_name'); ?>
                  </a>
              </li>
          <?php endif; ?>

          <?php if($is_single_categories=='1') : ?>
              <li> <?php esc_html_e('Category: ', 'walili'); ?><?php the_category(', ') ?></li>
          <?php endif; ?>
        </ul>
  <?php endif; ?>
    </div>

    <div class="post_tag_info">
      <?php if($is_post_tag=='1') : ?>
          <div class="post_tag pull-left">
              <?php the_tags('<i class="las la-tags"></i> <span>', '</span><span> ', '</span>'); ?>
          </div>
      <?php endif; ?>
    </div>

<?php
  if($opt['is-single-post-share-buttons'] == '1'){
    wp_register_script('pinit' , get_template_directory_uri() . '/js/pinit.js' , array() , true , true);// true to pute js in footer , false is to pute js in header
    wp_enqueue_script('pinit');
    social_sharing_buttons();
  }
 ?>

</div>
