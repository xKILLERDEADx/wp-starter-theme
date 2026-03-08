<?php
/**
 * Custom Post Types Registration
 *
 * @package starter
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register custom post types
 * Uncomment and modify below to add your custom post types
 *
 * @return void
 */
function starter_register_post_types() {

    // Example: Portfolio CPT
    // register_post_type( 'portfolio', array(
    //     'labels' => array(
    //         'name'               => __( 'Portfolio', 'wp-starter-theme' ),
    //         'singular_name'      => __( 'Project', 'wp-starter-theme' ),
    //         'add_new'            => __( 'Add New Project', 'wp-starter-theme' ),
    //         'add_new_item'       => __( 'Add New Project', 'wp-starter-theme' ),
    //         'edit_item'          => __( 'Edit Project', 'wp-starter-theme' ),
    //         'view_item'          => __( 'View Project', 'wp-starter-theme' ),
    //         'all_items'          => __( 'All Projects', 'wp-starter-theme' ),
    //         'search_items'       => __( 'Search Projects', 'wp-starter-theme' ),
    //         'not_found'          => __( 'No projects found', 'wp-starter-theme' ),
    //     ),
    //     'public'             => true,
    //     'has_archive'        => true,
    //     'rewrite'            => array( 'slug' => 'portfolio' ),
    //     'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    //     'menu_icon'          => 'dashicons-portfolio',
    //     'show_in_rest'       => true,
    // ) );

    // Example: Services CPT
    // register_post_type( 'service', array(
    //     'labels' => array(
    //         'name'               => __( 'Services', 'wp-starter-theme' ),
    //         'singular_name'      => __( 'Service', 'wp-starter-theme' ),
    //     ),
    //     'public'             => true,
    //     'has_archive'        => true,
    //     'rewrite'            => array( 'slug' => 'services' ),
    //     'supports'           => array( 'title', 'editor', 'thumbnail' ),
    //     'menu_icon'          => 'dashicons-hammer',
    //     'show_in_rest'       => true,
    // ) );
}
add_action( 'init', 'starter_register_post_types' );

/**
 * Register custom taxonomies
 *
 * @return void
 */
function starter_register_taxonomies() {

    // Example: Project Category taxonomy
    // register_taxonomy( 'project_category', 'portfolio', array(
    //     'labels' => array(
    //         'name'          => __( 'Project Categories', 'wp-starter-theme' ),
    //         'singular_name' => __( 'Category', 'wp-starter-theme' ),
    //     ),
    //     'public'            => true,
    //     'hierarchical'      => true,
    //     'rewrite'           => array( 'slug' => 'project-category' ),
    //     'show_in_rest'      => true,
    // ) );
}
add_action( 'init', 'starter_register_taxonomies' );
