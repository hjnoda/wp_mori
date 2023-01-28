<footer class="footer">
  <div class="container text-center">
    <a href="#" class="text-decoration-none">
      <span class="navbar-brand-sub"><?= conf('name') ?></span>
      <h1><?= conf('sitename') ?></h1>
    </a>
    <div class="address"><?= conf('pref') ?> <?= conf('addr') ?> <?= conf('addr2') ?></div>
    <div class="address">TEL. <?= conf('tel') ?>／MAIL. <?= conf('mail') ?></div>
    <div class="cta mt-4 col-xl-3 mx-auto">
      <a href="/contact.html" class="btn btn-more btn-outline-primary w-100">お問い合わせ</a>
    </div>
    <div class="copyright">©︎ 2023 <?= conf('sitename') ?></div>
  </div>
</footer>