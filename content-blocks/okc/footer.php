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
$venue = cmb2_get_option( 'happyhour_status', 'happyhour_status_venue_post' );
$mon_fri_open = get_post_meta( $venue, '_happyhour_venue_week_open', true );
$sat_open = get_post_meta( $venue, '_happyhour_venue_sat_open', true );
$sun_open = get_post_meta( $venue, '_happyhour_venue_sun_open', true );
$club_close = get_post_meta( $venue, '_happyhour_venue_club_close', true );
?>

  <footer <?php hybrid_attr( 'footer' ); ?>>
		<div class="site-info container">
      <div class="row marg footer-headline">
        <div class="col-xs-12">
          <h3 class="headline neon neon-purple">Come Join The Party!</h3>
        </div>        
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="">
            <img src="http://45.55.219.172/wp-content/uploads/2015/09/Logo2_OKC.png" alt="<?php bloginfo( 'name' ); ?>" class="center-block marg" >          
          </a>
          <a href="http://nighttrips.com/Tulsa" class="">
            <img src="http://45.55.219.172/wp-content/uploads/2015/09/tulsa-logo.png" alt="<?php bloginfo( 'name' ); ?>" class="center-block" >
          </a>          
        </div>
        <nav class="col-xs-6 col-sm-6 col-md-3" <?php hybrid_attr( 'menu2', 'secondary' ); ?>>
          <h4>Links</h4>
          <?php 
            wp_nav_menu( array( 
              'theme_location' => 'footer',
              'menu_id' => 'footer-menu'
              ) 
            ); 
          ?>          
        </nav>
      <!--  <div class="clearfix visible-sm-block"></div> -->
        <div class="col-xs-6 col-sm-6 col-md-3 footer-social">
          <h4>Social</h4>
          <ul class="fa-ul" <?php hybrid_attr( 'mainschema' ); ?>>
            <link itemprop="url" href="<?php echo site_url() ?>">
            <li><a itemprop="sameAs" href="https://www.facebook.com/nighttripsokc"><i class="fa fa-li fa-facebook"></i>Facebook</a></li>
            <li><a itemprop="sameAs" href="https://twitter.com/nighttripsokc"><i class="fa fa-li fa-twitter"></i>Twitter</a></li>
            <li><a itemprop="sameAs" href="https://www.youtube.com/user/nighttripstv"><i class="fa fa-li fa-youtube-play"></i>YouTube</a></li>
            <li><a itemprop="sameAs" href="http://nighttripspics.tumblr.com/"><i class="fa fa-li fa-tumblr"></i>Tumblr</a></li>
            <li><a itemprop="sameAs" href="https://plus.google.com/113504749391687494200/posts"><i class="fa fa-li fa-google-plus"></i>Google+</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 footer-details" <?php hybrid_attr( 'mainschema' ); ?>>
          <link itemprop="url" href="<?php echo site_url() ?>">
          <h4>Details</h4>
          <div>
            <a href="tel:4059424242"><i class="fa fa-phone" itemprop="telephone" content="+14059424242"></i> 405.942.4242</a>
          </div>
          <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="small">
            <i class="fa fa-map-marker"></i> <span itemprop="streetAddress">39220 S. Vermont Ave.</span>, <span itemprop="addressLocality">Oklahoma City</span>, <span itemprop="addressRegion">OK</span> <span itemprop="postalCode">73108</span>
          </address>
          <div class="panel panel-info open-hours">
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">
                  <span class="badge"><?php echo date("ga", strtotime($mon_fri_open)) . '-' . date("ga", strtotime($club_close)); ?></span>
                  Mon-Fri
                </li>
                <li class="list-group-item">
                  <span class="badge"><?php echo date("ga", strtotime($sat_open)) . '-' . date("ga", strtotime($club_close)); ?></span>
                  Saturday
                </li>
                <li class="list-group-item">
                  <span class="badge"><?php echo date("ga", strtotime($sun_open)) . '-' . date("ga", strtotime($club_close)); ?></span>
                  Sunday
                </li>                  
              </ul>
            </div>
          </div>        
        </div>                        
        <div class="col-xs-12 text-center small">
        &copy; 2015 Night Trips<span class="sep">  |  </span><a href="http://wpguru4u.com/" rel="designer">Web Design by WPguru4u</a>         
        </div>
      </div>
		</div><!-- .site-info container-->
	</footer><!-- #colophon -->