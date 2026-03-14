<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title    = 'Free Demand Audit — See Where You\'re Missing Leads | Demand Signals';
$page_desc     = 'Enter your business info and get an instant demand gap analysis — GMB health, website score, review standing, and where your competitors are outranking you.';
$page_canonical = SITE_URL . '/tools/demand-audit';
include __DIR__ . '/../../../includes/head.php';
include __DIR__ . '/../../../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:760px;text-align:center">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Free Tool</span>
      <h1 style="color:var(--white)">Free Demand Audit</h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:16px">Tell us about your business and we'll analyze your online demand presence — GMB, reviews, website, local rankings, and where your competitors are eating your lunch.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width:640px">
      <div id="audit-form-wrap" style="background:var(--white);border-radius:20px;padding:48px;box-shadow:var(--shadow-lg)">
        <h2 style="margin-bottom:8px">Get Your Free Audit</h2>
        <p style="color:var(--slate);margin-bottom:32px">Takes 60 seconds. We'll email your full report within 24 hours.</p>
        <form id="audit-form" action="/api/contact.php" method="POST">
          <input type="hidden" name="service" value="Free Demand Audit">
          <div style="display:grid;gap:18px">
            <div>
              <label for="audit-name" style="display:block;font-weight:600;margin-bottom:6px;font-size:0.9rem">Your Name *</label>
              <input type="text" id="audit-name" name="name" required style="width:100%;padding:12px 14px;border:1.5px solid #dde2ea;border-radius:10px;font-family:var(--font);font-size:0.95rem;box-sizing:border-box">
            </div>
            <div>
              <label for="audit-biz" style="display:block;font-weight:600;margin-bottom:6px;font-size:0.9rem">Business Name *</label>
              <input type="text" id="audit-biz" name="business" required style="width:100%;padding:12px 14px;border:1.5px solid #dde2ea;border-radius:10px;font-family:var(--font);font-size:0.95rem;box-sizing:border-box">
            </div>
            <div>
              <label for="audit-email" style="display:block;font-weight:600;margin-bottom:6px;font-size:0.9rem">Email *</label>
              <input type="email" id="audit-email" name="email" required style="width:100%;padding:12px 14px;border:1.5px solid #dde2ea;border-radius:10px;font-family:var(--font);font-size:0.95rem;box-sizing:border-box">
            </div>
            <div>
              <label for="audit-phone" style="display:block;font-weight:600;margin-bottom:6px;font-size:0.9rem">Phone</label>
              <input type="tel" id="audit-phone" name="phone" style="width:100%;padding:12px 14px;border:1.5px solid #dde2ea;border-radius:10px;font-family:var(--font);font-size:0.95rem;box-sizing:border-box">
            </div>
            <div>
              <label for="audit-city" style="display:block;font-weight:600;margin-bottom:6px;font-size:0.9rem">City &amp; State *</label>
              <input type="text" id="audit-city" name="message" required placeholder="e.g. El Dorado Hills, CA" style="width:100%;padding:12px 14px;border:1.5px solid #dde2ea;border-radius:10px;font-family:var(--font);font-size:0.95rem;box-sizing:border-box">
            </div>
            <div>
              <label for="audit-vertical" style="display:block;font-weight:600;margin-bottom:6px;font-size:0.9rem">Business Type</label>
              <select id="audit-vertical" name="vertical" style="width:100%;padding:12px 14px;border:1.5px solid #dde2ea;border-radius:10px;font-family:var(--font);font-size:0.95rem;box-sizing:border-box;background:#fff">
                <option value="">Select your industry…</option>
                <option>Home Services / Contractor</option>
                <option>Legal / Professional Services</option>
                <option>Medical / Dental</option>
                <option>Restaurant / Food &amp; Beverage</option>
                <option>Retail</option>
                <option>Real Estate</option>
                <option>Agency / B2B Services</option>
                <option>Other</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-full" style="margin-top:8px">Get My Free Audit →</button>
          </div>
        </form>
      </div>
      <div id="audit-success" style="display:none;text-align:center;padding:60px;background:var(--white);border-radius:20px;box-shadow:var(--shadow-lg)">
        <div style="font-size:3rem;margin-bottom:16px">✅</div>
        <h2>Audit Request Received</h2>
        <p style="color:var(--slate)">We'll analyze your demand presence and email your full report within 24 hours. Check your inbox at the address you provided.</p>
        <a href="/" class="btn btn-primary" style="margin-top:24px">Back to Home</a>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header"><span class="eyebrow">What We Audit</span><h2>Your Full Demand Presence</h2></div>
      <div class="service-grid">
        <article class="service-card"><div class="service-card-icon">📍</div><h3>GMB Health</h3><p>Profile completeness, posting frequency, category optimization, photo count, and Q&A status.</p></article>
        <article class="service-card"><div class="service-card-icon">⭐</div><h3>Review Standing</h3><p>Star rating, review velocity, response rate, and how you compare to your top 3 local competitors.</p></article>
        <article class="service-card"><div class="service-card-icon">🌐</div><h3>Website Score</h3><p>Page speed, mobile responsiveness, schema markup, content depth, and conversion elements.</p></article>
        <article class="service-card"><div class="service-card-icon">🔑</div><h3>Local Rankings</h3><p>Where you rank for your primary service + city keywords vs. your top competitors.</p></article>
        <article class="service-card"><div class="service-card-icon">🔮</div><h3>AI Visibility</h3><p>Whether ChatGPT, Perplexity, and Google AI recommend you when someone asks about your service in your city.</p></article>
        <article class="service-card"><div class="service-card-icon">📊</div><h3>Demand Gap Score</h3><p>A single score (0-100) that quantifies how much addressable demand you're currently missing.</p></article>
      </div>
    </div>
  </section>

</main>

<script>
document.getElementById('audit-form').addEventListener('submit', function(e) {
  e.preventDefault();
  const form = this;
  const data = new FormData(form);
  fetch('/api/contact.php', { method:'POST', body:data })
    .then(() => {
      document.getElementById('audit-form-wrap').style.display = 'none';
      document.getElementById('audit-success').style.display = 'block';
    })
    .catch(() => form.submit());
});
</script>
<?php include __DIR__ . '/../../../includes/footer.php'; ?>
