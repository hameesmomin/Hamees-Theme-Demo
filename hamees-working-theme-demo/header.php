<?php
/**
 * Site header.
 *
 * @package Hamees_Working_Theme_Demo
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#primary-content"><?php esc_html_e( 'Skip to content', 'hamees-working-theme-demo' ); ?></a>

<header class="site-header">
	<div class="container header-inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<div>
					<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php if ( get_bloginfo( 'description' ) ) : ?>
						<p class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>

		<button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
			<?php esc_html_e( 'Menu', 'hamees-working-theme-demo' ); ?>
		</button>
		<nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'hamees-working-theme-demo' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'primary-menu',
					'container'      => false,
					'fallback_cb'    => 'hamees_demo_menu_fallback',
				)
			);
			?>
		</nav>
	</div>
</header>
