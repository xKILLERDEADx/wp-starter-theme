<?php
/**
 * Template part: Post content
 *
 * @package starter
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'starter-post' ); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'starter-featured' ); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="post-content">
        <header class="entry-header">
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="entry-meta">
                <?php starter_posted_on(); ?>
                <?php starter_posted_by(); ?>
            </div>
        </header>

        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>

        <footer class="entry-footer">
            <a href="<?php the_permalink(); ?>" class="starter-btn">
                <?php esc_html_e( 'Read More', 'wp-starter-theme' ); ?>
            </a>
        </footer>
    </div>

</article>
