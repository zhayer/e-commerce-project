<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Fashion Accessories
 * @subpackage fashion_accessories
 */

get_header(); ?>

<main id="tp_content" role="main">
	<div>
		<?php do_action('fashion_accessories_before_slider'); ?>
		<?php get_template_part('template-parts/home/slider'); ?>
		<?php do_action('fashion_accessories_after_slider'); ?>
	</div>
	<div>
		<?php get_template_part('template-parts/home/products'); ?>
		<?php do_action('fashion_accessories_after_products'); ?>
		<?php get_template_part('template-parts/home/home-content'); ?>
		<?php do_action('fashion_accessories_after_home_content'); ?>
	</div>
</main>

<?php get_footer(); ?>