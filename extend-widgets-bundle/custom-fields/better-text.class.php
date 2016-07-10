<?php

/**
 * Class My_Custom_Field_Better_Text
 */
class My_Custom_Field_Better_Text extends SiteOrigin_Widget_Field_Base {

	/**
	 * My custom property for doing custom things.
	 *
	 * @access protected
	 * @var mixed
	 */
	protected $my_property;

	protected function render_field( $value, $instance ) {
		?>
		<input type="text" id="<?php echo $this->element_id ?>" name="<?php echo $this->element_name ?>"
		       value="<?php echo esc_attr( $value ); ?>"/>
		<?php
	}

	protected function sanitize_field_input($value, $instance) {
		$sanitized_value = sanitize_text_field( $value );
		return $sanitized_value;
	}

	protected function add_label_classes( $label_classes ) {
		$label_classes[] = 'my-custom-field-label-css-class';
		return $label_classes;
	}

	protected function render_field_label($value, $instance) {
		?>
		<h1>My custom label rendering</h1>
		<?php
	}
	protected function render_before_field( $value, $instance ) {
		// This is to keep the default label rendering behaviour.
		parent::render_before_field( $value, $instance );
		// Add custom rendering here.
		$this->render_field_description();
	}

	protected function render_after_field( $value, $instance ) {
		// Leave this blank so that the description is not rendered twice
	}
}
