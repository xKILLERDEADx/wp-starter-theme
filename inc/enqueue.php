<?php
/**
 * Enqueue scripts and styles
 *
 * @package starter
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue theme styles and scripts
 *
 * @return void
 */
function starter_enqueue_assets() {
    // Theme stylesheet
    wp_enqueue_style(
        'starter-style',
        get_stylesheet_uri(),
        array(),
        STARTER_VERSION
    );

    // Custom CSS
    wp_enqueue_style(
        'starter-main',
        STARTER_URI . '/assets/css/main.css',
        array( 'starter-style' ),
        STARTER_VERSION
    );

    // Google Fonts (optional - uncomment to use)
    // wp_enqueue_style(
    //     'starter-fonts',
    //     'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
    //     array(),
    //     null
    // );

    // Custom JS
    wp_enqueue_script(
        'starter-main',
        STARTER_URI . '/assets/js/main.js',
        array(),
        STARTER_VERSION,
        true
    );

    // Localize script for AJAX
    wp_localize_script( 'starter-main', 'starterAjax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'starter_nonce' ),
    ) );

    // Comment reply script
    if ( is_singular() && comments_open() ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'starter_enqueue_assets' );
