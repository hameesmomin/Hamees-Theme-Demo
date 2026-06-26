<?php
/**
 * Single post template.
 *
 * @package Hamees_Working_Theme_Demo
 */

get_header();
?>
<main id="primary-content" class="site-main content-area">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article <?php post_class(); ?>>
					<header class="article-hero">
						<p class="eyebrow"><?php esc_html_e( 'Article', 'hamees-working-theme-demo' ); ?></p>
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<p class="entry-meta">
							<?php
							printf(
								/* translators: 1: Date, 2: Author name. */
								esc_html__( 'Published %1$s by %2$s', 'hamees-working-theme-demo' ),
								esc_html( get_the_date() ),
								esc_html( get_the_author() )
							);
							?>
						</p>
						<?php if ( has_excerpt() ) : ?>
							<p class="article-hero__summary"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
						<?php endif; ?>
					</header>
					<?php if ( has_post_thumbnail() ) : ?>
						<figure class="featured-image"><?php the_post_thumbnail( 'large' ); ?></figure>
					<?php endif; ?>
					<div class="entry-content article-content"><?php the_content(); ?></div>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
