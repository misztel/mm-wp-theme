<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header role="banner" class="mb-4 bg-dark">
    <div class="header">
      <div class="header__top mb-3 bordered-section-bottom">
        <div class="container d-flex justify-content-between align-items-center py-2">
          <div class="d-flex">
            <div class="d-flex ml-3 align-items-center">
              <i class="fas fa-phone fas--20"></i>
              <div class="header__data">+48 52 3819186</div>
            </div>
            <div class="d-flex ml-2 align-items-center">
              <i class="fas fa-envelope fas--20"></i>
              <div class="header__data">biuro@serwal.bydgoszcz.pl</div>
            </div>
          </div>
          <!-- <div class="d-flex align-items-center">
            <i class="fab fa-facebook-square fas--20"></i>
          </div> -->
        </div>
      </div>
      <div class="container py-2">
        <div class="row justify-content-between">
          <div class="col-lg-3 col-12 d-flex justify-content-between align-items-center">
            <div class="logo">
              <?php if(has_custom_logo()) {
                the_custom_logo();
              } else { ?>
              <a href="<?php echo esc_url(home_url('/')) ?>" class="blogname">
                <?php esc_html(bloginfo('name')); ?>
              </a>
              <?php } ?>
            </div>
            <div class="d-lg-none">
              <button aria-haspopup="true" aria-expanded="false" class="menu-toggler">
                <div class="hamburger"></div>
              </button>
            </div>
          </div>

            <div class="header-nav">
              <nav role="navigation" aria-label="<?php esc_html_e(' Main Navigation', '_themename')?>">
                <?php wp_nav_menu(array(
                  'theme_location' => 'main-menu'
                )) ?>
                <!-- <div class="header-cta">
                  <div class="btn btn-primary">Sprawdź zamówienie</div>
                </div> -->
              </nav>
            </div>

        </div>
      </div>
    </div>
    <!-- <div class="container-fluid header-nav bg-dark">
      <nav role="navigation" aria-label="<?php esc_html_e(' Main Navigation', '_themename')?>">
        <?php // wp_nav_menu(array(
          // 'theme_location' => 'main-menu'
        // )) ?>
      </nav>
    </div> -->
  </header>
  <div id="content">
