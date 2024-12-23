<?php 
	if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){
		// ------- Create Nav Menu --------
		$the_home_decor_menuname ='Main Menus';
	    $the_home_decor_bpmenulocation = 'main-menu';
	    $the_home_decor_menu_exists = wp_get_nav_menu_object( $the_home_decor_menuname );
	    if( !$the_home_decor_menu_exists){
	        $the_home_decor_menu_id = wp_create_nav_menu($the_home_decor_menuname);
	        $the_home_decor_home_parent = wp_update_nav_menu_item($the_home_decor_menu_id, 0, array(
				'menu-item-title' =>  __('Home','the-home-decor'),
				'menu-item-classes' => 'home',
				'menu-item-url' =>home_url( '/' ),
				'menu-item-status' => 'publish')
			);

	        wp_update_nav_menu_item($the_home_decor_menu_id, 0, array(
	            'menu-item-title' =>  __('Products','the-home-decor'),
	            'menu-item-classes' => 'products',
	            'menu-item-url' => home_url( '//products/' ), 
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($the_home_decor_menu_id, 0, array(
	            'menu-item-title' =>  __('Collection','the-home-decor'),
	            'menu-item-classes' => 'collection',
	            'menu-item-url' => home_url( '//collection/' ), 
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($the_home_decor_menu_id, 0, array(
	            'menu-item-title' =>  __('About Us','the-home-decor'),
	            'menu-item-classes' => 'about',
	            'menu-item-url' => home_url( '//about/' ), 
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($the_home_decor_menu_id, 0, array(
	            'menu-item-title' =>  __('FAQs','the-home-decor'),
	            'menu-item-classes' => 'faq',
	            'menu-item-url' => home_url( '//faq/' ), 
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($the_home_decor_menu_id, 0, array(
	            'menu-item-title' =>  __('Contact Us','the-home-decor'),
	            'menu-item-classes' => 'contact',
	            'menu-item-url' => home_url( '//contact/' ), 
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($the_home_decor_menu_id, 0, array(
	            'menu-item-title' =>  __('Gifting','the-home-decor'),
	            'menu-item-classes' => 'gifting',
	            'menu-item-url' => home_url( '//gifting/' ), 
	            'menu-item-status' => 'publish'));
	        
			if( !has_nav_menu( $the_home_decor_bpmenulocation ) ){
	            $locations = get_theme_mod('nav_menu_locations');
	            $locations[$the_home_decor_bpmenulocation] = $the_home_decor_menu_id;
	            set_theme_mod( 'nav_menu_locations', $locations );
	        }
	    }
	    $the_home_decor_home_id='';
		$the_home_decor_home_content = '';
		$the_home_decor_home_title = 'Home';
		$the_home_decor_home = array(
			'post_type' => 'page',
			'post_title' => $the_home_decor_home_title,
			'post_content' => $the_home_decor_home_content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'home'
		);
		$the_home_decor_home_id = wp_insert_post($the_home_decor_home);
	    
		add_post_meta( $the_home_decor_home_id, '_wp_page_template', 'frontpage.php' );

		update_option( 'page_on_front', $the_home_decor_home_id );
		update_option( 'show_on_front', 'page' );

		//-----Header -----//

		set_theme_mod( 'the_home_decor_header_newsletter_button_text', 'Newsletter' );
		set_theme_mod( 'the_home_decor_header_newsletter_button_url', '#' );
		set_theme_mod( 'the_home_decor_header_inner_text', 'Discount off 25% only for 1st order' );

		

		//-----Slider-----//

		set_theme_mod( 'the_home_decor_blog_box_enable', true);

		set_theme_mod( 'the_home_decor_slider_short_heading', 'HOME SWEET HOME' );

		set_theme_mod( 'the_home_decor_blog_slide_number', '3' );
		$the_home_decor_latest_post_category = wp_create_category('Slider Post');
		set_theme_mod( 'the_home_decor_blog_slide_category', 'Slider Post' ); 

		for($i=1; $i<=3; $i++) {

			$title =   'ELEVATE YOUR SPACE WITH UNIQUE DECOR IDEAS';
			$content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not';

			// Create post object
			$the_home_decor_my_post = array(
				'post_title'    => wp_strip_all_tags( $title ),
				'post_content'  => $content,
				'post_status'   => 'publish',
				'post_type'     => 'post',
				'post_category' => array($the_home_decor_latest_post_category) 
			);

			// Insert the post into the database
			$the_home_decor_post_id = wp_insert_post( $the_home_decor_my_post );

			$the_home_decor_image_url = get_template_directory_uri().'/assets/images/slider.png';

			$the_home_decor_image_name= 'slider.png';
			$the_home_decor_upload_dir       = wp_upload_dir(); 
			// Set upload folder
			$the_home_decor_image_data       = file_get_contents($the_home_decor_image_url); 
			 
			// Get image data
			$the_home_decor_unique_file_name = wp_unique_filename( $the_home_decor_upload_dir['path'], $the_home_decor_image_name ); 
			// Generate unique name
			$filename= basename( $the_home_decor_unique_file_name ); 
			// Create image file name
			// Check folder permission and define file location
			if( wp_mkdir_p( $the_home_decor_upload_dir['path'] ) ) {
				$file = $the_home_decor_upload_dir['path'] . '/' . $filename;
			} else {
				$file = $the_home_decor_upload_dir['basedir'] . '/' . $filename;
			}
			file_put_contents( $file, $the_home_decor_image_data );
			$the_home_decor_wp_filetype = wp_check_filetype( $filename, null );
			$the_home_decor_attachment = array(
				'post_mime_type' => $the_home_decor_wp_filetype['type'],
				'post_title'     => sanitize_file_name( $filename ),
				'post_content'   => '',
				'post_type'     => 'post',
				'post_status'    => 'inherit'
			);
			$the_home_decor_attach_id = wp_insert_attachment( $the_home_decor_attachment, $file, $the_home_decor_post_id );
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			$the_home_decor_attach_data = wp_generate_attachment_metadata( $the_home_decor_attach_id, $file );
				wp_update_attachment_metadata( $the_home_decor_attach_id, $the_home_decor_attach_data );
				set_post_thumbnail( $the_home_decor_post_id, $the_home_decor_attach_id );
		}

		//-----Products-----//
		set_theme_mod( 'the_home_decor_testimonial_section_enable', true);

		set_theme_mod( 'the_home_decor_products_short_heading', 'Awesome Product');

		$title =   array('fathers day','mothers day','birthday celebration','wedding anniversary','diwali','onam','festive','personal');
		for ($i=1; $i <= 8; $i++) { 
			$terms_data = wp_insert_term(
				$title[ $i - 1 ],
				'product_cat',
				array()
			);

			$the_home_decor_image_url = get_template_directory_uri().'/assets/images/category'.$i.'.png';

			$the_home_decor_image_name= 'category'.$i.'.png';
			$the_home_decor_upload_dir       = wp_upload_dir(); 
			// Set upload folder
			$the_home_decor_image_data       = file_get_contents($the_home_decor_image_url); 
			 
			// Get image data
			$the_home_decor_unique_file_name = wp_unique_filename( $the_home_decor_upload_dir['path'], $the_home_decor_image_name ); 
			// Generate unique name
			$filename= basename( $the_home_decor_unique_file_name ); 
			// Create image file name
			// Check folder permission and define file location
			if( wp_mkdir_p( $the_home_decor_upload_dir['path'] ) ) {
				$file = $the_home_decor_upload_dir['path'] . '/' . $filename;
			} else {
				$file = $the_home_decor_upload_dir['basedir'] . '/' . $filename;
			}
			file_put_contents( $file, $the_home_decor_image_data );
			$the_home_decor_wp_filetype = wp_check_filetype( $filename, null );
			$the_home_decor_attachment = array(
				'post_mime_type' => $the_home_decor_wp_filetype['type'],
				'post_title'     => sanitize_file_name( $filename ),
				'post_content'   => '',
				'post_type'     => 'post',
				'post_status'    => 'inherit'
			);
			$the_home_decor_attach_id = wp_insert_attachment( $the_home_decor_attachment, $file );

			update_term_meta( $terms_data['term_id'], 'thumbnail_id', $the_home_decor_attach_id );
		}

	}
?>