/**
 * WP Starter Theme - Main JavaScript
 *
 * @package starter
 * @version 1.0.0
 */

(function () {
    'use strict';

    /**
     * Mobile navigation toggle
     */
    const initMobileNav = () => {
        const nav = document.getElementById('site-navigation');
        const toggle = document.querySelector('.menu-toggle');

        if (toggle && nav) {
            toggle.addEventListener('click', () => {
                nav.classList.toggle('is-open');
                toggle.setAttribute(
                    'aria-expanded',
                    nav.classList.contains('is-open')
                );
            });
        }
    };

    /**
     * Sticky header on scroll
     */
    const initStickyHeader = () => {
        const header = document.getElementById('site-header');
        if (!header) return;

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
        });
    };

    /**
     * Smooth scroll to anchor links
     */
    const initSmoothScroll = () => {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    };

    /**
     * Initialize on DOM ready
     */
    document.addEventListener('DOMContentLoaded', () => {
        initMobileNav();
        initStickyHeader();
        initSmoothScroll();
    });

})();
