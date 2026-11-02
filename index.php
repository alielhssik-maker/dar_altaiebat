.\
<?php require __DIR__ . '/includes/header.php'; $all = products(); $featured = array_slice($all, 0, 8); ?>
<section class="hero">
  <div class="container"><div class="row align-items-end g-4">
    <div class="col-lg-6 pb-lg-5">
      <h1>دار الطيبات... جودة تُختار بعناية</h1>
      <p class="lead">شركة لاستيراد المواد الغذائية في طرابلس، تقدّم تشكيلة من الزبادي الطبيعي وبنكهات الفواكه والفانيليا والممزوج والطبقات في عبوات متنوعة الأحجام.</p>
      <div class="d-flex flex-wrap gap-2 mt-4 pb-4">
        <a class="btn btn-light rounded-pill px-4" href="products.php">استكشف المنتجات</a>
        <a class="btn btn-light-o" href="about.php">تعرّف على الشركة</a>
      </div>
    </div>
<div class="col-lg-6">
  <div class="hero-card-wrapper">
    <!-- البادج العلوي -->
    <span class="hero-float-badge badge-top">زبادي طبيعي وبنكهات</span>
    
    <!-- الكارت الأبيض المائل -->
    <div class="hero-card-inner">
      <img src="assets/brand.jpg" alt="دار الطيبات" class="hero-logo-img">
    </div>

    <!-- البادج البرتقالي السفلي -->
    <span class="hero-float-badge badge-bottom">أحجام متنوعة</span>
  </div>
</div>
  </div></div>
</section>
<div class="flavors"><ul></ul></div>

<section class="section">
  <div class="container">
    <h2 class="section-title">ما الذي نقدّمه</h2>
    <p class="section-sub mb-4">كل ما في الكتالوج من أصناف فعلية متوفرة بعبوات جاهزة للتوزيع.</p>
    <div class="row g-3">
      <div class="col-md-6 col-lg-3"><div class="feature"><i class="bi bi-grid-3x3-gap"></i><h3>12 صنفًا</h3><p>زبادي طبيعي وبنكهات وممزوج وطبقات في كتالوج واحد.</p></div></div>
      <div class="col-md-6 col-lg-3"><div class="feature"><i class="bi bi-flower1"></i><h3>نكهات متعددة</h3><p>موز وفراولة وغلال الغابة وجوز الهند وخوخ وفانيليا.</p></div></div>
      <div class="col-md-6 col-lg-3"><div class="feature"><i class="bi bi-box-seam"></i><h3>ثلاثة أحجام</h3><p>70 غ و100 غ و140 غ، بعبوات 60 أو 30 في الكرتونة.</p></div></div>
      <div class="col-md-6 col-lg-3"><div class="feature"><i class="bi bi-file-earmark-pdf"></i><h3>كتالوج كامل</h3><p>نزّل ملف PDF يضم كل الأصناف وبيانات العبوات.</p></div></div>
    </div>
  </div>
</section>

<section class="section section-mint">
  <div class="container"><div class="row align-items-center g-5">
    <div class="col-lg-6 order-lg-2"><img class="about-img" src="assets/a.jpg" alt="زبادي نكهة غلال الغابة" loading="lazy" width="600" height="600"></div>
    <div class="col-lg-6">
      <h2 class="section-title">نبذة عن الشركة</h2>
      <p>دار الطيبات لاستيراد المواد الغذائية، ومقرها طرابلس، السراج. يضم كتالوجنا تشكيلة من الزبادي الطبيعي، والزبادي بنكهات الفواكه والفانيليا، والزبادي الممزوج والطبقات.</p>
      <div class="stat"><div><b>12</b><span>صنفًا في الكتالوج</span></div><div><b>3</b><span>أحجام متنوعة</span></div><div><b>طرابلس</b><span>السراج</span></div></div>
      <a class="btn btn-brand" href="about.php">اعرف المزيد</a>
    </div>
  </div></div>
</section>

<section class="section" id="products">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
      <div><h2 class="section-title">منتجاتنا</h2><p class="section-sub mb-0">بعض أصناف الكتالوج. تصفّح الباقي من صفحة المنتجات.</p></div>
      <a class="btn btn-outline-brand" href="products.php">كل الأصناف</a>
    </div>
    <div class="row g-3"><?php foreach ($featured as $p) product_card($p); ?></div>
  </div>
</section>

<section class="section pt-0" id="catalog">
  <div class="container"><div class="cta"><div class="row align-items-center g-3">
    <div class="col-lg-8"><h2>كل الأصناف بين يديك</h2><p class="mb-0 opacity-75">نزّل كتالوج دار الطيبات كاملًا بصيغة PDF.</p></div>
    <div class="col-lg-4 text-lg-start"><a class="btn btn-light rounded-pill px-4" href="<?= e(CATALOG_PATH) ?>" download><i class="bi bi-download ms-1"></i>تنزيل الكتالوج PDF</a></div>
  </div></div></div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
