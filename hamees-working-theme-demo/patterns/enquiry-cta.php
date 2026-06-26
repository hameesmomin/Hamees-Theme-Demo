<?php
/**
 * Title: Enquiry and booking call to action
 * Slug: hamees-working-theme-demo/enquiry-cta
 * Categories: hamees-demo, call-to-action
 * Description: A presentation-only enquiry CTA that leaves form and booking behaviour to the approved integration.
 * Viewport Width: 1440
 *
 * @package Hamees_Working_Theme_Demo
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"white","className":"section cta","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section cta has-white-color has-primary-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","className":"cta-inner","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide cta-inner">
		<!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:heading {"level":2,"textColor":"white"} --><h2 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( 'Ready to discuss your journey?', 'hamees-working-theme-demo' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Share the places, dates, and travel style you have in mind, and we will help shape the next step.', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"primary-dark"} --><div class="wp-block-button"><a class="wp-block-button__link has-primary-dark-color has-white-background-color has-text-color has-background wp-element-button" href="#enquiry"><?php esc_html_e( 'Make an enquiry', 'hamees-working-theme-demo' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
