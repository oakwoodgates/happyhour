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
<div class="row">
	<div class="col-xs-12">
		<h1><?php the_title(); ?></h1>
		<p class="lead"><?php the_excerpt(); ?></p>
	</div>
</div>
<div class="row marg">
	<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'vip_booth' ); ?>
	<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'vip_tabledance' ); ?>
	<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'vip_room' ); ?>
	<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'vip_pluxh' ); ?>
</div>
<?php
get_template_part( 'content-blocks/subfooter_general' );
get_footer();