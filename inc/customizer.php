<?php
/**
 * Theme Customizer Settings
 *
 * Registers options in Appearance > Customize for the theme.
 *
 * @package devstarter
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register customizer settings and controls
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
 * @return void
 */
function starter_customize_register( $wp_customize ) {

    /*
     * --------------------------------------------------
     * Section: General Settings
     * --------------------------------------------------
     */
    $wp_customize->add_section( 'starter_general', array(
        'title'    => __( 'General Settings', 'devstarter' ),
        'priority' => 30,
    ) );

    // Primary color
    $wp_customize->add_setting( 'starter_primary_color', array(
        'default'           => '#2563eb',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'starter_primary_color', array(
        'label'   => __( 'Primary Color', 'devstarter' ),
        'section' => 'starter_general',
    ) ) );

    // Secondary color
    $wp_customize->add_setting( 'starter_secondary_color', array(
        'default'           => '#1e40af',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'starter_secondary_color', array(
        'label'   => __( 'Secondary Color', 'devstarter' ),
        'section' => 'starter_general',
    ) ) );

    /*
     * --------------------------------------------------
     * Section: Header Settings
     * --------------------------------------------------
     */
    $wp_customize->add_section( 'starter_header', array(
        'title'    => __( 'Header Settings', 'devstarter' ),
        'priority' => 35,
    ) );

    // Sticky header toggle
    $wp_customize->add_setting( 'starter_sticky_header', array(
        'default'           => true,
        'sanitize_callback' => 'starter_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'starter_sticky_header', array(
        'label'   => __( 'Enable Sticky Header', 'devstarter' ),
        'section' => 'starter_header',
        'type'    => 'checkbox',
    ) );

    // Header background color
    $wp_customize->add_setting( 'starter_header_bg', array(
        'default'           => '#0f172a',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'starter_header_bg', array(
        'label'   => __( 'Header Background Color', 'devstarter' ),
        'section' => 'starter_header',
    ) ) );

    /*
     * --------------------------------------------------
     * Section: Footer Settings
     * --------------------------------------------------
     */
    $wp_customize->add_section( 'starter_footer', array(
        'title'    => __( 'Footer Settings', 'devstarter' ),
        'priority' => 40,
    ) );

    // Footer copyright text
    $wp_customize->add_setting( 'starter_footer_text', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ) );

    $wp_customize->add_control( 'starter_footer_text', array(
        'label'       => __( 'Footer Copyright Text', 'devstarter' ),
        'section'     => 'starter_footer',
        'type'        => 'textarea',
        'description' => __( 'Leave empty to use the default copyright text.', 'devstarter' ),
    ) );

    /*
     * --------------------------------------------------
     * Section: Layout Settings
     * --------------------------------------------------
     */
    $wp_customize->add_section( 'starter_layout', array(
        'title'    => __( 'Layout Settings', 'devstarter' ),
        'priority' => 45,
    ) );

    // Sidebar position
    $wp_customize->add_setting( 'starter_sidebar_position', array(
        'default'           => 'right',
        'sanitize_callback' => 'starter_sanitize_select',
    ) );

    $wp_customize->add_control( 'starter_sidebar_position', array(
        'label'   => __( 'Sidebar Position', 'devstarter' ),
        'section' => 'starter_layout',
        'type'    => 'select',
        'choices' => array(
            'right' => __( 'Right Sidebar', 'devstarter' ),
            'left'  => __( 'Left Sidebar', 'devstarter' ),
            'none'  => __( 'No Sidebar (Full Width)', 'devstarter' ),
        ),
    ) );

    // Container width
    $wp_customize->add_setting( 'starter_container_width', array(
        'default'           => '1200',
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'starter_container_width', array(
        'label'       => __( 'Container Width (px)', 'devstarter' ),
        'section'     => 'starter_layout',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 960,
            'max'  => 1600,
            'step' => 10,
        ),
    ) );
}
add_action( 'customize_register', 'starter_customize_register' );

/**
 * Output customizer CSS into the document head
 *
 * @return void
 */
function starter_customizer_css() {
    $primary   = get_theme_mod( 'starter_primary_color', '#2563eb' );
    $secondary = get_theme_mod( 'starter_secondary_color', '#1e40af' );
    $header_bg = get_theme_mod( 'starter_header_bg', '#0f172a' );
    $container = get_theme_mod( 'starter_container_width', '1200' );

    // Convert hex to RGB for the primary color
    list( $r, $g, $b ) = sscanf( $primary, "#%02x%02x%02x" );

    $css = "
        :root {
            --starter-color-primary: {$primary};
            --starter-color-primary-rgb: {$r}, {$g}, {$b};
            --starter-color-secondary: {$secondary};
            --starter-container-width: {$container}px;
        }
        .site-header { background: {$header_bg}; }
    ";

    wp_add_inline_style( 'starter-main', trim( $css ) );
}
add_action( 'wp_enqueue_scripts', 'starter_customizer_css', 20 );

/**
 * Sanitize checkbox values
 *
 * @param mixed $input Checkbox value.
 * @return bool Sanitized value.
 */
function starter_sanitize_checkbox( $input ) {
    return ( isset( $input ) && true === $input ) ? true : false;
}

/**
 * Sanitize select values
 *
 * @param string               $input   Value to sanitize.
 * @param WP_Customize_Setting $setting Setting object.
 * @return string Sanitized value.
 */
function starter_sanitize_select( $input, $setting ) {
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ) ? $input : $setting->default;
}
