<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>

<?php

	get_template_part( 'content-blocks/home', 'welcome' );
	get_template_part( 'content-blocks/home', 'kitchen' );
?>
</div>
<div class="marg neon-sign">
	<div class="">
		<div class="row">
			<div class="col-xs-12">
			  <div class="bs-component">
				  <p class="neon neon-purple">Check Yourself for Glitter!</p>
			  </div>
			</div>
		</div>
	</div>
</div>
<div id="content-bottom" class="site-content container">

	<?php
	
	get_template_part( 'content-blocks/home', 'events' );
	get_template_part( 'content-blocks/home', 'vip' );
	get_template_part( 'content-blocks/home', 'social' );
	get_template_part( 'content-blocks/subfooter', 'home' );

get_footer();
?>