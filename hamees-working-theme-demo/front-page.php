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
					<p class="eyebrow"><?php esc_html_e( 'Thoughtful small-group travel', 'hamees-working-theme-demo' ); ?></p>
					<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
					<p class="lead"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
					<a class="button" href="#about"><?php esc_html_e( 'Explore our approach', 'hamees-working-theme-demo' ); ?></a>
				</div>
			</section>

			<section id="about" class="section">
				<div class="container intro-layout">
					<div>
						<p class="eyebrow"><?php esc_html_e( 'Who we are', 'hamees-working-theme-demo' ); ?></p>
						<h2><?php esc_html_e( 'Journeys planned with care, context, and pace', 'hamees-working-theme-demo' ); ?></h2>
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
						<p class="eyebrow"><?php esc_html_e( 'What we plan', 'hamees-working-theme-demo' ); ?></p>
						<h2><?php esc_html_e( 'Travel support from first idea to final details', 'hamees-working-theme-demo' ); ?></h2>
					</div>
					<div class="services-grid">
						<article class="service-card">
							<span class="service-number">01</span>
							<h3><?php esc_html_e( 'Cultural Journeys', 'hamees-working-theme-demo' ); ?></h3>
							<p><?php esc_html_e( 'Thoughtful routes shaped around place, people, local knowledge, and meaningful time on the ground.', 'hamees-working-theme-demo' ); ?></p>
						</article>
						<article class="service-card">
							<span class="service-number">02</span>
							<h3><?php esc_html_e( 'Tailored Itineraries', 'hamees-working-theme-demo' ); ?></h3>
							<p><?php esc_html_e( 'Clear day-by-day planning for travelers who want structure without losing room to explore.', 'hamees-working-theme-demo' ); ?></p>
						</article>
						<article class="service-card">
							<span class="service-number">03</span>
							<h3><?php esc_html_e( 'Responsible Travel', 'hamees-working-theme-demo' ); ?></h3>
							<p><?php esc_html_e( 'Smaller groups, realistic pacing, and practical guidance that helps each journey feel considered.', 'hamees-working-theme-demo' ); ?></p>
						</article>
					</div>
				</div>
			</section>

			<section id="latest-posts" class="section">
				<div class="container">
					<div class="section-heading">
						<p class="eyebrow"><?php esc_html_e( 'From the journal', 'hamees-working-theme-demo' ); ?></p>
						<h2><?php esc_html_e( 'Travel notes and planning ideas', 'hamees-working-theme-demo' ); ?></h2>
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
							<p class="empty-notice"><?php esc_html_e( 'Travel stories will appear here soon.', 'hamees-working-theme-demo' ); ?></p>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</section>

			<section class="section cta">
				<div class="container cta-inner">
					<div>
						<h2><?php esc_html_e( 'Ready to plan a more meaningful journey?', 'hamees-working-theme-demo' ); ?></h2>
						<p><?php esc_html_e( 'Tell us where you want to go, and we will help shape a thoughtful route around it.', 'hamees-working-theme-demo' ); ?></p>
					</div>
					<a class="button button--light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start planning', 'hamees-working-theme-demo' ); ?></a>
				</div>
			</section>
		</main>
		<?php
	endwhile;
endif;

get_footer();
