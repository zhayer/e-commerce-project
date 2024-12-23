<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function the_home_decor_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'the-home-decor' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Woocommerce', 'the-home-decor' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Currency Switcher Professional for WooCommerce', 'the-home-decor' ),
			'slug'             => 'woocommerce-currency-switcher',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Google Language Translator', 'the-home-decor' ),
			'slug'             => 'google-language-translator',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	the_home_decor_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'the_home_decor_register_recommended_plugins' );