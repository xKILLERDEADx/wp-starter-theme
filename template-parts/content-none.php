<?php
/**
 * Template part: No content found
 *
 * @package starter
 */
?>

<section class="no-results text-center">
    <h2><?php esc_html_e( 'Nothing Found', 'wp-starter-theme' ); ?></h2>

    <?php if ( is_search() ) : ?>
        <p><?php esc_html_e( 'Sorry, no results matched your search. Try different keywords.', 'wp-starter-theme' ); ?></p>
        <?php get_search_form(); ?>
    <?php else : ?>
        <p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for.', 'wp-starter-theme' ); ?></p>
    <?php endif; ?>
</section>
