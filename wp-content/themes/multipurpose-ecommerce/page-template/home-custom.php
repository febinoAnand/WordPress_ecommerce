<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'multipurpose_ecommerce_before_slider' ); ?>

    <?php if( get_theme_mod('multipurpose_ecommerce_slider_hide', false) != '' || get_theme_mod('multipurpose_ecommerce_enable_disable_slider', true) != ''){ ?>
    <div class="<?php if( get_theme_mod('multipurpose_ecommerce_slider_width_options', 'Full Width') == 'Container Width'){ ?>container <?php }?>">
      <section id="slider-section">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_slider_speed', 3000)); ?>"> 
          <?php $multipurpose_ecommerce_slider_page = array();
            for ( $count = 1; $count <=4; $count++ ) {
              $mod = intval( get_theme_mod( 'multipurpose_ecommerce_slide_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $multipurpose_ecommerce_slider_page[] = $mod;
              }
            }
            if( !empty($multipurpose_ecommerce_slider_page) ) :
            $args = array(
                'post_type' => 'page',
                'post__in' => $multipurpose_ecommerce_slider_page,
                'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
          ?>     
          <div class="carousel-inner" role="listbox">
            <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
               the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider.png" alt="" />
              <?php } ?>
                  <div class="carousel-caption">
                    <div class="inner_carousel">
                      <?php if( get_theme_mod('multipurpose_ecommerce_slider_title',true) != ''){ ?>
                        <h1><?php the_title(); ?></h1> 
                      <?php } ?>
                      <?php if (get_theme_mod( 'multipurpose_ecommerce_slider_button',true) != '' || get_theme_mod( 'multipurpose_ecommerce_show_hide_slider_button',true) != ''){ ?>
                        <?php if( get_theme_mod('multipurpose_ecommerce_slider_button_text','READ MORE') != ''){ ?>
                          <div class="slide-button mt-md-4">
                            <a href="<?php echo esc_url( get_theme_mod('multipurpose_ecommerce_slider_button_text_url','') );?>"><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_slider_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_slider_button_text','READ MORE'));?></span></a>
                          </div>
                        <?php } ?>
                      <?php } ?>
                    </div>
                  </div>
              </div>
            <?php $i++; endwhile; 
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
          <div class="no-postfound"></div>
            <?php endif;
          endif;?>
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','multipurpose-ecommerce' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','multipurpose-ecommerce' );?></span>
          </a>
        </div>
        <div class="clearfix"></div>
      </section>
    <?php }?>

    <?php do_action( 'multipurpose_ecommerce_after_slider' ); ?>

    <?php if( get_theme_mod('multipurpose_ecommerce_section_title') != ''){ ?>
      <section id="product" class="py-5">
        <div class="container">
          <?php if( get_theme_mod('multipurpose_ecommerce_section_title') != ''){ ?>
            <strong class="text-uppercase"><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_section_title','')); ?></strong>
            <hr class="product-head">
          <?php }?>
          <?php $multipurpose_ecommerce_product_page = array();
            $mod = absint( get_theme_mod( 'multipurpose_ecommerce_Product_page'));
            if ( 'page-none-selected' != $mod ) {
              $multipurpose_ecommerce_product_page[] = $mod;
            }
          if( !empty($multipurpose_ecommerce_product_page) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $multipurpose_ecommerce_product_page,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
            <?php else : ?>
                <div class="no-postfound"></div>
            <?php endif;
          endif;
          wp_reset_postdata()?>
            <div class="clearfix"></div> 
        </div>
      </section>
    <?php }?>
  <?php do_action( 'multipurpose_ecommerce_after_products' ); ?>
</main>

<?php get_footer(); ?>