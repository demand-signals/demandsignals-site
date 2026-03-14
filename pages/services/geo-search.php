<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title    = 'GEO & Generative Search Optimization | Demand Signals';
$page_desc     = 'Get your business cited by ChatGPT, Perplexity, Gemini, and Google AI. GEO (Generative Engine Optimization) is the new SEO — and we lead the market in it.';
$page_canonical = SITE_URL . '/services/geo-search';
header('HTTP/1.1 301 Moved Permanently');
header('Location: ' . SITE_URL . '/ai-agents/geo-llm');
exit;
