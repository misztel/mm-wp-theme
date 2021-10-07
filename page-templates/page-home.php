<?php
/*
Template Name: Page Home
*/
get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <main role="main" style="overflow:hidden;">
          <?php if(have_posts()) { ?>
          <?php while(have_posts()) { ?>

            <?php the_post(); ?>

            <article <?php post_class('mb-4 bg-white'); ?>>
              <div class="page-content">
                <?php the_content(); ?>
                <section style="padding: 50px 0px;" class="">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-8 offset-lg-2 text-center">
                        <h2 class="section__title--center">Aktualne promocje</h2>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-10 offset-md-1">

                      <?php
                        // Define our WP Query Parameters
                        $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                        <div class="owl-carousel owl-carousel-posts owl-theme">
                        <?php
                        // Start our WP Query
                        while ($the_query -> have_posts()) : $the_query -> the_post();
                        // Display the Post Title with Hyperlink
                        ?>

                          <div class="row align-items-center post">
                            <?php if(get_the_post_thumbnail() !== '') { ?>
                            <div class="col-md-6">
                              <div class="post__img"><?php the_post_thumbnail( 'large' ) ?> </div>
                            </div>
                            <?php } ?>
                            <div class="col-md-6">
                              <?php _themename_post_meta(); ?>
                              <h3 class="post__title">
                                <?php the_title(); ?>
                              </h3>

                              <?php
                                // Display the Post Excerpt
                                the_excerpt(__('(more…)'));

                                _themename_read_more_link();
                              ?>

                            </div>
                          </div>


                        <?php
                        // Repeat the process and reset once it hits the limit
                        endwhile;
                        wp_reset_postdata();
                        ?>
                        </div>
                        </div>
                    </div>
                  </div>
                </section>
                <!-- <section class="section--bg bordered-section-bottom">
                  <div class="container">
                    <div class="row">
                      <div class="owl-carousel owl-carousel-posts owl-theme">
                        <div class="row">
                          <div class="col-md-6">
                            img
                          </div>
                          <div class="col-md-6">
                            Lorem ipsum
                          </div>
                        </div>
                        <div  class="row">
                          <div class="col-md-6">
                            img
                          </div>
                          <div class="col-md-6">
                            Lorem ipsum
                          </div>
                        </div>
                        <div  class="row">
                          <div class="col-md-6">
                            img
                          </div>
                          <div class="col-md-6">
                            Lorem ipsum
                          </div>
                        </div>
                        <div  class="row">
                          <div class="col-md-6">
                            img
                          </div>
                          <div class="col-md-6">
                            Lorem ipsum
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section> -->
                <!-- <section>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 offset-lg-2 text-center">
                        <h2 class="section__title--center">Aktualności</h2>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4 d-flex flex-column post">
                        <div class="post__img">
                          <img style="width: 100%;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/news1.jpg' ?>" alt="">
                        </div>
                        <div class="post__content">
                          <div class="post__meta">
                          <img src="<?php echo get_template_directory_uri() . '/dist/assets/images/clock.png' ?>" alt="">
                          <span> Czerwiec 10, 2021</span>
                          </div>
                          <h3 class="post__title">Nam libero tempore</h3>
                          <div class="post__body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime consequatur ducimus...</p>
                            <a href="" class="btn btn-primary">Więcej</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex flex-column post">
                        <div class="post__img">
                          <img style="width: 100%;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/news3.jpg' ?>" alt="">
                        </div>
                        <div class="post__content">
                          <div class="post__meta">
                          <img src="<?php echo get_template_directory_uri() . '/dist/assets/images/clock.png' ?>" alt="">
                          <span> Czerwiec 14, 2021</span>
                          </div>
                          <h3 class="post__title">Lorem ipsum dolor</h3>
                          <div class="post__body">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</p>
                            <a href="" class="btn btn-primary">Więcej</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex flex-column post">
                        <div class="post__img">
                          <img style="width: 100%;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/news2.jpg' ?>" alt="">
                        </div>
                        <div class="post__content">
                          <div class="post__meta">
                          <img src="<?php echo get_template_directory_uri() . '/dist/assets/images/clock.png' ?>" alt="">
                          <span> Czerwiec 21, 2021</span>
                          </div>
                          <h3 class="post__title">Nam libero tempore</h3>
                          <div class="post__body">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt...</p>
                            <a href="" class="btn btn-primary">Więcej</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section> -->
                <section class="section--bg bordered-section-top-bottom">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-7">
                        <h2 class="section__title mt-5">O Firmie</h2>
                        <p>
                          Serwal P.W. jest regionalnym dystrybutorem produktów mleczarskich i innych towarów wymagających chłodzenia.
                          Działamy w branży nieprzerwanie od 1989 roku, dzięki czemu dobrze znamy rynek i potrzeby klientów.
                        </p>
                      </div>
                      <div class="col-lg-5">
                        <img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cheese.jpg' ?>" alt="">
                      </div>
                    </div>
                  </div>
                </section>
                <section class="">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 offset-lg-2 text-center">
                        <h2 class="section__title--center">Producenci</h2>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="owl-carousel-producents owl-carousel owl-theme">
                        <div> <img class="header__icon" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/50-osm-sierpc.png' ?>" alt=""> </div>
                        <div> <img class="header__icon" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/logo-2019-png.png' ?>" alt=""> </div>
                        <div> <img class="header__icon" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/Hochland_logo.png' ?>" alt=""> </div>
                        <div> <img class="header__icon" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/Logo-Mlekpol-ZE-SPECYFIKACJI.png' ?>" alt=""> </div>
                        <div> <img class="header__icon" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/Hochland_logo.png' ?>" alt=""> </div>
                        <div><img class="header__icon" style="width: 100%;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/logo-2019-png.png' ?>" alt=""></div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- <section>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 offset-lg-2 text-center">
                        <h2 class="section__title--center">Producenci</h2>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4 my-2">
                        <img style="width: 100%; border-radius: 15px;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/gazeta.png' ?>" alt="">
                        <h3 class="my-3"> Oferta Czerwiec 2021 </h3>
                        <div class="btn btn-primary">Zobacz</div>
                      </div>
                      <div class="col-md-4 my-2">
                        <img style="width: 100%; border-radius: 15px;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/gazeta2.png' ?>" alt="">
                        <h3 class="my-3"> Oferta Maj 2021 </h3>
                        <div class="btn btn-primary">Zobacz</div>
                      </div>
                      <div class="col-md-4 my-2">
                        <img style="width: 100%; border-radius: 15px;" src="<?php echo get_template_directory_uri() . '/dist/assets/images/gazeta.png' ?>" alt="">
                        <h3 class="my-3"> Oferta Kwiecień 2021 </h3>
                        <div class="btn btn-primary" style="padding:">Zobacz</div>
                      </div>
                    </div>
                  </div>
                </section> -->
                </div>
              </div>
            </article>


          <?php } ?>

          <?php } else { ?>
            <?php get_template_part( 'template-parts/post/content', 'none') ?>
          <?php } ?>
        </main>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
