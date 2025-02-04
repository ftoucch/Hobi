<?php
if (class_exists('WP_Customize_Control')){
class HOBI_Image_Radio_Control extends WP_Customize_Control {

    public function enqueue(){
        wp_enqueue_style( 'custom_controls_css', get_template_directory_uri().'/inc/customizer/customizer.css');
        wp_enqueue_script( 'HOBI_customizer', get_template_directory_uri() . '/assets/js/customize-controls.js', array(), '1.0.0', true  );
	}

public function render_content() {

    if (empty($this->choices))
        return;

    $name = '_customize-radio-' . $this->id;
    ?>
    <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
    <ul class="controls" id='theme-slug-img-container'>
        <?php
        foreach ($this->choices as $value => $label) :
            $class = ($this->value() == $value) ? 'theme-slug-radio-img-selected theme-slug-radio-img-img' : 'theme-slug-radio-img-img';
            ?>
            <li style="display: inline;">
                <label>
                    <input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
                                                  $this->link();
                                                  checked($this->value(), $value);
                                                  ?> />
                    <img src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
                </label>
            </li>
            <?php
        endforeach;
        ?>
    </ul>
    <?php
}

}
}