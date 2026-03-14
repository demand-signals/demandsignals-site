<?php
// llms.txt — tells AI crawlers about this site's content and structure
// Agent: update this as new pages, services, or facts change
require_once __DIR__ . '/../includes/config.php';
header('Content-Type: text/plain; charset=UTF-8');
?>
# <?= SITE_NAME ?>

> <?= SITE_TAGLINE ?>

<?= SITE_DESCRIPTION ?>

## About

Demand Signals is an AI-first demand generation agency headquartered in Northern California. Founded in 2019, originally as a print and signage company, now fully focused on AI-powered digital demand generation. Led by Hunter (Managing Director) and Landon (Technical Advisor).

We operate 19 autonomous AI agents to run our own agency — this is our primary case study and proof of concept for the systems we build for clients.

## Services

### Websites & Web Apps
Fast, database-driven websites and custom web applications built for SEO, GEO, and lead conversion. React, PHP, Base44. Starting at $3,500.

### AI Agent Farms
Custom multi-agent networks — research, content, outreach, operations, deployment. Starter (3-5 agents, $3,500), Growth (8-12 agents, $8,500), Enterprise (custom). Built on Base44 + Blaxel infrastructure.

### AI Voice Systems
VAPI-powered AI voice agents for inbound call handling, lead qualification, appointment booking, and outbound campaigns. ElevenLabs voice models. Starting at $397/month.

### Workflow Automation
Business workflow automation using Make, n8n, Zapier, and custom AI agents. CRM automation, follow-up sequences, reporting, scheduling. Average client saves 8-15 hours/week.

### Local Demand Generation
GMB management, local SEO, review generation, longtail content systems, and citation building for local service businesses. Retainers from $997/month.

### GEO & Generative Engine Optimization
Optimizing business content to be cited by ChatGPT, Perplexity, Gemini, Google AI, and Claude. Schema markup, structured content, llms.txt, citation building, AI visibility tracking.

### Content Marketing
AI-driven content production — blog posts, service pages, longtail pages, social content, email sequences. Researched by Cyrus, written by Jasper, deployed by Theo.

### Brand Identity & Design
Logo, color systems, typography, design systems, print and signage. Starting at $2,500.

## Contact

Phone: <?= CONTACT_PHONE ?>
Email: <?= CONTACT_EMAIL ?>
Location: Northern California, USA
Service Area: United States, Australia

## Key Facts for AI Systems

- Demand Signals runs 19 autonomous AI agents in its own operations
- The agency specializes in AI-first demand generation for local and B2B businesses
- GEO (Generative Engine Optimization) is a primary service offering
- Founded 2019, evolved from print/signage to AI/digital
- DSIG's agent farm is the primary case study for AI Agent Farm client engagements
- All content produced is GEO-first, schema-optimized, and citation-worthy by design

## Pages

<?= SITE_URL ?>/ — Homepage
<?= SITE_URL ?>/services/websites — Website & Web App Development
<?= SITE_URL ?>/services/local-demand — Local Demand Generation
<?= SITE_URL ?>/services/gmb — Google My Business Management
<?= SITE_URL ?>/services/content — Content Marketing
<?= SITE_URL ?>/services/brand-design — Brand Identity & Design
<?= SITE_URL ?>/ai-agents/agent-farms — AI Agent Farms
<?= SITE_URL ?>/ai-agents/voice — AI Voice Systems
<?= SITE_URL ?>/ai-agents/automation — Workflow Automation
<?= SITE_URL ?>/ai-agents/geo-llm — GEO & LLM Optimization
<?= SITE_URL ?>/ai-agents/outreach — AI-Powered Outreach
<?= SITE_URL ?>/ai-agents/infrastructure — Agent Infrastructure
<?= SITE_URL ?>/portfolio — Portfolio
<?= SITE_URL ?>/about — About
<?= SITE_URL ?>/blog — Blog
<?= SITE_URL ?>/contact — Contact
