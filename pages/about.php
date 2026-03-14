<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'About Demand Signals — AI-First Demand Generation Agency';
$page_desc     = 'We run 19 AI agents to operate our own agency. Then we build the same systems for clients. Meet the team behind Demand Signals.';
$page_canonical = SITE_URL . '/about';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:820px;text-align:center">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Who We Are</span>
      <h1 style="color:var(--white)">We Are The Proof of Concept.</h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:20px">
        Before we built AI agent farms for clients, we built one for ourselves. 19 autonomous agents run the day-to-day operations of Demand Signals — research, writing, outreach, scheduling, project management, billing. We run leaner and faster than agencies twice our size. That's the system we bring to your business.
      </p>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="grid-2">
        <div>
          <h2>We Started As A Sign Shop.<br>We Evolved Into What's Next.</h2>
          <p>Demand Signals has been through three distinct phases: print &amp; signage, local demand generation, and now AI-first digital systems. Each phase taught us something the next phase needed.</p>
          <p>We're based in Northern California and work with businesses across the US and Australia — contractors, restaurants, law firms, retailers, breweries, and professional service businesses who want to stop blending in.</p>
          <p>Hunter runs the business. Landon runs the technology. The 19 agents run everything else.</p>
        </div>
        <div style="background:var(--dark);border-radius:20px;padding:40px">
          <h3 style="color:var(--teal);margin-bottom:24px">The Numbers</h3>
          <div style="display:grid;gap:20px">
            <?php
            $stats = [
              ['19', 'Active AI Agents', 'Running 24/7 across research, content, outreach, and ops'],
              ['50+', 'Clients Served', 'Across Northern California, US, and Australia'],
              ['3x', 'Average Lead Growth', 'Across active local demand clients in year one'],
              ['2019', 'Founded', 'Started as a sign shop. Evolved into AI-first demand gen'],
            ];
            foreach ($stats as $s): ?>
            <div style="display:flex;gap:16px;align-items:flex-start">
              <div style="font-size:1.8rem;font-weight:800;color:var(--teal);min-width:60px"><?= $s[0] ?></div>
              <div>
                <strong style="color:var(--white)"><?= $s[1] ?></strong>
                <p style="color:rgba(255,255,255,0.55);font-size:0.85rem;margin:0"><?= $s[2] ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header">
        <span class="eyebrow">The Agent Team</span>
        <h2>19 Agents. Always Working.</h2>
        <p>Every agent has a name, a specialty, and a job. They're not chatbots — they're autonomous systems that do real work.</p>
      </div>
      <div style="display:grid;gap:16px;grid-template-columns:repeat(auto-fit,minmax(220px,1fr))">
        <?php
        $agents = [
          ['Tiffany', '🌟', "Landon's EA. Technical ops, agent coordination, infrastructure oversight."],
          ['Sarah',   '💼', "Hunter's EA. Executive directives, client relationships, sales."],
          ['Ethan',   '🔧', 'Project Manager. Orchestrates the full agent network.'],
          ['Cyrus',   '🔍', 'Research & Intelligence. Keyword research, competitive analysis, GEO mapping.'],
          ['Jasper',  '✍️', 'Content. Writes all blog posts, longtail pages, and service copy.'],
          ['Amy',     '📞', 'AI Voice. VAPI-powered inbound/outbound, lead qualification, booking.'],
          ['Morgan',  '🗄️', 'Data Architecture. Entity schemas, database design, CRM flows.'],
          ['Theo',    '🚀', 'Deployment. Pushes new pages, runs Cloudflare Workers, manages infrastructure.'],
          ['Miles',   '✅', 'QA. Every page, every flow, every content piece before it goes live.'],
          ['Kathy',   '💰', 'Finance. Time tracking, billing, daily financial reports.'],
          ['Steve',   '⚙️', 'Operations. Workflow systems, process automation, ops hygiene.'],
          ['Susan',   '📣', 'Social Media. GMB posts, LinkedIn, Instagram — daily cadence.'],
          ['Kelly',   '📧', 'Email Marketing. Sequences, newsletters, nurture campaigns.'],
          ['Kristin', '🎯', 'Sales Support. CRM management, lead scoring, pipeline hygiene.'],
          ['Lisa',    '🎨', 'Design. Page templates, visual identity, component library.'],
          ['Gabby',   '📊', 'AEO/GEO Engineer. AI visibility, citation tracking, answer engine optimization.'],
          ['Lexi',    '🤝', 'Client Success. Onboarding, check-ins, deliverable tracking.'],
          ['Alex',    '🔐', 'Security & Compliance. Agent permissions, secrets management.'],
          ['Braxton', '🏗️', 'Infrastructure. Server config, deployment pipelines, monitoring.'],
        ];
        foreach ($agents as $a): ?>
        <div style="background:var(--light);border-radius:14px;padding:24px 20px;border-left:4px solid var(--teal)">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px">
            <span style="font-size:1.4rem"><?= $a[1] ?></span>
            <strong style="color:var(--dark)"><?= $a[0] ?></strong>
          </div>
          <p style="font-size:0.85rem;margin:0;color:var(--slate)"><?= $a[2] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container">
      <h2>Want a Team Like This Working for You?</h2>
      <p>We can build and deploy a custom agent farm for your business. You own it. It runs 24/7.</p>
      <a href="/ai-agents/agent-farms" class="btn btn-primary btn-lg">Build My Agent Farm →</a>
    </div>
  </section>

</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
