<?php
/**
 * Single Event Meta (Details) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/details.php
 *
 * @package TribeEventsCalendar
 */


$time_format = get_option( 'time_format', Tribe__Events__Date_Utils::TIMEFORMAT );
$time_range_separator = tribe_get_option( 'timeRangeSeparator', ' - ' );

$start_datetime = tribe_get_start_date();
$start_date = tribe_get_start_date( null, false );
$start_time = tribe_get_start_date( null, false, $time_format );
$start_ts = tribe_get_start_date( null, false, Tribe__Events__Date_Utils::DBDATEFORMAT );

$end_datetime = tribe_get_end_date();
$end_date = tribe_get_end_date( null, false );
$end_time = tribe_get_end_date( null, false, $time_format );
$end_ts = tribe_get_end_date( null, false, Tribe__Events__Date_Utils::DBDATEFORMAT );

$cost = tribe_get_formatted_cost();
$website = tribe_get_event_website_link();
?>

<div class="col-xs-12 col-sm-6 col-md-3">
	<h3 class="tribe-events-single-section-title"> <?php esc_html_e( 'Details', 'tribe-events-calendar' ) ?> </h3>
	<dl>

		<?php
		do_action( 'tribe_events_single_meta_details_section_start' );

		// All day (multiday) events
		if ( tribe_event_is_all_day() && tribe_event_is_multiday() ) :
			?>

			<dt> <?php esc_html_e( 'Start:', 'tribe-events-calendar' ) ?> </dt>
			<dd>
				<abbr class="tribe-events-abbr updated published dtstart" itemprop="startDate" content="<?php echo tribe_get_start_date( null, false, 'c' ); ?> "title="<?php esc_attr_e( $start_ts ) ?>"> <?php esc_html_e( $start_date ) ?> </abbr>
			</dd><br />

			<dt> <?php esc_html_e( 'End:', 'tribe-events-calendar' ) ?> </dt>
			<dd>
				<abbr class="tribe-events-abbr dtend" title="<?php esc_attr_e( $end_ts ) ?>"> <?php esc_html_e( $end_date ) ?> </abbr>
			</dd><br />

		<?php
		// All day (single day) events
		elseif ( tribe_event_is_all_day() ):
			?>

			<dt> <?php esc_html_e( 'Date:', 'tribe-events-calendar' ) ?> </dt>
			<dd>
				<abbr class="tribe-events-abbr updated published dtstart" itemprop="startDate" content="<?php echo tribe_get_start_date( null, false, 'c' ); ?>" title="<?php esc_attr_e( $start_ts ) ?>"> <?php esc_html_e( $start_date ) ?> </abbr>
			</dd><br />

		<?php
		// Multiday events
		elseif ( tribe_event_is_multiday() ) :
			?>

			<dt> <?php esc_html_e( 'Start:', 'tribe-events-calendar' ) ?> </dt>
			<dd>
				<abbr class="tribe-events-abbr updated published dtstart" title="<?php esc_attr_e( $start_ts ) ?>" itemprop="startDate" content="<?php echo tribe_get_start_date( null, false, 'c' ); ?>"> <?php esc_html_e( $start_datetime ) ?> </abbr>
			</dd><br />

			<dt> <?php esc_html_e( 'End:', 'tribe-events-calendar' ) ?> </dt>
			<dd>
				<abbr class="tribe-events-abbr dtend" title="<?php esc_attr_e( $end_ts ) ?>"> <?php esc_html_e( $end_datetime ) ?> </abbr>
			</dd><br />

		<?php
		// Single day events
		else :
			?>

			<dt> <?php esc_html_e( 'Date:', 'tribe-events-calendar' ) ?> </dt>
			<dd>
				<abbr class="tribe-events-abbr updated published dtstart" title="<?php esc_attr_e( $start_ts ) ?>" itemprop="startDate" content="<?php echo tribe_get_start_date( null, false, 'c' ); ?>"> <?php esc_html_e( $start_date ) ?> </abbr>
			</dd><br />

			<dt> <?php esc_html_e( 'Time:', 'tribe-events-calendar' ) ?> </dt>
			<dd><abbr class="tribe-events-abbr updated published dtstart" title="<?php esc_attr_e( $end_ts ) ?>">
					<?php if ( $start_time == $end_time ) {
						esc_html_e( $start_time );
					} else {
						esc_html_e( $start_time . $time_range_separator . $end_time );
					} ?>
				</abbr></dd><br />

		<?php endif ?>

		<?php
		// Event Cost
		if ( ! empty( $cost ) ) : ?>

			<dt> <?php esc_html_e( 'Cost:', 'tribe-events-calendar' ) ?> </dt>
			<dd class="tribe-events-event-cost"> <?php esc_html_e( $cost ); ?> </dd><br />
		<?php endif ?>

		<?php
		// Event Website
		if ( ! empty( $website ) ) : ?>

			<dt> <?php esc_html_e( 'Website:', 'tribe-events-calendar' ) ?> </dt>
			<dd class="tribe-events-event-url"> <?php echo $website; ?> </dd><br />
		<?php endif ?>

		<?php do_action( 'tribe_events_single_meta_details_section_end' ) ?>
	</dl>
</div>
