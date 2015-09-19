<?php
/**
 * Food & Drink content block for home page
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<div class="row marg">
	<div class="col-xs-12">
		<h2>Food &amp; Drinks</h2>
		<p class="lead">Night Trips Tulsa features a full kitchen, ice cold beer, seasonal craft beers and a hand crafted cocktail menu. Featuring our signature drink, the <a href="#">Citrus Mule</a>.</p>
	</div>

	<div class="col-xs-12 col-md-6 col-lg-5">
		<?php $facebook = esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_facebook_post' ) );  ?>

		<div class="fb-post marg" data-href="<?php echo $facebook; ?>" data-width="500"></div>
        <div class="jumbotron mini-jumbotron panel bkg-notblack">
          <h4>Our Food &amp; Drink Menu</h4>
          <p class="info">Take a look at our delicious food and drink items. Now featuring a classic rib eye steak.</p>
          <p class="action text-right"><a class="btn btn-primary btn-lg" href="<?php echo happyhour_kitchen_link() ?>">View Menu</a></p>
        </div>			
	</div>
	<div class="col-xs-12 col-md-6 col-lg-7">
		<?php echo do_shortcode( '[gallery type="rectangular" size="medium" ids="1478,1477,1496,1494,1483,1481"]' ); ?>
	</div>	
</div>
