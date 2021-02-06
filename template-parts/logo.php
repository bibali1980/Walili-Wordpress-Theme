<?php
$opt = get_option('walili-options');
?>


<a class="navbar-brand" href="<?php echo esc_url(home_url('/')) ?>">

   <?php if($opt['is-sticky-header'] == '1') : ?>
     <img id ="header-main-logo" class="main-logo" src="<?php echo esc_html($opt['main-logo-id']['url']); ?>"
      class="d-inline-block align-top" alt="<?php bloginfo('name'); ?>">
      <img id ="sticky-main-logo" class="main-logo" src="<?php echo esc_html($opt['sticky-logo-id']['url']); ?>"
       class="d-inline-block align-top" alt="<?php bloginfo('name'); ?>" style="display: none;">
   <?php else: ?>
     <img id ="header-main-logo" class="main-logo" src="<?php echo esc_html($opt['main-logo-id']['url']); ?>"
      class="d-inline-block align-top" alt="<?php bloginfo('name'); ?>">
   <?php endif; ?>

</a>
