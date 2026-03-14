<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'Contact Demand Signals — Start the Conversation';
$page_desc     = 'Ready to stand out? Get in touch with the Demand Signals team. We respond fast.';
$page_canonical = SITE_URL . '/contact';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';
?>
<main id="main-content">
  <section class="section" style="padding-top:140px">
    <div class="container" style="max-width:760px">
      <div class="section-header">
        <span class="eyebrow">Let's Talk</span>
        <h1>Start the Conversation</h1>
        <p>Tell us what you're working on. We'll tell you exactly what we'd do with it — no fluff, no sales pitch.</p>
      </div>
      <form id="contact-page-form" action="/api/contact.php" method="POST" novalidate style="background:var(--light);padding:40px;border-radius:20px">
        <div style="display:grid;gap:20px;grid-template-columns:1fr 1fr">
          <div class="form-group">
            <label for="cp-name">Your Name *</label>
            <input type="text" id="cp-name" name="name" required autocomplete="name">
          </div>
          <div class="form-group">
            <label for="cp-business">Business Name</label>
            <input type="text" id="cp-business" name="business" autocomplete="organization">
          </div>
        </div>
        <div style="display:grid;gap:20px;grid-template-columns:1fr 1fr">
          <div class="form-group">
            <label for="cp-email">Email *</label>
            <input type="email" id="cp-email" name="email" required autocomplete="email">
          </div>
          <div class="form-group">
            <label for="cp-phone">Phone</label>
            <input type="tel" id="cp-phone" name="phone" autocomplete="tel">
          </div>
        </div>
        <div class="form-group">
          <label for="cp-service">What are you interested in?</label>
          <select id="cp-service" name="service">
            <option value="">Select one...</option>
            <option>Website / Web App</option>
            <option>AI Agent Farm</option>
            <option>AI Voice System</option>
            <option>Workflow Automation</option>
            <option>Local Demand Generation</option>
            <option>GEO / LLM Optimization</option>
            <option>Full Service — All of the Above</option>
            <option>Not sure yet</option>
          </select>
        </div>
        <div class="form-group">
          <label for="cp-message">Tell us about your situation *</label>
          <textarea id="cp-message" name="message" rows="5" required placeholder="What's the biggest thing holding your business back from getting more customers?"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-full">Send It →</button>
        <p style="text-align:center;margin-top:12px;font-size:0.85rem;color:var(--slate)">We respond within 1 business hour during Pacific business hours.</p>
      </form>
      <div style="display:grid;gap:24px;grid-template-columns:repeat(3,1fr);margin-top:40px;text-align:center">
        <div><div style="font-size:1.8rem;margin-bottom:8px">📞</div><strong>Call Us</strong><p style="font-size:0.9rem"><a href="tel:<?= CONTACT_PHONE ?>"><?= CONTACT_PHONE ?></a></p></div>
        <div><div style="font-size:1.8rem;margin-bottom:8px">✉️</div><strong>Email</strong><p style="font-size:0.9rem"><a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a></p></div>
        <div><div style="font-size:1.8rem;margin-bottom:8px">📍</div><strong>Based In</strong><p style="font-size:0.9rem">Northern California<br>Serving US &amp; AU</p></div>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
