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
<div id="input_layout" class="image ui-buttonset">

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

</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
      <div class="row marg footer-headline">
        <div class="col-xs-12">
          <h3 class="headline">Some awesome headline</h3>
        </div>        
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <img data-src="holder.js/400x300?text=Logo">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <h4>Links</h4>
          <ul class="fa-ul">
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
          </ul>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-xs-12 col-sm-6 col-md-3 footer-social">
          <h4>Social</h4>
          <ul class="fa-ul">
            <li><a href="https://www.facebook.com/nighttripstulsa"><i class="fa fa-li fa-facebook"></i>Facebook</a></li>
            <li><a href="https://twitter.com/nighttripstulsa"><i class="fa fa-li fa-twitter"></i>Twitter</a></li>
            <li><a href="https://www.youtube.com/user/nighttripstv"><i class="fa fa-li fa-youtube-play"></i>YouTube</a></li>
            <li><a href="http://www.yelp.com/biz/night-trips-tulsa"><i class="fa fa-li fa-yelp"></i>Yelp</a></li>
            <li><a href="http://nighttripspics.tumblr.com/"><i class="fa fa-li fa-tumblr"></i>Tumblr</a></li>
            <li><a href="https://plus.google.com/113504749391687494200/about"><i class="fa fa-li fa-google-plus"></i>Google+</a></li>
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
        <div class="col-xs-12">
          <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'happyhour' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'happyhour' ), 'WordPress' ); ?></a>
          <span class="sep"> | </span>
          <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'happyhour' ), 'happyhour', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>         
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
<script>window.fbAsyncInit = function() {
  FB.init({
    xfbml      : true,
    version    : 'v2.3'
  });
  }; (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>

</body>
</html>
