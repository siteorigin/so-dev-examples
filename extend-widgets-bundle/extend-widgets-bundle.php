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

function my_custom_fields_class_prefixes( $class_prefixes ) {
	$class_prefixes[] = 'My_Custom_Field_';
	return $class_prefixes;
}
add_filter( 'siteorigin_widgets_field_class_prefixes', 'my_custom_fields_class_prefixes' );

function my_custom_fields_class_paths( $class_paths ) {
	$class_paths[] = plugin_dir_path( __FILE__ ) . 'custom-fields/';
	return $class_paths;
}
add_filter( 'siteorigin_widgets_field_class_paths', 'my_custom_fields_class_paths' );