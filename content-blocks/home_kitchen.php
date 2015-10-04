<?php
/**
 * Food & Drink content block for home page
 *
 * @author  WPguru4u
 * @package happyhour
 */
$featured_post = cmb2_get_option( 'happyhour_options', 'happyhour_drink_special_post' );
$featured = get_post( $featured_post );
?>
<div class="row marg">
	<div class="col-xs-12">
		<h2>Food &amp; Drinks</h2>
		<?php if( is_okc() ) : ?>
			<p class="lead">Night Trips OKC features a savory food menu, ice cold beer and seasonal craft beers. Check out our awesome <a href="<?php echo post_permalink( $featured ); ?>"><?php echo get_the_title( $featured ) ?></a></p>
		<?php else : ?>

			<p class="lead">Night Trips Tulsa features a full kitchen, ice cold beer, seasonal craft beers and a hand crafted cocktail menu. Featuring our signature drink, the <a href="<?php echo post_permalink( $featured ); ?>"><?php echo get_the_title( $featured ) ?></a>.</p>
		<?php endif; ?>		
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
			<?php echo do_shortcode( '[gallery type="rectangular" size="medium" ids="1478,1477,1496,1494,1483,1481"]' ); ?>
		<?php else : ?>
			<?php echo do_shortcode( '[gallery type="rectangular" size="medium" ids="1478,1477,1496,1494,1483,1481"]' ); ?>
		<?php endif; ?> 
	</div>
	<div class="col-xs-12">
		<div class="col-xs-12">
			<?php get_template_part( 'content-blocks/callout_promodays-horizontal' ); ?>
		</div>
	</div>		
</div>