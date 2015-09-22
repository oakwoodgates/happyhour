<?php
/**
 * The sidebar for single blog posts
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
		<?php get_template_part( 'content-blocks/happyhour_vertimg' ); ?>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 marg">
		<?php get_template_part( 'content-blocks/callout_drinkspecial-card' ); ?>
		<?php get_template_part( 'content-blocks/callout_promodays-list' ); ?>
	</div>	
	<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 marg">
		<?php get_template_part( 'content-blocks/callout_tweet' ); ?>
	</div>		
</div><!-- #secondary -->