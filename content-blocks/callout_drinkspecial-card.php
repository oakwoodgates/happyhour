<?php
/**
 * Drink Special horizontal image
 *
 * @author  WPguru4u
 * @package happyhour
 */

$drinkspecial = cmb2_get_option( 'happyhour_weekly', 'happyhour_weekly_drink_special_post' );
$dspost = get_post( $drinkspecial );
?>
<div class="media event-simple card-one card-three event-warning">     
  <a class="media-left" href="<?php echo post_permalink( $drinkspecial ); ?>">
    <span class="day">all</span>
    <span class="date"><i class="fa fa-glass fa-lg"></i></span>
    <span class="month">month</span>
  </a>
  <a class="event-description media-body" href="<?php echo post_permalink( $drinkspecial ); ?>">
    <?php echo get_the_post_thumbnail( $drinkspecial, 'full', array( 'class' => '"center-block attachment-full' ) ); ?>
    <h4 class="media-heading drink-promo"><?php echo get_the_title( $drinkspecial ) ?></h4>
    <span class="drink-promo-excerpt"><?php echo $dspost->post_excerpt; // the_excerpt(); ?></span>
  </a>
</div>
