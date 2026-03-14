<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title    = 'AI Voice Systems (VAPI) — AI Receptionist | Demand Signals';
$page_desc     = 'AI-powered phone systems that answer calls, qualify leads, and book appointments 24/7. VAPI-powered voice agents for inbound and outbound — never miss a prospect again.';
$page_canonical = SITE_URL . '/ai-agents/voice';
include __DIR__ . '/../../../includes/head.php';
include __DIR__ . '/../../../includes/nav.php';
?>
<main id="main-content">

  <section class="section" style="padding-top:140px;background:var(--dark)">
    <div class="container" style="max-width:820px">
      <span class="eyebrow" style="background:rgba(104,197,173,0.15);color:var(--teal);display:inline-block;padding:4px 14px;border-radius:100px;font-size:0.8rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">AI Voice Systems</span>
      <h1 style="color:var(--white)">Your Phone Answers Itself.<br><span style="color:var(--teal)">Every Call. Every Time.</span></h1>
      <p class="lead" style="color:rgba(255,255,255,0.75);margin-top:20px">Most businesses lose 30–40% of inbound calls to voicemail, missed calls, or after-hours gaps. Our VAPI-powered AI voice agents answer every call, qualify the lead, book the appointment, and hand off to your team — without a receptionist on the clock.</p>
      <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:32px">
        <a href="/contact" class="btn btn-primary btn-lg">Get AI Voice →</a>
        <a href="/ai-agents/agent-farms" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,0.3);color:#fff">See Full Agent Farm</a>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header">
        <span class="eyebrow">What It Does</span>
        <h2>An AI Receptionist That Never Sleeps</h2>
        <p>Amy, our own AI voice agent, handles inbound calls for Demand Signals. We built her, we use her daily, and we deploy the same system for clients.</p>
      </div>
      <div class="service-grid">
        <article class="service-card"><div class="service-card-icon">📞</div><h3>Inbound Call Handling</h3><p>Answers every call instantly. Greets callers by name if returning. Captures name, need, and contact info — then routes or books.</p></article>
        <article class="service-card"><div class="service-card-icon">🎯</div><h3>Lead Qualification</h3><p>Asks your qualification questions naturally. Scores the lead in real time. Only sends warm, qualified prospects to your team.</p></article>
        <article class="service-card"><div class="service-card-icon">📅</div><h3>Appointment Booking</h3><p>Integrates with Google Calendar, Calendly, or your existing scheduling system. Books appointments without human intervention.</p></article>
        <article class="service-card"><div class="service-card-icon">📤</div><h3>Outbound Campaigns</h3><p>Run AI-driven outbound call campaigns — follow up on leads, confirm appointments, re-engage cold prospects at scale.</p></article>
        <article class="service-card"><div class="service-card-icon">🔗</div><h3>CRM Integration</h3><p>Every call logged automatically. Transcript, summary, lead score, and next action written to your CRM without lifting a finger.</p></article>
        <article class="service-card"><div class="service-card-icon">🌙</div><h3>After-Hours Coverage</h3><p>Handles calls at 11pm on a Sunday the same way as 9am on a Tuesday. No more "leave a message" when a hot lead calls after hours.</p></article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="grid-2">
        <div>
          <h2>Built on VAPI.<br>Tuned to Your Business.</h2>
          <p>We use VAPI — the leading voice AI infrastructure platform — paired with ElevenLabs voice models and your business-specific training data. The result is a voice agent that sounds like a knowledgeable member of your team, not a robot reading from a script.</p>
          <p>Every AI voice system we deploy includes:</p>
          <ul style="list-style:none;display:flex;flex-direction:column;gap:12px;margin-top:16px">
            <?php foreach ([
              'Custom voice — selected from 100+ ElevenLabs models',
              'Business-specific knowledge base (services, FAQs, pricing, staff)',
              'Live call transfer to a human when needed',
              'Post-call summary sent to your inbox and CRM',
              'Monthly performance review and tuning',
            ] as $item): ?>
            <li style="display:flex;gap:10px;align-items:flex-start"><span style="color:var(--teal);font-weight:700;flex-shrink:0">✓</span><span><?= $item ?></span></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div style="background:var(--dark);border-radius:20px;padding:40px">
          <h3 style="color:var(--teal);margin-bottom:24px">Pricing</h3>
          <?php foreach ([
            ['Starter','$397/mo','Up to 200 mins/mo inbound. 1 voice. CRM logging. Monthly tuning.'],
            ['Growth','$797/mo','Up to 600 mins/mo. Inbound + outbound campaigns. Priority tuning.'],
            ['Enterprise','Custom','Unlimited minutes. Multi-location. Custom integrations. Dedicated support.'],
          ] as $p): ?>
          <div style="background:rgba(255,255,255,0.05);border-radius:12px;padding:20px;margin-bottom:14px;border-left:4px solid var(--teal)">
            <strong style="color:var(--white)"><?= $p[0] ?></strong>
            <p style="color:var(--teal);font-weight:700;font-size:1.1rem;margin:4px 0"><?= $p[1] ?></p>
            <p style="color:rgba(255,255,255,0.55);font-size:0.85rem;margin:0"><?= $p[2] ?></p>
          </div>
          <?php endforeach; ?>
          <a href="/contact" class="btn btn-primary btn-full" style="margin-top:8px">Get Started →</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="section-header"><span class="eyebrow">How It Works</span><h2>Live in 2 Weeks</h2></div>
      <div class="process-steps">
        <div class="process-step"><h4>Voice &amp; Script Design</h4><p>We map your call flows, write the conversation scripts, and select your voice model. You approve everything before we build.</p></div>
        <div class="process-step"><h4>Build &amp; Integrate</h4><p>We wire your AI voice agent to your phone number, calendar, and CRM. Test calls with edge cases.</p></div>
        <div class="process-step"><h4>Soft Launch</h4><p>Run in parallel with your current setup for 5 days. We monitor every call and tune responses in real time.</p></div>
        <div class="process-step"><h4>Go Live &amp; Optimize</h4><p>Your AI voice agent takes the primary line. Monthly performance reviews and ongoing tuning included.</p></div>
      </div>
    </div>
  </section>

  <section class="cta-band"><div class="container"><h2>Stop Losing Leads to Voicemail.</h2><p>Every missed call is a missed sale. Let's fix that in 2 weeks.</p><a href="/contact" class="btn btn-primary btn-lg">Set Up AI Voice →</a></div></section>

</main>
<?php include __DIR__ . '/../../../includes/footer.php'; ?>
