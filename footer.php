<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package happyhour
 */
?>

	</div><!-- #content container-->
<!-- <div id="input_layout" class="image ui-buttonset">

<div class="customizer-subtitle"></div>
    <input id="layout0" class="image-select ui-helper-hidden-accessible" type="radio" checked="checked" data-customize-setting-link="layout" name="_customize-radio-layout" value="base"></input>
    <input id="layout1" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w1"></input>
    <input id="layout2" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w2"></input>
    <input id="layout3" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w3"></input>
    <input id="layout4" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w4"></input>
    <input id="layout5" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w5"></input>
    <input id="layout6" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w6"></input>
    <input id="layout7" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w7"></input>
    <input id="layout8" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="w8"></input>

    <input id="layout9" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="p1"></input>
    <input id="layout10" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="p2"></input>    
    <input id="layout11" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="c8190"></input>    


    <input id="layout12" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n1"></input>
    <input id="layout13" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n2"></input>    
    <input id="layout14" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n3"></input>    
    <input id="layout15" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n4"></input>
    <input id="layout16" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n5"></input>    
    <input id="layout17" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n6"></input>    
    <input id="layout18" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n7"></input>
    <input id="layout19" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n8"></input>    
    <input id="layout20" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n9"></input>    
    <input id="layout21" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n10"></input>    
    <input id="layout22" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n11"></input>    
    <input id="layout23" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n12"></input>    
    <input id="layout24" class="image-select ui-helper-hidden-accessible" type="radio" data-customize-setting-link="layout" name="_customize-radio-layout" value="n13"></input>    


</div> -->
<?php get_template_part( 'content-blocks/' . tulsa_or_okc() . 'footer' ); ?>

</div><!-- #page -->
<script>
  jQuery("input.image-select:radio").change(function($) {
    var myval = this.value;
    
    jQuery('body').removeClass();
    jQuery('body').addClass( myval );
  });  
</script>

<?php wp_footer(); ?>

</body>
</html>