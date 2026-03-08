<?php
/**
 * Widget Areas Registration
 *
 * @package starter
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register widget areas
 *
 * @return void
 */
function starter_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'wp-starter-theme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Main sidebar widget area.', 'wp-starter-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'wp-starter-theme' ),
        'id'            => 'footer-1',
        'description'   => __( 'First footer widget area.', 'wp-starter-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'wp-starter-theme' ),
        'id'            => 'footer-2',
        'description'   => __( 'Second footer widget area.', 'wp-starter-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'starter_widgets_init' );
