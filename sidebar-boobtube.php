<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package happyhour
 */

// if ( ! is_active_sidebar( 'sidebar-2' ) ) {
//	return;
// }
?>

<div id="secondary" class="widget-area row" role="complementary">

	<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 marg">
		<?php get_template_part( 'content-blocks/happyhour-vertical-img' ); ?>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 marg">
	  <?php 
		$tweet = esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_twitter_post' ) );
		echo wp_oembed_get( $tweet );
	  ?>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 marg">
		<img class="center-block" src="http://nighttrips.com/Tulsa/wp-content/uploads/2015/03/AsaAkiraTNTFB.jpg">
	</div>

	<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 marg">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 marg">
		<img class="center-block" src="http://nighttrips.com/Tulsa/wp-content/uploads/2014/04/pluxhtabletentfacebook.png">
	</div>		
</div><!-- #secondary -->
