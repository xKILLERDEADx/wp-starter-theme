<?php
/**
 * Page Template
 *
 * @package starter
 */

get_header(); ?>

<main class="site-content" id="main-content">
    <div class="starter-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="page-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
