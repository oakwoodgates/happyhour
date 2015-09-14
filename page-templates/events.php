<?php
/**
 * Template Name: Events
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */

get_header(); ?>
<?php

?>
	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-xs-12" role="main">




<?php 
// Ensure the global $post variable is in scope
global $post;
 
// Retrieve the next 5 upcoming events
$events = tribe_get_events( array(
    'posts_per_page' => 5,
    'start_date' => strtotime('now')
) );
 
// Loop through the events: set up each one as
// the current post then use template tags to
// display the title and content
$i = 1;
foreach ( $events as $post ) {
    setup_postdata( $post );

switch ($i) {
    case 1:
        get_template_part( 'content-blocks/events/home-event-1' );
        break;
    case 2:
        echo "Your favorite color is blue!";
        break;
    case 3:
        echo "Your favorite color is green!";
        break;
    case 4:
        echo "Your favorite color is green!";
        break;
    case 5:
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
    // This time, let's throw in an event-specific
    // template tag to show the date after the title!
//    the_title();
//    echo tribe_get_start_date();
//    the_content();
$i++;
}
?>






		</main><!-- #main col -->

	</div><!-- #primary row -->
<?php get_footer(); ?>