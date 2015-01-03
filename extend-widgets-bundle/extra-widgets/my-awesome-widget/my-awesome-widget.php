<?php

/*
Widget Name: My totally awesome widget
Description: An example widget which is totally awesome.
Author: Me
Author URI: http://example.com
*/

class My_Awesome_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'my-awesome-widget',
			__('My Awesome Widget', 'my-awesome-widget-text-domain'),
			array(
				'description' => __('A totally awesome widget.', 'my-awesome-widget-text-domain'),
			),
			array(

			),
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('Hello world! goes here.', 'siteorigin-widgets'),
					'default' => 'Hello world!'
				),
			),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'my-awesome-widget-template';
	}

	function get_style_name($instance) {
		return 'my-awesome-widget-style';
	}
}

siteorigin_widget_register('my-awesome-widget', __FILE__, 'My_Awesome_Widget');