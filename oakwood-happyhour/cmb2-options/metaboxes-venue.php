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

add_action( 'cmb2_init', 'happyhour_venue_meta' );
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