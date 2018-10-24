<?php
/**
 * Template Name: zDemo VIP
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>

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
						<div class="well">
				          Call me maybe
				        </div>
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
						<div class="well">
				          Call me maybe
				        </div>
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
						<div class="well">
				          Call me maybe
				        </div>
			        </div>
				</div>				
			</div>			
		</div>
	</div>
</div>

<div class="row marg">
	<div class="col-xs-12">
		<h2>Come Visit</h2>
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