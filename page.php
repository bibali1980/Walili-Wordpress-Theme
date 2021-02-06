<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Walili
 */

get_header();
while ( have_posts() ) : the_post();
    ?>
    <div class="walili-page">
        <div class="container">
                <?php
								   get_template_part( 'template-parts/content', 'page' );
                ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
        </div> <!-- /.container -->
    </div>
<?php
endwhile; // End of the loop.
//get_sidebar();
get_footer();
