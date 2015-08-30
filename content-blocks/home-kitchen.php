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
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>

	<div class="col-xs-12 col-md-6 col-lg-5">
		<?php $facebook = esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_facebook_post' ) );  ?>

		<div class="fb-post marg" data-href="<?php echo $facebook; ?>" data-width="500"></div>
        <div class="jumbotron mini-jumbotron panel bkg-notblack">
          <h4>Our Awesome Bar &amp; Kitchen</h4>
          <p class="info">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <p class="action text-right"><a class="btn btn-primary btn-lg">View Menu</a></p>
        </div>			
	</div>
	<div class="col-xs-12 col-md-6 col-lg-7">
		<?php echo do_shortcode( '[gallery type="rectangular" size="medium" ids="1478,1477,1496,1494,1483,1481"]' ); ?>
	</div>	
</div>
