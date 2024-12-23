<?php

$fashion_accessories_tp_theme_css = '';

$fashion_accessories_tp_color_option = get_theme_mod('fashion_accessories_tp_color_option');

if($fashion_accessories_tp_color_option != false){
$fashion_accessories_tp_theme_css .='button[type="submit"], .center1 .ring::before, .center2 .ring::before, .top-main, .product-cart .cart-count, .inner_searchbox button[type="submit"], .main-navigation ul ul, .main-navigation ul.sub-menu li a, .main-navigation .menu > ul > li.highlight, .readmore-btn a, #slider .more-btn a, #projects-sec .viewall-btn:hover, #projects-sec .owl-prev,
#projects-sec .owl-next, .woocommerce ul.products li.product .button,
a.checkout-button.button.alt.wc-forward, .woocommerce ul.products li.product .onsale,.woocommerce span.onsale, .wc-block-cart__submit-container a,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button, .page-numbers, .prev.page-numbers,
.next.page-numbers, span.meta-nav, .error-404 [type="submit"], #theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before, #theme-sidebar button[type="submit"],
#footer button[type="submit"], #comments input[type="submit"], .site-info, .toggle-nav button, .toggle-nav i{';
$fashion_accessories_tp_theme_css .='background: '.esc_attr($fashion_accessories_tp_color_option).';';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_color_option != false){
$fashion_accessories_tp_theme_css .='.wc-block-components-product-badge{';
$fashion_accessories_tp_theme_css .='background: '.esc_attr($fashion_accessories_tp_color_option).'!important;';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_color_option != false){
$fashion_accessories_tp_theme_css .='a,a:hover, #theme-sidebar .textwidget a,
#footer .textwidget a,
.comment-body a,
.entry-content a,
.entry-summary a,#main-content p a, .content-area a, .logo h1 a:hover, .logo p a:hover, .contact-content.call a:hover, .header-details i:hover, .main-navigation a:hover, .box-info i, #slider .inner_carousel h1 a:hover, #slider .product-details i, #slider .contact i, #slider .contact-content a:hover, .slider-below a.slider-btn2, #projects-sec h3 a:hover, .wp-block-search .wp-block-search__label,#theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading, #footer li a:hover, #theme-sidebar a:hover, #theme-sidebar .tagcloud a:hover,#sidebar p.wp-block-tag-cloud a:hover, .post_tag a:hover,#theme-sidebar .widget_tag_cloud a:hover, #footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
$fashion_accessories_tp_theme_css .='color: '.esc_attr($fashion_accessories_tp_color_option).';';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_color_option != false){
$fashion_accessories_tp_theme_css .='.center1, .center2, #about h2:before{';
$fashion_accessories_tp_theme_css .='border-top-color: '.esc_attr($fashion_accessories_tp_color_option).';';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_color_option != false){
$fashion_accessories_tp_theme_css .='.page-box, .singlepage-main, #theme-sidebar section, .main-navigation .current_page_item a{';
$fashion_accessories_tp_theme_css .='border-bottom-color: '.esc_attr($fashion_accessories_tp_color_option).';';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_color_option != false){
$fashion_accessories_tp_theme_css .='.center1, .center2, .page-box, .singlepage-main, #theme-sidebar section{';
$fashion_accessories_tp_theme_css .='border-left-color: '.esc_attr($fashion_accessories_tp_color_option).';';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_color_option != false){
$fashion_accessories_tp_theme_css .='{';
$fashion_accessories_tp_theme_css .='border-right-color: '.esc_attr($fashion_accessories_tp_color_option).';';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_color_option != false){
$fashion_accessories_tp_theme_css .='.wp-block-tag-cloud a:hover, #theme-sidebar .tagcloud a:hover,#sidebar p.wp-block-tag-cloud a:hover, .post_tag a:hover,#theme-sidebar .widget_tag_cloud a:hover, #footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
$fashion_accessories_tp_theme_css .='border-color: '.esc_attr($fashion_accessories_tp_color_option).';';
$fashion_accessories_tp_theme_css .='}';
}

//preloader
$fashion_accessories_tp_preloader_color1_option = get_theme_mod('fashion_accessories_tp_preloader_color1_option');
$fashion_accessories_tp_preloader_color2_option = get_theme_mod('fashion_accessories_tp_preloader_color2_option');
$fashion_accessories_tp_preloader_bg_color_option = get_theme_mod('fashion_accessories_tp_preloader_bg_color_option');

if($fashion_accessories_tp_preloader_color1_option != false){
$fashion_accessories_tp_theme_css .='.center1{';
	$fashion_accessories_tp_theme_css .='border-color: '.esc_attr($fashion_accessories_tp_preloader_color1_option).' !important;';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_preloader_color1_option != false){
$fashion_accessories_tp_theme_css .='.center1 .ring::before{';
	$fashion_accessories_tp_theme_css .='background: '.esc_attr($fashion_accessories_tp_preloader_color1_option).' !important;';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_preloader_color2_option != false){
$fashion_accessories_tp_theme_css .='.center2{';
	$fashion_accessories_tp_theme_css .='border-color: '.esc_attr($fashion_accessories_tp_preloader_color2_option).' !important;';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_preloader_color2_option != false){
$fashion_accessories_tp_theme_css .='.center2 .ring::before{';
	$fashion_accessories_tp_theme_css .='background: '.esc_attr($fashion_accessories_tp_preloader_color2_option).' !important;';
$fashion_accessories_tp_theme_css .='}';
}
if($fashion_accessories_tp_preloader_bg_color_option != false){
$fashion_accessories_tp_theme_css .='.loader{';
	$fashion_accessories_tp_theme_css .='background: '.esc_attr($fashion_accessories_tp_preloader_bg_color_option).';';
$fashion_accessories_tp_theme_css .='}';
}

// footer-bg-color
$fashion_accessories_tp_footer_bg_color_option = get_theme_mod('fashion_accessories_tp_footer_bg_color_option');

if($fashion_accessories_tp_footer_bg_color_option != false){
$fashion_accessories_tp_theme_css .='#footer{';
	$fashion_accessories_tp_theme_css .='background: '.esc_attr($fashion_accessories_tp_footer_bg_color_option).' !important;';
$fashion_accessories_tp_theme_css .='}';
}

// logo tagline color
$fashion_accessories_site_tagline_color = get_theme_mod('fashion_accessories_site_tagline_color');

if($fashion_accessories_site_tagline_color != false){
$fashion_accessories_tp_theme_css .='.logo h1 a, .logo p a{';
$fashion_accessories_tp_theme_css .='color: '.esc_attr($fashion_accessories_site_tagline_color).';';
$fashion_accessories_tp_theme_css .='}';
}

$fashion_accessories_logo_tagline_color = get_theme_mod('fashion_accessories_logo_tagline_color');
if($fashion_accessories_logo_tagline_color != false){
$fashion_accessories_tp_theme_css .='p.site-description{';
$fashion_accessories_tp_theme_css .='color: '.esc_attr($fashion_accessories_logo_tagline_color).';';
$fashion_accessories_tp_theme_css .='}';
}

// footer widget title color
$fashion_accessories_footer_widget_title_color = get_theme_mod('fashion_accessories_footer_widget_title_color');
if($fashion_accessories_footer_widget_title_color != false){
$fashion_accessories_tp_theme_css .='#footer h3{';
$fashion_accessories_tp_theme_css .='color: '.esc_attr($fashion_accessories_footer_widget_title_color).';';
$fashion_accessories_tp_theme_css .='}';
}

// copyright text color
$fashion_accessories_footer_copyright_text_color = get_theme_mod('fashion_accessories_footer_copyright_text_color');
if($fashion_accessories_footer_copyright_text_color != false){
$fashion_accessories_tp_theme_css .='#footer .site-info p, #footer .site-info p a {';
$fashion_accessories_tp_theme_css .='color: '.esc_attr($fashion_accessories_footer_copyright_text_color).';';
$fashion_accessories_tp_theme_css .='}';
}