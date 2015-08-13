<?php
add_action( 'cmb2_init', 'cmb2_add_metabox' );
function cmb2_add_metabox() {
	$prefix = '_happyhour_';
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Metabox Title', 'happyhour' ),
		'object_types' => array( 'page'),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$group_field_id = $cmb->add_field( array(
	    'id'          => 'wiki_test_repeat_group',
	    'type'        => 'group',
	    'description' => __( 'Generates reusable form entries', 'cmb' ),
	    'options'     => array(
	        'group_title'   => __( 'Entry {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
	        'add_button'    => __( 'Add Another Entry', 'cmb' ),
	        'remove_button' => __( 'Remove Entry', 'cmb' ),
	        'sortable'      => true, // beta
	    ),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb->add_group_field( $group_field_id, array(
	    'name' => 'oEmbed',
	    'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
	    'id'   => 'wiki_test_embed',
	    'type' => 'oembed',
	) );
	$cmb->add_group_field( $group_field_id, array(
	    'name' => 'Entry Title',
	    'id'   => 'title',
	    'type' => 'text',
	    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );	

}