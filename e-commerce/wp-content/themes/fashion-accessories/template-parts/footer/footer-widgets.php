<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Fashion Accessories
 * @subpackage fashion_accessories
 */

?>
<?php

// Determine the number of columns dynamically for the footer (you can replace this with your logic).
$fashion_accessories_number_of_footer_columns = get_theme_mod('fashion_accessories_footer_columns', 4); // Change this value as needed.

// Calculate the Bootstrap class for large screens (col-lg-X) for footer.
$fashion_accessories_col_lg_footer_class = 'col-lg-' . (12 / $fashion_accessories_number_of_footer_columns);

// Calculate the Bootstrap class for medium screens (col-md-X) for footer.
$fashion_accessories_col_md_footer_class = 'col-md-' . (12 / $fashion_accessories_number_of_footer_columns);
?>
<div class="container">
    <aside class="widget-area row" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'fashion-accessories' ); ?>">
        <div class="<?php echo esc_attr($fashion_accessories_col_lg_footer_class); ?> <?php echo esc_attr($fashion_accessories_col_md_footer_class); ?>">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <?php
        // Footer boxes 2 and onwards.
        for ($fashion_accessories_i = 2; $fashion_accessories_i <= $fashion_accessories_number_of_footer_columns; $fashion_accessories_i++) :
            if ($fashion_accessories_i <= $fashion_accessories_number_of_footer_columns) :
                ?>
               <div class="col-12 <?php echo esc_attr($fashion_accessories_col_lg_footer_class); ?> <?php echo esc_attr($fashion_accessories_col_md_footer_class); ?>">
                    <?php dynamic_sidebar('footer-' . $fashion_accessories_i); ?>
                </div><!-- .footer-one-box -->
                <?php
            endif;
        endfor;
        ?>
    </aside>
</div>