<?php

if ( !class_exists('Nav_Walker_Bootstrap') ) {
	class Nav_Walker_Bootstrap extends Walker_Nav_Menu {

		function start_el(&$output, $item, $depth=0, $args=[], $id=0) {

      if ($args->walker->has_children){
        $output .= "<li class='nav-item dropdown " .  implode(" ", $item->classes) . "'>";
        $output .= '<a
          class="nav-link dropdown-toggle"
          id="menu-item-dropdown-' . $item->ID .'"
          href="#"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded = "false"

          >';
        $output .= $item->title;
        $output .= '</a>';
      }
      else {
        $output .= "<li class=' nav-item " .  implode(" ", $item->classes) . "'>";
        $output .= '<a class="nav-link" href="' . $item->url . '">';
        $output .= $item->title;
        $output .= '</a>';
      }

      //<div class="dropdown-menu" aria-labelledby="">


		}
	}
}

?>
