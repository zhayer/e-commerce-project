<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-home-decor' ); ?></a>

<?php if ( get_theme_mod('the_home_decor_site_loader', false) == true ) : ?>
	<div class="cssloader">
    	<div class="sh1"></div>
    	<div class="sh2"></div>
    	<h1 class="lt"><?php esc_html_e( 'loading',  'the-home-decor' ); ?></h1>
    </div>
<?php endif; ?>

<div class="<?php if( get_theme_mod( 'the_home_decor_sticky_header', false) != '') { ?>sticky-header<?php } else { ?>close-sticky main-menus<?php } ?>">
	<header id="site-navigation">
		<div class="header-inner py-2">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-2 col-sm-4 align-self-center contact-box text-start">
						<?php if ( get_theme_mod('the_home_decor_header_newsletter_button_text') || get_theme_mod('the_home_decor_header_newsletter_button_url') ) : ?>
							<p class="info-p mb-0 text-center text-md-start"><a href="<?php echo esc_url(get_theme_mod('the_home_decor_header_newsletter_button_url'));?>"><?php echo esc_html(get_theme_mod('the_home_decor_header_newsletter_button_text'));?></a></p>
						<?php endif; ?>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 align-self-center">
						<?php if ( get_theme_mod('the_home_decor_header_inner_text')) : ?>
							<p class="mb-0 text-inner"><?php echo esc_html(get_theme_mod('the_home_decor_header_inner_text'));?></p>
						<?php endif; ?>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 align-self-center translation-box text-md-end">
						<?php if ( shortcode_exists('google-translator') ) : ?>
						    <span>
						        <?php echo do_shortcode('[google-translator]'); ?>
						    </span>
						<?php endif; ?>
						<?php if ( shortcode_exists('woocs') ) : ?>
						    <span>
						        <?php echo do_shortcode('[woocs]'); ?>
						    </span>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="header-outter py-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-6 offcanvas-div align-self-center text-center text-lg-left">
						<button type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
							<i class="fas fa-bars"></i>
						</button>
						<div class="offcanvas offcanvas-end" id="demo">
							<div class="offcanvas-header"> 
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
							</div>
							<div class="offcanvas-body">
								<?php dynamic_sidebar('the-home-decor-menu-sidebar'); ?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6  align-self-center">
						<div class="logo text-start">
				    		<div class="logo-image">
				    			<?php the_custom_logo(); ?>
					    	</div>
					    	<div class="logo-content">
						    	<?php
						    		if ( get_theme_mod('the_home_decor_display_header_title', true) == true ) :
							      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
							      			echo esc_html(get_bloginfo('name'));
							      		echo '</a>';
							      	endif;

							      	if ( get_theme_mod('the_home_decor_display_header_text', false) == true ) :
						      			echo '<span>'. esc_html(get_bloginfo('description')) . '</span>';
						      		endif;
					    		?>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 search-box align-self-center">
						<div class="main-search-box">
							<?php if(class_exists('woocommerce')){ ?>
			              		<?php get_product_search_form(); ?>
			              	<?php }?>
			            </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-6 text-center text-md-end align-self-center nav-box">
						<?php if ( class_exists( 'woocommerce' ) ) {?>
							<a class="cart-customlocation me-3" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','the-home-decor' ); ?>"><i class="fas fa-shopping-cart"></i></a>
						<?php }?>
						<?php if ( get_theme_mod('the_home_decor_wislist_url')) : ?>
							<a href="<?php echo esc_url( get_theme_mod('the_home_decor_wislist_url' ) ); ?>" class="myacunt-url me-3"><i class="fas fa-heart"></i></a>
						<?php endif; ?>
						<?php if(class_exists('woocommerce')){ ?>
				          	<?php if ( is_user_logged_in() ) { ?>
				            	<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-sign-in-alt"></i></a>
				          	<?php }
				          	else { ?>
				            	<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','the-home-decor'); ?>"><i class="fas fa-user"></i></a>
				          	<?php } ?>
        				<?php }?>
					</div>
				</div>
			</div>
		</div>
		<div class="header-middle">
			<div class="container">
				<div class="menu-box">
					<button class="menu-toggle toggle-menu my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'the-home-decor' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal main-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				</div>
			</div>
		</div>
	</header>
</div>