<?php

// if ( !class_exists('Nav_Walker_Bootstrap') ) {
// 	class Nav_Walker_Bootstrap extends Walker_Nav_Menu {

// 		function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
//       if ($args->walker->has_children){
//         $output .= "<li class='nav-item dropdown " .  implode(" ", $item->classes) . "'>";
//         $output .= '<a
//           class="nav-link dropdown-toggle"
//           id="menu-item-dropdown-' . $item->ID .'"
//           href="#"
//           data-toggle="dropdown"
//           aria-haspopup="true"
//           aria-expanded = "false"

//           >';
//         $output .= $item->title;
//         $output .= '</a>';
//       }
//       else {
//         $output .= "<li class=' nav-item " .  implode(" ", $item->classes) . "'>";
//         $output .= '<a class="nav-link" href="' . $item->url . '">';
//         $output .= $item->title;
//         $output .= '</a>';
//       }
// 		}

// 	}
// }

// function change_ul_item_classes_in_nav( $classes, $args, $depth ) {
//     if ( 0 == $depth ) {
//         $classes[] = 'dropdown-menu bg-dark';
//     }
//     if ( 1 == $depth ) {
//         $classes[] = 'dropdown-menu dropdown-submenu bg-dark';
//     }
//     // ...
//     return $classes;
// }
// add_filter( 'nav_menu_submenu_css_class', 'change_ul_item_classes_in_nav', 10, 3 );

//<div class="dropdown-menu" aria-labelledby="">

?>
