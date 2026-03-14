<?php
require_once __DIR__ . '/../../includes/config.php';
$page_title    = 'You Found It. | Demand Signals Easter Egg';
$page_desc     = 'You found the secret page. While you\'re here, try not to lose.';
$page_canonical = SITE_URL . '/easter-egg';
include __DIR__ . '/../../includes/head.php';
include __DIR__ . '/../../includes/nav.php';
?>
<main id="main-content">
  <section style="min-height:100vh;background:var(--dark);display:flex;align-items:center;justify-content:center;padding:120px 24px 80px;text-align:center">
    <div style="max-width:700px">
      <div style="font-size:4rem;margin-bottom:16px">🐧</div>
      <h1 style="color:var(--white);margin-bottom:12px">You Found It.</h1>
      <p style="color:rgba(255,255,255,0.65);font-size:1.1rem;margin-bottom:40px">
        Most people are too busy filling out contact forms to end up here. You're different.<br>
        Since you're already here — you might as well play.
      </p>

      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;margin-bottom:60px">
        <button id="game-selector-space" class="btn btn-primary btn-lg" onclick="startGame('space')">🚀 Space Defense</button>
        <button id="game-selector-dots" class="btn btn-outline btn-lg" style="border-color:var(--teal);color:var(--teal)" onclick="startGame('dots')">🔴 Dot Mayhem</button>
      </div>

      <!-- Game canvas -->
      <div id="game-area" style="display:none">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
          <span id="game-score" style="color:var(--teal);font-size:1.1rem;font-weight:700">Score: 0</span>
          <span id="game-lives" style="color:var(--orange);font-size:1.1rem;font-weight:700">Lives: ♥♥♥</span>
          <span id="game-level" style="color:rgba(255,255,255,0.5);font-size:0.9rem">Level 1</span>
        </div>
        <canvas id="game-canvas" width="640" height="400"
                style="background:#0d1117;border-radius:12px;border:2px solid rgba(104,197,173,0.3);max-width:100%"
                tabindex="0" aria-label="Game canvas"></canvas>
        <p style="color:rgba(255,255,255,0.4);font-size:0.8rem;margin-top:10px">← → Arrow keys or A/D to move. Space to fire.</p>
      </div>

      <div id="game-over" style="display:none;margin-top:32px">
        <h2 style="color:var(--teal)">Game Over</h2>
        <p id="final-score-text" style="color:rgba(255,255,255,0.7)"></p>
        <div style="display:flex;gap:12px;justify-content:center;margin-top:20px;flex-wrap:wrap">
          <button class="btn btn-primary" onclick="restartGame()">Play Again</button>
          <a href="/contact" class="btn btn-orange">Fine — Let's Talk Business</a>
        </div>
      </div>

      <div style="margin-top:60px;padding-top:40px;border-top:1px solid rgba(255,255,255,0.08)">
        <p style="color:rgba(255,255,255,0.35);font-size:0.85rem">
          You really did find the secret page. That's the penguin from our hero video up there.<br>
          <a href="/contact" style="color:var(--teal)">When you're ready to talk demand generation →</a>
        </p>
      </div>
    </div>
  </section>
</main>

<script>
// ── Easter Egg Games ──────────────────────────────────────────
let currentGame = null;
let animFrame = null;
let score = 0;
let lives = 3;
let level = 1;
let gameRunning = false;

const canvas = document.getElementById('game-canvas');
const ctx = canvas ? canvas.getContext('2d') : null;

function startGame(type) {
  currentGame = type;
  score = 0; lives = 3; level = 1; gameRunning = true;
  document.getElementById('game-area').style.display = 'block';
  document.getElementById('game-over').style.display = 'none';
  updateHUD();
  canvas.focus();
  if (type === 'space') initSpaceGame();
  else initDotsGame();
}

function updateHUD() {
  document.getElementById('game-score').textContent = 'Score: ' + score;
  document.getElementById('game-lives').textContent = 'Lives: ' + '♥'.repeat(lives) + '♡'.repeat(Math.max(0, 3-lives));
  document.getElementById('game-level').textContent = 'Level ' + level;
}

function endGame() {
  gameRunning = false;
  if (animFrame) cancelAnimationFrame(animFrame);
  document.getElementById('game-over').style.display = 'block';
  document.getElementById('final-score-text').textContent = 'Final score: ' + score + ' — Level ' + level;
}

function restartGame() {
  document.getElementById('game-over').style.display = 'none';
  startGame(currentGame);
}

// ── Space Defense ──────────────────────────────────────────────
let ship, bullets, enemies, stars;
const keys = {};

document.addEventListener('keydown', e => { keys[e.key] = true; if (['ArrowLeft','ArrowRight',' '].includes(e.key)) e.preventDefault(); });
document.addEventListener('keyup',   e => { keys[e.key] = false; });

function initSpaceGame() {
  ship     = { x: 300, y: 350, w: 36, h: 20, speed: 5, shootCooldown: 0 };
  bullets  = [];
  enemies  = [];
  stars    = Array.from({length:60}, () => ({ x: Math.random()*640, y: Math.random()*400, s: Math.random()*1.5+0.5, sp: Math.random()*0.5+0.2 }));
  spawnEnemyWave();
  if (animFrame) cancelAnimationFrame(animFrame);
  animFrame = requestAnimationFrame(spaceLoop);
}

function spawnEnemyWave() {
  for (let i = 0; i < 5 + level * 2; i++) {
    enemies.push({ x: 40 + i * 80 % 600, y: 20 + Math.floor(i/7)*40, w:28, h:18, speed: 0.5 + level*0.2, dir:1 });
  }
}

function spaceLoop() {
  if (!gameRunning) return;
  ctx.clearRect(0,0,640,400);

  // Stars
  ctx.fillStyle='rgba(255,255,255,0.4)';
  stars.forEach(s => { s.y += s.sp; if(s.y>400)s.y=0; ctx.fillRect(s.x,s.y,s.s,s.s); });

  // Ship
  if (keys['ArrowLeft']||keys['a']||keys['A']) ship.x = Math.max(0, ship.x - ship.speed);
  if (keys['ArrowRight']||keys['d']||keys['D']) ship.x = Math.min(640-ship.w, ship.x + ship.speed);
  if ((keys[' ']||keys['ArrowUp']) && ship.shootCooldown <= 0) {
    bullets.push({ x: ship.x + ship.w/2 - 2, y: ship.y, w:4, h:12, speed:10 });
    ship.shootCooldown = 15;
  }
  if (ship.shootCooldown > 0) ship.shootCooldown--;

  ctx.fillStyle='#68c5ad';
  ctx.beginPath();
  ctx.moveTo(ship.x + ship.w/2, ship.y);
  ctx.lineTo(ship.x, ship.y + ship.h);
  ctx.lineTo(ship.x + ship.w, ship.y + ship.h);
  ctx.closePath();
  ctx.fill();

  // Bullets
  ctx.fillStyle='#f28500';
  bullets = bullets.filter(b => { b.y -= b.speed; ctx.fillRect(b.x,b.y,b.w,b.h); return b.y > -20; });

  // Enemies
  enemies.forEach(e => {
    e.x += e.speed * e.dir;
    if (e.x <= 0 || e.x >= 640-e.w) { e.dir *= -1; e.y += 16; }
    ctx.fillStyle='#ff4466';
    ctx.fillRect(e.x, e.y, e.w, e.h);
    ctx.fillStyle='#ff8899';
    ctx.fillRect(e.x+8, e.y+4, e.w-16, e.h-8);
    // Collision with ship
    if (e.y + e.h > ship.y && e.x < ship.x+ship.w && e.x+e.w > ship.x) {
      lives--; updateHUD();
      enemies = enemies.filter(en=>en!==e);
      if (lives <= 0) { endGame(); return; }
    }
    if (e.y > 400) { lives--; updateHUD(); if(lives<=0) endGame(); enemies = enemies.filter(en=>en!==e); }
  });

  // Bullet/enemy collision
  bullets = bullets.filter(b => {
    let hit = false;
    enemies = enemies.filter(e => {
      if (!hit && b.x < e.x+e.w && b.x+b.w > e.x && b.y < e.y+e.h && b.y+b.h > e.y) {
        hit = true; score += 10; updateHUD(); return false;
      } return true;
    });
    return !hit;
  });

  if (enemies.length === 0) { level++; updateHUD(); spawnEnemyWave(); }

  animFrame = requestAnimationFrame(spaceLoop);
}

// ── Dot Mayhem ─────────────────────────────────────────────────
let player, dots, dotTimer;

function initDotsGame() {
  player  = { x:300, y:360, r:12, speed:5 };
  dots    = [];
  dotTimer = 0;
  if (animFrame) cancelAnimationFrame(animFrame);
  animFrame = requestAnimationFrame(dotsLoop);
}

function dotsLoop() {
  if (!gameRunning) return;
  ctx.clearRect(0,0,640,400);

  // Move player
  if (keys['ArrowLeft']||keys['a']||keys['A'])  player.x = Math.max(player.r, player.x - player.speed);
  if (keys['ArrowRight']||keys['d']||keys['D']) player.x = Math.min(640-player.r, player.x + player.speed);
  if (keys['ArrowUp']||keys['w']||keys['W'])    player.y = Math.max(player.r, player.y - player.speed);
  if (keys['ArrowDown']||keys['s']||keys['S'])  player.y = Math.min(400-player.r, player.y + player.speed);

  // Spawn dots
  dotTimer++;
  if (dotTimer > Math.max(10, 40 - level*3)) {
    dotTimer = 0;
    const danger = Math.random() < 0.35;
    dots.push({ x: Math.random()*620+10, y:-10, r:danger?14:8, speed:(1+level*0.3)*(danger?0.7:1), danger, collected:false });
  }

  // Draw player
  ctx.fillStyle='#68c5ad';
  ctx.beginPath(); ctx.arc(player.x, player.y, player.r, 0, Math.PI*2); ctx.fill();
  ctx.fillStyle='#1d2330';
  ctx.beginPath(); ctx.arc(player.x-4, player.y-3, 3, 0, Math.PI*2); ctx.fill();
  ctx.beginPath(); ctx.arc(player.x+4, player.y-3, 3, 0, Math.PI*2); ctx.fill();

  // Dots
  dots = dots.filter(d => {
    d.y += d.speed;
    ctx.fillStyle = d.danger ? '#ff4444' : '#f28500';
    ctx.beginPath(); ctx.arc(d.x, d.y, d.r, 0, Math.PI*2); ctx.fill();
    // Collect
    const dx=d.x-player.x, dy=d.y-player.y;
    if (Math.sqrt(dx*dx+dy*dy) < player.r+d.r) {
      if (d.danger) { lives--; updateHUD(); if(lives<=0){endGame();return false;} }
      else { score += 5; if(score%(50+level*20)===0){level++;updateHUD();} updateHUD(); }
      return false;
    }
    return d.y < 420;
  });

  animFrame = requestAnimationFrame(dotsLoop);
}
</script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
