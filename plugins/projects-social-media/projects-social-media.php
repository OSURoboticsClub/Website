<?php
/*
Plugin Name: Projects Social Media Plugin
Plugin URI:  http://groups.engr.oregonstate.edu/osurc
Description: Enables Social Media Widgets on Pages
Version:     1.0
Author:      John Zeller
Author URI:  http://johnzeller.com
License:     GPLv2 or later
Text Domain: projects_social_media
Domain Path: /langs/
*/


/*
Copyright (c) 2014, John Zeller.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/


/* ============================================================================================================================================= */

	function projects_social_media_load_textdomain()
	{
		load_plugin_textdomain( 'projects_social_media', false, dirname( plugin_basename( __FILE__ ) ) . '/langs/' );
	}

	add_action( 'plugins_loaded', 'projects_social_media_load_textdomain' );

/* ============================================================================================================================================= */

	if ( ! current_theme_supports( 'post-social-media' ) )
	{
		add_theme_support( 'post-social-media', array( 'page' ) );
	}

/* ============================================================================================================================================= */

?>
