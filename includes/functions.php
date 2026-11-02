<?php
const SITE_NAME = 'دار الطيبات';
const SITE_FULL = 'دار الطيبات لاستيراد المواد الغذائية';
const SITE_EMAIL = 'daraltayyibat@gmail.com';
const SITE_ADDRESS = 'طرابلس، السراج';
const SITE_MAP_URL = 'https://maps.app.goo.gl/2yPee4291ugsBS9v6';
const SITE_MAP_EMBED = 'https://www.google.com/maps?q=%D8%B7%D8%B1%D8%A7%D8%A8%D9%84%D8%B3%D8%8C%20%D8%A7%D9%84%D8%B3%D8%B1%D8%A7%D8%AC%D8%8C%20%D9%84%D9%8A%D8%A8%D9%8A%D8%A7&hl=ar&z=15&output=embed';
const CATALOG_PATH = 'assets/catalog.pdf';

function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
function products(): array { static $p; return $p ??= require __DIR__ . '/../data/products.php'; }
function nav_items(): array {
  return ['index.php' => 'الرئيسية', 'about.php' => 'من نحن', 'products.php' => 'منتجاتنا',
          'index.php#catalog' => 'الكتالوج', 'contact.php' => 'تواصل معنا'];
}
function product_card(array $p): void { ?>
  <div class="col-6 col-lg-4 col-xl-3 product-col" data-weight="<?= (int)$p['weight'] ?>">
    <article class="product">
      <div class="product-img"><img src="<?= e($p['image']) ?>" alt="<?= e($p['name']) ?>" loading="lazy" width="400" height="400"></div>
      <div class="product-body">
        <h3><?= e($p['name']) ?></h3>
        <p class="meta"><?= (int)$p['weight'] ?> غ &middot; عبوة <?= (int)$p['pack'] ?></p>
        <button class="btn btn-outline-brand btn-sm w-100 js-details" type="button"
          data-no="<?= e($p['no']) ?>" data-name="<?= e($p['name']) ?>" data-weight="<?= (int)$p['weight'] ?>"
          data-pack="<?= (int)$p['pack'] ?>" data-image="<?= e($p['image']) ?>">عرض التفاصيل</button>
      </div>
    </article>
  </div>
<?php }
