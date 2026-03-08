<?php
/**
 * Widget Areas Registration
 *
 * @package devstarter
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
        'name'          => __( 'Sidebar', 'devstarter' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Main sidebar widget area.', 'devstarter' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'devstarter' ),
        'id'            => 'footer-1',
        'description'   => __( 'First footer widget area.', 'devstarter' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'devstarter' ),
        'id'            => 'footer-2',
        'description'   => __( 'Second footer widget area.', 'devstarter' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'starter_widgets_init' );
