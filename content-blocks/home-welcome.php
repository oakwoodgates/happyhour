<?php
/**
 * Top welcome content block for home page
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<div class="row marg">
	<div class="col-xs-12">
		<img data-src="holder.js/1140x315?bg=684190&fg=ffffff">
	</div>
</div>
<div class="row marg">
	<div class="col-xs-12 text-center">
		<h1>Welcome and such</h1>
		<p class="lead">lions, tigers, and bears; oh my</p>
	</div>
</div>
<div class="row marg">
	<div class="col-xs-12 col-md-8">
		<div class="panel nt-featured-vid">
			<div class="panel-heading">
				<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=8y3HUdkyUr4'); ?>
			</div>
			<div class="panel-body">
				<h4 class="media-heading">Media heading</h4>
				Cras sit amet nibh libero, in gravida nulla.
			</div>
		</div>						
	</div>
	<div class="col-xs-12 col-md-4">
		<img class="center-block" src="http://nighttrips.com/Tulsa/wp-content/uploads/2015/08/HappyHourOKCTableTent.jpg">
	</div>
</div>