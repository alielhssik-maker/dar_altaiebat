<?php require_once __DIR__ . '/functions.php';
$current = basename($_SERVER['SCRIPT_NAME']);
$title = isset($title) ? $title . ' | ' . SITE_NAME : SITE_NAME . ' | لاستيراد المواد الغذائية'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#1d5a3f">
<meta name="description" content="دار الطيبات لاستيراد المواد الغذائية: كتالوج زبادي طبيعي وبنكهات الفواكه والفانيليا وزبادي ممزوج وطبقات.">
<title><?= e($title) ?></title>
<link rel="icon" href="assets/brand.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;500;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<a class="visually-hidden-focusable" href="#main">تخطَّ إلى المحتوى</a>
<nav class="navbar navbar-expand-lg site-nav sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
      <img src="assets/brand.jpg" alt="شعار دار الطيبات" width="44" height="44" class="brand-logo">
      <span><strong>دار الطيبات</strong><small class="d-block">DAR AL-TAYYIBAT</small></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="القائمة"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav mx-lg-auto mb-3 mb-lg-0">
        <?php foreach (nav_items() as $href => $label): $active = ($href === $current); ?>
          <li class="nav-item"><a class="nav-link<?= $active ? ' active' : '' ?>" href="<?= e($href) ?>"><?= e($label) ?></a></li>
        <?php endforeach; ?>
      </ul>
      <a class="btn btn-brand" href="<?= e(CATALOG_PATH) ?>" download><i class="bi bi-download ms-1"></i>تنزيل الكتالوج</a>
    </div>
  </div>
</nav>
<main id="main">
