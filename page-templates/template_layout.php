<?php
/**
 * Template Name: zDemo Layout
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>

<div class="row marg">
	<div class="col-xs-12">
		<img data-src="holder.js/1140x315?bg=684190&fg=ffffff">
	</div>
</div>
<div class="row marg">
	<div class="col-xs-12 text-center">
		<h1>Welcome and such</h1>
		<p class="lead">lions, tigers, and bears; oh my</p>
	</div>
</div>
<div class="row marg">
	<div class="col-xs-12 col-md-8">
		<div class="panel nt-featured-vid">
			<div class="panel-heading">
				<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=8y3HUdkyUr4'); ?>
			</div>
			<div class="panel-body">
				<h4 class="media-heading">Media heading</h4>
				Cras sit amet nibh libero, in gravida nulla.
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-4">
			<img class="center-block" src="https://nighttrips.com/Tulsa/wp-content/uploads/2015/08/HappyHourOKCTableTent.jpg">

	<!--	<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-12">
				<div class="twitter-box">
					<?php // echo $embed_code = wp_oembed_get('https://twitter.com/SamuelLJackson/status/619826409104613376'); ?>
					<div id="funk"></div>
					<div id="twitter-wjs"></div>
				</div>
				<p class="lead">
				some text
				</p>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-12">
				<img data-src="holder.js/1024x570">
			</div>
		</div> -->
	</div>
</div>
<div class="row marg">
<div class="col-xs-12">
	<h2>Food &amp; Drinks</h2>
	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
</div>

	<div class="col-xs-12 col-md-6 col-lg-5">
		<div class="fb-post marg" data-href="https://www.facebook.com/nighttripstulsa/posts/926174207440764" data-width="500"></div>
        <div class="jumbotron mini-jumbotron panel bkg-notblack">
          <h4>Our Awesome Bar &amp; Kitchen</h4>
          <p class="info">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <p class="action text-right"><a class="btn btn-primary btn-lg">View Menu</a></p>
        </div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-7">
		<div class="row marg">
			<div class="col-xs-12 col-md-12">
			<!--	<img data-src="holder.js/851x315?bg=684190&fg=ffffff"> -->
				<?php // echo do_shortcode( '[gallery type="rectangular" size="medium" ids="1478,1487,1496,1494,1477,1483,1481,1497,1498"]' ); ?>
				<?php echo do_shortcode( '[gallery type="rectangular" size="medium" ids="1478,1477,1496,1494,1483,1481"]' ); ?>
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
<div class="marg neon-sign">
	<div class="">
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
	<div class="col-xs-12">
		<h2>Late Night Fun</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>


	<div class="col-xs-12">
		<div class="col-xs-12 col-md-8">
			<div class="row no-gutter">

				<div class="col-xs-12">
					<div class="media event-simple card-one event-danger">
						<div class="media-header">
							<img src="https://nighttrips.com/Tulsa/wp-content/uploads/2012/01/AsaAkiraTNTLobby-1024x570.jpg" />
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
				<div class="col-xs-12 col-sm-6">
					<div class="media event-simple card-one event-danger">
						<div class="media-header">
							<img src="https://nighttrips.com/Tulsa/wp-content/uploads/2015/03/stpattysTulsaLobby-900x501.jpg" />
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
				<div class="col-xs-12 col-sm-6">
					<div class="media event-simple card-one event-danger">
						<div class="media-header">
							<img src="https://nighttrips.com/Tulsa/wp-content/uploads/2015/01/RileyReidTULSALobby-1024x570.jpg" />
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

			</div>
		</div>

		<div class="col-xs-12 col-md-4 event-column-one">
			<div class="row no-gutter">
				<div class="col-xs-12">
			      	<img class="center-block" src="https://nighttrips.com/Tulsa/wp-content/uploads/2015/05/MissNTTULSAFB.jpg">
			        <div class="jumbotron mini-jumbotron panel bkg-notblack">
			          <h4>Our Events are the Best!</h4>
			          <p class="info">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			          <p class="action text-right"><a class="btn btn-primary btn-lg">See All</a></p>
			        </div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="row marg"></div>


<div class="row marg">
	<div class="col-xs-12">
		<h2>VIP Something</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>
	<div class="col-xs-12">
		<div class="panel panel-vip">
			<div class="panel-body">
				<div class="col-xs-12 col-md-8 col-md-push-4">
			    	<?php echo do_shortcode( '[gallery type="rectangular" size="thumbnail" link="file" ids="1465,1468,1464"]' ); ?>
				</div>
				<div class="col-xs-12 col-md-4 col-md-pull-8">
			        <div class="jumbotron mini-jumbotron bkg-darker">
			          <h3>VIP Booths</h3>
			          <p class="info">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			          <p class="action"><a class="btn btn-primary btn-lg">More Info</a></p>
			        </div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="panel panel-vip">
			<div class="panel-body">
				<div class="col-md-8">
			    	<?php echo do_shortcode( '[gallery type="rectangular" size="thumbnail" link="file" ids="1504,1503,1502"]' ); ?>
				</div>
				<div class="col-md-4">
			        <div class="jumbotron mini-jumbotron bkg-darker">
			          <h3>Private Rooms</h3>
			          <p class="info">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			          <p class="action"><a class="btn btn-primary btn-lg">More Info</a></p>
			        </div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12">
		<div class="panel panel-vip panel-pluxh">
			<div class="panel-body">
				<div class="col-md-5">
					<img data-src="holder.js/600x900?text=Pluxh callout.">
				<!--	<img class="center-block" src="https://nighttrips.com/Tulsa/wp-content/uploads/2015/08/HappyHourOKCTableTent.jpg">

					<img class="center-block" src="https://nighttrips.com/Tulsa/wp-content/uploads/2014/04/pluxhtabletentfacebook.png"> -->
				</div>
				<div class="col-md-7">
					<?php echo do_shortcode( '[gallery type="rectangular" size="thumbnail" link="file" ids="1465,1468,1464"]' ); ?>
					<div class="jumbotron mini-jumbotron bkg-darker">
		        		<h3>Pluxh</h3>
		        		<p class="info">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<ul>
									<li class=""><i class="fa fa-beer fa-fw"></i>yea</li>
									<li class=""><i class="fa fa-beer fa-fw"></i>yea</li>
									<li class=""><i class="fa fa-beer fa-fw"></i>yea</li>
								</ul>
							</div>
							<div class="col-xs-12 col-sm-6">
								<ul>
									<li class=""><i class="fa fa-beer fa-fw"></i>yea</li>
									<li class=""><i class="fa fa-beer fa-fw"></i>yea</li>
									<li class=""><i class="fa fa-beer fa-fw"></i>yea</li>
								</ul>
							</div>
						</div>
			        	<p class="action text-right"><a class="btn btn-primary btn-lg">More Info</a></p>
			        </div>
				</div>
			</div>
		</div>
	</div>


</div>


<div class="row marg"></div>

<div class="row marg">
	<div class="col-xs-12">
		<h2>Social Something</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>
	<div class="col-xs-12 col-md-5">
		<?php get_sidebar(); ?>
	</div>
	<div class="col-xs-12 col-md-7">
		<div class="row">
			<div class="col-xs-12">
				<div class="panel nt-featured-vid">
					<div class="panel-heading">
						<h5>Latest from the BoobTube &hellip;</h5>
						<?php echo $embed_code = wp_oembed_get('https://www.youtube.com/watch?v=HJAzpr3YXTI'); ?>
					</div>
					<div class="panel-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla.
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="twitter-box">
					<?php echo $embed_code = wp_oembed_get('https://twitter.com/SamuelLJackson/status/619826409104613376'); ?>
				<!--	<div id="funk"></div>
					<div id="twitter-wjs"></div> -->
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<img data-src="holder.js/400x200?text=4-way Follow Box.">
			</div>
		</div>
	</div>
</div>

<div class="row marg">
	<div class="col-xs-12">
		<h2>Come Visit</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>
	<div class="col-xs-12 col-md-12 marg">
<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1440615833974!6m8!1m7!1s_zZUQjNAFnoAAAQuntmNCw!2m2!1d35.46360692884419!2d-97.59654416214829!3f57.45!4f0!5f0.7820865974627469" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="col-xs-12 col-md-6">
		<div id="map"></div>
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
