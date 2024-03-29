<?php
/**
 * Theme Customizer Controls
 *
 * @package legalblow
 */


if ( ! function_exists( 'legalblow_customizer_header_register' ) ) :
function legalblow_customizer_header_register( $wp_customize ) {

	$wp_customize->add_panel(
        'legalblow_header_settings_panel',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Header Settings', 'legalblow' ),
        )
    );

    // Topbar Menu ===================================================
    $wp_customize->add_section(
        'legalblow_header_topbar_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Top Bar', 'legalblow' ),
            'panel'          => 'legalblow_header_settings_panel',
        )
    ); 


	// Title label
	$wp_customize->add_setting( 
		'legalblow_label_header_topbar_callus', 
		array(
		    'sanitize_callback' => 'legalblow_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Title_Info_Control( $wp_customize, 'legalblow_label_header_topbar_callus', 
		array(
		    'label'       => esc_html__( 'Call Us Settings', 'legalblow' ),
		    'section'     => 'legalblow_header_topbar_settings',
		    'type'        => 'legalblow-title',
		    'settings'    => 'legalblow_label_header_topbar_callus',
		) 
	));

	//call us label

	$wp_customize->add_setting(
        'legalblow_header_topbar_call_us_label',
        array(            
            'default'           => esc_html__('Call Us:','legalblow'),
            'sanitize_callback' => 'legalblow_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legalblow_header_topbar_call_us_label',
        array(
            'settings'      => 'legalblow_header_topbar_call_us_label',
            'section'       => 'legalblow_header_topbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Call Us Label:', 'legalblow' ),
        )
    );


    //call us text

	$wp_customize->add_setting(
        'legalblow_header_topbar_call_us_text',
        array(            
            'default'           => esc_html__('123-456-7890','legalblow'),
            'sanitize_callback' => 'legalblow_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legalblow_header_topbar_call_us_text',
        array(
            'settings'      => 'legalblow_header_topbar_call_us_text',
            'section'       => 'legalblow_header_topbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Call Us Text:', 'legalblow' ),
        )
    );


    // Title label
	$wp_customize->add_setting( 
		'legalblow_label_header_topbar_email', 
		array(
		    'sanitize_callback' => 'legalblow_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Title_Info_Control( $wp_customize, 'legalblow_label_header_topbar_email', 
		array(
		    'label'       => esc_html__( 'Email Settings', 'legalblow' ),
		    'section'     => 'legalblow_header_topbar_settings',
		    'type'        => 'legalblow-title',
		    'settings'    => 'legalblow_label_header_topbar_email',
		) 
	));

	//email us label

	$wp_customize->add_setting(
        'legalblow_header_topbar_email_label',
        array(            
            'default'           => esc_html__('Email:','legalblow'),
            'sanitize_callback' => 'legalblow_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legalblow_header_topbar_email_label',
        array(
            'settings'      => 'legalblow_header_topbar_email_label',
            'section'       => 'legalblow_header_topbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Email Label:', 'legalblow' ),
        )
    );


    //email text

	$wp_customize->add_setting(
        'legalblow_header_topbar_email_text',
        array(            
            'default'           => esc_html__('info@example.com','legalblow'),
            'sanitize_callback' => 'legalblow_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legalblow_header_topbar_email_text',
        array(
            'settings'      => 'legalblow_header_topbar_email_text',
            'section'       => 'legalblow_header_topbar_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Email Text:', 'legalblow' ),
        )
    );



	// Section Menu ===================================================
    $wp_customize->add_section(
        'legalblow_header_menu_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Menu', 'legalblow' ),
            'panel'          => 'legalblow_header_settings_panel',
        )
    ); 

    // Title label
	$wp_customize->add_setting( 
		'legalblow_label_header_menu_show', 
		array(
		    'sanitize_callback' => 'legalblow_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Title_Info_Control( $wp_customize, 'legalblow_label_header_menu_show', 
		array(
		    'label'       => esc_html__( 'Menu', 'legalblow' ),
		    'section'     => 'legalblow_header_menu_settings',
		    'type'        => 'legalblow-title',
		    'settings'    => 'legalblow_label_header_menu_show',
		) 
	));

	// Add an option to align the menu
	$wp_customize->add_setting( 
		'legalblow_enable_header_menu_align', 
		array(
		    'default'           => false,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'legalblow_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Toggle_Control( $wp_customize, 'legalblow_enable_header_menu_align', 
		array(
		    'label'       => esc_html__( 'Align Menu to right', 'legalblow' ),
		    'section'     => 'legalblow_header_menu_settings',
		    'type'        => 'legalblow-toggle',
		    'settings'    => 'legalblow_enable_header_menu_align',
		) 
	));

	// Title label
	$wp_customize->add_setting( 
		'legalblow_label_header_menu_items_spacing_show', 
		array(
		    'sanitize_callback' => 'legalblow_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Title_Info_Control( $wp_customize, 'legalblow_label_header_menu_items_spacing_show', 
		array(
		    'label'       => esc_html__( 'Menu Items Spacing', 'legalblow' ),
		    'section'     => 'legalblow_header_menu_settings',
		    'type'        => 'legalblow-title',
		    'settings'    => 'legalblow_label_header_menu_items_spacing_show',
		) 
	));

    // menu items spacing
    $wp_customize->add_setting( 
        'legalblow_menu_items_spacing', 
        array(
            'default' => 16,
            'sanitize_callback' => 'absint',
        ) 
    );

    $wp_customize->add_control( 
        new LegalBlow_Slider_Control( $wp_customize, 'legalblow_menu_items_spacing', 
        array(
            'label' => esc_html__( 'Menu Items Spacing(px)','legalblow' ),
            'description' => esc_html__( 'Default is 16','legalblow' ),
            'section' => 'legalblow_header_menu_settings',
            'input_attrs' => array(
                'min' => 0, 
                'max' => 100,
                'step' => 1,
            ),
        )
    ));

    // Title label
	$wp_customize->add_setting( 
		'legalblow_label_header_menu_last_button', 
		array(
		    'sanitize_callback' => 'legalblow_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Title_Info_Control( $wp_customize, 'legalblow_label_header_menu_last_button', 
		array(
		    'label'       => esc_html__( 'Menu Button', 'legalblow' ),
		    'section'     => 'legalblow_header_menu_settings',
		    'type'        => 'legalblow-title',
		    'settings'    => 'legalblow_label_header_menu_last_button',
		) 
	));

	// Add an option to make last menu as button
	$wp_customize->add_setting( 
		'legalblow_enable_header_menu_last_button', 
		array(
		    'default'           => false,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'legalblow_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Toggle_Control( $wp_customize, 'legalblow_enable_header_menu_last_button', 
		array(
		    'label'       => esc_html__( 'Show last menu item as button', 'legalblow' ),
		    'section'     => 'legalblow_header_menu_settings',
		    'type'        => 'legalblow-toggle',
		    'settings'    => 'legalblow_enable_header_menu_last_button',
		) 
	));

	//choose button type
	$wp_customize->add_setting( 
        'legalblow_choose_style_menu_last_button', 
        array(
            'default'           => 'square',
            'type'              => 'theme_mod',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'legalblow_sanitize_select',
        ) 
    );

    $wp_customize->add_control( 
        new LegalBlow_Text_Radio_Control( $wp_customize, 'legalblow_choose_style_menu_last_button', 
        array(
            'label'       => esc_html__( 'Choose Button Type', 'legalblow' ),
            'section'     => 'legalblow_header_menu_settings',
            'type'        => 'legalblow-text-radio',
            'settings'    => 'legalblow_choose_style_menu_last_button',
            'choices' => array(
            	'square' => esc_html__( 'Square','legalblow' ),
                'round' => esc_html__( 'Rounded','legalblow' ),
            ),
            'active_callback' => 'legalblow_header_menu_button_enable',
        )
    ));

    // Title label
	$wp_customize->add_setting( 
		'legalblow_label_header_menu_last_button_color', 
		array(
		    'sanitize_callback' => 'legalblow_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Title_Info_Control( $wp_customize, 'legalblow_label_header_menu_last_button_color', 
		array(
		    'label'       => esc_html__( 'Menu Button Color', 'legalblow' ),
		    'section'     => 'legalblow_header_menu_settings',
		    'type'        => 'legalblow-title',
		    'settings'    => 'legalblow_label_header_menu_last_button_color',
		    'active_callback' => 'legalblow_header_menu_button_enable',
		) 
	));

	// button bg color
    $wp_customize->add_setting(
        'legalblow_header_menu_last_button_bg_color',
        array(
            'type' => 'theme_mod',
            'default'           => '#c29852',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
        	$wp_customize,
        	'legalblow_header_menu_last_button_bg_color',
	        array(
	        	'label'      => esc_html__( 'Background Color', 'legalblow' ),
	        	'section'    => 'legalblow_header_menu_settings',
	        	'settings'   => 'legalblow_header_menu_last_button_bg_color',
	        	'active_callback' => 'legalblow_header_menu_button_enable',
	        )
	    )
    );


    // button text color
    $wp_customize->add_setting(
        'legalblow_header_menu_last_button_content_color',
        array(
            'type' => 'theme_mod',
            'default'           => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
        	$wp_customize,
        	'legalblow_header_menu_last_button_content_color',
	        array(
	        	'label'      => esc_html__( 'Text Color', 'legalblow' ),
	        	'section'    => 'legalblow_header_menu_settings',
	        	'settings'   => 'legalblow_header_menu_last_button_content_color',
	        	'active_callback' => 'legalblow_header_menu_button_enable',
	        )
	    )
    );


    // Title label for Mobile 
	$wp_customize->add_setting( 
		'legalblow_label_header_menu_last_button_color_mobile', 
		array(
		    'sanitize_callback' => 'legalblow_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Title_Info_Control( $wp_customize, 'legalblow_label_header_menu_last_button_color_mobile', 
		array(
		    'label'       => esc_html__( 'Menu Button Color Mobile', 'legalblow' ),
		    'section'     => 'legalblow_header_menu_settings',
		    'type'        => 'legalblow-title',
		    'settings'    => 'legalblow_label_header_menu_last_button_color_mobile',
		    'active_callback' => 'legalblow_header_menu_button_enable',
		) 
	));

	// button bg color for Mobile 
    $wp_customize->add_setting(
        'legalblow_header_menu_last_button_bg_color_mobile',
        array(
            'type' => 'theme_mod',
            'default'           => '#c29852',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
        	$wp_customize,
        	'legalblow_header_menu_last_button_bg_color_mobile',
	        array(
	        	'label'      => esc_html__( 'Background Color', 'legalblow' ),
	        	'section'    => 'legalblow_header_menu_settings',
	        	'settings'   => 'legalblow_header_menu_last_button_bg_color_mobile',
	        	'active_callback' => 'legalblow_header_menu_button_enable',
	        )
	    )
    );


    // button text color for Mobile 
    $wp_customize->add_setting(
        'legalblow_header_menu_last_button_content_color_mobile',
        array(
            'type' => 'theme_mod',
            'default'           => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
        	$wp_customize,
        	'legalblow_header_menu_last_button_content_color_mobile',
	        array(
	        	'label'      => esc_html__( 'Text Color', 'legalblow' ),
	        	'section'    => 'legalblow_header_menu_settings',
	        	'settings'   => 'legalblow_header_menu_last_button_content_color_mobile',
	        	'active_callback' => 'legalblow_header_menu_button_enable',
	        )
	    )
    );

    // Title label
	$wp_customize->add_setting( 
		'legalblow_label_header_toggle_menu', 
		array(
		    'sanitize_callback' => 'legalblow_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Title_Info_Control( $wp_customize, 'legalblow_label_header_toggle_menu', 
		array(
		    'label'       => esc_html__( 'Toggle Menu', 'legalblow' ),
		    'section'     => 'legalblow_header_menu_settings',
		    'type'        => 'legalblow-title',
		    'settings'    => 'legalblow_label_header_toggle_menu',
		) 
	));

	// vertical spacing
    $wp_customize->add_setting( 
        'legalblow_header_toggle_menu_spacing', 
        array(
            'default' => 0,
            'sanitize_callback' => 'absint',
        ) 
    );

    $wp_customize->add_control( 
        new LegalBlow_Slider_Control( $wp_customize, 'legalblow_header_toggle_menu_spacing', 
        array(
            'label' => esc_html__( 'Vertical Spacing(px)','legalblow' ),
            'description' => esc_html__( 'Default is 0','legalblow' ),
            'section' => 'legalblow_header_menu_settings',
            'input_attrs' => array(
                'min' => 0, 
                'max' => 250,
                'step' => 1,
            ),
        )
    ));

    $wp_customize->add_setting(
        'legalblow_header_toggle_menu_text',
        array(            
            'default'           => esc_html__('MENU','legalblow'),
            'sanitize_callback' => 'legalblow_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legalblow_header_toggle_menu_text',
        array(
            'settings'      => 'legalblow_header_toggle_menu_text',
            'section'       => 'legalblow_header_menu_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Toggle Menu Text', 'legalblow' ),
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'legalblow_label_header_toggle_menu_btn_popup', 
		array(
		    'sanitize_callback' => 'legalblow_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new LegalBlow_Title_Info_Control( $wp_customize, 'legalblow_label_header_toggle_menu_btn_popup', 
		array(
		    'label'       => esc_html__( 'Button Settings inside Toggle Popup', 'legalblow' ),
		    'section'     => 'legalblow_header_menu_settings',
		    'type'        => 'legalblow-title',
		    'settings'    => 'legalblow_label_header_toggle_menu_btn_popup',
		    'active_callback' => 'legalblow_header_menu_button_enable',
		) 
	));

	// button height
    $wp_customize->add_setting( 
        'legalblow_header_toggle_menu_btn_height', 
        array(
            'default' => 2,
            'sanitize_callback' => 'absint',
        ) 
    );

    $wp_customize->add_control( 
        new LegalBlow_Slider_Control( $wp_customize, 'legalblow_header_toggle_menu_btn_height', 
        array(
            'label' => esc_html__( 'Button Height(px)','legalblow' ),
            'description' => esc_html__( 'Default is 2','legalblow' ),
            'section' => 'legalblow_header_menu_settings',
            'input_attrs' => array(
                'min' => 0, 
                'max' => 50,
                'step' => 1,
            ),
            'active_callback' => 'legalblow_header_menu_button_enable',
        )
    ));

    // button padding
    $wp_customize->add_setting( 
        'legalblow_header_toggle_menu_btn_padding', 
        array(
            'default' => 2,
            'sanitize_callback' => 'absint',
        ) 
    );

    $wp_customize->add_control( 
        new LegalBlow_Slider_Control( $wp_customize, 'legalblow_header_toggle_menu_btn_padding', 
        array(
            'label' => esc_html__( 'Button Padding(px)','legalblow' ),
            'description' => esc_html__( 'Default is 2','legalblow' ),
            'section' => 'legalblow_header_menu_settings',
            'input_attrs' => array(
                'min' => 0, 
                'max' => 100,
                'step' => 1,
            ),
            'active_callback' => 'legalblow_header_menu_button_enable',
        )
    )); 

}
endif;

add_action( 'customize_register', 'legalblow_customizer_header_register' );