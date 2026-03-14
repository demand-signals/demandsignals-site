<?php
// Dynamic sitemap — agent: add new pages to $urls array
require_once __DIR__ . '/../includes/config.php';
header('Content-Type: application/xml; charset=UTF-8');
header('X-Robots-Tag: noindex');

$base = SITE_URL;
$today = date('Y-m-d');

$urls = [
  ['loc'=>$base.'/',                              'priority'=>'1.0', 'changefreq'=>'weekly',  'lastmod'=>$today],
  ['loc'=>$base.'/services/websites',             'priority'=>'0.9', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/services/local-demand',         'priority'=>'0.9', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/services/gmb',                  'priority'=>'0.8', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/services/content',              'priority'=>'0.8', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/services/brand-design',         'priority'=>'0.7', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/ai-agents/agent-farms',         'priority'=>'0.9', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/ai-agents/voice',               'priority'=>'0.9', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/ai-agents/automation',          'priority'=>'0.8', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/ai-agents/geo-llm',             'priority'=>'0.9', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/ai-agents/outreach',            'priority'=>'0.8', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/ai-agents/infrastructure',      'priority'=>'0.7', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/portfolio',                     'priority'=>'0.8', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/about',                         'priority'=>'0.7', 'changefreq'=>'monthly', 'lastmod'=>$today],
  ['loc'=>$base.'/blog',                          'priority'=>'0.8', 'changefreq'=>'daily',   'lastmod'=>$today],
  ['loc'=>$base.'/contact',                       'priority'=>'0.9', 'changefreq'=>'monthly', 'lastmod'=>$today],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as $u) {
  echo "  <url>\n";
  echo "    <loc>{$u['loc']}</loc>\n";
  echo "    <lastmod>{$u['lastmod']}</lastmod>\n";
  echo "    <changefreq>{$u['changefreq']}</changefreq>\n";
  echo "    <priority>{$u['priority']}</priority>\n";
  echo "  </url>\n";
}
echo '</urlset>';
