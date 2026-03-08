<footer class="site-footer" id="site-footer">
    <div class="starter-container">

        <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) ) : ?>
            <div class="footer-widgets starter-grid starter-grid--2">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="site-info">
            <?php
            $custom_footer = get_theme_mod( 'starter_footer_text', '' );
            if ( ! empty( $custom_footer ) ) :
                echo wp_kses_post( $custom_footer );
            else :
            ?>
                <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'wp-starter-theme' ); ?></p>
            <?php endif; ?>
        </div>

        <?php if ( has_nav_menu( 'footer' ) ) : ?>
            <nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'wp-starter-theme' ); ?>">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'footer-menu',
                    'container'      => false,
                    'depth'          => 1,
                ) );
                ?>
            </nav>
        <?php endif; ?>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
