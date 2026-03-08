<?php
/**
 * Page Builder Compatibility
 *
 * Ensures seamless integration with Elementor, Divi Builder,
 * and other popular page builders.
 *
 * @package devstarter
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Check if Elementor is active
 *
 * @return bool
 */
function starter_is_elementor_active() {
    return defined( 'ELEMENTOR_VERSION' );
}

/**
 * Check if Divi is active
 *
 * @return bool
 */
function starter_is_divi_active() {
    return defined( 'ET_BUILDER_VERSION' );
}

/**
 * Register Elementor support
 *
 * @return void
 */
function starter_elementor_support() {
    if ( ! starter_is_elementor_active() ) {
        return;
    }

    // Register Elementor locations for theme builder
    add_action( 'elementor/theme/register_locations', function ( $manager ) {
        $manager->register_all_core_location();
    } );
}
add_action( 'after_setup_theme', 'starter_elementor_support' );

/**
 * Add body classes for page builder detection
 *
 * @param array $classes Existing body classes.
 * @return array Modified body classes.
 */
function starter_page_builder_body_classes( $classes ) {
    if ( starter_is_elementor_active() ) {
        $classes[] = 'starter-elementor-active';
    }

    if ( starter_is_divi_active() ) {
        $classes[] = 'starter-divi-active';
    }

    // Check if current page uses Elementor
    if ( starter_is_elementor_active() && is_singular() ) {
        $post_id = get_the_ID();
        if ( \Elementor\Plugin::$instance->documents->get( $post_id )->is_built_with_elementor() ) {
            $classes[] = 'elementor-page';
        }
    }

    return $classes;
}
add_filter( 'body_class', 'starter_page_builder_body_classes' );

/**
 * Adjust content width for page builder pages
 *
 * @return void
 */
function starter_page_builder_content_width() {
    if ( is_singular() ) {
        $post_id = get_the_ID();

        // Elementor full-width template
        if ( starter_is_elementor_active() ) {
            $document = \Elementor\Plugin::$instance->documents->get( $post_id );
            if ( $document && $document->is_built_with_elementor() ) {
                $GLOBALS['content_width'] = 1920;
            }
        }

        // WordPress full-width template check
        $template = get_page_template_slug( $post_id );
        if ( 'template-full-width.php' === $template ) {
            $GLOBALS['content_width'] = 1920;
        }
    }
}
add_action( 'template_redirect', 'starter_page_builder_content_width' );

/**
 * Register Elementor widget categories (if needed)
 *
 * @param object $elements_manager Elementor elements manager.
 * @return void
 */
function starter_register_elementor_category( $elements_manager ) {
    $elements_manager->add_category(
        'starter-widgets',
        array(
            'title' => __( 'Starter Theme', 'devstarter' ),
            'icon'  => 'fa fa-plug',
        )
    );
}

if ( starter_is_elementor_active() ) {
    add_action( 'elementor/elements/categories_registered', 'starter_register_elementor_category' );
}
