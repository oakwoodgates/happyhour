<?php
/**
 * Happy Hour vertical image
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<?php
// echo wp_get_attachment_image( cmb2_get_option( 'happyhour_options', 'happyhour_happy_hour_vertical_id' ), 'full', false, array( 'class'	=> "center-block attachment-full" ) );

$happyhour = cmb2_get_option( 'happyhour_status', 'happyhour_status_happy_hour_post' );
?>
<a href="<?php echo post_permalink( $happyhour ); ?>"><?php echo get_the_post_thumbnail( $happyhour, 'full', array( 'class' => '"center-block attachment-full' ) ); ?></a>
