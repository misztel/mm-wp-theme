<?php
  $footer_bg = mytheme123_sanitize_footer_bg(get_theme_mod('mytheme123_footer_bg', 'dark'));
  $site_info = get_theme_mod('mytheme123_site_info', '')
?>

<?php if($site_info){ ?>
<div class="footer">
  <div class="container text-center">
    <div class="row justify-content-between">
      <div class="p-2 site-info__text">
        <?php
          $allowed = array ('a' => array(
            'href' => array(),
            'title' => array()
          ));
          echo wp_kses($site_info, $allowed); ?>
      </div>
      <div class="p-2 site-info__text">
          Polityka Prywatności
      </div>
    </div>
  </div>
</div>
<?php }?>
