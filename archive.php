<?php
/**
 * Archive Template
 *
 * @package starter
 */

get_header(); ?>

<main class="site-content" id="main-content">
    <div class="starter-container">

        <header class="archive-header">
            <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
            <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
        </header>

        <?php if ( have_posts() ) : ?>

            <div class="posts-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
                <?php endwhile; ?>
            </div>

            <?php starter_pagination(); ?>

        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
