<?php
$opt = get_option('walili-options');

$header_button_icon_position = $opt['header-button-icon-position'];
$header_button_icon = $opt['header-button-icon'];

?>
 <li id="header-button" class="header-button px-2">
     <a class="btn btn-lg top-button d-flex align-items-center justify-content-center" type="button" href="<?php echo esc_html($opt['header-button-url']); ?>"
     style="
     font-size: <?php echo esc_html($opt['header-button-typography']['font-size']); ?>;
     font-weight: <?php echo esc_html($opt['header-button-typography']['font-weight']); ?>;
     line-height: <?php echo esc_html($opt['header-button-typography']['line-height']); ?>;
     font-family: <?php echo esc_html($opt['header-button-typography']['font-family']); ?>;
     "
     >

      <?php if(!isset($header_button_icon) || trim($header_button_icon) === '') : ?>
                 <?php echo esc_html($opt['header-button-text']); ?>
      <?php else : ?>
        <?php if($header_button_icon_position =='1') : ?>
          <?php echo esc_html($opt['header-button-text']); ?>
          <i class="<?php echo esc_html($opt['header-button-icon']); ?>" style="padding-left:5px;font-size:<?php echo esc_html($opt['header-button-typography']['font-size']); ?>;"></i>
        <?php else : ?>
          <i class="<?php echo esc_html($opt['header-button-icon']); ?>" style="padding-right:5px;font-size:<?php echo esc_html($opt['header-button-typography']['font-size']); ?>;"></i>
          <?php echo esc_html($opt['header-button-text']); ?>
        <?php endif; ?>
      <?php endif; ?>
     </a>
</li>
