<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function the_home_decor_enqueue_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

	wp_enqueue_style(
		'google-fonts-playfair-display',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style(
		'google-fonts-inter',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap' ),
		array(),
		'1.0'
	);
	
}
add_action( 'wp_enqueue_scripts', 'the_home_decor_enqueue_google_fonts' );

if (!function_exists('the_home_decor_enqueue_scripts')) {

	function the_home_decor_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
			get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('the-home-decor-style', get_stylesheet_uri(), array() );

		wp_enqueue_style('dashicons');

		wp_style_add_data('the-home-decor-style', 'rtl', 'replace');

		wp_enqueue_style(
			'the-home-decor-media-css',
			get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'the-home-decor-woocommerce-css',
			get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'the-home-decor-navigation',
			get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'bootstrap-js',get_template_directory_uri() . '/js/bootstrap.js',
			array('jquery'),
			'5.1.3',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',
			get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'the-home-decor-script',
			get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$the_home_decor_css = '';

		if ( get_header_image() ) :

			$the_home_decor_css .=  '
				.header-outter, .page-template-frontpage .header-outter{
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'the-home-decor-style', $the_home_decor_css );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'the-home-decor-style',$the_home_decor_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'the_home_decor_enqueue_scripts' );
}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('the_home_decor_after_setup_theme')) {

	function the_home_decor_after_setup_theme() {

		load_theme_textdomain( 'the-home-decor', get_stylesheet_directory() . '/languages' );
		if ( ! isset( $the_home_decor_content_width ) ) $the_home_decor_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'the-home-decor' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support( 'wp-block-styles' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'ffffff'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'header-text' => false,
			'width' => 1920,
			'height' => 100
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'the_home_decor_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/theme-breadcrumb.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
require get_template_directory() .'/core/includes/main.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue theme logo style */
/*-----------------------------------------------------------------------------------*/
function the_home_decor_logo_resizer() {

    $the_home_decor_theme_logo_size_css = '';
    $the_home_decor_logo_resizer = get_theme_mod('the_home_decor_logo_resizer');

	$the_home_decor_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($the_home_decor_logo_resizer).'px !important;
			width: '.esc_attr($the_home_decor_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'the-home-decor-style',$the_home_decor_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'the_home_decor_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function the_home_decor_global_color() {

    $the_home_decor_theme_color_css = '';
    $the_home_decor_copyright_bg = get_theme_mod('the_home_decor_copyright_bg');

	$the_home_decor_theme_color_css = '
    .copyright {
			background: '.esc_attr($the_home_decor_copyright_bg).';
		}
	';
    wp_add_inline_style( 'the-home-decor-style',$the_home_decor_theme_color_css );
    wp_add_inline_style( 'the-home-decor-woocommerce-css',$the_home_decor_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'the_home_decor_global_color' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('the_home_decor_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function the_home_decor_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'the-home-decor');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'the-home-decor'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'the-home-decor'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'the-home-decor' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'the-home-decor'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for the_home_decor_comment()

if (!function_exists('the_home_decor_widgets_init')) {

	function the_home_decor_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','the-home-decor'),
			'id'   => 'the-home-decor-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'the-home-decor'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 2','the-home-decor'),
			'id'   => 'the-home-decor-sidebar-2',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'the-home-decor'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 3','the-home-decor'),
			'id'   => 'the-home-decor-sidebar-3',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'the-home-decor'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Menu Sidebar','the-home-decor'),
			'id'   => 'the-home-decor-menu-sidebar',
			'description'   => esc_html__('This sidebar will be shown in the header.', 'the-home-decor'),
			'before_widget' => '<div id="%1$s" class="sidebar-area sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer Sidebar','the-home-decor'),
			'id'   => 'the-home-decor-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'the-home-decor'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'the_home_decor_widgets_init' );

}

function the_home_decor_get_categories_select() {
	$the_home_decor_teh_cats = get_categories();
	$the_home_decor_results = array();
	$the_home_decor_count = count($the_home_decor_teh_cats);
	for ($i=0; $i < $the_home_decor_count; $i++) {
	if (isset($the_home_decor_teh_cats[$i]))
  		$the_home_decor_results[$the_home_decor_teh_cats[$i]->slug] = $the_home_decor_teh_cats[$i]->name;
	else
  		$the_home_decor_count++;
	}
	return $the_home_decor_results;
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'the_home_decor_loop_columns');
if (!function_exists('the_home_decor_loop_columns')) {
	function the_home_decor_loop_columns() {
		$the_home_decor_columns = get_theme_mod( 'the_home_decor_per_columns', 3 );
		return $the_home_decor_columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'the_home_decor_per_page', 20 );
function the_home_decor_per_page( $the_home_decor_cols ) {
  	$the_home_decor_cols = get_theme_mod( 'the_home_decor_product_per_page', 9 );
	return $the_home_decor_cols;
}

// Add filter to modify the number of related products
add_filter( 'woocommerce_output_related_products_args', 'the_home_decor_products_args' );
function the_home_decor_products_args( $args ) {
    $args['posts_per_page'] = get_theme_mod( 'custom_related_products_number', 6 );
    $args['columns'] = get_theme_mod( 'custom_related_products_number_per_row', 3 );
    return $args;
}