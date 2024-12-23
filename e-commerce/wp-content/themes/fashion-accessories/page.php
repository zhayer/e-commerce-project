<?php
/**
 * The template for displaying all pages
 *
 * @package Fashion Accessories
 * @subpackage fashion_accessories
 */

get_header(); ?>
<div class="box-image">
  	<div class="single-page-img"></div>
  	 <div class="box-text">
    	<h2><?php the_title();?></h2>  
    </div> 
</div>
	<main id="tp_content" role="main">
		<div class="container">
			<div id="primary" class="content-area">
				<?php $fashion_accessories_sidebar_layout = get_theme_mod( 'fashion_accessories_sidebar_page_layout','right');
			    if($fashion_accessories_sidebar_layout == 'left'){ ?>
			        <div class="row">
			          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
			          	<div class="col-lg-8 col-md-8 singlepage-main">
			           		<?php while ( have_posts() ) : the_post();

									the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'fashion-accessories' ),
										'after'  => '</div>',
									) );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								endwhile; // End of the loop.
							?>
			          	</div>
			        </div>
			        <div class="clearfix"></div>
			    <?php }else if($fashion_accessories_sidebar_layout == 'right'){ ?>
			        <div class="row">
			          	<div class="col-lg-8 col-md-8 singlepage-main">
				            <?php while ( have_posts() ) : the_post();

									the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'fashion-accessories' ),
										'after'  => '</div>',
									) );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								endwhile; // End of the loop.
							?>
			          	</div>
			          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
			        </div>
			    <?php }else if($fashion_accessories_sidebar_layout == 'full'){ ?>
			        <div class="full">
			            <?php while ( have_posts() ) : the_post();

									the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'fashion-accessories' ),
										'after'  => '</div>',
									) );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							endwhile; // End of the loop.
						?>
			      	</div>
				<?php }?>
			</div>
	 	</div>
	</main>


<?php get_footer();