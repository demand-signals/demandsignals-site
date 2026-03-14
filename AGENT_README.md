# DemandSignals.co — Agent Editing Guide

**Server:** Verpex | IP: 185.181.254.205
**DocRoot:** `/home/demandsig/public_html/`
**Tech:** PHP 8.x + Apache + .htaccess routing

---

## Site Structure

```
/                       → index.php (homepage)
/services/xxx           → pages/services/xxx.php
/ai-agents/xxx          → pages/ai-agents/xxx.php
/tools/xxx              → pages/tools/xxx.php
/portfolio              → pages/portfolio.php
/about                  → pages/about.php
/blog                   → pages/blog.php
/contact                → pages/contact.php
/easter-egg             → pages/easter-egg.php
/sitemap.xml            → api/sitemap.php
/robots.txt             → api/robots.php
/llms.txt               → api/llms.php
```

---

## Agent Tasks

### Jasper — Adding blog posts
Edit `pages/blog.php` → find `$posts = [` array → add new entry at top:
```php
[
  'title'   => 'Your Post Title',
  'slug'    => 'url-slug',
  'date'    => '2026-03-14',
  'author'  => 'Jasper (DSIG Content Agent)',
  'excerpt' => 'One paragraph summary...',
  'tags'    => ['Tag1', 'Tag2'],
  'read_time'=> '6 min read',
],
```
Then create `pages/blog/url-slug.php` for the full post.

### Theo — Adding new pages
1. Create `pages/[section]/[slug].php` using the template pattern (copy any existing page)
2. Add to `api/sitemap.php` `$urls` array
3. Add to `api/llms.php` pages list
4. Add nav item to `includes/config.php` if it's a top-level page

### Cyrus — Updating meta/SEO
- Page titles: `$page_title` at top of each PHP file
- Descriptions: `$page_desc` at top of each PHP file
- Structured data: in `includes/head.php`
- llms.txt: in `api/llms.php`

### Gabby — GEO monitoring
- llms.txt is at `api/llms.php` — update facts/services as they change
- Schema is in `includes/head.php` — update serviceType array for new services
- robots.txt at `api/robots.php` — AI crawlers are all allowed

### Lisa — Design updates
- All CSS vars: `css/main.css` top `:root {}` block
- Brand colors: locked — do NOT change `--teal`, `--slate`, `--orange`
- New components: add to `css/main.css` with a `/* ── Component Name ── */` comment

### Morgan — Portfolio updates
Edit `pages/portfolio.php` → `$portfolio_items` array → add new client

---

## Config — The One File That Controls Everything

`includes/config.php` — edit this for:
- Site name, tagline, description
- Contact phone/email
- Navigation items
- Service dropdown items
- Redirect rules (add old URL → new URL pairs here, NOT in .htaccess)
- Asset URLs (logo, video)

---

## Deployment

Files on Verpex at: `/home/demandsig/public_html/`
PHP 8.x, Apache, mod_rewrite enabled.

To update: SFTP or SSH → replace/add files → test at https://demandsignals.co

---

## What NOT to Touch

- `.htaccess` routing rules — only add redirects in config.php
- `includes/head.php` `<head>` structure — don't break GA4 or schema
- `includes/footer.php` game link (`/easter-egg`) — intentional easter egg
- Cookie consent + accessibility toolbar — required for ADA compliance
- Brand colors in `:root {}` — locked by design system
