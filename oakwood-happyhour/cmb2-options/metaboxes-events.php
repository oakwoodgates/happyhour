<?php
/**
 * Events Metaboxes
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

add_action( 'cmb2_init', 'happyhour_event_meta' );
function happyhour_event_meta() {

	$prefix = '_happyhour_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Extra Media', 'happyhour' ),
		'object_types' => array( 'tribe_events' ),
		'context'      => 'side',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Event Promo Video', 'happyhour' ),
		'id' => $prefix . 'event_video',
		'type' => 'text',
		'desc' => __( 'Paste a YouTube video here', 'happyhour' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Vertical Event Image', 'happyhour' ),
		'id' => $prefix . 'event_vertical_image',
		'type' => 'file',
	) );

}