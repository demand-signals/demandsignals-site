// ============================================================
// ACCESSIBILITY TOOLBAR — WCAG 2.1 AA
// Persists settings in localStorage: dsig_a11y
// Agent: do not remove — required for ADA compliance
// ============================================================

document.addEventListener('DOMContentLoaded', function () {
  const PREF_KEY = 'dsig_a11y';
  const body     = document.body;
  const toggle   = document.getElementById('a11y-toggle');
  const controls = document.getElementById('a11y-controls');
  if (!toggle || !controls) return;

  // Load saved prefs
  let prefs = {};
  try { prefs = JSON.parse(localStorage.getItem(PREF_KEY) || '{}'); } catch (e) {}
  applyAll(prefs);

  // Toggle panel
  toggle.addEventListener('click', function () {
    const open = controls.hidden;
    controls.hidden = !open;
    this.setAttribute('aria-expanded', open);
    if (open) controls.querySelector('button, input') && controls.querySelector('button, input').focus();
  });

  // Font size
  let fontSize = prefs.fontSize || 100;
  function setFontSize(size) {
    fontSize = Math.min(150, Math.max(80, size));
    document.documentElement.style.fontSize = fontSize + '%';
    save('fontSize', fontSize);
  }
  document.getElementById('font-increase') && document.getElementById('font-increase').addEventListener('click', function () { setFontSize(fontSize + 10); });
  document.getElementById('font-decrease') && document.getElementById('font-decrease').addEventListener('click', function () { setFontSize(fontSize - 10); });
  document.getElementById('font-reset')    && document.getElementById('font-reset').addEventListener('click',    function () { setFontSize(100); });

  // Contrast
  const contrastBtns = {
    normal: document.getElementById('contrast-normal'),
    high:   document.getElementById('contrast-high'),
    invert: document.getElementById('contrast-invert'),
  };
  function setContrast(mode) {
    body.classList.remove('high-contrast', 'inverted');
    if (mode === 'high')   body.classList.add('high-contrast');
    if (mode === 'invert') body.classList.add('inverted');
    Object.keys(contrastBtns).forEach(function (k) {
      contrastBtns[k] && contrastBtns[k].setAttribute('aria-pressed', k === mode);
    });
    save('contrast', mode);
  }
  contrastBtns.normal && contrastBtns.normal.addEventListener('click', function () { setContrast('normal'); });
  contrastBtns.high   && contrastBtns.high.addEventListener('click',   function () { setContrast('high');   });
  contrastBtns.invert && contrastBtns.invert.addEventListener('click', function () { setContrast('invert'); });

  // Dyslexia font
  const dyslexiaToggle = document.getElementById('dyslexia-toggle');
  if (dyslexiaToggle) {
    dyslexiaToggle.checked = !!prefs.dyslexia;
    dyslexiaToggle.addEventListener('change', function () {
      body.classList.toggle('dyslexia', this.checked);
      save('dyslexia', this.checked);
    });
  }

  // Colorblind filters
  const cbBtns = {
    none:          document.getElementById('cb-none'),
    protanopia:    document.getElementById('cb-protanopia'),
    deuteranopia:  document.getElementById('cb-deuteranopia'),
    tritanopia:    document.getElementById('cb-tritanopia'),
  };
  function setColorblind(filter) {
    body.classList.remove('cb-protanopia', 'cb-deuteranopia', 'cb-tritanopia');
    if (filter !== 'none') body.classList.add('cb-' + filter);
    Object.keys(cbBtns).forEach(function (k) {
      cbBtns[k] && cbBtns[k].setAttribute('aria-pressed', k === filter);
    });
    save('colorblind', filter);
  }
  cbBtns.none         && cbBtns.none.addEventListener('click',         function () { setColorblind('none'); });
  cbBtns.protanopia   && cbBtns.protanopia.addEventListener('click',   function () { setColorblind('protanopia'); });
  cbBtns.deuteranopia && cbBtns.deuteranopia.addEventListener('click', function () { setColorblind('deuteranopia'); });
  cbBtns.tritanopia   && cbBtns.tritanopia.addEventListener('click',   function () { setColorblind('tritanopia'); });

  // Large cursor
  const cursorToggle = document.getElementById('cursor-toggle');
  if (cursorToggle) {
    cursorToggle.checked = !!prefs.largeCursor;
    cursorToggle.addEventListener('change', function () {
      body.classList.toggle('large-cursor', this.checked);
      save('largeCursor', this.checked);
    });
  }

  // Reset all
  const resetBtn = document.getElementById('a11y-reset-all');
  if (resetBtn) {
    resetBtn.addEventListener('click', function () {
      localStorage.removeItem(PREF_KEY);
      document.documentElement.style.fontSize = '';
      body.classList.remove('high-contrast', 'inverted', 'dyslexia', 'large-cursor', 'cb-protanopia', 'cb-deuteranopia', 'cb-tritanopia');
      if (dyslexiaToggle) dyslexiaToggle.checked = false;
      if (cursorToggle)   cursorToggle.checked   = false;
      Object.values(contrastBtns).forEach(function (b) { b && b.setAttribute('aria-pressed', 'false'); });
      contrastBtns.normal && contrastBtns.normal.setAttribute('aria-pressed', 'true');
      Object.values(cbBtns).forEach(function (b) { b && b.setAttribute('aria-pressed', 'false'); });
      cbBtns.none && cbBtns.none.setAttribute('aria-pressed', 'true');
    });
  }

  function save(key, value) {
    prefs[key] = value;
    localStorage.setItem(PREF_KEY, JSON.stringify(prefs));
  }

  function applyAll(p) {
    if (p.fontSize)    { document.documentElement.style.fontSize = p.fontSize + '%'; }
    if (p.contrast === 'high')   body.classList.add('high-contrast');
    if (p.contrast === 'invert') body.classList.add('inverted');
    if (p.dyslexia)    body.classList.add('dyslexia');
    if (p.largeCursor) body.classList.add('large-cursor');
    if (p.colorblind && p.colorblind !== 'none') body.classList.add('cb-' + p.colorblind);
  }
});
