<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Walili
 */

 get_header();

 $is_active_sidebar = is_active_sidebar( 'blog_widget' );

 $opt = get_option('walili-options');

 if ($opt['blog-sidebar-type'] == 'sidebar-left' || $opt['blog-sidebar-type'] == 'sidebar-right') {
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

 ?>

     <section class="blog-area blog_single_area sec-pad">
         <div class="container">
                 <div class="row">

                   <?php if ($main_column_number == '9' && $opt['blog-sidebar-type'] == 'sidebar-left'): ?>
                     <div class="col-md-3 col-sm-12 pr-4">
                       <div class="blog-sidebar">
                          <?php dynamic_sidebar( 'blog_widget' ); ?>
                       </div>
                     </div>
                   <?php endif; ?>

                     <div class="col-md-<?php echo esc_attr($main_column_number); ?> col-sm-12">
                         <div class="blog-section blog_single">
                             <?php
                             while ( have_posts() ) : the_post();
                                 get_template_part( 'template-parts/content-single', get_post_format() );
                             endwhile;
                             ?>
                         </div>
 	                    <?php
 	                    // If comments are open or we have at least one comment, load up the comment template.
 	                    if ( comments_open() || get_comments_number() ) :
 		                    comments_template();
 	                    endif;
 	                    ?>
                     </div>

                     <?php if ($main_column_number == '9' && $opt['blog-sidebar-type'] == 'sidebar-right'): ?>
                       <div class="col-md-3 col-sm-12 pl-4">
                         <div class="blog-sidebar">
                            <?php dynamic_sidebar( 'blog_widget' ); ?>
                         </div>
                       </div>
                     <?php endif; ?>
             </div>
         </div>
     </section>

 <?php
 get_footer();
