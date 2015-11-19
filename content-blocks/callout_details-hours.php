<?php
$venue = cmb2_get_option( 'happyhour_status', 'happyhour_status_venue_post' );
$holidays = get_post_meta( $venue, '_happyhour_venue_special_hours', true );
$mon_fri_open = get_post_meta( $venue, '_happyhour_venue_week_open', true );
$sat_open = get_post_meta( $venue, '_happyhour_venue_sat_open', true );
$sun_open = get_post_meta( $venue, '_happyhour_venue_sun_open', true );
$club_close = get_post_meta( $venue, '_happyhour_venue_club_close', true );
?>
  <div class="panel panel-primary all-hours">
	<div class="panel-heading">         
		<h3 class="panel-title">Club Hours</h3>
	</div>  
    <div class="panel-body">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-sm-offset-2">
      <ul class="list-group">

        <li class="list-group-item">
          <span class="badge"><?php echo date("ga", strtotime($mon_fri_open)) . '-' . date("ga", strtotime($club_close)); ?></span>
          Mon-Fri
        </li>
        <li class="list-group-item">
          <span class="badge"><?php echo date("ga", strtotime($sat_open)) . '-' . date("ga", strtotime($club_close)); ?></span>
          Saturday
        </li>
        <li class="list-group-item">
          <span class="badge"><?php echo date("ga", strtotime($sun_open)) . '-' . date("ga", strtotime($club_close)); ?></span>
          Sunday
        </li>                  
      </ul>    	
    </div>
<div class="col-sm-12">
      <p class="text-center">Kitchen open till 1am - <a href="<?php echo happyhour_kitchen_link() ?>">View Menu</a></p>
</div>
<?php if( $holidays ) : ?>
      <h5 class="text-center col-sm-12">Holiday Hours</h5>	

	      <ul class="list-group">
<?php 
foreach ( $holidays as $key => $holiday ) {

    $title = $datefrom = $dateto = $open = $close = '';

    if ( isset( $holiday['title'] ) )
        $title = esc_html( $holiday['title'] );

    if ( isset( $holiday['datefrom'] ) )
        $datefrom = esc_html( $holiday['datefrom'] );

    if ( isset( $holiday['dateto'] ) )
        $dateto = esc_html( $holiday['dateto'] );

    if ( isset( $holiday['open'] ) )
        $open = esc_html( $holiday['open'] );

    if ( isset( $holiday['close'] ) )
        $close = esc_html( $holiday['close'] );
?>
<li class="list-group-item col-sm-6">
	<span class="badge">
		<?php if( $open != $close ) : ?>
				<?php echo date("ga", strtotime($open)) . '-' . date("ga", strtotime($close)); ?>
		<?php else : ?>
				<?php echo 'CLOSED'; ?>
		<?php endif; ?>
	</span>
	<?php if( $datefrom != $dateto ) : ?>
			<?php echo $datefrom . ' - ' . $dateto; ?>
	<?php else : ?>
			<?php echo $title . ' - ' . $datefrom; ?>
	<?php endif; ?>
</li>
<?php }
?>	      
                
	      </ul>      	
	 <?php endif; ?> 
    </div>
  </div> 