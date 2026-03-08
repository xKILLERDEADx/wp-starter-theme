<?php
/**
 * Theme Support Features
 *
 * @package devstarter
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Setup theme features
 *
 * @return void
 */
function starter_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => 'f8fafc',
    ) );

    add_theme_support( 'custom-header', array(
        'default-image' => '',
        'width'         => 1920,
        'height'        => 400,
        'flex-width'    => true,
        'flex-height'   => true,
        'header-text'   => false,
    ) );

    add_theme_support( 'automatic-feed-links' );

    // Block editor support
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_editor_style( 'assets/css/main.css' );

    // WooCommerce
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'devstarter' ),
        'footer'  => __( 'Footer Menu', 'devstarter' ),
    ) );

    load_theme_textdomain( 'devstarter', STARTER_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'starter_theme_support' );

/**
 * Register block styles
 *
 * @return void
 */
function starter_register_block_styles() {
    if ( ! function_exists( 'register_block_style' ) ) {
        return;
    }

    register_block_style( 'core/button', array(
        'name'  => 'starter-outline',
        'label' => __( 'Outline', 'devstarter' ),
    ) );

    register_block_style( 'core/group', array(
        'name'  => 'starter-shadow',
        'label' => __( 'Shadow', 'devstarter' ),
    ) );
}
add_action( 'init', 'starter_register_block_styles' );

/**
 * Register block patterns
 *
 * @return void
 */
function starter_register_block_patterns() {
    if ( ! function_exists( 'register_block_pattern' ) ) {
        return;
    }

    register_block_pattern_category( 'starter', array(
        'label' => __( 'Starter Theme', 'devstarter' ),
    ) );

    register_block_pattern( 'starter/call-to-action', array(
        'title'       => __( 'Call to Action', 'devstarter' ),
        'description' => __( 'A simple call to action section.', 'devstarter' ),
        'categories'  => array( 'starter' ),
        'content'     => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} --><div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center"} --><h2 class="wp-block-heading has-text-align-center">' . esc_html__( 'Ready to get started?', 'devstarter' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html__( 'Contact us today to discuss your project.', 'devstarter' ) . '</p><!-- /wp:paragraph --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Get in Touch', 'devstarter' ) . '</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
    ) );
}
add_action( 'init', 'starter_register_block_patterns' );
