<?php
/**
 * Search Results Template
 *
 * @package starter
 */

get_header(); ?>

<main class="site-content" id="main-content">
    <div class="starter-container">

        <header class="archive-header">
            <h1 class="archive-title">
                <?php printf( esc_html__( 'Search Results for: %s', 'wp-starter-theme' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h1>
        </header>

        <?php if ( have_posts() ) : ?>

            <div class="posts-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'search' ); ?>
                <?php endwhile; ?>
            </div>

            <?php starter_pagination(); ?>

        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
