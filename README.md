# Hamees Working Theme Demo

A complete, lightweight WordPress theme built as a professional public portfolio demonstration. The installable theme is in [`hamees-working-theme-demo`](./hamees-working-theme-demo/).

## Important Installation Note

Do not upload the entire repository folder into WordPress. Copy or upload only the `hamees-working-theme-demo` folder into `wp-content/themes/`.

## What this demonstrates

- A valid working PHP WordPress theme enhanced with `theme.json` and registered block patterns
- Native theme supports, navigation locations, and enqueued assets
- Admin-editable static homepage content
- Dynamic latest-post cards powered by a focused PHP `WP_Query`
- Pages, single posts, archives, featured images, and custom logos
- Dedicated search-results and polished 404 templates
- Accessible mobile navigation and responsive desktop/tablet/mobile styling
- Escaped output, translation-ready strings, and clean PHP organization
- No plugins, page builders, or frontend frameworks
- A documented block-theme reference and WP Travel Engine classic-template boundary without requiring WPTE for the demo
- Production delivery, integration, and testing considerations

## Fast setup

1. Copy `hamees-working-theme-demo` into your WordPress installation at `wp-content/themes/`.
2. Activate **Hamees Working Theme Demo** under **Appearance > Themes**.
3. Create and publish a page with a title and several content blocks.
4. Under **Settings > Reading**, choose **A static page** and assign that page as the Homepage.
5. Create a menu and assign it to the **Primary Menu** location.
6. Add three posts with featured images to populate the latest-posts section.

Detailed setup and demo-content guidance are in the [theme README](./hamees-working-theme-demo/README.md).

Safe block-theme architecture examples are under [`hamees-working-theme-demo/block-theme-reference`](./hamees-working-theme-demo/block-theme-reference/).

For the best demo experience, populate the site with a homepage, About page, Destinations page, Contact page, and three realistic travel posts so the theme is shown with complete content.

## Reference material

- [Block-theme reference notes](./hamees-working-theme-demo/block-theme-reference/README.md)

## Package for upload

From this repository in PowerShell:

```powershell
Compress-Archive -Path .\hamees-working-theme-demo -DestinationPath .\hamees-working-theme-demo.zip -Force
```

Then upload the zip through **Appearance > Themes > Add New > Upload Theme**.

## Author

Hamees Momin
