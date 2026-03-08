# Devstarter

A clean, developer-friendly starter for building custom WordPress projects. No bloat, no page builders - just solid PHP, clean hooks, and proper coding standards.

## Features

- **Clean Architecture** - Organized folder structure with separated includes
- **WordPress Standards** - Follows WordPress coding standards and best practices
- **WooCommerce Ready** - Built-in support for WooCommerce integration
- **Custom Post Types** - Pre-configured CPT registration (uncomment to use)
- **Responsive** - Mobile-first CSS with grid system and utility classes
- **CSS Variables** - Easy theming with CSS custom properties
- **Proper Enqueue** - Scripts and styles loaded the WordPress way
- **Translation Ready** - All strings wrapped with i18n functions
- **SEO Friendly** - Semantic HTML5 markup and proper heading hierarchy
- **AJAX Ready** - Localized script with nonce for secure AJAX calls

## Requirements

- WordPress 5.9+
- PHP 7.4+

## Installation

1. Clone the repository into your `wp-content/themes/` directory:

```bash
cd wp-content/themes/
git clone https://github.com/xKILLERDEADx/devstarter.git
```

2. Activate from **Appearance > Themes** in WordPress admin.

3. Set up your navigation menu from **Appearance > Menus**.

## Structure

```
devstarter/
├── style.css                - Header info
├── functions.php            - Setup and includes
├── header.php               - Site header + navigation
├── footer.php               - Site footer + widgets
├── index.php                - Main template
├── single.php               - Single post
├── page.php                 - Page template
├── archive.php              - Archive/category pages
├── search.php               - Search results
├── 404.php                  - 404 error page
├── sidebar.php              - Sidebar widget area
├── comments.php             - Comments template
├── /assets/
│   ├── /css/main.css        - Custom styles
│   ├── /js/main.js          - Custom scripts
│   └── /images/             - Images
├── /inc/
│   ├── theme-support.php    - Features + menus
│   ├── enqueue.php          - Scripts/styles loading
│   ├── customizer.php       - Customizer settings
│   ├── custom-post-types.php - CPT registration
│   ├── page-builders.php    - Page builder support
│   └── widgets.php          - Widget areas
└── /template-parts/
    ├── content.php           - Post loop content
    ├── content-none.php      - No results content
    └── content-search.php    - Search result content
```

## Customization

### CSS Variables

Edit the CSS custom properties in `assets/css/main.css` to match your project:

```css
:root {
    --color-primary: #2563eb;
    --color-secondary: #1e40af;
    --color-dark: #1e293b;
    --font-primary: 'Your Font', sans-serif;
    --container-width: 1200px;
}
```

### Custom Post Types

Uncomment and modify the examples in `inc/custom-post-types.php`:

```php
register_post_type( 'portfolio', array(
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'menu_icon' => 'dashicons-portfolio',
) );
```

### Adding Google Fonts

Uncomment the Google Fonts section in `inc/enqueue.php` and update the font URL.

## Contributing

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/your-feature`
3. Commit changes: `git commit -m 'Add your feature'`
4. Push to the branch: `git push origin feature/your-feature`
5. Open a Pull Request

## License

GNU General Public License v2 or later - [GPL-2.0](https://www.gnu.org/licenses/gpl-2.0.html)

## Author

**Muhammad Abid** - [muhammadabid.com](https://muhammadabid.com) | [GitHub](https://github.com/xKILLERDEADx)
