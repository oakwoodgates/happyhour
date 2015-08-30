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
		<h2>Come Visit</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>

	<div class="col-xs-12 col-md-6 marg">
		<?php get_template_part( 'content-blocks/map-iframe' ); ?>
	
	</div>
	<div class="col-xs-12 col-md-6 marg">
		<?php get_template_part( 'content-blocks/panel-clubinfo' ); ?>

	</div>
	<div class="col-xs-12 col-md-12 marg">
		<?php get_template_part( 'content-blocks/map-inside' ); ?>
	</div>	
</div>
<?php
get_template_part( 'content-blocks/subfooter-actions' );
get_footer();