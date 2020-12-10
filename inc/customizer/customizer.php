<?php
 /*
=============================================
this is a function files for customization 
=============================================
        */



        // require some specific controls needed

require_once get_template_directory() .'/inc/customizer/controls/radio.php';
require_once get_template_directory() .'/inc/customizer/controls/slider.php';
require_once get_template_directory() .'/inc/customizer/controls/toggle.php';
require_once get_template_directory() .'/inc/customizer/controls/custom-controls.php';
require_once get_template_directory() .'/inc/customizer/output/customizer-output.php';


//function to add customizer_preview

function customizer_preview_script_enqueue()
{

    wp_enqueue_script( 'HOBI_customizer_preview', get_template_directory_uri().'/assets/js/customizer-preview.js', array('jquery', 'customize-preview'), true );
}

add_action('customize_preview_init', 'customizer_preview_script_enqueue');




function HOBI_customize_register( $wp_customize )
{
    // GLobal panel for HOBI theme Options

        $wp_customize->add_panel('HOBI_options', array(
            'title'       => __('HOBI Options'),
            'description' => 'customize HOBI theme',
            'priority'    => 1,
        ));


        /*  
        ===================================================
        create the first settings section (Header color opt)
        which modifies the colors of the header
        ===================================================
        
        */
       // add HOBI HEADER color options
        $wp_customize->add_section('HOBI_header_color_option', array(
            'title'       => 'Header Color Options',
            'panel'       => 'HOBI_options',
            'priority'    => 2,
        ));

        // add the settings and controls for HOBI header background Color Options
        $wp_customize->add_setting('header_bg_color', array(
            'default' => 'rgba(255, 255, 255,1)',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        ));


        
        $wp_customize->add_control( new HOBI_Customize_Alpha_Color_Control( $wp_customize, 'header_bg_color',
        array(
            'label' => __( 'Header Background Color', 'HOBI' ),
            'description' => esc_html__( 'Change the header color and opacity', 'HOBI' ),
            'section'     => 'HOBI_header_color_option',
            'show_opacity' => true,
            'palette' => array(
                '#000',
                '#fff',
                '#df312c',
                '#df9a23',
                '#eef000',
                '#7ed934',
                '#1571c1',
                '#8309e7'
            )
        )
        ) );



        // add the settings and controls for HOBI header text Color Options
        $wp_customize->add_setting('header_text_color', array(
            'default' => '#0a0a0a',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'header_text_color', array(
            'priority'    => 11,
            'section'     => 'HOBI_header_color_option',
            'settings'     => 'header_text_color',
            'label'       => 'Header Link Color',
            'description' => 'change the menu Link color',
        )));

        // add the settings and controls for HOBI Header Hover Color
        $wp_customize->add_setting('header_link_hover_color', array(
            'default' => '#d1d1d1',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'header_link_hover_color', array(
            'priority'    => 12,
            'section'     => 'HOBI_header_color_option',
            'label'       => 'Header Link Hover Color',
            'description' => 'change the menu link hover color',
        )));
        
        
        /*  
        ===================================================
        create the second settings section (Header Preset)
        which modifies the Preset of the header
        ===================================================
        
        */
       // add HOBI HEADER color options
       $wp_customize->add_section('HOBI_header_preset_option', array(
        'title'       => 'Header Preset',
        'panel'       => 'HOBI_options',
        'priority'    => 3,
    ));

    $wp_customize->add_setting('HOBI_header_preset', array(
        'default' => 'ButtonItem',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new HOBI_Image_Radio_Control($wp_customize, 'HOBI_header_preset', array(
        'type' => 'radio',
        'label' => esc_html__('Select default layout', 'theme-textdomain'),
        'section' => 'HOBI_header_preset_option',
        'settings' => 'HOBI_header_preset',
        'choices' => array(
            'Classic' => get_template_directory_uri() . '/assets/img/header-presets/Classic.jpg',
            'Inverted' => get_template_directory_uri() . '/assets/img/header-presets/Inverted.jpg',
            'Centered' => get_template_directory_uri() . '/assets/img/header-presets/Centered.jpg',
            'ButtonItem' => get_template_directory_uri() . '/assets/img/header-presets/ButtonItem.jpg'
        )
    )));


    // add section for Hobi header button

    $wp_customize->add_section('HOBI_button', array(
        'title'       => 'Header Button Options',
        'panel'       => 'HOBI_options',
        'priority'    => 4,
    ));
    // add the settings and controls for Menu Button Text

    $wp_customize->add_setting('HOBI_button1_text', array(
        'default' => 'BUTTON 1',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control('HOBI_button1_text_control', array(
        'type'     =>   'text',
        'section'  =>   'HOBI_button',
        'settings'  =>   'HOBI_button1_text',
        'label'    =>    'Button1 Text',
        'description'  => 'Enter text for First Button',
    
    ));
    $wp_customize->add_setting('HOBI_button1_text_link', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'esc_url_raw' 
    ));

    $wp_customize->add_control('HOBI_button1_text_link_control', array(
        'type'     =>   'url',
        'section'  =>   'HOBI_button',
        'settings'  =>   'HOBI_button1_text_link',
        'label'    =>    'Button1 Link',
        'description'  => 'Enter Link for First Button',
    
    ));

    $wp_customize->add_setting('HOBI_button2_text', array(
        'default' => 'BUTTON 2',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control('HOBI_button2_text_control', array(
        'type'     =>   'text',
        'section'  =>   'HOBI_button',
        'settings'  =>   'HOBI_button2_text',
        'label'    =>    'Button2 Text',
        'description'  => 'Enter text for second Button',
    
    ));

    $wp_customize->add_setting('HOBI_button2_text_link', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'esc_url_raw' 
    ));

    $wp_customize->add_control('HOBI_button2_text_link_control', array(
        'type'     =>   'url',
        'section'  =>   'HOBI_button',
        'settings'  =>   'HOBI_button2_text_link',
        'label'    =>    'Button2 Link',
        'description'  => 'Enter Link for Second Button',
    
    ));


    // button background color

    $wp_customize->add_setting('header_button1_bg', array(
        'default' => '#0a0a0a',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'header_button1_bg', array(
        'priority'    => 12,
        'section'     => 'HOBI_button',
        'label'       => 'Button 1 Background COlor',
        'description' => 'change the background color of the header button',
    )));

    $wp_customize->add_setting('header_button2_bg', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'header_button2_bg', array(
        'priority'    => 12,
        'section'     => 'HOBI_button',
        'label'       => 'Button 2 Border COlor',
        'description' => 'change the border color of the header button',
    )));


    // button Text color

    $wp_customize->add_setting('header_button1_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'header_button1_text_color', array(
        'priority'    => 12,
        'section'     => 'HOBI_button',
        'label'       => 'Button 1 Text Color',
        'description' => 'change the text color of the header button',
    )));

    $wp_customize->add_setting('header_button2_text_color', array(
        'default' => '#0a0a0a',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'header_button2_text_color', array(
        'priority'    => 12,
        'section'     => 'HOBI_button',
        'label'       => 'Button 2 Text Color',
        'description' => 'change the Text color of the header button',
    )));




    /*
    ====================================================

    Logo and site Identity

    =====================================================
    */
        $wp_customize->get_section('title_tagline')->title = 'Logo and Site Identity';


        $wp_customize->add_setting('HOBI_logo_options', array(
                'title' => 'Logo Max Width',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
                'default' =>  120,
        ));
        $wp_customize->add_control(new HOBI_slider_control ($wp_customize, 'HOBI_logo_size', array(
            'settings' => 'HOBI_logo_options',
            'priority' => 8,
            'section' => 'title_tagline',
            'label' => 'Logo Size',
            'description' => 'Increase Logo Size',
            'input_attrs' => array(
                'min' => 120,
                'max' => 350,
                'step' => 1,
        ))));


        $wp_customize->add_setting('HOBI_site_title_toggle', array(
            'title' => 'HOBI Site Identity Toggle',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
            'default' => 'checked'
        ));

        $wp_customize->add_control( new HOBI_toggle_control( $wp_customize, 'HOBI_toggle_switch',
	array(
		'label' => esc_html__( 'Show Site Title' ),
        'section' => 'title_tagline',
        'settings' => 'HOBI_site_title_toggle',
        
	)
) );


$wp_customize->add_setting('HOBI_site_description_toggle', array(
    'title' => 'HOBI Site Description Toggle',
    'capability' => 'edit_theme_options',
    'transport'  => 'refresh',
    'default' => 'checked'
));

$wp_customize->add_control( new HOBI_toggle_control( $wp_customize, 'HOBI_toggle_description_switch',
array(
'label' => esc_html__( 'Show Site Description' ),
'section' => 'title_tagline',
'settings' => 'HOBI_site_description_toggle',

)
) );

// change the transport settings of the blogname and description to enable live preview
$wp_customize->get_setting('blogname')->transport = 'postMessage';
$wp_customize->get_setting('blogdescription')->transport = 'postMessage';





// FOOTER CONTROLS
// Adds a new section
$wp_customize->add_section('footer_settings', array(
    'title'       => 'Footer Settings',
    'panel'       => 'HOBI_options',
    'priority'    => 10,
));

// Adds a new settings for footer background color
$wp_customize->add_setting('footer_bg_color', array(
    'title'      =>   'Footer BG Color',
    'capability' =>   'edit_theme_options',
    'transport'  =>   'postMessage',
    'default'    =>   'rgba(0, 0, 0,1)'
));


$wp_customize->add_control( new HOBI_Customize_Alpha_Color_Control( $wp_customize, 'footer_bg_color',
array(
    'label' => __( 'Footer Background Color', 'HOBI' ),
    'description' => esc_html__( 'Change the Footer BG color and opacity', 'HOBI' ),
    'section'     => 'footer_settings',
    'show_opacity' => true,
    'palette' => array(
        '#000',
        '#fff',
        '#df312c',
        '#df9a23',
        '#eef000',
        '#7ed934',
        '#1571c1',
        '#8309e7'
    )
)
) );

$wp_customize->add_setting('HOBI_footer_text', array(
    'default' => 'HOBI | Powered By Wordpress',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('HOBI_footer_text', array(
    'type'     =>   'text',
    'section'  =>   'footer_settings',
    'settings'  =>   'HOBI_footer_text',
    'label'    =>    'footer Text',
    'description'  => 'Enter footer text',

));

$wp_customize->add_setting('footer_text_color', array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'footer_text_color', array(
    'priority'    => 11,
    'section'     => 'footer_settings',
    'label'       => 'footer text Color',
    'description' => 'change the footer text color',
)));

/*
======================================================
        HEADER HERO CUSTOMIZATION OPTION
this area sets the customization options for the hero

======================================================

*/

$wp_customize->add_section('header_hero_section', array(
    'title'       => 'Header Hero Settings',
    'panel'       => 'HOBI_options',
    'priority'    => 4,
));

$wp_customize->add_setting('HOBI_Hero_toggle', array(
    'title' => 'HOBI Hero Toggle',
    'capability' => 'edit_theme_options',
    'transport'  => 'refresh',
    'default' => 'checked'
));

$wp_customize->add_control( new HOBI_toggle_control( $wp_customize, 'HOBI_Hero_toggle',
array(
'label' => esc_html__( 'Show Hero Header' ),
'section' => 'header_hero_section',
'settings' => 'HOBI_Hero_toggle',
'priority' => 1,

)
) );

$wp_customize->add_setting('HERO_bg_color', array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'postMessage',
));


$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'HERO_bg_color', array(
    'section'     => 'header_hero_section',
    'label'       => 'header hero background',
    'description' => 'change the footer text color',
)));


$wp_customize->add_setting('HOBI_hero_header_text', array(
    'default' => 'LOREM IPSUM',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('HOBI_hero_header_text_control', array(
    'type'     =>   'text',
    'section'  =>   'header_hero_section',
    'settings'  =>   'HOBI_hero_header_text',
    'label'    =>    'Header Text Color',
    'description'  => 'Enter Header text',

));
$wp_customize->add_setting('HERO_Header_text_color', array(
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'postMessage',
));


$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'HERO_Header_text_color', array(
    'section'     => 'header_hero_section',
    'label'       => 'Header Title Text Color',
    'description' => 'change the Header text color',
)));

$wp_customize->add_setting('HOBI_hero_subtitle_text', array(
    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('HOBI_hero_subtitle_text_control', array(
    'type'     =>   'textarea',
    'section'  =>   'header_hero_section',
    'settings'  =>   'HOBI_hero_subtitle_text',
    'label'    =>    'Header Text',
    'description'  => 'Enter Header Subtitle text',

));

$wp_customize->add_setting('HERO_subtitle_text_color', array(
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'postMessage',
));


$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'HERO_subtitle_text_color', array(
    'section'     => 'header_hero_section',
    'label'       => 'Header Hero Subtitle Text Color',
    'description' => 'change the Header subtitle text color',
)));


$wp_customize->add_setting('hero_custom_image', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( new WP_Customize_Image_Control ($wp_customize, 'hero_custom_image', array(
    'label' => 'Upload Image',
    'description' => 'Choose an Image for The header Hero',
    'section' => 'header_hero_section',
    'priority' => 2,
    'height'  => 400,
    'width'   => 400,
    'button_labels' => array(
                    'select' => 'Select Image',
                    'remove' => 'Remove Image',
                    'change' => 'Change Image'
    ), 
)));

 // add section for Hobi Hero header button

 $wp_customize->add_section('HOBI_hero_button', array(
    'title'       => 'Hero Button Options',
    'panel'       => 'HOBI_options',
    'priority'    => 5

));
// add the settings and controls for Menu Button Text

$wp_customize->add_setting('hero_btn1_text', array(
    'default' => 'SIGN UP',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('Hero_btn1_text_control', array(
    'type'     =>   'text',
    'section'  =>   'HOBI_hero_button',
    'settings'  =>   'hero_btn1_text',
    'label'    =>    'Button1 Text',
    'description'  => 'Enter text for First Button',

));

$wp_customize->add_setting('hero_btn2_text', array(
    'default' => 'LEARN MORE',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('Hero_btn2_text_control', array(
    'type'     =>   'text',
    'section'  =>   'HOBI_hero_button',
    'settings'  =>   'hero_btn2_text',
    'label'    =>    'Button2 Text',
    'description'  => 'Enter text for Second Button',

));

$wp_customize->add_setting('hero_btn1_text_link', array(
    'default' => '#',
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw' 
));

$wp_customize->add_control('hero_btn1_text_link_control', array(
    'type'     =>   'url',
    'section'  =>   'HOBI_hero_button',
    'settings'  =>   'hero_btn1_text_link',
    'label'    =>    'Button1 Link',
    'description'  => 'Enter Link for First Button',

));

$wp_customize->add_setting('hero_btn2_text_link', array(
    'default' => '#',
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw' 
));

$wp_customize->add_control('hero_btn2_text_link_control', array(
    'type'     =>   'url',
    'section'  =>   'HOBI_hero_button',
    'settings'  =>   'hero_btn2_text_link',
    'label'    =>    'Button1 Link',
    'description'  => 'Enter Link for First Button',

));

$wp_customize->add_setting('hero_btn1_bg', array(
    'default' => '#0a0a0a',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'postMessage',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'hero_btn1_bg', array(
    'section'     => 'HOBI_hero_button',
    'label'       => 'Button 1 Border COlor',
    'description' => 'change the background color of the header button',
)));

$wp_customize->add_setting('hero_btn2_bg', array(
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'postMessage',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'hero_btn2_bg', array(
    'section'     => 'HOBI_hero_button',
    'label'       => 'Button 2 Background COlor',
    'description' => 'change the border color of the header button',
)));

$wp_customize->add_setting('hero_btn1_text_color', array(
    'default' => '#0a0a0a',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'postMessage',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'hero_btn1_text_color', array(
    'priority'    => 12,
    'section'     => 'HOBI_hero_button',
    'label'       => 'Button 1 Text Color',
    'description' => 'change the text color of the hero button',
)));

$wp_customize->add_setting('hero_btn2_text_color', array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'postMessage',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'hero_btn2_text_color', array(
    'priority'    => 12,
    'section'     => 'HOBI_hero_button',
    'label'       => 'Button 2 Text Color',
    'description' => 'change the Text color of the hero button',
)));
}

add_action('customize_register', 'HOBI_customize_register');







?>