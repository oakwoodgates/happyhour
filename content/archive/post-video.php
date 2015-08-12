<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package happyhour
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		// Display a video if we have one.
		echo $video = hybrid_media_grabber(
			array(
				'type'        => 'video',
				'split_media' => true,
				'before'      => '<div class="featured-media video">',
				'after'       => '</div>',
			)
		);
		?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php // happyhour_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_excerpt() ) : // If the post has an excerpt. ?>

		<div <?php hybrid_attr( 'entry-summary' ); ?>>
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

	<?php elseif ( empty( $video ) ) : // Else, if the post does not have a video. ?>

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
		</div><!-- .entry-content -->

	<?php endif; // End excerpt/video checks. ?>

	<footer class="entry-footer">
		<?php // happyhour_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
