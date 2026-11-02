<?php $title = 'تواصل معنا'; require __DIR__ . '/includes/header.php'; ?>
<header class="page-head"><div class="container"><h1>تواصل معنا</h1></div></header>
<section class="section"><div class="container">
  <p class="section-sub mb-4">للاستفسار عن الشركة والأصناف، راسلونا عبر البريد الإلكتروني.</p>
  <div class="row g-3">
    <div class="col-md-6"><div class="contact-card"><i class="bi bi-envelope"></i><h2 class="h5 mt-2">البريد الإلكتروني</h2><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></div></div>
    <div class="col-md-6"><div class="contact-card"><i class="bi bi-geo-alt"></i><h2 class="h5 mt-2">العنوان</h2><p class="mb-0"><?= e(SITE_ADDRESS) ?></p></div></div>
  </div>
  <div class="map-wrapper">
    <iframe class="map-frame" src="<?= e(SITE_MAP_EMBED) ?>" title="موقع <?= e(SITE_NAME) ?> على خرائط Google" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="mt-3"><a class="btn btn-outline-brand" href="<?= e(SITE_MAP_URL) ?>" target="_blank" rel="noopener"><i class="bi bi-geo-alt ms-1"></i>افتح الموقع في خرائط Google</a></div>
</div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
