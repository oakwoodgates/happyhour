<?php
/**
 * Social content block for home page
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<div class="row marg">
	<div class="col-xs-12">
		<h2>Social Something</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>
	<div class="col-xs-12 col-md-5">
		<?php get_sidebar(); ?>
	</div>
	<div class="col-xs-12 col-md-7">
		<div class="row">
			<div class="col-xs-12">
				<div class="panel nt-featured-vid">
					<div class="panel-heading">
						<h5>Latest from the BoobTube &hellip;</h5>
						<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=HJAzpr3YXTI'); ?>
					</div>
					<div class="panel-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla.
					</div>
				</div>	
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="twitter-box">
					<?php echo $embed_code = wp_oembed_get('https://twitter.com/SamuelLJackson/status/619826409104613376'); ?>
				<!--	<div id="funk"></div>
					<div id="twitter-wjs"></div> -->
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<img data-src="holder.js/400x200?text=4-way Follow Box.">
			</div>			
		</div>		
	</div>	
</div>
