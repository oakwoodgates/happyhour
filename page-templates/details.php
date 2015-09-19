<?php
/**
 * Template Name: Details
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>
<div class="row marg">
	<div class="col-xs-12">
		<h1><?php the_title(); ?></h1>
		<p class="lead"><?php the_excerpt(); ?></p>
	</div>
</div>
<div class="row marg">
	<div class="col-xs-12 col-md-6 marg">
		<?php get_template_part( 'content-blocks/callout_map' ); ?>
	
	</div>
	<div class="col-xs-12 col-md-6 marg">
		<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'callout_clubinfo' ); ?>

	</div>
	<div class="col-xs-12 col-md-12 marg">
		<?php get_template_part( 'content-blocks/subfooter_inside' ); ?>
	</div>	
</div>
<div class="row marg">
	<div class="col-xs-12">
		<?php the_content(); ?>
	</div>	
</div>
<?php
get_template_part( 'content-blocks/subfooter_actions' );
get_footer();