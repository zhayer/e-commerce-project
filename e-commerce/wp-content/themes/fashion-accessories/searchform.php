<?php
/**
 * Template for displaying search forms in Fashion Accessories
 *
 * @package Fashion Accessories
 * @subpackage fashion_accessories
 */
?>

<?php $fashion_accessories_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">	
	<input type="search" id="<?php echo esc_attr( $fashion_accessories_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'fashion-accessories' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'fashion-accessories' ); ?></button>
</form>