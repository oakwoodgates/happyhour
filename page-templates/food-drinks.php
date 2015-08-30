<?php
/**
 * Template Name: Food & Drinks
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>
<div class="row marg">
	<div class="col-xs-12">
		<h1>Heading</h1>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
	</div>
</div>

<div class="row marg">
	<div class="col-xs-12">
		<h2>Drinks</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>

	</div>
</div>
<div class="row marg no-gutter">
	<div class="col-xs-12 col-sm-6 col-md-3">
		<img class="center-block" src="//nighttrips.com/Tulsa/wp-content/uploads/2014/02/Night-Trips-Drink-Menu-P1.jpg">
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3">
		<img class="center-block" src="//nighttrips.com/Tulsa/wp-content/uploads/2014/02/Night-Trips-Drink-Menu-P2.jpg">
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3">
		<img class="center-block" src="//nighttrips.com/Tulsa/wp-content/uploads/2013/12/1.jpg">
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3">
		<img class="center-block" src="//nighttrips.com/Tulsa/wp-content/uploads/2014/02/Night-Trips-Drink-Menu-P4.jpg">
	</div>	
</div>

<div class="row marg">
	<div class="col-xs-12">
		<h2>Eats</h2>
		<p><i class="fa fa-exclamation-triangle"></i> Kitchen open till 1 am</p>
	</div>
</div>
<div class="row marg no-gutter">
	<div class="col-xs-12 col-sm-6">
		<img class="center-block" src="//nighttrips.com/Tulsa/wp-content/uploads/2013/11/TNT-Menu-As-of-10-24-13-p1.jpg">
	</div>
	<div class="col-xs-12 col-sm-6">
		<img class="center-block" src="//nighttrips.com/Tulsa/wp-content/uploads/2013/11/TNT-Menu-As-of-10-24-13-p2.jpg">
	</div>	
</div>

<?php
get_template_part( 'content-blocks/subfooter-actions' );
get_template_part( 'content-blocks/subfooter-general' );
get_footer();