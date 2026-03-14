<?php
require_once __DIR__ . '/../includes/config.php';
$page_title    = 'Free Tools for Local Businesses | Demand Signals';
$page_desc     = 'Free demand generation tools from Demand Signals — free demand audit, smart link management, dynamic QR codes, and more. Built for local businesses and agencies.';
$page_canonical = SITE_URL . '/tools';
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:760px;text-align:center">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Free Tools</span>
      <h1 style="color:var(--white)">Tools Built for Demand Gen</h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:16px">We build tools for our own agency first, then make them available to the businesses we work with. Everything here is free or coming soon.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width:900px">
      <div class="service-grid" style="grid-template-columns:repeat(auto-fit,minmax(280px,1fr))">

        <article class="service-card" style="position:relative">
          <div style="position:absolute;top:16px;right:16px;background:var(--teal);color:#fff;padding:3px 10px;border-radius:100px;font-size:0.7rem;font-weight:700">FREE</div>
          <div class="service-card-icon">📊</div>
          <h3>Free Demand Audit</h3>
          <p>Tell us about your business and we'll analyze your online demand presence — GMB, reviews, website, local rankings, and AI visibility. Full report in 24 hours.</p>
          <a href="/tools/demand-audit" class="btn btn-primary" style="margin-top:12px">Get My Free Audit →</a>
        </article>

        <article class="service-card" style="position:relative;opacity:0.8">
          <div style="position:absolute;top:16px;right:16px;background:rgba(255,255,255,0.15);color:rgba(255,255,255,0.5);padding:3px 10px;border-radius:100px;font-size:0.7rem;font-weight:700">COMING SOON</div>
          <div class="service-card-icon">🔗</div>
          <h3>Demand Links</h3>
          <p>Smart branded short links with real-time analytics. Know where every click comes from — print, social, QR, email. Update destinations without reprinting.</p>
          <a href="/tools/demand-links" class="btn btn-secondary" style="margin-top:12px">Join Waitlist →</a>
        </article>

        <article class="service-card" style="position:relative;opacity:0.8">
          <div style="position:absolute;top:16px;right:16px;background:rgba(255,255,255,0.15);color:rgba(255,255,255,0.5);padding:3px 10px;border-radius:100px;font-size:0.7rem;font-weight:700">COMING SOON</div>
          <div class="service-card-icon">📱</div>
          <h3>Dynamic QR Codes</h3>
          <p>Print once, update forever. Dynamic QR codes you can redirect anytime — no new print run needed. Full scan analytics included.</p>
          <a href="/tools/dynamic-qr" class="btn btn-secondary" style="margin-top:12px">Join Waitlist →</a>
        </article>

      </div>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Want Custom Tools for Your Business?</h2><p>We build proprietary tools for clients — integrated with your CRM, your data, your workflow.</p><a href="/contact" class="btn btn-primary btn-lg">Let's Talk →</a></div></section>

</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>