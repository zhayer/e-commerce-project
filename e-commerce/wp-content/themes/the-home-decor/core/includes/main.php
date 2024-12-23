<?php
/**
* Get started notice
*/
add_action( 'wp_ajax_the_home_decor_dismissed_notice_handler', 'the_home_decor_ajax_notice_handler' );

function the_home_decor_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function the_home_decor_deprecated_hook_admin_notice() {
    if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>
        <?php
        require_once get_template_directory() .'/core/includes/demo-import.php';
        $current_screen = get_current_screen();
			if ($current_screen->id !== 'appearance_page_the-home-decor-guide-page') {
         $the_home_decor_comments_theme = wp_get_theme(); ?>
        <div class="the-home-decor-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
		<div class="the-home-decor-notice">
			<div class="the-home-decor-notice-img">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'the-home-decor'); ?>">
			</div>
			<div class="the-home-decor-notice-content">
				<div class="the-home-decor-notice-heading"><?php esc_html_e('Thanks for installing ','the-home-decor'); ?><?php echo esc_html( $the_home_decor_comments_theme ); ?> <?php esc_html_e('Theme','the-home-decor'); ?></div>
				<p><?php echo esc_html('Get started with the wordpress theme installation, Firstly install recommended plugins and then click on demo importer button.','the-home-decor'); ?></p>
				<div class="diplay-flex-btn">
					<a class="button button-primary" href="<?php echo esc_url(admin_url('themes.php?page=the-home-decor-guide-page')); ?>"><?php echo esc_html('More Option','the-home-decor'); ?></a>
					<?php if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){ ?>
			    		<a class="button button-success" href="<?php echo esc_url(home_url()); ?>" target="_blank"><?php echo esc_html('Go to Homepage','the-home-decor'); ?></a> <span class="imp-success"><?php echo esc_html('Imported Successfully','the-home-decor'); ?></span>
			    	<?php } else { ?>
					<form id="demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php" method="POST">
			        	<input  type="submit" name="submit" value="<?php esc_attr_e('Demo Import','the-home-decor'); ?>" class="button button-primary">
			    	</form>
			    	<?php } ?>
				</div>
			</div>
		</div>
	</div>
    <?php }
	}
}
add_action( 'admin_notices', 'the_home_decor_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'the_home_decor_getting_started' );
function the_home_decor_getting_started() {
	add_theme_page( esc_html__('Get Started', 'the-home-decor'), esc_html__('Get Started', 'the-home-decor'), 'edit_theme_options', 'the-home-decor-guide-page', 'the_home_decor_test_guide');	
}

function the_home_decor_admin_enqueue_scripts() {
	wp_enqueue_style( 'the-home-decor-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'the-home-decor-admin-script', get_template_directory_uri() . '/js/the-home-decor-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'the-home-decor-admin-script', 'the_home_decor_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
    wp_enqueue_script( 'the-home-decor-demo-script', get_template_directory_uri() . '/js/demo-script.js', array( 'jquery' ), '', true );
}
add_action( 'admin_enqueue_scripts', 'the_home_decor_admin_enqueue_scripts' );


if ( ! defined( 'THE_HOME_DECOR_DOCS_FREE' ) ) {
define('THE_HOME_DECOR_DOCS_FREE',__('https://demo.misbahwp.com/docs/the-home-decor-free-docs/','the-home-decor'));
}
 if ( ! defined( 'THE_HOME_DECOR_DOCS_PRO' ) ) {
define('THE_HOME_DECOR_DOCS_PRO',__('https://demo.misbahwp.com/docs/the-home-decor-pro-docs/','the-home-decor'));
}
if ( ! defined( 'THE_HOME_DECOR_BUY_NOW' ) ) {
define('THE_HOME_DECOR_BUY_NOW',__('https://www.misbahwp.com/products/decor-wordpress-theme','the-home-decor'));
}
if ( ! defined( 'THE_HOME_DECOR_SUPPORT_FREE' ) ) {
define('THE_HOME_DECOR_SUPPORT_FREE',__('https://wordpress.org/support/theme/the-home-decor','the-home-decor'));
}
if ( ! defined( 'THE_HOME_DECOR_REVIEW_FREE' ) ) {
define('THE_HOME_DECOR_REVIEW_FREE',__('https://wordpress.org/support/theme/the-home-decor/reviews/#new-post','the-home-decor'));
}
if ( ! defined( 'THE_HOME_DECOR_DEMO_PRO' ) ) {
define('THE_HOME_DECOR_DEMO_PRO',__('https://demo.misbahwp.com/the-home-decor/','the-home-decor'));
}
if( ! defined( 'THE_HOME_DECOR_THEME_BUNDLE' ) ) {
define('THE_HOME_DECOR_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','the-home-decor'));
}

function the_home_decor_test_guide() { 
	$the_home_decor_theme = wp_get_theme();
	require_once get_template_directory() .'/core/includes/demo-import.php';
	?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( THE_HOME_DECOR_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'the-home-decor' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'the-home-decor' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( THE_HOME_DECOR_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'the-home-decor' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( THE_HOME_DECOR_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'the-home-decor' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','the-home-decor'); ?><?php echo esc_html( $the_home_decor_theme ); ?>  <span><?php esc_html_e('Version: ', 'the-home-decor'); ?><?php echo esc_html($the_home_decor_theme['Version']);?></span></h3>
				<div class="demo-import-box">
					<h4><?php echo esc_html('Import homepage demo in just one click.','the-home-decor'); ?></h4>
					<p><?php echo esc_html('Get started with the wordpress theme installation, Firstly install recommended plugins and then click on demo importer button.','the-home-decor'); ?></p>
					<?php if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){ ?>
			    		<span class="imp-success"><?php echo esc_html('Imported Successfully','the-home-decor'); ?></span>  <a class="button button-success" href="<?php echo esc_url(home_url()); ?>" target="_blank"><?php echo esc_html('Go to Homepage','the-home-decor'); ?></a>
			    	<?php } else { ?>
					<form id="demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=the-home-decor-guide-page" method="POST">
			        	<input  type="submit" name="submit" value="<?php esc_attr_e('Demo Import','the-home-decor'); ?>" class="button button-primary">
			    	</form>
			    	<?php } ?>
				</div>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $the_home_decor_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$the_home_decor_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $the_home_decor_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="volleyball-postboxx">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'the-home-decor' ); ?></h3>
				<div class="volleyball-insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','the-home-decor'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( THE_HOME_DECOR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'the-home-decor' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( THE_HOME_DECOR_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'the-home-decor' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( THE_HOME_DECOR_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'the-home-decor' ) ?></a>
					</div>
				</div>

				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'the-home-decor' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $99."','the-home-decor'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','the-home-decor'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','the-home-decor'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( THE_HOME_DECOR_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'the-home-decor' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','the-home-decor'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','the-home-decor'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','the-home-decor'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','the-home-decor'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>
<?php } ?>