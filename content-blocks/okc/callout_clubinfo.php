<?php
/**
 * Club Info panel
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<div class="panel panel-primary panel-club-info">
	<div class="panel-heading">         
		<h3 class="panel-title">Club Info</h3>
	</div>
    <div class="panel-body">
      	<p class="text-center"><br /><em>over 200 of the Southwest’s most beautiful ladies rotating on 3 stages</em></p>
		<div class="col col-xs-6">
			<ul class="list-group">
				<li class="list-group-item">
					<i class="fa fa-beer fa-fw"></i>  Ice Cold Beer
				</li>
				<li class="list-group-item">
					<i class="fa fa-diamond fa-fw"></i>  VIP Booths
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
					<i class="fa fa-star-o fa-fw"></i>  3 Stages
				</li>

				<li class="list-group-item">
					<i class="fa fa-music fa-fw"></i>  Music
				</li>                
			</ul>         		
		</div>
    </div>
	<div class="panel-footer">
	<?php if ( get_post_type() != 'tribe_events' ) : ?>
		<ul class="list-inline text-center">
			<li class="text-danger"><i class="fa fa-2x fa-female"></i> ALWAYS FREE</li>
			<li class="text-info"><i class="fa fa-2x fa-male"></i> ONLY $5</li>
		</ul>
	<?php endif; ?>        
		<ul class="list-inline text-center">
			<li><i class="fa fa-2x fa-cc-visa" data-toggle="tooltip" data-placement="top" title="VISA" data-original-title="VISA"></i></li>
			<li><i class="fa fa-2x fa-cc-mastercard" data-toggle="tooltip" data-placement="top" title="MasterCard" data-original-title="MasterCard"></i></li>
			<li><i class="fa fa-2x fa-cc-discover" data-toggle="tooltip" data-placement="top" title="Discover" data-original-title="Discover"></i></li>
			<li><i class="fa fa-2x fa-cc-amex" data-toggle="tooltip" data-placement="top" title="American Express" data-original-title="American Express"></i></li>
			<li><i class="fa fa-2x fa-cc-paypal" data-toggle="tooltip" data-placement="top" title="PayPal" data-original-title="PayPal"></i></li>
			<li><i class="fa fa-2x fa-usd" data-toggle="tooltip" data-placement="top" title="Cash - ATM Onsite" data-original-title="Cash - ATM Onsite"></i></li>
			<li><i class="fa fa-2x fa-money" data-toggle="tooltip" data-placement="top" title="Dancer Dollars" data-original-title="Dancer Dollars"></i></li>
		</ul>
		<ul class="list-inline text-center">
			<li>ATM</li>
			<li><i class="fa fa-star small text-primary"></i></li>
			<li>WiFi</li>
			<li><i class="fa fa-star small text-primary"></i></li>
			<li>21+</li>
		</ul>
	</div>
</div>
