</main>
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="pmTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content">
    <div class="modal-header"><h2 class="modal-title fs-5" id="pmTitle">تفاصيل المنتج</h2><button type="button" class="btn-close ms-0 me-auto" data-bs-dismiss="modal" aria-label="إغلاق"></button></div>
    <div class="modal-body"><div class="row g-4 align-items-center">
      <div class="col-md-5"><img id="pmImg" src="" alt="" class="img-fluid rounded-4"></div>
      <div class="col-md-7"><h3 id="pmName" class="h4 mb-3"></h3>
        <dl class="spec"><div><dt>رقم الصنف</dt><dd id="pmNo"></dd></div><div><dt>الوزن</dt><dd id="pmWeight"></dd></div><div><dt>العبوة</dt><dd id="pmPack"></dd></div></dl>
        <a href="contact.php" class="btn btn-brand">تواصل معنا</a></div>
    </div></div>
  </div></div>
</div>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="d-flex align-items-center gap-2 mb-3"><img src="assets/brand.jpg" alt="" width="48" height="48" class="brand-logo"><strong class="fs-5"><?= e(SITE_FULL) ?></strong></div>
        <p class="mb-0">نستورد ونوزّع تشكيلة من الزبادي الطبيعي وبنكهات الفواكه والفانيليا والممزوج والطبقات.</p>
      </div>
      <div class="footer-links">
        <h2 class="h6">الأقسام</h2>
        <ul class="list-unstyled mb-0"><?php foreach (nav_items() as $h => $l): ?><li><a href="<?= e($h) ?>"><?= e($l) ?></a></li><?php endforeach; ?></ul>
      </div>
      <div class="footer-contact-col">
        <h2 class="h6">التواصل</h2>
        <ul class="list-unstyled mb-0 footer-contact">
          <li><i class="bi bi-envelope"></i><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></li>
          <li><i class="bi bi-geo-alt"></i><span><?= e(SITE_ADDRESS) ?></span></li>
        </ul>
      </div>
    </div>
    <p class="copy">&copy; <?= date('Y') ?> <?= e(SITE_FULL) ?>. جميع الحقوق محفوظة.</p>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
