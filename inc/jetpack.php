<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package happyhour
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function happyhour_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'happyhour_infinite_scroll_render',
		'footer'    => false,
	) );
} // end function happyhour_jetpack_setup
add_action( 'after_setup_theme', 'happyhour_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function happyhour_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function happyhour_infinite_scroll_render

// run jetpack in dev mode for now
// add_filter( 'jetpack_development_mode', '__return_true' );

/*
 * JetPack logo ftw
 */

add_theme_support( 'site-logo', array(
    'size' => 'full',
) );

function jptweak_remove_share() {
    remove_filter( 'the_excerpt', 'sharing_display',19 );
}
 
add_action( 'loop_start', 'jptweak_remove_share' );