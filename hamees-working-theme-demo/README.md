# Hamees Working Theme Demo

A lightweight, installable custom WordPress theme created as a professional public portfolio demonstration. The working frontend remains a classic PHP theme using the WordPress template hierarchy, the Loop, `WP_Query`, registered menus, responsive CSS, and dependency-free navigation. It is enhanced with `theme.json` and registered Gutenberg patterns. Safe block-template and template-part examples live under `block-theme-reference/` and do not override the PHP templates.

## Important Installation Note

Do not upload the entire repository folder into WordPress. Copy or upload only the `hamees-working-theme-demo` folder into `wp-content/themes/`.

## Installation

1. Copy the entire `hamees-working-theme-demo` folder into `wp-content/themes/` in a WordPress installation.
2. In WordPress Admin, open **Appearance > Themes**.
3. Activate **Hamees Working Theme Demo**.
4. Go to **Settings > General** and add a useful site title and tagline. The tagline appears in the homepage hero.

The theme uses the normal Page and Post Block Editor. It does not claim Full Site Editing: the reference block templates are intentionally kept outside WordPress's active `/templates` path.

You can also zip the folder, then use **Appearance > Themes > Add New > Upload Theme**.

## Homepage setup

1. Go to **Pages > Add New**.
2. Name the page something demo-friendly, such as "Atlas Trail Studio." The site title becomes the homepage hero heading.
3. Add two or three paragraphs and optional Gutenberg blocks. This page content becomes the "Journeys planned with care, context, and pace" introduction.
4. Publish the page.
5. Open **Settings > Reading**.
6. Select **A static page**, choose the new page for **Homepage**, then save.
7. Edit the page again while the frontend is open in another tab to demonstrate that admin changes render dynamically.

## Navigation setup

1. Open **Appearance > Menus**.
2. Create a menu and add Home, a sample page, and the Posts page.
3. Assign it to **Primary Menu**.
4. Optionally create a smaller menu assigned to **Footer Menu**.

The working PHP header uses `wp_nav_menu()`. The dependency-free `assets/js/navigation.js` file opens and closes the responsive menu and updates `aria-expanded`.

## Suggested demo content

- Create three posts with titles, excerpts, and featured images. They appear automatically in the latest Journal section.
- Create an About page to demonstrate `page.php`.
- Open a post to demonstrate `single.php`.
- Click a category to demonstrate `archive.php`.
- Upload a logo under **Appearance > Customize > Site Identity** if the installation exposes the Customizer.

## Technical highlights

- `theme.json`: governed palette, spacing, typography, layout widths, element styles, and Gutenberg editor/frontend alignment within the working PHP theme.
- `patterns/`: registered travel hero, destination grid, itinerary CTA, enquiry CTA, and editorial Query Loop patterns available to editors.
- `block-theme-reference/`: non-active examples of block templates and reusable header/footer template parts.
- `functions.php`: theme/editor supports, menu locations, enqueued assets, block style/category registration, and the documented `wptravelengine-templates` boundary.
- Root PHP templates: the active frontend templates demonstrating the Loop, `WP_Query`, `wp_head()`, `wp_footer()`, escaping, and WordPress template hierarchy.
- `style.css`: required theme metadata plus desktop, tablet, mobile, and reduced-motion styles.
- `assets/js/navigation.js`: dependency-free accessible mobile menu behavior for the working PHP header.

## Production architecture alignment

This demo intentionally separates working evidence from architectural reference material:

- Working PHP templates prove the core hierarchy, hooks, dynamic rendering, responsive behaviour, and escaping.
- Root `theme.json` and registered patterns add a Gutenberg-first editorial layer without changing template resolution.
- `block-theme-reference/` shows how templates and parts could be organised in a native block theme.
- PHP remains the expected boundary where verified WPTE classic templates and hooks require it.
- `add_theme_support( 'wptravelengine-templates' )` declared without faking WPTE data, hooks, booking, pricing, or enquiry behavior.
- The theme continues to work without WP Travel Engine or any other plugin.

A production travel platform implementation would verify active WPTE templates, hooks, forms, nonces, AJAX endpoints, SEO ownership, CRM handoff, and custom URL behavior before adding narrow overrides. This demo keeps those concerns documented at a high level without pretending to include a live booking integration.

## Quick validation

From the repository root, run:

```powershell
php -l hamees-working-theme-demo/functions.php
Get-ChildItem hamees-working-theme-demo -Filter *.php | ForEach-Object { php -l $_.FullName }
```

If PHP is not on the command line, use the PHP executable included with Local, XAMPP, Laragon, or another local WordPress stack.

## Demo checklist

- Show activation and theme details, including the screenshot.
- Explain registered support and asset enqueueing in `functions.php`.
- Show the shared header/footer and template hierarchy.
- Edit the assigned homepage content and refresh the frontend.
- Publish or edit a post and show the latest-posts section update.
- Resize the browser and operate the mobile navigation.
- Finish by emphasizing native WordPress APIs, escaping, maintainability, and no page-builder dependency.
