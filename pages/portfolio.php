<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'Portfolio — Our Work | Demand Signals';
$page_desc     = 'See the websites, web apps, AI systems, and demand generation work Demand Signals has built for clients across Northern California and beyond.';
$page_canonical = SITE_URL . '/portfolio';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';

// Agent: add/remove portfolio items here. hero_image should be a URL or /assets/portfolio/xxx.jpg
$portfolio_items = [
  [
    'name'    => 'SB Construction',
    'slug'    => 'sb-construction',
    'tagline' => 'Contractor | El Dorado Hills, CA',
    'services'=> ['Longtail SEO System', 'GEO Optimization', 'GMB Management'],
    'result'  => '93 geo-targeted pages live. Ranking #1 for 40+ local search terms.',
    'image'   => 'https://qtrypzzcjebvfcihiynt.supabase.co/storage/v1/object/public/base44-prod/public/6916c3c34fdcf11c28a7d5d6/portfolio-thumb.jpg',
    'url'     => 'https://sbconstruction.pro',
    'color'   => '#f28500',
  ],
  [
    'name'    => 'Hangtown Firearms Range',
    'slug'    => 'hangtown-range',
    'tagline' => 'Specialty Retail | Placerville, CA',
    'services'=> ['Web Application', 'CA Compliance Tool', 'AI Agent Integration'],
    'result'  => 'Custom CA gun compliance checker. AI-powered customer tools. Clover payment integration.',
    'image'   => '/assets/portfolio/hangtown.jpg',
    'url'     => 'https://hangtown.co',
    'color'   => '#68c5ad',
  ],
  [
    'name'    => 'Hill McGlynn Law',
    'slug'    => 'hill-mcglynn',
    'tagline' => 'Law Firm | Northern CA',
    'services'=> ['Website Design', 'Local SEO', 'GMB Management'],
    'result'  => 'New site + local demand stack. 3x increase in qualified calls within 90 days.',
    'image'   => '/assets/portfolio/hillmcglynn.jpg',
    'url'     => '#',
    'color'   => '#5d6780',
  ],
  [
    'name'    => 'Jack Russell Farm Brewery',
    'slug'    => 'jack-russell',
    'tagline' => 'Craft Brewery | Camino, CA',
    'services'=> ['Web Design', 'Social Media', 'Content Marketing'],
    'result'  => 'Brand-forward site with event system. Instagram presence built to 2K+ followers.',
    'image'   => '/assets/portfolio/jackrussell.jpg',
    'url'     => '#',
    'color'   => '#68c5ad',
  ],
  [
    'name'    => 'Sphere Drafting',
    'slug'    => 'sphere-drafting',
    'tagline' => 'Engineering Services | Northern CA',
    'services'=> ['Website Design', 'Local SEO', 'Brand Identity'],
    'result'  => 'Clean professional identity. Site ranking for local engineering and drafting terms.',
    'image'   => '/assets/portfolio/sphere.jpg',
    'url'     => '#',
    'color'   => '#f28500',
  ],
  [
    'name'    => 'Demand Signals (Our Own)',
    'slug'    => 'demand-signals',
    'tagline' => 'AI Agency | Northern CA',
    'services'=> ['AI Agent Farm (19 agents)', 'GEO Optimization', 'Full Stack Web App'],
    'result'  => 'We built our own 19-agent network. This site is the case study.',
    'image'   => ASSET_LOGO,
    'url'     => '/',
    'color'   => '#68c5ad',
  ],
];
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:760px;text-align:center">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Our Work</span>
      <h1 style="color:var(--white)">Clients Who Stand Out.</h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:16px">Every business we work with looks and performs differently from their competitors. That's the whole point.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div style="display:grid;gap:32px;grid-template-columns:repeat(auto-fit,minmax(340px,1fr))">
        <?php foreach ($portfolio_items as $item): ?>
        <article style="background:var(--white);border-radius:20px;overflow:hidden;border:1.5px solid #edf0f4;transition:all 0.22s;box-shadow:0 2px 12px rgba(29,35,48,0.06)"
                 onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 8px 40px rgba(29,35,48,0.14)'"
                 onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 2px 12px rgba(29,35,48,0.06)'">
          <div style="height:200px;background:<?= $item['color'] ?>22;display:flex;align-items:center;justify-content:center;border-bottom:1px solid #edf0f4;overflow:hidden">
            <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" style="width:100%;height:200px;object-fit:cover" loading="lazy"
                 onerror="this.style.display='none';this.parentElement.innerHTML='<div style=\'font-size:3rem\'>🏢</div>'">
          </div>
          <div style="padding:28px">
            <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;margin-bottom:12px">
              <div>
                <h3 style="margin-bottom:4px"><?= htmlspecialchars($item['name']) ?></h3>
                <p style="font-size:0.85rem;color:var(--slate);margin:0"><?= htmlspecialchars($item['tagline']) ?></p>
              </div>
              <?php if ($item['url'] !== '#'): ?>
              <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener" style="color:var(--teal);font-size:0.8rem;font-weight:600;white-space:nowrap;flex-shrink:0">Visit Site ↗</a>
              <?php endif; ?>
            </div>
            <div style="display:flex;flex-wrap:wrap;gap:6px;margin-bottom:14px">
              <?php foreach ($item['services'] as $svc): ?>
              <span style="background:var(--teal-light);color:var(--teal);padding:4px 10px;border-radius:100px;font-size:0.78rem;font-weight:600"><?= htmlspecialchars($svc) ?></span>
              <?php endforeach; ?>
            </div>
            <p style="font-size:0.9rem;color:var(--slate);border-top:1px solid #edf0f4;padding-top:14px;margin:0">
              <strong>Result:</strong> <?= htmlspecialchars($item['result']) ?>
            </p>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Want Your Business on This Page?</h2><p>Every client here was once where you are now. Let's talk.</p><a href="/contact" class="btn btn-primary btn-lg">Start a Project →</a></div></section>

</main>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
