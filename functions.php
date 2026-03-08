<?php
/**
 * Devstarter - Functions and Definitions
 *
 * @package devstarter
 * @version 1.0.0
 * @author  Muhammad Abid
 * @link    https://muhammadabid.com
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'STARTER_VERSION', '1.0.0' );
define( 'STARTER_DIR', get_template_directory() );
define( 'STARTER_URI', get_template_directory_uri() );

/**
 * Include theme modules
 */
require_once STARTER_DIR . '/inc/theme-support.php';
require_once STARTER_DIR . '/inc/enqueue.php';
require_once STARTER_DIR . '/inc/custom-post-types.php';
require_once STARTER_DIR . '/inc/widgets.php';
require_once STARTER_DIR . '/inc/customizer.php';
require_once STARTER_DIR . '/inc/page-builders.php';

/**
 * Set content width for embeds and media
 */
if ( ! isset( $content_width ) ) {
    $content_width = 1200;
}

/**
 * Register custom image sizes
 */
function starter_custom_image_sizes() {
    add_image_size( 'starter-featured',  800, 450, true );
    add_image_size( 'starter-thumbnail', 400, 300, true );
    add_image_size( 'starter-square',    600, 600, true );
    add_image_size( 'starter-hero',     1920, 800, true );
}
add_action( 'after_setup_theme', 'starter_custom_image_sizes' );

/**
 * Make custom sizes available in media uploader
 */
function starter_custom_image_size_names( $sizes ) {
    return array_merge( $sizes, array(
        'starter-featured'  => __( 'Featured (800x450)', 'devstarter' ),
        'starter-thumbnail' => __( 'Thumbnail (400x300)', 'devstarter' ),
        'starter-square'    => __( 'Square (600x600)', 'devstarter' ),
        'starter-hero'      => __( 'Hero (1920x800)', 'devstarter' ),
    ) );
}
add_filter( 'image_size_names_choose', 'starter_custom_image_size_names' );

/**
 * Excerpt length
 */
function starter_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'starter_excerpt_length' );

/**
 * Excerpt ending
 */
function starter_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'starter_excerpt_more' );

/**
 * Pagination
 */
function starter_pagination() {
    the_posts_pagination( array(
        'mid_size'           => 2,
        'prev_text'          => '&laquo; ' . __( 'Previous', 'devstarter' ),
        'next_text'          => __( 'Next', 'devstarter' ) . ' &raquo;',
        'screen_reader_text' => __( 'Posts navigation', 'devstarter' ),
    ) );
}

/**
 * Post date output
 */
function starter_posted_on() {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string .= '<time class="updated screen-reader-text" datetime="%3$s">%4$s</time>';
    }

    printf(
        '<span class="posted-on">' . $time_string . '</span>',
        esc_attr( get_the_date( DATE_W3C ) ),
        esc_html( get_the_date() ),
        esc_attr( get_the_modified_date( DATE_W3C ) ),
        esc_html( get_the_modified_date() )
    );
}

/**
 * Post author output
 */
function starter_posted_by() {
    printf(
        '<span class="byline"> %s <a href="%s" rel="author">%s</a></span>',
        esc_html__( 'by', 'devstarter' ),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        esc_html( get_the_author() )
    );
}

/**
 * Comment count link
 */
function starter_comment_count() {
    if ( ! post_password_required() && comments_open() ) {
        echo '<span class="comments-link">';
        comments_popup_link(
            __( 'Leave a comment', 'devstarter' ),
            __( '1 Comment', 'devstarter' ),
            __( '% Comments', 'devstarter' )
        );
        echo '</span>';
    }
}

/**
 * Returns layout class from customizer setting
 */
function starter_get_layout_class() {
    $position = get_theme_mod( 'starter_sidebar_position', 'right' );

    switch ( $position ) {
        case 'left':
            return 'starter-layout starter-layout--left-sidebar';
        case 'none':
            return 'starter-layout starter-layout--full-width';
        default:
            return 'starter-layout';
    }
}
