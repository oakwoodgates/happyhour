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
		<p class="lead">We are a short distance from the Tulsa International Airport, downtown Tulsa and the BOK Center.</p>
	</div>
	<div class="col-xs-12 col-md-6 marg">
		<?php get_template_part( 'content-blocks/callout_map' ); ?>
	</div>
	<div class="col-xs-12 col-md-6">
		<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'callout_clubinfo' ); ?>
	</div>
</div>