# Theme design notes

The detailed, frozen v1.0 specification now lives in
[`design.md`](design.md). This file records the source boundary and should be
read together with that document.

## What came from the reference

The reference is the personal-blog surface of INKLR, not its network homepage. The transferable pattern is an author-led title area, compact metadata, category/filter paths, a reading-first post loop, a useful sidebar, and a predictable single-post page. Network aggregation, site directories, and plugin-owned content are intentionally excluded.

## Visual system

* Background: warm gray `#f2f2ef`.
* Content surface: warm paper `#fffefa`.
* Ink: near-black `#111111`.
* Rule: quiet gray `#d2d2cc`.
* Layout: 1180px shell, 760px reading column, 290px shared sidebar.
* Type: system sans for prose and a system monospace for metadata/navigation.
* Motion: only the native disclosure/menu state; reduced motion is respected.

## Diversity without code forks

Textstack supports a wide range of personal writing through ordinary WordPress inputs: site title/tagline, menus, categories, tags, widgets, Customizer colors, featured images, excerpts, and block-editor content. The demo copy in `content-samples.md` demonstrates different voices, but the theme has no built-in editorial identity that would constrain the user.

All Pages use the ordinary page template and keep the shared utility/index rail
visible. Product explanations, documentation, design notes, and release copy
belong in the WordPress editor as normal page content; the theme does not add a
special presentation template for them.

## Intentionally out of scope

No custom post type, custom block, shortcode, network API, remote font, tracker, analytics integration, theme upsell, or hardcoded client content is included. Those are either plugin concerns, site content, or deployment concerns.
