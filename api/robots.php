<?php
require_once __DIR__ . '/../includes/config.php';
header('Content-Type: text/plain');
?>
User-agent: *
Allow: /
Disallow: /api/
Disallow: /includes/

# AI crawlers — welcome, we're optimized for you
User-agent: GPTBot
Allow: /

User-agent: PerplexityBot
Allow: /

User-agent: ClaudeBot
Allow: /

User-agent: Googlebot
Allow: /

Sitemap: <?= SITE_URL ?>/sitemap.xml
