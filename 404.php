<?php
/**
 * 404 Page Template
 *
 * @package devstarter
 */

get_header(); ?>

<main class="site-content" id="main-content">
    <div class="starter-container text-center">

        <h1><?php esc_html_e( '404 - Page Not Found', 'devstarter' ); ?></h1>
        <p><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'devstarter' ); ?></p>

        <div class="mt-2">
            <?php get_search_form(); ?>
        </div>

        <div class="mt-2">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="starter-btn">
                <?php esc_html_e( 'Back to Home', 'devstarter' ); ?>
            </a>
        </div>

    </div>
</main>

<?php get_footer(); ?>
