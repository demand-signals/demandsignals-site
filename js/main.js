// ============================================================
// DEMAND SIGNALS — MAIN JS v2.0
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
      document.querySelectorAll('.dropdown-trigger').forEach(function (b) {
        b.setAttribute('aria-expanded', 'false');
      });
      this.setAttribute('aria-expanded', !expanded);
    });
  });
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
      nav.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });
  }

  // ── Escape key ────────────────────────────────────────────
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      document.querySelectorAll('.dropdown-trigger').forEach(function (b) {
        b.setAttribute('aria-expanded', 'false');
      });
      const panel = document.getElementById('contact-bot-panel');
      const trig  = document.getElementById('contact-bot-trigger');
      if (panel && !panel.hidden) {
        panel.hidden = true;
        trig && trig.setAttribute('aria-expanded', 'false');
        trig && trig.focus();
      }
    }
  });

  // ── Scroll Reveal ─────────────────────────────────────────
  // Add .reveal class to all animatable elements
  const revealSelectors = [
    '.service-card', '.process-step', '.portfolio-card',
    '.testimonial-card', '.stat-item', '.section-header',
    '.geo-list li', '.cta-inner'
  ];
  revealSelectors.forEach(function(sel, sIdx) {
    document.querySelectorAll(sel).forEach(function (el, i) {
      if (!el.classList.contains('reveal')) {
        el.classList.add('reveal');
        // Stagger within parent
        const delay = Math.min(i * 0.08, 0.5);
        el.style.transitionDelay = delay + 's';
      }
    });
  });

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.reveal').forEach(function (el) {
      observer.observe(el);
    });
  } else {
    // Fallback: show everything
    document.querySelectorAll('.reveal').forEach(function (el) {
      el.classList.add('visible');
    });
  }

  // ── Smooth counter animation for stats ───────────────────
  function animateCounter(el) {
    const target = parseFloat(el.textContent.replace(/[^0-9.]/g, ''));
    const suffix = el.textContent.replace(/[0-9.]/g, '');
    if (!target || isNaN(target)) return;
    const duration = 1800;
    const start = performance.now();
    function update(now) {
      const elapsed = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const ease = 1 - Math.pow(1 - progress, 3);
      const value = Math.round(ease * target * 10) / 10;
      el.textContent = (Number.isInteger(target) ? Math.round(value) : value) + suffix;
      if (progress < 1) requestAnimationFrame(update);
    }
    requestAnimationFrame(update);
  }

  const statsObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.querySelectorAll('.stat-num').forEach(animateCounter);
        statsObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  const statsSection = document.querySelector('.stats-bar');
  if (statsSection) statsObserver.observe(statsSection);

});
