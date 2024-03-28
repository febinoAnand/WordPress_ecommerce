<?php
/**
 * Multipurpose Ecommerce: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function multipurpose_ecommerce_custom_controls() {

	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-control.php' );
}

add_action( 'customize_register', 'multipurpose_ecommerce_custom_controls' );

function multipurpose_ecommerce_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_panel( 'multipurpose_ecommerce_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'multipurpose-ecommerce' ),
	    'description' => __( 'Description of what this panel does.', 'multipurpose-ecommerce' ),
	) );

	// font array
	$multipurpose_ecommerce_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface', 
        'Acme' => 'Acme', 
        'Anton' => 'Anton',
        'Architects Daughter' =>'Architects Daughter', 
        'Arimo' => 'Arimo', 
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo', 
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' =>  'Alfa Slab One', 
        'Averia Serif Libre' =>  'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script', 
        'Bitter' =>  'Bitter', 
        'Bree Serif' => 'Bree Serif', 
        'BenchNine' => 'BenchNine',
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo', 
        'Courgette' => 'Courgette', 
        'Cherry Swash' => 'Cherry Swash', 
        'Cormorant Garamond' => 'Cormorant Garamond', 
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One',
        'Dosis' => 'Dosis', 
        'Droid Sans' => 'Droid Sans',
        'Economica' =>  'Economica',
        'Fredoka One' => 'Fredoka One', 
        'Fjalla One' => 'Fjalla One', 
        'Francois One' => 'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' =>  'Great Vibes', 
        'Handlee' => 'Handlee',
        'Hammersmith One' =>'Hammersmith One', 
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC',
        'Julius Sans One' => 'Julius Sans One', 
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans',
        'Kanit' => 'Kanit', 
        'Lobster' =>  'Lobster', 
        'Lato' => 'Lato', 
        'Lora' =>'Lora',
        'Libre Baskerville' =>  'Libre Baskerville', 
        'Lobster Two' => 'Lobster Two',
        'Merriweather' => 'Merriweather', 
        'Monda' => 'Monda', 
        'Montserrat' => 'Montserrat', 
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script', 
        'Noto Serif' => 'Noto Serif', 
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>  'Overpass Mono', 
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron',
        'Patua One' => 'Patua One', 
        'Pacifico' =>  'Pacifico',
        'Padauk' => 'Padauk',
        'Playball' =>  'Playball', 
        'Playfair Display' => 'Playfair Display',
        'PT Sans' => 'PT Sans', 
        'Philosopher' => 'Philosopher', 
        'Permanent Marker' => 'Permanent Marker', 
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro',
        'Shadows Into Light Two' => 'Shadows Into Light Two',
        'Shadows Into Light' => 'Shadows Into Light',
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand',
        'Tangerine' => 'Tangerine', 
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round',
        'Vampiro One' => 'Vampiro One', 
        'Vollkorn' => 'Vollkorn', 
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'multipurpose_ecommerce_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'multipurpose-ecommerce' ),
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	// This is Body Color setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_body_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_body_color', array(
		'label' => __('Body Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_body_color',
	)));

	//This is Body FontFamily  setting
	$wp_customize->add_setting('multipurpose_ecommerce_body_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
		'multipurpose_ecommerce_body_font_family', array(
		'section'  => 'multipurpose_ecommerce_typography',
		'label'    => __( 'Body Fonts','multipurpose-ecommerce'),
		'type'     => 'select',
		'choices'  => $multipurpose_ecommerce_font_array,
	));

    //This is Body Fontsize setting
	$wp_customize->add_setting('multipurpose_ecommerce_body_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_body_font_size',array(
		'label'	=> __('Body Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_body_font_size',
		'type'	=> 'text'
	));
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_paragraph_color', array(
		'label' => __('Paragraph Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_paragraph_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'Paragraph Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	$wp_customize->add_setting('multipurpose_ecommerce_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_atag_color', array(
		'label' => __('"a" Tag Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_atag_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( '"a" Tag Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_li_color', array(
		'label' => __('"li" Tag Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_li_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( '"li" Tag Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h1_color', array(
		'label' => __('H1 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h1_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H1 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h1_font_size',array(
		'label'	=> __('H1 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h2_color', array(
		'label' => __('H2 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h2_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H2 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h2_font_size',array(
		'label'	=> __('H2 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h3_color', array(
		'label' => __('H3 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h3_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H3 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h3_font_size',array(
		'label'	=> __('H3 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h4_color', array(
		'label' => __('H4 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h4_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H4 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h4_font_size',array(
		'label'	=> __('H4 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h5_color', array(
		'label' => __('H5 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h5_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H5 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h5_font_size',array(
		'label'	=> __('H5 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h6_color', array(
		'label' => __('H6 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h6_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H6 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h6_font_size',array(
		'label'	=> __('H6 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h6_font_size',
		'type'	=> 'text'
	));	

	// background skin mode
	$wp_customize->add_setting('multipurpose_ecommerce_background_image_type',array(
        'default' => 'Transparent',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','multipurpose-ecommerce'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','multipurpose-ecommerce'),
            'Background' => __('Background','multipurpose-ecommerce'),
        ),
	) );

	// Add the Global Color typography section.
	$wp_customize->add_section( 'multipurpose_ecommerce_theme_color_option', array( 
		'panel' => 'multipurpose_ecommerce_panel_id',
		'title' => esc_html__( 'Theme Color Option', 'multipurpose-ecommerce' )
	));

  	$wp_customize->add_setting( 'multipurpose_ecommerce_theme_color', array(
	    'default' => '#4f66c9',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_theme_color', array(
  		'label' =>__( 'Color Option', 'multipurpose-ecommerce' ),
	    'description' => __('One can change complete theme color on just one click.', 'multipurpose-ecommerce'),
	    'section' => 'multipurpose_ecommerce_theme_color_option',
	    'settings' => 'multipurpose_ecommerce_theme_color',
  	)));

  	// woocommerce Options
	$wp_customize->add_section( 'multipurpose_ecommerce_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'multipurpose-ecommerce' ),
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_shop_page_options',
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_shop_products_border',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_shop_page_options',
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop Page Sidebar','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_shop_page_options',
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_single_product_sidebar',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_ecommerce_single_product_sidebar',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Single Product Sidebar','multipurpose-ecommerce'),
      	'section' => 'multipurpose_ecommerce_shop_page_options',
	));

	// shop page sidebar alignment
	$wp_customize->add_setting('multipurpose_ecommerce_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices',
	));
	$wp_customize->add_control('multipurpose_ecommerce_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page Layout', 'multipurpose-ecommerce'),
		'section'        => 'multipurpose_ecommerce_shop_page_options',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'multipurpose-ecommerce'),
			'Right Sidebar' => __('Right Sidebar', 'multipurpose-ecommerce'),
		),
	));

	// single product sidebar alignment
	$wp_customize->add_setting('multipurpose_ecommerce_single_product_sidebar_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices',
	));
	$wp_customize->add_control('multipurpose_ecommerce_single_product_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Product Layout', 'multipurpose-ecommerce'),
		'section'        => 'multipurpose_ecommerce_shop_page_options',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'multipurpose-ecommerce'),
			'Right Sidebar' => __('Right Sidebar', 'multipurpose-ecommerce'),
		),
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'multipurpose_ecommerce_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'multipurpose-ecommerce' ),
		'section'  => 'multipurpose_ecommerce_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('multipurpose_ecommerce_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));	
	$wp_customize->add_control('multipurpose_ecommerce_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control( 'multipurpose_ecommerce_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control( 'multipurpose_ecommerce_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_shop_button_padding_top',array(
		'default' => 6,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting('multipurpose_ecommerce_position_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_position_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_shop_page_options',
        'choices' => array(
            'Right' => __('Right','multipurpose-ecommerce'),
            'Left' => __('Left','multipurpose-ecommerce'),
        ),
	) );

	$wp_customize->add_setting( 'multipurpose_ecommerce_border_radius_product_sale_text',array(
		'default' => 50,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_border_radius_product_sale_text', array(
        'label'  => __('Product Sale Border Radius','multipurpose-ecommerce'),
        'section'  => 'multipurpose_ecommerce_shop_page_options',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

    $wp_customize->add_setting('multipurpose_ecommerce_top_bottom_product_sale_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_top_bottom_product_sale_padding',array(
		'label'	=> __('Top / Bottom Product Sale Padding ','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_left_right_product_sale_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_left_right_product_sale_padding',array(
		'label'	=> __('Left / Right Product Sale Padding','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_product_sale_text_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_product_sale_text_size',array(
		'label'	=> __('Product Sale Text Size','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_shop_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_shop_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','multipurpose-ecommerce'),
       'choices' => array(
            'Yes' => __('Yes','multipurpose-ecommerce'),
            'No' => __('No','multipurpose-ecommerce'),
        ),
       'section' => 'multipurpose_ecommerce_shop_page_options',
    ));

  	//Layout Settings
	$wp_customize->add_section( 'multipurpose_ecommerce_width_layout', array(
    	'title'      => __( 'Layout Settings', 'multipurpose-ecommerce' ),
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	$wp_customize->add_setting( 'multipurpose_ecommerce_single_page_breadcrumb',array(
		'default' => true,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
	) );
	$wp_customize->add_control('multipurpose_ecommerce_single_page_breadcrumb',array(
		'type' => 'checkbox',
		'label' => __( 'Show / Hide Single Page Breadcrumb','multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_width_layout'
	));

	// show/hide search
	$wp_customize->add_setting( 'multipurpose_ecommerce_show_hide_search',array(
		'default' => true,
      	'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ) );
    $wp_customize->add_control('multipurpose_ecommerce_show_hide_search',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Search','multipurpose-ecommerce' ),
        'section' => 'multipurpose_ecommerce_width_layout'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_search_icon_changer',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new multipurpose_ecommerce_Icon_Changer(
        $wp_customize,'multipurpose_ecommerce_search_icon_changer',array(
		'label'	=> __('Search Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_width_layout',
		'type'		=> 'icon'
	)));

	// fixed header
	$wp_customize->add_setting( 'multipurpose_ecommerce_fixed_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ) );
    $wp_customize->add_control('multipurpose_ecommerce_fixed_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Fixed Header','multipurpose-ecommerce' ),
        'section' => 'multipurpose_ecommerce_width_layout'
    ));

    $wp_customize->add_setting( 'multipurpose_ecommerce_fixed_header_padding_option', array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_fixed_header_padding_option', array(
		'label'       => esc_html__( 'Fixed Header Padding','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_loader_setting',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_width_layout'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_preloader_types',array(
        'default' => 'Default',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_width_layout',
        'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Circle' => __('Circle','multipurpose-ecommerce'),
            'Two Circle' => __('Two Circle','multipurpose-ecommerce')
        ),
	) );

    $wp_customize->add_setting( 'multipurpose_ecommerce_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'multipurpose-ecommerce'),
	    'section' => 'multipurpose_ecommerce_width_layout',
	    'settings' => 'multipurpose_ecommerce_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'multipurpose_ecommerce_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'multipurpose-ecommerce'),
	    'section' => 'multipurpose_ecommerce_width_layout',
	    'settings' => 'multipurpose_ecommerce_loader_background_color',
  	)));

	$wp_customize->add_setting('multipurpose_ecommerce_loader_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'multipurpose_ecommerce_loader_background_image',array(
        'label' => __('Preloader Background Image','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_width_layout'
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_theme_options',array(
    'default' => 'Default',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','multipurpose-ecommerce'),
        'description' => __('Here you can change the Width layout. ','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_width_layout',
        'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Wide Layout' => __('Wide Layout','multipurpose-ecommerce'),
            'Box Layout' => __('Box Layout','multipurpose-ecommerce'),
        ),
	) );

	// Button Settings
	$wp_customize->add_section( 'multipurpose_ecommerce_button_option', array(
		'title' => __('Button','multipurpose-ecommerce' ),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));

	//Show /Hide border
	$wp_customize->add_setting( 'multipurpose_ecommerce_button_border',array(
		'default' => '',
      	'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ) );
    $wp_customize->add_control('multipurpose_ecommerce_button_border',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Border for Blog page','multipurpose-ecommerce' ),
        'section' => 'multipurpose_ecommerce_button_option'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_left_right_padding',array(
		'label'	=> __('Left and Right Padding','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_section( 'multipurpose_ecommerce_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'multipurpose-ecommerce' ),
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('multipurpose_ecommerce_layout_settings',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','multipurpose-ecommerce'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','multipurpose-ecommerce'),
            'Right Sidebar' => __('Right Sidebar','multipurpose-ecommerce'),
            'One Column' => __('One Column','multipurpose-ecommerce'),
            'Three Columns' => __('Three Columns','multipurpose-ecommerce'),
            'Four Columns' => __('Four Columns','multipurpose-ecommerce'),
            'Grid Layout' => __('Grid Layout','multipurpose-ecommerce')
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_page_sidebar_option',array(
        'default' => 'One Column',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','multipurpose-ecommerce'),
            'Right Sidebar' => __('Right Sidebar','multipurpose-ecommerce'),
            'One Column' => __('Full Column','multipurpose-ecommerce')
        ),
	) );

	//Topbar section
	$wp_customize->add_section('multipurpose_ecommerce_topbar',array(
		'title'	=> __('Topbar','multipurpose-ecommerce'),
		'label' => __('Topbar Content', 'multipurpose-ecommerce'),
		'description' => __('Here you can add Shipping, Money Back and Support text.','multipurpose-ecommerce'),
		'priority'	=> null,
		'panel' => 'multipurpose_ecommerce_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'multipurpose_ecommerce_show_hide_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ) );
    $wp_customize->add_control('multipurpose_ecommerce_show_hide_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Top Header','multipurpose-ecommerce' ),
        'section' => 'multipurpose_ecommerce_topbar'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_shipping',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_shipping',array(
		'label'	=> __('For Shipping','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_topbar',
		'setting'	=> 'multipurpose_ecommerce_shipping',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_shipping_icon_changer',array(
		'default'	=> 'fas fa-shopping-cart',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new multipurpose_ecommerce_Icon_Changer(
        $wp_customize,'multipurpose_ecommerce_shipping_icon_changer',array(
		'label'	=> __('Shipping Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_money',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_money',array(
		'label'	=> __('For Money Back','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_topbar',
		'setting'	=> 'multipurpose_ecommerce_money',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_money_icon_changer',array(
		'default'	=> 'fab fa-cc-mastercard',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new multipurpose_ecommerce_Icon_Changer(
        $wp_customize,'multipurpose_ecommerce_money_icon_changer',array(
		'label'	=> __('Money Back Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_support',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_support',array(
		'label'	=> __('For Support','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_topbar',
		'setting'	=> 'multipurpose_ecommerce_support',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_support_icon_changer',array(
		'default'	=> 'far fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new multipurpose_ecommerce_Icon_Changer(
        $wp_customize,'multipurpose_ecommerce_support_icon_changer',array(
		'label'	=> __('Support Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_topbar',
		'type'		=> 'icon'
	)));

	// navigation menu 
	$wp_customize->add_section( 'multipurpose_ecommerce_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'multipurpose-ecommerce' ),
		'priority'   => null,
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_ecommerce_menu_color', array(
		'label'    => __('Menu Color', 'multipurpose-ecommerce'),
		'section'  => 'multipurpose_ecommerce_navigation_menu',
		'settings' => 'multipurpose_ecommerce_menu_color',
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_sub_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_ecommerce_sub_menu_color', array(
		'label'    => __('Submenu Color', 'multipurpose-ecommerce'),
		'section'  => 'multipurpose_ecommerce_navigation_menu',
		'settings' => 'multipurpose_ecommerce_sub_menu_color',
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_ecommerce_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'multipurpose-ecommerce'),
		'section'  => 'multipurpose_ecommerce_navigation_menu',
		'settings' => 'multipurpose_ecommerce_menu_hover_color',
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_sub_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_ecommerce_sub_menu_hover_color', array(
		'label'    => __('Submenu Hover Color', 'multipurpose-ecommerce'),
		'section'  => 'multipurpose_ecommerce_navigation_menu',
		'settings' => 'multipurpose_ecommerce_sub_menu_hover_color',
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_menu_text_tranform',array(
        'default' => 'Default',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_navigation_menu',
        'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Capitalize' => __('Capitalize','multipurpose-ecommerce'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_menu_font_weight',array(
        'default' => 'Default',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_navigation_menu',
        'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Normal' => __('Normal','multipurpose-ecommerce'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'multipurpose_ecommerce_slider' , array(
    	'title'      => __( 'Slider Section', 'multipurpose-ecommerce' ),
    	'label'     => __('Slider Settings', 'multipurpose-ecommerce'),
    	'description'	=> __('Here you can select pages which you have created for slider.','multipurpose-ecommerce'),
		'priority'   => null,
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_slider',
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_slider'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_slider'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_slider_width_options',array(
    	'default' => 'Full Width',
     	'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_slider_width_options',array(
		'type' => 'select',
		'label' => __('Slider Width Layout','multipurpose-ecommerce'),
		'description' => __('Here you can change the Slider Width. ','multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_slider',
		'choices' => array(
		   'Full Width' => __('Full Width','multipurpose-ecommerce'),
		   'Container Width' => __('Container Width','multipurpose-ecommerce'),
		),
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'multipurpose_ecommerce_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'multipurpose_ecommerce_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'multipurpose_ecommerce_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'multipurpose-ecommerce' ),
			'section'  => 'multipurpose_ecommerce_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'multipurpose_ecommerce_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'multipurpose_ecommerce_sanitize_number_range',
	));
	$wp_customize->add_control( 'multipurpose_ecommerce_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('multipurpose_ecommerce_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_slider_height_option',array(
		'label'	=> __('Slider Height Option','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_slider',
		'type'=> 'number'
	));

	//content layout
    $wp_customize->add_setting('multipurpose_ecommerce_slider_content_option',array(
    'default' => 'Center',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_slider',
        'choices' => array(
            'Center' => __('Center','multipurpose-ecommerce'),
            'Left' => __('Left','multipurpose-ecommerce'),
            'Right' => __('Right','multipurpose-ecommerce'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_slider_button_text',array(
		'default'=> __('READ MORE','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_slider_button_text',array(
		'label'	=> __('Slider Button Text','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_slider_button_text_url',array(
		'default'=> __('','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('multipurpose_ecommerce_slider_button_text_url',array(
		'label'	=> __('Slider Button Url','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_slider',
		'type'=> 'url'
	));

	//Opacity
	$wp_customize->add_setting('multipurpose_ecommerce_slider_opacity_color',array(
      'default'              => 0.7,
      'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control( 'multipurpose_ecommerce_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','multipurpose-ecommerce' ),
	'section'     => 'multipurpose_ecommerce_slider',
	'type'        => 'select',
	'settings'    => 'multipurpose_ecommerce_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','multipurpose-ecommerce'),
      '0.1' =>  esc_attr('0.1','multipurpose-ecommerce'),
      '0.2' =>  esc_attr('0.2','multipurpose-ecommerce'),
      '0.3' =>  esc_attr('0.3','multipurpose-ecommerce'),
      '0.4' =>  esc_attr('0.4','multipurpose-ecommerce'),
      '0.5' =>  esc_attr('0.5','multipurpose-ecommerce'),
      '0.6' =>  esc_attr('0.6','multipurpose-ecommerce'),
      '0.7' =>  esc_attr('0.7','multipurpose-ecommerce'),
      '0.8' =>  esc_attr('0.8','multipurpose-ecommerce'),
      '0.9' =>  esc_attr('0.9','multipurpose-ecommerce')
	),
	));

	$wp_customize->add_setting('multipurpose_ecommerce_padding_top_bottom_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_padding_top_bottom_slider_content',array(
		'label'	=> __('Top Bottom Slider Content Padding','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_padding_left_right_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_padding_left_right_slider_content',array(
		'label'	=> __('Left Right Slider Content Padding','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_show_slider_image_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_show_slider_image_overlay',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Image Overlay Slider','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_slider'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_color_slider_image_overlay', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_ecommerce_color_slider_image_overlay', array(
		'label'    => __('Image Overlay Slider Color', 'multipurpose-ecommerce'),
		'section'  => 'multipurpose_ecommerce_slider',
		'settings' => 'multipurpose_ecommerce_color_slider_image_overlay',
	)));

	//Product
	$wp_customize->add_section('multipurpose_ecommerce_product',array(
		'title'	=> __('Product Section ','multipurpose-ecommerce'),
		'label'     => __('Add Products', 'multipurpose-ecommerce'),
		'description'	=> __('Here you can select page which you have created for Product section.','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_section_title',array(
		'label'	=> __('Section title','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_product',
		'setting'	=> 'multipurpose_ecommerce_section_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_Product_page' , array(
		'default'           => '',
		'sanitize_callback' => 'multipurpose_ecommerce_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'multipurpose_ecommerce_Product_page', array(
		'label'    => __( 'Select Page', 'multipurpose-ecommerce' ),
		'section'  => 'multipurpose_ecommerce_product',
		'type'     => 'dropdown-pages'
	));

	//no Result Setting
	$wp_customize->add_section('multipurpose_ecommerce_no_result_setting',array(
		'title'	=> __('No Results Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_no_search_result_title',array(
		'default'=> __('Nothing Found','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_no_search_result_title',array(
		'label'	=> __('No Search Results Title','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_no_search_result_content',array(
		'label'	=> __('No Search Results Content','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('multipurpose_ecommerce_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('multipurpose_ecommerce_mobile_media',array(
		'title'	=> __('Mobile Media Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));

	$wp_customize->add_setting('multipurpose_ecommerce_enable_disable_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_enable_disable_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_enable_disable_topbar',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_enable_disable_topbar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Top Header','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_enable_disable_slider',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_enable_disable_scrolltop',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('multipurpose_ecommerce_blog_post',array(
		'title'	=> __('Post Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_caps_enable',array(
        'default' => false,
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'multipurpose_ecommerce_caps_enable',array(
		'label' => esc_html__('Initial Cap (First Big Letter)', 'multipurpose-ecommerce'),
		'type' => 'checkbox',
		'section' => 'multipurpose_ecommerce_blog_post',
	));

	$wp_customize->add_setting('multipurpose_ecommerce_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_blog_post'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new multipurpose_ecommerce_Icon_Changer(
        $wp_customize,'multipurpose_ecommerce_post_date_icon_changer',array(
		'label'	=> __('Post Date Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_blog_post'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new multipurpose_ecommerce_Icon_Changer(
        $wp_customize,'multipurpose_ecommerce_post_author_icon_changer',array(
		'label'	=> __('Post Author Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('multipurpose_ecommerce_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_blog_post'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_blog_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_blog_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Post Image','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_blog_post'
    ));

    $wp_customize->add_setting( 'multipurpose_ecommerce_blog_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_blog_post_img_border_radius', array(
		'label'       => esc_html__( 'Post Image Border Radius','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'multipurpose_ecommerce_blog_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_blog_post_img_box_shadow',array(
		'label' => esc_html__( 'Post Image Shadow','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

    $wp_customize->add_setting('multipurpose_ecommerce_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new multipurpose_ecommerce_Icon_Changer(
        $wp_customize,'multipurpose_ecommerce_post_comment_icon_changer',array(
		'label'	=> __('Post Comments Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'multipurpose_ecommerce_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','multipurpose-ecommerce'),
		'type'        => 'text',
		'settings'    => 'multipurpose_ecommerce_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('multipurpose_ecommerce_blog_post_layout',array(
        'default' => 'Default',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_blog_post',
        'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Left' => __('Left','multipurpose-ecommerce'),
            'Image and Content' => __('Image and Content','multipurpose-ecommerce'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_post_break_block_setting',array(
        'default' => 'Into Blocks',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_post_break_block_setting',array(
        'type' => 'radio',
        'label' => __('Display Blog Page posts','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_blog_post',
        'choices' => array(
            'Into Blocks' => __('Into Blocks','multipurpose-ecommerce'),
            'Without Blocks' => __('Without Blocks','multipurpose-ecommerce'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_post_image_dimention',array(
       'default' => 'Default',
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_post_image_dimention',array(
       'type' => 'radio',
       'label'	=> __('Post Featured Image Dimention','multipurpose-ecommerce'),
       'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Custom Image Size' => __('Custom Image Size','multipurpose-ecommerce'),
        ),
      	'section'	=> 'multipurpose_ecommerce_blog_post'
    ));

    $wp_customize->add_setting( 'multipurpose_ecommerce_post_featured_image_width',array(
		'default' => '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_number_range'
	));
	$wp_customize->add_control('multipurpose_ecommerce_post_featured_image_width',	array(
		'label' => esc_html__( 'Blog Post Custom Width','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'type' => 'range',
		'active_callback' => 'multipurpose_ecommerce_enable_image_dimention'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_post_featured_image_height',array(
		'default' => '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_number_range'
	));
	$wp_customize->add_control('multipurpose_ecommerce_post_featured_image_height',	array(
		'label' => esc_html__( 'Blog Post Custom Height','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'type' => 'range',
		'active_callback' => 'multipurpose_ecommerce_enable_image_dimention'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_blog_description',array(
    	'default'   => 'Post Excerpt',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_blog_post',
        'choices' => array(
            'None' => __('None','multipurpose-ecommerce'),
            'Post Excerpt' => __('Post Excerpt','multipurpose-ecommerce'),
            'Post Content' => __('Post Content','multipurpose-ecommerce'),
        ),
	) );

    $wp_customize->add_setting( 'multipurpose_ecommerce_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_blog_post',
		'type'        => 'number',
		'settings'    => 'multipurpose_ecommerce_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'multipurpose_ecommerce_post_excerpt_suffix', array(
		'default'   => __('{...}','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_blog_post',
		'type'        => 'text',
		'settings'    => 'multipurpose_ecommerce_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_button_text',array(
		'default'=> __('Continue Reading....','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_button_text',array(
		'label'	=> __('Add Button Text','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_blog_post'
    ));

	$wp_customize->add_setting( 'multipurpose_ecommerce_pagination_option', array(
        'default'			=> 'Default',
        'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control( 'multipurpose_ecommerce_pagination_option', array(
        'section' => 'multipurpose_ecommerce_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'multipurpose-ecommerce' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'multipurpose-ecommerce' ),
            'next-prev' => __( 'Next / Previous', 'multipurpose-ecommerce' ),
    )));

    // Single post setting
    $wp_customize->add_section('multipurpose_ecommerce_single_post_section',array(
		'title'	=> __('Single Post Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_single_post_breadcrumb',array(
		'default' => false,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_ecommerce_single_post_breadcrumb',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Breadcrumb','multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_single_post_section',
	));

    $wp_customize->add_setting('multipurpose_ecommerce_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

     $wp_customize->add_setting( 'multipurpose_ecommerce_single_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_single_post_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_single_post_section',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'multipurpose_ecommerce_single_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_single_post_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_single_post_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

    $wp_customize->add_setting('multipurpose_ecommerce_single_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_single_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Multipurpose_Ecommerce_Icon_Changer(
     	$wp_customize,'multipurpose_ecommerce_single_post_date_icon_changer',array(
		'label'	=> __('Single Post Date Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_single_post_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('multipurpose_ecommerce_single_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_single_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Multipurpose_Ecommerce_Icon_Changer(
        $wp_customize,'multipurpose_ecommerce_single_post_comment_icon_changer',array(
		'label'	=> __('Single Post Comment Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_single_post_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('multipurpose_ecommerce_single_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_single_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Multipurpose_Ecommerce_Icon_Changer(
        $wp_customize,'multipurpose_ecommerce_single_post_author_icon_changer',array(
		'label'	=> __('Single Post Author Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_single_post_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('multipurpose_ecommerce_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_show_hide_single_post_categories',array(
		'default' => true,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
 	));
 	$wp_customize->add_control('multipurpose_ecommerce_show_hide_single_post_categories',array(
		'type' => 'checkbox',
		'label' => __('Single Post Categories','multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_single_post_section'
	));

    $wp_customize->add_setting( 'multipurpose_ecommerce_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','multipurpose-ecommerce'),
		'type'        => 'text',
		'settings'    => 'multipurpose_ecommerce_seperator_metabox',
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_comment_form_heading',array(
       'default' => __('Leave a Reply','multipurpose-ecommerce'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_comment_button_text',array(
       'default' => __('Post Comment','multipurpose-ecommerce'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    $wp_customize->add_setting( 'multipurpose_ecommerce_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'multipurpose_ecommerce_sanitize_number_range',
	));
	$wp_customize->add_control('multipurpose_ecommerce_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_ecommerce_post_comment_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_ecommerce_post_comment_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Post Comment','multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_single_post_section',
	));

	$wp_customize->add_setting('multipurpose_ecommerce_nav_links',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_nav_links',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Nav Links','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_prev_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_next_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    // related post setting
    $wp_customize->add_section('multipurpose_ecommerce_related_post_section',array(
		'title'	=> __('Related Post Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_related_post_section',
    ));

	$wp_customize->add_setting( 'multipurpose_ecommerce_show_related_post', array(
        'default' => 'By Categories', 
        'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control( 'multipurpose_ecommerce_show_related_post', array(
        'section' => 'multipurpose_ecommerce_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'multipurpose-ecommerce' ),
        'choices' => array(
            'categories'  => __(' By Categories', 'multipurpose-ecommerce'),
            'tags' => __( ' By Tags', 'multipurpose-ecommerce' ),
    )));

    $wp_customize->add_setting('multipurpose_ecommerce_change_related_post_title',array(
		'default'=> __('Related Posts','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('multipurpose_ecommerce_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_related_post_excerpt_number',array(
		'default' =>20,
		'sanitize_callback' => 'multipurpose_ecommerce_sanitize_number_range'
	));

	$wp_customize->add_control( 'multipurpose_ecommerce_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Content Limit','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_related_post_section',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	//Footer
	$wp_customize->add_section( 'multipurpose_ecommerce_footer' , array(
    	'title' => __( 'Footer Section', 'multipurpose-ecommerce' ),
		'priority'   => null,
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices',
    ));
    $wp_customize->add_control('multipurpose_ecommerce_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'multipurpose-ecommerce'),
        'section'     => 'multipurpose_ecommerce_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'multipurpose-ecommerce'),
        'choices' => array(
            '1'     => __('One', 'multipurpose-ecommerce'),
            '2'     => __('Two', 'multipurpose-ecommerce'),
            '3'     => __('Three', 'multipurpose-ecommerce'),
            '4'     => __('Four', 'multipurpose-ecommerce')
        ),
    ));

    $wp_customize->add_setting( 'multipurpose_ecommerce_footer_widget_background', array(
	    'default' => '#eee',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_footer_widget_background', array(
  		'label' => __('Footer Widget Background','multipurpose-ecommerce'),
	    'section' => 'multipurpose_ecommerce_footer',
  	)));

  	$wp_customize->add_setting('multipurpose_ecommerce_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'multipurpose_ecommerce_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_footer'
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_img_footer',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_img_footer',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','multipurpose-ecommerce'),
		'choices' => array(
            'fixed' => __('fixed','multipurpose-ecommerce'),
            'scroll' => __('scroll','multipurpose-ecommerce'),
        ),
		'section'=> 'multipurpose_ecommerce_footer',
	));

	$wp_customize->add_setting('multipurpose_ecommerce_footer_img_position',array(
		'default' => 'center center',
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));

	$wp_customize->add_control('multipurpose_ecommerce_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'multipurpose-ecommerce' ),
			'center top'   => esc_html__( 'Top', 'multipurpose-ecommerce' ),
			'right top'   => esc_html__( 'Top Right', 'multipurpose-ecommerce' ),
			'left center'   => esc_html__( 'Left', 'multipurpose-ecommerce' ),
			'center center'   => esc_html__( 'Center', 'multipurpose-ecommerce' ),
			'right center'   => esc_html__( 'Right', 'multipurpose-ecommerce' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'multipurpose-ecommerce' ),
			'center bottom'   => esc_html__( 'Bottom', 'multipurpose-ecommerce' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'multipurpose-ecommerce' ),
		),
	));

	$wp_customize->add_setting('multipurpose_ecommerce_hide_show_scroll',array(
        'default' => false,
        'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_ecommerce_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','multipurpose-ecommerce'),
      	'section' => 'multipurpose_ecommerce_footer',
	));

	$wp_customize->add_setting('multipurpose_ecommerce_scroll_icon_changer',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new multipurpose_ecommerce_Icon_Changer(
        $wp_customize,'multipurpose_ecommerce_scroll_icon_changer',array(
		'label'	=> __('Scroll To Top Icon','multipurpose-ecommerce'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_ecommerce_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','multipurpose-ecommerce'),
        'description' => __('Here you can change the Footer layout. ','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_footer',
        'choices' => array(
            'Left align' => __('Left align','multipurpose-ecommerce'),
            'Right align' => __('Right align','multipurpose-ecommerce'),
            'Center align' => __('Center align','multipurpose-ecommerce'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'    => 'multipurpose_ecommerce_sanitize_number_range',
	));
	$wp_customize->add_control('multipurpose_ecommerce_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_scroll_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_ecommerce_scroll_background_color', array(
		'label'    => __('Scroll To Top Background Color', 'multipurpose-ecommerce'),
		'section'  => 'multipurpose_ecommerce_footer',
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_scroll_icon_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_ecommerce_scroll_icon_color', array(
		'label'    => __('Scroll To Top Color', 'multipurpose-ecommerce'),
		'section'  => 'multipurpose_ecommerce_footer',
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_scroll_background_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_ecommerce_scroll_background_hover_color', array(
		'label'    => __('Scroll To Top Background Hover Color', 'multipurpose-ecommerce'),
		'section'  => 'multipurpose_ecommerce_footer',
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_footer_text',array(
		'label'	=> __('Add Copyright Text','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_footer',
		'setting'	=> 'multipurpose_ecommerce_footer_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_footer',
		'type'=> 'number'
	));

	 $wp_customize->add_setting('multipurpose_ecommerce_copyright_background_color', array(
		'default'           => '#4f66c9',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_ecommerce_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'multipurpose-ecommerce'),
		'section'  => 'multipurpose_ecommerce_footer',
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_copyright_text_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_ecommerce_copyright_text_color', array(
		'label'    => __('Copyright text Color', 'multipurpose-ecommerce'),
		'section'  => 'multipurpose_ecommerce_footer',
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'multipurpose_ecommerce_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'multipurpose_ecommerce_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'multipurpose_ecommerce_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Multipurpose Ecommerce 1.0
 * @see multipurpose-ecommerce_customize_register()
 *
 * @return void
 */
function multipurpose_ecommerce_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Multipurpose Ecommerce 1.0
 * @see multipurpose-ecommerce_customize_register()
 *
 * @return void
 */
function multipurpose_ecommerce_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function multipurpose_ecommerce_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Multipurpose_Ecommerce_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Multipurpose_Ecommerce_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Multipurpose_Ecommerce_Customize_Section_Pro(
				$manager,
				'multipurpose_ecommerce_example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Multipurpose Ecommerce', 'multipurpose-ecommerce' ),
					'pro_text' => esc_html__( 'Go Pro', 'multipurpose-ecommerce' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/premium-multipurpose-ecommerce-wordpress-themes/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'multipurpose-ecommerce-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'multipurpose-ecommerce-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Multipurpose_Ecommerce_Customize::get_instance();