<?php
/**
 * Template Name: Layout
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>

<div class="row marg">
	<div class="col-md-12">
		<img data-src="holder.js/851x315?bg=684190&fg=ffffff">
	</div>
</div>
<div class="row marg">
	<div class="col-xs-12 col-md-8">
		<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=AfuCLp8VEng'); ?>
	</div>
	<div class="col-xs-12 col-md-4">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-12">
				<?php echo $embed_code = wp_oembed_get('https://twitter.com/SamuelLJackson/status/619826409104613376'); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-12">
				<img data-src="holder.js/400x200?theme=industrial&outline=yes">			
			</div>		
		</div>
	</div>
</div>
<div class="row marg">
	<div class="col-xs-12 col-md-6 col-lg-5">
		<div class="fb-post" data-href="https://www.facebook.com/nighttripstulsa/posts/926174207440764" data-width="500"></div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-7">
		<div class="row marg">
			<div class="col-xs-12 col-md-12">
				<img data-src="holder.js/851x315?bg=684190&fg=ffffff">
						<?php echo do_shortcode( '[gallery type="columns" size="large" ids="977,1261,1038,967,1040,807"]' ); ?>	

			</div>
		</div>
		<div class="row marg">
			<div class="col-xs-12 col-sm-6">
		<?php // echo do_shortcode( '[gallery type="columns" size="large" ids="977,1261,1038,967,1040,807"]' ); ?>	

			</div>			
		</div>		
	</div>	
</div>
</div>
<div  class="marg neon-sign">
<div class="container">
<div class="row">
<div class="col-xs-12">
  <div class="bs-component">
	  <p class="neon neon-purple">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
  </div>
</div>
</div>
</div>
</div>
<div id="content-bottom" class="site-content container">
<div class="row marg">
	<div class="col-md-8 col-xs-12">
	<div class="col-xs-12">
		<div class="row no-gutter">
			<div class="col-xs-12">
				<div class="media event-simple card-one event-danger">
					<div class="media-header">
						<img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/8.jpg" />
					</div>
					<div class="media-left bkg-darker">
						<a href="javascript:void(0)">
							<span class="day">day</span>
							<span class="date">23</span>
							<span class="month">month</span>
						</a>
					</div>
					<div class="media-body bkg-darker">
						<a class="event-description" href="javascript:void(0)">
							<h4 class="media-heading">Media heading</h4>
							Cras sit amet nibh libero, in gravida nulla.
						</a>
					</div>
				</div>				
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="media event-simple card-one event-danger">
					<div class="media-header">
						<img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/8.jpg" />
					</div>
					<div class="media-left bkg-darker">
						<a href="javascript:void(0)">
							<span class="day">day</span>
							<span class="date">23</span>
							<span class="month">month</span>
						</a>
					</div>
					<div class="media-body bkg-darker">
						<a class="event-description" href="javascript:void(0)">
							<h4 class="media-heading">Media heading</h4>
							Cras sit amet nibh libero, in gravida nulla.
						</a>
					</div>
				</div>				
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="media event-simple card-one event-danger">
					<div class="media-header">
						<img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/8.jpg" />
					</div>
					<div class="media-left bkg-darker">
						<a href="javascript:void(0)">
							<span class="day">day</span>
							<span class="date">23</span>
							<span class="month">month</span>
						</a>
					</div>
					<div class="media-body bkg-darker">
						<a class="event-description" href="javascript:void(0)">
							<h4 class="media-heading">Media heading</h4>
							Cras sit amet nibh libero, in gravida nulla.
						</a>
					</div>
				</div>				
			</div>
			<div class="col-xs-12 event-column-one">
				<div class="media event-simple card-one event-info">
				<div class="media-left bkg-base">
				<a href="javascript:void(0)">
				<span class="day">day</span>
				<span class="date">23</span>
				<span class="month">month</span>
				</a>
				</div>
				<div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/7.jpg');">
				<a class="event-description" href="javascript:void(0)">
				<h4 class="media-heading">Media heading</h4>
				Cras sit amet nibh libero, in gravida nulla.
				</a>
				<div class="overlay bkg-base" style=""></div>
				</div>
				</div>			
			</div>	
		</div><!-- /row no-gutter -->
	</div>
	</div><!-- /left col -->
	<div class="col-md-4 col-xs-12 event-column-one">
      <div class="media event-simple card-one event-primary">
		<div class="media-header">
			<img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/10.jpg" />
		</div>      
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">M-F</span>
            <span class="date"><i class="fa fa-star-o fa-lg"></i></span>
            <span class="month">4-7pm</span>
          </a>
        </div>
        <div class="media-body" style="">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base"></div>        
        </div>
      </div>

      <div class="media event-simple card-one card-two event-primary">     
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">M-F</span>
            <span class="date"><i class="fa fa-star-o fa-lg"></i></span>
            <span class="month">4-7pm</span>
          </a>
        </div>
        <div class="media-body" style="">
        <a class="event-description" href="javascript:void(0)">
			<img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/10.jpg" />
        </a>
      <div class="overlay bkg-base"></div>        
        </div>
      </div>

      <div class="media event-simple card-one event-primary">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/2.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>       
        </div>
      </div>

      <div class="media event-simple card-one event-warning">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/4.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>

      <div class="media event-simple card-one event-info">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/5.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>   
      <div class="media event-simple card-one event-primary">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/6.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div> 
      <div class="media event-simple card-one event-danger">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/9.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>    

	</div>

</div>

<div class="row marg">
	<div class="col-md-5">
		<img data-src="holder.js/600x400?bg=684190&fg=ffffff">
	</div>
	<div class="col-md-7">
		<?php echo do_shortcode( '[gallery type="rectangular" size="medium" ids="977,1038,967,807,1261,758,827"]' ); ?>
	</div>
</div>	
<div class="row marg">
	<div class="col-md-7">
		<?php echo do_shortcode( '[gallery type="columns" size="large" ids="977,1261,1038,967,1040,807"]' ); ?>	
	</div>
	<div class="col-md-5">
		<img data-src="holder.js/600x400?bg=684190&fg=ffffff">
	</div>
</div>

<div class="row marg">
	<div class="col-md-12">
			<?php get_sidebar(); ?>
	</div>
</div>

<div class="row marg">
	<div class="col-md-12">
		<div id="map"></div>
	</div>
</div>




<?php
get_footer();