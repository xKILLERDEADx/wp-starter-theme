<?php
/**
 * Template part: Search result content
 *
 * @package starter
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'starter-post' ); ?>>
    <div class="post-content">
        <header class="entry-header">
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="entry-meta">
                <?php starter_posted_on(); ?>
            </div>
        </header>

        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>

        <footer class="entry-footer">
            <a href="<?php the_permalink(); ?>" class="starter-btn starter-btn--sm">
                <?php esc_html_e( 'View', 'wp-starter-theme' ); ?>
            </a>
        </footer>
    </div>
</article>
