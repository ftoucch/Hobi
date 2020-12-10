<?php 
if (class_exists('WP_Customize_Control'))
{
    class HOBI_toggle_control extends WP_Customize_Control
    {

        public function enqueue(){
            wp_enqueue_style( 'custom_controls_css', get_template_directory_uri().'/inc/customizer/customizer.css');
            wp_enqueue_script( 'HOBI_customizer', get_template_directory_uri() . '/assets/js/customize-controls.js', array(), '1.0.0', true  );
        }
public function render_content(){
		?>
			<div class="toggle-switch-control">
				<div class="toggle-switch">
					<input type="checkbox" id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" class="toggle-switch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
					<label class="toggle-switch-label" for="<?php echo esc_attr( $this->id ); ?>">
						<span class="toggle-switch-inner"></span>
						<span class="toggle-switch-switch"></span>
					</label>
				</div>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>
			</div>
		<?php
		}
    }
}
