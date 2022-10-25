  <!-- Start Header/Navigation -->
  <nav
    class="navbar navbar-expand-xl fixed-top <?php if(is_home()) { ?>navbar-dark<?php } else { ?>navbar-light<?php } ?>"
    arial-label="offcanvas">

    <div class="container">
      <a class="navbar-brand" href="#">
        <h1>清水たかひろ</h1>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
        aria-controls="offcanvas" aria-label="menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
          <h1 class="offcanvas-title" id="offcanvasLabel">清水たかひろ</h1>
          <a href="javascript:void(0)" class="text-reset" data-bs-dismiss="offcanvas" aria-label="close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#036136" class="bi bi-x-circle"
              viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path
                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
          </a>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li><a class="nav-link" href="#greeting">ご挨拶</a></li>
            <li><a class="nav-link" href="#idea">めざすこと</a></li>
            <li><a class="nav-link" href="#profile">プロフィール</a></li>
            <li><a class="nav-link" href="#message">応援メッセージ</a></li>
            <li><a class="nav-link" href="#news">お知らせ</a></li>
            <li><a class="nav-link" href="/contact.html">お問い合わせ</a></li>
          </ul>
          <ul class="navbar-nav d-flex flex-row align-items-center ms-2 ms-xl-0 mt-3 mt-xl-0">
            <li><a class="btn btn-primary" href="#" target="_blank"><i class="bi bi-facebook"></i></a></li>
            <li><a class="btn btn-primary" href="#" target="_blank"><i class="bi bi-twitter"></i></a></li>
            <!-- <li><a class="btn btn-primary" href="#" target="_blank"><i class="bi bi-instagram"></i></a></li> -->
          </ul>
        </div>
      </div>

    </div>

  </nav>
  <!-- End Header/Navigation -->