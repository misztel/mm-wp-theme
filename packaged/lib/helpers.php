<?php

if(!function_exists('mytheme123_post_meta')){
  function mytheme123_post_meta() {
    /* translators: %s: Post Date */
    printf(
      esc_html__('%s', 'mytheme123'),
      '<div style="font-size: 14px; font-weight: 600; color: #a7a7a7;display: flex;">
      <i class="fas fa-clock"></i>
      <time style="    margin-top: -3px;
      margin-left: 5px;" datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>
      </div>'
    );

    // '<a href="' . esc_url(get_permalink()) . '">
    //     <time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>
    //   </a>'

    /* translators: %s: Post Author */
    // printf(
    //   esc_html__(' By %s', 'mytheme123'),
    //   '<a href="' . esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))) . '">
    //     ' . esc_html(get_the_author()) . '
    //   </a>'
    // );
  }
}

function mytheme123_read_more_link() {
  ?>
    <a class="btn btn-primary" href=" <?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
     <?php
     /* translators: %s: Post Title */
      printf(
        wp_kses(
        __('Więcej... <span class="sr-only"> About %s', 'mytheme123'),
      [
        'span' => [
          'class' => []
        ]
      ]),
        get_the_title()
      )
      ?>
    </a>
  <?php
}

function mytheme123_bs_pagination($pages = '', $range = 2){
     $showitems = ($range * 2) + 1;
     global $paged;

     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages){

        echo '<div class="text-center">';
        echo '<nav><ul class="pagination">';

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link(1)."' aria-label='First'>&laquo;</a></li>";

         if($paged > 1 && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;</a></li>";

         for ($i=1; $i <= $pages; $i++) {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                 echo ($paged == $i)? "<li class='page-item active'><span class='page-link'>".$i." <span class='sr-only'>(current)</span></span>
                 </li>":"<li class='page-item'><a class='page-link' href='".get_pagenum_link($i)."'>".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link($paged + 1)."'  aria-label='Next'>&rsaquo;</a></li>";

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."' aria-label='Last'>&raquo;</a></li>";

         echo "</ul></nav>";
         echo "</div>";
     }
}

function mytheme123_meta( $id, $key, $default){
  $value = get_post_meta( $id, $key, true);
  if(!$value && $default) {
    return $default;
  }
  return $value;
}

function mytheme123_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'mytheme123_excerpt_length', 999 );

// function mytheme123_add_class_to_nav_li($classes, $item, $args, $depth){
//   if(isset($args->add_li_class)){
//     if( 0 !== $depth){
//       $classes[] = 'nav-item dropdown';
//     }
//     else {
//       $classes[] = $args->add_li_class;
//     }
//   }
//   return $classes;
// }
// add_filter('nav_menu_css_class', 'mytheme123_add_class_to_nav_li', 1, 4);

// function mytheme123_add_class_to_nav_a($atts, $item, $args, $depth){
//   if(isset($args->add_a_class)){
//     if( 0 !== $depth){
//       $atts['class'] = 'dropdown-item';
//     }
//     else {
//       $atts['class'] = $args->add_a_class;
//     }
//   }
//   return $atts;
// }
// add_filter( 'nav_menu_link_attributes', 'mytheme123_add_class_to_nav_a', 10, 4);


?>
