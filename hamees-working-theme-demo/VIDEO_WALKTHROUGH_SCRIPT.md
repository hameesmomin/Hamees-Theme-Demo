# 5–8 Minute Client Technical Walkthrough

## 0:00–0:40 — Introduce the goal

**Say:** “This is a lightweight custom WordPress theme I built to demonstrate how I approach native theme development. It is not a static HTML mockup or a page-builder export. The layout is rendered by WordPress templates and the key content remains editable in the admin.”

Show the finished homepage briefly: hero, editable introduction, services, latest posts, call to action, and footer.

## 0:40–1:20 — Activate the theme

1. Open **WordPress Admin > Appearance > Themes**.
2. Click the Hamees Working Theme Demo details panel and point out the theme name, author, version, description, and screenshot.
3. Activate the theme if it is not already active.
4. Open the frontend in a second tab.

**Say:** “WordPress recognizes this because `style.css` has a valid theme header. The theme can be copied into `wp-content/themes` or uploaded as a zip.”

## 1:20–2:15 — Explain the file structure

Show the `hamees-working-theme-demo` folder in the code editor.

**Say:** “The structure follows the WordPress template hierarchy. `index.php` is the required fallback. `front-page.php` handles the site homepage, `page.php` handles ordinary pages, `single.php` handles individual posts, and `archive.php` handles category, date, tag, and author archives. The header and footer are shared using `get_header()` and `get_footer()`.”

Briefly open `header.php` and `footer.php`. Point out `wp_head()`, `wp_body_open()`, `wp_nav_menu()`, and `wp_footer()`.

## 2:15–3:10 — Walk through functions.php

Open `functions.php`.

**Say:** “The setup function runs on `after_setup_theme`. It enables WordPress-managed title tags, featured images, custom logos, HTML5 output, and responsive embeds. It also registers primary and footer menu locations.”

Scroll to the enqueue function.

**Say:** “CSS and JavaScript are loaded with `wp_enqueue_scripts`. I use `get_stylesheet_uri()` and `get_template_directory_uri()` so paths work regardless of where WordPress is installed. The theme version is used for cache busting.”

Point out the menu fallback and explain that it keeps a fresh installation usable before a menu is assigned.

## 3:10–4:20 — Prove admin editing and dynamic rendering

1. Open **Pages** and edit the page assigned as the homepage.
2. Change a sentence in the page body and click **Update**.
3. Refresh the frontend and show the changed introduction.

**Say:** “The title and content come from the normal WordPress page editor. In `front-page.php`, the standard Loop calls `have_posts()`, `the_post()`, `the_title()`, and `the_content()`. This gives the client control of the primary homepage message without editing code.”

Then show **Posts** and the frontend’s latest-posts section.

**Say:** “This section uses a focused `WP_Query` for the three newest posts. Each card links with `the_permalink()`, displays the post title and date, and uses `the_post_thumbnail()` when a featured image exists. After the custom query, `wp_reset_postdata()` restores global state.”

## 4:20–5:10 — Show templates in action

1. Open one latest-post card to show `single.php`.
2. Open a normal About page to show `page.php`.
3. If demo categories exist, click a category archive to show `archive.php`.

**Say:** “These views reuse the same header, footer, typography, and spacing. That keeps the code maintainable while letting each content type have the right semantic structure.”

Point out escaped values such as `esc_html()` and `esc_url()` in the editor.

## 5:10–6:00 — Demonstrate menus and branding

1. Open **Appearance > Menus** or the Navigation editor.
2. Show the menu assigned to the Primary Menu location.
3. Add, reorder, or remove one item and save.
4. Refresh the frontend.

Optionally open Site Identity and show custom-logo support.

**Say:** “Navigation and branding are managed through WordPress rather than hardcoded into the templates. That is a small detail that matters a lot in real client maintenance.”

## 6:00–6:50 — Responsive and accessibility check

1. Open browser developer tools and toggle device emulation.
2. Show a tablet width around 768 pixels.
3. Show a mobile width around 390 pixels.
4. Open and close the mobile menu.

**Say:** “The layout moves from three columns to two and then one. Font sizes and spacing scale down, images remain fluid, and the navigation becomes a touch-friendly menu. The button maintains `aria-expanded`, there is a keyboard skip link, and reduced-motion preferences are respected.”

## 6:50–7:30 — Close with the technical proof

**Say:** “This demo shows the complete practical workflow: a valid installable theme, WordPress hooks and theme support, the template hierarchy, the Loop and custom queries, admin-managed pages, posts, menus and branding, escaped output, correctly enqueued assets, and responsive frontend behavior. It stays lightweight and maintainable because it uses native WordPress features with no plugin or page-builder dependency.”

End on the desktop homepage, then briefly show the code and responsive preview side by side.

## Recording notes

- Seed the site with one homepage, one About page, three posts, featured images, and a menu before recording.
- Keep the code editor font large enough to read at 1080p.
- Hide notifications, bookmarks, passwords, local paths, and unrelated browser tabs.
- Rehearse the homepage edit so the before/after change is obvious but quick.
- Use a local WordPress URL and preload pages to avoid waiting during the recording.
- Record at 1920×1080 or higher and move the pointer slowly when highlighting code.
