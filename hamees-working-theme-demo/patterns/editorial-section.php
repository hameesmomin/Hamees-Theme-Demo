<?php
/**
 * Title: Editorial feature section
 * Slug: hamees-working-theme-demo/editorial-section
 * Categories: hamees-demo, posts
 * Description: A Query Loop pattern for travel stories and editorial content.
 * Block Types: core/query
 * Viewport Width: 1440
 *
 * @package Hamees_Working_Theme_Demo
 */
?>
<!-- wp:group {"align":"wide","className":"section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide section">
	<!-- wp:group {"className":"section-heading","layout":{"type":"constrained"}} --><div class="wp-block-group section-heading"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow"><?php esc_html_e( 'Travel stories', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"heading"} --><h2 class="wp-block-heading has-text-align-center has-heading-font-size"><?php esc_html_e( 'Ideas, context, and practical guidance', 'hamees-working-theme-demo' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:query {"queryId":8,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
	<div class="wp-block-query"><!-- wp:post-template {"className":"posts-grid","layout":{"type":"grid","columnCount":3}} --><!-- wp:group {"className":"post-card","layout":{"type":"constrained"}} --><div class="wp-block-group post-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"post-card__image"} /--><!-- wp:group {"className":"post-card__body","layout":{"type":"constrained"}} --><div class="wp-block-group post-card__body"><!-- wp:post-date {"className":"post-card__meta"} /--><!-- wp:post-title {"level":3,"isLink":true} /--><!-- wp:post-excerpt {"excerptLength":18,"moreText":"Read story"} /--></div><!-- /wp:group --></div><!-- /wp:group --><!-- /wp:post-template --><!-- wp:query-no-results --><!-- wp:paragraph {"className":"empty-notice"} --><p class="empty-notice"><?php esc_html_e( 'Publish travel stories and they will appear here automatically.', 'hamees-working-theme-demo' ); ?></p><!-- /wp:paragraph --><!-- /wp:query-no-results --></div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
