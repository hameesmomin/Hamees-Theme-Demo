<?php
/**
 * Title: Itinerary call to action
 * Slug: hamees-working-theme-demo/itinerary-cta
 * Categories: hamees-demo, call-to-action
 * Description: A reusable itinerary summary and tour-detail call to action.
 * Viewport Width: 1200
 *
 * @package Hamees_Working_Theme_Demo
 */
?>
<!-- wp:group {"align":"wide","backgroundColor":"surface","className":"service-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide service-card has-surface-background-color has-background">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} --><div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow"><?php esc_html_e( 'Sample itinerary', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'A journey paced for meaningful encounters', 'hamees-working-theme-demo' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Clear day-by-day planning helps travelers understand the rhythm, highlights, and practical details before they enquire.', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} --><div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#itinerary"><?php esc_html_e( 'View the itinerary', 'hamees-working-theme-demo' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
