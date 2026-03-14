/* ============================================================
   DEMAND SIGNALS — main.js v3.0
   Nav scroll state | Scroll reveal | Stat counters | Dropdowns
   ============================================================ */

(function() {
  'use strict';

  // ── Nav scroll state ─────────────────────────────────────
  const nav = document.querySelector('.site-nav');
  if (nav) {
    const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 40);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ── Scroll reveal ─────────────────────────────────────────
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length && 'IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); } });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(el => io.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('visible'));
  }

  // ── Stat counters ─────────────────────────────────────────
  function animateCounter(el) {
    const raw   = el.dataset.target || el.textContent;
    const isPlus = raw.includes('+');
    const isx    = raw.toLowerCase().includes('x');
    const target = parseFloat(raw.replace(/[^0-9.]/g, '')) || 0;
    const suffix = isPlus ? '+' : (isx ? 'x' : (raw.includes('%') ? '%' : ''));
    const dec    = raw.includes('.') ? 1 : 0;
    const dur    = 1400;
    const start  = performance.now();
    el.dataset.target = raw;

    function tick(now) {
      const p = Math.min((now - start) / dur, 1);
      const ease = 1 - Math.pow(1 - p, 3);
      el.textContent = (target * ease).toFixed(dec) + suffix;
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }

  const statEls = document.querySelectorAll('.stat-num');
  if (statEls.length && 'IntersectionObserver' in window) {
    const sio = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) { animateCounter(e.target); sio.unobserve(e.target); }
      });
    }, { threshold: 0.5 });
    statEls.forEach(el => sio.observe(el));
  }

  // ── Dropdown menus ────────────────────────────────────────
  document.querySelectorAll('.dropdown-trigger').forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.stopPropagation();
      const isOpen = this.getAttribute('aria-expanded') === 'true';
      // close all
      document.querySelectorAll('.dropdown-trigger').forEach(b => {
        b.setAttribute('aria-expanded', 'false');
        b.nextElementSibling?.classList.remove('open');
      });
      if (!isOpen) {
        this.setAttribute('aria-expanded', 'true');
        this.nextElementSibling?.classList.add('open');
      }
    });
  });
  document.addEventListener('click', () => {
    document.querySelectorAll('.dropdown-trigger').forEach(b => {
      b.setAttribute('aria-expanded', 'false');
      b.nextElementSibling?.classList.remove('open');
    });
  });

  // ── Mobile nav toggle ─────────────────────────────────────
  const toggle = document.querySelector('.nav-toggle');
  const menu   = document.querySelector('.nav-menu');
  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      const open = menu.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open);
    });
  }

  // ── Hero orbs inject (if hero exists) ────────────────────
  const hero = document.querySelector('.hero');
  if (hero) {
    ['hero-orb-1','hero-orb-2'].forEach(cls => {
      const orb = document.createElement('div');
      orb.className = 'hero-orb ' + cls;
      hero.appendChild(orb);
    });
  }

  // ── Smooth scroll for anchor links ───────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });

})();
