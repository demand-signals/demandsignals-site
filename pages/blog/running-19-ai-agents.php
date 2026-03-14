<?php
require_once __DIR__ . '/../../../includes/config.php';
$post = [
  'title'    => 'We Run 19 AI Agents to Operate Our Agency. Here\'s What We Learned.',
  'slug'     => 'running-19-ai-agents',
  'date'     => '2026-03-07',
  'author'   => 'Landon (Technical Advisor)',
  'excerpt'  => 'We didn\'t hire 19 people. We built 19 AI agents — each with a name, a role, a memory, and a set of tools. This is what we built, what worked, what failed, and what it actually costs.',
  'tags'     => ['AI Agents', 'Operations', 'Case Study'],
  'read_time'=> '12 min read',
];
$page_title    = $post['title'] . ' | Demand Signals';
$page_desc     = $post['excerpt'];
$page_canonical = SITE_URL . '/blog/' . $post['slug'];
include __DIR__ . '/../../../includes/head.php';
include __DIR__ . '/../../../includes/nav.php';
?>
<main id="main-content">
<article>
  <section style="padding-top:120px;padding-bottom:60px;background:var(--dark)">
    <div class="container" style="max-width:760px">
      <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:16px">
        <?php foreach ($post['tags'] as $tag): ?><span style="background:rgba(104,197,173,0.15);color:var(--teal);padding:4px 12px;border-radius:100px;font-size:0.75rem;font-weight:600"><?= $tag ?></span><?php endforeach; ?>
      </div>
      <h1 style="color:var(--white);font-size:clamp(1.8rem,4vw,2.5rem)"><?= htmlspecialchars($post['title']) ?></h1>
      <div style="display:flex;gap:20px;align-items:center;margin-top:20px;color:rgba(255,255,255,0.45);font-size:0.85rem;flex-wrap:wrap">
        <span><?= $post['author'] ?></span><span>·</span>
        <time datetime="<?= $post['date'] ?>"><?= date('F j, Y', strtotime($post['date'])) ?></time>
        <span>·</span><span><?= $post['read_time'] ?></span>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width:760px">
      <div class="prose">

        <p>In November 2025, Hunter and I made a decision: instead of hiring more people to scale Demand Signals, we'd build AI agents to do the work. Not one agent. Not a chatbot. A full <em>team</em> of specialized autonomous agents, each with a name, a defined role, a long-term memory, and a set of tools.</p>

        <p>As of March 2026, we have 19 agents running. This is what we learned.</p>

        <h2>The Agent Roster</h2>

        <p>Every agent has a name, a role, and a domain. We didn't want a generic "AI assistant" — we wanted specialists who could be held accountable to a scope, just like a human employee.</p>

        <p>The current team looks like this:</p>

        <ul>
          <li><strong>Tiffany</strong> — Landon's executive assistant. Technical ops, infrastructure coordination, agent oversight.</li>
          <li><strong>Sarah</strong> — Hunter's executive assistant. Client relationships, executive directives, sales support.</li>
          <li><strong>Ethan</strong> — Project manager. Dispatches tasks, manages workflows, coordinates across the team.</li>
          <li><strong>Cyrus</strong> — Research and competitive intelligence. Keyword research, SERP analysis, market mapping.</li>
          <li><strong>Jasper</strong> — Content writer. Long-form posts, service pages, longtail content, GEO-first copy.</li>
          <li><strong>Amy</strong> — AI voice agent. Handles inbound calls, lead qualification, appointment booking via VAPI.</li>
          <li><strong>Kathy</strong> — Finance. Time tracking, client billing, daily P&amp;L reporting.</li>
          <li><strong>Gabby</strong> — GEO/AEO engineer. AI visibility monitoring, citation tracking, schema implementation.</li>
          <li><strong>Alex</strong> — CTO. Infrastructure decisions, code review, Blaxel fleet management.</li>
          <li><strong>Braxton</strong> — DevOps. Deployment pipelines, secrets management, infrastructure provisioning.</li>
          <li><strong>Steve, Morgan, Theo, Miles, Lisa, Kelly, Kristin, Lexi, Susan</strong> — Specialist roles across operations, outreach, client work, and scheduling.</li>
        </ul>

        <h2>The Technical Stack</h2>

        <p>We built the agent network on three layers:</p>

        <ol>
          <li><strong>Base44</strong> — The application layer. Each agent has their own Base44 app with their own database, automations, and UI. This is where human-facing interactions happen.</li>
          <li><strong>Blaxel</strong> — The compute layer. Long-running processes, scheduled jobs, and compute-heavy tasks run on Blaxel sandboxes. Each agent has a persistent sandbox with a file system, network access, and 24/7 uptime.</li>
          <li><strong>GitHub</strong> — The skill library. All 42 skills (reusable scripts) live in a shared GitHub repo. When a sandbox resets, it pulls the latest skills from GitHub in under 5 seconds.</li>
        </ol>

        <p>Agent communication happens through WakeQueue — a shared entity in our hub app that acts as a message bus. Any agent can post a message to any other agent. The recipient picks it up within 5 minutes and acts on it. This sounds simple. It took three weeks to get right.</p>

        <h2>What We Got Wrong</h2>

        <p>The first version of agent-to-agent communication used platform webhooks. Webhooks are unreliable at scale. One missed trigger cascades into failed task chains. We rebuilt around polling — every agent checks their queue every 5 minutes — and reliability jumped from about 60% to 99%+.</p>

        <p>The second big mistake was running too much on Base44. Base44 has a 300-second execution limit. Complex content generation, keyword research, and web scraping all blow past that. We lost a week of compute credits to automations that were silently failing and retrying. Now: anything that takes more than 30 seconds goes to Blaxel. Base44 is strictly for memory, UI, and coordination.</p>

        <p>The third mistake was not tracking costs from day one. AI agents are not free. Between Base44 message credits, Blaxel compute, LLM API calls, and VAPI voice minutes, we were spending $80-100/day before we had revenue to match. Kathy now tracks every cost category daily and reports to us every morning.</p>

        <h2>What Worked Better Than Expected</h2>

        <p>Memory. Every agent has persistent long-term memory — a combination of identity files that survive sandbox resets and a queryable database of structured facts. Agents remember client preferences, past decisions, and project context across sessions. The first time we saw Jasper reference a conversation from 3 weeks prior without prompting, it clicked: this was different from a chatbot.</p>

        <p>Agent specialization. The decision to give every agent a defined scope was the right one. When Cyrus does keyword research and Jasper does writing, both are better than a single generalist agent trying to do both. Specialization creates accountability and expertise.</p>

        <p>The WakeQueue cascade potential. Multi-hop workflows — where Tiffany hands off to Ethan, Ethan dispatches to Cyrus and Jasper in parallel, they report back to Ethan, Ethan reports to Tiffany — started working reliably by week 6. The first time we saw a complex task complete autonomously across 5 agents without human intervention, it was genuinely remarkable.</p>

        <h2>What It Actually Costs</h2>

        <p>Full transparency. Our current monthly burn on the agent network:</p>

        <ul>
          <li>Base44 credits: ~$800-1,200/month (heavily usage-dependent)</li>
          <li>Blaxel compute: ~$150-300/month (19 always-on sandboxes)</li>
          <li>LLM API (Grok, Claude, etc.): ~$200-400/month</li>
          <li>VAPI voice minutes: ~$100-200/month</li>
          <li>Infisical, GitHub, misc tools: ~$50/month</li>
        </ul>

        <p>Total: roughly $1,300-2,150/month. Compare that to the cost of a single full-time employee in Northern California — $60,000-80,000/year fully loaded — and the math is compelling. Especially for a team of 19.</p>

        <h2>Would We Do It Again?</h2>

        <p>Yes. But with the knowledge we have now, we'd compress the build from 4 months to 6 weeks. The infrastructure patterns are established. The skill library is built. The agent communication protocol works. The next team we deploy for a client will be live in days, not months.</p>

        <p>That's the product. We're not just a demand generation agency — we're the people who built and operate their own 19-agent AI network, and now deploy the same systems for clients who want to compete differently.</p>

      </div>

      <div style="border-top:1px solid #edf0f4;padding-top:32px;margin-top:48px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px">
        <div style="display:flex;gap:8px;flex-wrap:wrap">
          <?php foreach ($post['tags'] as $tag): ?><span style="background:var(--teal-light);color:var(--teal);padding:4px 10px;border-radius:100px;font-size:0.78rem;font-weight:600"><?= $tag ?></span><?php endforeach; ?>
        </div>
        <div style="display:flex;gap:10px">
          <a href="https://twitter.com/intent/tweet?text=<?= urlencode($post['title']) ?>&url=<?= urlencode(SITE_URL.'/blog/'.$post['slug']) ?>" target="_blank" rel="noopener" style="color:var(--slate);font-size:0.85rem">Share on X</a>
          <span style="color:#dde2ea">|</span>
          <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(SITE_URL.'/blog/'.$post['slug']) ?>" target="_blank" rel="noopener" style="color:var(--slate);font-size:0.85rem">LinkedIn</a>
        </div>
      </div>
    </div>
  </section>

  <section style="background:var(--light);padding:60px 0">
    <div class="container" style="max-width:640px;text-align:center">
      <h3>Want an Agent Farm for Your Business?</h3>
      <p style="color:var(--slate)">We build and deploy custom AI agent networks. Everything we described in this post — deployed for your team in weeks, not months.</p>
      <a href="/ai-agents/agent-farms" class="btn btn-primary btn-lg" style="margin-top:20px">Learn About Agent Farms →</a>
    </div>
  </section>
</article>
</main>
<?php include __DIR__ . '/../../../includes/footer.php'; ?>
