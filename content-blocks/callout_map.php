<?php
/**
 * Google Maps iframe
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<iframe
  width="600"
  height="400"
  frameborder="0" style="border:0"
  <?php if( is_okc() ) : ?>
  	src="https://www.google.com/maps/embed/v1/place?key=<?php echo happyhour_g_api(); ?>&q=Night+Trips+OKC" allowfullscreen
  <?php else : ?>
  	src="https://www.google.com/maps/embed/v1/place?key=<?php echo happyhour_g_api(); ?>&q=Night+Trips,Tulsa+OK" allowfullscreen
  <?php endif; ?>
  >
</iframe>