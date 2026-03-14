// ============================================================
// CONTACT BOT — floating bottom-right
// Agent: form submission endpoint is /api/contact.php
// ============================================================

document.addEventListener('DOMContentLoaded', function () {
  const trigger   = document.getElementById('contact-bot-trigger');
  const panel     = document.getElementById('contact-bot-panel');
  const iconOpen  = document.getElementById('bot-icon-open');
  const iconClose = document.getElementById('bot-icon-close');
  if (!trigger || !panel) return;

  function openPanel() {
    panel.hidden = false;
    trigger.setAttribute('aria-expanded', 'true');
    iconOpen.style.display  = 'none';
    iconClose.style.display = 'block';
    panel.querySelector('.bot-panel-header h2') && panel.querySelector('.bot-panel-header h2').focus();
  }

  function closePanel() {
    panel.hidden = true;
    trigger.setAttribute('aria-expanded', 'false');
    iconOpen.style.display  = 'block';
    iconClose.style.display = 'none';
    resetForms();
  }

  trigger.addEventListener('click', function () {
    panel.hidden ? openPanel() : closePanel();
  });

  // Action buttons
  document.querySelectorAll('.bot-option[data-action]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const action = this.dataset.action;
      const options  = document.querySelector('.bot-panel-options');
      const emailForm = document.getElementById('bot-email-form');
      const quoteForm = document.getElementById('bot-quote-form');

      if (action === 'email') {
        options.hidden  = true;
        emailForm.hidden = false;
        emailForm.querySelector('input') && emailForm.querySelector('input').focus();
      } else if (action === 'quote') {
        options.hidden  = true;
        quoteForm.hidden = false;
        quoteForm.querySelector('input') && quoteForm.querySelector('input').focus();
      } else if (action === 'call') {
        window.location.href = 'tel:<?= CONTACT_PHONE ?>';
      }
    });
  });

  // Back buttons
  document.querySelectorAll('.bot-back').forEach(function (btn) {
    btn.addEventListener('click', function () {
      resetForms();
    });
  });

  function resetForms() {
    const options   = document.querySelector('.bot-panel-options');
    const emailForm = document.getElementById('bot-email-form');
    const quoteForm = document.getElementById('bot-quote-form');
    if (options)   options.hidden   = false;
    if (emailForm) emailForm.hidden = true;
    if (quoteForm) quoteForm.hidden = true;
    // Reset success states
    const successes = document.querySelectorAll('.bot-success');
    successes.forEach(function (s) { s.hidden = true; });
    // Reset forms
    document.querySelectorAll('.bot-form form').forEach(function (f) {
      f.style.display = '';
      f.reset();
    });
  }

  // Contact form submit
  const contactForm = document.getElementById('contact-bot-form');
  if (contactForm) {
    contactForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const data = new FormData(this);
      try {
        const res = await fetch('/api/contact.php', { method: 'POST', body: data });
        if (res.ok) {
          this.style.display = 'none';
          document.getElementById('bot-success').hidden = false;
        }
      } catch (err) {
        // Fallback — open mailto
        const name    = data.get('name') || '';
        const message = data.get('message') || '';
        window.location.href = `mailto:DemandSignals@gmail.com?subject=Contact from ${encodeURIComponent(name)}&body=${encodeURIComponent(message)}`;
      }
    });
  }

  // Quote form submit
  const quoteForm = document.getElementById('quote-bot-form');
  if (quoteForm) {
    quoteForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const data = new FormData(this);
      try {
        const res = await fetch('/api/quote.php', { method: 'POST', body: data });
        if (res.ok) {
          this.style.display = 'none';
          document.getElementById('quote-success').hidden = false;
        }
      } catch (err) {
        window.location.href = 'mailto:DemandSignals@gmail.com?subject=Quick Quote Request';
      }
    });
  }

  // Click outside to close
  document.addEventListener('click', function (e) {
    if (!e.target.closest('#contact-bot')) {
      if (!panel.hidden) closePanel();
    }
  });
});
