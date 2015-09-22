<?php
/**
 * The sidebar for single blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package happyhour
 */
 
$tweet = esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_twitter_post' ) );
echo wp_oembed_get( $tweet );
