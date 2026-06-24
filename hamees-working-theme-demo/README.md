# Hamees Working Theme Demo

A lightweight, installable WordPress theme created for a client-facing technical walkthrough. It demonstrates the template hierarchy, native WordPress APIs, editor-managed content, responsive frontend work, and clean theme organization without plugins or a page builder.

## Installation

1. Copy the entire `hamees-working-theme-demo` folder into `wp-content/themes/` in a WordPress installation.
2. In WordPress Admin, open **Appearance > Themes**.
3. Activate **Hamees Working Theme Demo**.
4. Go to **Settings > General** and add a useful site title and tagline. The tagline appears in the homepage hero.

You can also zip the folder, then use **Appearance > Themes > Add New > Upload Theme**.

## Homepage setup

1. Go to **Pages > Add New**.
2. Name the page something client-friendly, such as “Websites Built for Growth.” The page title becomes the homepage hero heading.
3. Add two or three paragraphs and optional Gutenberg blocks. This page content becomes the “A real theme, not static HTML” introduction.
4. Publish the page.
5. Open **Settings > Reading**.
6. Select **A static page**, choose the new page for **Homepage**, then save.
7. Edit the page again while the frontend is open in another tab to demonstrate that admin changes render dynamically.

## Navigation setup

1. Open **Appearance > Menus** (or **Appearance > Editor > Navigation**, depending on the WordPress version).
2. Create a menu and add Home, a sample page, and the Posts page.
3. Assign it to **Primary Menu**.
4. Optionally create a smaller menu assigned to **Footer Menu**.

If no primary menu is assigned, the theme displays a small fallback menu so the header remains usable.

## Suggested demo content

- Create three posts with titles, excerpts, and featured images. They appear automatically in “Latest news and insights.”
- Create an About page to demonstrate `page.php`.
- Open a post to demonstrate `single.php`.
- Click a category to demonstrate `archive.php`.
- Upload a logo under **Appearance > Customize > Site Identity** if the installation exposes the Customizer.

## Technical highlights

- `functions.php`: theme supports, two menu locations, and properly enqueued CSS/JavaScript.
- `front-page.php`: editable page content plus a separate `WP_Query` for three recent posts.
- `header.php` / `footer.php`: shared layout, `wp_head()`, `wp_footer()`, logo and menus.
- `index.php`, `page.php`, `single.php`, `archive.php`: practical template hierarchy coverage.
- `style.css`: required theme metadata plus desktop, tablet, mobile, and reduced-motion styles.
- `assets/js/navigation.js`: dependency-free accessible mobile menu behavior.

## Quick validation

From the repository root, run:

```powershell
php -l hamees-working-theme-demo/functions.php
Get-ChildItem hamees-working-theme-demo -Filter *.php | ForEach-Object { php -l $_.FullName }
```

If PHP is not on the command line, use the PHP executable included with Local, XAMPP, Laragon, or another local WordPress stack.

## Video checklist

- Show activation and theme details, including the screenshot.
- Explain registered support and asset enqueueing in `functions.php`.
- Show the shared header/footer and template hierarchy.
- Edit the assigned homepage content and refresh the frontend.
- Publish or edit a post and show the latest-posts section update.
- Resize the browser and operate the mobile navigation.
- Finish by emphasizing native WordPress APIs, escaping, maintainability, and no page-builder dependency.
