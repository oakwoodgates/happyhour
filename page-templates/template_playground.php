<?php
/**
 * Template Name: zDemo Playground
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>
<h1 class="page-header">Playground before adding to Style Guide</h1>

  <div class="row marg">
     <div class="col-lg-4">
      <div class="bs-component">

        <div class="panel panel-danger">
          <div class="panel-heading">
            <h3 class="panel-title">Panel danger</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>

        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Panel info</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>

      </div>
    </div>   
  </div><!-- /row -->

<div class="row">
    <div class="col-xs-12">
    <?php echo do_shortcode( '[gallery type="rectangular" size="thumbnail" link="file" ids="1462,1463,1464,1465,1466,1467,1468"]' ); ?>
    <?php echo do_shortcode( '[gallery type="columns" size="medium" ids="1469,1468,1467,1466,1465,1464,1463,1462"]' ); ?>
    <?php // echo do_shortcode( '[gallery type="columns" link="file" size="medium" ids="1445,1447,1448,1449,1450,1451,1444"]' ); ?>
    <?php // echo do_shortcode( '[gallery type="thumbnails" link="file" size="medium" ids="1445,1447,1448,1449,1450,1451,1444"]' ); ?>
    <?php // echo do_shortcode( '[gallery type="columns" link="file" size="medium" ids="1445,1447,1448,1449,1450,1451,1444"]' ); ?>
   
    </div>
</div>


<?php
get_footer();