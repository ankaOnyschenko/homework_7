<?php
/*
Plugin Name: Plagin arzamath 17th
Plugin URI:  
Description: My first test plagin.
Version:     1.0
Author:      anka
Author URI:  
*/


/*  Copyright 2014  anka  (email: anka@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



if(!class_exists('arzamath_17th'))
{
	class arzamath_17th
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Initialize Settings
			require_once(sprintf("%s/settings.php", dirname(__FILE__)));
			$arzamath_17th_Settings = new arzamath_17th_Settings();
			require_once(sprintf("%s/post-types/post_type_template.php",  dirname(__FILE__)));
			$Post_Type_Template = new Post_Type_Template();
			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));

		} // END public function __construct
		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate
		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate
		// Add the settings link to the plugins page
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=arzamath_17th">Настройки</a>';
			array_unshift($links, $settings_link);
			return $links;
		}
	} // END class WP_Plugin_Template
} // END if(!class_exists('WP_Plugin_Template'))
if(class_exists('arzamath_17th'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('arzamath_17th', 'activate'));
	register_deactivation_hook(__FILE__, array('arzamath_17th', 'deactivate'));
	// instantiate the plugin class
	$arzamath_17th = new arzamath_17th();
}