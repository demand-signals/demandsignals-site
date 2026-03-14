<?php
require_once __DIR__ . '/includes/config.php';

// Handle redirects
$path = strtok($_SERVER['REQUEST_URI'], '?');
if (isset($REDIRECTS[$path])) {
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: ' . $REDIRECTS[$path]);
  exit;
}

$page_title    = 'Demand Signals — We Make You The Signal, Not The Noise';
$page_desc     = 'AI-first demand generation agency. We build websites, deploy AI agent farms, automate workflows, and dominate generative search. Northern California.';
$page_canonical = SITE_URL . '/';

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/nav.php';
?>

<main id="main-content">

  <!-- ══ HERO ══════════════════════════════════════════════════ -->
  <section class="hero" aria-label="Hero">
    <div class="hero-video-wrap" aria-hidden="true">
      <video class="hero-video"
             autoplay muted loop playsinline
             preload="metadata"
             aria-hidden="true">
        <source src="<?= ASSET_PENGUIN_VIDEO ?>" type="video/mp4">
      </video>
    </div>
    <div class="hero-overlay" aria-hidden="true"></div>
    <div class="hero-content">
      <span class="hero-eyebrow">AI-First Demand Generation</span>
      <h1 class="hero-title">
        We Make You<br>
        <span class="accent">The Signal,</span><br>
        <span class="accent-orange">Not The Noise.</span>
      </h1>
      <p class="hero-tagline">
        Most businesses look the same. Same template sites. Same generic ads. Same forgettable presence.
        We build AI-powered systems that make you impossible to ignore — in Google, in generative AI, everywhere that matters.
      </p>
      <div class="hero-actions">
        <a href="/contact" class="btn btn-primary btn-lg">Get Started Free →</a>
        <a href="/portfolio" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,0.4);color:#fff">See Our Work</a>
      </div>
    </div>
    <div class="hero-scroll" aria-hidden="true">Scroll</div>
  </section>

  <!-- ══ STATS ══════════════════════════════════════════════════ -->
  <section class="stats-bar section-sm" aria-label="Agency stats">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item reveal reveal-delay-1"><div class="stat-num">19</div><div class="stat-label">Active AI Agents</div></div>
        <div class="stat-item reveal reveal-delay-2"><div class="stat-num">50+</div><div class="stat-label">Clients Served</div></div>
        <div class="stat-item reveal reveal-delay-3"><div class="stat-num">3x</div><div class="stat-label">Avg Lead Growth</div></div>
        <div class="stat-item reveal reveal-delay-4"><div class="stat-num">24/7</div><div class="stat-label">Always On Systems</div></div>
      </div>
    </div>
  </section>

  <!-- ══ WHAT WE DO ═════════════════════════════════════════════ -->
  <section class="section bg-light" aria-labelledby="services-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="eyebrow">What We Do</span>
        <h2 id="services-heading">Five Ways We Generate Demand</h2>
        <p>We don't do everything. We do five things exceptionally well — and each one compounds on the others.</p>
      </div>
      <div class="service-grid">

        <article class="service-card reveal reveal-delay-1">
          <div class="service-card-icon">🌐</div>
          <h3>Websites &amp; Web Apps</h3>
          <p>Fast, database-driven sites built to rank, convert, and scale. Not templates — real applications that do the work of a full sales team.</p>
          <a href="/services/websites" class="card-link">Learn more</a>
        </article>

        <article class="service-card reveal reveal-delay-2">
          <div class="service-card-icon">🤖</div>
          <h3>AI Agent Farms</h3>
          <p>Custom-built networks of autonomous AI agents that research, write, outreach, and optimize — 24/7, without payroll. We run 19 ourselves.</p>
          <a href="/ai-agents/agent-farms" class="card-link">Learn more</a>
        </article>

        <article class="service-card reveal reveal-delay-3">
          <div class="service-card-icon">🎙️</div>
          <h3>AI Voice Systems</h3>
          <p>VAPI-powered AI receptionists that answer calls, qualify leads, book appointments, and never miss a prospect — even at 2am.</p>
          <a href="/ai-agents/voice" class="card-link">Learn more</a>
        </article>

        <article class="service-card reveal reveal-delay-4">
          <div class="service-card-icon">📍</div>
          <h3>Local Demand Generation</h3>
          <p>GMB management, longtail SEO, review platforms, and hyper-local content — dominate your market before anyone even knows you're competing.</p>
          <a href="/services/local-demand" class="card-link">Learn more</a>
        </article>

        <article class="service-card reveal reveal-delay-5">
          <div class="service-card-icon">🔮</div>
          <h3>GEO &amp; Generative Search</h3>
          <p>When someone asks ChatGPT, Perplexity, or Gemini who to hire — your name comes up. We make that happen. It's the new SEO, and almost nobody else is doing it yet.</p>
          <a href="/ai-agents/geo-llm" class="card-link">Learn more</a>
        </article>

        <article class="service-card reveal reveal-delay-6">
          <div class="service-card-icon">⚙️</div>
          <h3>Workflow Automation</h3>
          <p>Replace hours of manual work with intelligent automations. CRM updates, follow-up sequences, reporting, scheduling — all hands-free.</p>
          <a href="/ai-agents/automation" class="card-link">Learn more</a>
        </article>

      </div>
    </div>
  </section>

  <!-- ══ GEO CALLOUT ════════════════════════════════════════════ -->
  <section class="section" style="background:var(--dark)" aria-labelledby="geo-heading">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:16px;">The New SEO</span>
          <h2 id="geo-heading" style="color:var(--white)">SEO Is Not Dead.<br><span style="color:var(--teal)">But It's Dying.</span></h2>
          <p style="color:rgba(255,255,255,0.7);font-size:1.05rem;margin:20px 0">
            Traditional Google rankings are becoming secondary to <strong style="color:var(--teal)">Generative Engine Optimization (GEO)</strong> — getting your business cited and surfaced by AI systems. ChatGPT, Perplexity, Gemini, Claude. That's where your next customer is asking their questions.
          </p>
          <p style="color:rgba(255,255,255,0.7)">
            We already operate this way internally. 19 AI agents run our business. We're not guessing at GEO — we're living it. That makes us the most credible people to do it for you.
          </p>
          <a href="/ai-agents/geo-llm" class="btn btn-primary mt-8" style="margin-top:28px">Learn About GEO →</a>
        </div>
        <div style="background:rgba(104,197,173,0.08);border-radius:20px;padding:40px;border:1.5px solid rgba(104,197,173,0.2)">
          <h3 style="color:var(--teal);margin-bottom:24px">Where Your Customers Are Asking Questions</h3>
          <ul style="list-style:none;display:flex;flex-direction:column;gap:16px">
            <?php
            $platforms = [
              ['ChatGPT',   '🤖', '200M+ weekly active users'],
              ['Perplexity','🔍', 'The AI-first search engine'],
              ['Google AI', '✨', 'AI Overviews on every search'],
              ['Gemini',    '💎', 'Embedded in all Google products'],
              ['Claude',    '🧠', 'Enterprise AI adoption surging'],
            ];
            foreach ($platforms as $p): ?>
            <li style="display:flex;align-items:center;gap:14px">
              <span style="font-size:1.4rem"><?= $p[1] ?></span>
              <div>
                <strong style="color:var(--white)"><?= $p[0] ?></strong>
                <span style="color:rgba(255,255,255,0.5);font-size:0.85rem;display:block"><?= $p[2] ?></span>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ══ HOW IT WORKS ════════════════════════════════════════════ -->
  <section class="section bg-light" aria-labelledby="process-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="eyebrow">How It Works</span>
        <h2 id="process-heading">Built Different, From Day One</h2>
        <p>Most agencies hand off work to junior staff and freelancers. We deploy AI systems, then have humans review and refine. The output is better, faster, and cheaper.</p>
      </div>
      <div class="process-steps">
        <div class="process-step reveal reveal-delay-1">
          <h4>Demand Gap Audit</h4>
          <p>Cyrus, our AI research agent, maps your competitive landscape, keyword universe, and GEO citation opportunities before we write a single word.</p>
        </div>
        <div class="process-step reveal reveal-delay-2">
          <h4>Architecture &amp; Build</h4>
          <p>We build your site, content system, and agent infrastructure from the ground up — all wired to your CRM, Google, and AI platforms.</p>
        </div>
        <div class="process-step reveal reveal-delay-3">
          <h4>Content Engine On</h4>
          <p>Jasper and Miles generate, QA, and deploy SEO + GEO content on a daily cadence. Fresh signals every day. Algorithms love it.</p>
        </div>
        <div class="process-step reveal reveal-delay-4">
          <h4>Demand Flows</h4>
          <p>Amy's AI voice system handles inbound calls. The CRM auto-qualifies leads. You wake up to booked appointments, not inbox chaos.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ══ PORTFOLIO PREVIEW ═══════════════════════════════════════ -->
  <section class="section" aria-labelledby="portfolio-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="eyebrow">Our Work</span>
        <h2 id="portfolio-heading">Clients Who Stand Out</h2>
        <p>Every business we work with looks and performs differently from their competitors. That's the whole point.</p>
      </div>
      <div class="portfolio-grid">
        <?php
        $portfolio = [
          ['SB Construction',           '/assets/portfolio/sb-construction.jpg',   'Contractor | El Dorado Hills, CA'],
          ['Hangtown Range',            '/assets/portfolio/hangtown-range.jpg',     'Firearms Retail | Placerville, CA'],
          ['Valenz Kitchen',            '/assets/portfolio/valenz-kitchen.jpg',     'Restaurant | Northern CA'],
          ['Hill McGlynn',              '/assets/portfolio/hill-mcglynn.jpg',       'Law Firm | Northern CA'],
          ['Sphere Drafting',           '/assets/portfolio/sphere-drafting.jpg',    'Engineering | Northern CA'],
          ['Jack Russell Farm Brewery', '/assets/portfolio/jack-russell.jpg',       'Brewery | Camino, CA'],
        ];
        foreach ($portfolio as $item): ?>
        <article class="portfolio-card">
          <img src="<?= $item[1] ?>" alt="<?= htmlspecialchars($item[0]) ?> website screenshot" loading="lazy">
          <div class="portfolio-card-info">
            <h4><?= htmlspecialchars($item[0]) ?></h4>
            <p><?= htmlspecialchars($item[2]) ?></p>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
      <div class="text-center mt-8" style="margin-top:40px">
        <a href="/portfolio" class="btn btn-outline">View Full Portfolio →</a>
      </div>
    </div>
  </section>

  <!-- ══ AGENT FARM CALLOUT ══════════════════════════════════════ -->
  <section class="section" style="background:linear-gradient(135deg,var(--dark) 0%,#2a3247 100%)" aria-labelledby="agents-heading">
    <div class="container text-center">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">We Are The Proof of Concept</span>
      <h2 id="agents-heading" style="color:var(--white);max-width:700px;margin:0 auto 20px">19 AI Agents Run This Agency.<br><span style="color:var(--teal)">We Built Yours Too.</span></h2>
      <p style="color:rgba(255,255,255,0.7);max-width:580px;margin:0 auto 40px;font-size:1.05rem">
        Tiffany handles executive ops. Ethan orchestrates projects. Cyrus does research. Jasper writes content. Amy answers calls. They work 24/7 without payroll. We built this system for ourselves — then made it available for clients.
      </p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
        <a href="/ai-agents/agent-farms" class="btn btn-primary btn-lg">Build My Agent Farm →</a>
        <a href="/about" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,0.3);color:#fff">Meet The Team</a>
      </div>
    </div>
  </section>

  <!-- ══ CTA ════════════════════════════════════════════════════ -->
  <section class="cta-band" aria-labelledby="cta-heading">
    <div class="container">
      <h2 id="cta-heading">Ready To Be The Signal?</h2>
      <p>Most of your competitors are still running the old playbook. Now is the window.</p>
      <a href="/contact" class="btn btn-primary btn-lg">Start the Conversation →</a>
    </div>
  </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
