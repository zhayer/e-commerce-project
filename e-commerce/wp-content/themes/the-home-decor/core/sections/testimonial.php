<?php if ( get_theme_mod('the_home_decor_testimonial_section_enable',true) ) : ?>
	<div id="trending" class="pt-5">
		<div class="container">
			<div class="categories-box">
				<div class="categories-heading">
					<h4 class="mb-4"><?php echo esc_html(get_theme_mod('the_home_decor_categories_section_heading'));?></h4>
				</div>
				<div class="cat-box">
					<div class="row m-0 ser-box">
				        <?php if (class_exists('woocommerce')) { ?>
				          <?php
				            $the_home_decor_products_categories = get_terms('product_cat', array(
				              'orderby'    => 'name',
				              'order'      => 'ASC',
				              'hide_empty' => 0
				            ));
				            foreach ($the_home_decor_products_categories as $the_home_decor_product_categories) :
				            $the_home_decor_categories_thumb_id = get_term_meta($the_home_decor_product_categories->term_id, 'thumbnail_id', true);
				            $the_home_decor_categories_thumb_url = $the_home_decor_categories_thumb_id ? wp_get_attachment_thumb_url($the_home_decor_categories_thumb_id) : ''; 
				            $the_home_decor_term_link = get_term_link($the_home_decor_product_categories, 'product_cat');
				          ?>
				          <div class="col-lg-3 col-md-4 col-sm-6 service-box mb-4">
				              <div class="feature-box m-0">
				                <div class="ser-content">
				                  <div class="service-icon">
				                    <?php if ($the_home_decor_categories_thumb_url) : ?>
				                      <img src="<?php echo esc_url($the_home_decor_categories_thumb_url); ?>" alt="<?php echo esc_html($the_home_decor_product_categories->name); ?>" />
				                    <?php else : ?>
				                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slider.png" alt="" />
				                    <?php endif; ?>
				                  </div>
				                  <h4 class="mb-0 mt-0 text-center text-md-start"><a href="<?php echo esc_url($the_home_decor_term_link); ?>"><?php echo esc_html($the_home_decor_product_categories->name); ?></a></h4>
				                </div>
				              </div>
				            </div>
				          <?php endforeach; wp_reset_query(); ?>
				        <?php } ?>  
				    </div>
			    </div>
			</div>
		</div>
	</div>
<?php endif; ?>