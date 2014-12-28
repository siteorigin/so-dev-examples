<?php

/*
Plugin Name: SiteOrigin Extend Widgets Bundle Plugin
Description: An example plugin to demonstrate extending the SiteOrigin Widgets Bundle.
Version: 0.1
Author: SiteOrigin
Author URI: http://siteorigin.com
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
*/

function add_my_awesome_widgets_collection($folders){
	$folders[] = plugin_dir_path(__FILE__).'extra-widgets/';
	return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'add_my_awesome_widgets_collection');