<?php get_header(); ?>
<?php
  $layout = _themename_meta(get_the_ID(), '__themename_post_layout', 'full');
  $sidebar = is_active_sidebar('primary-sidebar');
  if($layout === 'sidebar' && !$sidebar){
    $layout = 'full';
  }
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <main role="main">
        <?php get_template_part( 'loop', 'single') ?>
      </main>
    </div>
  </div>
</div>
<?php get_footer(); ?>
