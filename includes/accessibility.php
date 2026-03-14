<!-- ADA / WCAG 2.1 AA Accessibility Toolbar -->
<div id="accessibility-toolbar"
     class="a11y-toolbar"
     role="toolbar"
     aria-label="Accessibility options">
  <button id="a11y-toggle"
          class="a11y-toggle-btn"
          aria-expanded="false"
          aria-controls="a11y-controls"
          aria-label="Accessibility options">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
      <circle cx="12" cy="12" r="10"></circle>
      <line x1="12" y1="8" x2="12" y2="12"></line>
      <line x1="12" y1="16" x2="12.01" y2="16"></line>
    </svg>
    <span class="a11y-label">Accessibility</span>
  </button>

  <div id="a11y-controls" class="a11y-controls" hidden>
    <p class="a11y-heading">Accessibility Options</p>

    <!-- Font Size -->
    <div class="a11y-group">
      <span class="a11y-group-label" id="font-size-label">Text Size</span>
      <div class="a11y-row" role="group" aria-labelledby="font-size-label">
        <button class="a11y-btn" id="font-decrease" aria-label="Decrease text size">A-</button>
        <button class="a11y-btn" id="font-reset"    aria-label="Reset text size">A</button>
        <button class="a11y-btn" id="font-increase" aria-label="Increase text size">A+</button>
      </div>
    </div>

    <!-- Contrast -->
    <div class="a11y-group">
      <span class="a11y-group-label" id="contrast-label">Contrast</span>
      <div class="a11y-row" role="group" aria-labelledby="contrast-label">
        <button class="a11y-btn" id="contrast-normal"  aria-label="Normal contrast" aria-pressed="true">Normal</button>
        <button class="a11y-btn" id="contrast-high"    aria-label="High contrast"   aria-pressed="false">High</button>
        <button class="a11y-btn" id="contrast-invert"  aria-label="Invert colors"   aria-pressed="false">Invert</button>
      </div>
    </div>

    <!-- Dyslexia Font -->
    <div class="a11y-group">
      <div class="a11y-row">
        <label class="a11y-toggle-label" for="dyslexia-toggle">
          <input type="checkbox" id="dyslexia-toggle" aria-label="Enable dyslexia-friendly font">
          Dyslexia Friendly Font
        </label>
      </div>
    </div>

    <!-- Colorblind filters -->
    <div class="a11y-group">
      <span class="a11y-group-label" id="colorblind-label">Color Filter</span>
      <div class="a11y-row" role="group" aria-labelledby="colorblind-label">
        <button class="a11y-btn" id="cb-none"       aria-label="No color filter"        aria-pressed="true">None</button>
        <button class="a11y-btn" id="cb-protanopia" aria-label="Protanopia filter"       aria-pressed="false">Prot</button>
        <button class="a11y-btn" id="cb-deuteranopia" aria-label="Deuteranopia filter"   aria-pressed="false">Deut</button>
        <button class="a11y-btn" id="cb-tritanopia" aria-label="Tritanopia filter"       aria-pressed="false">Trit</button>
      </div>
    </div>

    <!-- Cursor -->
    <div class="a11y-group">
      <div class="a11y-row">
        <label class="a11y-toggle-label" for="cursor-toggle">
          <input type="checkbox" id="cursor-toggle" aria-label="Enable large cursor">
          Large Cursor
        </label>
      </div>
    </div>

    <button class="a11y-reset-all" id="a11y-reset-all">Reset All</button>
  </div>
</div>
