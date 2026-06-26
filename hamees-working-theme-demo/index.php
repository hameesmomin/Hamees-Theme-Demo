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
		<header class="listing-header">
			<p class="eyebrow"><?php esc_html_e( 'Journal', 'hamees-working-theme-demo' ); ?></p>
			<h1 class="page-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
			<p class="listing-header__summary"><?php esc_html_e( 'Stories, planning notes, and practical guidance for more thoughtful journeys.', 'hamees-working-theme-demo' ); ?></p>
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
							<p class="post-card__excerpt"><?php echo wp_kses_post( hamees_demo_card_excerpt( 25 ) ); ?></p>
							<a class="text-link" href="<?php the_permalink(); ?>">
								<?php esc_html_e( 'Read article', 'hamees-working-theme-demo' ); ?> &rarr;
							</a>
						</div>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<div class="empty-notice">
					<h2><?php esc_html_e( 'No posts found.', 'hamees-working-theme-demo' ); ?></h2>
					<p><?php esc_html_e( 'Travel stories will appear here soon.', 'hamees-working-theme-demo' ); ?></p>
				</div>
			<?php endif; ?>
		</div>
		<?php the_posts_pagination(); ?>
	</div>
</main>
<?php get_footer(); ?>
