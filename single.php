<?php
/**
 * Single Post Template
 *
 * @package devstarter
 */

get_header(); ?>

<main class="site-content" id="main-content">
    <div class="starter-container">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post single-post' ); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail( 'starter-featured' ); ?>
                    </div>
                <?php endif; ?>

                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <?php starter_posted_on(); ?>
                        <?php starter_posted_by(); ?>
                    </div>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'devstarter' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

                <footer class="entry-footer">
                    <?php
                    $tags = get_the_tag_list( '<span class="tags">', ', ', '</span>' );
                    if ( $tags ) echo $tags;
                    ?>
                </footer>
            </article>

            <?php
            the_post_navigation( array(
                'prev_text' => '&laquo; %title',
                'next_text' => '%title &raquo;',
            ) );
            ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
