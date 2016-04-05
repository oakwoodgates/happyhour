<?php
/**
 * List View Loop
 * This file sets up the structure for the list loop
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/loop.php
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php
global $post;
global $more;
$more = false;
?>

<div class="tribe-events-loop vcalendar">

	<?php 
	$i = 0;
//	if ( is_archive() ){
//		echo 'archive';
//	}
	while ( have_posts() ) : the_post(); ?>
		<?php $i++; ?>
		<?php do_action( 'tribe_events_inside_before_loop' ); ?>

		<!-- Month / Year Headers -->
		<?php // tribe_events_list_the_date_headers(); ?>

		<!-- Event  -->
		<?php
		$post_parent = '';
		if ( $post->post_parent ) {
			$post_parent = ' data-parent-post-id="' . absint( $post->post_parent ) . '"';
		}
		if ( $i > 1 ) {
			$class = 'type-tribe_events col-xs-12 col-sm-6';
		} else {
			$class = 'type-tribe_events col-xs-12';
		}
		?>
		<div class="<?php // tribe_events_event_classes() ?> <?php echo $class; ?>"  <?php hybrid_attr( 'event' ); ?><?php // echo $post_parent; ?>>
		
			<?php tribe_get_template_part( 'list/single', 'event' ) ?>
		</div><!-- .hentry .vevent -->
		<?php if ( $i & 1 ) : ?>
			<div class="clearfix"></div>
		<?php endif; ?>

		<?php // do_action( 'tribe_events_inside_after_loop' ); ?>

	<?php endwhile; ?>

</div><!-- .tribe-events-loop -->
