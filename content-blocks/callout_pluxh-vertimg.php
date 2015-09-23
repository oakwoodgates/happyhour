<?php
/**
 * Pluxh vertical image callout
 *
 * @author  WPguru4u
 * @package happyhour
 */
$pluxh = cmb2_get_option( 'happyhour_options', 'happyhour_vip_post' );
$pluxhimg = wp_get_attachment_image( cmb2_get_option( 'happyhour_options', 'happyhour_pluxh_image_id' ), 'full', false, array( 'class'	=> "center-block attachment-full" ) );
?>
<a href="<?php echo post_permalink( $pluxh ); ?>"><?php echo $pluxhimg; ?></a>

