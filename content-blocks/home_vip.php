<?php
/**
 * VIP & Pluxh content block for home page
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<div class="row marg">
	<div class="col-xs-12">
		<h2>Are You VIP?</h2>
		<p class="lead">Check out our VIP Booths, VIP Rooms and Pluxh Bar & Lounge for only the truly discerning guests.</p>
	</div>
	<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'callout_vip-booth' ); ?>
	<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'callout_vip-room' ); ?>
	<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'callout_vip-pluxh' ); ?>

</div>