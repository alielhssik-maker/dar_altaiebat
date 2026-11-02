(function () {
  var chips = document.querySelectorAll('[data-filter]');
  var cols = document.querySelectorAll('.product-col');
  var count = document.getElementById('shownCount');
  chips.forEach(function (chip) {
    chip.addEventListener('click', function () {
      var f = chip.dataset.filter, n = 0;
      chips.forEach(function (c) { var on = c === chip; c.classList.toggle('active', on); c.setAttribute('aria-pressed', on); });
      cols.forEach(function (col) { var show = f === 'all' || col.dataset.weight === f; col.hidden = !show; if (show) n++; });
      if (count) count.textContent = n;
    });
  });
  var modalEl = document.getElementById('productModal');
  if (!modalEl) return;
  var modal = new bootstrap.Modal(modalEl);
  document.querySelectorAll('.js-details').forEach(function (b) {
    b.addEventListener('click', function () {
      var d = b.dataset;
      document.getElementById('pmImg').src = d.image;
      document.getElementById('pmImg').alt = d.name;
      document.getElementById('pmName').textContent = d.name;
      document.getElementById('pmNo').textContent = d.no;
      document.getElementById('pmWeight').textContent = d.weight + ' غ';
      document.getElementById('pmPack').textContent = d.pack + ' عبوة';
      modal.show();
    });
  });
})();
