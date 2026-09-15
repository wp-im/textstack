# Textstack

Textstack is a text-first personal publishing index for WordPress. It is designed for writers, critics, researchers, diarists, and small independent publications whose work grows into an archive over time. Its interface combines editorial hierarchy with software-like clarity through indexes, paths, metadata, archives, and a focused reading surface.

It distills the useful parts of the INKLR personal-blog experience into a standalone theme: a clear identity line, a strong reading column, a practical sidebar, archive/filter paths, article metadata, a collapsible section index, and a compact footer. The theme has no network-site assumptions and does not require a companion plugin.

Textstack uses standard WordPress posts, pages, categories, menus, widgets, and archives. It does not introduce proprietary blocks, shortcodes, custom post types, external fonts, trackers, or remote assets.

## Design direction

Textstack treats the page as a sheet of paper: one restrained palette, thin rules, a monospaced information layer, and generous space around the title and reading column. There are no external fonts or image services. The CSS is intentionally one small stylesheet so a site owner can understand and adapt the whole visual system.

The optional `Textstack Showcase` page template provides a content-led surface for a product page, theme guide, or publication introduction while retaining the shared utility/index rail. The template contains no site-specific marketing copy; its content remains in the WordPress page.

The content model stays WordPress-native. Posts, pages, categories, tags, menus, widgets, the Customizer, featured images, excerpts, and block-editor content are the source of site content. The theme does not register custom post types, blocks, shortcodes, or application behavior that belongs in a plugin.

## Development

```sh
php -l functions.php
find . -name '*.php' -exec php -l {} \;
node --check assets/js/navigation.js
./scripts/package-release.sh
```

The release script creates `build/textstack-1.0.3.zip` with the theme folder at the ZIP root and excludes project documentation, build output, VCS files, and local data. See `docs/release-checklist.md` for the full review sequence.

## Installation

Upload the generated ZIP through Appearance > Themes > Add New > Upload Theme, or copy the `textstack` folder into `wp-content/themes/`. See [readme.txt](readme.txt) for end-user instructions.

## License

Textstack is GPLv2 or later. See [LICENSE](LICENSE).
