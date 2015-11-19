<?php
/**
 * Social content block for home page
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<div class="row marg">
	<div class="col-xs-12">
		<h2>Get Social With Us</h2>
		  <?php if( is_okc() ) : ?>
			<p class="lead">We’re always entertaining on <a href="https://www.facebook.com/nighttripsokc">Facebook</a>, <a href="https://twitter.com/nighttripsokc">Twitter</a> and <a href="https://www.youtube.com/user/nighttripstv">Youtube</a>. Like our beer? Check out our list of our <a href="http://nighttrips.com/OKC/craft-beer/craft-beer-list">Favorite Craft Brews</a>.</p>
		  <?php else : ?>
			<p class="lead">We’re always entertaining on <a href="https://www.facebook.com/nighttripstulsa">Facebook</a>, <a href="https://twitter.com/nighttripstulsa">Twitter</a> and <a href="https://www.youtube.com/user/nighttripstv">Youtube</a>. Like our drinks? Try them at home with our recipes on <a href="https://www.pinterest.com/nighttrips">Pinterest</a>.</p>
		  <?php endif; ?>		
	</div>
	<div class="col-xs-12 col-md-5">
		<?php get_sidebar(); ?>
	</div>
	<div class="col-xs-12 col-md-7">
		<div class="row">
			<div class="col-xs-12">
				<?php get_template_part( 'content-blocks/callout_boobtube-latest' ); ?>
			</div>		
			<div class="col-xs-12 col-sm-7">
				<div class="twitter-box">
				  <?php 
					$tweet = esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_twitter_post' ) );
					echo wp_oembed_get( $tweet );
				  ?>				
				</div>
		  		<?php if( is_okc() ) : ?>
		  			<div class="fb-page" data-href="https://www.facebook.com/nighttripsokc" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/nighttripsokc"><a href="https://www.facebook.com/nighttripsokc">Night Trips OKC</a></blockquote></div></div>
		  		<?php else : ?>
					<div class="fb-page" data-href="https://www.facebook.com/nighttripstulsa" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/nighttripstulsa"><a href="https://www.facebook.com/nighttripstulsa">Night Trips Tulsa</a></blockquote></div></div>
		  		<?php endif; ?>
			</div>
			<div class="col-xs-12 col-sm-5">
				<?php $pin = esc_url( cmb2_get_option( 'happyhour_options', 'happyhour_pinterest_post' ) ); ?>
				<a data-pin-do="embedPin" href="<?php echo $pin; ?>"></a>
				<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
			</div>			
		</div>		
	</div>	
</div>