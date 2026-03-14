<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title    = 'Agent Infrastructure — AI Ops Stack Setup | Demand Signals';
$page_desc     = 'We design and deploy the full technical infrastructure behind AI agent systems — secrets management, compute, deployment pipelines, monitoring, and agent communication layers.';
$page_canonical = SITE_URL . '/ai-agents/infrastructure';
include __DIR__ . '/../../../includes/head.php';
include __DIR__ . '/../../../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:820px">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Agent Infrastructure</span>
      <h1 style="color:var(--white)">The Stack Behind<br><span style="color:var(--teal)">Autonomous AI Systems.</span></h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:20px">Building an AI agent is 20% of the work. The other 80% is the infrastructure — compute, secrets management, deployment pipelines, agent communication, monitoring, and failsafes. We've built it. We run it. We deploy it for clients.</p>
      <a href="/contact" class="btn btn-primary btn-lg" style="margin-top:32px">Talk Infrastructure →</a>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header"><span class="eyebrow">The Stack</span><h2>What We Build &amp; Deploy</h2></div>
      <div class="service-grid">
        <article class="service-card"><div class="service-card-icon">🔐</div><h3>Secrets &amp; Credential Management</h3><p>Infisical-based secrets vaults with role-based access. Every agent gets exactly the credentials it needs — no more, no less. Rotates automatically.</p></article>
        <article class="service-card"><div class="service-card-icon">⚡</div><h3>Compute &amp; Sandboxes</h3><p>Blaxel-powered agent sandboxes with persistent file systems, scheduled execution, and webhook triggers. No cold-start latency on critical agents.</p></article>
        <article class="service-card"><div class="service-card-icon">🔗</div><h3>Agent Communication Layer</h3><p>WakeQueue — our proprietary agent-to-agent messaging system. Agents delegate tasks, receive results, and escalate to humans without manual intervention.</p></article>
        <article class="service-card"><div class="service-card-icon">🚀</div><h3>Deployment Pipelines</h3><p>GitHub-backed CI/CD with automated skill deployment. Every agent update pushed from a single repo — tested, versioned, and rolled back if needed.</p></article>
        <article class="service-card"><div class="service-card-icon">📡</div><h3>Monitoring &amp; Watchdogs</h3><p>Automated health checks, dead worker detection, and self-healing restart logic. Kill switches at the network level for emergency stops.</p></article>
        <article class="service-card"><div class="service-card-icon">🤝</div><h3>Human Escalation Paths</h3><p>Telegram-based notification layer. When agents hit edge cases or decisions that need a human, the right person gets pinged — immediately.</p></article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width:800px">
      <div class="section-header"><span class="eyebrow">Who This Is For</span><h2>Built for Technical Teams &amp; Serious Operators</h2></div>
      <p style="text-align:center;font-size:1.05rem;margin-bottom:40px">This service is for organizations that are already building or operating AI agents and need a production-grade infrastructure layer — not a weekend hackathon setup.</p>
      <div style="display:grid;gap:16px">
        <?php foreach ([
          ['Tech companies building internal agent systems','You have the AI — we build the ops layer that makes it reliable in production.'],
          ['Agencies deploying AI for clients','You need a repeatable, scalable infrastructure pattern that works across client environments.'],
          ['Enterprises adopting autonomous AI workflows','You need security, audit logs, role-based access, and failsafes that enterprise compliance requires.'],
        ] as $u): ?>
        <div style="background:var(--light);border-radius:14px;padding:24px;display:flex;gap:16px;align-items:flex-start">
          <span style="color:var(--teal);font-weight:700;font-size:1.2rem;flex-shrink:0">→</span>
          <div><strong style="color:var(--dark)"><?= $u[0] ?></strong><p style="margin:6px 0 0;font-size:0.9rem"><?= $u[1] ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Agent Infrastructure Done Right.</h2><p>Most agent systems fail in production because the infrastructure wasn't built for it. Ours was.</p><a href="/contact" class="btn btn-primary btn-lg">Let's Talk Infrastructure →</a></div></section>

</main>
<?php include __DIR__ . '/../../../includes/footer.php'; ?>
