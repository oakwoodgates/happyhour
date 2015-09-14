<?php
/**
 * Template Name: zDemo Playground
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>
<h1 class="page-header">Playground before adding to Style Guide</h1>
<?php
$rel = cmb2_get_option( 'happyhour_weekly', 'happyhour_weekly_venue_post' );
// echo cmb2_get_option( 'happyhour_weekly', 'happyhour_weekly_events_list' );
// The Query
$args = array(
    'post_type' => 'tribe_venue',
    'p' => $rel
);

// $loop = new WP_Query( $args );
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) { ?>

<?php
  // echo '<ul>';
  while ( $the_query->have_posts() ) {
    $the_query->the_post();

    the_title();
    the_content();
 }
//  echo '</ul>';

} else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

get_footer();