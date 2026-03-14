<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'Dynamic QR Codes — Update Without Reprinting | Demand Signals';
$page_desc     = 'Dynamic QR codes that can be updated after printing. Change the destination URL anytime — no new print run needed. Track scans with analytics.';
$page_canonical = SITE_URL . '/tools/dynamic-qr';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:740px;text-align:center">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Tools</span>
      <h1 style="color:var(--white)">Dynamic QR Codes</h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:16px">Print once. Update forever. Dynamic QR codes let you change where a code points after it's already on your signage, menus, business cards, and mailers.</p>
      <div style="background:rgba(104,197,173,0.1);border:1.5px solid rgba(104,197,173,0.3);border-radius:16px;padding:28px;margin-top:40px">
        <div style="font-size:2rem;margin-bottom:12px">📱</div>
        <h3 style="color:var(--teal);margin-bottom:8px">Coming Soon</h3>
        <p style="color:rgba(255,255,255,0.6);margin-bottom:20px">Dynamic QR is launching alongside Demand Links. Join the list.</p>
        <form action="/api/subscribe.php" method="POST" style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center">
          <input type="email" name="email" required placeholder="your@email.com" style="flex:1;min-width:220px;padding:12px 16px;border:1.5px solid rgba(255,255,255,0.2);border-radius:10px;background:rgba(255,255,255,0.05);color:#fff;font-family:var(--font)">
          <input type="hidden" name="source" value="dynamic-qr-waitlist">
          <button type="submit" class="btn btn-primary">Notify Me</button>
        </form>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header"><span class="eyebrow">Why Dynamic</span><h2>Static QR Codes Are a Trap</h2></div>
      <div class="grid-2" style="align-items:start">
        <div>
          <h3 style="color:var(--slate);text-decoration:line-through;opacity:0.5">Static QR (The old way)</h3>
          <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;margin-top:12px">
            <?php foreach (['URL is baked in — can never change','Destination changes → reprint everything','No scan analytics','Dead if you move your site'] as $i): ?>
            <li style="display:flex;gap:10px"><span style="color:#ff4444">✗</span><span style="color:var(--slate)"><?= $i ?></span></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div>
          <h3 style="color:var(--teal)">Dynamic QR (The right way)</h3>
          <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;margin-top:12px">
            <?php foreach (['Update destination from a dashboard — same QR code','Never reprint — change menus, promotions, landing pages','Full scan analytics — time, device, location','Redirect to seasonal pages, events, or campaigns'] as $i): ?>
            <li style="display:flex;gap:10px"><span style="color:var(--teal);font-weight:700">✓</span><span><?= $i ?></span></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Stop Reprinting. Start Redirecting.</h2><p>Every printed material you have can become dynamic. Let's talk.</p><a href="/contact" class="btn btn-primary btn-lg">Get Dynamic QR →</a></div></section>

</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
