<?php

/**
 * Class My_Custom_Field_Better_Text
 */
class My_Custom_Field_Better_Text extends SiteOrigin_Widget_Field_Base {

	protected function render_field( $value, $instance ) {
		?>
		<input type="text" id="<?php echo $this->element_id ?>" name="<?php echo $this->element_name ?>"
		       value="<?php echo esc_attr( $value ); ?>"/>
		<?php
	}

	protected function sanitize_field_input( $value ) {
		$sanitized_value = sanitize_text_field( $value );
		return $sanitized_value;
	}

}