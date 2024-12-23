<?php
/**
 * Fashion Accessories Theme Page
 *
 * @package Fashion Accessories
 */

function fashion_accessories_admin_scripts() {
	wp_dequeue_script('fashion-accessories-custom-scripts');
}
add_action( 'admin_enqueue_scripts', 'fashion_accessories_admin_scripts' );

if ( ! defined( 'FASHION_ACCESSORIES_FREE_THEME_URL' ) ) {
	define( 'FASHION_ACCESSORIES_FREE_THEME_URL', 'https://www.themespride.com/products/free-fashion-store-wordpress-theme' );
}
if ( ! defined( 'FASHION_ACCESSORIES_PRO_THEME_URL' ) ) {
	define( 'FASHION_ACCESSORIES_PRO_THEME_URL', 'https://www.themespride.com/products/fashion-accessories-wordpress-theme' );
}
if ( ! defined( 'FASHION_ACCESSORIES_DEMO_THEME_URL' ) ) {
	define( 'FASHION_ACCESSORIES_DEMO_THEME_URL', 'https://page.themespride.com/fashion-accessories/' );
}
if ( ! defined( 'FASHION_ACCESSORIES_DOCS_THEME_URL' ) ) {
    define( 'FASHION_ACCESSORIES_DOCS_THEME_URL', 'https://page.themespride.com/demo/docs/fashion-accessories/' );
}
if ( ! defined( 'FASHION_ACCESSORIES_RATE_THEME_URL' ) ) {
    define( 'FASHION_ACCESSORIES_RATE_THEME_URL', 'https://wordpress.org/support/theme/fashion-accessories/reviews/#new-post' );
}
if ( ! defined( 'FASHION_ACCESSORIES_CHANGELOG_THEME_URL' ) ) {
    define( 'FASHION_ACCESSORIES_CHANGELOG_THEME_URL', get_template_directory() . '/readme.txt' );
}
if ( ! defined( 'FASHION_ACCESSORIES_SUPPORT_THEME_URL' ) ) {
    define( 'FASHION_ACCESSORIES_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/fashion-accessories/' );
}
if ( ! defined( 'FASHION_ACCESSORIES_THEME_BUNDLE' ) ) {
    define( 'FASHION_ACCESSORIES_THEME_BUNDLE', 'https://www.themespride.com/products/wordpress-theme-bundle' );
}
/**
 * Add theme page
 */
function fashion_accessories_menu() {
	add_theme_page( esc_html__( 'About Theme', 'fashion-accessories' ), esc_html__( 'Begin Installation - Import Demo', 'fashion-accessories' ), 'edit_theme_options', 'fashion-accessories-about', 'fashion_accessories_about_display' );
}
add_action( 'admin_menu', 'fashion_accessories_menu' );


/**
 * Display About page
 */
function fashion_accessories_about_display() {
	$fashion_accessories_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout">
		<h1><?php echo esc_html( $fashion_accessories_theme ); ?></h1>
		<div class="about-theme">
			<div class="theme-description">
				<p class="about-text">
					<?php
					// Remove last sentence of description.
					$fashion_accessories_description = explode( '. ', $fashion_accessories_theme->get( 'Description' ) );

					array_pop( $fashion_accessories_description );

					$fashion_accessories_description = implode( '. ', $fashion_accessories_description );

					echo esc_html( $fashion_accessories_description . '.' );
				?></p>
				<p class="actions">
					<a target="_blank" href="<?php echo esc_url( FASHION_ACCESSORIES_FREE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Info', 'fashion-accessories' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( FASHION_ACCESSORIES_DEMO_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'fashion-accessories' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( FASHION_ACCESSORIES_DOCS_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'fashion-accessories' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( FASHION_ACCESSORIES_RATE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Rate this theme', 'fashion-accessories' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( FASHION_ACCESSORIES_PRO_THEME_URL ); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'fashion-accessories' ); ?></a>
				</p>
			</div>

			<div class="theme-screenshot">
				<img src="<?php echo esc_url( $fashion_accessories_theme->get_screenshot() ); ?>" />
			</div>

		</div>

		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'fashion-accessories' ); ?>">

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'fashion-accessories-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'fashion-accessories-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'One Click Demo Import', 'fashion-accessories' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'fashion-accessories-about', 'tab' => 'about_theme' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'about_theme' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'fashion-accessories' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'fashion-accessories-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'fashion-accessories' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'fashion-accessories-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'fashion-accessories' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'fashion-accessories-about', 'tab' => 'get_bundle' ), 'themes.php' ) ) ); ?>" class="blink wp-bundle nav-tab<?php echo ( isset( $_GET['tab'] ) && 'get_bundle' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Get WordPress Theme Bundle', 'fashion-accessories' ); ?></a>

		</nav>

		<?php
			fashion_accessories_demo_import();

			fashion_accessories_main_screen();

			fashion_accessories_changelog_screen();

			fashion_accessories_free_vs_pro();

			fashion_accessories_get_bundle();

		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'fashion-accessories' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'fashion-accessories' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'fashion-accessories' ) : esc_html_e( 'Go to Dashboard', 'fashion-accessories' ); ?></a>
		</div>
	</div>
	<?php
}


/**
 * Output the Demo Import screen.
 */

function fashion_accessories_demo_import() {
    if ( isset( $_GET['page'] ) && 'fashion-accessories-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {

         // Path to whizzie.php in child theme
	    $child_whizzie_path = get_stylesheet_directory() . '/inc/whizzie.php';
	    
	    // Path to whizzie.php in parent theme
	    $parent_whizzie_path = get_template_directory() . '/inc/whizzie.php';

	    // Check if the child theme is active and if whizzie.php exists in the child theme
	    if ( file_exists( $child_whizzie_path ) ) {
	        require_once $child_whizzie_path;
	    } else {
	        // Fallback to parent theme if child theme does not have whizzie.php
	        require_once $parent_whizzie_path;
	    }

        if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) { ?>
            <div class="col card success-demo">
                <p class="imp-success"><?php echo esc_html__('Imported Successfully', 'fashion-accessories'); ?></p><br>
                <a class="button button-primary" href="<?php echo esc_url(admin_url('customize.php')); ?>" target="_blank">
                    <?php echo esc_html__('Go to Customizer', 'fashion-accessories'); ?>
                </a>
            </div>
            <script type="text/javascript">
                // Immediately redirect to Customizer
                window.location.href = "<?php echo esc_url(admin_url('customize.php')); ?>";
            </script>
        <?php } else { ?>
            <div class="col card demo-btn text-center">
                <form id="demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php" method="POST">
                    <p class="demo-title"><?php echo esc_html__('Demo Importer', 'fashion-accessories'); ?></p>
                    <p class="demo-des"><?php echo esc_html__('This theme supports importing demo content with a single click. Use the button below to quickly set up your site. You can easily customize or deactivate the imported content later through the Customizer.', 'fashion-accessories'); ?></p>
                    <i class="fas fa-long-arrow-alt-down"></i>
                    <input type="submit" name="submit" class="button button-primary with-icon" value="<?php echo esc_attr__('Begin Installation - Import Demo', 'fashion-accessories'); ?>">
                </form>
            </div>
            <script type="text/javascript">
                jQuery('#demo-importer-form').on('submit', function (e) {
                    e.preventDefault();
                    if(confirm("Are you sure you want to proceed with the demo import?")){
                        var url = new URL(location.href);
                        url.searchParams.append('import-demo', true);
                        location.href = url;
                    } else {
                        return false;
                    }
                });
            </script>
        <?php }
    }
}

/**
 * Output the main about screen.
 */
function fashion_accessories_main_screen() {
	if ( isset( $_GET['tab'] ) && 'about_theme' === $_GET['tab'] ) {
	?>
		<div class="feature-section two-col">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'fashion-accessories' ); ?></h2>
				<p><?php esc_html_e( 'All Theme Options are available via Customize screen.', 'fashion-accessories' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'fashion-accessories' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'fashion-accessories' ); ?></h2>
				<p><?php esc_html_e( 'Get genuine support from genuine people. Whether it\'s customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'fashion-accessories' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url( FASHION_ACCESSORIES_SUPPORT_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'fashion-accessories' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Upgrade To Premium With Straight 20% OFF.', 'fashion-accessories' ); ?></h2>
				<p><?php esc_html_e( 'Get our amazing WordPress theme with exclusive 20% off use the coupon', 'fashion-accessories' ) ?>"<input type="text" value="GETPro20" id="myInput">".</p>
				<button class="button button-primary"><?php esc_html_e( 'GETPro20', 'fashion-accessories' ); ?></button>
			</div>
		</div>
	<?php
	}
}

/**
 * Output the changelog screen.
 */
function fashion_accessories_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View changelog below:', 'fashion-accessories' ); ?></p>

			<?php
				$changelog_file = apply_filters( 'fashion_accessories_changelog_file', FASHION_ACCESSORIES_CHANGELOG_THEME_URL );
				// Check if the changelog file exists and is readable.
				if ( $changelog_file && is_readable( $changelog_file ) ) {
					WP_Filesystem();
					$changelog = $wp_filesystem->get_contents( $changelog_file );
					$changelog_list = fashion_accessories_parse_changelog( $changelog );

					echo wp_kses_post( $changelog_list );
				}
			?>
		</div>
	<?php
	}
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function fashion_accessories_parse_changelog( $content ) {
	// Explode content with ==  to juse separate main content to array of headings.
	$content = explode ( '== ', $content );

	$changelog_isolated = '';

	// Get element with 'Changelog ==' as starting string, i.e isolate changelog.
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}

	// Now Explode $changelog_isolated to manupulate it to add html elements.
	$changelog_array = explode( '= ', $changelog_isolated );

	// Unset first element as it is empty.
	unset( $changelog_array[0] );

	$changelog = '<pre class="changelog">';

	foreach ( $changelog_array as $value) {
		// Replace all enter (\n) elements with </span><span> , opening and closing span will be added in next process.
		$value = preg_replace( '/\n+/', '</span><span>', $value );

		// Add openinf and closing div and span, only first span element will have heading class.
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div>';

		// Remove empty <span></span> element which newr formed at the end.
		$changelog .= str_replace( '<span></span>', '', $value );
	}

	$changelog .= '</pre>';

	return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function fashion_accessories_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View Free vs Pro Table below:', 'fashion-accessories' ); ?></p>
			<div class="vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'fashion-accessories' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'fashion-accessories' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'Theme Demo Set Up', 'fashion-accessories' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Templates, Color options and Fonts', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Included Demo Content', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Section Ordering', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Multiple Sections', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Plugins', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Premium Technical Support', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Access to Support Forums', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Free updates', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Unlimited Domains', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Responsive Design', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Live Customizer', 'fashion-accessories' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a class="sidebar-button single-btn" href="<?php echo esc_url(FASHION_ACCESSORIES_PRO_THEME_URL);?>" target="_blank"><?php esc_html_e( 'Go For Premium', 'fashion-accessories' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}

function fashion_accessories_get_bundle() {
	if ( isset( $_GET['tab'] ) && 'get_bundle' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'Get WordPress Theme Bundle', 'fashion-accessories' ); ?></p>
			<div class="col card">
				<h2 class="title"><?php esc_html_e( ' WordPress Theme Bundle of 90+ Themes At 15% Discount. ', 'fashion-accessories' ); ?></h2>
				<p><?php esc_html_e( 'Spring Offer Is To Get WP Bundle of 90+ Themes At 15% Discount use the coupon', 'fashion-accessories' ) ?>"<input type="text" value=" TPRIDE15 "  id="myInput">".</p>
				<p><a target="_blank" href="<?php echo esc_url( FASHION_ACCESSORIES_THEME_BUNDLE ); ?>" class="button button-primary"><?php esc_html_e( 'Theme Bundle', 'fashion-accessories' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}