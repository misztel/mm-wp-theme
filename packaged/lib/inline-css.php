<?php
$inline_styles_selectors = array(
  'a' => array(
    'color' => 'mytheme123_accent_color'
  )
);

$inline_styles = '';

foreach ($inline_styles_selectors as $selector => $props) {
  $inline_styles .= "{$selector} {";
    foreach ($props as $prop => $value) {
      $inline_styles .= "{$prop}: " . sanitize_hex_color(get_theme_mod($value, '#20ddae')). ";";
    }
  $inline_styles .= "} ";
}

?>
