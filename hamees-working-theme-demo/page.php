<?php
/**
 * Standard page template.
 *
 * @package Hamees_Working_Theme_Demo
 */

get_header();
?>
<main id="primary-content" class="site-main content-area">
	<div class="container article-content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article <?php post_class(); ?>>
					<header class="entry-header"><h1 class="entry-title"><?php the_title(); ?></h1></header>
					<?php if ( has_post_thumbnail() ) : ?>
						<figure class="featured-image"><?php the_post_thumbnail( 'large' ); ?></figure>
					<?php endif; ?>
					<div class="entry-content"><?php the_content(); ?></div>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
