<?php
/**
 * Main Index Template
 *
 * @package starter
 */

get_header(); ?>

<main class="site-content" id="main-content">
    <div class="starter-container">

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
