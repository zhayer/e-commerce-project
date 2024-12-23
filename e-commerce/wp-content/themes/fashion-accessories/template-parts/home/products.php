<?php
/**
 * Template part for displaying the services section
 *
 * @package Fashion Accessories
 * @subpackage fashion_accessories
 */

$fashion_accessories_static_image = get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; 
$fashion_accessories_woo_image = get_stylesheet_directory_uri() . '/assets/images/woo-placeholder.png';
$fashion_accessories_featured_post_count = get_theme_mod('fashion_accessories_featured_post_count', 8); // Set a default post count if not set in theme options

?>

<?php if ( get_theme_mod( 'fashion_accessories_project_show_hide', '1')) : ?>
<section id="projects-sec" class="my-5">
  <div class="container">
    <div class="title-head">
      <div class="row">
        <div class="col-lg-8 col-md-7 col-12 align-self-center p-0">
          <?php 
          $fashion_accessories_main_heading = get_theme_mod( 'fashion_accessories_projetcs_main_heading', '' );
          if ( $fashion_accessories_main_heading ) : ?>
            <h2 class="mb-3 text-md-start text-center"><?php echo esc_html( $fashion_accessories_main_heading ); ?></h2>
          <?php endif; ?>
        </div>
        <div class="col-lg-3 col-md-3 col-12 align-self-center text-md-end text-center">
          <?php
          // "View All" button
          $fashion_accessories_product_btn_text = get_theme_mod( 'fashion_accessories_product_section_btn_text1', __( 'View All', 'fashion-accessories' ) );
          $fashion_accessories_product_btn_link = get_theme_mod( 'fashion_accessories_product_section_btn_link1' );

          if ( ! empty( $fashion_accessories_product_btn_text ) && ! empty( $fashion_accessories_product_btn_link ) ) : ?>
            <a class="viewall-btn mb-3" href="<?php echo esc_url( $fashion_accessories_product_btn_link ); ?>">
              <?php echo esc_html( $fashion_accessories_product_btn_text ); ?>
              <span class="screen-reader-text"><?php echo esc_html( $fashion_accessories_product_btn_text ); ?></span>
            </a>
          <?php endif; ?>
        </div>
        <div class="col-lg-1 col-md-2 align-self-center">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 main-tab-col p-md-0">
        <?php 
        $fashion_accessories_tab_text = get_theme_mod( 'fashion_accessories_projetcs_text1', '' );
        if ( $fashion_accessories_tab_text) : ?>
          <div class="tab">
            <?php
            for ( $fashion_accessories_j = 1; $fashion_accessories_j <= $fashion_accessories_featured_post_count; $fashion_accessories_j++ ) :
              $fashion_accessories_tab_text = get_theme_mod( 'fashion_accessories_projetcs_text' . $fashion_accessories_j, '' );
              if ( $fashion_accessories_tab_text ) :
                $fashion_accessories_tab_id = sanitize_title( $fashion_accessories_tab_text );
            ?>
              <button class="tablinks" onclick="fashion_accessories_projetcs_tab(event, '<?php echo esc_attr( $fashion_accessories_tab_id ); ?>')">
                <?php echo esc_html( $fashion_accessories_tab_text ); ?>
              </button>
            <?php endif; endfor; ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="col-lg-9 col-md-8">
        <?php for ( $fashion_accessories_j = 1; $fashion_accessories_j <= $fashion_accessories_featured_post_count; $fashion_accessories_j++ ) :
          $fashion_accessories_tab_text = get_theme_mod( 'fashion_accessories_projetcs_text' . $fashion_accessories_j, '' );
          $fashion_accessories_tab_id = sanitize_title( $fashion_accessories_tab_text );
        ?>
          <div id="<?php echo esc_attr( $fashion_accessories_tab_id ); ?>" class="tabcontent mt-3" style="display: none;">
            <div class="owl-carousel owl-theme">
              <?php
              $fashion_accessories_category_slug = get_theme_mod( 'fashion_accessories_projetcs_category' . $fashion_accessories_j, '' );
              if ( $fashion_accessories_category_slug ) :
                $args = array(
                  'post_type' => 'product',
                  'posts_per_page' => 4,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'product_cat',
                      'field'    => 'slug',
                      'terms'    => sanitize_text_field( $fashion_accessories_category_slug ),
                    ),
                  ),
                );
                $query = new WP_Query( $args );

                if ( $query->have_posts() ) :
                  while ( $query->have_posts() ) : $query->the_post();
                    $product = wc_get_product( get_the_ID() );

                    if ( $product ) :
              ?>
                <div class="item mb-md-0 mb-3">
                  <div class="box">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) ); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url( $fashion_accessories_woo_image ); ?>" alt="<?php esc_attr_e( 'Product Image', 'fashion-accessories' ); ?>">
                    <?php endif; ?>

                    <div class="product-content">
                      <h3 class="my-3">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h3>
                      <p class="my-2 product-price">
                        <?php 
                          echo '<span class="product-price">' . wp_kses_post( $product->get_price_html() ) . '</span>';
                          echo ' <span class="tax-inclusion">' . esc_html__( '(inclusive of all taxes)', 'fashion-accessories' ) . '</span>';
                        ?>
                      </p>
                      <div class="product-rating mt-2">
                        <?php if ( $product->is_type( 'simple' ) ) : ?>
                          <?php woocommerce_template_loop_rating(); ?>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
                    endif; 
                  endwhile; 
                  wp_reset_postdata();
                endif;
              endif; ?>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>