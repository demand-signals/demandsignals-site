<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title    = 'Website & Web App Development — Built to Rank & Convert | Demand Signals';
$page_desc     = 'We build fast, database-driven websites and web apps — React, custom PHP, Base44. Not templates. Real applications engineered for search, GEO, and lead generation.';
$page_canonical = SITE_URL . '/services/websites';
include __DIR__ . '/../../../includes/head.php';
include __DIR__ . '/../../../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:820px">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Websites &amp; Web Apps</span>
      <h1 style="color:var(--white)">Your Site Should Be<br><span style="color:var(--teal)">Your Best Salesperson.</span></h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:20px">Most business websites are glorified brochures. We build sites that rank, convert, and operate — database-driven, GEO-optimized, and integrated with your CRM from day one. Not a template in sight.</p>
      <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:32px">
        <a href="/contact" class="btn btn-primary btn-lg">Build My Site →</a>
        <a href="/portfolio" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,0.3);color:#fff">See Portfolio</a>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header"><span class="eyebrow">What We Build</span><h2>Sites That Do Real Work</h2></div>
      <div class="service-grid">
        <article class="service-card"><div class="service-card-icon">🏢</div><h3>Business Websites</h3><p>Multi-page service sites with GEO-first content architecture, schema markup, and lead capture wired directly to your CRM. Built to rank in Google and get cited by AI.</p></article>
        <article class="service-card"><div class="service-card-icon">⚡</div><h3>Web Applications</h3><p>Custom database-driven apps — portals, calculators, booking systems, configurators, dashboards. Built on React or PHP with real backend logic.</p></article>
        <article class="service-card"><div class="service-card-icon">📍</div><h3>Longtail &amp; Geo Pages</h3><p>City and service-specific landing pages at scale — each unique, schema-marked, and indexed. The engine behind local search dominance.</p></article>
        <article class="service-card"><div class="service-card-icon">🔄</div><h3>Site Migrations</h3><p>Moving from an old platform? We migrate your content, preserve your SEO equity with proper redirects, and launch you on a faster, cleaner stack.</p></article>
        <article class="service-card"><div class="service-card-icon">🎨</div><h3>Design Systems</h3><p>Locked brand systems — color, type, component libraries — so every page you add looks like it was designed intentionally, not assembled randomly.</p></article>
        <article class="service-card"><div class="service-card-icon">🔧</div><h3>Ongoing Development</h3><p>Fractional web development for businesses that need ongoing site work without a full-time developer on the payroll.</p></article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="grid-2">
        <div>
          <h2>Database-Driven.<br>GEO-First.<br>Agent-Ready.</h2>
          <p>Every site we build is structured for the modern discovery landscape — not just Google's crawler, but AI systems too. Content lives in a database, not hardcoded HTML. Agents can update, optimize, and expand your site without a developer touching a file.</p>
          <p>That means your site improves every week on its own — Cyrus researches, Jasper writes, Theo deploys — all while you run your business.</p>
        </div>
        <div style="background:var(--light);border-radius:20px;padding:36px">
          <h3>Our Tech Stack</h3>
          <div style="display:grid;gap:12px;margin-top:16px">
            <?php foreach ([
              ['Frontend','React, PHP, HTML5/CSS3, Tailwind'],
              ['Backend','Base44, custom PHP APIs, Node.js'],
              ['Database','Base44 entities, MySQL, PostgreSQL'],
              ['Hosting','Verpex (managed), Cloudflare CDN'],
              ['Search','Full schema.org, llms.txt, sitemaps'],
              ['Analytics','GA4, PostHog, GSC'],
            ] as $row): ?>
            <div style="display:flex;gap:12px;padding:10px 0;border-bottom:1px solid #edf0f4">
              <strong style="color:var(--slate);min-width:90px;font-size:0.85rem"><?= $row[0] ?></strong>
              <span style="font-size:0.9rem"><?= $row[1] ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header"><span class="eyebrow">Pricing</span><h2>What to Expect</h2></div>
      <div style="display:grid;gap:24px;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));max-width:900px;margin:0 auto">
        <?php foreach ([
          ['Starter Site','$3,500','5-page business site. CMS. Lead forms wired to CRM. Basic schema. Mobile-first. 2-week delivery.'],
          ['Growth Site','$7,500','10-15 pages. Longtail page system. Full schema. GA4 + GSC. Agent-ready content DB. 4-week delivery.'],
          ['Web Application','From $12,000','Custom scope. Database-driven app with user accounts, admin panel, and API integrations. Timeline varies.'],
        ] as $p): ?>
        <div style="background:var(--white);border-radius:16px;padding:32px;border:1.5px solid #edf0f4;text-align:center">
          <h3 style="margin-bottom:8px"><?= $p[0] ?></h3>
          <div style="font-size:2rem;font-weight:800;color:var(--teal);margin:12px 0"><?= $p[1] ?></div>
          <p style="font-size:0.9rem;color:var(--slate)"><?= $p[2] ?></p>
          <a href="/contact" class="btn btn-outline" style="margin-top:20px;width:100%">Get Started</a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Your Competitors' Sites Are Average. Be the Exception.</h2><p>Let's build something that actually gets found and actually converts.</p><a href="/contact" class="btn btn-primary btn-lg">Start My Build →</a></div></section>

</main>
<?php include __DIR__ . '/../../../includes/footer.php'; ?>
