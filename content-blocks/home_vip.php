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
		  <?php if( is_okc() ) : ?>
			<p class="lead">Check out our VIP Booths and Table Dance Area for the truly discerning guests. Comfortable couch and private area just for you, your friends and your companion.</p>
		  <?php else : ?>
			<p class="lead">Check out our VIP Booths, VIP Rooms and Pluxh Bar &amp; Lounge for only the truly discerning guests.</p>
		  <?php endif; ?>		
	</div>
	<?php if( is_okc() ) : ?>
		<?php get_template_part( 'content-blocks/okc/callout_vip-booth' ); ?>
		<?php get_template_part( 'content-blocks/okc/callout_vip-tabledance' ); ?>
	<?php else : ?>
		<?php get_template_part( 'content-blocks/tulsa/callout_vip-booth' ); ?>
		<?php get_template_part( 'content-blocks/tulsa/callout_vip-room' ); ?>
		<?php get_template_part( 'content-blocks/tulsa/callout_vip-pluxh' ); ?>
	<?php endif; ?>
</div>