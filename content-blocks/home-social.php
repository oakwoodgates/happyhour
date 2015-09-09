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
		<h2>Get Social With Us</h2>
		<p class="lead">We’re always entertaining on <a href="#">Facebook</a>, <a href="#">Twitter</a> and <a href="#">Youtube</a>. Like our drinks? Try them at home with our recipes on <a href="#">Pinterest</a>.</p>
	</div>
	<div class="col-xs-12 col-md-5">
		<?php get_sidebar(); ?>
	</div>

	<div class="col-xs-12 col-md-7">
		<div class="row">
			<div class="col-xs-12">
				<?php
				$entries = cmb2_get_option( 'boobtube_options', 'boobtube_group_videos' );
				$count = 1;
				$entries = array_reverse($entries);
				foreach ( (array) $entries as $key => $entry ) {

				    $title = $desc = $video = '';

				    if ( isset( $entry['boobtube_title'] ) )
				    $title = esc_html( $entry['boobtube_title'] );

				    if ( isset( $entry['boobtube_description'] ) )
				    $desc = esc_html( $entry['boobtube_description'] ); 

				    if ( isset( $entry['boobtube_single_video'] ) )
				    $video = esc_url( $entry['boobtube_single_video'] );

					if ( $count < 4 ) : 
						$class = 'col-xs-12';
					else :
						$class = 'col-xs-12 col-md-6';
					endif;

				?>
					<div class="panel nt-featured-vid">
						<div class="panel-heading">
							<h5>Latest from the BoobTube &hellip;</h5>
							<?php echo wp_oembed_get( $video ); ?>
						</div>
						<div class="panel-body">
							<h4 class="media-heading"><?php echo $title; ?></h4>
							<?php echo $desc; ?>
						</div>
					</div>	

				<?php 

					break;
				}
				?>
			</div>		

			<div class="col-xs-12 col-sm-7">

				<div class="twitter-box">
				  <?php 
					$tweet = esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_twitter_post' ) );
					echo wp_oembed_get( $tweet );
				  ?>				
				</div>

<div class="fb-page" data-href="https://www.facebook.com/nighttripstulsa" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/nighttripstulsa"><a href="https://www.facebook.com/nighttripstulsa">Night Trips Tulsa</a></blockquote></div></div>

			</div>
			<div class="col-xs-12 col-sm-5">
<a data-pin-do="embedPin" href="https://www.pinterest.com/pin/99360735500167749/"></a>
<!-- Please call pinit.js only once per page -->
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
			</div>			
		</div>		
	</div>	
</div>
