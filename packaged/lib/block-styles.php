<?php

function mytheme123_myblockstyles_enqueue() {
  wp_enqueue_script(
      'mytheme123-mheading-script',
      get_template_directory_uri() . '/template-parts/block-styles/heading/heading.js',
      array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
  );
  wp_enqueue_script(
      'mytheme123-mygroup-script',
      get_template_directory_uri() . '/template-parts/block-styles/group/group.js',
      array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
  );

  wp_enqueue_style(
    'mytheme123-mheading-style',
    get_template_directory_uri() . '/template-parts/block-styles/heading/heading-admin.css',
    null
  );
  wp_enqueue_style(
    'mytheme123-mygroup-style',
    get_template_directory_uri() . '/template-parts/block-styles/group/group-admin.css',
    null
  );
}

add_action( 'enqueue_block_editor_assets', 'mytheme123_myblockstyles_enqueue' );

function mytheme123_myblockstyles_assets() {
  wp_enqueue_style(
    'mytheme123-myheading-stylesheet',
    get_template_directory_uri().'/template-parts/block-styles/heading/heading.css',
    array(),
    '1.0.0',
    'all'
  );
  wp_enqueue_style(
    'mytheme123-mygroup-stylesheet',
    get_template_directory_uri().'/template-parts/block-styles/group/group.css',
    array(),
    '1.0.0',
    'all'
  );
}
add_action('wp_enqueue_scripts', 'mytheme123_myblockstyles_assets');

?>
