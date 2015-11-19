<?php
$promos = cmb2_get_option( 'happyhour_status', 'happyhour_status_events_list' );
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
<div class="event-column-one">

<?php // get_template_part( 'content-blocks/drinkspecial' ); ?>
<?php
	while ( $the_query->have_posts() ) {
		$the_query->the_post(); 

		$img = get_post_meta( get_the_ID(), '_happyhour_promo_background_image', true );
		$day = get_post_meta( get_the_ID(), '_happyhour_promo_data_day', true );
		$start = get_post_meta( get_the_ID(), '_happyhour_promo_data_start_time', true );
		$start_time = date("ga", strtotime($start));
		$end = get_post_meta( get_the_ID(), '_happyhour_promo_data_end_time', true );
		$end_time = date("ga", strtotime($end));
		$location = cmb2_get_option( 'happyhour_status', 'happyhour_status_location_post' );
		$name = get_post_meta( $location, '_jsg4u_general_name', true );
		$url = get_post_meta( $location, '_jsg4u_general_url', true );
		$streetAddress = get_post_meta( $location, '_jsg4u_location_streetaddress', true );
		$addressLocality = get_post_meta( $location, '_jsg4u_location_addresslocality', true );
		$addressRegion = get_post_meta( $location, '_jsg4u_location_addressregion', true );
		$postalCode = get_post_meta( $location, '_jsg4u_location_postalcode', true );
		$promo_start = date("D", strtotime($day)) . ' ' . $start_time;
		$promo_end = date("D", strtotime($day)) . ' ' . $end_time;



?>
	
		  <div class="media event-simple card-one event-danger" itemscope itemtype="http://schema.org/SaleEvent">
		    <div class="media-left">
		      <a href="<?php the_permalink() ?>">
		      <meta itemprop="startDate" content="<?php echo date("c", strtotime($promo_start)); ?>">
		      <meta itemprop="endDate" content="<?php echo date("c", strtotime($promo_end)); ?>">
		        <span class="day"><?php echo date("D", strtotime($day)); ?></span>
		        <span class="date"><i class="fa fa-star-o fa-lg"></i></span>
		        <span class="month"><?php echo $start_time . '-' . $end_time; ?></span>
				<span itemprop="location" itemscope itemtype="http://schema.org/NightClub">
					<meta itemprop="url" content="<?php echo $url; ?>">
					<meta itemprop="name" content="<?php echo $name; ?>">
					<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					  <meta itemprop="streetAddress" content="<?php echo $streetAddress; ?>">
					  <meta itemprop="addressLocality" content="<?php echo $addressLocality; ?>">
					  <meta itemprop="addressRegion" content="<?php echo $addressRegion; ?>">
					  <meta itemprop="postalCode" content="<?php echo $postalCode; ?>">
					</span>
				</span>			        
		      </a>
		    </div>
		      <a itemprop="url" class="media-body event-description" href="<?php the_permalink(); ?>" style="background-image:url('<?php echo $img; ?>');">
		        <h4 itemprop="name" class="media-heading"><?php the_title(); ?></h4>
		        <span itemprop="description" class="media-heading"><?php the_excerpt(); ?></span>  
		        <span class="overlay bkg-base"></span>
		      </a>
		  </div>

<?php } ?>

</div>
<?php
}
/* Restore original Post Data */
wp_reset_postdata();
