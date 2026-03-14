<?php
require_once __DIR__ . '/../includes/config.php';
$page_title    = 'Services — AI-First Demand Generation | Demand Signals';
$page_desc     = 'From AI-powered websites to local demand gen, content marketing, GMB optimization, and brand identity. Everything your business needs to dominate search and generate real demand.';
$page_canonical = SITE_URL . '/services';
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:760px;text-align:center">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">What We Do</span>
      <h1 style="color:var(--white)">Services Built Around One Goal: More Demand</h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:16px">We don't offer SEO packages and website templates. We build integrated demand generation systems — every service is engineered to make you the signal in your market.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="service-grid">
        <?php
        $services = [
          ['/services/websites',    '🏢', 'Websites & Web Apps',     'Fast, database-driven sites built for search and lead gen. React, PHP, Base44. No templates — real applications.'],
          ['/services/local-demand','📍', 'Local Demand Generation', 'Full-stack local domination: GMB, reviews, citations, longtail SEO, and AI visibility — all tied to measurable revenue.'],
          ['/ai-agents/geo-llm',    '🔮', 'GEO & Generative Search', 'Optimize your business to appear in ChatGPT, Perplexity, and Google AI answers — not just blue links.'],
          ['/services/content',     '✍️', 'Content Marketing',       'GEO-first content built to rank in search and get cited by AI. Blogs, landing pages, service pages, FAQs.'],
          ['/services/gmb',         '⭐', 'Google My Business',      'Turn your GMB profile into a lead generation machine. Posts, photos, Q&A, review strategy, and performance tracking.'],
          ['/services/brand-design','🎨', 'Brand Identity & Design', 'Logo, brand system, collateral — built to work across digital, print, and AI contexts.'],
        ];
        foreach ($services as [$href, $icon, $title, $desc]):
        ?>
        <article class="service-card" style="cursor:pointer" onclick="window.location='<?= $href ?>'">
          <div class="service-card-icon"><?= $icon ?></div>
          <h3><?= $title ?></h3>
          <p><?= $desc ?></p>
          <a href="<?= $href ?>" class="card-link" style="color:var(--teal);font-size:0.9rem;font-weight:600;text-decoration:none;margin-top:auto;display:inline-block">Learn more →</a>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container" style="max-width:760px;text-align:center">
      <h2>Not Sure Where to Start?</h2>
      <p style="color:var(--slate);margin-bottom:28px">Get a free demand audit — we'll analyze your current online presence and show you exactly where the gaps are and what would move the needle fastest.</p>
      <a href="/tools/demand-audit" class="btn btn-primary btn-lg">Get Free Demand Audit →</a>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Ready to Build?</h2><p>Tell us about your business and we'll put together a strategy.</p><a href="/contact" class="btn btn-primary btn-lg">Start a Conversation →</a></div></section>

</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>