<?php


$the_home_decor_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$the_home_decor_text_transform = get_theme_mod( 'menu_text_transform_the_home_decor','CAPITALISE');
    if($the_home_decor_text_transform == 'CAPITALISE'){

		$the_home_decor_custom_css .='#main-menu ul li a{';

			$the_home_decor_custom_css .='text-transform: capitalize;';

		$the_home_decor_custom_css .='}';

	}else if($the_home_decor_text_transform == 'UPPERCASE'){

		$the_home_decor_custom_css .='#main-menu ul li a{';

			$the_home_decor_custom_css .='text-transform: uppercase;';

		$the_home_decor_custom_css .='}';

	}else if($the_home_decor_text_transform == 'LOWERCASE'){

		$the_home_decor_custom_css .='#main-menu ul li a{';

			$the_home_decor_custom_css .='text-transform: lowercase;';

		$the_home_decor_custom_css .='}';
	}

		/*---------------------------menu-zoom-------------------*/

		$the_home_decor_menu_zoom = get_theme_mod( 'the_home_decor_menu_zoom','None');

    if($the_home_decor_menu_zoom == 'Zoomout'){

		$the_home_decor_custom_css .='#main-menu ul li a{';

			$the_home_decor_custom_css .='';

		$the_home_decor_custom_css .='}';

	}else if($the_home_decor_menu_zoom == 'Zoominn'){

		$the_home_decor_custom_css .='#main-menu ul li a:hover{';

			$the_home_decor_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #AE4C1B;';

		$the_home_decor_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$the_home_decor_container_width = get_theme_mod('the_home_decor_container_width');

		$the_home_decor_custom_css .='body{';

			$the_home_decor_custom_css .='width: '.esc_attr($the_home_decor_container_width).'%; margin: auto';

		$the_home_decor_custom_css .='}';

		/*---------------------------Copyright Text alignment-------------------*/

	$the_home_decor_copyright_text_alignment = get_theme_mod( 'the_home_decor_copyright_text_alignment','LEFT-ALIGN');

	if($the_home_decor_copyright_text_alignment == 'LEFT-ALIGN'){

		$the_home_decor_custom_css .='.copy-text p{';

			$the_home_decor_custom_css .='text-align:left;';

		$the_home_decor_custom_css .='}';


	}else if($the_home_decor_copyright_text_alignment == 'CENTER-ALIGN'){

		$the_home_decor_custom_css .='.copy-text p{';

			$the_home_decor_custom_css .='text-align:center;';

		$the_home_decor_custom_css .='}';


	}else if($the_home_decor_copyright_text_alignment == 'RIGHT-ALIGN'){

		$the_home_decor_custom_css .='.copy-text p{';

			$the_home_decor_custom_css .='text-align:right;';

		$the_home_decor_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/

$the_home_decor_related_product_setting = get_theme_mod('the_home_decor_related_product_setting',true);

	if($the_home_decor_related_product_setting == false){

		$the_home_decor_custom_css .='.related.products, .related h2{';

			$the_home_decor_custom_css .='display: none;';

		$the_home_decor_custom_css .='}';
	}

		/*---------------------------Scroll to Top Alignment Settings-------------------*/

		$the_home_decor_scroll_top_position = get_theme_mod( 'the_home_decor_scroll_top_position','Right');

		if($the_home_decor_scroll_top_position == 'Right'){
	
			$the_home_decor_custom_css .='.scroll-up{';
	
				$the_home_decor_custom_css .='right: 20px;';
	
			$the_home_decor_custom_css .='}';
	
		}else if($the_home_decor_scroll_top_position == 'Left'){
	
			$the_home_decor_custom_css .='.scroll-up{';
	
				$the_home_decor_custom_css .='left: 20px;';
	
			$the_home_decor_custom_css .='}';
	
		}else if($the_home_decor_scroll_top_position == 'Center'){
	
			$the_home_decor_custom_css .='.scroll-up{';
	
				$the_home_decor_custom_css .='right: 50%;left: 50%;';
	
			$the_home_decor_custom_css .='}';
		}
	
			/*---------------------------Pagination Settings-------------------*/
	
	
	$the_home_decor_pagination_setting = get_theme_mod('the_home_decor_pagination_setting',true);
	
		if($the_home_decor_pagination_setting == false){
	
			$the_home_decor_custom_css .='.nav-links{';
	
				$the_home_decor_custom_css .='display: none;';
	
			$the_home_decor_custom_css .='}';
		}

	/*---------------------------woocommerce pagination alignment settings-------------------*/

	$the_home_decor_woocommerce_pagination_position = get_theme_mod( 'the_home_decor_woocommerce_pagination_position','Center');

	if($the_home_decor_woocommerce_pagination_position == 'Left'){

		$the_home_decor_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$the_home_decor_custom_css .='text-align: left;';

		$the_home_decor_custom_css .='}';

	}else if($the_home_decor_woocommerce_pagination_position == 'Center'){

		$the_home_decor_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$the_home_decor_custom_css .='text-align: center;';

		$the_home_decor_custom_css .='}';

	}else if($the_home_decor_woocommerce_pagination_position == 'Right'){

		$the_home_decor_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$the_home_decor_custom_css .='text-align: right;';

		$the_home_decor_custom_css .='}';
	}