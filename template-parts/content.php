<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Walili
 */

 $allowed_html = array(
 	'a' => array(
 		'href' => array(),
 		'title' => array()
 	),
 	'br' => array(),
 	'em' => array(),
 	'strong' => array(),
     'iframe' => array(
         'src' => array(),
     )
 );
 $opt = get_option('walili-options');

 $post_title_excerpt = $opt['post-title-length'] ;
 $post_excerpt = $opt['post-excerpt'];
 $is_post_meta = $opt['is-post-meta'];
 $is_post_author = $opt['is-post-author'];
 $is_post_date = $opt['is-post-date'];
 $is_post_cat = $opt['is-post-cat'];

 $read_more = $opt['read-more'];

 $is_post_comments = $opt['is-post-comments'];

 $comments_style_float = '';
?>



<article <?php post_class('blog-items'); ?>>
		<?php
		if(has_post_format('video')) {
				$post_metas = get_post_meta(get_the_ID(), 'post_metas', true);
				$post_video_url = isset($post_metas['post_video_url']) ? $post_metas['post_video_url'] : '';
				?>
				<div class="blog-video blog-video1">
						<?php echo wp_kses($post_video_url, $allowed_html); ?>
				</div>
				<?php
		}
		elseif(has_post_format('audio')) {
				$post_metas = get_post_meta(get_the_ID(), 'post_metas', true);
				$post_audio_url = isset($post_metas['post_audio_url']) ? $post_metas['post_audio_url'] : '';
				?>
				<div class="blog-video blog-video1">
						<?php echo wp_kses($post_audio_url, $allowed_html); ?>
				</div>
				<?php
		}
		else {
				if(has_post_thumbnail()) {
						?>
            <?php if($is_post_date=='1') : ?>
              <div class="post_date">
                <h2> <?php the_time( 'd' ) ?> <span> <?php the_time( 'M' ) ?> </span> </h2>
              </div>
            <?php endif; ?>
						<a href="<?php the_permalink(); ?>" class="blog-img">
								<?php the_post_thumbnail('walili_featured_image', array('class' => 'img-responsive')); ?>
						</a>
						<?php
				}
		}
		?>
		<div class="blog-content">
				<?php
				if(is_sticky()) {
					echo '<div class="featured_post">'.esc_html__('Featured', 'walili').'</div>';
				}
				?>

				<a href="<?php the_permalink(); ?>"><h2> <?php echo wp_trim_words(get_the_title(), $post_title_excerpt); ?></h2></a>
				<p>
          <?php echo wp_trim_words(get_the_content(), $post_excerpt); ?>
          <p>
            <?php if(!empty($read_more)): $comments_style_float = 'float: right;';?>
              <a class="read-more" href="<?php the_permalink(); ?>"> <?php echo esc_html($read_more); ?><i class="las la-arrow-right"></i></a>
            <?php endif; ?>

            <?php if($is_post_comments == '1'): ?>
              <a class="post-comments" style="<?php echo ($comments_style_float); ?>" href="<?php the_permalink() ?>#comments">
                 <i class="las la-comments"></i>
                 <span> <?php walili_comment_count(get_the_ID()) ?> </span>
             </a>
            <?php endif; ?>
          </p>
        </p>

				<?php if($is_post_meta=='1') : ?>
						<ul class="post-info">

								<?php if($is_post_date=='1') : ?>
										<li> <?php esc_html_e('Date:', 'walili'); ?>
												<span><a href="<?php walili_day_link(); ?> "> <?php the_time(get_option('date_format')); ?></a> </span>
										</li>
								<?php endif; ?>

								<?php if($is_post_author=='1') : ?>
										<li> <?php esc_html_e('Author:', 'walili'); ?>
												<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')) ?>">
														<?php echo get_the_author_meta('display_name'); ?>
												</a>
										</li>
								<?php endif; ?>

								<?php if($is_post_cat=='1') : ?>
										<li> <?php esc_html_e('Category: ', 'walili'); ?><?php the_category(', ') ?></li>
								<?php endif; ?>

						</ul>
				<?php endif; ?>

		</div>
</article>
