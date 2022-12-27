<footer class="footer">
  <div class="container text-center">
    <a class="navbar-brand" href="#">
      <span class="navbar-brand-sub"><?= conf('name') ?></span>
      <h1><?= conf('sitename') ?></h1>
    </a>
    <div class="address"><?= conf('pref') ?> <?= conf('addr') ?> <?= conf('addr2') ?></div>
    <div class="address">TEL. <?= conf('tel') ?>／MAIL. <?= conf('mail') ?></div>
    <div class="cta mt-4 col-xl-3 mx-auto">
      <a href="" class="btn btn-more btn-primary w-100 d-none"><?= conf('sitename') ?>後援会</a>
      <a href="/contact.html" class="btn btn-more btn-primary w-100">お問い合わせ</a>
    </div>
    <div class="copyright">©︎ 2022 <?= conf('sitename') ?></div>
  </div>
</footer>