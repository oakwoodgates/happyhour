
<?php
function add_menu_atts( $atts, $item, $args ) {
  $atts['itemprop'] = 'url';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_atts', 10, 3 );
/**
 * Handles output of Google structured data markup
 */
add_action('wp_head','hook_css');


function hook_css() {
	$details = cmb2_get_option( 'happyhour_options', 'happyhour_location_post' );
	if( is_page($details)) {
		apply_filters('hook_css','hook_css_check');	
	}
}
add_filter('hook_css','hook_css_check');
function hook_css_check() {

// Let's set some variables
// Post for our location settings
$location_id = cmb2_get_option( 'happyhour_weekly', 'happyhour_weekly_venue_post' );
// Location post content
$description = json_encode( get_post( $location_id )->post_content );
// Logo from JetPack
	$output= '
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "EntertainmentBusiness",
  "description": ' . $description . ',
  "url" : "http://www.your-company-site.com",
  "logo" : "http://www.example.com/logo.png",
  "name": "Beachwalk Beachwear & Giftware",
  "telephone": "850-648-4200",
   "sameAs" : [
    "http://www.facebook.com/your-profile",
    "http://www.twitter.com/yourProfile",
    "http://plus.google.com/your_profile",
    "http://example.com"
  ],
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Seattle",
    "addressRegion": "WA",
    "postalCode": "98052",
    "streetAddress": "20341 Whitworth Institute 405 N. Whitworth"
  },
  "openingHours": [
    "Mo-Fr 09:00-17:30",
    "Sa 09:00-12:00"
  ],
  "openingHoursSpecification":
  [
    {
    "@type": "OpeningHoursSpecification",
    "validFrom": "2013-12-24",
    "validThrough": "2013-12-25",
    "opens": "12:00",
    "closes": "14:00"
    },
    {
    "@type": "OpeningHoursSpecification",
    "validFrom": "2013-12-26",
    "validThrough": "2013-12-30",
    "opens": "12:00",
    "closes": "02:00"
    }
  ]  
}
</script>
';

	echo $output;

}
