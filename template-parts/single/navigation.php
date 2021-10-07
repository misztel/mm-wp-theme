<?php
  $prev = get_previous_post();
  $next = get_next_post();



?>
<?php if($prev || $next){ ?>
<nav class="post-navigation" role="navigation">
  <h2 class="sr-only"><?php esc_attr_e('Post Navigation', '_themename'); ?></h2>
  <div class="post-navigation__links">
    <?php if($prev) { ?>
      <div class="post-navigation-post prev">
        <a href="<?php the_permalink( $prev->ID ) ?>">
          <?php if(has_post_thumbnail($prev->ID)) { ?>
            <div><?php echo get_the_post_thumbnail($prev->ID, 'thumbnail') ?> </div>
          <?php } ?>
          <div>
            <span> <?php echo esc_html_e('Previous Post', '_themename') ?> </span>
            <span> <?php echo esc_html(get_the_title( $prev->ID)) ?> </span>
          </div>
        </a>
      </div>
    <?php } ?>
    <?php if($next) { ?>
      <div class="post-navigation-post next">
        <a href="<?php the_permalink( $next->ID ) ?>">
          <?php if(has_post_thumbnail($next->ID)) { ?>
            <div><?php echo get_the_post_thumbnail($next->ID, 'thumbnail') ?> </div>
          <?php } ?>
          <div>
            <span> <?php echo esc_html_e('Next Post', '_themename') ?> </span>
            <span> <?php echo esc_html(get_the_title( $next->ID)) ?> </span>
          </div>
        </a>
      </div>
    <?php } ?>
  </div>
</nav>
<?php } ?>
