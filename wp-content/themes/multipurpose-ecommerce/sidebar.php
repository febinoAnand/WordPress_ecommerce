<?php
/**
	* The sidebar containing the main widget area
*/

?>

<div id="sidebox">
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <section id="archives" class="widget mb-4" role="complementary" aria-label="firstsidebar">
            <h3 class="widget-title py-3 mb-3 text-center text-uppercase"><?php esc_html_e( 'Archives', 'multipurpose-ecommerce' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </section>
        <section id="meta" class="widget mb-4" role="complementary" aria-label="secondsidebar">
            <h3 class="widget-title py-3 mb-3 text-center text-uppercase"><?php esc_html_e( 'Meta', 'multipurpose-ecommerce' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </section>
    <?php endif; ?>
</div>
