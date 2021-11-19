<?php

function _themename_myblockstyles_enqueue() {
  wp_enqueue_script(
      '_themename-mheading-script',
      get_template_directory_uri() . '/template-parts/block-styles/heading/heading.js',
      array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
  );
  wp_enqueue_script(
      '_themename-mygroup-script',
      get_template_directory_uri() . '/template-parts/block-styles/group/group.js',
      array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
  );

  wp_enqueue_style(
    '_themename-mheading-style',
    get_template_directory_uri() . '/template-parts/block-styles/heading/heading-admin.css',
    null
  );
  wp_enqueue_style(
    '_themename-mygroup-style',
    get_template_directory_uri() . '/template-parts/block-styles/group/group-admin.css',
    null
  );
}

add_action( 'enqueue_block_editor_assets', '_themename_myblockstyles_enqueue' );

function _themename_myblockstyles_assets() {
  wp_enqueue_style(
    '_themename-myheading-stylesheet',
    get_template_directory_uri().'/template-parts/block-styles/heading/heading.css',
    array(),
    '1.0.0',
    'all'
  );
  wp_enqueue_style(
    '_themename-mygroup-stylesheet',
    get_template_directory_uri().'/template-parts/block-styles/group/group.css',
    array(),
    '1.0.0',
    'all'
  );
}
add_action('wp_enqueue_scripts', '_themename_myblockstyles_assets');

?>
