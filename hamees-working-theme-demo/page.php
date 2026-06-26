<?php
/**
 * Standard page template.
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
					<header class="page-hero">
						<?php
						$page_eyebrow = array(
							'about'        => __( 'Who we are', 'hamees-working-theme-demo' ),
							'destinations' => __( 'Where to go', 'hamees-working-theme-demo' ),
							'contact'      => __( 'Start planning', 'hamees-working-theme-demo' ),
						);
						?>
						<p class="eyebrow">
							<?php echo esc_html( $page_eyebrow[ get_post_field( 'post_name', get_the_ID() ) ] ?? __( 'Atlas Trail Studio', 'hamees-working-theme-demo' ) ); ?>
						</p>
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php if ( has_excerpt() ) : ?>
							<p class="page-hero__summary"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
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
