<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Walili
 */

get_header();

$opt = get_option('walili-options');

?>

	<section id="search-section" class="banner_area_error_page">
	  <?php if($opt['error-page-background-type'] == '1') : ?>
	    <div  class='banner_shap_error_page'>
	     <?php if(!empty($opt['error-page-color-background-Shape']['url'])) : ?>
	            <img src='<?php echo esc_html($opt['error-page-color-background-Shape']['url']); ?>' class='banner_shap_error_page'/>
	     <?php endif; ?>
	   </div>
	  <?php elseif($opt['error-page-background-type'] == '2') : ?>
	      <?php if(!empty($opt['error-page-image-background-image']['url'])) : ?>
	              <img src='<?php echo esc_html($opt['error-page-image-background-image']['url']); ?>' class='banner_shap_error_page'/>
	      <?php endif; ?>
	        <?php if(!empty($opt['error-page-image-background-image-shape']['url'])) : ?>
	          <img src='<?php echo esc_html($opt['error-page-image-background-image-shape']['url']); ?>' class='banner_shap_error_page'/>
	        <?php endif; ?>
	  <?php endif; ?>


	        <div class="container">
	          <div class="banner_content">
	            <h1 style="
	            font-size: <?php echo esc_html($opt['page-error-title-typography']['font-size']); ?>;
	            font-weight: <?php echo esc_html($opt['page-error-title-typography']['font-weight']); ?>;
	            color:<?php echo esc_html($opt['page-error-title-typography']['color']); ?>;
	            font-family: <?php echo esc_html($opt['page-error-title-typography']['font-family']); ?>;
	            ">
	              <?php echo esc_html($opt['page-error-title']); ?>
	            </h1>

	            <p class="f_300 w_color f_size_16 l_height26"
							style="
	            font-size: <?php echo esc_html($opt['page-error-subtitle-typography']['font-size']); ?>;
	            font-weight: <?php echo esc_html($opt['page-error-subtitle-typography']['font-weight']); ?>;
	            color:<?php echo esc_html($opt['page-error-subtitle-typography']['color']); ?>;
	            font-family: <?php echo esc_html($opt['page-error-subtitle-typography']['font-family']); ?>;
	            ">
	              <?php echo esc_html($opt['page-error-subtitle']); ?>
	            </p>

	          </div>

						<?php
						if($opt['error-page-is-show-search-box'] == '1'){
								get_search_form();
						}
						?>

						<?php if($opt['error-page-is-show-go-home-button'] == '1'): ?>
							<a href="<?php echo esc_url(home_url('/')) ?>" class="go-home-button">
									<?php echo esc_html($opt['go-back-to-home-page-text']); ?>
							</a>
					  <?php endif; ?>

	        </div>
	</section>







<?php
get_footer();
