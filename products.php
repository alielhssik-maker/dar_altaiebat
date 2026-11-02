<?php $title = 'منتجاتنا'; require __DIR__ . '/includes/header.php'; $all = products(); ?>
<header class="page-head"><div class="container"><h1>منتجاتنا</h1></div></header>
<section class="section"><div class="container">
  <p class="section-sub mb-0">تصفّح صور المنتجات وأحجامها وبيانات العبوة.</p>
  <div class="filters" role="group" aria-label="تصفية الأصناف">
    <button class="chip active" type="button" data-filter="all" aria-pressed="true">جميع الأصناف</button>
    <button class="chip" type="button" data-filter="100" aria-pressed="false">زبادي 100 غ</button>
    <button class="chip" type="button" data-filter="70" aria-pressed="false">ممزوج 70 غ</button>
    <button class="chip" type="button" data-filter="140" aria-pressed="false">طبقات 140 غ</button>
  </div>
  <p class="text-muted">الأصناف المعروضة: <span id="shownCount"><?= count($all) ?></span></p>
  <div class="row g-3"><?php foreach ($all as $p) product_card($p); ?></div>
</div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
