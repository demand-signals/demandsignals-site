<?php
require_once __DIR__ . '/../includes/config.php';
$page_title    = 'AI Agents & Automation — Custom AI Workforce | Demand Signals';
$page_desc     = 'We build custom AI agent networks, voice AI systems, workflow automation, and GEO optimization. We run 19 AI agents ourselves — then deploy the same infrastructure for clients.';
$page_canonical = SITE_URL . '/ai-agents';
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:760px;text-align:center">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">AI & Agents</span>
      <h1 style="color:var(--white)">We Operate 19 AI Agents. We'll Build Yours.</h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:16px">We didn't just buy an AI tool — we built a full AI workforce. 19 specialized agents running 24/7 across research, writing, outreach, voice, finance, and infrastructure. We build the same systems for clients.</p>
      <div style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center;margin-top:32px">
        <a href="/ai-agents/agent-farms" class="btn btn-primary btn-lg">Explore Agent Farms</a>
        <a href="/contact" class="btn btn-secondary btn-lg">Get a Custom Build</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header"><span class="eyebrow">Our AI Stack</span><h2>Six Ways AI Works for Your Business</h2></div>
      <div class="service-grid">
        <?php
        $items = [
          ['/ai-agents/agent-farms',   '🤖', 'AI Agent Farms',          'Multi-agent networks with memory, tools, and specialization. Research, write, outreach, and operate 24/7.'],
          ['/ai-agents/voice',         '📞', 'AI Voice Systems',         'VAPI-powered voice agents that answer calls, qualify leads, and book appointments — 24/7 with a real voice.'],
          ['/ai-agents/automation',    '⚡', 'Workflow Automation',       'Connect your tools, trigger actions, automate follow-ups. No-code where possible, custom code when needed.'],
          ['/ai-agents/outreach',      '🎯', 'AI-Powered Outreach',      'Research-driven prospecting, personalized messaging, and automated follow-up sequences.'],
          ['/ai-agents/geo-llm',       '🔮', 'GEO & LLM Optimization',   'Get cited in ChatGPT, Perplexity, and Google AI answers. The next layer of search visibility.'],
          ['/ai-agents/infrastructure','🔧', 'Agent Infrastructure',     'We design and deploy the backend that makes AI agents reliable — memory, skills, communication, monitoring.'],
        ];
        foreach ($items as [$href, $icon, $title, $desc]):
        ?>
        <article class="service-card" onclick="window.location='<?= $href ?>';" style="cursor:pointer">
          <div class="service-card-icon"><?= $icon ?></div>
          <h3><?= $title ?></h3>
          <p><?= $desc ?></p>
          <a href="<?= $href ?>" class="card-link" style="color:var(--teal);font-size:0.9rem;font-weight:600;text-decoration:none;margin-top:auto;display:inline-block">Learn more →</a>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container" style="max-width:760px">
      <div class="section-header"><span class="eyebrow">Why It's Different</span><h2>We Don't Sell AI Tools. We Build AI Teams.</h2></div>
      <div style="display:grid;gap:20px">
        <?php
        $diffs = [
          ['🧠','Agents With Memory','Our agents remember context across sessions — decisions, preferences, project state. Not stateless chatbots.'],
          ['⚙️','Specialized Roles','Each agent has a defined scope. Research agents don\'t write. Writing agents don\'t do ops. Specialization = quality.'],
          ['🔗','Agent-to-Agent Coordination','Agents collaborate autonomously. Ethan assigns to Cyrus and Jasper in parallel. They report back. Fully autonomous multi-step workflows.'],
          ['📊','Measurable Output','Every agent logs its time and output. We know exactly what was done, what it cost, and what it produced.'],
        ];
        foreach ($diffs as [$icon, $title, $desc]):
        ?>
        <div style="display:flex;gap:20px;align-items:flex-start;padding:24px;background:var(--white);border-radius:16px;box-shadow:0 2px 12px rgba(0,0,0,0.06)">
          <span style="font-size:1.8rem;flex-shrink:0"><?= $icon ?></span>
          <div><h4 style="margin-bottom:6px"><?= $title ?></h4><p style="color:var(--slate);margin:0"><?= $desc ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Ready to Build Your AI Workforce?</h2><p>Start with a conversation. We'll design a system sized for your business and budget.</p><a href="/contact" class="btn btn-primary btn-lg">Get a Custom AI Build →</a></div></section>

</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>