<article <?php post_class('mb-4 p-3 bg-white'); ?>>
  <div class="row post-inner">

    <?php if(get_the_post_thumbnail() !== '') { ?>
      <div class="post-thumbnail col-md-6">
        <?php the_post_thumbnail( 'medium' ) ?>
      </div>
    <?php } ?>

      <?php if(!is_single()) { ?>
        <div class="col-md-6">
      <?php } ?>

    <header class="post-header">
    <?php if(is_single()) { ?>
      <h1>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h1>
    <?php } else { ?>
      <h2>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h2>
    <?php } ?>

      <div>
        <?php _themename_post_meta(); ?>
      </div>
    </header>

    <?php if(is_single()) { ?>
      <div>
        <?php the_content(); ?>
      </div>
    <?php } else { ?>
      <div>
        <?php the_excerpt(); ?>
      </div>
    <?php } ?>

    <?php if(is_single()) { ?>
      <footer class="post-footer">
        <?php
          if(has_category()){
            // translators: used between categories
            $cats_list = get_the_category_list(esc_html__(', ', '_themename'));
            // translators: %s is the categories list
            printf(esc_html__('Posted in %s', '_themename'), $cats_list);
          }
          if(has_tag()){
            $tags_list = get_the_tag_list('<ul><li>', '</li><li>', '</li></ul>');
            echo $tags_list;
          }
        ?>
      </footer>
      <?php if(!is_single()) { ?>
      </div>
      <?php } ?>
    <?php } ?>

    <?php if(!is_single())  {_themename_read_more_link();} ?>
  </div>
</article>
