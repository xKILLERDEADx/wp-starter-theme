<?php
/**
 * Custom Post Types Registration
 *
 * @package devstarter
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
    //         'name'               => __( 'Portfolio', 'devstarter' ),
    //         'singular_name'      => __( 'Project', 'devstarter' ),
    //         'add_new'            => __( 'Add New Project', 'devstarter' ),
    //         'add_new_item'       => __( 'Add New Project', 'devstarter' ),
    //         'edit_item'          => __( 'Edit Project', 'devstarter' ),
    //         'view_item'          => __( 'View Project', 'devstarter' ),
    //         'all_items'          => __( 'All Projects', 'devstarter' ),
    //         'search_items'       => __( 'Search Projects', 'devstarter' ),
    //         'not_found'          => __( 'No projects found', 'devstarter' ),
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
    //         'name'               => __( 'Services', 'devstarter' ),
    //         'singular_name'      => __( 'Service', 'devstarter' ),
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
    //         'name'          => __( 'Project Categories', 'devstarter' ),
    //         'singular_name' => __( 'Category', 'devstarter' ),
    //     ),
    //     'public'            => true,
    //     'hierarchical'      => true,
    //     'rewrite'           => array( 'slug' => 'project-category' ),
    //     'show_in_rest'      => true,
    // ) );
}
add_action( 'init', 'starter_register_taxonomies' );
