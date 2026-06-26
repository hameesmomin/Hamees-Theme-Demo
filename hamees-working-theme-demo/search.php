<?php
/**
 * Search results template.
 *
 * @package Hamees_Working_Theme_Demo
 */

get_header();
?>
<main id="primary-content" class="site-main content-area">
	<div class="container">
		<header class="listing-header">
			<p class="eyebrow"><?php esc_html_e( 'Search', 'hamees-working-theme-demo' ); ?></p>
			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: Search query. */
					esc_html__( 'Search results for: %s', 'hamees-working-theme-demo' ),
					esc_html( get_search_query( false ) )
				);
				?>
			</h1>
		</header>

		<?php if ( have_posts() ) : ?>
			<div class="archive-grid">
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<article <?php post_class( 'post-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="post-card__image" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
								<?php the_post_thumbnail( 'medium_large' ); ?>
							</a>
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
			</div>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<div class="empty-notice">
				<h2><?php esc_html_e( 'No results found', 'hamees-working-theme-demo' ); ?></h2>
				<p><?php esc_html_e( 'Try a different search term or return to the homepage to continue browsing.', 'hamees-working-theme-demo' ); ?></p>
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'Return to homepage', 'hamees-working-theme-demo' ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
