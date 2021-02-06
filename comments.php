<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Walili
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
 if ( post_password_required() ) {
 	return;
 }

 $is_comments = have_comments() ? 'have_comments' : 'no_comments';

 ?>

 <section class="comment_area <?php echo esc_attr($is_comments); ?>" id="comments">

     <?php if ( have_comments() ) : ?>
         <div class="comments">
             <h2> <?php comments_number( ' ', esc_html__('1 Comment', 'walili'), esc_html__('% Comments', 'walili') ); ?> </h2>
             <ul class="list-unstyled">
             <?php
             //the_comments_navigation();
             wp_list_comments(array(
                 'style'      => 'ul',
                 'short_ping' => true,
                 //'callback'	 => 'walili_comments'
                 'walker'    => new Walili_Walker_Comment()
             ));
             the_comments_navigation();
             ?>
             </ul>
         </div>
     <?php endif; ?>

     <div class="col-md-12">
         <div class="comment_text">
             <?php
          if ( !comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
              <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'walili' ); ?></p>
              <?php
          endif;
             ?>
         </div>
         <?php
         $commenter      = wp_get_current_commenter();
         $req            = get_option( 'require_name_email' );
         $aria_req       = ( $req ? " aria-required='true'" : '' );
         $fields =  array(
             'author' => '<div class="col-md-6 form-group"> <input type="text" class="form-control" name="author" id="name" value="'.esc_attr($commenter['comment_author']).'" placeholder="'.esc_attr__('Name *', 'walili').'" '.$aria_req.'></div>',
             'email'	 => '<div class="col-md-6 form-group"> <input type="email" class="form-control" name="email" id="email" value="'.esc_attr($commenter['comment_author_email']).'" placeholder="'.esc_attr__('Email *', 'walili').'" '.$aria_req.'></div>',
             'url'	 => '<div class="col-md-12 form-group"> <input type="url" class="form-control" id="url" name="url" value="'.esc_attr($commenter['comment_author_url']).'" placeholder="'.esc_attr__('Website (Optional)', 'walili').'"></div>',
         );

         $comments_args = array(
             'fields'                => apply_filters( 'comment_form_default_fields', $fields ),
             'class_form'            => 'contact-form row',
             'class_submit'          => 'btn sub_btn',
             'title_reply_before'    => '<h2 class="comment-title">',
             'title_reply'           => esc_html__( 'Leave a Comment', 'walili' ),
             'title_reply_after'     => '</h2>',
             'comment_notes_before'  => '',
             'comment_field'         => '<div class="col-md-12 form-group"> <textarea name="comment" class="form-control" placeholder="'.esc_attr__('Your Comment', 'walili').'"></textarea></div>',
             'comment_notes_after'   => '',
         );
         comment_form($comments_args);
         ?>
     </div>
 </section>
