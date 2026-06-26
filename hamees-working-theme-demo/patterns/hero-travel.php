<?php
/**
 * Title: Travel hero
 * Slug: hamees-working-theme-demo/hero-travel
 * Categories: hamees-demo, featured
 * Description: A wide travel hero with an editorial headline and call to action.
 * Viewport Width: 1440
 *
 * @package Hamees_Working_Theme_Demo
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","className":"hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero has-surface-background-color has-background">
	<!-- wp:group {"align":"wide","className":"hero-content","layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide hero-content">
		<!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow"><?php esc_html_e( 'Small-group journeys', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"fontSize":"display"} --><h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'Travel with curiosity and purpose', 'hamees-working-theme-demo' ); ?></h1><!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"lead","textColor":"muted"} --><p class="has-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Discover thoughtful itineraries shaped by local knowledge, cultural context, and time to explore.', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#destinations"><?php esc_html_e( 'Explore destinations', 'hamees-working-theme-demo' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
