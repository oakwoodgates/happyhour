<?php
/**
 * VIP Pluxh Section for VIP Page
 *
 * @author  WPguru4u
 * @package happyhour
 */
?>
<div class="col-xs-12">
	<div class="panel panel-vip panel-pluxh">
		<div class="panel-body">
			<div class="col-md-5">
				<?php get_template_part( 'content-blocks/pluxh-vertical-img' ); ?>
			</div>
			<div class="col-md-7">
				<?php echo do_shortcode( '[gallery type="rectangular" size="thumbnail" link="file" ids="1465,1468,1464"]' ); ?>
				<div class="jumbotron mini-jumbotron bkg-darker">
	        		<h3>Pluxh</h3>
	        		<p class="info">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					<div class="row">
						<div class="col-xs-12 col-sm-6 panel-club-info">
							<ul class="list-group">
								<li class="list-group-item"><i class="fa fa-magic fa-lg fa-fw"></i> Private Stage</li>
								<li class="list-group-item"><i class="fa fa-key fa-lg fa-fw"></i> Private Bar</li>
								<li class="list-group-item"><i class="fa fa-users fa-lg fa-fw"></i>Private Security</li>									
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 panel-club-info">
							<ul class="list-group">
								<li class="list-group-item"><i class="fa fa-lock fa-lg fa-fw"></i> Private Bathrooms</li>
								<li class="list-group-item"><i class="fa fa-glass fa-lg fa-fw"></i> Private Drink Menu</li>
								<li class="list-group-item"><i class="fa fa-thumbs-up fa-lg fa-fw"></i> Non Smoking</li>									
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

