<?php
/**
 * Template Name: Full Width
 * Template Post Type: page, post
 *
 * A full-width page template without sidebar.
 * Compatible with Elementor and Divi Builder.
 *
 * @package starter
 * @since   1.0.0
 */

get_header(); ?>

<main class="site-content" id="main-content">
    <div class="starter-container starter-container--wide">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( ! starter_is_elementor_active() || ! \Elementor\Plugin::$instance->documents->get( get_the_ID() )->is_built_with_elementor() ) : ?>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
