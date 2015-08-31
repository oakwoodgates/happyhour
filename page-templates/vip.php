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
		<h1><?php the_title(); ?></h1>
		<p class="lead"><?php the_excerpt(); ?></p>
	</div>
</div>
<div class="row marg">
	<?php get_template_part( 'content-blocks/vip-booth' ); ?>
	<?php get_template_part( 'content-blocks/vip-room' ); ?>
	<?php get_template_part( 'content-blocks/vip-pluxh' ); ?>

</div>

<?php
get_template_part( 'content-blocks/subfooter-general' );
get_footer();