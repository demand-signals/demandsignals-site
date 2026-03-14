<!-- Contact Bot — fixed bottom-right, teal button, Secret Contact Hub -->
<div id="contact-bot" aria-live="polite" aria-label="Contact assistant">
  <!-- Trigger button -->
  <button id="contact-bot-trigger"
          class="contact-bot-trigger"
          aria-expanded="false"
          aria-controls="contact-bot-panel"
          aria-label="Open contact assistant">
    <svg id="bot-icon-open" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
      <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
    </svg>
    <svg id="bot-icon-close" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="display:none">
      <line x1="18" y1="6" x2="6" y2="18"></line>
      <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
  </button>

  <!-- Panel -->
  <div id="contact-bot-panel"
       class="contact-bot-panel"
       role="dialog"
       aria-modal="true"
       aria-label="Secret Contact Hub"
       hidden>

    <div class="bot-panel-header">
      <h2 class="bot-panel-title">Do you feel lucky, <span>Punk?</span></h2>
      <p class="bot-panel-sub">Choose your adventure — we're ready for all of it.</p>
    </div>

    <div class="bot-panel-options">
      <button class="bot-option" data-action="email" aria-label="Send us an email">
        <span class="bot-option-icon">✉️</span>
        <div>
          <strong>Send a Message</strong>
          <p>Drop us a note — we reply fast.</p>
        </div>
      </button>

      <button class="bot-option" data-action="call" aria-label="Give us a call">
        <span class="bot-option-icon">📞</span>
        <div>
          <strong>Give Us a Call</strong>
          <p><?= CONTACT_PHONE ?></p>
        </div>
      </button>

      <button class="bot-option" data-action="quote" aria-label="Get a quick quote">
        <span class="bot-option-icon">⚡</span>
        <div>
          <strong>Quick Quote</strong>
          <p>Tell us what you need — get a scope in minutes.</p>
        </div>
      </button>

      <a href="/easter-egg" class="bot-option bot-option-game" aria-label="Just playing games — visit Easter Egg">
        <span class="bot-option-icon">🎮</span>
        <div>
          <strong>Just Playing Games?</strong>
          <p>If you still need to think about it, play a game while you do.</p>
        </div>
      </a>
    </div>

    <!-- Email form (hidden by default, shown when email action chosen) -->
    <div id="bot-email-form" class="bot-form" hidden>
      <button class="bot-back" aria-label="Go back">&larr; Back</button>
      <h3>Send Us a Message</h3>
      <form id="contact-bot-form" novalidate>
        <div class="form-group">
          <label for="bot-name">Your Name</label>
          <input type="text" id="bot-name" name="name" required autocomplete="name" placeholder="Hunter Mcglynn">
        </div>
        <div class="form-group">
          <label for="bot-email">Email</label>
          <input type="email" id="bot-email" name="email" required autocomplete="email" placeholder="you@yourbusiness.com">
        </div>
        <div class="form-group">
          <label for="bot-message">What can we help with?</label>
          <textarea id="bot-message" name="message" rows="4" required placeholder="Tell us about your project..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-full">Send It →</button>
      </form>
      <div id="bot-success" class="bot-success" hidden>
        <p>✅ Got it! We'll be in touch shortly.</p>
      </div>
    </div>

    <!-- Quote form -->
    <div id="bot-quote-form" class="bot-form" hidden>
      <button class="bot-back" aria-label="Go back">&larr; Back</button>
      <h3>Quick Quote</h3>
      <form id="quote-bot-form" novalidate>
        <div class="form-group">
          <label for="quote-name">Your Name</label>
          <input type="text" id="quote-name" name="name" required autocomplete="name">
        </div>
        <div class="form-group">
          <label for="quote-email">Email</label>
          <input type="email" id="quote-email" name="email" required autocomplete="email">
        </div>
        <div class="form-group">
          <label for="quote-service">What do you need?</label>
          <select id="quote-service" name="service">
            <option value="">Select a service...</option>
            <option value="website">Website / Web App</option>
            <option value="ai-agents">AI Agent Farm</option>
            <option value="ai-voice">AI Voice System</option>
            <option value="automation">Workflow Automation</option>
            <option value="local-seo">Local Demand Generation</option>
            <option value="geo">GEO / LLM Optimization</option>
            <option value="other">Something else</option>
          </select>
        </div>
        <div class="form-group">
          <label for="quote-details">Tell us more</label>
          <textarea id="quote-details" name="details" rows="3" placeholder="Budget, timeline, goals..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-full">Get My Quote →</button>
      </form>
      <div id="quote-success" class="bot-success" hidden>
        <p>⚡ On it! Expect a scoped proposal within 24 hours.</p>
      </div>
    </div>

  </div>
</div>
