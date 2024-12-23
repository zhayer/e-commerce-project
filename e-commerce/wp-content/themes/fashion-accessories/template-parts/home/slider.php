<?php
/**
 * Template part for displaying slider section.
 *
 * @package fashion_accessories
 */

$fashion_accessories_static_image = get_stylesheet_directory_uri() . '/assets/images/header_img.png';
$fashion_accessories_slider_arrows = get_theme_mod('fashion_accessories_slider_arrows', true);

if ($fashion_accessories_slider_arrows) : ?>
    <section id="slider">
        <div class="container">
            <?php
            $fashion_accessories_slide_pages = array();
            $fashion_accessories_mod = absint(get_theme_mod('fashion_accessories_slider_page'));
            if ($fashion_accessories_mod !== 0) {
                $fashion_accessories_slide_pages[] = $fashion_accessories_mod;
            }

            if (!empty($fashion_accessories_slide_pages)) :
                $fashion_accessories_args = array(
                    'post_type'      => 'page',
                    'post__in'       => $fashion_accessories_slide_pages,
                    'orderby'        => 'post__in',
                    'posts_per_page' => -1,
                );
                $fashion_accessories_query = new WP_Query($fashion_accessories_args);

                if ($fashion_accessories_query->have_posts()) :
                    while ($fashion_accessories_query->have_posts()) : $fashion_accessories_query->the_post(); ?>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 slider-content-col">
                                    <div class="inner_carousel pe-lg-5">
                                        <h1 class="mt-md-2 mb-3">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h1>
                                        <?php
                                        $fashion_accessories_slider_short_heading = get_theme_mod('fashion_accessories_slider_short_heading', '');
                                        if (!empty($fashion_accessories_slider_short_heading)) : ?>
                                            <p class="slidetop-text mb-md-2 mt-md-0 mb-1">
                                                <?php echo esc_html($fashion_accessories_slider_short_heading); ?>
                                            </p>
                                        <?php endif; ?>
                                        <p class="slide-content"><?php echo esc_html(wp_trim_words(get_the_content(), 25)); ?></p>
                                        <div class="more-btn my-md-4 mt-3 mb-4">
                                            <a class="btn-1" href="<?php the_permalink(); ?>">
                                                <?php esc_html_e('Shop Collection', 'fashion-accessories'); ?>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-4 banner-1 mb-md-0 mb-3">
                                                <?php if ($fashion_accessories_banner_img1 = get_theme_mod('fashion_accessories_banner_slider_first')) : ?>
                                                    <img src="<?php echo esc_url($fashion_accessories_banner_img1); ?>" alt="<?php esc_attr_e('Banner Image 1', 'fashion-accessories'); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-4 banner-2 mb-md-0 mb-3">
                                                <?php if ($fashion_accessories_banner_img2 = get_theme_mod('fashion_accessories_banner_slider_sec')) : ?>
                                                    <img src="<?php echo esc_url($fashion_accessories_banner_img2); ?>" alt="<?php esc_attr_e('Banner Image 2', 'fashion-accessories'); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-4 banner-3 mb-md-0 mb-3">
                                                <?php if ($fashion_accessories_banner_img3 = get_theme_mod('fashion_accessories_banner_slider_third')) : ?>
                                                    <img src="<?php echo esc_url($fashion_accessories_banner_img3); ?>" alt="<?php esc_attr_e('Banner Image 3', 'fashion-accessories'); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12 slider-img-col p-md-0">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full', array('alt' => esc_attr(get_the_title()))); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url($fashion_accessories_static_image); ?>" alt="<?php esc_attr_e('Slider Image', 'fashion-accessories'); ?>" />
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>