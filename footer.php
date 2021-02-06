<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Walili
 */

$opt = get_option('walili-options');

?>

	</div><!-- #content -->

<footer id="footer-id" class="site-footer">


<?php if(!is_404() ) : ?>
<?php if ($opt['is-footer-banner'] == "1"): ?>
	<?php if($opt['footer-background-style'] == '2') : ?>
		<?php
		$footer_from_db = new WP_Query(array(
				'post_type' => 'elementor_library',
				'posts_per_page'=> -1,
				'p' => 8723
		));

		if ($footer_from_db->have_posts()) {
				while ($footer_from_db->have_posts()) : $footer_from_db->the_post();
						the_content();
				endwhile;
		}
		?>
	<?php elseif($opt['footer-background-style'] == '1') : ?>

		<?php //if (is_active_sidebar('footer_widget')): ?>
					<div class="main-footer">
								<?php if($opt['footer-background-type'] == '1') : ?>
									<div class='footer-shap'>
									 <?php if(!empty($opt['footer-background-color-background-Shape']['url'])) : ?>
													<img src='<?php echo esc_html($opt['footer-background-color-background-Shape']['url']); ?>' class='footer-shap'/>
									 <?php endif; ?>
								 </div>
								<?php elseif($opt['footer-background-type'] == '2') : ?>
										<?php if(!empty($opt['footer-background-image-background-image']['url'])) : ?>
														<img src='<?php echo esc_html($opt['footer-background-image-background-image']['url']); ?>' class='footer-shap'/>
										<?php endif; ?>
											<?php if(!empty($opt['footer-background-image-background-shape']['url'])) : ?>
												<img src='<?php echo esc_html($opt['footer-background-image-background-shape']['url']); ?>' class='footer-shap-2'/>
											<?php endif; ?>
								<?php endif; ?>

								<div class="footer-widget-container">
									<div class="container">
											<div class="row">
													<?php dynamic_sidebar('footer_widget') ?>
											</div>
									</div>
								</div>
					</div>
			<?php //endif; ?>

	<?php endif; ?>

<?php endif; ?>
<?php endif; ?>

<?php if ($opt['is-bottom-footer-banner'] == "1"): ?>
	<div class="footer_bottom">
			<div class="container">
					<div class="row align-items-center bottom-footer-alignment1">
							<div class="col-md-6 col-sm-12 bottom-footer-alignment2" style="
	            font-size: <?php echo esc_html($opt['bottom-footer-left-text-typography']['font-size']); ?>;
	            font-weight: <?php echo esc_html($opt['bottom-footer-left-text-typography']['font-weight']); ?>;
	            color:<?php echo esc_html($opt['bottom-footer-left-text-typography']['color']); ?>;
	            line-height: <?php echo esc_html($opt['bottom-footer-left-text-typography']['line-height']); ?>;
	            font-family: <?php echo esc_html($opt['bottom-footer-left-text-typography']['font-family']); ?>;
	            ">
							<span class="align-middle">
									<?php echo wp_kses_post(str_replace('{{{year}}}', date('Y'), $opt['bottom-footer-left-text'])) ?>
							</span>
							</div>
							<div class="col-md-6 col-sm-12 bottom-footer-alignment3" style="
	            font-size: <?php echo esc_html($opt['bottom-footer-right-text-typography']['font-size']); ?>;
	            font-weight: <?php echo esc_html($opt['bottom-footer-right-text-typography']['font-weight']); ?>;
	            color:<?php echo esc_html($opt['bottom-footer-right-text-typography']['color']); ?>;
	            line-height: <?php echo esc_html($opt['bottom-footer-right-text-typography']['line-height']); ?>;
	            font-family: <?php echo esc_html($opt['bottom-footer-right-text-typography']['font-family']); ?>;
	            ">
							<span class="align-middle">
									<?php echo wp_kses_post(str_replace('{{{year}}}', date('Y'), $opt['bottom-footer-right-text'])) ?>
							</span>
							</div>
					</div>
			</div>
	</div>
<?php endif; ?>

</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Bck to top -->
<a id="back_to_top" href="#" class="back-to-top"><i class="las la-arrow-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>
