<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Walili
 */

 if ( ! is_active_sidebar( 'sidebar_widget' ) ) {
 	return;
 }
 ?>
 <div class="col col-md-3 col-sm-12">
 	<div class="blog-sidebar">
 	<?php dynamic_sidebar( 'blog_widget' ); ?>
 	</div>
 </div>
