<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'Local Demand Generation — Dominate Your Market | Demand Signals';
$page_desc     = 'GMB management, local SEO, review platforms, longtail content, and GEO optimization for local businesses. Dominate search in your market before your competitors know they\'re losing.';
$page_canonical = SITE_URL . '/services/local-demand';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:820px">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Local Demand Generation</span>
      <h1 style="color:var(--white)">Be the First Name<br><span style="color:var(--teal)">In Your Market.</span></h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:20px">When someone in your city searches for your service — on Google, on Yelp, or in ChatGPT — your name should come up first. Not sometimes. Every time. We build the systems that make that happen and keep it that way.</p>
      <a href="/contact" class="btn btn-primary btn-lg" style="margin-top:32px">Dominate My Market →</a>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header"><span class="eyebrow">What's Included</span><h2>The Full Local Demand Stack</h2></div>
      <div class="service-grid">
        <article class="service-card"><div class="service-card-icon">📍</div><h3>Google My Business Management</h3><p>Weekly posts, photo updates, Q&amp;A management, and service optimization. Your GMB profile stays fresh and fully populated — a signal Google rewards.</p></article>
        <article class="service-card"><div class="service-card-icon">⭐</div><h3>Review Generation &amp; Management</h3><p>Automated review request sequences after every job. Responses to every review — good and bad — within 24 hours. We protect and build your reputation.</p></article>
        <article class="service-card"><div class="service-card-icon">🔑</div><h3>Local SEO &amp; Rankings</h3><p>Hyper-local keyword targeting, citation building, NAP consistency, and on-page optimization. Built to rank in your specific city, not just generically.</p></article>
        <article class="service-card"><div class="service-card-icon">📝</div><h3>Longtail Content System</h3><p>City + service page combinations that capture searchers at every stage. "Contractor in El Dorado Hills" → your site. Hundreds of pages, each unique and indexed.</p></article>
        <article class="service-card"><div class="service-card-icon">🔮</div><h3>GEO / AI Search Optimization</h3><p>Structured content that gets your business cited by ChatGPT, Perplexity, and Google AI when locals ask AI systems for recommendations.</p></article>
        <article class="service-card"><div class="service-card-icon">📊</div><h3>Monthly Reporting</h3><p>Rank tracking, GMB insights, review metrics, and traffic data — compiled and delivered every month. No data digging required on your end.</p></article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header"><span class="eyebrow">Who It's For</span><h2>Built for Local Service Businesses</h2></div>
      <div style="display:grid;gap:16px;grid-template-columns:repeat(auto-fit,minmax(240px,1fr))">
        <?php foreach ([
          ['🏗️','Contractors','General, roofing, HVAC, plumbing, electrical, landscaping'],
          ['⚖️','Professional Services','Law firms, accountants, financial advisors, consultants'],
          ['🦷','Medical &amp; Dental','Practices competing in crowded local search markets'],
          ['🍕','Restaurants &amp; Food','Location-based businesses where GMB is table stakes'],
          ['🔫','Specialty Retail','Any local business where being found locally = revenue'],
          ['🏠','Real Estate','Agents and brokers who need local authority and trust'],
        ] as $v): ?>
        <div style="background:var(--light);border-radius:12px;padding:20px;display:flex;gap:12px;align-items:flex-start">
          <span style="font-size:1.4rem"><?= $v[0] ?></span>
          <div><strong style="color:var(--dark)"><?= $v[1] ?></strong><p style="font-size:0.85rem;margin:4px 0 0"><?= $v[2] ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container" style="max-width:800px">
      <div class="section-header"><span class="eyebrow">Pricing</span><h2>Monthly Retainers</h2></div>
      <div style="display:grid;gap:20px">
        <?php foreach ([
          ['Local Presence','$997/mo','GMB management + review generation + monthly reporting. Foundation-level for businesses new to local demand.'],
          ['Local Dominance','$2,497/mo','Everything in Presence + local SEO + longtail content system (20 pages/mo) + citation building.'],
          ['Local &amp; AI Visibility','$3,997/mo','Everything in Dominance + full GEO/LLM optimization + AI citation tracking + weekly reporting.'],
        ] as $p): ?>
        <div style="background:var(--white);border-radius:14px;padding:28px;border-left:5px solid var(--teal);display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:16px">
          <div style="flex:1"><strong style="color:var(--dark);font-size:1.1rem"><?= $p[0] ?></strong><p style="margin:8px 0 0;font-size:0.9rem;color:var(--slate)"><?= $p[2] ?></p></div>
          <div style="text-align:right"><div style="font-size:1.4rem;font-weight:800;color:var(--teal)"><?= $p[1] ?></div><a href="/contact" class="btn btn-outline" style="margin-top:8px;font-size:0.85rem;padding:8px 18px">Get Started</a></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Your Competitors Are Getting Found. Are You?</h2><p>We'll show you exactly where your demand gaps are — free, no obligation.</p><a href="/contact" class="btn btn-primary btn-lg">Get My Free Demand Audit →</a></div></section>

</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
