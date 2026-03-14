<?php
// head.php — shared <head> for all pages
// Agent: set $page_title, $page_desc, $page_canonical before including
$page_title    = $page_title    ?? SITE_NAME . ' — ' . SITE_TAGLINE;
$page_desc     = $page_desc     ?? SITE_DESCRIPTION;
$page_canonical = $page_canonical ?? SITE_URL . strtok($_SERVER['REQUEST_URI'], '?');
$page_image    = $page_image    ?? ASSET_LOGO;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>">
  <meta name="robots" content="index, follow">

  <!-- Open Graph -->
  <meta property="og:title"       content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta property="og:url"         content="<?= htmlspecialchars($page_canonical) ?>">
  <meta property="og:type"        content="website">
  <meta property="og:site_name"   content="<?= SITE_NAME ?>">
  <meta property="og:image"       content="<?= htmlspecialchars($page_image) ?>">
  <meta name="twitter:card"       content="summary_large_image">
  <meta name="twitter:title"      content="<?= htmlspecialchars($page_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta name="twitter:image"      content="<?= htmlspecialchars($page_image) ?>">

  <!-- Schema.org LocalBusiness -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "<?= addslashes(SITE_NAME) ?>",
    "url": "<?= SITE_URL ?>",
    "telephone": "<?= CONTACT_PHONE ?>",
    "email": "<?= CONTACT_EMAIL ?>",
    "logo": "<?= ASSET_LOGO ?>",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "CA",
      "addressCountry": "US"
    },
    "description": "<?= addslashes(SITE_DESCRIPTION) ?>",
    "areaServed": "United States",
    "serviceType": [
      "AI Agent Development",
      "Demand Generation",
      "Website Development",
      "GEO Optimization",
      "AI Voice Systems",
      "Local SEO"
    ]
  }
  </script>

  <!-- GA4 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?= GA4_ID ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?= GA4_ID ?>', { anonymize_ip: true });
  </script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/accessibility.css">
</head>
<body>
<!-- Accessibility toolbar -->
<?php include __DIR__ . '/accessibility.php'; ?>
