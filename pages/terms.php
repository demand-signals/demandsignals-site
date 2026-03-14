<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'Terms of Service | Demand Signals';
$page_desc     = 'Terms of Service for DemandSignals.co — the rules and terms governing use of our website and services.';
$page_canonical = SITE_URL . '/terms';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';
?>
<main id="main-content">
  <section style="padding-top:120px;padding-bottom:40px;background:var(--dark)">
    <div class="container" style="max-width:760px">
      <h1 style="color:var(--white)">Terms of Service</h1>
      <p style="color:rgba(255,255,255,0.5)">Last updated: March 14, 2026</p>
    </div>
  </section>
  <section class="section">
    <div class="container" style="max-width:760px">
      <div class="prose">

        <h2>Acceptance of Terms</h2>
        <p>By using DemandSignals.co, you agree to these terms. If you don't agree, don't use the site.</p>

        <h2>Our Services</h2>
        <p>Demand Signals provides demand generation services including website development, AI agent deployment, local SEO, content marketing, and related digital marketing services. Specific service terms are governed by individual client agreements.</p>

        <h2>Intellectual Property</h2>
        <p>All content on this site — text, design, code, graphics — is owned by Demand Signals or licensed for our use. You may not reproduce, distribute, or use our content without written permission.</p>
        <p>Work product we create for clients is owned by the client upon full payment, as specified in individual service agreements.</p>

        <h2>Use of This Site</h2>
        <p>You agree not to: use automated tools to scrape or harvest data from this site, attempt to gain unauthorized access to any system, use this site for any unlawful purpose, or impersonate Demand Signals or its representatives.</p>

        <h2>Disclaimer</h2>
        <p>This site is provided "as is." We make no warranties, express or implied, about the accuracy or completeness of information presented. Marketing results vary by business, market, and conditions — we do not guarantee specific outcomes.</p>

        <h2>Limitation of Liability</h2>
        <p>To the maximum extent permitted by law, Demand Signals is not liable for indirect, incidental, or consequential damages arising from use of this site or our services.</p>

        <h2>Governing Law</h2>
        <p>These terms are governed by the laws of the State of California. Disputes shall be resolved in El Dorado County, California.</p>

        <h2>Changes</h2>
        <p>We may update these terms at any time. Continued use of the site constitutes acceptance of the updated terms.</p>

        <h2>Contact</h2>
        <p>DemandSignals@gmail.com | <?= CONTACT_PHONE ?></p>

      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
