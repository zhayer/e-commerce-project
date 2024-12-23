<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'the_home_decor_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'the-home-decor' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'the-home-decor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'the_home_decor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'the-home-decor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'the-home-decor' ),
			'off' => esc_html__( 'Disable', 'the-home-decor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'the_home_decor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'the-home-decor' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'the-home-decor' ),
			'off' => esc_html__( 'Disable', 'the-home-decor' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'the_home_decor_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'the-home-decor' ),
	) );

	Kirki::add_section( 'the_home_decor_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'the-home-decor' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_all_headings_typography',
		'section'     => 'the_home_decor_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'the-home-decor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'the_home_decor_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'the-home-decor' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'the-home-decor' ),
		'section'     => 'the_home_decor_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_body_content_typography',
		'section'     => 'the_home_decor_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'the-home-decor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'the_home_decor_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'the-home-decor' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'the-home-decor' ),
		'section'     => 'the_home_decor_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'the_home_decor_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'the-home-decor' ),
	) );

	// Additional Settings

	Kirki::add_section( 'the_home_decor_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'the-home-decor' ),
	    'panel'          => 'the_home_decor_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'the_home_decor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'the-home-decor' ),
		'section'     => 'the_home_decor_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'the_home_decor_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'the-home-decor' ),
		'section'     => 'the_home_decor_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'the-home-decor' ),
			'Center' => esc_html__( 'Center', 'the-home-decor' ),
			'Right'  => esc_html__( 'Right', 'the-home-decor' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'the_home_decor_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'the-home-decor' ),
		'section'  => 'the_home_decor_additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_the_home_decor',
		'label'       => esc_html__( 'Menus Text Transform', 'the-home-decor' ),
		'section'     => 'the_home_decor_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'the-home-decor' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'the-home-decor' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'the-home-decor' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'the-home-decor' ),

		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'the_home_decor_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'the-home-decor' ),
		'section'     => 'the_home_decor_additional_settings',
		'default' => 'Zoom Out',
		'placeholder' => esc_html__( 'Choose an option', 'the-home-decor' ),
		'choices'     => [
			'Zoomout' => __('Zoom Out','the-home-decor'),
            'Zoominn' => __('Zoom Inn','the-home-decor'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'the_home_decor_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'the-home-decor' ),
		'section'     => 'the_home_decor_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'the_home_decor_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'the-home-decor' ),
		'section'     => 'the_home_decor_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'the_home_decor_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'the-home-decor' ),
		'section'     => 'the_home_decor_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'the_home_decor_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'the-home-decor' ),
		'section'     => 'the_home_decor_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'the-home-decor' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','the-home-decor'),
            'Right Sidebar' => __('Right Sidebar','the-home-decor'),
            'One Column' => __('One Column','the-home-decor')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'the_home_decor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'the-home-decor' ),
		'panel'          => 'the_home_decor_panel_id',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'the_home_decor_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'the-home-decor' ),
		'section'     => 'the_home_decor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'the_home_decor_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'the-home-decor' ),
		'section'     => 'the_home_decor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'the_home_decor_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'the-home-decor' ),
		'section'     => 'the_home_decor_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
		[
			'settings' => 'the_home_decor_per_columns',
			'label'    => esc_html__( 'Product Per Row', 'the-home-decor' ),
			'section'  => 'the_home_decor_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'the_home_decor_product_per_page',
			'label'    => esc_html__( 'Product Per Page', 'the-home-decor' ),
			'section'  => 'the_home_decor_woocommerce_settings',
			'default'  => 9,
			'choices'  => [
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'the-home-decor' ),
		'section'  => 'the_home_decor_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'the-home-decor' ),
		'section'  => 'the_home_decor_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'the_home_decor_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'the-home-decor' ),
		'section'     => 'the_home_decor_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'the-home-decor' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','the-home-decor'),
            'Right Sidebar' => __('Right Sidebar','the-home-decor')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'the_home_decor_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'the-home-decor' ),
		'section'     => 'the_home_decor_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'the-home-decor' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','the-home-decor'),
            'Right Sidebar' => __('Right Sidebar','the-home-decor')
		],
	] );

	new \Kirki\Field\Radio_Buttonset( [
		'settings'    => 'the_home_decor_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'the-home-decor' ),
		'section'     => 'the_home_decor_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'the-home-decor' ),
			'Center' => esc_html__( 'Center', 'the-home-decor' ),
			'Right'  => esc_html__( 'Right', 'the-home-decor' ),
		],
	]
	);

}

	// POST SECTION

	Kirki::add_section( 'the_home_decor_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'the-home-decor' ),
	    'panel'          => 'the_home_decor_panel_id',
	    'priority'       => 160,
	) );

	new \Kirki\Field\Sortable(
	[
		'settings' => 'the_home_decor_archive_element_sortable',
		'label'    => __( 'Archive Post Page element Reordering', 'the-home-decor' ),
		'section'  => 'the_home_decor_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'the-home-decor' ),
			'option2' => esc_html__( 'Post Title', 'the-home-decor' ),
			'option3' => esc_html__( 'Post Content', 'the-home-decor' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'the_home_decor_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'the-home-decor' ),
		'section'     => 'the_home_decor_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'the_home_decor_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'the-home-decor' ),
		'section'     => 'the_home_decor_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'the_home_decor_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'the-home-decor' ),
		'section'     => 'the_home_decor_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'the-home-decor' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','the-home-decor'),
            'Right Sidebar' => __('Right Sidebar','the-home-decor'),
            'Three Column' => __('Three Column','the-home-decor'),
            'Four Column' => __('Four Column','the-home-decor'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','the-home-decor'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','the-home-decor'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','the-home-decor')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'the_home_decor_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'the-home-decor' ),
		'section'     => 'the_home_decor_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'the-home-decor' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','the-home-decor'),
            'Right Sidebar' => __('Right Sidebar','the-home-decor'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'the_home_decor_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'the-home-decor' ),
		'section'     => 'the_home_decor_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'the-home-decor' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','the-home-decor'),
            'Right Sidebar' => __('Right Sidebar','the-home-decor'),
            'Three Column' => __('Three Column','the-home-decor'),
            'Four Column' => __('Four Column','the-home-decor'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','the-home-decor'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','the-home-decor'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','the-home-decor')
		],
	] );

	Kirki::add_field( 'the_home_decor_config', [
		'type'        => 'select',
		'settings'    => 'the_home_decor_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'the-home-decor' ),
		'section'     => 'the_home_decor_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'the-home-decor' ),
				'2' => __( '2 Column', 'the-home-decor' ),
			],
	] );

	// Breadcrumb
	Kirki::add_section( 'the_home_decor_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'the-home-decor' ),
	    'panel'          => 'the_home_decor_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_enable_breadcrumb_heading',
		'section'     => 'the_home_decor_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'the-home-decor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'the_home_decor_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'the-home-decor' ),
		'section'     => 'the_home_decor_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'the-home-decor' ),
			'off' => esc_html__( 'Disable', 'the-home-decor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'the_home_decor_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'the-home-decor' ),
        'section'  => 'the_home_decor_bradcrumb',
    ] );

	// HEADER SECTION

	Kirki::add_section( 'the_home_decor_header_section', array(
        'title'          => esc_html__( 'Header Settings', 'the-home-decor' ),
        'panel'          => 'the_home_decor_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_header_button_heading_button',
		'section'     => 'the_home_decor_header_section',
		'priority'    => 10,
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Newsletter Button',  'the-home-decor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Button Text',  'the-home-decor' ),
		'type'     => 'text',
		'settings' => 'the_home_decor_header_newsletter_button_text',
		'section'  => 'the_home_decor_header_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'Button URL', 'the-home-decor' ),
		'settings' => 'the_home_decor_header_newsletter_button_url',
		'section'  => 'the_home_decor_header_section',
		'default'  => '',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_header_inner_text_heading',
		'section'     => 'the_home_decor_header_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Text',  'the-home-decor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'the_home_decor_header_inner_text' ,
        'section'  => 'the_home_decor_header_section',
    ] );

	

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_header_button_heading',
		'section'     => 'the_home_decor_header_section',
		'priority'    => 12,
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Wishlist Button Url',  'the-home-decor' ) . '</h3>',
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'Wishlist URL', 'the-home-decor' ),
		'settings' => 'the_home_decor_wislist_url',
		'section'  => 'the_home_decor_header_section',
		'default'  => '',
		'priority' => 12,
	] );

	// SLIDER SECTION

	Kirki::add_section( 'the_home_decor_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'the-home-decor' ),
        'panel'          => 'the_home_decor_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_enable_heading_2',
		'section'     => 'the_home_decor_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'the-home-decor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'the_home_decor_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'the-home-decor' ),
		'section'     => 'the_home_decor_blog_slide_section',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'the-home-decor' ),
			'off' => esc_html__( 'Disable', 'the-home-decor' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_slider_heading',
		'section'     => 'the_home_decor_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'the-home-decor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'the_home_decor_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'the-home-decor' ),
		'section'     => 'the_home_decor_blog_slide_section',
		'default'     => 0,
		'description' => esc_html__( 'After selecting no of slides publish them. Now you need to refresh the site After refreshing you will see further settings', 'the-home-decor' ),
		'choices'     => [
			'min'  => 0,
			'max'  => 3,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'the_home_decor_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'the-home-decor' ),
		'section'     => 'the_home_decor_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'the-home-decor' ),
		'priority'    => 10,
		'choices'     => the_home_decor_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Short Heading',  'the-home-decor' ),
		'type'     => 'text',
		'settings' => 'the_home_decor_slider_short_heading',
		'section'  => 'the_home_decor_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_phone_slider_text',
		'section'     => 'the_home_decor_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Text',  'the-home-decor' ) . '</h3>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Slider Text',  'the-home-decor' ),
		'type'     => 'text',
		'settings' => 'the_home_decor_slider_bottom_text',
		'section'  => 'the_home_decor_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_email_address_heading',
		'section'     => 'the_home_decor_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address',  'the-home-decor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'the_home_decor_email_id' ,
        'section'  => 'the_home_decor_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_phone_number_heading',
		'section'     => 'the_home_decor_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number',  'the-home-decor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'the_home_decor_phone_number' ,
        'section'  => 'the_home_decor_blog_slide_section',
    ] );

	//Categories SECTION

	Kirki::add_section( 'the_home_decor_testimonial_section', array(
	    'title'          => esc_html__( 'Top Categories Settings', 'the-home-decor' ),
	    'panel'          => 'the_home_decor_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_enable_heading',
		'section'     => 'the_home_decor_testimonial_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Top Categories',  'the-home-decor' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'the_home_decor_testimonial_section_enable',
		'section'     => 'the_home_decor_testimonial_section',
		'default'     => true,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'the-home-decor' ),
			'off' => esc_html__( 'Disable',  'the-home-decor' ),
		],
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Top Categories Heading',  'the-home-decor' ),
		'type'     => 'text',
		'settings' => 'the_home_decor_categories_section_heading',
		'section'  => 'the_home_decor_testimonial_section',
    ] );

	// FOOTER SECTION

	Kirki::add_section( 'the_home_decor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'the-home-decor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'the-home-decor' ),
        'panel'          => 'the_home_decor_panel_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_footer_enable_heading',
		'section'     => 'the_home_decor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'the-home-decor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'the_home_decor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'the-home-decor' ),
		'section'     => 'the_home_decor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'the-home-decor' ),
			'off' => esc_html__( 'Disable', 'the-home-decor' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'the_home_decor_footer_text_heading',
		'section'     => 'the_home_decor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'the-home-decor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'the_home_decor_footer_text',
		'section'  => 'the_home_decor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'the_home_decor_footer_text_heading_2',
	'section'     => 'the_home_decor_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'the-home-decor' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'the_home_decor_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'the-home-decor' ),
		'section'     => 'the_home_decor_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'the-home-decor' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'the-home-decor' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'the-home-decor' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'the-home-decor' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'the_home_decor_footer_text_heading_1',
	'section'     => 'the_home_decor_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'the-home-decor' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'the_home_decor_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'the-home-decor' ),
		'section'     => 'the_home_decor_footer_section',
		'default'     => '',
	] );
}