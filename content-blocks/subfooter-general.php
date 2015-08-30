<?php
/**
 * Map, Contact, Info content block for most pages
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<div class="row marg">
	<div class="col-xs-12">
		<h2>Come Visit</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>
	<div class="col-xs-12 col-md-6 marg">
		<?php get_template_part( 'content-blocks/map-iframe' ); ?>
	</div>
	<div class="col-xs-12 col-md-6">
		<?php get_template_part( 'content-blocks/panel-clubinfo' ); ?>

	</div>
</div>