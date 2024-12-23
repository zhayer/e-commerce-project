<?php

$fashion_accessories_post_args = array(
    'posts_per_page'    => get_theme_mod( 'fashion_accessories_related_post_per_page', 3 ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$related = wp_get_post_terms( get_the_ID(), 'category' );
$fashion_accessories_ids = array();
foreach( $related as $term ) {
    $fashion_accessories_ids[] = $term->term_id;
}

$fashion_accessories_post_args['category__in'] = $fashion_accessories_ids; 

$related_posts = new WP_Query( $fashion_accessories_post_args );

if ( $related_posts->have_posts() ) : ?>
        <div class="related-post-block">
        <h3 class="text-center mb-3"><?php esc_html_e('Related Posts','fashion-accessories'); ?></h3>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div id="category-post">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="page-box">
                                <?php if(has_post_thumbnail()) { ?>
                                        <?php the_post_thumbnail();  ?>    
                                <?php } ?>
                                <div class="box-content">
                                    <h4 class="py-2"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
                                    <p><?php echo wp_trim_words(get_the_content(), get_theme_mod('fashion_accessories_excerpt_count',10) );?></p>
                                    <?php if(get_theme_mod('fashion_accessories_remove_read_button',true) != ''){ ?>
                                    <div class="readmore-btn mb-1">
                                        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'fashion-accessories' ); ?>"><?php echo esc_html(get_theme_mod('fashion_accessories_read_more_text',__('Read More','fashion-accessories')));?></a>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();