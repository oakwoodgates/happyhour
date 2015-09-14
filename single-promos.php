<?php
/**
 * The template for displaying all single "promos".
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package happyhour
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-md-8" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
			//	if ( comments_open() || get_comments_number() ) :
			//		comments_template();
			//	endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>

	</div><!-- #primary -->

<?php get_footer(); ?>