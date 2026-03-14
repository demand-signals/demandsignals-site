<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title    = '404 — Page Not Found | Demand Signals';
$page_desc     = 'The page you\'re looking for doesn\'t exist. Here are some helpful links.';
$page_canonical = SITE_URL . '/404';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/nav.php';
?>
<main id="main-content">
  <section style="padding-top:140px;padding-bottom:80px;background:var(--dark);text-align:center;min-height:70vh;display:flex;align-items:center">
    <div class="container" style="max-width:640px">
      <div style="font-size:6rem;font-weight:800;color:var(--teal);line-height:1;margin-bottom:12px">404</div>
      <h1 style="color:var(--white);margin-bottom:12px">Page Not Found</h1>
      <p style="color:rgba(255,255,255,0.6);margin-bottom:36px">This page doesn't exist or has moved. Here are some helpful options.</p>
      <div style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center">
        <a href="/" class="btn btn-primary btn-lg">← Home</a>
        <a href="/services" class="btn btn-secondary btn-lg">Our Services</a>
        <a href="/contact" class="btn btn-secondary btn-lg">Contact Us</a>
      </div>
      <div style="margin-top:48px;padding:24px;background:rgba(104,197,173,0.1);border:1px solid rgba(104,197,173,0.2);border-radius:16px">
        <p style="color:rgba(255,255,255,0.5);font-size:0.85rem;margin:0">Looking for something specific? Try <a href="/tools/demand-audit" style="color:var(--teal)">the free demand audit</a> or <a href="/blog" style="color:var(--teal)">our blog</a>.</p>
      </div>
    </div>
  </section>
</main>
<?php
include __DIR__ . '/includes/footer.php';
?>
<script src="/js/main.js"></script>
