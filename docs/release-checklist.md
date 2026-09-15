# Release checklist

## Source checks

- [ ] `style.css` has complete theme headers and the version matches `readme.txt`.
- [ ] `index.php`, `comments.php`, and `screenshot.png` are present at the theme root.
- [ ] All Pages use the ordinary page template; page content is entered through WordPress and no demo copy is hardcoded in the theme.
- [ ] All PHP files pass `php -l`.
- [ ] JavaScript passes `node --check`.
- [ ] No credentials, database exports, local paths, VCS metadata, build artifacts, or logs are in the release.
- [ ] No INKLR network assumptions, plugin-specific code, custom post types, custom blocks, or shortcodes are in the theme.

## WordPress surfaces

- [ ] The theme activates without warnings on a clean WordPress install.
- [ ] Home, archive, search, author, single, page, comments, and 404 states render.
- [ ] `wp_head`, `wp_body_open`, `body_class`, `post_class`, `wp_footer`, and `wp_link_pages` are present in their expected templates.
- [ ] Menus, custom logo, featured image, widgets, Customizer colors, editor styles, RTL, and threaded comments work.
- [ ] Keyboard navigation, skip link, labels, focus visibility, mobile menu, zoom/reflow, and reduced motion are checked.

## Package checks

- [ ] ZIP contains one top-level `textstack/` folder.
- [ ] ZIP contains only deployable theme files and GPL license text.
- [ ] ZIP installs through the WordPress theme uploader.
- [ ] SHA-256 is recorded with the release artifact.
- [ ] GitHub repository contains the theme source and release documentation, but no Studio project, plugin, child theme, database, or secrets.

## Demo site checks

- [ ] The `textstack` site is a separate site and uses the standalone theme.
- [ ] Demo content is ordinary posts/pages/categories and can be removed without changing theme code.
- [ ] Public pages are checked on desktop and a 390px-wide mobile viewport.
