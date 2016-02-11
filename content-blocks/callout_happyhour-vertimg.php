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

		$day = get_post_meta( $happyhour, '_happyhour_promo_data_day', true );
		$start = get_post_meta( $happyhour, '_happyhour_promo_data_start_time', true );
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
<span itemscope itemtype="http://schema.org/SaleEvent">
<a itemprop="url" href="<?php echo get_permalink( $happyhour ); ?>">
<?php echo get_the_post_thumbnail( $happyhour, 'full', array( 'class' => 'center-block attachment-full' ) ); ?></a>
  <meta itemprop="name" content="Happy Hour">
  <meta itemprop="startDate" content="<?php echo date("c", strtotime($promo_start)); ?>">
  <meta itemprop="endDate" content="<?php echo date("c", strtotime($promo_end)); ?>">
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
</span>
