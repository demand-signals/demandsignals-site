// ============================================================
// DEMAND SIGNALS — MAIN JS
// Agent: this file is safe to extend. Do not remove existing
// event listeners without testing nav/dropdowns/mobile.
// ============================================================

document.addEventListener('DOMContentLoaded', function () {

  // ── Mobile nav toggle ──────────────────────────────────────
  const toggle = document.querySelector('.nav-toggle');
  const menu   = document.querySelector('.nav-menu');
  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      const open = menu.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open);
    });
  }

  // ── Dropdown keyboard nav ──────────────────────────────────
  document.querySelectorAll('.dropdown-trigger').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const expanded = this.getAttribute('aria-expanded') === 'true';
      // Close all others
      document.querySelectorAll('.dropdown-trigger').forEach(function (b) {
        b.setAttribute('aria-expanded', 'false');
      });
      this.setAttribute('aria-expanded', !expanded);
    });
  });

  // Close dropdowns on outside click
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.has-dropdown')) {
      document.querySelectorAll('.dropdown-trigger').forEach(function (b) {
        b.setAttribute('aria-expanded', 'false');
      });
    }
  });

  // ── Nav scroll effect ──────────────────────────────────────
  const nav = document.querySelector('.site-nav');
  if (nav) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 60) {
        nav.style.background = 'rgba(29,35,48,0.98)';
      } else {
        nav.style.background = 'rgba(29,35,48,0.95)';
      }
    }, { passive: true });
  }

  // ── Escape key closes dropdowns / panels ──────────────────
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      document.querySelectorAll('.dropdown-trigger').forEach(function (b) {
        b.setAttribute('aria-expanded', 'false');
      });
      // Close contact bot
      const panel = document.getElementById('contact-bot-panel');
      const trig  = document.getElementById('contact-bot-trigger');
      if (panel && !panel.hidden) {
        panel.hidden = true;
        trig && trig.setAttribute('aria-expanded', 'false');
        trig && trig.focus();
      }
    }
  });

  // ── Animate on scroll (simple intersection observer) ──────
  const animTargets = document.querySelectorAll('.service-card, .process-step, .portfolio-card, .testimonial-card, .stat-item');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    animTargets.forEach(function (el) {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      observer.observe(el);
    });
  }

});
