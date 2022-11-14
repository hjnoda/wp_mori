<footer class="footer">
  <div class="container d-none">
    <div class="row row-eq-height gy-4">
      <div class="col-xl-3 align-items-center align-items-xl-start">
        <a class="navbar-brand" href="#">
          <span class="navbar-brand-sub"><?= conf('name') ?></span>
          <h1><?= conf('sitename') ?></h1>
        </a>
      </div>
      <div class="col-xl-6 justify-content-center">
        <div class="cta">
          <a href="" class="btn btn-more btn-primary w-100"><?= conf('sitename') ?>後援会</a>
          <a href="" class="btn btn-more btn-primary w-100">お問い合わせ</a>
        </div>
      </div>
      <div class="col-xl-3 justify-content-center">
        <div class="address"><?= conf('addr') ?><br>
        <?= conf('addr2') ?></div>
        <div class="copyright">©︎ 2022 <?= conf('sitename') ?></div>
      </div>
    </div>
  </div>
  <div class="container text-center">
    <a class="navbar-brand" href="#">
      <span class="navbar-brand-sub"><?= conf('name') ?></span>
      <h1><?= conf('sitename') ?></h1>
    </a>
    <div class="address"><?= conf('pref') ?> <?= conf('addr') ?> <?= conf('addr2') ?></div>
    <div class="address">TEL. <?= conf('tel') ?>／MAIL. <?= conf('mail') ?></div>
    <div class="cta mt-4 col-xl-6 mx-auto">
      <a href="" class="btn btn-more btn-primary w-100"><?= conf('sitename') ?>後援会</a>
      <a href="" class="btn btn-more btn-primary w-100">お問い合わせ</a>
    </div>
    <div class="copyright">©︎ 2022 <?= conf('sitename') ?></div>
  </div>
</footer>