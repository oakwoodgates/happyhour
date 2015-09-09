<?php
/**
 * VIP Pluxh Section for callouts
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
	        		<h3>
<?php echo wp_get_attachment_image( 1600, 'medium', false, array( 'class'	=> "align-left" ) ); ?><br /> 
					
					Bar &amp; Lounge</h3>
	        		<p class="info">Welcome to Night Trip’s newest level of luxury. Luxurious seating and couches in an intimate setting. Perfect for individuals that want to escape the crowds and enjoy VIP service at its finest.</p>
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