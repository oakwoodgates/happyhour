<?php
/**
 * Template Name: zDemo Playground
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();

/* Restore original Post Data */
// wp_reset_postdata();
// Ensure the global $post variable is in scope
// global $post;
 

// Retrieve the next event
$events = tribe_get_events( array(
    'posts_per_page' => 1,
 //   'start_date' => new DateTime()
    'start_date' => date("Y-m-d h:m", strtotime("YESTERDAY"))
) );
 
// Loop through the events: set up each one as
// the current post then use template tags to
// display the title and content
foreach ( $events as $nextevent ) {
    setup_postdata( $nextevent );
    // This time, let's throw in an event-specific
    // template tag to show the date after the title!
	$image = wp_get_attachment_image( get_post_meta( $nextevent->ID, '_happyhour_event_vertical_image_id', true ), 'full' );
	?>
	<a href="<?php echo the_permalink(); ?>"><?php echo $image; ?></a>

<?php }



get_footer();