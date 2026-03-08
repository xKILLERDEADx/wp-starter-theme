<?php
/**
 * Sidebar Template
 *
 * @package devstarter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside class="sidebar" id="sidebar">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
