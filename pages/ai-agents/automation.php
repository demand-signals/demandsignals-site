<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'Workflow Automation — AI-Powered Business Automation | Demand Signals';
$page_desc     = 'Replace manual, repetitive business tasks with intelligent automations. CRM updates, follow-up sequences, reporting, scheduling — all hands-free with AI workflow automation.';
$page_canonical = SITE_URL . '/ai-agents/automation';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:820px">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Workflow Automation</span>
      <h1 style="color:var(--white)">Stop Doing the Same Tasks<br><span style="color:var(--teal)">Twice a Day, Every Day.</span></h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:20px">If you've done it more than three times, it should be automated. We map your repetitive workflows and replace them with intelligent automations — so your team focuses on work that actually requires a human.</p>
      <a href="/contact" class="btn btn-primary btn-lg" style="margin-top:32px">Automate My Workflows →</a>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header">
        <span class="eyebrow">What We Automate</span>
        <h2>Hours of Manual Work. Gone.</h2>
      </div>
      <div class="service-grid">
        <article class="service-card"><div class="service-card-icon">📋</div><h3>CRM Automation</h3><p>Lead capture → CRM entry → task creation → follow-up sequence triggered. Zero manual data entry.</p></article>
        <article class="service-card"><div class="service-card-icon">📧</div><h3>Follow-Up Sequences</h3><p>Multi-touch email and SMS sequences that fire automatically based on lead behavior — opens, clicks, form fills, no-shows.</p></article>
        <article class="service-card"><div class="service-card-icon">📊</div><h3>Reporting Automation</h3><p>Weekly performance reports compiled and sent to stakeholders without anyone pulling data or building slides.</p></article>
        <article class="service-card"><div class="service-card-icon">📅</div><h3>Scheduling &amp; Reminders</h3><p>Appointment confirmations, reminders, reschedule requests, and no-show follow-ups — all automated around your calendar.</p></article>
        <article class="service-card"><div class="service-card-icon">🔄</div><h3>Cross-Platform Sync</h3><p>Keep your CRM, calendar, email, accounting software, and project management tool in sync without copy-pasting between tabs.</p></article>
        <article class="service-card"><div class="service-card-icon">🧾</div><h3>Invoice &amp; Payment Flows</h3><p>Invoice generation, payment reminders, receipt delivery, and overdue escalation — handled automatically from project completion.</p></article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header"><span class="eyebrow">Our Stack</span><h2>Tools We Build With</h2><p>We use the right tool for the job — not a one-size-fits-all platform that barely fits your use case.</p></div>
      <div style="display:grid;gap:20px;grid-template-columns:repeat(auto-fit,minmax(200px,1fr))">
        <?php foreach ([
          ['Make (Integromat)','🔧','Visual automation builder for complex multi-step flows'],
          ['n8n','⚙️','Self-hosted automation for sensitive data workflows'],
          ['Zapier','⚡','Rapid deployment for standard integrations'],
          ['Custom AI Agents','🤖','For decisions that require reasoning, not just routing'],
          ['Base44','🏗️','Full-stack app + automation backend for complex systems'],
          ['Webhooks + APIs','🔗','Direct integrations when platforms don\'t have native connectors'],
        ] as $t): ?>
        <div style="background:var(--light);border-radius:14px;padding:24px 20px;text-align:center">
          <div style="font-size:2rem;margin-bottom:10px"><?= $t[1] ?></div>
          <strong style="color:var(--dark)"><?= $t[0] ?></strong>
          <p style="font-size:0.85rem;margin-top:6px;color:var(--slate)"><?= $t[2] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container" style="max-width:800px">
      <div class="section-header"><span class="eyebrow">FAQ</span><h2>Common Questions</h2></div>
      <?php foreach ([
        ['Do I need to change my existing tools?','Usually not. We work with what you have — HubSpot, Salesforce, Google Workspace, QuickBooks, whatever. We connect them, not replace them.'],
        ['How long does it take to automate a workflow?','Simple automations go live in 1-3 days. Complex multi-system workflows take 1-2 weeks. Full ops layer builds run 4-6 weeks.'],
        ['What if a workflow breaks?','We monitor all automations and respond to failures within 4 hours. Most issues self-resolve before you notice them.'],
        ['Can you automate workflows that need decision-making?','Yes — that\'s where AI agents come in. If a workflow requires judgment, we wire in an LLM reasoning layer that handles nuanced decisions.'],
      ] as $faq): ?>
      <div style="border-bottom:1px solid #edf0f4;padding:24px 0">
        <strong style="color:var(--dark);font-size:1.05rem"><?= $faq[0] ?></strong>
        <p style="margin:10px 0 0;color:var(--slate)"><?= $faq[1] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>What Would You Do With 10 Hours a Week Back?</h2><p>Most clients save 8-15 hours of manual work per week in the first month. Let's find yours.</p><a href="/contact" class="btn btn-primary btn-lg">Start Automating →</a></div></section>

</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
