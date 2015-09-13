<?php
/**
 * Drink Special horizontal image
 *
 * @author  WPguru4u
 * @package happyhour
 */

$drinkspecial = cmb2_get_option( 'happyhour_weekly', 'happyhour_weekly_drink_special_post' );
?>


  <div class="media event-simple card-one card-two event-warning">     
    <div class="media-left">
      <a href="<?php echo post_permalink( $drinkspecial ); ?>">
        <span class="day">all</span>
        <span class="date"><i class="fa fa-glass fa-lg"></i></span>
        <span class="month">month</span>
      </a>
    </div>
    <div class="media-body">
      <a class="event-description" href="<?php echo post_permalink( $drinkspecial ); ?>">
		<?php echo get_the_post_thumbnail( $drinkspecial, 'full', array( 'class' => '"center-block attachment-full' ) ); ?>
      </a>
    </div>
  </div>