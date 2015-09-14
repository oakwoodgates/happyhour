<?php
$rel = cmb2_get_option( 'happyhour_weekly', 'happyhour_weekly_events_list' );
// echo cmb2_get_option( 'happyhour_weekly', 'happyhour_weekly_events_list' );
// The Query
$args = array(
    'post_type' => array( 'promos' ),
    'orderby' => 'post__in',
    'post__in' => $rel
);

// $loop = new WP_Query( $args );
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) { ?>
<div class="event-column-one">

<?php get_template_part( 'content-blocks/drinkspecial' ); ?>


<?php
	// echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post(); 

		$img = get_post_meta( get_the_ID(), '_happyhour_promo_background_image', true ); 
?>
	
		  <div class="media event-simple card-one event-danger">
		    <div class="media-left">
		      <a href="<?php the_permalink() ?>">
		        <span class="day">day</span>
		        <span class="date"><i class="fa fa-star-o fa-lg"></i></span>
		        <span class="month">month</span>
		      </a>
		    </div>

		    <div class="media-body" style="background-image:url('<?php echo $img; ?>');">
		      <a class="event-description" href="<?php the_permalink(); ?>">
		        <h4 class="media-heading"><?php the_title(); ?></h4>
		        <?php the_excerpt(); ?>
		      </a>
		  	  <div class="overlay bkg-base" style=""></div>
		    </div>
		  </div>  
<?php	}
//	echo '</ul>';
?>

</div>
<?php
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
