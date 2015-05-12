<?php

/*
Widget Name: Hello world widget
Description: An example widget which displays 'Hello world!'.
Author: Me
Author URI: http://example.com
*/

class Hello_World_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'hello-world-widget',
			__('Hello World Widget', 'hello-world-widget-text-domain'),
			array(
				'description' => __('A hello world widget.', 'hello-world-widget-text-domain'),
			),
			array(

			),
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('Hello world! goes here.', 'hello-world-widget-text-domain'),
					'default' => 'Hello world!'
				),
			),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'hello-world-widget-template';
	}

	function get_style_name($instance) {
		return 'hello-world-widget-style';
	}

}

siteorigin_widget_register('hello-world-widget', __FILE__, 'Hello_World_Widget');