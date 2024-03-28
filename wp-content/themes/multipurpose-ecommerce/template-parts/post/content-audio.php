<?php
/**
 * Template part for displaying posts
 */

?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blogger">
    <div class="category">
      <a href="<?php echo esc_url( get_permalink() ); ?>" class="text-capitalize"><?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
    </div>
    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php if( get_theme_mod( 'multipurpose_ecommerce_date_hide',true) != '' || get_theme_mod( 'multipurpose_ecommerce_comment_hide',true) != '' || get_theme_mod( 'multipurpose_ecommerce_author_hide',true) != '') { ?>
      <div class="post-info">
        <?php if( get_theme_mod( 'multipurpose_ecommerce_date_hide',true) != '') { ?>
          <span class="entry-date"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_post_date_icon_changer','fa fa-calendar')); ?>"></i> <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('multipurpose_ecommerce_blog_post_metabox_seperator') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'multipurpose_ecommerce_author_hide',true) != '') { ?>
          <span class="entry-author"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_post_author_icon_changer','fa fa-user')); ?>"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('multipurpose_ecommerce_blog_post_metabox_seperator') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'multipurpose_ecommerce_comment_hide',true) != '') { ?>
          <i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_post_comment_icon_changer','fas fa-comments')); ?>"></i><span class="entry-comments"><?php comments_number( __('0 Comments','multipurpose-ecommerce'), __('0 Comments','multipurpose-ecommerce'), __('% Comments','multipurpose-ecommerce') ); ?></span>
        <?php } ?>
      </div>
    <?php }?>
    <?php if(get_theme_mod('multipurpose_ecommerce_blog_description') != 'Post Content'){ ?>
      <div class="post-image">
        <?php
          if ( ! is_single() ) {
            // If not a single post, highlight the audio file.
            if ( ! empty( $audio ) ) {
              foreach ( $audio as $audio_html ) {
                echo '<div class="entry-audio">';
                  echo $audio_html;
                echo '</div><!-- .entry-audio -->';
              }
            };
          };
        ?>
      </div>
    <?php }?>
    <?php if(get_theme_mod('multipurpose_ecommerce_blog_description') == 'Post Content'){ ?>
      <div class="text"><?php the_content(); ?></div>
    <?php }
    if(get_theme_mod('multipurpose_ecommerce_blog_description', 'Post Excerpt') == 'Post Excerpt'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <div class="text">
          <div class="entry-content"><?php $multipurpose_ecommerce_excerpt = get_the_excerpt(); echo esc_html( multipurpose_ecommerce_string_limit_words( $multipurpose_ecommerce_excerpt, esc_attr(get_theme_mod('multipurpose_ecommerce_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('multipurpose_ecommerce_post_excerpt_suffix','{...}') ); ?></div>
        </div>
      <?php } ?>
    <?php }?>
    <?php if( get_theme_mod('multipurpose_ecommerce_button_text','Continue Reading....') != ''){ ?>
      <a class="post-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_button_text','Continue Reading....'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_button_text','Continue Reading....'));?></span></a>
    <?php }?>
  </div>
</article>