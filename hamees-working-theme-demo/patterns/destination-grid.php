<?php
/**
 * Title: Destination card grid
 * Slug: hamees-working-theme-demo/destination-grid
 * Categories: hamees-demo, featured
 * Description: Three reusable destination cards without external image dependencies.
 * Viewport Width: 1440
 *
 * @package Hamees_Working_Theme_Demo
 */
?>
<!-- wp:group {"anchor":"destinations","align":"wide","className":"section","layout":{"type":"constrained"}} -->
<div id="destinations" class="wp-block-group alignwide section">
	<!-- wp:group {"className":"section-heading","layout":{"type":"constrained"}} --><div class="wp-block-group section-heading"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow"><?php esc_html_e( 'Where to go', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"heading"} --><h2 class="wp-block-heading has-text-align-center has-heading-font-size"><?php esc_html_e( 'Featured destinations', 'hamees-working-theme-demo' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column --><div class="wp-block-column"><!-- wp:group {"backgroundColor":"surface","className":"service-card","layout":{"type":"constrained"}} --><div class="wp-block-group service-card has-surface-background-color has-background"><!-- wp:paragraph {"className":"service-number"} --><p class="service-number">01</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'The Himalaya', 'hamees-working-theme-demo' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Mountain landscapes, living traditions, and carefully paced journeys.', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#"><?php esc_html_e( 'View journeys', 'hamees-working-theme-demo' ); ?></a></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column -->
		<!-- wp:column --><div class="wp-block-column"><!-- wp:group {"backgroundColor":"surface","className":"service-card","layout":{"type":"constrained"}} --><div class="wp-block-group service-card has-surface-background-color has-background"><!-- wp:paragraph {"className":"service-number"} --><p class="service-number">02</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Tibet', 'hamees-working-theme-demo' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'High-plateau routes shaped by history, spirituality, and place.', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#"><?php esc_html_e( 'View journeys', 'hamees-working-theme-demo' ); ?></a></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column -->
		<!-- wp:column --><div class="wp-block-column"><!-- wp:group {"backgroundColor":"surface","className":"service-card","layout":{"type":"constrained"}} --><div class="wp-block-group service-card has-surface-background-color has-background"><!-- wp:paragraph {"className":"service-number"} --><p class="service-number">03</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'The Silk Road', 'hamees-working-theme-demo' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Layered cities, desert routes, and stories shared across cultures.', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#"><?php esc_html_e( 'View journeys', 'hamees-working-theme-demo' ); ?></a></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
