<?php
global $NAV_ITEMS, $SERVICES_DROPDOWN, $AI_DROPDOWN, $TOOLS_DROPDOWN;
$current = strtok($_SERVER['REQUEST_URI'], '?');
$current_section = explode('/', trim($current, '/'))[0] ?? '';
?>
<a href="#main-content" class="skip-link">Skip to main content</a>

<nav class="site-nav" role="navigation" aria-label="Main navigation">
  <div class="nav-inner">
    <a href="/" class="nav-logo" aria-label="Demand Signals Home">
      <img src="<?= ASSET_LOGO ?>" alt="Demand Signals" height="44" width="auto">
    </a>

    <button class="nav-toggle" aria-expanded="false" aria-controls="nav-menu" aria-label="Toggle navigation">
      <span></span><span></span><span></span>
    </button>

    <ul class="nav-menu" id="nav-menu" role="list">

      <!-- Services dropdown -->
      <li class="nav-item has-dropdown">
        <button class="nav-link dropdown-trigger <?= $current_section === 'services' ? 'active' : '' ?>"
                aria-expanded="false" aria-haspopup="true">
          Services <span class="caret" aria-hidden="true">▾</span>
        </button>
        <ul class="dropdown-menu" role="list">
          <?php foreach ($SERVICES_DROPDOWN as $item): ?>
          <li>
            <a href="<?= $item['href'] ?>" class="dropdown-link">
              <?php if (!empty($item['icon'])): ?>
              <span class="dropdown-icon" aria-hidden="true"><?= $item['icon'] ?></span>
              <?php endif; ?>
              <?= htmlspecialchars($item['label']) ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </li>

      <!-- AI & Agents dropdown -->
      <li class="nav-item has-dropdown">
        <button class="nav-link dropdown-trigger <?= $current_section === 'ai-agents' ? 'active' : '' ?>"
                aria-expanded="false" aria-haspopup="true">
          AI &amp; Agents <span class="caret" aria-hidden="true">▾</span>
        </button>
        <ul class="dropdown-menu" role="list">
          <?php foreach ($AI_DROPDOWN as $item): ?>
          <li>
            <a href="<?= $item['href'] ?>" class="dropdown-link">
              <?php if (!empty($item['icon'])): ?>
              <span class="dropdown-icon" aria-hidden="true"><?= $item['icon'] ?></span>
              <?php endif; ?>
              <?= htmlspecialchars($item['label']) ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </li>

      <!-- Tools dropdown -->
      <li class="nav-item has-dropdown">
        <button class="nav-link dropdown-trigger <?= $current_section === 'tools' ? 'active' : '' ?>"
                aria-expanded="false" aria-haspopup="true">
          Tools <span class="caret" aria-hidden="true">▾</span>
        </button>
        <ul class="dropdown-menu" role="list">
          <?php foreach ($TOOLS_DROPDOWN as $item): ?>
          <li>
            <a href="<?= $item['href'] ?>" class="dropdown-link" style="display:flex;align-items:center;justify-content:space-between;gap:10px">
              <span style="display:flex;align-items:center;gap:8px">
                <?php if (!empty($item['icon'])): ?><span aria-hidden="true"><?= $item['icon'] ?></span><?php endif; ?>
                <?= htmlspecialchars($item['label']) ?>
              </span>
              <?php if (!empty($item['badge'])): ?>
              <span style="font-size:0.68rem;font-weight:700;padding:2px 7px;border-radius:100px;<?= $item['badge'] === 'Free' ? 'background:var(--teal);color:#fff' : 'background:rgba(255,255,255,0.15);color:rgba(255,255,255,0.6)' ?>"><?= $item['badge'] ?></span>
              <?php endif; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </li>

      <li class="nav-item">
        <a href="/portfolio" class="nav-link <?= $current === '/portfolio' ? 'active' : '' ?>">Portfolio</a>
      </li>
      <li class="nav-item">
        <a href="/blog" class="nav-link <?= $current === '/blog' ? 'active' : '' ?>">Blog</a>
      </li>
      <li class="nav-item">
        <a href="/about" class="nav-link <?= $current === '/about' ? 'active' : '' ?>">About</a>
      </li>
      <li class="nav-item nav-cta">
        <a href="/contact" class="btn btn-primary">Get a Quote</a>
      </li>
    </ul>
  </div>
</nav>
