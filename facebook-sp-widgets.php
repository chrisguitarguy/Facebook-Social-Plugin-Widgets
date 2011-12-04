<?php
/*
Plugin Name: Facebook Social Plugin Widgets
Plugin URI: http://www.christopherguitar.net/wordpress/
Description: Adds three facebook social plugins as wordpress widgets: Facebook Recommendations, Facebook Activity Feed, and the Facebook Like Box
Version: 1.2
Author: Christopher Davis
Author URI: http://www.christopherguitar.net
License: GPL2
*/
/*  Copyright 2011  Christopher Davis  (email: cd@christopherguitar.net )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'CD_FBSP_PATH', plugin_dir_path( __FILE__ ) );
define( 'CD_FBSP_NAMe', plugin_basename( __FILE__ ) );

// Each widget has its own file
require( CD_FBSP_PATH . 'includes/class-fb-like.php' );
require( CD_FBSP_PATH . 'includes/class-fb-recommends.php' );
require( CD_FBSP_PATH . 'includes/class-fb-activity.php' );

// Register to the script on init, enqueue as needed in the widgets
add_action( 'init', 'cd_fbsp_register_script' );
function cd_fbsp_register_script()
{
	wp_register_script( 'xfbml', 'http://connect.facebook.net/en_US/all.js#xfbml=1', array(), NULL, true );	
}

/**
* IE doesn't render facebook XFBML unless it finds a certain attribute on the <head>
* tag. This takes care of that.
*/
add_filter( 'language_attributes', 'cd_fbspw_ie_fix', 99 );
function cd_fbspw_ie_fix( $atts )
{
	// if the string already has what we need, bail
	if( preg_match( '/xmlns:fb="(.*)"/', $atts ) ) return $atts;
	$atts .= ' xmlns:fb="http://www.facebook.com/2008/fbml"';
	return $atts;
}

?>
