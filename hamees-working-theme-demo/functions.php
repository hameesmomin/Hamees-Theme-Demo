<?php
/**
 * Theme setup, registered features, and front-end assets.
 *
 * @package Hamees_Working_Theme_Demo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme features after WordPress has loaded the theme.
 */
function hamees_demo_setup() {
	load_theme_textdomain( 'hamees-working-theme-demo', get_template_directory() . '/languages' );

	// WordPress generates the document title instead of requiring a hardcoded title tag.
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 260,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );

	/*
	 * Production travel-platform alignment: declare the approved WP Travel Engine classic
	 * template boundary without implementing or replacing plugin behaviour.
	 * This support flag is harmless when WP Travel Engine is not installed.
	 */
	add_theme_support( 'wptravelengine-templates' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'hamees-working-theme-demo' ),
			'footer'  => esc_html__( 'Footer Menu', 'hamees-working-theme-demo' ),
		)
	);
}
add_action( 'after_setup_theme', 'hamees_demo_setup' );

/**
 * Load theme assets through WordPress so URLs and cache versions stay correct.
 */
function hamees_demo_enqueue_assets() {
	$theme = wp_get_theme();

	wp_enqueue_style(
		'hamees-demo-style',
		get_stylesheet_uri(),
		array(),
		$theme->get( 'Version' )
	);

	wp_enqueue_script(
		'hamees-demo-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		$theme->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hamees_demo_enqueue_assets' );

/**
 * Register the demo's governed pattern category and a controlled button style.
 */
function hamees_demo_register_block_assets() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'hamees-demo',
			array( 'label' => esc_html__( 'Hamees Demo', 'hamees-working-theme-demo' ) )
		);
	}

	if ( function_exists( 'register_block_style' ) ) {
		register_block_style(
			'core/button',
			array(
				'name'  => 'outline',
				'label' => esc_html__( 'Outline', 'hamees-working-theme-demo' ),
			)
		);
	}
}
add_action( 'init', 'hamees_demo_register_block_assets' );

/**
 * Provide a useful fallback when no Primary Menu has been assigned yet.
 */
function hamees_demo_menu_fallback() {
	echo '<ul id="primary-menu" class="primary-menu">';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'hamees-working-theme-demo' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'Services', 'hamees-working-theme-demo' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#latest-posts' ) ) . '">' . esc_html__( 'Latest Posts', 'hamees-working-theme-demo' ) . '</a></li>';
	echo '</ul>';
}

/**
 * Provide a polished footer fallback when no Footer Menu is assigned.
 */
function hamees_demo_footer_menu_fallback() {
	echo '<nav aria-label="' . esc_attr__( 'Footer navigation', 'hamees-working-theme-demo' ) . '">';
	echo '<ul class="footer-menu">';
	echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">' . esc_html__( 'About', 'hamees-working-theme-demo' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/journal/' ) ) . '">' . esc_html__( 'Journal', 'hamees-working-theme-demo' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">' . esc_html__( 'Contact', 'hamees-working-theme-demo' ) . '</a></li>';
	echo '</ul>';
	echo '</nav>';
}

/**
 * Return a short, safe excerpt for cards.
 *
 * @param int $length Number of words.
 * @return string
 */
function hamees_demo_card_excerpt( $length = 18 ) {
	return wp_trim_words( get_the_excerpt(), $length, '&hellip;' );
}
