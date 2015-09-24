<?php
/**
 * Template Name: zDemo Playground
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>
<?php
$promos = cmb2_get_option( 'happyhour_weekly', 'happyhour_weekly_events_list' );
// The Query
$args = array(
    'post_type' => array( 'promos' ),
    'orderby' => 'post__in',
    'post__in' => $promos
);

// $loop = new WP_Query( $args );
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) { ?>

<div class="row no-gutter event-column-one">
<div class="col-md-4">
	<?php get_template_part( 'content-blocks/callout_drinkspecial-card' ); ?>
</div>
<?php
	while ( $the_query->have_posts() ) {
		$the_query->the_post(); 

		$img = get_post_meta( get_the_ID(), '_happyhour_promo_background_image', true ); 
?>
<div class="col-md-4">
	<div class="media event-simple card-one event-danger">
		<div class="media-left">
		  <a href="<?php the_permalink() ?>">
		    <span class="day">day</span>
		    <span class="date"><i class="fa fa-star-o fa-lg"></i></span>
		    <span class="month">month</span>
		  </a>
		</div>
		<a class="media-body event-description" href="<?php the_permalink(); ?>" style="background-image:url('<?php echo $img; ?>');">
		  <h4 class="media-heading"><?php the_title(); ?></h4>
		  <span class="media-heading"><?php the_excerpt(); ?></span>  
		  <span class="overlay bkg-base"></span>
		</a>
	</div>	
</div>	


<?php } ?>

</div>
<?php
}
/* Restore original Post Data */
wp_reset_postdata(); ?>
<?php 
$fourthevent = tribe_get_events( array(
    'posts_per_page' => 1,
//   'start_date' => new DateTime()
    'start_date' => date("Y-m-d h:m", strtotime("YESTERDAY")),
    'offset' => 3
) );
if ($fourthevent) : ?>
<div class="col-xs-12 col-md-4 event-column-one">
<?php echo wp_get_attachment_image_src( get_post_meta( $fourthevent[0]->ID, '_happyhour_event_vertical_image_id', true ), 'full' ); ?>
	<div class="row no-gutter">
		<div class="col-xs-12">
			<a href="<?php echo get_permalink($fourthevent[0]->ID); ?>">
	      		<img src="<?php echo wp_get_attachment_image_src( get_post_meta( $fourthevent[0]->ID, '_happyhour_event_vertical_image_id', true ), 'full' ); ?>" class="center-block">
			</a>
	        <div class="jumbotron mini-jumbotron bkg-notblack">
	          <h4>Upcoming Events</h4>
	          <p class="info">There is always something happening at Night Trips.</p>
	          <p class="action text-right"><a class="btn btn-primary btn-lg" href="<?php echo esc_url( site_url( '/events/' ) ); ?>">See More</a></p>
	        </div>	      
		</div>
	</div>
</div>

<?php endif;




// Retrieve the next event
$events = tribe_get_events( array(
    'posts_per_page' => 4,
//   'start_date' => new DateTime()
    'start_date' => date("Y-m-d h:m", strtotime("YESTERDAY")),
    'offset' => 30
) );
$loop = 0;
?>

<?php
if ($events) : 
	$loop ++; 
// print_r($events);
 ?>

<div class="row marg">
	<div class="col-xs-12">
		<h2>Only at Night Trips</h2>
		<p class="lead">Featuring top Porn Stars and exciting events</p>
	</div>
	<div class="col-xs-12">
		<div class="panel bkg-notblack pull-left">
		<?php foreach ($events as $event) {
			echo $event->post_title;
			echo $event->ID;
		}?>




		</div>
	</div>		
</div>

<?php endif; ?>


<div class="row marg">
	<div class="col-xs-12">
		<h2>Only at Night Trips</h2>
		<p class="lead">Featuring top Porn Stars and exciting events</p>
	</div>
	<div class="col-xs-12">
		<div class="panel bkg-notblack pull-left">
			<div class="col-xs-12 col-md-8">		
				<div class="row no-gutter">

					<div class="col-xs-12">
						<div class="media event-simple card-one event-danger">
							<div class="media-header">
								<img src="http://nighttrips.com/Tulsa/wp-content/uploads/2012/01/AsaAkiraTNTLobby-1024x570.jpg" />
							</div>
							<div class="media-left bkg-darker">
								<a href="javascript:void(0)">
									<span class="day">day</span>
									<span class="date">23</span>
									<span class="month">month</span>
								</a>
							</div>
							<div class="media-body bkg-darker">
								<a class="event-description" href="javascript:void(0)">
									<h4 class="media-heading">Media heading</h4>
									Cras sit amet nibh libero, in gravida nulla.
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="media event-simple card-one event-danger">
							<div class="media-header">
								<img src="http://nighttrips.com/Tulsa/wp-content/uploads/2015/03/stpattysTulsaLobby-900x501.jpg" />
							</div>
							<div class="media-left bkg-darker">
								<a href="javascript:void(0)">
									<span class="day">day</span>
									<span class="date">23</span>
									<span class="month">month</span>
								</a>
							</div>
							<div class="media-body bkg-darker">
								<a class="event-description" href="javascript:void(0)">
									<h4 class="media-heading">Media heading</h4>
									Cras sit amet nibh libero, in gravida nulla.
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="media event-simple card-one event-danger">
							<div class="media-header">
								<img src="http://nighttrips.com/Tulsa/wp-content/uploads/2015/01/RileyReidTULSALobby-1024x570.jpg" />
							</div>
							<div class="media-left bkg-darker">
								<a href="javascript:void(0)">
									<span class="day">day</span>
									<span class="date">23</span>
									<span class="month">month</span>
								</a>
							</div>
							<div class="media-body bkg-darker">
								<a class="event-description" href="javascript:void(0)">
									<h4 class="media-heading">Media heading</h4>
									Cras sit amet nibh libero, in gravida nulla.
								</a>
							</div>
						</div>
					</div>						
					
				</div>	
			</div>
			<div class="col-xs-12 col-md-4 event-column-one">
				<div class="row no-gutter">
					<div class="col-xs-12">
			<?php get_template_part('content-blocks/callout_drinkspecial-card'); ?>
			<?php get_template_part('content-blocks/callout_promodays-list'); ?>
				<?php /*      	<img class="center-block" src="http://nighttrips.com/Tulsa/wp-content/uploads/2015/05/MissNTTULSAFB.jpg">
				     */ ?>   
				     <div class="jumbotron mini-jumbotron bkg-notblack">
				          <h4>Upcoming Events</h4>
				          <p class="info">There is always something happening at Night Trips.</p>
				          <p class="action text-right"><a class="btn btn-primary btn-lg" href="<?php echo esc_url( site_url( '/events/' ) ); ?>">See More</a></p>
				        </div>	      
					</div>
				</div>
			</div>
			<div class="clearfix"></div>


		</div>
	</div>	
</div>


<div class="row">
	<div class="col-xs-12">
		<div class="row no-gutter">
			<div class="col-md-6">
					<?php get_template_part('content-blocks/callout_happyhour-vertimg'); ?>
			</div>

			<div class="col-md-6">
					<?php get_template_part('content-blocks/callout_drinkspecial-card'); ?>
					<?php get_template_part('content-blocks/callout_promodays-list'); ?>		
			</div>
		</div>
		
</div>	
</div>
<?php

get_footer();