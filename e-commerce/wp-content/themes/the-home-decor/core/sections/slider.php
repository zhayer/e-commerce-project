<?php $the_home_decor_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('the_home_decor_blog_slide_category'),
  'posts_per_page' => get_theme_mod('the_home_decor_blog_slide_number'),
); ?>

<?php if ( get_theme_mod('the_home_decor_blog_box_enable',true) ) : ?>
  <div class="slider">
    <div class="slider-box">
      <div class="slider-inner-banner">
        <div class="container">
          <div class="owl-carousel">
            <?php $the_home_decor_arr_posts = new WP_Query( $the_home_decor_args );
            $i = 1;
            if ( $the_home_decor_arr_posts->have_posts() ) :
              while ( $the_home_decor_arr_posts->have_posts() ) :
                $the_home_decor_arr_posts->the_post();
                ?>
                <div class="row py-4">
                  <div class="col-lg-6 col-md-6 align-self-center">
                    <div class="slider-owl-position">
                      <div class="blog_box_inner">
                        <h4 class="mb-0 short-text"><?php echo esc_html(get_theme_mod('the_home_decor_slider_short_heading'));?></h4>
                        <h3 class="mb-3"><?php the_title(); ?></h3>
                        <p class="mb-4 pb-2 content"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        <p class="slider-button mb-0">
                          <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Shop Now','the-home-decor'); ?></a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 align-self-center">
                    <?php
                      if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                      else:
                        ?>
                        <div class="slider-alternate">
                          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/slider.png'; ?>">
                        </div>
                        <?php
                      endif;
                    ?>
                  </div>
                </div>
              <?php
              $i++;
            endwhile;
            wp_reset_postdata();
            endif; ?>
          </div>
          <div class="row pb-4">
            <div class="col-lg-6 col-md-12">
              <p class="mb-0 slider-text text-center text-lg-start"><?php echo esc_html(get_theme_mod('the_home_decor_slider_bottom_text'));?></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 align-self-center text-lg-end text-center">
              <?php if ( get_theme_mod('the_home_decor_email_id') ) : ?>
                <p class="mb-0 info-p"><i class="fas fa-envelope me-2"></i><a href="mailto:<?php echo esc_html(get_theme_mod('the_home_decor_email_id'));?>"><?php echo esc_html(get_theme_mod('the_home_decor_email_id'));?></a></p>
              <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 align-self-center text-lg-end text-center">
              <?php if ( get_theme_mod('the_home_decor_phone_number') ) : ?>
                <p class="mb-0 info-p"><i class="fas fa-phone me-2"></i><a href="tell:<?php echo esc_html(get_theme_mod('the_home_decor_phone_number'));?>"><?php echo esc_html(get_theme_mod('the_home_decor_phone_number'));?></a></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>