<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();
$event_id = get_the_ID();
$event = get_post( $event_id );
?>
<div class="row">
<div class="tribe-events-single event entry" itemscope itemtype="http://schema.org/Event">
	<div class="col-xs-12">

		<!-- Notices -->
		<?php tribe_events_the_notices() ?>

		<?php the_title( '<h1 class="tribe-events-single-event-title" itemprop="name">', '</h1>' ); ?>	
		<p class="lead"><?php echo $event->post_excerpt; // the_excerpt(); ?></p>

	</div>
	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
	$featuredimg = tribe_event_featured_image( $event_id, 'full', false );
	$vertimage = wp_get_attachment_image( get_post_meta( $event_id, '_happyhour_event_vertical_image_id', true ), 'full' );
	$video = esc_url( get_post_meta( $event_id, '_happyhour_event_video', true ) );

	if ( !empty( $video ) ) : ?>
		<div class="col-xs-12 col-md-6">
			<?php echo $vertimage; ?>
		</div>
		<div class="col-xs-12 col-md-6">
			<?php echo wp_oembed_get( $video ); ?>
		</div>
	<?php 
	else : ?>
		<div class="col-xs-12 col-md-12">
			<!-- Event featured image, but exclude link -->

			<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
		</div>
	<?php endif; ?>
			<!-- Event content -->
			<div class="col-xs-12 col-sm-12 col-md-6">
				<?php // do_action( 'tribe_events_single_event_before_the_content' ) ?>
				<div itemprop="description" class="tribe-events-single-event-description tribe-events-content entry-content description">
					<?php the_content(); ?>
				</div>
			</div>
			<!-- .tribe-events-single-event-description -->
			<?php // do_action( 'tribe_events_single_event_after_the_content' ) ?>

			<!-- Event meta -->
			<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php
			/**
			 * The tribe_events_single_event_meta() function has been deprecated and has been
			 * left in place only to help customers with existing meta factory customizations
			 * to transition: if you are one of those users, please review the new meta templates
			 * and make the switch!
			 */
			if ( ! apply_filters( 'tribe_events_single_event_meta_legacy_mode', false ) ) {
				tribe_get_template_part( 'modules/meta' );
			} else {
				echo tribe_events_single_event_meta();
			}
			?>
			<?php // do_action( 'tribe_events_single_event_after_the_meta' ) ?>
			
		</div> <!-- #post-x -->
		<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>

	<div class="col-xs-12 col-md-6 marg">
		<?php get_template_part( 'content-blocks/callout_map' ); ?>
	</div>
	<div class="col-xs-12 col-md-6">
		<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'callout_clubinfo' ); ?>
	</div>
	<!-- Event footer -->
	<div id="tribe-events-footer">
		<!-- Navigation -->
		<h3 class="tribe-events-visuallyhidden"><?php printf( __( '%s Navigation', 'tribe-events-calendar' ), $events_label_singular ); ?></h3>
		<ul class="tribe-events-sub-nav">
			<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
			<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
		</ul>
		<!-- .tribe-events-sub-nav -->
	</div>
	<!-- #tribe-events-footer -->


</div><!-- #tribe-events-content -->
</div>
<div class="row marg col-marg">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<?php get_template_part( 'content-blocks/callout_happyhour-vertimg' ); ?>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<?php get_template_part( 'content-blocks/callout_pluxh-vertimg' ); ?>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4 event-column-one">
		<?php get_template_part( 'content-blocks/callout_drinkspecial-card' ); ?>
		<?php get_template_part( 'content-blocks/callout_promodays-list' ); ?>
	</div>		
</div>
