<?php
/**
 * The template for displaying all single "promos".
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package happyhour
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-md-7" role="main" itemprop="mainContentOfPage">

		<?php while ( have_posts() ) : the_post(); ?>

<?php
		$day = get_post_meta( get_the_ID(), '_happyhour_promo_data_day', true );
		$start = get_post_meta( get_the_ID(), '_happyhour_promo_data_start_time', true );
		$start_time = date("ga", strtotime($start));
		$end = get_post_meta( get_the_ID(), '_happyhour_promo_data_end_time', true );
		$end_time = date("ga", strtotime($end));
		$location = cmb2_get_option( 'happyhour_status', 'happyhour_status_location_post' );
		$name = get_post_meta( $location, '_jsg4u_general_name', true );
		$url = get_post_meta( $location, '_jsg4u_general_url', true );
		$streetAddress = get_post_meta( $location, '_jsg4u_location_streetaddress', true );
		$addressLocality = get_post_meta( $location, '_jsg4u_location_addresslocality', true );
		$addressRegion = get_post_meta( $location, '_jsg4u_location_addressregion', true );
		$postalCode = get_post_meta( $location, '_jsg4u_location_postalcode', true );
		$promo_start = date("D", strtotime($day)) . ' ' . $start_time;
		$promo_end = date("D", strtotime($day)) . ' ' . $end_time;
		?>

			<article <?php post_class(); ?> itemscope itemtype="http://schema.org/SaleEvent">
				<header class="entry-header">
					<?php the_title( '<h1 itemprop="name" class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">
						<?php // happyhour_posted_on(); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<div itemprop="description" class="entry-content">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
					 the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'happyhour' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
		      <meta itemprop="startDate" content="<?php echo date("c", strtotime($promo_start)); ?>">
		      <meta itemprop="endDate" content="<?php echo date("c", strtotime($promo_end)); ?>">
				<span itemprop="location" itemscope itemtype="http://schema.org/NightClub">
					<meta itemprop="url" content="<?php echo $url; ?>">
					<meta itemprop="name" content="<?php echo $name; ?>">
					<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					  <meta itemprop="streetAddress" content="<?php echo $streetAddress; ?>">
					  <meta itemprop="addressLocality" content="<?php echo $addressLocality; ?>">
					  <meta itemprop="addressRegion" content="<?php echo $addressRegion; ?>">
					  <meta itemprop="postalCode" content="<?php echo $postalCode; ?>">
					</span>
				</span>	
					<?php // happyhour_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->
			<?php // get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
			//	if ( comments_open() || get_comments_number() ) :
			//		comments_template();
			//	endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<div class="col-md-5">
			<?php get_sidebar(); ?>
		</div>

	</div><!-- #primary -->
	<div class="row marg">
		<div class="col-xs-12">
			<div class="col-xs-12">
				<?php get_template_part( 'content-blocks/callout_promodays-horizontal' ); ?>
			</div>
		</div>			
	</div>

<?php
get_template_part( 'content-blocks/subfooter_actions' );
get_template_part( 'content-blocks/subfooter_general' );
get_footer(); ?>