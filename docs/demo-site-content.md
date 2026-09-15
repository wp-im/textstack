# Textstack demo site content

This is the content source for the public `wordpress.im/textstack/` showcase. The copy belongs to the site, not to the deployable theme ZIP. Keep the site English-first for the global WordPress audience and use the multilingual entries to demonstrate CJK typography and content portability.

## Site settings

* Site title: `Textstack`
* Tagline: `A text-first personal publishing index.`
* Front page: `A text-first personal publishing index.` using the `Textstack Showcase` template
* Posts page: `Archive`
* Primary language: English
* Sample entry languages: English, Simplified Chinese, Traditional Chinese, and Japanese

## Showcase page

The page title is `A text-first personal publishing index.`. Add the following content in the Code editor so the page remains portable between Classic Editor and block-editor installs:

```html
<p class="showcase-lead">Textstack turns WordPress into a clear, navigable archive for writing that accumulates over time. Built for writers, critics, researchers, journals, and small independent publications.</p>
<p class="showcase-strap">Editorial structure. Software-interface clarity.</p>
<p class="showcase-actions"><a href="/textstack/archive/">View the archive</a> <a href="https://github.com/wp-im/textstack/releases/download/v1.0.1/textstack-1.0.1.zip">Download Textstack</a> <a href="/textstack/documentation/">Documentation</a></p>

<section class="showcase-section">
<p class="eyebrow">01 / ACCUMULATION</p>
<h2>Built for accumulation</h2>
<p>Most themes are designed around a homepage. Textstack is designed around what happens after years of publishing. Entries accumulate into a stack. Categories, archives and search turn that stack into an index. Paths keep every page connected to the whole. Every route eventually leads back to a quiet surface for reading.</p>
</section>

<section class="showcase-section">
<p class="eyebrow">02 / THE SYSTEM</p>
<h2>Stack / Index / Path / Entry / Paper</h2>
<div class="showcase-terms">
<div class="showcase-term"><h3>Stack</h3><p>Publish one entry at a time. Let the collection grow without forcing a complex model.</p></div>
<div class="showcase-term"><h3>Index</h3><p>Categories, archives, search and authors make a growing body of work retrievable.</p></div>
<div class="showcase-term"><h3>Path</h3><p>Visible routes and ordinary links show where each entry belongs.</p></div>
<div class="showcase-term"><h3>Entry</h3><p>Essays, notes, observations and records share one durable publishing unit.</p></div>
<div class="showcase-term"><h3>Paper</h3><p>The system recedes when it is time to read.</p></div>
</div>
</section>

<section class="showcase-section">
<p class="eyebrow">03 / LONG-TERM VALUE</p>
<h2>A site that gets better as it grows</h2>
<div class="showcase-columns"><div><p><strong>Ten entries make a blog.</strong><br><strong>A hundred entries begin to form an archive.</strong><br><strong>A thousand entries need a system.</strong></p></div><div><p>Textstack is designed so that more publishing does not create more clutter. Categories, time, paths, search and archives become more useful as the collection grows.</p></div></div>
</section>

<section class="showcase-section">
<p class="eyebrow">04 / WHO IT IS FOR</p>
<h2>For work that accumulates</h2>
<div class="showcase-columns"><p>Writers and critics. Researchers and reading journals. City observations and field notes. Long-running diaries. Cultural writing. Small independent magazines. Personal knowledge archives.</p><p>Textstack works best when a site is not a campaign, but a continuing body of work.</p></div>
</section>

<section class="showcase-section">
<p class="eyebrow">05 / EDITORIAL INTERFACE</p>
<h2>Editorial, without imitating print</h2>
<p>Textstack does not recreate a newspaper or magazine on screen. Its editorial character comes from hierarchy, metadata, indexing and navigation. Monospaced labels, visible paths, restrained rules and system-like navigation borrow the grammar of software interfaces while keeping the reading surface quiet.</p>
<p class="showcase-proof"><strong>The interface organizes. The paper reads.</strong></p>
</section>

<section class="showcase-section">
<p class="eyebrow">06 / NATIVE CONTENT</p>
<h2>WordPress, left intact</h2>
<p>Textstack works with WordPress as WordPress. Your posts remain posts, categories remain categories, and archives remain real archives. No proprietary content model is required, and your writing does not depend on theme-specific shortcodes to survive.</p>
<p>Customize the identity, not the system.</p>
</section>

<section class="showcase-section">
<p class="eyebrow">07 / QUIET BY DESIGN</p>
<h2>Small by conviction</h2>
<p>No external font dependency. No analytics. No advertising code. No social tracking. Minimal front-end JavaScript. The theme stays small because the publishing model does not require a large interface layer.</p>
</section>

<section class="showcase-section">
<p class="eyebrow">08 / RELEASE</p>
<h2>Read it, use it, keep your archive</h2>
<p>Explore the <a href="/textstack/archive/">live archive</a>, read the <a href="/textstack/documentation/">documentation</a>, or download the current <a href="https://github.com/wp-im/textstack/releases/download/v1.0.1/textstack-1.0.1.zip">Textstack release ZIP</a>. Textstack is GPLv2+ and keeps its content model in WordPress.</p>
</section>
```

## Pages

* `About Textstack`: positioning, audiences, suitable and unsuitable site types, and the principle `Not a campaign, but a body of work.`
* `Archive`: the ordinary WordPress posts page; do not duplicate product copy here.
* `Documentation`: installation, native WordPress content model, menu locations, utility rail, colors, editor styles, comments, RTL, and responsive behavior.
* `Install Textstack`: direct GitHub Release ZIP, source repository, version, SHA-256, requirements, GPLv2+, and six installation steps.
* `Design Notes`: the five system words and `Textstack borrows the grammar of software, not the decoration of software.`
* `Changelog`: current release notes and a direct link to the GitHub Release page.

## Entry mix

Use six categories: `Essays`, `Notes`, `Places`, `Reading`, `Research`, and `Daily`.

* Two long entries with H2/H3 headings for the in-entry index.
* Three medium entries showing excerpts and archive navigation.
* Three short notes showing that a featured image is optional.
* Two CJK entries: one Simplified Chinese, one Traditional Chinese or Japanese.
* One entry with a locally owned or appropriately licensed featured image; all others should work without one.

The entries should explain the theme by being good entries, not by repeatedly advertising the theme.

## Utility rail

Configure the sidebar in this order: Search, About this site, Explore/Categories, Archives, and Get Textstack. Remove empty Recent Comments and default widget titles. Keep the Showcase page and footer focused; the download prompt belongs once in the page and once in the utility rail, not in every entry.
