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
		<h1><?php the_title(); ?></h1>
		<p class="lead"><?php the_excerpt(); ?></p>
	</div>
</div>
<div class="row marg">
	<div class="col-xs-12 col-md-8">
		<div class="panel nt-featured-vid">
			<div class="panel-heading">
			  <?php 
				$video = esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_home_youtube' ) );
				echo wp_oembed_get( $video );
			  ?>
			</div>
			<div class="panel-body">
				<h4 class="media-heading">Media heading</h4>
				Cras sit amet nibh libero, in gravida nulla.
			</div>
		</div>						
	</div>
	<div class="col-xs-12 col-md-4">
		<?php get_template_part( 'content-blocks/happyhour-vertical-img' ); ?>

	</div>
</div>