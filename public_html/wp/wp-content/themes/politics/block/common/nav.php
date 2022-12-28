  <header>
    <nav
      class="navbar navbar-expand-xl fixed-top <?php if (is_home()) { ?>navbar-dark<?php } else { ?>navbar-light<?php } ?>"
      arial-label="offcanvas">
      <div class="container">
        <a class="navbar-brand" href="<?= home_url(); ?>">
          <h1><?= conf('sitename') ?></h1>
        </a>
        <button class="hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
          aria-controls="offcanvas" aria-label="menu">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
          <span class="hamburger-label">Menu</span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
          <div class="offcanvas-header">
            <h1 class="offcanvas-title" id="offcanvasLabel"><?= conf('sitename') ?></h1>
            <a href="javascript:void(0)" class="hamburger close" data-bs-dismiss="offcanvas" aria-label="close">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
              <span class="hamburger-label">close</span>
            </a>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav nav-menu justify-content-end flex-grow-1">
              <li><a class="nav-link" href="<?= home_url(); ?>#greeting">ご挨拶</a></li>
              <li><a class="nav-link" href="<?= home_url(); ?>#idea">めざすこと</a></li>
              <li><a class="nav-link" href="<?= home_url(); ?>#profile">プロフィール</a></li>
              <li><a class="nav-link" href="<?= home_url(); ?>#message">応援メッセージ</a></li>
              <li><a class="nav-link" href="c/news">お知らせ</a></li>
              <li><a class="nav-link" href="/contact.html">お問い合わせ</a></li>
            </ul>
            <ul class="navbar-nav d-flex flex-row align-items-center ms-2 ms-xl-0 mt-3 mt-xl-0">
              <li><a class="btn btn-primary" href="<?= conf('facebook') ?>" target="_blank"><i
                    class="bi bi-facebook"></i></a></li>
              <li><a class="btn btn-primary" href="<?= conf('twitter') ?>" target="_blank"><i
                    class="bi bi-twitter"></i></a></li>
              <li><a class="btn btn-primary" href="<?= conf('instagram') ?>" target="_blank"><i
                    class="bi bi-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>