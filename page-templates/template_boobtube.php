<?php
/**
 * Template Name: zDemo Boobtube
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>


<div class="row marg">
	<div class="col-xs-12">
		<h2>BoobTube</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>
</div>
<div class="row">
	<main id="main" class="site-main col-md-8" role="main">

	<div class="row">
			<div class="col-xs-12">
				<div class="panel nt-featured-vid">
					<div class="panel-heading">
						<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=HJAzpr3YXTI'); ?>
					</div>
					<div class="panel-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla.
					</div>
				</div>	
			</div>
			<div class="col-xs-12">
				<div class="panel nt-featured-vid">
					<div class="panel-heading">
						<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=HJAzpr3YXTI'); ?>
					</div>
					<div class="panel-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla.
					</div>
				</div>	
			</div>
			<div class="col-xs-12">
				<div class="panel nt-featured-vid">
					<div class="panel-heading">
						<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=HJAzpr3YXTI'); ?>
					</div>
					<div class="panel-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla.
					</div>
				</div>	
			</div>
			<div class="col-xs-12">
				<div class="panel nt-featured-vid">
					<div class="panel-heading">
						<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=HJAzpr3YXTI'); ?>
					</div>
					<div class="panel-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla.
					</div>
				</div>	
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="panel nt-featured-vid">
					<div class="panel-heading">
						<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=HJAzpr3YXTI'); ?>
					</div>
					<div class="panel-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla.
					</div>
				</div>	
			</div>			
			<div class="col-xs-12 col-md-6">
				<div class="panel nt-featured-vid">
					<div class="panel-heading">
						<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=HJAzpr3YXTI'); ?>
					</div>
					<div class="panel-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla.
					</div>
				</div>	
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="panel nt-featured-vid">
					<div class="panel-heading">
						<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=HJAzpr3YXTI'); ?>
					</div>
					<div class="panel-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla.
					</div>
				</div>	
			</div>
									<div class="col-xs-12 col-md-6">
				<div class="panel nt-featured-vid">
					<div class="panel-heading">
						<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=HJAzpr3YXTI'); ?>
					</div>
					<div class="panel-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla.
					</div>
				</div>	
			</div>
	</div>

	</main><!-- #main col -->

	<div class="col-md-4">
		<?php get_sidebar('boobtube'); ?>
	</div>
</div>
<div class="row marg">
	<div class="col-xs-12">
		<h1>Come Visit</h1>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>
	<div class="col-xs-12 col-md-6">
		<div id="map"></div>
	<!--	<iframe
		  width="600"
		  height="450"
		  frameborder="0" style="border:0"
		  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA_wjmyCYdfeRV-17SNsa6SEJvhB8lN-Lk&q=Night+Trips,Tulsa+OK" allowfullscreen>
		</iframe>	-->
	</div>

	<div class="col-xs-12 col-md-6">
        <div class="panel panel-primary panel-club-info">
			<div class="panel-heading">         
				<h3 class="panel-title">Club Info</h3>
			</div>
	        <div class="panel-body">
	          	<p class="text-center"><em>over 200 of the Southwest’s most beautiful ladies rotating on 4 stages</em></p>
				<div class="col col-xs-6">
					<ul class="list-group">
						<li class="list-group-item">
							<i class="fa fa-beer fa-fw"></i>  Ice Cold Beer
						</li>
						<li class="list-group-item">
							<i class="fa fa-glass fa-fw"></i>  Full Liquor Bar
						</li>
						<li class="list-group-item">
							<i class="fa fa-lock fa-fw"></i>  Private Rooms
						</li>
						<li class="list-group-item">
							<i class="fa fa-cutlery fa-fw"></i>  Kitchen open till 1am
						</li>                
					</ul>          		
				</div>
				<div class="col col-xs-6">
					<ul class="list-group fa-ul">
						<li class="list-group-item">
							<i class="fa fa-television fa-fw"></i>  Sports
						</li>
						<li class="list-group-item">
							<i class="fa fa-volume-up fa-fw"></i>  Speakers
						</li>
						<li class="list-group-item">
							<i class="fa fa-diamond fa-fw"></i>  VIP
						</li>
						<li class="list-group-item">
							<i class="fa fa-music fa-fw"></i>  music
						</li>                
					</ul>         		
				</div>
	        </div>
			<div class="panel-footer">
				<ul class="list-inline text-center">
					<li class="text-danger"><i class="fa fa-2x fa-female"></i> ALWAYS FREE</li>
					<li class="text-info"><i class="fa fa-2x fa-male"></i> ONLY $5</li>
				</ul>          
				<ul class="list-inline text-center">
					<li><i class="fa fa-2x fa-cc-visa" data-toggle="tooltip" data-placement="top" title="VISA" data-original-title="VISA"></i></li>
					<li><i class="fa fa-2x fa-cc-mastercard" data-toggle="tooltip" data-placement="top" title="MasterCard" data-original-title="MasterCard"></i></i></li>
					<li><i class="fa fa-2x fa-cc-discover" data-toggle="tooltip" data-placement="top" title="Discover" data-original-title="Discover"></i></i></li>
					<li><i class="fa fa-2x fa-cc-amex" data-toggle="tooltip" data-placement="top" title="American Express" data-original-title="American Express"></i></i></li>
					<li><i class="fa fa-2x fa-cc-paypal" data-toggle="tooltip" data-placement="top" title="PayPal" data-original-title="PayPal"></i></i></li>
					<li><i class="fa fa-2x fa-money" data-toggle="tooltip" data-placement="top" title="Cash - ATM Onsite" data-original-title="Cash - ATM Onsite"></i></i></li>
				</ul>
				<ul class="list-inline text-center">
					<li>ATM</li>
					<li><i class="fa fa-star small text-primary"></i></li>
					<li>wifi</li>
					<li><i class="fa fa-star small text-primary"></i></li>
					<li>21+</li>
				</ul>
			</div>
        </div>
	</div>

</div>
<?php
get_footer();