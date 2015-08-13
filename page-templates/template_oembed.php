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
      <h1>Style Guide</h1>
      <p class="lead">dark, steel, smokey, mixology, martini, class, relaxed, entertainment</p>
    </div>
  </div>
</div>

<div class="row">

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
    <div class="col-md-4 col-sm-6">
	  <?php
	//	$url = esc_url( get_post_meta( get_the_ID(), 'wiki_test_embed', true ) );
	  	$url = esc_url( $entry['wiki_test_embed'] );
		echo wp_oembed_get( $url );
	  ?>
	</div>
	<?php 
}
?>



</div>

<?php
get_footer();