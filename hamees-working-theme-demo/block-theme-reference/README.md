# Block Theme Reference

This folder is an architectural reference for a possible block-theme structure. It is not loaded by the working theme and is not presented as production code.

The active theme remains the classic PHP implementation in the theme root. Its root `theme.json` and `/patterns` directory add Gutenberg tokens, global styles, and editor-ready patterns without changing PHP template resolution.

This reference shows how the same presentation system could be organised in a native block theme:

- `/templates` contains block-based page shapes.
- `/parts` contains reusable global header and footer areas.
- Theme patterns are referenced from the active theme's `/patterns` directory.
- A production implementation would map approved design-system components and verify WP Travel Engine boundaries during M0 before adding any plugin-specific PHP overrides.

The reference intentionally contains no WPTE booking, enquiry, pricing, or template override code. Those contracts must be verified against the authorised plugin version and current project repository.
