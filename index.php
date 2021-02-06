<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

 $blog_layout = $opt['blog_layout'];
 if ($blog_layout == 'list') {
   $columns = 12;
 }
 elseif ($blog_layout == 'grid') {
   $columns = 6;
 }

 ?>

 <?php if ( have_posts() ) : ?>
   <section class="archive_section">
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
                  <div class="blog-section">
                      <div class="row">
                       <?php
                       while(have_posts()) : the_post();
                       ?>
                       <div class="col-md-<?php echo esc_attr($columns); ?> col-sm-12">
                       <?php
                           get_template_part( 'template-parts/content', get_post_format() );
                           ?>
                         </div>
                           <?php
                       endwhile;
                       ?>
                     </div>
                       <?php
                       walili_pagination();
                       ?>
               </div>
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

 else :

   get_template_part( 'template-parts/content', 'none' );

 endif;
  ?>
 <?php
 get_footer();
