<?php
// ============================================================
// BLOG POST TEMPLATE — copy this file to create new posts
// Filename = slug (e.g. pages/blog/your-slug.php)
// Agent: Jasper uses this template. Fill in $post array only.
// ============================================================
require_once __DIR__ . '/../../includes/config.php';

// ── Post data ── Agent: edit these fields ──────────────────────
$post = [
  'title'    => 'Your Post Title Here',
  'slug'     => 'your-post-slug',
  'date'     => '2026-03-14',
  'author'   => 'Jasper (DSIG Content Agent)',
  'excerpt'  => 'One paragraph summary — shown in meta description and blog index.',
  'tags'     => ['Tag1', 'Tag2', 'Tag3'],
  'read_time'=> '7 min read',
  'image'    => '', // Optional hero image URL
];

$page_title    = $post['title'] . ' | Demand Signals';
$page_desc     = $post['excerpt'];
$page_canonical = SITE_URL . '/blog/' . $post['slug'];
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';
?>
<main id="main-content">

  <article>
    <!-- Hero -->
    <section style="padding-top:120px;padding-bottom:60px;background:var(--dark)">
      <div class="container" style="max-width:760px">
        <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:16px">
          <?php foreach ($post['tags'] as $tag): ?>
          <span style="background:rgba(104,197,173,0.15);color:var(--teal);padding:4px 12px;border-radius:100px;font-size:0.75rem;font-weight:600"><?= htmlspecialchars($tag) ?></span>
          <?php endforeach; ?>
        </div>
        <h1 style="color:var(--white);font-size:clamp(1.8rem,4vw,2.8rem)"><?= htmlspecialchars($post['title']) ?></h1>
        <div style="display:flex;gap:20px;align-items:center;margin-top:20px;color:rgba(255,255,255,0.45);font-size:0.85rem;flex-wrap:wrap">
          <span><?= htmlspecialchars($post['author']) ?></span>
          <span>·</span>
          <time datetime="<?= $post['date'] ?>"><?= date('F j, Y', strtotime($post['date'])) ?></time>
          <span>·</span>
          <span><?= $post['read_time'] ?></span>
        </div>
      </div>
    </section>

    <!-- Body -->
    <section class="section">
      <div class="container" style="max-width:760px">
        <div class="prose">
          <!-- ── AGENT: write post body below ── -->

          <p>Introduction paragraph goes here.</p>

          <h2>First Section Heading</h2>
          <p>Section content...</p>

          <h2>Second Section Heading</h2>
          <p>Section content...</p>

          <!-- ── END post body ── -->
        </div>

        <!-- Tags + share -->
        <div style="border-top:1px solid #edf0f4;padding-top:32px;margin-top:48px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px">
          <div style="display:flex;gap:8px;flex-wrap:wrap">
            <?php foreach ($post['tags'] as $tag): ?>
            <span style="background:var(--teal-light);color:var(--teal);padding:4px 10px;border-radius:100px;font-size:0.78rem;font-weight:600"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>
          <div style="display:flex;gap:10px">
            <a href="https://twitter.com/intent/tweet?text=<?= urlencode($post['title']) ?>&url=<?= urlencode(SITE_URL.'/blog/'.$post['slug']) ?>" target="_blank" rel="noopener" style="color:var(--slate);font-size:0.85rem">Share on X</a>
            <span style="color:#dde2ea">|</span>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(SITE_URL.'/blog/'.$post['slug']) ?>" target="_blank" rel="noopener" style="color:var(--slate);font-size:0.85rem">Share on LinkedIn</a>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section style="background:var(--light);padding:60px 0">
      <div class="container" style="max-width:640px;text-align:center">
        <h3>Want to Work With Demand Signals?</h3>
        <p style="color:var(--slate)">We build AI-powered demand generation systems for businesses that want to get found everywhere that matters.</p>
        <a href="/contact" class="btn btn-primary btn-lg" style="margin-top:20px">Start a Conversation →</a>
      </div>
    </section>
  </article>

</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
