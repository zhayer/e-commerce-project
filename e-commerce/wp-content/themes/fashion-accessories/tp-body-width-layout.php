<?php

	$fashion_accessories_tp_theme_css = "";

$fashion_accessories_theme_lay = get_theme_mod( 'fashion_accessories_tp_body_layout_settings','Full');
if($fashion_accessories_theme_lay == 'Container'){
$fashion_accessories_tp_theme_css .='body{';
	$fashion_accessories_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$fashion_accessories_tp_theme_css .='}';
$fashion_accessories_tp_theme_css .='@media screen and (max-width:575px){';
		$fashion_accessories_tp_theme_css .='body{';
			$fashion_accessories_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
		$fashion_accessories_tp_theme_css .='} }';
$fashion_accessories_tp_theme_css .='.page-template-front-page .menubar{';
	$fashion_accessories_tp_theme_css .='position: static;';
$fashion_accessories_tp_theme_css .='}';
$fashion_accessories_tp_theme_css .='.scrolled{';
	$fashion_accessories_tp_theme_css .='width: auto; left:0; right:0;';
$fashion_accessories_tp_theme_css .='}';
}else if($fashion_accessories_theme_lay == 'Container Fluid'){
$fashion_accessories_tp_theme_css .='body{';
	$fashion_accessories_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$fashion_accessories_tp_theme_css .='}';
$fashion_accessories_tp_theme_css .='@media screen and (max-width:575px){';
		$fashion_accessories_tp_theme_css .='body{';
			$fashion_accessories_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$fashion_accessories_tp_theme_css .='} }';
$fashion_accessories_tp_theme_css .='.page-template-front-page .menubar{';
	$fashion_accessories_tp_theme_css .='width: 99%';
$fashion_accessories_tp_theme_css .='}';		
$fashion_accessories_tp_theme_css .='.scrolled{';
	$fashion_accessories_tp_theme_css .='width: auto; left:0; right:0;';
$fashion_accessories_tp_theme_css .='}';
}else if($fashion_accessories_theme_lay == 'Full'){
$fashion_accessories_tp_theme_css .='body{';
	$fashion_accessories_tp_theme_css .='max-width: 100%;';
$fashion_accessories_tp_theme_css .='}';
}

$fashion_accessories_scroll_position = get_theme_mod( 'fashion_accessories_scroll_top_position','Right');
if($fashion_accessories_scroll_position == 'Right'){
$fashion_accessories_tp_theme_css .='#return-to-top{';
    $fashion_accessories_tp_theme_css .='right: 20px;';
$fashion_accessories_tp_theme_css .='}';
}else if($fashion_accessories_scroll_position == 'Left'){
$fashion_accessories_tp_theme_css .='#return-to-top{';
    $fashion_accessories_tp_theme_css .='left: 20px;';
$fashion_accessories_tp_theme_css .='}';
}else if($fashion_accessories_scroll_position == 'Center'){
$fashion_accessories_tp_theme_css .='#return-to-top{';
    $fashion_accessories_tp_theme_css .='right: 50%;left: 50%;';
$fashion_accessories_tp_theme_css .='}';
}

    
//Social icon Font size
$fashion_accessories_social_icon_fontsize = get_theme_mod('fashion_accessories_social_icon_fontsize');
	$fashion_accessories_tp_theme_css .='.media-links a i{';
$fashion_accessories_tp_theme_css .='font-size: '.esc_attr($fashion_accessories_social_icon_fontsize).'px;';
$fashion_accessories_tp_theme_css .='}';

// site title font size option
$fashion_accessories_site_title_font_size = get_theme_mod('fashion_accessories_site_title_font_size', 30);{
$fashion_accessories_tp_theme_css .='.logo h1 , .logo p a{';
	$fashion_accessories_tp_theme_css .='font-size: '.esc_attr($fashion_accessories_site_title_font_size).'px;';
$fashion_accessories_tp_theme_css .='}';
}

//site tagline font size option
$fashion_accessories_site_tagline_font_size = get_theme_mod('fashion_accessories_site_tagline_font_size', 15);{
$fashion_accessories_tp_theme_css .='.logo p{';
	$fashion_accessories_tp_theme_css .='font-size: '.esc_attr($fashion_accessories_site_tagline_font_size).'px;';
$fashion_accessories_tp_theme_css .='}';
}

// related post
$fashion_accessories_related_post_mob = get_theme_mod('fashion_accessories_related_post_mob', true);
$fashion_accessories_related_post = get_theme_mod('fashion_accessories_remove_related_post', true);
$fashion_accessories_tp_theme_css .= '.related-post-block {';
if ($fashion_accessories_related_post == false) {
    $fashion_accessories_tp_theme_css .= 'display: none;';
}
$fashion_accessories_tp_theme_css .= '}';
$fashion_accessories_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($fashion_accessories_related_post == false || $fashion_accessories_related_post_mob == false) {
    $fashion_accessories_tp_theme_css .= '.related-post-block { display: none; }';
}
$fashion_accessories_tp_theme_css .= '}';

//return to header mobile				
$fashion_accessories_return_to_header_mob = get_theme_mod('fashion_accessories_return_to_header_mob', true);
$fashion_accessories_return_to_header = get_theme_mod('fashion_accessories_return_to_header', true);
$fashion_accessories_tp_theme_css .= '.return-to-header{';
if ($fashion_accessories_return_to_header == false) {
    $fashion_accessories_tp_theme_css .= 'display: none;';
}
$fashion_accessories_tp_theme_css .= '}';
$fashion_accessories_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($fashion_accessories_return_to_header == false || $fashion_accessories_return_to_header_mob == false) {
    $fashion_accessories_tp_theme_css .= '.return-to-header{ display: none; }';
}
$fashion_accessories_tp_theme_css .= '}';


//footer image
$fashion_accessories_footer_widget_image = get_theme_mod('fashion_accessories_footer_widget_image');
if($fashion_accessories_footer_widget_image != false){
$fashion_accessories_tp_theme_css .='#footer{';
	$fashion_accessories_tp_theme_css .='background: url('.esc_attr($fashion_accessories_footer_widget_image).');';
$fashion_accessories_tp_theme_css .='}';
}

// related product
$fashion_accessories_related_product = get_theme_mod('fashion_accessories_related_product',true);
if($fashion_accessories_related_product == false){
$fashion_accessories_tp_theme_css .='.related.products{';
	$fashion_accessories_tp_theme_css .='display: none;';
$fashion_accessories_tp_theme_css .='}';
}

//menu font size
$fashion_accessories_menu_font_size = get_theme_mod('fashion_accessories_menu_font_size', '');{
$fashion_accessories_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$fashion_accessories_tp_theme_css .='font-size: '.esc_attr($fashion_accessories_menu_font_size).'px;';
$fashion_accessories_tp_theme_css .='}';
}

// menu text tranform
$fashion_accessories_menu_text_tranform = get_theme_mod( 'fashion_accessories_menu_text_tranform','');
if($fashion_accessories_menu_text_tranform == 'Uppercase'){
$fashion_accessories_tp_theme_css .='.main-navigation a {';
	$fashion_accessories_tp_theme_css .='text-transform: uppercase;';
$fashion_accessories_tp_theme_css .='}';
}else if($fashion_accessories_menu_text_tranform == 'Lowercase'){
$fashion_accessories_tp_theme_css .='.main-navigation a {';
	$fashion_accessories_tp_theme_css .='text-transform: lowercase;';
$fashion_accessories_tp_theme_css .='}';
}
else if($fashion_accessories_menu_text_tranform == 'Capitalize'){
$fashion_accessories_tp_theme_css .='.main-navigation a {';
	$fashion_accessories_tp_theme_css .='text-transform: capitalize;';
$fashion_accessories_tp_theme_css .='}';
}

// patient
// Retrieve the customer review setting from the theme customization options.
$fashion_accessories_customer_review = get_theme_mod('fashion_accessories_customer_review', '');

// Check if the customer review is empty.
if (empty($fashion_accessories_customer_review)) {
    // Initialize the CSS variable if not already done.
    if (!isset($fashion_accessories_tp_theme_css)) {
        $fashion_accessories_tp_theme_css = '';
    }
    
    // Append the necessary CSS to remove padding, border, and border-radius when the review is empty.
    $fashion_accessories_tp_theme_css .= '.customzer-rating {';
    $fashion_accessories_tp_theme_css .= 'padding: 0; border: 0; border-radius: 0;';
    $fashion_accessories_tp_theme_css .= '}';
    // Append the necessary CSS to remove padding, border, and border-radius when the review is empty.
    $fashion_accessories_tp_theme_css .= '.half-width-border-top::before{';
    $fashion_accessories_tp_theme_css .= 'right:0; top:-40px;';
    $fashion_accessories_tp_theme_css .= '}';
}

// Output the CSS using a suitable hook (if necessary).

//slider false
$fashion_accessories_slider_arrows = get_theme_mod('fashion_accessories_slider_arrows',true);
if($fashion_accessories_slider_arrows != true){
$fashion_accessories_tp_theme_css .='.page-template-front-page .headerbox{';
	$fashion_accessories_tp_theme_css .='position:static;border-bottom:1px solid #ccc;';
$fashion_accessories_tp_theme_css .='}';
}

/*------------- Blog Page------------------*/
	$fashion_accessories_post_image_round = get_theme_mod('fashion_accessories_post_image_round', 0);
	if($fashion_accessories_post_image_round != false){
		$fashion_accessories_tp_theme_css .='.blog .box-image img{';
			$fashion_accessories_tp_theme_css .='border-radius: '.esc_attr($fashion_accessories_post_image_round).'px;';
		$fashion_accessories_tp_theme_css .='}';
	}

	$fashion_accessories_post_image_width = get_theme_mod('fashion_accessories_post_image_width', '');
	if($fashion_accessories_post_image_width != false){
		$fashion_accessories_tp_theme_css .='.blog .box-image img{';
			$fashion_accessories_tp_theme_css .='Width: '.esc_attr($fashion_accessories_post_image_width).'px;';
		$fashion_accessories_tp_theme_css .='}';
	}

	$fashion_accessories_post_image_length = get_theme_mod('fashion_accessories_post_image_length', '');
	if($fashion_accessories_post_image_length != false){
		$fashion_accessories_tp_theme_css .='.blog .box-image img{';
			$fashion_accessories_tp_theme_css .='height: '.esc_attr($fashion_accessories_post_image_length).'px;';
		$fashion_accessories_tp_theme_css .='}';
	}

	// footer widget title font size
	$fashion_accessories_footer_widget_title_font_size = get_theme_mod('fashion_accessories_footer_widget_title_font_size', '');{
	$fashion_accessories_tp_theme_css .='#footer h3{';
		$fashion_accessories_tp_theme_css .='font-size: '.esc_attr($fashion_accessories_footer_widget_title_font_size).'px;';
	$fashion_accessories_tp_theme_css .='}';
	}

	// Copyright text font size
	$fashion_accessories_footer_copyright_font_size = get_theme_mod('fashion_accessories_footer_copyright_font_size', '');{
	$fashion_accessories_tp_theme_css .='#footer .site-info p{';
		$fashion_accessories_tp_theme_css .='font-size: '.esc_attr($fashion_accessories_footer_copyright_font_size).'px;';
	$fashion_accessories_tp_theme_css .='}';
	}

	// copyright padding
	$fashion_accessories_footer_copyright_top_bottom_padding = get_theme_mod('fashion_accessories_footer_copyright_top_bottom_padding', '');
	if ($fashion_accessories_footer_copyright_top_bottom_padding !== '') { 
	    $fashion_accessories_tp_theme_css .= '.site-info {';
	    $fashion_accessories_tp_theme_css .= 'padding-top: ' . esc_attr($fashion_accessories_footer_copyright_top_bottom_padding) . 'px;';
	    $fashion_accessories_tp_theme_css .= 'padding-bottom: ' . esc_attr($fashion_accessories_footer_copyright_top_bottom_padding) . 'px;';
	    $fashion_accessories_tp_theme_css .= '}';
	}
