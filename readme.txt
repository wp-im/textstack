=== Textstack ===
Contributors: wp-im
Tags: blog, one-column, two-columns, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready, rtl-language-support
Requires at least: 6.0
Requires PHP: 7.4
Tested up to: 7.1
Stable tag: 1.0.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Textstack is a text-first personal publishing index for writers, critics, researchers, journals, and small independent publications. It is designed around a strong reading column, a useful utility rail, visible paths, restrained color, and content that remains editable in WordPress itself.

== Features ==

* Classic PHP templates with a normal WordPress template hierarchy.
* Responsive personal blog home, archive, search, author, article, page, comments, and 404 states.
* Four menu locations: Primary, Secondary, Footer, and Category Filter.
* Sidebar, three footer columns, and a full-width footer widget area.
* Custom logo, featured images, responsive embeds, wide alignment, HTML5 markup, and threaded comments.
* A small Customizer color palette with no external fonts, trackers, or remote assets.
* A keyboard-friendly mobile navigation menu and reduced-motion support.
* Reading time, automatic article heading IDs, and a collapsible article index.
* An optional full-width Showcase page template for content-led product or publication pages.

== Installation ==

1. Download the `textstack.zip` release file.
2. In WordPress, open Appearance > Themes > Add New > Upload Theme.
3. Upload the ZIP file and activate Textstack.
4. Add menus under Appearance > Menus and assign them to the available locations.
5. Add widgets under Appearance > Widgets if you want a custom sidebar or footer.
6. Set your site title and tagline under Settings > General. Add a custom logo under Appearance > Customize.

== Content and customization ==

Textstack does not include hardcoded demo posts, categories, custom post types, shortcodes, or blocks. Add editorial content through normal WordPress posts and pages. The project repository includes optional content ideas in `docs/content-samples.md`; that document is not included in the deployable theme ZIP.

The four color controls in Appearance > Customize > Textstack Colors change the ink, page background, content surface, and rule colors. The theme intentionally keeps the visual system small so that a site identity can be established with content, logo, and a few palette decisions.

== Accessibility ==

The theme includes a skip link, semantic landmarks, visible keyboard focus through browser defaults, labeled navigation and search controls, responsive text sizing, screen-reader text utilities, and reduced-motion handling. Accessibility should still be checked with the active plugins, content, language, and widgets of each installed site.

== Privacy ==

Textstack does not send data to remote services and does not include analytics, advertising, social tracking, external fonts, or remote images. WordPress core and other installed plugins may have their own privacy behavior.

== License ==

Textstack is distributed under the GNU General Public License, version 2 or later. See `LICENSE` in the source package.

== Changelog ==

= 1.0.3 =

* Kept the 404 template connected to the shared sidebar and utility/index rail.

= 1.0.2 =

* Kept the Showcase page connected to the shared sidebar and utility/index rail.

= 1.0.1 =
* Added the reusable full-width Showcase page template.
* Refined public product language, brand naming, CJK heading spacing, editor styles, and supporting contrast.

= 1.0.0 =
* Initial standalone release for personal blogs and small publications.
* Added classic templates, responsive layout, navigation, widgets, comments, Customizer colors, editor styles, and release documentation.
