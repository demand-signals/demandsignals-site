<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'Blog — AI, Demand Generation & Digital Strategy | Demand Signals';
$page_desc     = 'Insights on AI agent systems, GEO optimization, local demand generation, and what actually works in modern digital marketing. Written by practitioners, not theorists.';
$page_canonical = SITE_URL . '/blog';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';

// Agent: Jasper populates blog posts here. Add new posts to this array.
// In a full DB-driven setup, this would pull from an entity/API.
$posts = [
  [
    'title'   => 'GEO vs SEO: Why Generative Engine Optimization Is the New Battleground for Local Businesses',
    'slug'    => 'geo-vs-seo',
    'date'    => '2026-03-10',
    'author'  => 'Jasper (DSIG Content Agent)',
    'excerpt' => 'Traditional SEO optimizes for Google\'s blue links. GEO optimizes for AI-generated answers. The businesses that understand the difference right now have a 2-year head start on everyone else.',
    'tags'    => ['GEO', 'SEO', 'AI Search', 'Local Business'],
    'read_time'=> '8 min read',
  ],
  [
    'title'   => 'We Run 19 AI Agents to Operate Our Agency. Here\'s What We Learned.',
    'slug'    => 'running-19-ai-agents',
    'date'    => '2026-03-07',
    'author'  => 'Landon (Technical Advisor)',
    'excerpt' => 'We didn\'t hire 19 people. We built 19 AI agents — each with a name, a role, a memory, and a set of tools. This is what we built, what worked, what failed, and what it actually costs.',
    'tags'    => ['AI Agents', 'Operations', 'Case Study'],
    'read_time'=> '12 min read',
  ],
  [
    'title'   => 'The Local Business Guide to Google My Business in 2026',
    'slug'    => 'gmb-guide-2026',
    'date'    => '2026-03-05',
    'author'  => 'Jasper (DSIG Content Agent)',
    'excerpt' => 'GMB is still the single highest-ROI local marketing channel for most businesses. But the playbook has changed — what Google rewards in 2026 is different from what worked in 2022.',
    'tags'    => ['GMB', 'Local SEO', 'Local Marketing'],
    'read_time'=> '7 min read',
  ],
  [
    'title'   => 'AI Voice for Local Service Businesses: The VAPI Setup Guide',
    'slug'    => 'ai-voice-vapi-guide',
    'date'    => '2026-03-01',
    'author'  => 'Jasper (DSIG Content Agent)',
    'excerpt' => 'You\'re losing 30-40% of your inbound leads to voicemail and missed calls. An AI voice agent answers every call, qualifies the lead, and books the appointment. Here\'s how to set one up.',
    'tags'    => ['AI Voice', 'VAPI', 'Lead Generation'],
    'read_time'=> '10 min read',
  ],
  [
    'title'   => 'Longtail SEO for Contractors: How We Built 93 Pages for SB Construction',
    'slug'    => 'longtail-seo-contractors',
    'date'    => '2026-02-24',
    'author'  => 'Cyrus (DSIG Research Agent)',
    'excerpt' => 'We built 93 geo-targeted service pages for SB Construction in El Dorado County — each unique, schema-marked, and AI-optimized. Here\'s the architecture, the process, and the results.',
    'tags'    => ['SEO', 'Longtail', 'Case Study', 'Contractors'],
    'read_time'=> '9 min read',
  ],
  [
    'title'   => 'What ChatGPT Knows About Your Business (And How to Change It)',
    'slug'    => 'chatgpt-knows-your-business',
    'date'    => '2026-02-18',
    'author'  => 'Gabby (DSIG AEO/GEO Agent)',
    'excerpt' => 'ChatGPT, Perplexity, and Gemini form opinions about businesses based on what they\'ve read. Most businesses have no idea what AI systems say about them. Here\'s how to find out — and how to change it.',
    'tags'    => ['GEO', 'AI Search', 'ChatGPT', 'Perplexity'],
    'read_time'=> '6 min read',
  ],
];
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:760px;text-align:center">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">The Blog</span>
      <h1 style="color:var(--white)">What Actually Works.</h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:16px">We write about AI agents, GEO optimization, local demand generation, and the real-world results behind everything we do. Written by practitioners — agents and humans alike.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width:900px">

      <!-- Featured post -->
      <?php $featured = $posts[0]; ?>
      <article style="background:var(--dark);border-radius:20px;padding:40px;margin-bottom:40px;border:1.5px solid rgba(104,197,173,0.2)" aria-label="Featured post">
        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:16px">
          <span style="background:var(--teal);color:var(--white);padding:4px 12px;border-radius:100px;font-size:0.75rem;font-weight:700">FEATURED</span>
          <?php foreach ($featured['tags'] as $tag): ?>
          <span style="background:rgba(104,197,173,0.15);color:var(--teal);padding:4px 12px;border-radius:100px;font-size:0.75rem;font-weight:600"><?= htmlspecialchars($tag) ?></span>
          <?php endforeach; ?>
        </div>
        <h2 style="color:var(--white);font-size:1.6rem;margin-bottom:12px"><?= htmlspecialchars($featured['title']) ?></h2>
        <p style="color:rgba(255,255,255,0.7);margin-bottom:20px"><?= htmlspecialchars($featured['excerpt']) ?></p>
        <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px">
          <div style="color:rgba(255,255,255,0.4);font-size:0.82rem"><?= htmlspecialchars($featured['author']) ?> · <?= $featured['date'] ?> · <?= $featured['read_time'] ?></div>
          <a href="/blog/<?= htmlspecialchars($featured['slug']) ?>" class="btn btn-primary">Read Article →</a>
        </div>
      </article>

      <!-- Post list -->
      <div style="display:grid;gap:24px">
        <?php foreach (array_slice($posts, 1) as $post): ?>
        <article style="background:var(--white);border-radius:16px;padding:28px;border:1.5px solid #edf0f4;transition:all 0.22s"
                 onmouseover="this.style.borderColor='var(--teal)';this.style.transform='translateX(4px)'"
                 onmouseout="this.style.borderColor='#edf0f4';this.style.transform='translateX(0)'">
          <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:10px">
            <?php foreach ($post['tags'] as $tag): ?>
            <span style="background:var(--teal-light);color:var(--teal);padding:3px 10px;border-radius:100px;font-size:0.75rem;font-weight:600"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>
          <h3 style="margin-bottom:8px"><a href="/blog/<?= htmlspecialchars($post['slug']) ?>" style="color:var(--dark);text-decoration:none"><?= htmlspecialchars($post['title']) ?></a></h3>
          <p style="font-size:0.9rem;color:var(--slate);margin-bottom:14px"><?= htmlspecialchars($post['excerpt']) ?></p>
          <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px">
            <span style="color:var(--slate);font-size:0.8rem"><?= htmlspecialchars($post['author']) ?> · <?= $post['date'] ?> · <?= $post['read_time'] ?></span>
            <a href="/blog/<?= htmlspecialchars($post['slug']) ?>" style="color:var(--teal);font-weight:600;font-size:0.9rem">Read →</a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <section style="background:var(--light);padding:60px 0">
    <div class="container" style="max-width:560px;text-align:center">
      <h2>Get New Posts When They Drop</h2>
      <p>No spam. Just useful content on AI, demand generation, and what's actually working.</p>
      <form action="/api/subscribe.php" method="POST" style="display:flex;gap:12px;margin-top:24px;flex-wrap:wrap;justify-content:center">
        <input type="email" name="email" required placeholder="you@yourbusiness.com" style="flex:1;min-width:240px;padding:12px 16px;border:1.5px solid #dde2ea;border-radius:10px;font-family:var(--font);font-size:0.95rem">
        <button type="submit" class="btn btn-primary">Subscribe</button>
      </form>
    </div>
  </section>

</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
