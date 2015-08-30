<?php
/**
 * Template Name: zDemo Oembed Test
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>

<div class="page-header" id="banner">
  <div class="row">
    <div class="col-lg-8 col-md-7 col-sm-6">
      <h1>oEmbed Testing</h1>
      <p class="lead">Verify that:</p>
      		<ul>
      			<li>Copy/paste a link to auto embed (no goofy iframe copy/paste).</li>
      			<li>FitVids is doing it's magic, if not then update the code.</li>
      			<li>Embeds are responsive.</li>
      		</ul>
      	<p class="lead">Stress test dumb senarios like vertical images, impossibly small embeds, full width, and goofy sized things. 
      	More about oEmbeds in WordPress <a href="https://codex.wordpress.org/Embeds">here</a>.
      </p>
    </div>
  </div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="fb-post" data-href="https://www.facebook.com/nighttripstulsa/posts/926174207440764" data-width="500"></div>
		<div class="fb-post" data-href="https://www.facebook.com/eshankles/posts/10201670641200132" data-width="500"></div>
	</div>
</div>

<div class="row marg">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php // get_template_part( 'template-parts/content', 'page' ); ?>
					<?php // the_content(); ?>

			<?php endwhile; // End of the loop. ?>

</div>
<?php
$entries = get_post_meta( get_the_ID(), 'wiki_test_repeat_group', true );

foreach ( (array) $entries as $key => $entry ) {

    $img = $title = $desc = $caption = $url = '';

    if ( isset( $entry['title'] ) )
    $title = esc_html( $entry['title'] );   
    ?>
    <div class="row">
       <h2><?php echo $title; ?></h2> 
		<div class="col-xs-12">
			<div class="bkg-darker">
				<?php
				$url = esc_url( $entry['wiki_test_embed'] );
				echo wp_oembed_get( $url );
				?>
				<p>I should always be full width on all screen sizes</p>
			</div>
		</div>
		<div class="col-md-8 col-xs-6">
			<div class="bkg-primary">
				<?php
				$url = esc_url( $entry['wiki_test_embed'] );
				echo wp_oembed_get( $url );
				?>
				<p>I should be 2/3 width on md and lg screens, and 1/2 on small screens</p>			
			</div>		
		</div>
		<div class="col-md-4 col-xs-4">
			<div class="bkg-default">
				<?php
				$url = esc_url( $entry['wiki_test_embed'] );
				echo wp_oembed_get( $url );
				?>
				<p>I should always be 1/3 width on all screen sizes</p>			
			</div>			
		</div>
	</div>
	<?php 
}
?>

<?php
get_footer();