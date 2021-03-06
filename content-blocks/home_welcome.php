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
		<?php echo wp_get_attachment_image( cmb2_get_option( 'happyhour_options', 'happyhour_home_banner_id' ), 'full', false, array( 'class'	=> "center-block attachment-full" ) ); ?>
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
				<h4 class="media-heading"><?php echo esc_attr( cmb2_get_option( 'happyhour_options', 'happyhour_video_title' ) ); ?></h4>
				<?php echo esc_attr( cmb2_get_option( 'happyhour_options', 'happyhour_video_desc' ) ); ?>
			</div>
		</div>						
	</div>
	<div class="col-xs-12 col-md-4">
		<?php get_template_part( 'content-blocks/callout_happyhour-vertimg' ); ?>
	</div>
</div>