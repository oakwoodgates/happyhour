<?php
/**
 * Map, Contact, Info content block for home page
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<div class="row marg">
	<div class="col-xs-12">
		<h2>Come Visit Us</h2>
		<p class="lead">Four stages, comfortable seating, LED bar and state of the art sound system and light show.</p>
	</div>
	<div class="col-xs-12 col-md-12 marg">
		<?php get_template_part( 'content-blocks/subfooter_inside' ); ?>
	</div>
	<div class="col-xs-12 col-md-6">
		<div id="map"></div>
	</div>
	<div class="col-xs-12 col-md-6">
		<?php get_template_part( 'content-blocks/' . tulsa_or_okc() .  'callout_clubinfo' ); ?>

	</div>
</div>