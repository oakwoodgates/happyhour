<?php
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Promos', 'Post Type General Name', 'happyhour' ),
		'singular_name'       => _x( 'Promo', 'Post Type Singular Name', 'happyhour' ),
		'menu_name'           => __( 'Promos', 'happyhour' ),
		'name_admin_bar'      => __( 'Promos', 'happyhour' ),
		'parent_item_colon'   => __( 'Parent Item:', 'happyhour' ),
		'all_items'           => __( 'All Items', 'happyhour' ),
		'add_new_item'        => __( 'Add New Item', 'happyhour' ),
		'add_new'             => __( 'Add New', 'happyhour' ),
		'new_item'            => __( 'New Item', 'happyhour' ),
		'edit_item'           => __( 'Edit Item', 'happyhour' ),
		'update_item'         => __( 'Update Item', 'happyhour' ),
		'view_item'           => __( 'View Item', 'happyhour' ),
		'search_items'        => __( 'Search Item', 'happyhour' ),
		'not_found'           => __( 'Not found', 'happyhour' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'happyhour' ),
	);
	$rewrite = array(
		'slug'                => 'promo',
		'with_front'          => false,
		'pages'               => false,
		'feeds'               => false,
	);
	$args = array(
		'label'               => __( 'Promo', 'happyhour' ),
		'description'         => __( 'Recurring, weekly events', 'happyhour' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		// 'menu_icon'           => 'dashicons-list-view',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'promos', $args );

}
add_action( 'init', 'custom_post_type', 0 );