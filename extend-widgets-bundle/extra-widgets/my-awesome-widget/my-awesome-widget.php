<?php

/*
Widget Name: My totally awesome widget
Description: An example widget which is totally awesome.
Author: Me
Author URI: http://example.com
*/

function my_awesome_widget_banner_img_src( $banner_url, $widget_meta ) {
	if( $widget_meta['ID'] == 'my-awesome-widget') {
		$banner_url = plugin_dir_url(__FILE__) . 'images/awesome_widget_banner.svg';
	}
	return $banner_url;
}
add_filter( 'siteorigin_widgets_widget_banner', 'my_awesome_widget_banner_img_src', 10, 2);

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
					'label' => __('Hello world! goes here.', 'my-awesome-widget-text-domain'),
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