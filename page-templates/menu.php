<?php
/**
 * Template Name: Food & Drinks
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>
<div class="row">
	<div class="col-xs-12">
		<h1><?php the_title(); ?></h1>
		<p class="lead"><?php the_excerpt(); ?></p>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<h2>Drinks</h2>
		<p>Hand crafted cocktails, signature whiskeys and craft beers for the distinguished palettes. </p>

	</div>
</div>
<div class="row marg no-gutter">
	<div class="col-xs-12 col-sm-6 col-lg-3">
		<?php echo wp_get_attachment_image( cmb2_get_option( 'kitchen_options', 'kitchen_drinks_1_id' ), 'full', false, array( 'class' => "center-block attachment-full" ) ); ?>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-3">
		<?php echo wp_get_attachment_image( cmb2_get_option( 'kitchen_options', 'kitchen_drinks_2_id' ), 'full', false, array( 'class' => "center-block attachment-full" ) ); ?>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-3">
		<?php echo wp_get_attachment_image( cmb2_get_option( 'kitchen_options', 'kitchen_drinks_3_id' ), 'full', false, array( 'class' => "center-block attachment-full" ) ); ?>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-3">
		<?php echo wp_get_attachment_image( cmb2_get_option( 'kitchen_options', 'kitchen_drinks_4_id' ), 'full', false, array( 'class' => "center-block attachment-full" ) ); ?>
	</div>		
</div>

		<p>We are proudly serving Remy Martin; reserved distinctly for gentlemen. As Tulsa’s premier Gentlemen’s Club we consider it our duty to offer Louis XIII to the discerning liquor connoisseur.</p>

<div class="row">
	<div class="col-xs-12">
		<h2>Eats</h2>
		<p>Featuring a variety of food items to satisfy all types of hunger. Kitchen open till 1am.</p>
	</div>
</div>
<div class="row marg no-gutter">
	<div class="col-xs-12 col-md-6">
		<?php echo wp_get_attachment_image( cmb2_get_option( 'kitchen_options', 'kitchen_eats_1_id' ), 'full', false, array( 'class' => "center-block attachment-full" ) ); ?>
	</div>
	<div class="col-xs-12 col-md-6">
		<?php echo wp_get_attachment_image( cmb2_get_option( 'kitchen_options', 'kitchen_eats_2_id' ), 'full', false, array( 'class' => "center-block attachment-full" ) ); ?>
	</div>	
</div>
<div class="row marg">
	<div class="col-xs-12">
		<?php the_content(); ?>
	</div>	
</div>
<div class="row marg">
	<div class="col-xs-12">
		<div class="col-xs-12">
			<?php get_template_part( 'content-blocks/callout_promodays-horizontal' ); ?>
		</div>
	</div>	
</div>
<?php
get_template_part( 'content-blocks/subfooter_actions' );
get_template_part( 'content-blocks/subfooter_general' );
get_footer();