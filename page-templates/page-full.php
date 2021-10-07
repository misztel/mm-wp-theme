<?php
/*
Template Name: Full Width Page
*/
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <main role="main">
        <?php get_template_part('loop', 'page'); ?>
      </main>
    </div>
  </div>
</div>
<?php get_footer(); ?>
