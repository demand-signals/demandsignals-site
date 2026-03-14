<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title    = 'Demand Links — Smart Link Manager | Demand Signals';
$page_desc     = 'Trackable, manageable short links for your business. Create branded short links, track clicks, and route traffic intelligently — built for local businesses and agencies.';
$page_canonical = SITE_URL . '/tools/demand-links';
include __DIR__ . '/../../../includes/head.php';
include __DIR__ . '/../../../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:740px;text-align:center">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Tools</span>
      <h1 style="color:var(--white)">Demand Links</h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:16px">Smart, trackable short links for your business. Know where every click comes from — print, social, QR, email, or SMS.</p>
      <div style="background:rgba(104,197,173,0.1);border:1.5px solid rgba(104,197,173,0.3);border-radius:16px;padding:28px;margin-top:40px">
        <div style="font-size:2rem;margin-bottom:12px">🔗</div>
        <h3 style="color:var(--teal);margin-bottom:8px">Coming Soon</h3>
        <p style="color:rgba(255,255,255,0.6);margin-bottom:20px">Demand Links is in development. Join the waitlist and we'll notify you when it's ready.</p>
        <form action="/api/subscribe.php" method="POST" style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center">
          <input type="email" name="email" required placeholder="your@email.com" style="flex:1;min-width:220px;padding:12px 16px;border:1.5px solid rgba(255,255,255,0.2);border-radius:10px;background:rgba(255,255,255,0.05);color:#fff;font-family:var(--font)">
          <input type="hidden" name="source" value="demand-links-waitlist">
          <button type="submit" class="btn btn-primary">Notify Me</button>
        </form>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header"><span class="eyebrow">What's Coming</span><h2>Smart Links Built for Demand Gen</h2></div>
      <div class="service-grid">
        <article class="service-card"><div class="service-card-icon">🔗</div><h3>Branded Short Links</h3><p>Your domain, your brand. dsig.link/your-campaign or yourbusiness.link/promo instead of generic bit.ly URLs.</p></article>
        <article class="service-card"><div class="service-card-icon">📊</div><h3>Click Analytics</h3><p>Real-time tracking — who clicked, when, from where, what device. Attribution across every channel.</p></article>
        <article class="service-card"><div class="service-card-icon">🎯</div><h3>Smart Routing</h3><p>Send mobile users to your app, desktop to your site, and out-of-area to a different page — all from the same link.</p></article>
        <article class="service-card"><div class="service-card-icon">📱</div><h3>QR Integration</h3><p>Every Demand Link auto-generates a QR code. Update the destination without reprinting anything.</p></article>
        <article class="service-card"><div class="service-card-icon">🔄</div><h3>Bulk Management</h3><p>Create and manage hundreds of campaign links without losing track. Organized by campaign, channel, client.</p></article>
        <article class="service-card"><div class="service-card-icon">🔌</div><h3>CRM Integration</h3><p>Click data flows directly into your CRM. Close the loop between your links and your leads.</p></article>
      </div>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Want Early Access?</h2><p>We're building Demand Links for our own clients first. Get on the list.</p><a href="/contact" class="btn btn-primary btn-lg">Get Early Access →</a></div></section>

</main>
<?php include __DIR__ . '/../../../includes/footer.php'; ?>
