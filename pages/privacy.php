<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'Privacy Policy | Demand Signals';
$page_desc     = 'Privacy Policy for DemandSignals.co — how we collect, use, and protect your information.';
$page_canonical = SITE_URL . '/privacy';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';
?>
<main id="main-content">
  <section style="padding-top:120px;padding-bottom:40px;background:var(--dark)">
    <div class="container" style="max-width:760px">
      <h1 style="color:var(--white)">Privacy Policy</h1>
      <p style="color:rgba(255,255,255,0.5)">Last updated: March 14, 2026</p>
    </div>
  </section>
  <section class="section">
    <div class="container" style="max-width:760px">
      <div class="prose">

        <h2>Who We Are</h2>
        <p>Demand Signals ("we," "us," "our") is a demand generation agency operating at DemandSignals.co. Our contact address is DemandSignals@gmail.com.</p>

        <h2>Information We Collect</h2>
        <p>We collect information you voluntarily provide — name, email address, phone number, and business information submitted through contact forms, quote requests, and the free demand audit tool.</p>
        <p>We also collect analytics data through Google Analytics 4 (GA4) and PostHog when you visit our site. This includes pages viewed, time on site, device type, and geographic region at the city level. We use anonymized IP addresses.</p>

        <h2>Cookies</h2>
        <p>We use cookies for:</p>
        <ul>
          <li><strong>Essential cookies</strong> — Required for the site to function (session, security)</li>
          <li><strong>Analytics cookies</strong> — GA4 and PostHog for understanding site traffic (only with your consent)</li>
          <li><strong>Preference cookies</strong> — Remembering your accessibility settings and cookie choices</li>
        </ul>
        <p>You can manage your cookie preferences via our cookie consent panel (bottom of the page) or your browser settings.</p>

        <h2>How We Use Your Information</h2>
        <p>We use submitted contact information to respond to inquiries, provide requested services, and send relevant communications about our services. We do not sell your information to third parties.</p>
        <p>Analytics data is used to improve our website and understand how visitors find and use our content.</p>

        <h2>Third-Party Services</h2>
        <p>We use the following third-party services that may process your data:</p>
        <ul>
          <li>Google Analytics 4 — website analytics (<a href="https://policies.google.com/privacy" rel="noopener">Google Privacy Policy</a>)</li>
          <li>PostHog — product analytics</li>
          <li>VAPI — AI voice call handling (when you call our business number)</li>
        </ul>

        <h2>Data Retention</h2>
        <p>Contact form submissions are retained for 24 months. Analytics data is retained per the default settings of each analytics platform (26 months for GA4). You can request deletion at any time.</p>

        <h2>Your Rights</h2>
        <p>You have the right to access, correct, or delete your personal data at any time. To make a request, email us at DemandSignals@gmail.com.</p>
        <p>California residents have additional rights under CCPA, including the right to know what data we collect, the right to delete, and the right to opt out of sale (we do not sell data).</p>

        <h2>Contact</h2>
        <p>Privacy questions: DemandSignals@gmail.com | <?= CONTACT_PHONE ?></p>

      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
