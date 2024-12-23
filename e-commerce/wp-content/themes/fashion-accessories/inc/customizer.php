<?php
/**
 * Fashion Accessories: Customizer
 *
 * @package Fashion Accessories
 * @subpackage fashion_accessories
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Fashion_Accessories_Customize_register( $wp_customize ) {

	require get_parent_theme_file_path('/inc/controls/icon-changer.php');

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	// Register the custom control type.
	$wp_customize->register_control_type( 'Fashion_Accessories_Toggle_Control' );

	//Register the sortable control type.
	$wp_customize->register_control_type( 'Fashion_Accessories_Control_Sortable' );	

	//add home page setting pannel
	$wp_customize->add_panel( 'fashion_accessories_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'fashion-accessories' ),
	    'description' => __( 'Description of what this panel does.', 'fashion-accessories' ),
	) );

	//TP Genral Option
	$wp_customize->add_section('fashion_accessories_tp_general_settings',array(
        'title' => __('TP General Option', 'fashion-accessories'),
        'priority' => 1,
        'panel' => 'fashion_accessories_panel_id'
    ) );
 	$wp_customize->add_setting('fashion_accessories_tp_body_layout_settings',array(
		'default' => 'Full',
		'sanitize_callback' => 'fashion_accessories_sanitize_choices'
	));

 	$wp_customize->add_control('fashion_accessories_tp_body_layout_settings',array(
		'type' => 'radio',
		'label'     => __('Body Layout Setting', 'fashion-accessories'),
		'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'fashion-accessories'),
		'section' => 'fashion_accessories_tp_general_settings',
		'choices' => array(
		'Full' => __('Full','fashion-accessories'),
		'Container' => __('Container','fashion-accessories'),
		'Container Fluid' => __('Container Fluid','fashion-accessories')
		),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('fashion_accessories_sidebar_post_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'fashion_accessories_sanitize_choices'
	));
	$wp_customize->add_control('fashion_accessories_sidebar_post_layout',array(
     'type' => 'radio',
     'label'     => __('Post Sidebar Position', 'fashion-accessories'),
     'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'fashion-accessories'),
     'section' => 'fashion_accessories_tp_general_settings',
     'choices' => array(
         'full' => __('Full','fashion-accessories'),
         'left' => __('Left','fashion-accessories'),
         'right' => __('Right','fashion-accessories'),
         'three-column' => __('Three Columns','fashion-accessories'),
         'four-column' => __('Four Columns','fashion-accessories'),
         'grid' => __('Grid Layout','fashion-accessories')
     ),
	) );

	// Add Settings and Controls for single post sidebar Layout
	$wp_customize->add_setting('fashion_accessories_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'fashion_accessories_sanitize_choices'
	));
	$wp_customize->add_control('fashion_accessories_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'fashion-accessories'),
        'description'   => __('This option work for single blog page', 'fashion-accessories'),
        'section' => 'fashion_accessories_tp_general_settings',
        'choices' => array(
            'full' => __('Full','fashion-accessories'),
            'left' => __('Left','fashion-accessories'),
            'right' => __('Right','fashion-accessories'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('fashion_accessories_sidebar_page_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'fashion_accessories_sanitize_choices'
	));
	$wp_customize->add_control('fashion_accessories_sidebar_page_layout',array(
     'type' => 'radio',
     'label'     => __('Page Sidebar Position', 'fashion-accessories'),
     'description'   => __('This option work for pages.', 'fashion-accessories'),
     'section' => 'fashion_accessories_tp_general_settings',
     'choices' => array(
         'full' => __('Full','fashion-accessories'),
         'left' => __('Left','fashion-accessories'),
         'right' => __('Right','fashion-accessories')
     ),
	) );
	//tp typography option
	$fashion_accessories_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('fashion_accessories_typography_option',array(
		'title'         => __('TP Typography Option', 'fashion-accessories'),
		'priority' => 1,
		'panel' => 'fashion_accessories_panel_id'
   	));

   	$wp_customize->add_setting('fashion_accessories_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'fashion_accessories_sanitize_choices',
	));
	$wp_customize->add_control(	'fashion_accessories_heading_font_family', array(
		'section' => 'fashion_accessories_typography_option',
		'label'   => __('heading Fonts', 'fashion-accessories'),
		'type'    => 'select',
		'choices' => $fashion_accessories_font_array,
	));

	$wp_customize->add_setting('fashion_accessories_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'fashion_accessories_sanitize_choices',
	));
	$wp_customize->add_control(	'fashion_accessories_body_font_family', array(
		'section' => 'fashion_accessories_typography_option',
		'label'   => __('Body Fonts', 'fashion-accessories'),
		'type'    => 'select',
		'choices' => $fashion_accessories_font_array,
	));

	//TP Color Option
	$wp_customize->add_section('fashion_accessories_color_option',array(
     'title'         => __('TP Color Option', 'fashion-accessories'),
     'priority' => 1,
     'panel' => 'fashion_accessories_panel_id'
    ) );
    
	$wp_customize->add_setting( 'fashion_accessories_tp_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fashion_accessories_tp_color_option', array(
			'label'     => __('Theme First Color', 'fashion-accessories'),
	    'description' => __('It will change the complete theme color in one click.', 'fashion-accessories'),
	    'section' => 'fashion_accessories_color_option',
	    'settings' => 'fashion_accessories_tp_color_option',
  	)));

	//TP Preloader Option
	$wp_customize->add_section('fashion_accessories_prelaoder_option',array(
		'title'         => __('TP Preloader Option', 'fashion-accessories'),
		'priority' => 1,
		'panel' => 'fashion_accessories_panel_id'
	) );
	$wp_customize->add_setting( 'fashion_accessories_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'fashion-accessories' ),
		'section'     => 'fashion_accessories_prelaoder_option',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_preloader_show_hide',
	) ) );
	$wp_customize->add_setting( 'fashion_accessories_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fashion_accessories_tp_preloader_color1_option', array(
			'label'     => __('Preloader First Ring Color', 'fashion-accessories'),
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'fashion-accessories'),
	    'section' => 'fashion_accessories_prelaoder_option',
	    'settings' => 'fashion_accessories_tp_preloader_color1_option',
  	)));
  	$wp_customize->add_setting( 'fashion_accessories_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fashion_accessories_tp_preloader_color2_option', array(
			'label'     => __('Preloader Second Ring Color', 'fashion-accessories'),
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'fashion-accessories'),
	    'section' => 'fashion_accessories_prelaoder_option',
	    'settings' => 'fashion_accessories_tp_preloader_color2_option',
  	)));
  	$wp_customize->add_setting( 'fashion_accessories_tp_preloader_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fashion_accessories_tp_preloader_bg_color_option', array(
			'label'     => __('Preloader Background Color', 'fashion-accessories'),
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'fashion-accessories'),
	    'section' => 'fashion_accessories_prelaoder_option',
	    'settings' => 'fashion_accessories_tp_preloader_bg_color_option',
  	)));

	//TP Blog Option
	$wp_customize->add_section('fashion_accessories_blog_option',array(
		'title' => __('TP Blog Option', 'fashion-accessories'),
		'priority' => 1,
		'panel' => 'fashion_accessories_panel_id'
	) );

	$wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment', 'category'),
        'sanitize_callback' => 'fashion_accessories_sanitize_sortable',
    ));
    $wp_customize->add_control(new Fashion_Accessories_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'fashion-accessories'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'fashion-accessories') ,
        'section' => 'fashion_accessories_blog_option',
        'choices' => array(
            'date' => __('date', 'fashion-accessories') ,
            'author' => __('author', 'fashion-accessories') ,
            'comment' => __('comment', 'fashion-accessories') ,
            'category' => __('category', 'fashion-accessories') ,
        ) ,
    )));

    $wp_customize->add_setting( 'fashion_accessories_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'fashion_accessories_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'fashion_accessories_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','fashion-accessories' ),
		'section'     => 'fashion_accessories_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('fashion_accessories_read_more_text',array(
		'default'=> __('Read More','fashion-accessories'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fashion_accessories_read_more_text',array(
		'label'	=> __('Edit Button Text','fashion-accessories'),
		'section'=> 'fashion_accessories_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('fashion_accessories_post_image_round', array(
	  'default' => '0',
      'sanitize_callback' => 'fashion_accessories_sanitize_number_range',
	));
	$wp_customize->add_control(new Fashion_Accessories_Range_Slider($wp_customize, 'fashion_accessories_post_image_round', array(
       'section' => 'fashion_accessories_blog_option',
      'label' => esc_html__('Edit Post Image Border Radius', 'fashion-accessories'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 180,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('fashion_accessories_post_image_width', array(
	  'default' => '',
      'sanitize_callback' => 'fashion_accessories_sanitize_number_range',
	));
	$wp_customize->add_control(new Fashion_Accessories_Range_Slider($wp_customize, 'fashion_accessories_post_image_width', array(
       'section' => 'fashion_accessories_blog_option',
      'label' => esc_html__('Edit Post Image Width', 'fashion-accessories'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 367,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('fashion_accessories_post_image_length', array(
	  'default' => '',
      'sanitize_callback' => 'fashion_accessories_sanitize_number_range',
	));
	$wp_customize->add_control(new Fashion_Accessories_Range_Slider($wp_customize, 'fashion_accessories_post_image_length', array(
       'section' => 'fashion_accessories_blog_option',
      'label' => esc_html__('Edit Post Image height', 'fashion-accessories'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 900,
        'step' => 1
    )
	)));

	$wp_customize->add_setting( 'fashion_accessories_remove_read_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_remove_read_button', array(
		'label'       => esc_html__( 'Show / Hide Read More Button', 'fashion-accessories' ),
		'section'     => 'fashion_accessories_blog_option',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_remove_read_button',
	) ) );

    $wp_customize->selective_refresh->add_partial( 'fashion_accessories_remove_read_button', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'Fashion_Accessories_Customize_partial_fashion_accessories_remove_read_button',
	 ));

	 $wp_customize->add_setting( 'fashion_accessories_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_remove_tags', array(
		'label'       => esc_html__( 'Show / Hide Tags Option', 'fashion-accessories' ),
		'section'     => 'fashion_accessories_blog_option',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_remove_tags',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'fashion_accessories_remove_tags', array(
		'selector' => '.box-content a[rel="tag"]',
		'render_callback' => 'Fashion_Accessories_Customize_partial_fashion_accessories_remove_tags',
	));
	$wp_customize->add_setting( 'fashion_accessories_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'fashion-accessories' ),
		'section'     => 'fashion_accessories_blog_option',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_remove_category',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'fashion_accessories_remove_category', array(
		'selector' => '.box-content a[rel="category"]',
		'render_callback' => 'Fashion_Accessories_Customize_partial_fashion_accessories_remove_category',
	));
	$wp_customize->add_setting( 'fashion_accessories_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'fashion-accessories' ),
	 'section'     => 'fashion_accessories_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'fashion_accessories_remove_comment',
	) ) );

	$wp_customize->add_setting( 'fashion_accessories_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'fashion-accessories' ),
	 'section'     => 'fashion_accessories_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'fashion_accessories_remove_related_post',
	) ) );
	$wp_customize->add_setting( 'fashion_accessories_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'fashion_accessories_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'fashion_accessories_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','fashion-accessories' ),
		'section'     => 'fashion_accessories_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );

	 //MENU TYPOGRAPHY
	$wp_customize->add_section( 'fashion_accessories_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'fashion-accessories' ),
    	'priority' => 2,
		'panel' => 'fashion_accessories_panel_id'
	) );
	$wp_customize->add_setting('fashion_accessories_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'fashion_accessories_sanitize_choices',
	));
	$wp_customize->add_control(	'fashion_accessories_menu_font_family', array(
		'section' => 'fashion_accessories_menu_typography',
		'label'   => __('Menu Fonts', 'fashion-accessories'),
		'type'    => 'select',
		'choices' => $fashion_accessories_font_array,
	));

	$wp_customize->add_setting('fashion_accessories_menu_text_tranform',array(
		'default' => '',
		'sanitize_callback' => 'fashion_accessories_sanitize_choices'
 	));
 	$wp_customize->add_control('fashion_accessories_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','fashion-accessories'),
		'section' => 'fashion_accessories_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','fashion-accessories'),
		   'Lowercase' => __('Lowercase','fashion-accessories'),
		   'Capitalize' => __('Capitalize','fashion-accessories'),
		),
	) );
	
	$wp_customize->add_setting('fashion_accessories_menu_font_size', array(
	  'default' => '',
      'sanitize_callback' => 'fashion_accessories_sanitize_number_range',
	));
	$wp_customize->add_control(new Fashion_Accessories_Range_Slider($wp_customize, 'fashion_accessories_menu_font_size', array(
       'section' => 'fashion_accessories_menu_typography',
      'label' => esc_html__('Font Size', 'fashion-accessories'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 20,
        'step' => 1
    )
	)));

	// Top bar Section
	$wp_customize->add_section( 'fashion_accessories_topbar', array(
    	'title'      => __( 'Header Details', 'fashion-accessories' ),
    	'description' => __( 'Add your contact details', 'fashion-accessories' ),
		'panel' => 'fashion_accessories_panel_id',
      'priority' => 2,
	) );

	$wp_customize->add_setting('fashion_accessories_discount_text_top',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fashion_accessories_discount_text_top',array(
		'label'	=> __('Add Discount Text','fashion-accessories'),
		'section'=> 'fashion_accessories_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('fashion_accessories_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'fashion_accessories_sanitize_phone_number'
	));
	$wp_customize->add_control('fashion_accessories_call',array(
		'label'	=> __('Add Phone Number','fashion-accessories'),
		'section'=> 'fashion_accessories_topbar',
		'type'=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'fashion_accessories_slider_section' , array(
    	'title'      => __( 'Banner Section', 'fashion-accessories' ),
    	'priority' => 2,
		'panel' => 'fashion_accessories_panel_id'
	) );

	$wp_customize->add_setting( 'fashion_accessories_slider_arrows', array(
		'default'           => 'true',
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_slider_arrows', array(
		'label'       => esc_html__( 'Show / Hide Banner', 'fashion-accessories' ),
		'section'     => 'fashion_accessories_slider_section',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_slider_arrows',
	) ) );

	$wp_customize->add_setting( 'fashion_accessories_slider_page', array(
		'default'           => '',
		'sanitize_callback' => 'fashion_accessories_sanitize_dropdown_pages'
	) );

	$wp_customize->add_control( 'fashion_accessories_slider_page', array(
		'label'    => __( 'Select Banner Page', 'fashion-accessories' ),
		'section'  => 'fashion_accessories_slider_section',
		'type'     => 'dropdown-pages'
	) );

	$wp_customize->add_setting('fashion_accessories_slider_short_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fashion_accessories_slider_short_heading',array(
		'label'	=> __('Add Banner short Heading','fashion-accessories'),
		'section'=> 'fashion_accessories_slider_section',
		'type'=> 'text'
	));
	
	$wp_customize->add_setting('fashion_accessories_banner_slider_first', array(
	    'default'           => '',
	    'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'fashion_accessories_banner_slider_first', array(
	    'label'   => __('Add Banner Image 1', 'fashion-accessories'),
	    'section' => 'fashion_accessories_slider_section',
	)));

	$wp_customize->add_setting('fashion_accessories_banner_slider_sec', array(
	    'default'           => '',
	    'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'fashion_accessories_banner_slider_sec', array(
	    'label'   => __('Add Banner Image 2', 'fashion-accessories'),
	    'section' => 'fashion_accessories_slider_section',
	)));

	$wp_customize->add_setting('fashion_accessories_banner_slider_third', array(
	    'default'           => '',
	    'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'fashion_accessories_banner_slider_third', array(
	    'label'   => __('Add Banner Image 3', 'fashion-accessories'),
	    'section' => 'fashion_accessories_slider_section',
	)));
	
	// products Section
	$wp_customize->add_section('fashion_accessories_our_products_section',array(
	    'title' => __('Product Categories Section','fashion-accessories'),
	    'panel' => 'fashion_accessories_panel_id',
	    'priority' => 6,
	));

	$wp_customize->add_setting( 'fashion_accessories_project_show_hide', array(
	    'default'           => '1',
	    'transport'         => 'refresh',
	    'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	));
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_project_show_hide', array(
	    'label'       => esc_html__( 'Show / Hide section', 'fashion-accessories' ),
	    'section'     => 'fashion_accessories_our_products_section',
	    'type'        => 'toggle',
	    'settings'    => 'fashion_accessories_project_show_hide',
	)) );

	$wp_customize->add_setting('fashion_accessories_projetcs_main_heading',array(
	    'default'=> '',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('fashion_accessories_projetcs_main_heading',array(
	    'label' => esc_html__('Section Heading','fashion-accessories'),
	    'section'=> 'fashion_accessories_our_products_section',
	    'type'=> 'text'
	));

	$wp_customize->add_setting('fashion_accessories_projetcs_number',array(
	    'default'=> '8',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('fashion_accessories_projetcs_number',array(
	    'label' => esc_html__('No of Tabs to show','fashion-accessories'),
	    'section'=> 'fashion_accessories_our_products_section',
	    'type' => 'number',
	    'input_attrs' => array(
	        'step'  => 1,
	        'min'  => 0,
	        'max'  => 50,
	    ),
	));

	$fashion_accessories_featured_post = get_theme_mod('fashion_accessories_projetcs_number',8);

	for ( $j = 1; $j <= $fashion_accessories_featured_post; $j++ ) {

	    $wp_customize->add_setting('fashion_accessories_projetcs_text'.$j,array(
	        'default'=> '',
	        'sanitize_callback' => 'sanitize_text_field'
	    ));
	    $wp_customize->add_control('fashion_accessories_projetcs_text'.$j,array(
	        'label' => esc_html__('Products Category Name ','fashion-accessories').$j,
	        'section'=> 'fashion_accessories_our_products_section',
	        'type'=> 'text'
	    ));

	    // Fetch WooCommerce Product Categories
	    $product_categories = get_terms( array(
	        'taxonomy' => 'product_cat',
	        'hide_empty' => false,
	    ));

		$product_cat_options = array();
		$product_cat_options[''] = 'Select';

		foreach ($product_categories as $product_category) {
		    if (is_array($product_category) && isset($product_category['slug'], $product_category['name'])) {
		        $product_cat_options[$product_category['slug']] = $product_category['name'];
		    } elseif (is_object($product_category) && isset($product_category->slug, $product_category->name)) {
		        $product_cat_options[$product_category->slug] = $product_category->name;
		    } else {
		        print_r($product_category, true);
		    }
		}

	    $wp_customize->add_setting('fashion_accessories_projetcs_category'.$j, array(
	        'default'   => 'select',
	        'sanitize_callback' => 'fashion_accessories_sanitize_choices',
	    ));
	    $wp_customize->add_control('fashion_accessories_projetcs_category'.$j, array(
	        'type'    => 'select',
	        'choices' => $product_cat_options,
	        'label' => __('Select Product Category to display products ', 'fashion-accessories').$j,
	        'section' => 'fashion_accessories_our_products_section',
	    ));
	}

	$wp_customize->add_setting('fashion_accessories_product_section_btn_text1',array(
		'default'=> 'View All',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fashion_accessories_product_section_btn_text1',array(
		'label'	=> esc_html__('Add Button Text','fashion-accessories'),
		'section'=> 'fashion_accessories_our_products_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('fashion_accessories_product_section_btn_link1',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('fashion_accessories_product_section_btn_link1',array(
		'label'	=> esc_html__('Add Button link','fashion-accessories'),
		'section'=> 'fashion_accessories_our_products_section',
		'type'=> 'url'
	));

	//footer
	$wp_customize->add_section('fashion_accessories_footer_section',array(
		'title'	=> __('Footer Text','fashion-accessories'),
		'description'	=> __('Add copyright text.','fashion-accessories'),
		'panel' => 'fashion_accessories_panel_id',
		'priority' => 7,
	));
	$wp_customize->add_setting('fashion_accessories_footer_text',array(
		'default'	=> 'Fashion Accessories WordPress Theme By Themespride',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fashion_accessories_footer_text',array(
		'label'	=> __('Copyright Text','fashion-accessories'),
		'section'	=> 'fashion_accessories_footer_section',
		'type'		=> 'text'
	));

	//footer widget title font size
	$wp_customize->add_setting('fashion_accessories_footer_copyright_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'fashion_accessories_sanitize_number_absint'
	));
	$wp_customize->add_control('fashion_accessories_footer_copyright_font_size',array(
		'label'	=> __('Change Footer Copyright Font Size in PX','fashion-accessories'),
		'section'	=> 'fashion_accessories_footer_section',
	    'setting'	=> 'fashion_accessories_footer_copyright_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'fashion_accessories_footer_copyright_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fashion_accessories_footer_copyright_text_color', array(
			'label'     => __('Change Footer Copyright Text Color', 'fashion-accessories'),
	    'section' => 'fashion_accessories_footer_section',
	    'settings' => 'fashion_accessories_footer_copyright_text_color',
  	)));

  	$wp_customize->add_setting('fashion_accessories_footer_copyright_top_bottom_padding',array(
		'default'	=> '',
		'sanitize_callback'	=> 'fashion_accessories_sanitize_number_absint'
	));
	$wp_customize->add_control('fashion_accessories_footer_copyright_top_bottom_padding',array(
		'label'	=> __('Change Footer Copyright Padding in PX','fashion-accessories'),
		'section'	=> 'fashion_accessories_footer_section',
	    'setting'	=> 'fashion_accessories_footer_copyright_top_bottom_padding',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	// footer columns
	$wp_customize->add_setting('fashion_accessories_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'fashion_accessories_sanitize_number_absint'
	));
	$wp_customize->add_control('fashion_accessories_footer_columns',array(
		'label'	=> __('Footer Widget Columns','fashion-accessories'),
		'section'	=> 'fashion_accessories_footer_section',
		'setting'	=> 'fashion_accessories_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));
	$wp_customize->add_setting( 'fashion_accessories_tp_footer_bg_color_option', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fashion_accessories_tp_footer_bg_color_option', array(
			'label'     => __('Footer Widget Background Color', 'fashion-accessories'),
			'description' => __('It will change the complete footer widget backgorund color.', 'fashion-accessories'),
			'section' => 'fashion_accessories_footer_section',
			'settings' => 'fashion_accessories_tp_footer_bg_color_option',
	)));
	
	$wp_customize->add_setting('fashion_accessories_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'fashion_accessories_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','fashion-accessories'),
         'section' => 'fashion_accessories_footer_section'
	)));

	//footer widget title font size
	$wp_customize->add_setting('fashion_accessories_footer_widget_title_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'fashion_accessories_sanitize_number_absint'
	));
	$wp_customize->add_control('fashion_accessories_footer_widget_title_font_size',array(
		'label'	=> __('Change Footer Widget Title Font Size in PX','fashion-accessories'),
		'section'	=> 'fashion_accessories_footer_section',
	    'setting'	=> 'fashion_accessories_footer_widget_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'fashion_accessories_footer_widget_title_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fashion_accessories_footer_widget_title_color', array(
			'label'     => __('Change Footer Widget Title Color', 'fashion-accessories'),
	    'section' => 'fashion_accessories_footer_section',
	    'settings' => 'fashion_accessories_footer_widget_title_color',
  	)));

	$wp_customize->add_setting('fashion_accessories_return_to_header',array(
		 'default' => true,
		 'sanitize_callback'	=> 'fashion_accessories_sanitize_checkbox'
	));
	$wp_customize->add_control( new fashion_accessories_Toggle_Control( $wp_customize, 'fashion_accessories_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return To Header', 'fashion-accessories' ),
		'section'     => 'fashion_accessories_footer_section',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_return_to_header',
	) ) );

	$wp_customize->add_setting( 'fashion_accessories_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'fashion-accessories' ),
		'section'     => 'fashion_accessories_footer_section',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_return_to_header',
	) ) );
    $wp_customize->add_setting('fashion_accessories_scroll_top_icon',array(
	  'default'	=> 'fas fa-arrow-up',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fashion_Accessories_Icon_Changer(
	        $wp_customize,'fashion_accessories_scroll_top_icon',array(
		'label'	=> __('Scroll to top Icon','fashion-accessories'),
		'transport' => 'refresh',
		'section'	=> 'fashion_accessories_footer_section',
			'type'		=> 'icon'
	)));

    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('fashion_accessories_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'fashion_accessories_sanitize_choices'
	));
	$wp_customize->add_control('fashion_accessories_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'fashion-accessories'),
        'description'   => __('This option work for scroll to top', 'fashion-accessories'),
       'section' => 'fashion_accessories_footer_section',
       'choices' => array(
            'Right' => __('Right','fashion-accessories'),
            'Left' => __('Left','fashion-accessories'),
            'Center' => __('Center','fashion-accessories')
     ),
	) );
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'Fashion_Accessories_Customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'Fashion_Accessories_Customize_partial_blogdescription',
	) );

	//Mobile Respnsive
	$wp_customize->add_section('fashion_accessories_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'fashion-accessories'),
		'description' => __('Control will not function if the toggle in the main settings is off.', 'fashion-accessories'),
		'priority' => 8,
		'panel' => 'fashion_accessories_panel_id'
	) );
	$wp_customize->add_setting( 'fashion_accessories_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'fashion-accessories' ),
		'section'     => 'fashion_accessories_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_return_to_header_mob',
	) ) );
	$wp_customize->add_setting( 'fashion_accessories_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'fashion-accessories' ),
		'section'     => 'fashion_accessories_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_related_post_mob',
	) ) );

	//Site Identity
	$wp_customize->add_setting( 'fashion_accessories_site_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_site_title', array(
		'label'       => esc_html__( 'Show / Hide Site Title', 'fashion-accessories' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_site_title',
	) ) );

	$wp_customize->add_setting('fashion_accessories_site_title_font_size',array(
		'default'	=> 30,
		'sanitize_callback'	=> 'fashion_accessories_sanitize_number_absint'
	));
	$wp_customize->add_control('fashion_accessories_site_title_font_size',array(
		'label'	=> __('Site Title Font Size in PX','fashion-accessories'),
		'section'	=> 'title_tagline',
		'setting'	=> 'fashion_accessories_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 80,
		),
	));

	$wp_customize->add_setting( 'fashion_accessories_site_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fashion_accessories_site_tagline_color', array(
			'label'     => __('Change Site Title Color', 'fashion-accessories'),
	    'section' => 'title_tagline',
	    'settings' => 'fashion_accessories_site_tagline_color',
  	)));

	$wp_customize->add_setting( 'fashion_accessories_site_tagline', array(
	    'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_site_tagline', array(
		'label'       => esc_html__( 'Show / Hide Site Tagline', 'fashion-accessories' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_site_tagline',
	) ) );

	// logo site tagline size
	$wp_customize->add_setting('fashion_accessories_site_tagline_font_size',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'fashion_accessories_sanitize_number_absint'
	));
	$wp_customize->add_control('fashion_accessories_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','fashion-accessories'),
		'section'	=> 'title_tagline',
	    'setting'	=> 'fashion_accessories_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'fashion_accessories_logo_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fashion_accessories_logo_tagline_color', array(
			'label'     => __('Change Site Tagline Color', 'fashion-accessories'),
	    'section' => 'title_tagline',
	    'settings' => 'fashion_accessories_logo_tagline_color',
  	)));

    $wp_customize->add_setting('fashion_accessories_logo_width',array(
		'default' => 50,
		'sanitize_callback'	=> 'fashion_accessories_sanitize_number_absint'
	));
	$wp_customize->add_control('fashion_accessories_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','fashion-accessories'),
		'section'	=> 'title_tagline',
		'type'		=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 150,
		),
	));

	//Woo Coomerce
	$wp_customize->add_setting('fashion_accessories_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'fashion_accessories_sanitize_number_absint'
	));
	$wp_customize->add_control('fashion_accessories_per_columns',array(
		'label'	=> __('Product Per Row','fashion-accessories'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
	$wp_customize->add_setting('fashion_accessories_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'fashion_accessories_sanitize_number_absint'
	));
	$wp_customize->add_control('fashion_accessories_product_per_page',array(
		'label'	=> __('Product Per Page','fashion-accessories'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
   	$wp_customize->add_setting( 'fashion_accessories_product_sidebar', array(
		 'default'           => true,
		 'transport'         => 'refresh',
		 'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Shop Page Sidebar', 'fashion-accessories' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_product_sidebar',
	) ) );

	$wp_customize->add_setting( 'fashion_accessories_single_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product Page Sidebar', 'fashion-accessories' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_single_product_sidebar',
	) ) );
	$wp_customize->add_setting( 'fashion_accessories_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fashion_accessories_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fashion_Accessories_Toggle_Control( $wp_customize, 'fashion_accessories_related_product', array(
		'label'       => esc_html__( 'Show / Hide related product', 'fashion-accessories' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'fashion_accessories_related_product',
	) ) );
	
	//add page template setting pannel
	$wp_customize->add_panel( 'fashion_accessories_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Page Template Settings', 'fashion-accessories' ),
	    'description' => __( 'Description of what this panel does.', 'fashion-accessories' ),
	) );

	// 404 PAGE
	$wp_customize->add_section('fashion_accessories_404_page_section',array(
		'title'         => __('404 Page', 'fashion-accessories'),
		'description'   => 'Here you can customize 404 Page content.',
		'panel' => 'fashion_accessories_page_panel_id'
	) );

	$wp_customize->add_setting('fashion_accessories_edit_404_title',array(
		'default'=> __('Oops! That page cant be found.','fashion-accessories'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('fashion_accessories_edit_404_title',array(
		'label'	=> __('Edit Title','fashion-accessories'),
		'section'=> 'fashion_accessories_404_page_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('fashion_accessories_edit_404_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','fashion-accessories'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fashion_accessories_edit_404_text',array(
		'label'	=> __('Edit Text','fashion-accessories'),
		'section'=> 'fashion_accessories_404_page_section',
		'type'=> 'text'
	));

	// Search Results
	$wp_customize->add_section('fashion_accessories_no_result_section',array(
		'title'         => __('Search Results', 'fashion-accessories'),
		'description'   => 'Here you can customize Search Result content.',
		'panel' => 'fashion_accessories_page_panel_id'
	) );

	$wp_customize->add_setting('fashion_accessories_edit_no_result_title',array(
		'default'=> __('Nothing Found','fashion-accessories'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('fashion_accessories_edit_no_result_title',array(
		'label'	=> __('Edit Title','fashion-accessories'),
		'section'=> 'fashion_accessories_no_result_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('fashion_accessories_edit_no_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','fashion-accessories'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fashion_accessories_edit_no_result_text',array(
		'label'	=> __('Edit Text','fashion-accessories'),
		'section'=> 'fashion_accessories_no_result_section',
		'type'=> 'text'
	));

}
add_action( 'customize_register', 'Fashion_Accessories_Customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Fashion Accessories 1.0
 * @see Fashion_Accessories_Customize_register()
 *
 * @return void
 */
function Fashion_Accessories_Customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Fashion Accessories 1.0
 * @see Fashion_Accessories_Customize_register()
 *
 * @return void
 */
function Fashion_Accessories_Customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'FASHION_ACCESSORIES_PRO_THEME_NAME' ) ) {
	define( 'FASHION_ACCESSORIES_PRO_THEME_NAME', esc_html__( 'Fashion Accessories Pro', 'fashion-accessories' ));
}
if ( ! defined( 'FASHION_ACCESSORIES_PRO_THEME_URL' ) ) {
	define( 'FASHION_ACCESSORIES_PRO_THEME_URL', esc_url('https://www.themespride.com/products/fashion-accessories-wordpress-theme'));
}
if ( ! defined( 'FASHION_ACCESSORIES_DEMO_TITLE' ) ) {
	define( 'FASHION_ACCESSORIES_DEMO_TITLE', esc_html__( 'Click to View Site', 'fashion-accessories' ));
}
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Fashion_Accessories_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Fashion_Accessories_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Fashion_Accessories_Customize_Section_Pro(
				$manager,
				'fashion_accessories_section_pro',
				array(
					'priority'   => 9,
					'title'    => FASHION_ACCESSORIES_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'fashion-accessories' ),
					'pro_url'  => esc_url( FASHION_ACCESSORIES_PRO_THEME_URL, 'fashion-accessories' ),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new fashion_accessories_Customize_Section_Pro(
				$manager,
				'fashion_accessories_section_pro_demo',
				array(
					'priority'   => 9,
					'title'    => FASHION_ACCESSORIES_DEMO_TITLE,
					'pro_text' => esc_html__( 'View Site', 'fashion-accessories' ),
					'pro_url'  => esc_url( home_url() ),
				)
			)
		);

	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'fashion-accessories-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'fashion-accessories-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Fashion_Accessories_Customize::get_instance();