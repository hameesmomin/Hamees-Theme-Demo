# Hamees Working Theme Demo

A complete, lightweight WordPress theme built for a client-facing technical walkthrough. The installable theme is in [`hamees-working-theme-demo`](./hamees-working-theme-demo/).

## What this demonstrates

- A valid WordPress theme header and template hierarchy
- Native theme supports, navigation locations, and enqueued assets
- Admin-editable static homepage content
- Dynamic latest-post cards powered by `WP_Query`
- Pages, single posts, archives, featured images, and custom logos
- Accessible mobile navigation and responsive desktop/tablet/mobile styling
- Escaped output, translation-ready strings, and clean PHP organization
- No plugins, page builders, or frontend frameworks

## Fast setup

1. Copy `hamees-working-theme-demo` into your WordPress installation at `wp-content/themes/`.
2. Activate **Hamees Working Theme Demo** under **Appearance > Themes**.
3. Create and publish a page with a title and several content blocks.
4. Under **Settings > Reading**, choose **A static page** and assign that page as the Homepage.
5. Create a menu and assign it to the **Primary Menu** location.
6. Add three posts with featured images to populate the latest-posts section.

Detailed setup and demo-content guidance are in the [theme README](./hamees-working-theme-demo/README.md). The timed presentation is in [VIDEO_WALKTHROUGH_SCRIPT.md](./hamees-working-theme-demo/VIDEO_WALKTHROUGH_SCRIPT.md).

## Package for upload

From this repository in PowerShell:

```powershell
Compress-Archive -Path .\hamees-working-theme-demo -DestinationPath .\hamees-working-theme-demo.zip -Force
```

Then upload the zip through **Appearance > Themes > Add New > Upload Theme**.

## Author

Hamees Momin
