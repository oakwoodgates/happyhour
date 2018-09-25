<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package happyhour
 */
?>

	</div><!-- #content container-->
<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<style>

.tribe-events-list .tribe-events-loop .tribe-events-event-image{width:100%}

</style>

</body>
</html>