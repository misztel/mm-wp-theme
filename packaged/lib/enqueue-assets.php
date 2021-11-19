<?php

function mytheme123_assets() {
  wp_enqueue_style(
    'mytheme123-stylesheet',
    get_template_directory_uri().'/dist/assets/css/style.css',
    array(),
    '1.0.0',
    'all'
  );
  include(get_template_directory() . '/lib/inline-css.php');
  wp_add_inline_style('mytheme123-stylesheet', $inline_styles);

  wp_enqueue_script(
    'mytheme123-scripts',
    get_template_directory_uri().'/dist/assets/js/bundle.js',
    array('jquery'),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'mytheme123_assets');

function mytheme123_admin_assets() {
  wp_enqueue_style(
    'mytheme123-admin-stylesheet',
    get_template_directory_uri().'/dist/assets/css/admin.css',
    array(),
    '1.0.0',
    'all'
  );

  wp_enqueue_script(
    'mytheme123-admin-scripts',
    get_template_directory_uri().'/dist/assets/js/admin.js',
    array('jquery'),
    '1.0.0',
    true
  );
}
add_action('admin_enqueue_scripts', 'mytheme123_admin_assets');

function mytheme123_customize_preview_js(){
  wp_enqueue_script(
    'mytheme123-customize-preview',
    get_template_directory_uri().'/dist/assets/js/customize-preview.js',
    array('customize-preview', 'jquery'),
    '1.0.0',
    true
  );

  include(get_template_directory() . '/lib/inline-css.php');
  wp_localize_script('mytheme123-customize-preview', 'mytheme123', array(
    'inline_styles' => $inline_styles_selectors
  ));
}
add_action('customize_preview_init', 'mytheme123_customize_preview_js');


function mytheme123_add_google_fonts() {
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'mytheme123_add_google_fonts' );

function mytheme123_load_font_awesome() {
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.6.3/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'mytheme123_load_font_awesome' );

?>
