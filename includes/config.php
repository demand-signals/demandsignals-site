<?php
// ============================================================
// DSIG SITE CONFIG
// All agent-editable settings live here.
// Agent: only edit sections marked with "agent: edit here"
// ============================================================

define('SITE_NAME', 'Demand Signals');
define('SITE_URL', 'https://demandsignals.co');
define('SITE_TAGLINE', 'We Make You The Signal, Not The Noise');
define('SITE_DESCRIPTION', 'Demand Signals is an AI-first demand generation agency. We build websites, deploy AI agents, automate workflows, and dominate local and generative search — so your business gets found everywhere that matters.');
define('CONTACT_PHONE', '916-542-2423');
define('CONTACT_EMAIL', 'DemandSignals@gmail.com');
define('CONTACT_ADDRESS', 'Northern California');
define('GA4_ID', 'G-JYSS0XVLTY');

// Brand Colors (locked — do NOT change)
define('COLOR_TEAL',   '#68c5ad');
define('COLOR_SLATE',  '#5d6780');
define('COLOR_ORANGE', '#f28500');
define('COLOR_DARK',   '#1d2330');

// Asset URLs — agent: update if assets move
define('ASSET_PENGUIN_VIDEO', 'https://base44.app/api/apps/68ccebd683c4aa87ed81a043/files/public/68ccebd683c4aa87ed81a043/d76594fa5_demand_signals_penguines_shity_one_v1a.mp4');
define('ASSET_LOGO', 'https://qtrypzzcjebvfcihiynt.supabase.co/storage/v1/object/public/base44-prod/public/68ccebd683c4aa87ed81a043/efdd5a396_dsig_q2y25_logo_v2b.png');

// ── Navigation — agent: add/remove/reorder items here ────────
$NAV_ITEMS = [
    ['label' => 'Services',     'href' => '/services',   'dropdown' => 'services'],
    ['label' => 'AI & Agents',  'href' => '/ai-agents',  'dropdown' => 'ai'],
    ['label' => 'Tools',        'href' => '/tools',      'dropdown' => 'tools'],
    ['label' => 'Portfolio',    'href' => '/portfolio',  'dropdown' => false],
    ['label' => 'Blog',         'href' => '/blog',       'dropdown' => false],
    ['label' => 'About',        'href' => '/about',      'dropdown' => false],
    ['label' => 'Get a Quote',  'href' => '/contact',    'dropdown' => false, 'cta' => true],
];

// ── Dropdown menus — agent: add/remove items ─────────────────
$SERVICES_DROPDOWN = [
    ['label' => 'Websites & Web Apps',      'href' => '/services/websites',     'icon' => '🏢'],
    ['label' => 'Local Demand Generation',  'href' => '/services/local-demand', 'icon' => '📍'],
    ['label' => 'GEO & Generative Search',  'href' => '/ai-agents/geo-llm',     'icon' => '🔮'],
    ['label' => 'Content Marketing',        'href' => '/services/content',      'icon' => '✍️'],
    ['label' => 'Google My Business',       'href' => '/services/gmb',          'icon' => '⭐'],
    ['label' => 'Brand Identity & Design',  'href' => '/services/brand-design', 'icon' => '🎨'],
];

$AI_DROPDOWN = [
    ['label' => 'AI Agent Farms',           'href' => '/ai-agents/agent-farms',    'icon' => '🤖'],
    ['label' => 'AI Voice Systems',         'href' => '/ai-agents/voice',          'icon' => '📞'],
    ['label' => 'Workflow Automation',      'href' => '/ai-agents/automation',     'icon' => '⚡'],
    ['label' => 'AI-Powered Outreach',      'href' => '/ai-agents/outreach',       'icon' => '🎯'],
    ['label' => 'GEO & LLM Optimization',  'href' => '/ai-agents/geo-llm',        'icon' => '🔮'],
    ['label' => 'Agent Infrastructure',    'href' => '/ai-agents/infrastructure', 'icon' => '🔧'],
];

$TOOLS_DROPDOWN = [
    ['label' => 'Free Demand Audit',        'href' => '/tools/demand-audit',    'icon' => '📊', 'badge' => 'Free'],
    ['label' => 'Demand Links',             'href' => '/tools/demand-links',    'icon' => '🔗', 'badge' => 'Soon'],
    ['label' => 'Dynamic QR Codes',         'href' => '/tools/dynamic-qr',      'icon' => '📱', 'badge' => 'Soon'],
];

// ── Redirects — agent: add here, not in .htaccess ────────────
$REDIRECTS = [
    '/geo-llm-optimization'  => '/ai-agents/geo-llm',
    '/ai-seo'                => '/ai-agents/geo-llm',
    '/ai-agent-farms'        => '/ai-agents/agent-farms',
    '/workforce-automation'  => '/ai-agents/automation',
    '/api-integrations'      => '/ai-agents/automation',
    '/custom-apps'           => '/services/websites',
    '/website-design'        => '/services/websites',
    '/local-seo'             => '/services/local-demand',
    '/google-my-business'    => '/services/gmb',
    '/demand-link'           => '/tools/demand-links',
    '/qr-codes'              => '/tools/dynamic-qr',
    '/audit'                 => '/tools/demand-audit',
    '/free-audit'            => '/tools/demand-audit',
    '/cookies'               => '/privacy',
    '/geo-search'            => '/ai-agents/geo-llm',
];
