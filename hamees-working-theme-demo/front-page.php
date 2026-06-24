<?php
/**
 * Static front page template.
 *
 * The assigned page title and content power the hero and introduction, proving
 * that the homepage remains editable through the normal WordPress page editor.
 *
 * @package Hamees_Working_Theme_Demo
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<main id="primary-content" class="site-main">
			<section class="hero">
				<div class="container hero-content">
					<p class="eyebrow"><?php esc_html_e( 'Custom WordPress Development', 'hamees-working-theme-demo' ); ?></p>
					<h1><?php the_title(); ?></h1>
					<p class="lead"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
					<a class="button" href="#about"><?php esc_html_e( 'Explore the demo', 'hamees-working-theme-demo' ); ?></a>
				</div>
			</section>

			<section id="about" class="section">
				<div class="container intro-layout">
					<div>
						<p class="eyebrow"><?php esc_html_e( 'Editable in WordPress', 'hamees-working-theme-demo' ); ?></p>
						<h2><?php esc_html_e( 'A real theme, not static HTML', 'hamees-working-theme-demo' ); ?></h2>
					</div>
					<div class="entry-content">
						<?php
						// the_content() is filtered by WordPress and supports blocks from the page editor.
						the_content();
						?>
					</div>
				</div>
			</section>

			<section id="services" class="section section--muted">
				<div class="container">
					<div class="section-heading">
						<p class="eyebrow"><?php esc_html_e( 'Capabilities', 'hamees-working-theme-demo' ); ?></p>
						<h2><?php esc_html_e( 'Practical WordPress development', 'hamees-working-theme-demo' ); ?></h2>
					</div>
					<div class="services-grid">
						<article class="service-card">
							<span class="service-number">01</span>
							<h3><?php esc_html_e( 'Custom Theme Development', 'hamees-working-theme-demo' ); ?></h3>
							<p><?php esc_html_e( 'Purpose-built PHP templates using the WordPress template hierarchy and native APIs.', 'hamees-working-theme-demo' ); ?></p>
						</article>
						<article class="service-card">
							<span class="service-number">02</span>
							<h3><?php esc_html_e( 'Responsive Frontend', 'hamees-working-theme-demo' ); ?></h3>
							<p><?php esc_html_e( 'Accessible layouts that adapt cleanly across desktop, tablet, and mobile screens.', 'hamees-working-theme-demo' ); ?></p>
						</article>
						<article class="service-card">
							<span class="service-number">03</span>
							<h3><?php esc_html_e( 'Editor-Friendly Content', 'hamees-working-theme-demo' ); ?></h3>
							<p><?php esc_html_e( 'Content remains manageable through familiar WordPress pages, posts, menus, and media.', 'hamees-working-theme-demo' ); ?></p>
						</article>
					</div>
				</div>
			</section>

			<section id="latest-posts" class="section">
				<div class="container">
					<div class="section-heading">
						<p class="eyebrow"><?php esc_html_e( 'From the blog', 'hamees-working-theme-demo' ); ?></p>
						<h2><?php esc_html_e( 'Latest news and insights', 'hamees-working-theme-demo' ); ?></h2>
					</div>
					<div class="posts-grid">
						<?php
						$latest_posts = new WP_Query(
							array(
								'post_type'           => 'post',
								'posts_per_page'      => 3,
								'ignore_sticky_posts' => true,
							)
						);

						if ( $latest_posts->have_posts() ) :
							while ( $latest_posts->have_posts() ) :
								$latest_posts->the_post();
								?>
								<article <?php post_class( 'post-card' ); ?>>
									<?php if ( has_post_thumbnail() ) : ?>
										<a class="post-card__image" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1"><?php the_post_thumbnail( 'medium_large' ); ?></a>
									<?php endif; ?>
									<div class="post-card__body">
										<p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></p>
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<p class="post-card__excerpt"><?php echo wp_kses_post( hamees_demo_card_excerpt() ); ?></p>
										<a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read article', 'hamees-working-theme-demo' ); ?> &rarr;</a>
									</div>
								</article>
								<?php
							endwhile;
						else :
							?>
							<p class="empty-notice"><?php esc_html_e( 'Publish a few posts and they will appear here automatically.', 'hamees-working-theme-demo' ); ?></p>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</section>

			<section class="section cta">
				<div class="container cta-inner">
					<div>
						<h2><?php esc_html_e( 'Need a focused WordPress solution?', 'hamees-working-theme-demo' ); ?></h2>
						<p><?php esc_html_e( 'Let us turn the requirements into a fast, maintainable website.', 'hamees-working-theme-demo' ); ?></p>
					</div>
					<a class="button button--light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start a conversation', 'hamees-working-theme-demo' ); ?></a>
				</div>
			</section>
		</main>
		<?php
	endwhile;
endif;

get_footer();
