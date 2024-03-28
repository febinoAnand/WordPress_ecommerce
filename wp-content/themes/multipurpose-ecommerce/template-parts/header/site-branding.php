<?php
/**
 * Displays header site branding
 */

?>

<div class="site-branding">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 align-self-center">
				<div class="logo text-md-start text-center align-self-center">
				    <?php if ( has_custom_logo() ) : ?>
		              <div class="site-logo py-2"><?php the_custom_logo(); ?></div>
		            <?php endif; ?>      
		              <?php $blog_info = get_bloginfo( 'name' ); ?>
		              <?php if ( ! empty( $blog_info ) ) : ?>
		              	<?php if( get_theme_mod('multipurpose_ecommerce_show_site_title',true) != ''){ ?>
			                <?php if ( is_front_page() && is_home() ) : ?>
			                  <h1 class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-capitalize"><?php bloginfo( 'name' ); ?></a></h1>
			                <?php else : ?>
			                  <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-capitalize"><?php bloginfo( 'name' ); ?></a></p>
			                <?php endif; ?>
			            <?php }?>
					<?php endif; ?>
					<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) :
					?>
					<?php if( get_theme_mod('multipurpose_ecommerce_show_tagline',false) != ''){ ?>
						<p class="site-description m-0">
							<?php echo esc_html($description); ?>
						</p>
						<?php }?>
		            <?php endif; ?>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 align-self-center <?php if( get_theme_mod( 'multipurpose_ecommerce_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
				<div class="navigation-top align-self-center">
					<div class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 align-self-center">
				<?php if( get_theme_mod('multipurpose_ecommerce_show_hide_search',true) != ''){ ?>
					<div class="search-body my-2 text-center">
						<button type="button" class="search-show"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_search_icon_changer','fas fa-search')); ?>"></i></button>
					</div>
				<?php } ?>
			</div>
			<div class="col-lg-1 col-md-1 align-self-center">
				<div class="cart_icon py-3 text-center align-self-center">
	                <?php if(class_exists('woocommerce')){ ?>
	                    <li class="cart_box">
                     		<span class="cart-value"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count()) );?></span>
	                    </li> 
	                <?php } ?>
	                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_cart_page_id') ) ); ?>"><img src="<?php echo esc_url (get_template_directory_uri().'/assets/images/cart.png'); ?>" alt="<?php esc_attr_e( 'Cart','multipurpose-ecommerce' ); ?>"/><span class="screen-reader-text"><?php esc_html_e( 'Cart','multipurpose-ecommerce' ); ?>"/></span></a>
                </div>
			</div>
			<div class="searchform-inner">
				<?php get_search_form(); ?>
				<button type="button" class="close"aria-label="Close"><span aria-hidden="true">X</span></button>
			</div>
		</div>
	</div>
</div>