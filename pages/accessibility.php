<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'Accessibility Statement | Demand Signals';
$page_desc     = 'Demand Signals is committed to making our website accessible to everyone. Learn about our accessibility features and how to request assistance.';
$page_canonical = SITE_URL . '/accessibility';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';
?>
<main id="main-content">
  <section style="padding-top:120px;padding-bottom:40px;background:var(--dark)">
    <div class="container" style="max-width:760px">
      <h1 style="color:var(--white)">Accessibility Statement</h1>
      <p style="color:rgba(255,255,255,0.5)">Last updated: March 14, 2026</p>
    </div>
  </section>
  <section class="section">
    <div class="container" style="max-width:760px">
      <div class="prose">

        <h2>Our Commitment</h2>
        <p>Demand Signals is committed to making our website accessible to all users, including those with disabilities. We strive to meet WCAG 2.1 Level AA standards.</p>

        <h2>Accessibility Features</h2>
        <p>This site includes the following built-in accessibility tools (accessible via the toolbar on the left side of the screen):</p>
        <ul>
          <li>Font size adjustment (smaller, normal, larger, largest)</li>
          <li>High contrast mode</li>
          <li>Inverted colors mode</li>
          <li>OpenDyslexic font option for users with dyslexia</li>
          <li>Colorblind simulation filters (protanopia, deuteranopia, tritanopia)</li>
          <li>Large cursor option</li>
          <li>Enhanced keyboard focus indicators</li>
          <li>Reduced motion option (respects system prefers-reduced-motion)</li>
          <li>All settings persist across sessions via localStorage</li>
        </ul>

        <h2>General Accessibility Practices</h2>
        <ul>
          <li>All images include descriptive alt text</li>
          <li>Heading hierarchy is maintained throughout (H1 → H2 → H3)</li>
          <li>All interactive elements are keyboard navigable</li>
          <li>Skip-to-content link is available at the top of every page</li>
          <li>Color contrast ratios meet WCAG AA minimums</li>
          <li>Forms include proper labels and error messaging</li>
          <li>The site is responsive and functional on all screen sizes</li>
        </ul>

        <h2>Known Limitations</h2>
        <p>The embedded video on our homepage does not include captions. We are working to add closed captions to all video content. The accessibility toolbar is hidden on mobile screens — mobile users can access all content without it.</p>

        <h2>Request Assistance</h2>
        <p>If you encounter an accessibility barrier or need content in an alternative format, please contact us:</p>
        <ul>
          <li>Email: DemandSignals@gmail.com</li>
          <li>Phone: <?= CONTACT_PHONE ?></li>
        </ul>
        <p>We aim to respond to accessibility requests within 2 business days.</p>

        <h2>Feedback</h2>
        <p>We welcome feedback on the accessibility of our site. Your input helps us improve for everyone.</p>

      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
