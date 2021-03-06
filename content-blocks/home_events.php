<?php
/**
 * Events content block for home page
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<?php 
// Retrieve the next 3 events
$events = tribe_get_events( array(
    'posts_per_page' => 3,
//   'start_date' => new DateTime()
    'start_date' => date("Y-m-d h:m", strtotime("YESTERDAY"))
) );
$loop = 0;
if ($events) : ?>
<div class="row marg">
	<div class="col-xs-12">
		<h2>Only at Night Trips</h2>
		<p class="lead">Featuring top Porn Stars and exciting events</p>
	</div>
	<div class="col-xs-12">
		<div class="panel bkg-notblack pull-left">
			<div class="col-xs-12 col-md-8">		
				<div class="row no-gutter">
				<?php foreach ( $events as $event ) :

					$loop++;
				    setup_postdata( $event );
					$featuredimg = tribe_event_featured_image( $event->ID, 'full', false );    
					$link = get_permalink($event->ID);

					if ($loop == 1) : ?>
						<div class="col-xs-12">
							<div class="media event-simple card-one event-primary">
								<a itemprop="url" href="<?php echo $link; ?>" class="media-header">
									<?php echo $featuredimg; ?>
								</a>
								<a class="media-left bkg-darker vcard" href="<?php echo $link; ?>" title="<?php echo $event->post_title; ?>" rel="bookmark">
									<span class="day"><?php echo tribe_get_start_date( $event, false, 'D' ) ?></span>
									<span class="date"><?php echo tribe_get_start_date( $event, false, 'j' ) ?></span>
									<span class="month"><?php echo tribe_get_start_date( $event, false, 'M' ) ?></span>
								</a>
								<a class="event-description media-body bkg-darker" href="<?php echo $link; ?>" title="<?php echo $event->post_title; ?>" rel="bookmark">
									<h4 class="media-heading"><?php echo $event->post_title; ?></h4>
									<span><?php echo $event->post_excerpt; ?></span>
								</a>
							</div>
						</div>
					<?php else : ?>
						<div class="col-xs-12 col-sm-6">
							<div class="media event-simple card-one event-primary">
								<a itemprop="url" href="<?php echo $link; ?>" class="media-header">
									<?php echo $featuredimg; ?>
								</a>
								<a class="media-left bkg-darker vcard" href="<?php echo $link; ?>" title="<?php echo $event->post_title; ?>" rel="bookmark">
									<span class="day"><?php echo tribe_get_start_date( $event, false, 'D' ) ?></span>
									<span class="date" itemprop="startDate" content="<?php echo tribe_get_start_date( $event, false, 'c' ) ?>"><?php echo tribe_get_start_date( $event, false, 'j' ) ?></span>
									<span class="month"><?php echo tribe_get_start_date( $event, false, 'M' ) ?></span>
								</a>
								<a class="event-description media-body bkg-darker" href="<?php echo $link; ?>" title="<?php echo $event->post_title; ?>" rel="bookmark">
									<h4 class="media-heading"><?php echo $event->post_title; ?></h4>
									<span><?php echo $event->post_excerpt; ?></span>
								</a>
							</div>
						</div>

					<?php endif; ?>

				<?php endforeach; ?>
				</div><!-- row no-gutter -->
			</div>

			<?php 
			// Retrieve the next event
			$fourthevent = tribe_get_events( array(
			    'posts_per_page' => 1,
			//   'start_date' => new DateTime()
			    'start_date' => date("Y-m-d h:m", strtotime("YESTERDAY")),
			    'offset' => 3
			) );
			if ($fourthevent) : 
				$img = wp_get_attachment_image_src( get_post_meta( $fourthevent[0]->ID, '_happyhour_event_vertical_image_id', true ), 'full' );
				?>
			<div class="col-xs-12 col-md-4 event-column-one">
				<div class="row no-gutter">
					<div class="col-xs-12">
						<a href="<?php echo get_permalink($fourthevent[0]->ID); ?>">
				      		<img src="<?php echo $img[0]; ?>" class="center-block">
						</a>
				        <div class="jumbotron mini-jumbotron bkg-notblack">
				          <h4>Upcoming Events</h4>
				          <p class="info">There is always something happening at Night Trips.</p>
				          <p class="action text-right"><a class="btn btn-primary btn-lg" href="<?php echo esc_url( site_url( '/events/' ) ); ?>">See More</a></p>
				        </div>	      
					</div>
				</div>
			</div>

			<?php endif; ?>

		</div>
	</div>	
</div>
<?php endif; ?>
