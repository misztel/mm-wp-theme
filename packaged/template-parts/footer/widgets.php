<?php
  $footer_layout = mytheme123_sanitize_layout(get_theme_mod('mytheme123_layout', '3,3,3,3'));;
  $columns = explode(',', $footer_layout);
  $footer_bg = mytheme123_sanitize_footer_bg(get_theme_mod('mytheme123_footer_bg', 'dark'));
  $widgets_active = false;
  foreach($columns as $i => $column){
    if(is_active_sidebar('footer-sidebar-' . ($i +1))){
      $widgets_active = true;
    }
  }
?>
<?php if($widgets_active) {?>
  <div class="container-fluid bordered-section-top section--bg">
    <div class="row">
      <div class="container mt-4 text-center">
        <h2 class="section__title--center">Kontakt</h2>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="row my-5">
          <?php
            foreach($columns as $i => $column) { ?>
            <div class="col-md-<?php echo $column; ?> my-3">
              <?php if(is_active_sidebar('footer-sidebar-' . ($i + 1))) {
                dynamic_sidebar( 'footer-sidebar-' . ($i +1));
              } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
