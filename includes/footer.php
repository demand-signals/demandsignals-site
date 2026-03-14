<?php
// footer.php — shared footer + contact bot + cookie consent + easter egg link
?>
<footer class="site-footer" role="contentinfo">
  <div class="footer-inner">
    <div class="footer-brand">
      <a href="/" aria-label="Demand Signals Home">
        <img src="<?= ASSET_LOGO ?>" alt="Demand Signals" height="56">
      </a>
      <p class="footer-tagline"><?= SITE_TAGLINE ?></p>
      <p class="footer-sub">AI-first demand generation. Northern California &amp; beyond.</p>
    </div>

    <div class="footer-links">
      <div class="footer-col">
        <h3>Services</h3>
        <ul>
          <li><a href="/services/websites">Websites &amp; Web Apps</a></li>
          <li><a href="/services/local-demand">Local Demand Generation</a></li>
          <li><a href="/services/geo-search">GEO &amp; Generative Search</a></li>
          <li><a href="/services/gmb">Google My Business</a></li>
          <li><a href="/services/content">Content Marketing</a></li>
          <li><a href="/services/brand-design">Brand &amp; Design</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>AI &amp; Agents</h3>
        <ul>
          <li><a href="/ai-agents/agent-farms">AI Agent Farms</a></li>
          <li><a href="/ai-agents/voice">AI Voice Systems</a></li>
          <li><a href="/ai-agents/automation">Workflow Automation</a></li>
          <li><a href="/ai-agents/outreach">AI-Powered Outreach</a></li>
          <li><a href="/ai-agents/geo-llm">GEO &amp; LLM Optimization</a></li>
          <li><a href="/ai-agents/infrastructure">Agent Infrastructure</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Company</h3>
        <ul>
          <li><a href="/portfolio">Portfolio</a></li>
          <li><a href="/about">About Us</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/tools/dynamic-qr">Dynamic QR</a></li>
          <li><a href="/tools/demand-links">Demand Links</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Legal</h3>
        <ul>
          <li><a href="/privacy">Privacy Policy</a></li>
          <li><a href="/terms">Terms of Service</a></li>
          <li><a href="/cookies">Cookie Policy</a></li>
          <li><a href="/accessibility">Accessibility</a></li>
        </ul>
        <div class="footer-contact">
          <p><a href="tel:<?= CONTACT_PHONE ?>"><?= CONTACT_PHONE ?></a></p>
          <p><a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved.</p>
    <p class="footer-easter">
      <a href="/easter-egg" aria-label="Easter Egg Game — Just for fun">🐧</a>
    </p>
  </div>
</footer>

<!-- Contact Bot (bottom-right floating) -->
<?php include __DIR__ . '/contact-bot.php'; ?>

<!-- Cookie Consent Stoplight -->
<?php include __DIR__ . '/cookie-consent.php'; ?>

<!-- JS -->
<script src="/js/main.js"></script>
<script src="/js/accessibility.js"></script>
<script src="/js/contact-bot.js"></script>
<script src="/js/cookie-consent.js"></script>
</body>
</html>
