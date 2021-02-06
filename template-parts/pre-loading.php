<?php
$opt = get_option('walili-options');
$loading_text = $opt['loading-text'];
$preloading_type = $opt['preloading-type'];
$preloader_default = $opt['preloader-default'];
?>

<div id="main-preloader" class="main-preloader">
 <div class="preloader-content">

       <div class="d-flex justify-content-center">
         <?php if($preloading_type == '1'): ?>
           <?php if($preloader_default == 'preloader_1'): ?>
             <div class="spinner_2">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
           <?php elseif($preloader_default == 'preloader_2'): ?>
             <div class="la-ball-spin-clockwise">
                 <div></div>
                 <div></div>
                 <div></div>
                 <div></div>
                 <div></div>
                 <div></div>
                 <div></div>
                 <div></div>
             </div>
           <?php elseif($preloader_default == 'preloader_3'): ?>
             <div class="spinner_3"></div>
           <?php elseif($preloader_default == 'preloader_4'): ?>
             <div class="la-ball-scale-multiple">
                <div></div>
                <div></div>
                <div></div>
            </div>
           <?php endif; ?>
         <?php elseif($preloading_type == '2'): ?>
           <img src="<?php echo esc_html($opt['preloading-image']['url']); ?>"/>
         <?php endif; ?>
       </div>


<?php if(!empty($loading_text)): ?>
      <div class="d-flex justify-content-center">
          <p style="
          font-size: <?php echo esc_html($opt['loading-typography']['font-size']); ?>;
          font-weight: <?php echo esc_html($opt['loading-typography']['font-weight']); ?>;
          color:<?php echo esc_html($opt['loading-typography']['color']); ?>;
          line-height: <?php echo esc_html($opt['loading-typography']['line-height']); ?>;
          font-family: <?php echo esc_html($opt['loading-typography']['font-family']); ?>;
          ">
          <?php echo esc_html($opt['loading-text']); ?> </p>
      </div>
    <?php endif; ?>
  </div>
</div>
