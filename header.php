<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header<?php echo esc_attr( get_theme_mod( 'starter_sticky_header', true ) ? '' : ' no-sticky' ); ?>" id="site-header">
    <div class="starter-container">
        <div class="site-branding">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
            <?php endif; ?>
        </div>

        <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'wp-starter-theme' ); ?>">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="main-navigation" id="site-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'wp-starter-theme' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => false,
                'depth'          => 3,
            ) );
            ?>
        </nav>
    </div>
</header>
