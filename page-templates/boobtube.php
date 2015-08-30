<?php
/**
 * Template Name: Boobtube
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>


<div class="row marg">
	<div class="col-xs-12">
		<h2>BoobTube</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>
</div>
<div class="row">
	<main id="main" class="site-main col-md-8" role="main">

		<div class="row">
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
				<div class="<?php echo $class; ?>">
					<div class="panel nt-featured-vid">
						<div class="panel-heading">
							<?php echo wp_oembed_get( $video ); ?>
						</div>
						<div class="panel-body">
							<h4 class="media-heading"><?php echo $title; ?></h4>
							<?php echo $desc; ?>
						</div>
					</div>	
				</div>

				<?php 

				$count = $count + 1;
			}
			?>
		</div>
	</main>
	<div class="col-md-4">
		<?php get_sidebar('boobtube'); ?>
	</div>
</div>

<?php
get_template_part( 'content-blocks/subfooter-general' );
get_footer();