<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// Venue microformats
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>

<div class="media event-simple card-one event-primary">
	<div class="media-header">
		<?php echo tribe_event_featured_image( null, 'full' ) ?>
		
	</div>
	<a class="media-left bkg-darker vcard" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>" rel="bookmark">
		<span class="day">day</span>
		<span class="date">23</span>
		<span class="month">month</span>
	</a>

	<a class="event-description url media-body bkg-darker description entry-summary" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>" rel="bookmark">
		<h4 class="media-heading"><?php the_title(); ?></h4>
		<?php the_excerpt(); ?>
	</a>
</div>
