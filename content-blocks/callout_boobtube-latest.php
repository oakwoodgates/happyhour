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
