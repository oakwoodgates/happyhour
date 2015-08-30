<?php
/**
 * Template Name: VIP
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>
<div class="row marg">
	<div class="col-xs-12">
		<h2>VIP Something</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>

	<?php get_template_part( 'content-blocks/vip-booth' ); ?>
	<?php get_template_part( 'content-blocks/vip-room' ); ?>
	<?php get_template_part( 'content-blocks/vip-pluxh' ); ?>

</div>

<?php
get_template_part( 'content-blocks/subfooter-general' );
get_footer();