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
$event = get_post( get_the_id() );

$location = cmb2_get_option( 'happyhour_status', 'happyhour_status_location_post' );
$name = get_post_meta( $location, '_jsg4u_general_name', true );
$url = get_post_meta( $location, '_jsg4u_general_url', true );		
$streetAddress = get_post_meta( $location, '_jsg4u_location_streetaddress', true );
$addressLocality = get_post_meta( $location, '_jsg4u_location_addresslocality', true );
$addressRegion = get_post_meta( $location, '_jsg4u_location_addressregion', true );
$postalCode = get_post_meta( $location, '_jsg4u_location_postalcode', true );
?>

<div class="media event-simple card-one event-primary">
	<div class="media-header">
		<?php echo tribe_event_featured_image( null, 'full' ) ?>
		
	</div>
	<a class="media-left bkg-darker vcard" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>" rel="bookmark">
		<meta itemprop="startDate" content="<?php echo tribe_get_start_date( $event, false, 'c' ) ?>">
		<span class="day"><?php echo tribe_get_start_date( $event, false, 'D' ) ?></span>
		<span class="date"><?php echo tribe_get_start_date( $event, false, 'j' ) ?></span>
		<span class="month"><?php echo tribe_get_start_date( $event, false, 'M' ) ?></span>
		<span itemprop="location" itemscope itemtype="http://schema.org/NightClub">
			<meta itemprop="url" content="<?php echo $url; ?>">
			<meta itemprop="name" content="<?php echo $name; ?>">
			<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			  <meta itemprop="streetAddress" content="<?php echo $streetAddress; ?>">
			  <meta itemprop="addressLocality" content="<?php echo $addressLocality; ?>">
			  <meta itemprop="addressRegion" content="<?php echo $addressRegion; ?>">
			  <meta itemprop="postalCode" content="<?php echo $postalCode; ?>">
			</span>
		</span>		
	</a>

	<a itemprop="url" class="event-description url media-body bkg-darker description entry-summary" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>" rel="bookmark">
		<h4 itemprop="name" class="media-heading"><?php the_title(); ?></h4>
		<span itemprop="description"><?php the_excerpt(); ?></span>
	</a>
</div>
