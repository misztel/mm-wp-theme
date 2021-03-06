<?php

function _themename_assets() {
  wp_enqueue_style(
    '_themename-stylesheet',
    get_template_directory_uri().'/dist/assets/css/style.css',
    array(),
    '1.0.0',
    'all'
  );
  include(get_template_directory() . '/lib/inline-css.php');
  wp_add_inline_style('_themename-stylesheet', $inline_styles);

  wp_enqueue_script(
    '_themename-scripts',
    get_template_directory_uri().'/dist/assets/js/bundle.js',
    array('jquery'),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', '_themename_assets');

function _themename_admin_assets() {
  wp_enqueue_style(
    '_themename-admin-stylesheet',
    get_template_directory_uri().'/dist/assets/css/admin.css',
    array(),
    '1.0.0',
    'all'
  );

  wp_enqueue_script(
    '_themename-admin-scripts',
    get_template_directory_uri().'/dist/assets/js/admin.js',
    array('jquery'),
    '1.0.0',
    true
  );
}
add_action('admin_enqueue_scripts', '_themename_admin_assets');

function _themename_customize_preview_js(){
  wp_enqueue_script(
    '_themename-customize-preview',
    get_template_directory_uri().'/dist/assets/js/customize-preview.js',
    array('customize-preview', 'jquery'),
    '1.0.0',
    true
  );

  include(get_template_directory() . '/lib/inline-css.php');
  wp_localize_script('_themename-customize-preview', '_themename', array(
    'inline_styles' => $inline_styles_selectors
  ));
}
add_action('customize_preview_init', '_themename_customize_preview_js');


function _themename_add_google_fonts() {
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap', false );
}
add_action( 'wp_enqueue_scripts', '_themename_add_google_fonts' );

function _themename_load_font_awesome() {
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.6.3/css/all.css' );
}
add_action( 'wp_enqueue_scripts', '_themename_load_font_awesome' );

?>
