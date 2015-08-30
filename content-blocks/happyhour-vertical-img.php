<?php
/**
 * Happy Hour vertical image
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<!-- <img
	src="<?php // echo esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_happy_hour_vertical' ) ); ?>"
	class="center-block"
	title="Happy Hour"
	alt="Happy Hour Monday thru Friday from 4-7pm"
> -->
<?php
echo wp_get_attachment_image( cmb2_get_option( 'happyhour_options', 'happyhour_happy_hour_vertical_id' ), 'full', false, array( 'class'	=> "center-block attachment-full" ) );
