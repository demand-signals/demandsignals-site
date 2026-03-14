// ============================================================
// COOKIE CONSENT STOPLIGHT
// Stores preference in localStorage: dsig_cookie_consent
// Values: 'all' | 'essential' | 'declined'
// Agent: GA4 is only loaded if consent = 'all'
// ============================================================

document.addEventListener('DOMContentLoaded', function () {
  const banner   = document.getElementById('cookie-consent');
  const PREF_KEY = 'dsig_cookie_consent';

  if (!banner) return;

  // Check existing preference
  const existing = localStorage.getItem(PREF_KEY);
  if (!existing) {
    // Show after short delay
    setTimeout(function () { banner.hidden = false; }, 1200);
  } else {
    applyConsent(existing);
  }

  // Stoplight animation — dim inactive lights on hover
  const lights = { red: document.getElementById('light-red'), yellow: document.getElementById('light-yellow'), green: document.getElementById('light-green') };

  function dimLights(keep) {
    Object.keys(lights).forEach(function (k) {
      if (lights[k]) lights[k].classList.toggle('dim', k !== keep);
    });
  }
  function undimAll() {
    Object.values(lights).forEach(function (l) { if (l) l.classList.remove('dim'); });
  }

  if (lights.red)    { lights.red.addEventListener('mouseover',    function () { dimLights('red'); }); lights.red.addEventListener('mouseout', undimAll); }
  if (lights.yellow) { lights.yellow.addEventListener('mouseover', function () { dimLights('yellow'); }); lights.yellow.addEventListener('mouseout', undimAll); }
  if (lights.green)  { lights.green.addEventListener('mouseover',  function () { dimLights('green'); }); lights.green.addEventListener('mouseout', undimAll); }

  // Buttons
  document.getElementById('cookie-decline')   && document.getElementById('cookie-decline').addEventListener('click',   function () { setConsent('declined');  });
  document.getElementById('cookie-essential') && document.getElementById('cookie-essential').addEventListener('click', function () { setConsent('essential'); });
  document.getElementById('cookie-accept')    && document.getElementById('cookie-accept').addEventListener('click',    function () { setConsent('all');        });

  function setConsent(value) {
    localStorage.setItem(PREF_KEY, value);
    banner.hidden = true;
    applyConsent(value);
  }

  function applyConsent(value) {
    if (value === 'all') {
      // Enable GA4 if not already loaded
      if (typeof gtag === 'function') {
        gtag('consent', 'update', { analytics_storage: 'granted', ad_storage: 'granted' });
      }
    } else if (value === 'essential') {
      if (typeof gtag === 'function') {
        gtag('consent', 'update', { analytics_storage: 'denied', ad_storage: 'denied' });
      }
    } else {
      // Declined — deny everything
      if (typeof gtag === 'function') {
        gtag('consent', 'update', { analytics_storage: 'denied', ad_storage: 'denied' });
      }
    }
  }
});
