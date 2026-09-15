# Textstack design system

Status: frozen baseline for the v1.0 visual language.

This document is the design source of truth for Textstack. It describes the
theme's reusable visual system, not the copy or layout of one particular demo
page. Site owners supply page and post content through WordPress; the theme
provides the archive frame, reading surface, and navigation grammar.

## 1. Product category

Textstack is a text-first personal publishing index. It is for writing that
accumulates: essays, notes, reading records, field observations, research logs,
diaries, and small independent publications.

The theme should feel like a carefully maintained personal archive, not like a
campaign landing page, magazine replica, social feed, or visual portfolio.

## 2. Visual thesis

The system has two simultaneous properties:

- Dense system chrome: paths, labels, metadata, rules, filters, and indexes are
  small and close together.
- Breathable reading paper: body text, headings, and long-form content retain
  comfortable line height and a clear reading width.

The early-computer/archive character comes from visible information structure,
not from terminal decoration. The interface borrows software's grammar of
paths, status labels, and retrieval without imitating a screen or a machine.

## 3. Geometry

These values are the v1.0 baseline and should not drift without a documented
design decision:

| Token | Value | Meaning |
| --- | ---: | --- |
| `--shell` | `1180px` | Complete site frame |
| `--reading` | `760px` | Comfortable prose and index width |
| `--sidebar` | `290px` | Utility/index rail |
| layout gap | `1rem` | Main panel to sidebar |
| desktop shell inset | `1rem` | Space around the framed site |
| panel rule | `1px` | Quiet document boundary |
| card image | `8.5rem` | Optional supporting image |

The default desktop composition is one primary paper panel and one utility rail.
Every public template keeps that relationship. On small screens the rail moves
below the primary panel; it is not removed.

## 4. Type system

Textstack uses two type registers:

- System sans for titles, prose, and ordinary WordPress content.
- System monospace for metadata, paths, labels, menus, dates, tags, and status.

Baseline scale:

| Role | Value |
| --- | --- |
| body | `16px / 1.75` |
| mobile body | `15px / 1.75` |
| metadata and labels | `0.68rem–0.86rem` monospace |
| page/archive title | `clamp(2.1rem, 6vw, 4.6rem)` |
| single title | `clamp(2.15rem, 6vw, 4.4rem)` |
| post-card title | `clamp(1.25rem, 2.2vw, 1.75rem)` |
| prose H2 / H3 / H4 | `1.65rem / 1.3rem / 1.05rem` |

Large titles are landmarks in the archive. Small type belongs to the system
layer. Do not reduce the whole theme to small text.

Negative heading tracking is part of the Latin visual rhythm. For Chinese and
Japanese, use the gentler `-.025em` adjustment so dense glyphs do not collide.

## 5. Color and surface

The palette is intentionally flat:

| Role | v1.0 value |
| --- | --- |
| ink | `#111111` |
| page background | `#f2f2ef` |
| paper | `#fffefa` |
| rule | `#d2d2cc` |
| strong rule | `#a7a7a0` |
| muted text | `#6b6b64` |
| soft auxiliary text | `#74746d` |

Use borders, placement, and type hierarchy to create separation. Do not add
gradients, drop shadows, decorative cards, large radii, or remote visual
assets. A tiny radius on a text tag is an exception for legibility, not a card
language.

## 6. Navigation grammar

Navigation is a primary design element. The normal route is:

```text
topbar → path → archive/filter or entry metadata → content → sidebar rail → footer navigation
```

Reusable primitives are:

- topbar and primary menu;
- optional secondary menu, only when it adds a distinct route;
- breadcrumb/path line;
- archive filter and entry count line;
- article section index;
- previous/next entry navigation;
- sidebar search, categories, archives, and site utility;
- footer menu and feed route.

Menus must remain ordinary WordPress menus. Categories, tags, dates, authors,
search, and feeds must remain ordinary WordPress routes.

## 7. Content anatomy

The theme supplies a stable anatomy for content entered in WordPress:

- Page: eyebrow, title, editor content, page links, optional comments;
- Post: category, date, reading time, title, excerpt, article index, editor
  content, tags, and adjacent entries;
- Archive: archive heading, optional description, filter/index line, entry list;
- Search: query heading, search form, result count, entry list;
- 404: a short recovery message, search form, and return route.

No page-specific HTML classes are required for the reading surface. Headings,
paragraphs, lists, quotes, tables, figures, links, and WordPress blocks should
be sufficient.

## 8. Image policy

Text remains complete without an image. Featured images are optional and should
support an entry rather than determine the site's identity. A post card may
show a square supporting image; the reading surface must not require one.

## 9. Responsive behavior

At `720px` and below:

- the shell narrows to a half-rem outer inset;
- body text becomes `15px` while retaining `1.75` line height;
- the two-column layout becomes a vertical document flow;
- the sidebar follows the main content;
- the primary menu becomes a labeled, keyboard-operable menu button;
- post cards become one-column blocks;
- wide media returns to the content width;
- reduced-motion preferences disable smooth scrolling.

At every width, text must reflow without horizontal scrolling and the path,
menu, search, headings, and article index must remain usable.

## 10. Implementation boundary

The theme owns only the reusable presentation system and WordPress template
hierarchy. It must not own:

- demo posts or page copy;
- site-specific product sections;
- custom post types;
- proprietary blocks or shortcodes;
- plugin data or network content;
- remote fonts, tracking, advertising, or analytics.

All Pages are rendered by the ordinary page template and receive their content
from the editor. The demo site's product explanation is content, not a theme
template.

## 11. Visual acceptance

Before a release, inspect the ordinary front page, archive, single entry, page,
search, author archive, date archive, comments, and 404 at 390px and desktop
widths. The result should retain the same shell, paper, type registers, path
continuity, and compact system layer. A new page must not require a new CSS
namespace to look correct.
