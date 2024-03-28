<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>


<?php do_action( 'multipurpose_ecommerce_page_top' ); ?>

<main id="main" role="main">	
	<div class="container">
		<?php $multipurpose_ecommerce_theme_lay = get_theme_mod( 'multipurpose_ecommerce_page_sidebar_option','One Column');
    	if($multipurpose_ecommerce_theme_lay == 'One Column'){ ?>
    		<div class="pages-te">
				<?php if (get_theme_mod('multipurpose_ecommerce_single_page_breadcrumb',true) != ''){ ?>
					<div class="breadcrumb">
						<?php multipurpose_ecommerce_the_breadcrumb(); ?>
					</div>
				<?php }?>
				<?php
					while ( have_posts() ) : the_post();?>
						<div class="feature-box">   
			                <?php the_post_thumbnail(); ?>
			            </div>
						<h1><?php the_title(); ?></h1>
						<div class="entry-content"><?php the_content(); ?></div>
						<?php
					        // If comments are open or we have at least one comment, load up the comment template.
					        if ( comments_open() || get_comments_number() ) {
					            comments_template();
					        }
					    ?>

					<?php endwhile; // End of the loop.

				wp_reset_postdata(); ?>
			</div>

		<?php }else if($multipurpose_ecommerce_theme_lay == 'Right Sidebar'){ ?>
        	<div class="row">
        		<div class="pages-te col-lg-8 col-md-8">
					<?php if (get_theme_mod('multipurpose_ecommerce_single_page_breadcrumb',true) != ''){ ?>
					<div class="breadcrumb">
						<?php multipurpose_ecommerce_the_breadcrumb(); ?>
					</div>
            		<?php }?>
            		<?php
						while ( have_posts() ) : the_post();?>
							<div class="feature-box">   
				                <?php the_post_thumbnail(); ?>
				            </div>
							<h1><?php the_title(); ?></h1>
							<div class="entry-content"><?php the_content(); ?></div>
							<?php
						        // If comments are open or we have at least one comment, load up the comment template.
						        if ( comments_open() || get_comments_number() ) {
						            comments_template();
						        }
						    ?>

						<?php endwhile; // End of the loop.

					wp_reset_postdata(); ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			</div>
		<?php }else if($multipurpose_ecommerce_theme_lay == 'Left Sidebar'){ ?>
        	<div class="row">
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
        		<div class="pages-te col-lg-8 col-md-8">
					<?php if (get_theme_mod('multipurpose_ecommerce_single_page_breadcrumb',true) != ''){ ?>
						<div class="breadcrumb">
							<?php multipurpose_ecommerce_the_breadcrumb(); ?>
						</div>
					<?php }?>
            		<?php
						while ( have_posts() ) : the_post();?>
							<div class="feature-box">   
				                <?php the_post_thumbnail(); ?>
				            </div>
							<h1><?php the_title(); ?></h1>
							<div class="entry-content"><?php the_content(); ?></div>
							<?php
						        // If comments are open or we have at least one comment, load up the comment template.
						        if ( comments_open() || get_comments_number() ) {
						            comments_template();
						        }
						    ?>

						<?php endwhile; // End of the loop.

					wp_reset_postdata(); ?>
				</div>
			</div>
		<?php }else {?>
			<div class="row">
        		<div class="pages-te col-lg-8 col-md-8">
					<?php if (get_theme_mod('multipurpose_ecommerce_single_page_breadcrumb',true) != ''){ ?>
						<div class="breadcrumb">
							<?php multipurpose_ecommerce_the_breadcrumb(); ?>
						</div>
					<?php }?>
            		<?php
						while ( have_posts() ) : the_post();?>
							<div class="feature-box">   
				                <?php the_post_thumbnail(); ?>
				            </div>
							<h1><?php the_title(); ?></h1>
							<div class="entry-content"><?php the_content(); ?></div>
							<?php
						        // If comments are open or we have at least one comment, load up the comment template.
						        if ( comments_open() || get_comments_number() ) {
						            comments_template();
						        }
						    ?>

						<?php endwhile; // End of the loop.

					wp_reset_postdata(); ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			</div>
		<?php } ?>
	</div>
</main>

<?php get_footer();
