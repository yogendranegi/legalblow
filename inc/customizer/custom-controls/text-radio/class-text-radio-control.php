<?php
/**
 * Checkbox Customizer Control
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

// Exit if LegalBlow_Text_Radio_Control exists and WP_Customize_Control does not exsist.
if ( class_exists('LegalBlow_Text_Radio_Control') && ! class_exists( 'WP_Customize_Control' ) ) :
	return null;
endif;

/**
 * This class is for the text radio control in the Customizer.
 *
 * @access public
 */
class LegalBlow_Text_Radio_Control extends WP_Customize_Control {
	
	/**
	 * Declare the control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'legalblow-text-radio';
	

	/**
	 * Enqueue scripts and styles.
	 *
	 * @access public
	 * @return void
	 */
	public function enqueue() {
        wp_enqueue_style( 'legalblow-tr-control-css', get_parent_theme_file_uri( 'inc/customizer/custom-controls/text-radio/text-radio' . ( ( LEGALBLOW_MINIFY ) ? '.min' : '' ) . '.css', array(), '1.0', 'all' ));
	}
	
	/**
	 * Render the control to be displayed in the Customizer.
	 */
	public function render_content() {
		?>
			<div class="text_radio_button_control">
				<?php if( !empty( $this->label ) ) { ?>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php } ?>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>

				<div class="radio-buttons">
					<?php foreach ( $this->choices as $key => $value ) { ?>
						<label class="radio-button-label">
							<input type="radio" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php $this->link(); ?> <?php checked( esc_attr( $key ), $this->value() ); ?>/>
							<span><?php echo esc_html( $value ); ?></span>
						</label>
					<?php	} ?>
				</div>
			</div>
		<?php
	}
}
	
