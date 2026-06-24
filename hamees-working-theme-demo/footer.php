<?php
/**
 * Site footer.
 *
 * @package Hamees_Working_Theme_Demo
 */
?>
<footer class="site-footer">
	<div class="container">
		<div class="footer-inner">
			<div>
				<h2 class="footer-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h2>
				<p><?php esc_html_e( 'A lightweight custom WordPress theme built with clean, maintainable code.', 'hamees-working-theme-demo' ); ?></p>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
					'container'      => 'nav',
					'container_aria_label' => esc_html__( 'Footer navigation', 'hamees-working-theme-demo' ),
					'fallback_cb'    => false,
				)
			);
			?>
		</div>
		<div class="site-info">
			<?php
			printf(
				/* translators: 1: Current year, 2: Site name. */
				esc_html__( 'Copyright %1$s %2$s. Theme by Hamees Momin.', 'hamees-working-theme-demo' ),
				esc_html( wp_date( 'Y' ) ),
				esc_html( get_bloginfo( 'name' ) )
			);
			?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
