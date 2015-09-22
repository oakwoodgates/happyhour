<?php 
// Retrieve the next event
$events = tribe_get_events( array(
    'posts_per_page' => 1,
//   'start_date' => new DateTime()
    'start_date' => date("Y-m-d h:m", strtotime("YESTERDAY"))
) );
 
foreach ( $events as $nextevent ) {
    setup_postdata( $nextevent );
	$image = wp_get_attachment_image( get_post_meta( $nextevent->ID, '_happyhour_event_vertical_image_id', true ), 'full' );
	?>
	<a href="<?php echo get_permalink($nextevent->ID); ?>"><?php echo $image; ?></a>

<?php }