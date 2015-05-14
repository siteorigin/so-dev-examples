<?php

/*
Widget Name: My widget with my custom field
Description: An example widget which uses my custom field.
Author: Me
Author URI: http://example.com
*/

class My_Custom_Field_Test_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'my-custom-field-test-widget',
			__('My Custom Field Test Widget', 'my-custom-field-test-widget-text-domain'),
			array(
				'description' => __('A custom field widget.', 'my-custom-field-test-widget-text-domain'),
			),
			array(

			),
			array(
				'text' => array(
					'type' => 'better-text',
					'my_property' => 'This is my custom property value',
					'label' => __( 'A better text field.', 'my-custom-field-test-widget-text-domain' ),
					'description' => __( 'A description for my custom text field.' ),
					'default' => 'Some better text.'
				),
			),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return '';
	}

	function get_style_name($instance) {
		return '';
	}
}

siteorigin_widget_register('my-custom-field-test-widget', __FILE__, 'My_Custom_Field_Test_Widget');