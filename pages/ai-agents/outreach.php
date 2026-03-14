<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title    = 'AI-Powered Outreach — Automated Prospecting & Follow-Up | Demand Signals';
$page_desc     = 'AI outreach systems that identify prospects, personalize messaging, send sequences, and log everything to your CRM — without a sales rep doing the legwork.';
$page_canonical = SITE_URL . '/ai-agents/outreach';
include __DIR__ . '/../../../includes/head.php';
include __DIR__ . '/../../../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:820px">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">AI-Powered Outreach</span>
      <h1 style="color:var(--white)">Your Pipeline Fills Itself.<br><span style="color:var(--teal)">Your Team Closes the Deals.</span></h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:20px">Prospecting is the most time-consuming part of sales — and the most automatable. Our AI outreach systems identify ideal prospects, craft personalized messaging, run multi-touch sequences, and keep your CRM clean. Your salespeople just show up to warm conversations.</p>
      <a href="/contact" class="btn btn-primary btn-lg" style="margin-top:32px">Build My Outreach System →</a>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header"><span class="eyebrow">What's Included</span><h2>End-to-End AI Sales Development</h2></div>
      <div class="service-grid">
        <article class="service-card"><div class="service-card-icon">🎯</div><h3>ICP Targeting</h3><p>We define your Ideal Customer Profile and build automated prospect lists from LinkedIn, Google, and industry databases — refreshed weekly.</p></article>
        <article class="service-card"><div class="service-card-icon">✉️</div><h3>Personalized Email Sequences</h3><p>AI-written, personalized cold email campaigns with contextual relevance per prospect — not mail merge blasts. 3-7 touch sequences per segment.</p></article>
        <article class="service-card"><div class="service-card-icon">💬</div><h3>LinkedIn Outreach</h3><p>Automated connection requests, follow-up messages, and content engagement — all done with a human tone that doesn't read like a bot.</p></article>
        <article class="service-card"><div class="service-card-icon">📞</div><h3>AI Voice Follow-Up</h3><p>When a prospect engages but doesn't reply, Amy calls them. A voice touchpoint that most email-only sequences completely miss.</p></article>
        <article class="service-card"><div class="service-card-icon">🔁</div><h3>Sequence Automation</h3><p>Multi-channel sequences that adapt based on prospect behavior — opened but didn't click? Different follow-up than didn't open at all.</p></article>
        <article class="service-card"><div class="service-card-icon">📈</div><h3>CRM Hygiene</h3><p>Every prospect, every touch, every response logged automatically. Your CRM stays accurate without anyone maintaining it manually.</p></article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header"><span class="eyebrow">For Who</span><h2>Built for B2B &amp; Local Service Businesses</h2></div>
      <div style="display:grid;gap:20px;grid-template-columns:repeat(auto-fit,minmax(280px,1fr))">
        <?php foreach ([
          ['B2B Service Businesses','Agencies, consultants, software companies, professional services — anyone selling to other businesses.'],
          ['Local Service Providers','Contractors, HVAC, roofing, legal, medical, dental — businesses where every new client is worth $1K–$50K+.'],
          ['Franchise &amp; Multi-Location','Scale outreach across territories without scaling your sales team headcount.'],
        ] as $card): ?>
        <div style="background:var(--light);border-radius:14px;padding:28px;border-top:4px solid var(--teal)">
          <h3><?= $card[0] ?></h3>
          <p><?= $card[1] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Stop Cold Calling. Start Warm Conversations.</h2><p>Our clients average 15-30 qualified conversations per month from a standing start. Let's build your pipeline.</p><a href="/contact" class="btn btn-primary btn-lg">Build My Pipeline →</a></div></section>

</main>
<?php include __DIR__ . '/../../../includes/footer.php'; ?>
