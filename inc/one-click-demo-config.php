<?php
//https://github.com/awesomemotive/one-click-demo-import

// Disable regenerating images while importing media
add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

// Change some options for the jQuery modal window
function walili_ocdi_confirmation_dialog_options ( $options ) {
    return array_merge( $options, array(
        'width'       => 400,
        'dialogClass' => 'wp-dialog',
        'resizable'   => false,
        'height'      => 'auto',
        'modal'       => true,
    ) );
}
add_filter( 'pt-ocdi/confirmation_dialog_options', 'walili_ocdi_confirmation_dialog_options', 10, 1 );

function walili_ocdi_intro_text( $default_text ) {
    $default_text .= '<div class="ocdi_custom-intro-text notice notice-info inline">';
    $default_text .= sprintf (
        '%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
        esc_html__( 'Install and activate all ', 'walili' ),
        get_admin_url(null, 'themes.php?page=tgmpa-install-plugins' ),
        esc_html__( 'required plugins', 'walili' ),
        esc_html__( 'before you click on the "Import" button.', 'walili' )
    );
    $default_text .= sprintf (
        ' %1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
        esc_html__( 'You will find all the pages in ', 'walili' ),
        get_admin_url(null, 'edit.php?post_type=page' ),
        esc_html__( 'Pages.', 'walili' ),
        esc_html__( 'Other pages will be imported along with the main Homepage.', 'walili' )
    );
    $default_text .= '<br>';
    $default_text .= sprintf (
        '%1$s <a href="%2$s" target="_blank">%3$s</a>',
        esc_html__( 'If you fail to import the demo data, follow the manually alternative way', 'walili' ),
        get_admin_url(null, 'themes.php?page=pt-one-click-demo-import&import-mode=manual' ),
        esc_html__( 'here.', 'walili' )
    );
    $default_text .= '</div>';

    return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'walili_ocdi_intro_text' );

// OneClick Demo Importer
add_filter( 'pt-ocdi/import_files', 'walili_import_files' );
function walili_import_files() {
    return array (

      array(
  			'import_file_name'             => 'Default',
  			'categories'                   => array( 'Default' ),
        'import_file_url'            => 'http://walili.upapplications.com/content_demo_import/content.xml',
  			//'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/Default/content.xml',
  			//'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets.json',
  			//'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer.dat',
  			'local_import_redux'           => array(
  				array(
  					'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/Default/redux_settings.json',
  					'option_name' => 'walili-options',
  				),
  			),
  			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/Default/screenshot.png',
  			//'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'walili' ),
  			'preview_url'                  => 'http://walili.upapplications.com/',
  		),

      array(
        'import_file_name'             => 'Default',
        'categories'                   => array( 'Default' ),
        'import_file_url'            => 'http://walili.upapplications.com/content_demo_import/content.xml',
        //'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/Default/content.xml',
        //'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets.json',
        //'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer.dat',
        'local_import_redux'           => array(
          array(
            'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/Default/redux_settings.json',
            'option_name' => 'walili-options',
          ),
        ),
        'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/Default/screenshot.png',
        //'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'walili' ),
        'preview_url'                  => 'http://walili.upapplications.com/',
      ),


    );
}


function walili_after_import_setup($selected_import) {

      // Assign menus to their locations.
      $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

      set_theme_mod( 'nav_menu_locations', array (
              'main_menu' => $main_menu->term_id,
          )
      );

      // Disable Elementor's Default Colors and Default Fonts
      update_option( 'elementor_disable_color_schemes', 'yes' );
      update_option( 'elementor_disable_typography_schemes', 'yes' );
      update_option( 'elementor_global_image_lightbox', '' );

      // Assign front page and posts page (home  page).
      if ( 'Default' == $selected_import['import_file_name'] ) {
          $front_page_id = get_page_by_title( 'Home' );
      }
      /*
      if ( 'Demo 2' == $selected_import['import_file_name'] ) {
          $front_page_id = get_page_by_title( 'Home 2' );
      }
      */
      // Assign front page and posts page (blog page).
      $blog_page_id  = get_page_by_title( 'Blog' );

      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'walili_after_import_setup' );
?>
