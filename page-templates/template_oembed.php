<?php
/**
 * Template Name: Oembed Test
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
      <h1>Oembed Testing</h1>
      <p class="lead">Verify that:</p>
      		<ul>
      			<li>Copy/paste a link to auto embed (no goofy iframe copy/paste).</li>
      			<li>FitVids is doing it's magic, if not then update the code.</li>
      			<li>Embeds are responsive.</li>
      		</ul>
      	<p class="lead">Stress test dumb senarios like vertical images, impossibly small embeds, and goofy sized things. 
      	More about oEmbeds in WordPress - https://codex.wordpress.org/Embeds
      </p>
    </div>
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

//    if ( isset( $entry['title'] ) )
//        $title = esc_html( $entry['title'] );

//    if ( isset( $entry['description'] ) )
//        $desc = wpautop( $entry['description'] );

//    if ( isset( $entry['image_id'] ) ) {
//        $img = wp_get_attachment_image( $entry['image_id'], 'share-pick', null, array(
//            'class' => 'thumb',
//        ) );
//    }
//    $caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';

    // Do something with the data
    ?>
    <div class="row">
<?php  if ( isset( $entry['title'] ) )
       $title = esc_html( $entry['title'] );   
       ?>
       <h2><?php echo $title; ?></h2> 
		<div class="col-xs-12">
			<?php
			$url = esc_url( $entry['wiki_test_embed'] );
			echo wp_oembed_get( $url );
			?>
		</div>
		<div class="col-md-8 col-xs-6">
			<?php
			$url = esc_url( $entry['wiki_test_embed'] );
			echo wp_oembed_get( $url );
			?>
		</div>
		<div class="col-md-4 col-xs-3">
			<?php
			$url = esc_url( $entry['wiki_test_embed'] );
			echo wp_oembed_get( $url );
			?>
		</div>
	</div>
	<?php 
}
?>




<?php
get_footer();