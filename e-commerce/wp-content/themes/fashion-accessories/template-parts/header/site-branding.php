<?php
/*
 * Displays the header section with logo, site title, tagline, navigation, and contact information.
 */
?>

<div class="headerbox">
    <div class="container">
        <div class="discount-text text-center py-md-3 pt-2">
            <?php 
            $fashion_accessories_discount_text_top = get_theme_mod('fashion_accessories_discount_text_top');
            if ($fashion_accessories_discount_text_top) : ?>
                <p class="discount-top m-0"><?php echo esc_html($fashion_accessories_discount_text_top); ?></p>
            <?php endif; ?>
        </div>
        <div class="row m-0">
            <!-- Logo Section -->
            <div class="col-lg-2 col-md-3 col-12 logo-col align-self-center">
                <div class="logo text-center text-md-start">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php endif; ?>

                    <?php if (get_theme_mod('fashion_accessories_site_title', 1)) : ?>
                        <?php if (is_front_page() && is_home()) : ?>
                            <p class="text-capitalize mb-0">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                            </p>
                        <?php else : ?>
                            <h1 class="text-capitalize">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                            </h1>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php
                    $fashion_accessories_description = get_bloginfo('description', 'display');
                    if ($fashion_accessories_description || is_customize_preview()) :
                        if (get_theme_mod('fashion_accessories_site_tagline', 1)) :
                            ?>
                            <p class="site-description my-1 text-capitalize"><?php echo esc_html($fashion_accessories_description); ?></p>
                        <?php endif; 
                    endif;
                    ?>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-12 align-self-center">
                <div class="contact call">
                    <?php 
                    $fashion_accessories_call = get_theme_mod('fashion_accessories_call');
                    if ($fashion_accessories_call) : ?>
                        <div class="text-md-start contact-col call">
                            <p class="mb-0 contact-content call">
                                <a href="tel:<?php echo esc_attr($fashion_accessories_call); ?>"><i class="fas fa-phone"></i>
                                    <?php echo esc_html($fashion_accessories_call); ?>
                                </a>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Navigation Section -->
            <div class="col-lg-6 col-md-3 col-12 align-self-center">
                <div class="main-navhead">
                    <div class="menubox">
                        <div class="menu-content">
                            <?php get_template_part('template-parts/navigation/site-nav'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Details Section -->
            <div class="col-lg-2 col-md-3 align-self-center mb-md-0 mb-3">
                <div class="header-details">
                    <!-- Search Bar -->
                    <span class="search-bar me-4">
                        <button type="button" class="open-search" aria-label="<?php esc_attr_e('Open Search', 'fashion-accessories'); ?>">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>

                    <p class="mb-0">
                        <?php if (class_exists('WooCommerce')): ?> 
                            <span class="product-cart text-center position-relative pe-2">
                                <a href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('Shopping cart', 'fashion-accessories'); ?>">
                                    <i class="fas fa-shopping-cart me-4" aria-hidden="true"></i>
                                </a>
                                <?php 
                                $fashion_accessories_cart_count = WC()->cart->get_cart_contents_count(); 
                                if ($fashion_accessories_cart_count > 0): ?>
                                    <span class="cart-count"><?php echo esc_html($fashion_accessories_cart_count); ?></span>
                                <?php endif; ?>
                            </span>
                        <?php endif; ?>
                    </p>
                    
                    <?php 
                    $fashion_accessories_like_option = get_theme_mod('fashion_accessories_like_option');
                    if ($fashion_accessories_like_option): ?>
                        <p class="mb-0">
                            <a href="<?php echo esc_url($fashion_accessories_like_option); ?>">
                                <i class="far fa-heart me-4" aria-hidden="true"></i>
                            </a>
                        </p>
                    <?php endif; ?>

                    <p class="mb-0">
                        <?php if (class_exists('YITH_WCWL')): ?>
                            <a href="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>">
                                <i class="fas fa-heart me-4" aria-hidden="true"></i>
                            </a>
                        <?php endif; ?>
                    </p>

                    <p class="mb-0">
                        <?php if (class_exists('WooCommerce')): ?>
                            <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>">
                                <i class="<?php echo esc_attr(is_user_logged_in() ? 'fas' : 'far'); ?> fa-user" aria-hidden="true"></i>
                            </a>
                        <?php endif; ?>
                    </p>

                </div>
            </div>

            <!-- Search Overlay -->
            <div class="search-outer">
                <div class="inner_searchbox w-100 h-100">
                    <?php get_search_form(); ?>
                </div>
                <button type="button" class="search-close"><?php esc_html_e('CLOSE', 'fashion-accessories'); ?></button>
            </div>
        </div>
    </div>
</div>