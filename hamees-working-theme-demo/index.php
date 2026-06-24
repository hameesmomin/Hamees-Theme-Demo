<?php
/**
 * Main fallback template used by the WordPress template hierarchy.
 *
 * @package Hamees_Working_Theme_Demo
 */

get_header();
?>
<main id="primary-content" class="site-main content-area">
	<div class="container">
		<header class="page-header">
			<p class="eyebrow"><?php esc_html_e( 'Journal', 'hamees-working-theme-demo' ); ?></p>
			<h1 class="page-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
		</header>
		<div class="archive-grid">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<article <?php post_class( 'post-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="post-card__image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
						<?php endif; ?>
						<div class="post-card__body">
							<p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></p>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p><?php echo wp_kses_post( hamees_demo_card_excerpt( 25 ) ); ?></p>
						</div>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php esc_html_e( 'No posts found.', 'hamees-working-theme-demo' ); ?></p>
			<?php endif; ?>
		</div>
		<?php the_posts_pagination(); ?>
	</div>
</main>
<?php get_footer(); ?>
