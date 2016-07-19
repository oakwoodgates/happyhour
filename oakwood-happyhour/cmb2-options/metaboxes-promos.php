<?php
/**
 * Weekly Events Metaboxes
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

add_action( 'cmb2_admin_init', 'happyhour_event_meta' );
function happyhour_event_meta() {

	$prefix = '_happyhour_promo_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Extra Media', 'happyhour' ),
		'object_types' => array( 'promos' ),
		'context'      => 'side',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Promo Video', 'happyhour' ),
		'id' => $prefix . 'video',
		'type' => 'text',
		'desc' => __( 'Paste a YouTube video here', 'happyhour' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Vertical Image', 'happyhour' ),
		'id' => $prefix . 'vertical_image',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Background Image', 'happyhour' ),
		'id' => $prefix . 'background_image',
		'type' => 'file',
	) );

}

add_action( 'cmb2_admin_init', 'happyhour_event_meta_2' );
function happyhour_event_meta_2() {

	$prefix = '_happyhour_promo_data_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Extra Data', 'happyhour' ),
		'object_types' => array( 'promos' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Start Time', 'happyhour' ),
		'id' => $prefix . 'start_time',
		'type' => 'text_time',
	) );

	$cmb->add_field( array(
		'name' => __( 'End Time', 'happyhour' ),
		'id' => $prefix . 'end_time',
		'type' => 'text_time',
	) );

	$cmb->add_field( array(
		'name' => __( 'All Day?', 'happyhour' ),
		'id' => $prefix . 'all_time',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'Start Date', 'happyhour' ),
		'id' => $prefix . 'start_date',
		'type' => 'text_date',
	) );

	$cmb->add_field( array(
		'name' => __( 'End Date', 'happyhour' ),
		'id' => $prefix . 'end_date',
		'type' => 'text_date',
	) );

	$cmb->add_field( array(
		'name' => __( 'Day', 'happyhour' ),
		'id' => $prefix . 'day',
		'type' => 'radio',
		'options' => array(
			'mon' => __( 'Monday', 'happyhour' ),
			'tue' => __( 'Tuesday', 'happyhour' ),
			'wed' => __( 'Wednesday', 'happyhour' ),
			'thu' => __( 'Thursday', 'happyhour' ),
			'fri' => __( 'Friday', 'happyhour' ),
			'sat' => __( 'Saturday', 'happyhour' ),
			'sun' => __( 'Sunday', 'happyhour' ),
			'wkd' => __( 'Mon-Fri', 'happyhour' ),
			'wkl' => __( 'All Week', 'happyhour' ),
			'mth' => __( 'All Month', 'happyhour' ),
		),
	) );

	$cmb->add_field( array(
		'name' => __( 'Cost', 'happyhour' ),
		'id' => $prefix . 'cost',
		'type' => 'text_money',
	) );

	$cmb->add_field( array(
		'name' => __( 'This is a...', 'happyhour' ),
		'id' => $prefix . 'what_am_i',
		'type' => 'radio',
		'options' => array(
			'1' => __( 'Happy Hour Promo', 'happyhour' ),
			'2' => __( 'Fluff Day', 'happyhour' ),
			'3' => __( 'Monthly Drink Special', 'happyhour' ),
		),
	) );

}