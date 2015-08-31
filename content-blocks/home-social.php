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

			<div class="col-xs-12 col-sm-6">
				<div class="twitter-box">
				  <?php 
					$tweet = esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_twitter_post' ) );
					echo wp_oembed_get( $tweet );
				  ?>				
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<img data-src="holder.js/400x200?text=4-way Follow Box.">
			</div>			
		</div>		
	</div>	
</div>
