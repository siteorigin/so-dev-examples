<?php

/*
Widget Name: Widget form fields
Description: An example widget with all the form fields.
Author: Me
Author URI: http://example.com
*/

class Widget_Form_Fields extends SiteOrigin_Widget {
	function __construct() {
		$form_options = array(
			'some_text' => array(
				'type' => 'text',
				'label' => __( 'Some text goes here', 'widget-form-fields-text-domain' ),
				'default' => 'Some default text.'
			),
			'some_color' => array(
				'type' => 'color',
				'label' => __( 'Choose a color', 'widget-form-fields-text-domain' ),
				'default' => '#bada55'
			),
			'some_number' => array(
				'type' => 'number',
				'label' => __( 'Enter a number', 'widget-form-fields-text-domain' ),
				'default' => '12654'
			),
			'some_long_message' => array(
				'type' => 'textarea',
				'label' => __( 'Type a message', 'widget-form-fields-text-domain' ),
				'default' => 'An example of a long message.</br>It is even possible to add a few html tags.</br><a href="siteorigin.com" target="_blank"">Links!</a></br><strong>Strong</strong> and <em>emphasized</em> text.',
				'allow_html_formatting' => true,
				'rows' => 5
			),
			'some_number_in_a_range' => array(
				'type' => 'slider',
				'label' => __( 'Choose a number', 'widget-form-fields-text-domain' ),
				'default' => 24,
				'min' => 2,
				'max' => 37,
				'integer' => true
			),
			'some_selection' => array(
				'type' => 'select',
				'label' => __( 'Choose a thing from a long list of things', 'widget-form-fields-text-domain' ),
				'default' => 'the_other_thing',
				'options' => array(
					'this_thing' => __( 'This thing', 'widget-form-fields-text-domain' ),
					'that_thing' => __( 'That thing', 'widget-form-fields-text-domain' ),
					'the_other_thing' => __( 'The other thing', 'widget-form-fields-text-domain' ),
					'thing_1' => __( 'Thing One', 'widget-form-fields-text-domain' ),
					'thing_2' => __( 'Thing Two', 'widget-form-fields-text-domain' ),
					'thing_3' => __( 'Thing Three', 'widget-form-fields-text-domain' ),
					'thing_4' => __( 'Thing Four', 'widget-form-fields-text-domain' ),
					'thing_5' => __( 'Thing Five', 'widget-form-fields-text-domain' ),
					'thing_6' => __( 'Thing Six', 'widget-form-fields-text-domain' ),
					'thing_7' => __( 'Thing Seven', 'widget-form-fields-text-domain' ),
					'thing_8' => __( 'Thing Eight', 'widget-form-fields-text-domain' ),
					'thing_9' => __( 'Thing Nine', 'widget-form-fields-text-domain' ),
					'thing_10' => __( 'Thing Ten', 'widget-form-fields-text-domain' ),
				)
			),
			'another_selection' => array(
				'type' => 'select',
				'prompt' => __( 'Choose a thing from a long list of things', 'widget-form-fields-text-domain' ),
				'options' => array(
					'this_thing' => __( 'This thing', 'widget-form-fields-text-domain' ),
					'that_thing' => __( 'That thing', 'widget-form-fields-text-domain' ),
					'the_other_thing' => __( 'The other thing', 'widget-form-fields-text-domain' ),
					'thing_1' => __( 'Thing One', 'widget-form-fields-text-domain' ),
					'thing_2' => __( 'Thing Two', 'widget-form-fields-text-domain' ),
					'thing_3' => __( 'Thing Three', 'widget-form-fields-text-domain' ),
					'thing_4' => __( 'Thing Four', 'widget-form-fields-text-domain' ),
					'thing_5' => __( 'Thing Five', 'widget-form-fields-text-domain' ),
					'thing_6' => __( 'Thing Six', 'widget-form-fields-text-domain' ),
					'thing_7' => __( 'Thing Seven', 'widget-form-fields-text-domain' ),
					'thing_8' => __( 'Thing Eight', 'widget-form-fields-text-domain' ),
					'thing_9' => __( 'Thing Nine', 'widget-form-fields-text-domain' ),
					'thing_10' => __( 'Thing Ten', 'widget-form-fields-text-domain' ),
				)
			),
			'some_boolean' => array(
				'type' => 'checkbox',
				'label' => __( 'Allow this thing?', 'widget-form-fields-text-domain' ),
				'default' => true
			),
			'radio_selection' => array(
				'type' => 'radio',
				'label' => __( 'Choose a thing from a short list of things', 'widget-form-fields-text-domain' ),
				'default' => 'that_thing',
				'options' => array(
					'this_thing' => __( 'This thing', 'widget-form-fields-text-domain' ),
					'that_thing' => __( 'That thing', 'widget-form-fields-text-domain' ),
					'the_other_thing' => __( 'The other thing', 'widget-form-fields-text-domain' )
				)
			),
			'some_media' => array(
				'type' => 'media',
				'label' => __( 'Choose a media thing', 'widget-form-fields-text-domain' ),
				'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
				'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
				'library' => 'image'//'image', 'audio', 'video', 'file'
			),
			'some_posts' => array(
				'type' => 'posts',
				'label' => __('Some posts query', 'widget-form-fields-text-domain'),
			),
			'some_icon' => array(
				'type' => 'icon',
				'label' => __('Select an icon', 'widget-form-fields-text-domain'),
			),
			'a_section' => array(
				'type' => 'section',
				'label' => __( 'A section containing related fields.' , 'widget-form-fields-text-domain' ),
				'hide' => true,
				'fields' => array(
					'grouped_text' => array(
						'type' => 'text',
						'label' => __( 'A grouped text field', 'widget-form-fields-text-domain' )
					),
					'grouped_checkbox' => array(
						'type' => 'checkbox',
						'label' => __( 'A grouped checkbox', 'widget-form-fields-text-domain' )
					)
				)
			),
			'a_repeater' => array(
				'type' => 'repeater',
				'label' => __( 'A repeating repeater.' , 'widget-form-fields-text-domain' ),
				'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
				'item_label' => array(
					'selector'     => "[id*='repeat_text']",
					'update_event' => 'change',
					'value_method' => 'val'
				),
				'fields' => array(
					'repeat_text' => array(
						'type' => 'text',
						'label' => __( 'A text field in a repeater item.', 'widget-form-fields-text-domain' )
					),
					'repeat_checkbox' => array(
						'type' => 'checkbox',
						'label' => __( 'A checkbox in a repeater item.', 'widget-form-fields-text-domain' )
					)
				)
			),
			'some_widget' => array(
				'type' => 'widget',
				'label' => __( 'Button Widget', 'widget-form-fields-text-domain' ),
				'class' => 'SiteOrigin_Widget_Button_Widget',
				'hide' => true
			)
		);
		parent::__construct(
			'widget-form-fields',
			__('Widget Form Fields Example', 'widget-form-fields-text-domain'),
			array(
				'description' => __('A blank widget which simply demonstrates the use of all the widget admin form fields.', 'widget-form-fields-text-domain'),
			),
			array(),
			$form_options,
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

siteorigin_widget_register('widget-form-fields', __FILE__, 'Widget_Form_Fields');