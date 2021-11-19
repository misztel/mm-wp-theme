<article <?php post_class('mb-4 p-3 bg-white'); ?>>
  <div class="row post-inner">

    <?php if(get_the_post_thumbnail() !== '') { ?>
      <?php if(!is_single()) { ?>
      <div class="post-thumbnail col-md-6">
        <?php the_post_thumbnail( 'medium' ) ?>
      </div>
      <?php } else {?>
        <div class="post-thumbnail col-md-12">
          <?php the_post_thumbnail( 'mytheme123-blog-single' ) ?>
        </div>
      <?php } ?>
    <?php } ?>

      <?php if(!is_single()) { ?>
        <div class="col-md-6">
      <?php } else {?>
        <div class="mt-3 mb-3 col-md-12 d-flex justify-content-center">
      <?php } ?>
    <header class="post-header mb-3 mt-3">
    <?php if(is_single()) { ?>
      <h1>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h1>
    <?php } else { ?>
      <h2>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h2>
    <?php } ?>

      <div class="d-flex justify-content-center">
        <?php mytheme123_post_meta(); ?>
      </div>
    </header>
      <?php if(is_single()) { ?>
        </div>
        <?php } ?>
    <?php if(is_single()) { ?>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <div>
        <?php the_excerpt(); ?>
      </div>
    <?php } ?>

    <?php if(is_single()) { ?>
      <footer class="post-footer">
        <?php
          // if(has_category()){
          //   // translators: used between categories
          //   $cats_list = get_the_category_list(esc_html__(', ', 'mytheme123'));
          //   // translators: %s is the categories list
          //   printf(esc_html__('Posted in %s', 'mytheme123'), $cats_list);
          // }
          // if(has_tag()){
          //   $tags_list = get_the_tag_list('<ul><li>', '</li><li>', '</li></ul>');
          //   echo $tags_list;
          // }
        ?>
      </footer>
      <?php if(!is_single()) { ?>
      </div>
      <?php } ?>
    <?php } ?>

    <?php if(!is_single())  {mytheme123_read_more_link();} ?>
  </div>
</article>
