<?php

require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');
require_once('lib/customize.php');
require_once('lib/blocks.php');
require_once('lib/block-styles.php');
require_once('lib/sidebars.php');
require_once('lib/theme-support.php');
require_once('lib/navigation.php');
require_once('lib/metaboxes.php');


add_filter( 'nav_menu_link_attributes', 'add_class_to_items_link', 10, 3 );

function add_class_to_items_link( $atts, $item, $args ) {
  // check if the item has children
  $hasChildren = (in_array('menu-item-has-children', $item->classes));
  if ($hasChildren) {
    $atts['href'] = '#';
  }
  return $atts;
}

?>
