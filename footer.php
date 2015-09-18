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
<!-- <div id="input_layout" class="image ui-buttonset">

<div class="customizer-subtitle"></div>
    <input id="layout0" class="image-select ui-helper-hidden-accessible" type="radio" checked="checked" data-customize-setting-link="layout" name="_customize-radio-layout" value="base"></input>
    <input id="layout1" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w1"></input>
    <input id="layout2" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w2"></input>
    <input id="layout3" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w3"></input>
    <input id="layout4" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w4"></input>
    <input id="layout5" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w5"></input>
    <input id="layout6" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w6"></input>
    <input id="layout7" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w7"></input>
    <input id="layout8" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w8"></input>

    <input id="layout9" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="p1"></input>
    <input id="layout10" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="p2"></input>    
    <input id="layout11" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="c8190"></input>    


    <input id="layout12" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n1"></input>
    <input id="layout13" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n2"></input>    
    <input id="layout14" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n3"></input>    
    <input id="layout15" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n4"></input>
    <input id="layout16" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n5"></input>    
    <input id="layout17" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n6"></input>    
    <input id="layout18" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n7"></input>
    <input id="layout19" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n8"></input>    
    <input id="layout20" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n9"></input>    
    <input id="layout21" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n10"></input>    
    <input id="layout22" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n11"></input>    
    <input id="layout23" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n12"></input>    
    <input id="layout24" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n13"></input>    


</div> -->
  <footer <?php hybrid_attr( 'footer' ); ?>>
		<div class="site-info container">
      <div class="row marg footer-headline">
        <div class="col-xs-12">
          <h3 class="headline">Come Join The Party!</h3>
        </div>        
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="">
            <img src="http://nighttrips.com/Tulsa/wp-content/themes/NightTripsTulsaTemplate/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="center-block" >
          </a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="">
            <img src="http://nighttrips.com/OKC/wp-content/themes/NightTripsOKCTemplate/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="center-block" >
          </a>          
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3">
          <h4>Links</h4>
          <?php 
            wp_nav_menu( array( 
              'theme_location' => 'footer',
              'menu_id' => 'footer-menu'
              ) 
            ); 
          ?>          
        </div>
      <!--  <div class="clearfix visible-sm-block"></div> -->
        <div class="col-xs-6 col-sm-6 col-md-3 footer-social">
          <h4>Social</h4>
          <ul class="fa-ul">
            <li><a href="https://www.facebook.com/nighttripstulsa"><i class="fa fa-li fa-facebook"></i>Facebook</a></li>
            <li><a href="https://twitter.com/nighttripstulsa"><i class="fa fa-li fa-twitter"></i>Twitter</a></li>
            <li><a href="https://www.youtube.com/user/nighttripstv"><i class="fa fa-li fa-youtube-play"></i>YouTube</a></li>
<!--            <li><a href="http://www.yelp.com/biz/night-trips-tulsa"><i class="fa fa-li fa-yelp"></i>Yelp</a></li> -->
            <li><a href="http://nighttripspics.tumblr.com/"><i class="fa fa-li fa-tumblr"></i>Tumblr</a></li>
            <li><a href="https://https://plus.google.com/+NightTripsTulsa/posts"><i class="fa fa-li fa-google-plus"></i>Google+</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 footer-details">
          <h4>Details</h4>
          <div>
            <a href="#"><i class="fa fa-phone"></i> (918) 622-3858</a>
          </div>
          <div>
            <a href="#"><i class="fa fa-map-marker"></i> 3902 S. Sheridan Rd., Tulsa, OK 74145</a>
          </div>
          <div class="panel panel-info open-hours">
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">
                  <span class="badge">12pm-2am</span>
                  Mon-Fri
                </li>
                <li class="list-group-item">
                  <span class="badge">2pm-2am</span>
                  Saturday
                </li>
                <li class="list-group-item">
                  <span class="badge">7pm-2am</span>
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
</div><!-- #page -->
<script>
  jQuery("input.image-select:radio").change(function($) {
    var myval = this.value;
    
    jQuery('body').removeClass();
    jQuery('body').addClass( myval );
  });  
</script>

<?php wp_footer(); ?>

</body>
</html>
