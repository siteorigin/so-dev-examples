<?php

/*
Plugin Name: SiteOrigin Widget Form Fields Demo Plugin
Description: An example plugin to demonstrate the widget form fields provided by the SiteOrigin Widgets Bundle.
Version: 0.1
Author: SiteOrigin
Author URI: http://siteorigin.com
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
*/

function sow_form_fields_demo_add_widgets_folder($folders){
	$folders[] = plugin_dir_path(__FILE__).'widgets/';
	return $folders;
}
add_filter( 'siteorigin_widgets_widget_folders', 'sow_form_fields_demo_add_widgets_folder' );