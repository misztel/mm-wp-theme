<?php

function mytheme123_sidebar_widgets(){
  register_sidebar(array(
    'id'=> 'primary-sidebar',
    'name' => esc_html__('Primary Sidebar', 'mytheme123'),
    'description' => esc_html__('This sidebar appears in the blog posts page', 'mytheme123'),
    'before_widget' => '<section id="%1$s" class="bg-white p-3 mb-4 %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
  ));
}

$footer_layout = '3,3,3,3';
$columns = explode(',', $footer_layout); // array
$footer_bg = mytheme123_sanitize_footer_bg(get_theme_mod('mytheme123_footer_bg', 'dark'));
$widget_theme = '';
if($footer_bg == 'light'){
  $widget_theme = 'footer_widget--dark';
} else {
  $widget_theme = 'footer_widget--light';
}

foreach ($columns as $i => $column) {
  register_sidebar( array(
    'id'=> 'footer-sidebar-' . ($i + 1),
    'name' => sprintf(esc_html__('Footer Widgets Column %s', 'mytheme123'), $i +1),
    'description' => esc_html__('Footer widgets', 'mytheme123'),
    'before_widget' => '<section id="%1$s" class="footer-widget' . $widget_theme .' %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
  ));
}

add_action('widgets_init', 'mytheme123_sidebar_widgets');

?>
