<?php
/**
 * List View Content Template
 * The content template for the list view. This template is also used for
 * the response that is returned on list view ajax requests.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/content.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<div id="tribe-events-content" class="tribe-events-list row marg">

	<!-- List Title -->
<div class="row marg">
	<div class="col-xs-12">
		<h1><?php echo tribe_get_events_title() ?></h1>
		<p class="lead">yada yada</p>
	</div>
</div>	

	<!-- Notices -->
	<?php tribe_events_the_notices() ?>

	<!-- List Header -->
	<?php do_action( 'tribe_events_before_header' ); ?>
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>

		<!-- Header Navigation -->
		<?php do_action( 'tribe_events_before_header_nav' ); ?>
		<?php tribe_get_template_part( 'list/nav', 'header' ); ?>
		<?php do_action( 'tribe_events_after_header_nav' ); ?>

	</div>
	<!-- #tribe-events-header -->
	<?php do_action( 'tribe_events_after_header' ); ?>

<div class="row">
	<div class="col-xs-12">
		<div class="col-xs-12 col-sm-8">		
			<div class="row no-gutter">
			<!-- Events Loop -->
			<?php if ( have_posts() ) : ?>
				<?php do_action( 'tribe_events_before_loop' ); ?>
				<?php tribe_get_template_part( 'list/loop' ) ?>
				<?php do_action( 'tribe_events_after_loop' ); ?>
			<?php endif; ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4 event-column-one">
			<div class="row no-gutter">
				<div class="col-xs-12">
					<?php get_template_part( 'content-blocks/happyhour-vertical-img' ); ?>
					<?php get_template_part( 'content-blocks/promos' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<!-- List Footer -->
		<?php do_action( 'tribe_events_before_footer' ); ?>
		<div id="tribe-events-footer">

			<!-- Footer Navigation -->
			<?php do_action( 'tribe_events_before_footer_nav' ); ?>
			<?php tribe_get_template_part( 'list/nav', 'footer' ); ?>
			<?php do_action( 'tribe_events_after_footer_nav' ); ?>

		</div>
		<!-- #tribe-events-footer -->
		<?php do_action( 'tribe_events_after_footer' ) ?>
	</div>
</div>	


</div><!-- #tribe-events-content -->

<?php
get_template_part( 'content-blocks/subfooter-general' );