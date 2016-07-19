<?php
/**
 * Venue Metaboxes
 *
 * @package     Oakwood meets happyhour
 * @subpackage  CMB2
 * @copyright   Copyright (c) 2015, OakwoodGates
 * @license     GPL-2.0+
 * @link        https://github.com/oakwoodgates/
 * @see  		https://github.com/WebDevStudios/CMB2-Snippet-Library CMB2 Snippet Library
 * @see 		https://github.com/WebDevStudios/CMB2/wiki CMB2 Wiki
 * @since       1.0.0
 */

add_action( 'cmb2_admin_init', 'happyhour_venue_meta' );
function happyhour_venue_meta() {

	$prefix = '_happyhour_venue_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'hours',
		'title'        => __( 'Club Hours', 'happyhour' ),
		'object_types' => array( 'tribe_venue' ),
		'context'      => 'side',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Mon-Fri Open', 'happyhour' ),
		'id' => $prefix . 'week_open',
		'type' => 'text_time',
	) );

	$cmb->add_field( array(
		'name' => __( 'Saturday Open', 'happyhour' ),
		'id' => $prefix . 'sat_open',
		'type' => 'text_time',
	) );

	$cmb->add_field( array(
		'name' => __( 'Sunday Open', 'happyhour' ),
		'id' => $prefix . 'sun_open',
		'type' => 'text_time',
	) );

	$cmb->add_field( array(
		'name' => __( 'Club Close', 'happyhour' ),
		'id' => $prefix . 'club_close',
		'type' => 'text_time',
	) );

}

add_action( 'cmb2_admin_init', 'happyhour_social_meta' );
function happyhour_social_meta() {

	$prefix = '_happyhour_venue_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Holiday &amp; Special Hours', 'happyhour' ),
		'object_types' => array( 'tribe_venue' ),
	//	'context'      => 'side',
		'priority'     => 'default',
	) );

	// Set our CMB2 fields
	$group_field_id = $cmb->add_field( array(
	    'id'          => $prefix . 'special_hours',
	    'type'        => 'group',
	    'description' => __( 'Add special and holiday hours, etc', 'cmb' ),
	    'options'     => array(
	        'group_title'   => __( 'Day {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
	        'add_button'    => __( 'Add Another Day', 'cmb' ),
	        'remove_button' => __( 'Remove Day', 'cmb' ),
	        'sortable'      => true, // beta
	    ),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Title', 'happyhour' ),
		'id' => 'title',
		'type' => 'text',
		'desc' => __( 'ex: Labor Day', 'happyhour' ),
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Date from', 'happyhour' ),
		'id' => 'datefrom',
		'type' => 'text_date',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Date until', 'happyhour' ),
		'id' => 'dateto',
		'type' => 'text_date',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Open Time', 'happyhour' ),
		'id' => 'open',
		'type' => 'text_time',
	//	'time_format' => 'c'
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Close Time', 'happyhour' ),
		'id' => 'close',
		'type' => 'text_time',
	//	'time_format' => 'c'

	) );
}