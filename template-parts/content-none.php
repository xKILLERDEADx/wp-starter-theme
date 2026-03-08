<?php
/**
 * Template part: No content found
 *
 * @package devstarter
 */
?>

<section class="no-results text-center">
    <h2><?php esc_html_e( 'Nothing Found', 'devstarter' ); ?></h2>

    <?php if ( is_search() ) : ?>
        <p><?php esc_html_e( 'Sorry, no results matched your search. Try different keywords.', 'devstarter' ); ?></p>
        <?php get_search_form(); ?>
    <?php else : ?>
        <p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for.', 'devstarter' ); ?></p>
    <?php endif; ?>
</section>
