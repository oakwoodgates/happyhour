<?php
/**
 * HTML attribute functions and filters. The purposes of this is to provide a
 * way for theme/plugin devs to hook into the attributes for specific HTML
 * elements and create new or modify existing attributes. The biggest benefit of
 * using this is to provide richer microdata while being forward compatible with
 * the ever-changing Web.  Currently, the default microdata vocabulary supported
 * is Schema.org.
 *
 * @package     Oakwood meets happyhour
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015, OakwoodGates
 * @license     GPL-2.0+
 * @link        https://github.com/oakwoodgates/
 * @since       1.0.0
 */

add_filter( 'hybrid_attr_header',  'happyhour_attr_header',  10    );
/**
 * Page <header> element attributes.
 *
 * @since  1.0.0
 * @access public
 * @param  array   $attr
 * @return array
 */
function happyhour_attr_header( $attr ) {

	$attr['id']        = 'masthead';
	$attr['class']     = 'site-header container';
	$attr['role']      = 'banner';
	$attr['itemscope'] = 'itemscope';
	$attr['itemtype']  = 'http://schema.org/WPHeader';

	return $attr;
}

add_filter( 'hybrid_attr_menu',    'happyhour_attr_menu',    10, 2 );
/**
 * Nav menu attributes.
 *
 * @since  2.0.0
 * @access public
 * @param  array   $attr
 * @param  string  $context
 * @return array
 */
function happyhour_attr_menu( $attr, $context ) {

	$attr['class'] = 'navbar';
	$attr['role']  = 'navigation';

	if ( $context ) {

		$attr['class'] .= " navbar-inverse panel";
		$attr['id']     = "navbar-{$context}";

		$menu_name = hybrid_get_menu_location_name( $context );

		if ( $menu_name ) {
			// Translators: The %s is the menu name. This is used for the 'aria-label' attribute.
			$attr['aria-label'] = esc_attr( sprintf( _x( '%s', 'nav menu aria label', 'hybrid-core' ), $menu_name ) );
		}
	}

	$attr['itemscope']  = 'itemscope';
	$attr['itemtype']   = 'http://schema.org/SiteNavigationElement';

	return $attr;
}
add_filter( 'hybrid_attr_menu2',    'happyhour_attr_menu2',    10, 2 );
function happyhour_attr_menu2( $attr, $context ) {

//	$attr['class'] = 'navbar';
	$attr['role']  = 'navigation';

	if ( $context ) {

//		$attr['class'] .= " navbar-inverse panel";
//		$attr['id']     = "navbar-{$context}";

		$menu_name = hybrid_get_menu_location_name( $context );

		if ( $menu_name ) {
			// Translators: The %s is the menu name. This is used for the 'aria-label' attribute.
			$attr['aria-label'] = esc_attr( sprintf( _x( '%s', 'nav menu aria label', 'hybrid-core' ), $menu_name ) );
		}
	}

	$attr['itemscope']  = 'itemscope';
	$attr['itemtype']   = 'http://schema.org/SiteNavigationElement';

	return $attr;
}
add_filter( 'hybrid_attr_menu1',    'happyhour_attr_menu1',    10, 2 );
function happyhour_attr_menu1( $attr, $context ) {

	$attr['class'] = 'navbar';
//	$attr['role']  = 'navigation';

	if ( $context ) {

		$attr['class'] .= " navbar-inverse panel";
		$attr['id']     = "navbar-{$context}";

//		$menu_name = hybrid_get_menu_location_name( $context );

//		if ( $menu_name ) {
			// Translators: The %s is the menu name. This is used for the 'aria-label' attribute.
//			$attr['aria-label'] = esc_attr( sprintf( _x( '%s', 'nav menu aria label', 'hybrid-core' ), $menu_name ) );
//		}
	}

//	$attr['itemscope']  = 'itemscope';
//	$attr['itemtype']   = 'http://schema.org/SiteNavigationElement';

	return $attr;
}

add_filter( 'hybrid_attr_mainschema', 'happyhour_attr_mainschema', 10 );
function happyhour_attr_mainschema( $attr ) {
//	$attr['class'] = 'fa-ul';	
	$attr['itemscope'] = 'itemscope';
	$attr['itemtype']  = 'http://schema.org/NightClub';

	return $attr;	
}

add_filter( 'hybrid_attr_event', 'happyhour_attr_event', 10 );
function happyhour_attr_event( $attr ) {
//	$attr['class'] = 'fa-ul';	
	$attr['itemscope'] = 'itemscope';
	$attr['itemtype']  = 'http://schema.org/Event';

	return $attr;	
}