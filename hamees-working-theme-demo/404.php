<?php
/**
 * Template displayed when WordPress cannot find the requested content.
 *
 * @package Hamees_Working_Theme_Demo
 */

get_header();
?>
<main id="primary-content" class="site-main content-area">
	<div class="container not-found">
		<p class="not-found__code" aria-hidden="true">404</p>
		<p class="eyebrow"><?php esc_html_e( 'Page not found', 'hamees-working-theme-demo' ); ?></p>
		<h1 class="page-title"><?php esc_html_e( 'We could not find that page.', 'hamees-working-theme-demo' ); ?></h1>
		<div class="entry-content">
			<p><?php esc_html_e( 'The page may have moved, or the address may be incorrect. Let us get you back to familiar ground.', 'hamees-working-theme-demo' ); ?></p>
		</div>
		<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php esc_html_e( 'Return to homepage', 'hamees-working-theme-demo' ); ?>
		</a>
	</div>
</main>
<?php get_footer(); ?>
