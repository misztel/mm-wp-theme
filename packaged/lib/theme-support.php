<?php
  function mytheme123_theme_support(){
    add_theme_support('align-wide');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-list', 'comment-form', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('custom-logo', array(
      'height' => 200,
      'width'=> 600,
      'flex-height' => true,
      'flex-width' => true
    ));
    add_image_size('mytheme123-blog-thumbnail', 300, 300);
    add_image_size('mytheme123-blog-single', 1200, 400, true);
  }

  add_action('after_setup_theme', 'mytheme123_theme_support');

?>
