<?php
/**
 * 404 Page Template
 *
 * @package starter
 */

get_header(); ?>

<main class="site-content" id="main-content">
    <div class="starter-container text-center">

        <h1><?php esc_html_e( '404 - Page Not Found', 'wp-starter-theme' ); ?></h1>
        <p><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'wp-starter-theme' ); ?></p>

        <div class="mt-2">
            <?php get_search_form(); ?>
        </div>

        <div class="mt-2">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="starter-btn">
                <?php esc_html_e( 'Back to Home', 'wp-starter-theme' ); ?>
            </a>
        </div>

    </div>
</main>

<?php get_footer(); ?>
