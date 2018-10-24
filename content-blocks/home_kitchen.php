<?php
/**
 * Food & Drink content block for home page
 *
 * @author  WPguru4u
 * @package happyhour
 */
// $featured_post = cmb2_get_option( 'happyhour_options', 'happyhour_featured_blog_post' );
// $featured = get_post( $featured_post );
?>
<div class="row marg">
	<div class="col-xs-12">
		<h2>Food &amp; Drinks</h2>
		<p class="lead">Night Trips <?php echo ( is_okc() ) ? 'OKC' : 'Tulsa'; ?> features a savory food menu, ice cold beer, seasonal craft beers and a hand crafted cocktail menu featuring our signature cocktail the <a href="https://www.youtube.com/watch?v=CbtJEIGL-mI" target="_blank">Citrus Mule</a>.</p>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-5">
		<?php $facebook = esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_facebook_post' ) );  ?>

		<div class="fb-post marg" data-href="<?php echo $facebook; ?>" data-width="500"></div>
        <div class="jumbotron mini-jumbotron panel bkg-notblack">
          <h4>Our Food &amp; Drink Menu</h4>
		<?php if( is_okc() ) : ?>
          <p class="info">Take a look at our delicious food and drink items. Now featuring our house spicy wings!</p>
		<?php else : ?>
          <p class="info">Take a look at our delicious food and drink items. Now featuring a classic rib eye steak.</p>
		<?php endif; ?>
          <p class="action text-right"><a class="btn btn-primary btn-lg" href="<?php echo happyhour_kitchen_link() ?>">View Menu</a></p>
        </div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-7">
		<?php if( is_okc() ) : ?>
			<?php // echo do_shortcode( '[gallery type="rectangular" size="medium" ids="1478,1477,1496,1494,1483,1481"]' ); ?>
			<?php
			// all - 1980,1981,1982,1985,1972,1977,1990
			// vertical - 1980, 1981, 1990
			// main - 1977
			echo do_shortcode( '[gallery type="rectangular" size="medium" ids="2449,2446,2465,2447,2445,2443"]' ); ?>
		// tacos - 2589
		//  waitress - 2593
		// brushetta - 2595
		// cuban - 2597
		// salad - 2598
		// wings - 2599
		//	echo do_shortcode( '[gallery type="rectangular" size="medium" ids="2593,2599,2598,2597,2595,2589"]' );
		?>
		<?php else : ?>
			<?php echo do_shortcode( '[gallery type="rectangular" size="medium" ids="2469,2470,2466,2456,2468,2467"]' ); ?>
		<?php endif; ?>
	</div>
	<div class="col-xs-12">
		<div class="col-xs-12">
			<?php get_template_part( 'content-blocks/callout_promodays-horizontal' ); ?>
		</div>
	</div>
</div>
