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
<p class="showcase-actions"><a href="/textstack/archive/">View the archive</a> <a href="https://github.com/wp-im/textstack/releases/download/v1.0.3/textstack-1.0.3.zip">Download Textstack</a> <a href="/textstack/documentation/">Documentation</a></p>

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
<p>Explore the <a href="/textstack/archive/">live archive</a>, read the <a href="/textstack/documentation/">documentation</a>, or download the current <a href="https://github.com/wp-im/textstack/releases/download/v1.0.3/textstack-1.0.3.zip">Textstack release ZIP</a>. Textstack is GPLv2+ and keeps its content model in WordPress.</p>
</section>
```

## Pages

* `About Textstack`: positioning, audiences, suitable and unsuitable site types, and the principle `Not a campaign, but a body of work.`
* `Archive`: the ordinary WordPress posts page; do not duplicate product copy here.
* `Documentation`: installation, native WordPress content model, menu locations, utility rail, colors, editor styles, comments, RTL, and responsive behavior.
* `Install Textstack`: direct GitHub Release ZIP, source repository, version, SHA-256, requirements, GPLv2+, and six installation steps.
* `Design Notes`: the five system words and `Textstack borrows the grammar of software, not the decoration of software.`
* `Changelog`: current release notes and a direct link to the GitHub Release page.

### Page copy

The following copy is the publication source for the non-Showcase pages. Keep the
HTML semantic and uncomplicated so it can be edited in the Classic Editor.

#### About Textstack

```html
<p class="showcase-lead">Textstack is a text-first personal publishing index for writers, critics, researchers, journals, and small independent publications.</p>
<p>It gives ordinary WordPress content a calm structure: entries gather in a stack, the index makes them retrievable, and every path remains visible.</p>
<h2>For a continuing body of work</h2>
<p>Use Textstack for essays, reading notes, field observations, research logs, diaries, and the small records that become meaningful when they stay together. It is made for a site that will still be useful after the first ten posts.</p>
<h2>What it is not</h2>
<p>Textstack is not a campaign landing page, a magazine simulator, a social feed, or a visual portfolio that needs a new layout for every project. It is not built around a proprietary editor or a private content model.</p>
<p><strong>Not a campaign, but a body of work.</strong></p>
<h2>Choose the identity, keep the system</h2>
<p>Change the logo, colors, menus, widgets, and voice. Keep the durable WordPress primitives underneath: Posts, Pages, Categories, Tags, Authors, Archives, Search, Comments, and Feeds.</p>
```

#### Documentation

```html
<p class="showcase-lead">Textstack is a conventional Classic Theme with a small visual system and a clear publishing surface.</p>
<h2>Install</h2>
<p>Upload the release ZIP from <strong>Appearance → Themes → Add New → Upload Theme</strong>, install it, and activate Textstack. For a manual install, extract the <code>textstack</code> folder into <code>wp-content/themes/</code>.</p>
<h2>Set up the site</h2>
<ol><li>Create an empty page named <strong>Archive</strong> and assign it as the Posts page under <strong>Settings → Reading</strong>.</li><li>Use a page with the <strong>Textstack Showcase</strong> template as the static Front page when you want the product-style home.</li><li>Assign the Primary menu to the header and Footer menu to the footer. The optional Category Filter location is for archive filtering only.</li></ol>
<h2>Organize the archive</h2>
<p>Use Categories for durable editorial areas and Tags for the smaller connections between entries. Textstack does not require a custom post type. A post can be short, long, illustrated, or entirely text.</p>
<h2>Utility rail</h2>
<p>The sidebar is an index rail: Search, a short site introduction, Categories, Archives, and a single download prompt. Empty widgets are not part of the design. Every page, including Showcase, keeps this shared rail so the product document remains connected to the archive.</p>
<h2>Editing and accessibility</h2>
<p>Editor styles keep the Classic Editor close to the front-end reading surface. Keyboard navigation, visible focus states, responsive media, semantic landmarks, comments, RTL styles, and reduced-motion preferences are included in the theme’s small interface layer.</p>
<h2>Customization</h2>
<p>Use the Customizer for the logo, identity colors, and standard WordPress settings. Textstack borrows the grammar of software, not the decoration of software: change the identity without rebuilding the system.</p>
```

#### Install Textstack

```html
<p class="showcase-lead">Textstack 1.0.3 is the current release.</p>
<p><a class="button" href="https://github.com/wp-im/textstack/releases/download/v1.0.3/textstack-1.0.3.zip">Download textstack-1.0.3.zip</a></p>
<p>Source and release notes: <a href="https://github.com/wp-im/textstack">github.com/wp-im/textstack</a> · <a href="https://github.com/wp-im/textstack/releases/tag/v1.0.3">Release v1.0.3</a></p>
<h2>Install in six steps</h2>
<ol><li>Download the official ZIP above.</li><li>Open <strong>Appearance → Themes → Add New</strong> in WordPress.</li><li>Choose <strong>Upload Theme</strong>, select the ZIP, and install it.</li><li>Activate Textstack.</li><li>Assign menus and widgets under <strong>Appearance</strong>.</li><li>Set a static Showcase front page or keep the normal posts index under <strong>Settings → Reading</strong>.</li></ol>
<h2>Release details</h2>
<dl><dt>Version</dt><dd>1.0.3</dd><dt>License</dt><dd>GPLv2 or later</dd><dt>WordPress</dt><dd>6.0 or later</dd><dt>PHP</dt><dd>7.4 or later</dd><dt>SHA-256</dt><dd><code>3f79fe6d3a73c91bfe9dca472e50bc4656e88a97b73c45c7e5fc3e8999d98121</code></dd></dl>
<p>The release has been checked locally with PHP syntax checks, JavaScript syntax checks, Theme Check, and ZIP integrity tests. This page does not claim inclusion in the official WordPress.org directory.</p>
```

#### Design Notes

```html
<p class="showcase-lead">Textstack’s design can be read through five words.</p>
<h2>Stack</h2><p>Publishing is additive. Each entry joins the collection without needing to become a campaign.</p>
<h2>Index</h2><p>Categories, dates, authors, search, and tags make a growing collection retrievable.</p>
<h2>Path</h2><p>Breadcrumb-like context, ordinary links, and visible metadata keep the reader oriented.</p>
<h2>Entry</h2><p>An essay, a note, a place, or a research return can share the same durable publishing unit.</p>
<h2>Paper</h2><p>After the structure has done its work, the surface becomes quiet. Reading is the reason for the system.</p>
<h2>Editorial interface</h2>
<p>Textstack borrows the grammar of software, not the decoration of software. Thin rules, monospaced labels, measured spacing, and clear routes provide editorial order without pretending the page is a printed newspaper or a terminal.</p>
```

#### Changelog

```html
<p class="showcase-lead">Textstack 1.0.3 · September 2026</p>
<h2>1.0.3</h2>
<ul><li>Kept the 404 template connected to the shared sidebar and utility/index rail.</li><li>Completed the all-pages sidebar rule across the public templates.</li></ul>
<h2>1.0.2</h2>
<ul><li>Kept the Showcase page connected to the shared sidebar and utility/index rail.</li><li>Preserved the same small, content-driven template surface.</li></ul>
<h2>1.0.1</h2>
<ul><li>Added the reusable Textstack Showcase page template for content-led product and publication introductions.</li><li>Refined the public product positioning and release documentation.</li><li>Improved auxiliary text contrast and relaxed heading tracking for Chinese and Japanese.</li><li>Added matching Showcase and Classic Editor styles without adding a framework or external dependency.</li></ul>
<h2>1.0.0</h2>
<p>Initial standalone Classic Theme release with ordinary WordPress archives, responsive navigation, comments, widgets, RTL support, and a compact editorial reading system.</p>
<p><a href="https://github.com/wp-im/textstack/releases">View all releases on GitHub</a></p>
```

## Entry mix

Use six categories: `Essays`, `Notes`, `Places`, `Reading`, `Research`, and `Daily`.

* Two long entries with H2/H3 headings for the in-entry index.
* Three medium entries showing excerpts and archive navigation.
* Three short notes showing that a featured image is optional.
* Two CJK entries: one Simplified Chinese, one Traditional Chinese or Japanese.
* One entry with a locally owned or appropriately licensed featured image; all others should work without one.

### Entry copy

The final corpus contains ten entries. Existing demonstration entries are retained
as the CJK and introductory material; the six additions below complete the archive.

#### The shape of a recurring walk · Places

```html
<p>A recurring walk is not a route repeated exactly. The route stays almost the same while the attention changes: one week the construction fence is the subject, another week it is the sound of a delivery truck reversing, and then the first shadow reaching across a familiar wall.</p>
<h2>Returning makes a place legible</h2>
<p>The first walk gathers impressions. The fifth begins to separate them. A place becomes less like a photograph and more like a set of relations: the shop that opens late, the tree that catches the afternoon, the corner where people pause before crossing.</p>
<h3>Three useful distances</h3>
<ul><li>Near: the details that change from day to day.</li><li>Middle: the habits of a street and its regular intervals.</li><li>Far: the memory of what the route was before it became familiar.</li></ul>
<p>Keeping the entry does not preserve the walk. It preserves a way of noticing it.</p>
```

#### How categories become a memory system · Notes

```html
<p>A category starts as a filing decision and slowly becomes a second memory. “Places” does not only collect addresses. It gathers the tone of streets, the distance between two stations, and the question of what makes somewhere returnable.</p>
<h2>Names change their work</h2>
<p>At the beginning, categories help a writer decide where a new note belongs. Later, they help a reader ask a better question of old notes. The category becomes an invitation to compare.</p>
<p>This is why a small vocabulary is more useful than a taxonomy that attempts to describe everything. Six durable names can hold more history than thirty temporary labels.</p>
```

#### A reading log is not a list · Reading

```html
<p>A list tells me what I touched. A reading log tells me what stayed.</p>
<p>The useful unit is not the title and the date alone, but the small change in the reader: a sentence that altered the question, a disagreement that became productive, or a connection that only appeared weeks later.</p>
<h2>Leave a trace</h2>
<p>Two paragraphs are enough. The record does not need to become a review. It only needs to leave a trace that can be found when the book meets another book in the archive.</p>
```

#### One research question, three returns · Research

```html
<p>Some questions resist the first answer because the first answer is too eager. I returned to one question three times, each time with a different kind of material: a statistic, a conversation, and a long silence in the record.</p>
<h2>First return: the visible measure</h2>
<p>The number was useful because it set a boundary. It did not explain the experience, but it prevented the discussion from becoming entirely atmospheric. A measure can be a beginning even when it is not an explanation.</p>
<h3>What the number leaves out</h3>
<p>Measurements flatten sequence. They tell us how much, not always when, for whom, or after what. The missing relations were the reason to return.</p>
<h2>Second return: the situated account</h2>
<p>A conversation restored sequence. The same event appeared differently when described from inside a day rather than from above a dataset. The account also introduced uncertainty, which was more honest than a neat conclusion.</p>
<h2>Third return: the unresolved remainder</h2>
<p>The silence was not empty. It marked the point where the available material stopped. Keeping that remainder in the archive is part of the research: a later entry can return without pretending the question was already settled.</p>
<p><a href="/textstack/category/research/">More research entries</a> collect the returns rather than only the answers.</p>
```

#### An afternoon without a photograph · Daily

```html
<p>I went out without making an image of the afternoon. The light still changed. The bakery still closed its shutters. A child dragged a stick along the railing until the sound stopped at the corner.</p>
<p>Nothing needed to be kept as proof. The note is enough to make the afternoon available again.</p>
```

#### Notes on staying with a question · Research

```html
<p>A question can be useful before it is answerable. Keep it near the work. Let later entries change its edges.</p>
<ul><li>Write down the question before collecting more material.</li><li>Mark what would count as a change, not only what would count as confirmation.</li><li>Return after enough time has passed for the first explanation to become less comfortable.</li></ul>
<p>The archive is a way to stay with the question without asking every entry to resolve it.</p>
```

The entries should explain the theme by being good entries, not by repeatedly advertising the theme.

## Utility rail

Configure the sidebar in this order: Search, About this site, Explore/Categories, Archives, and Get Textstack. Remove empty Recent Comments and default widget titles. Keep the Showcase page and footer focused; the download prompt belongs once in the page and once in the utility rail, not in every entry.
