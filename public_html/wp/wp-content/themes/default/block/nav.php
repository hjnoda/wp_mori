  <!-- Start Header/Navigation -->
  <nav class="custom-navbar navbar navbar-expand-md fixed-top <?php if(is_home()) { ?>navbar-dark<?php } else { ?>navbar-light<?php } ?>" arial-label="offcanvasPickbox">

    <div class="container">
      <a class="navbar-brand" href="/">PickBox<span>.</span></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target = "#offcanvasPickbox" aria-controls = "offcanvasPickbox" aria-label="menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-start-lg" tabindex="-1" id="offcanvasPickbox" aria-labelledby="offcanvasPickboxLabel">
        <div class="offcanvas-header d-flex d-md-none">
          <h5 class="offcanvas-title navbar-brand" id="offcanvasPickboxLabel">PickBox<span>.</span></h5>
          <a href="javascript:void(0)" class="text-reset pb-2" data-bs-dismiss = "offcanvas" aria-label = "close">
            <svg xmlns = "http://www.w3.org/2000/svg" width = "24" height = "24" fill = "#FFFFFF" class = "bi bi-x-circle" viewBox = "0 0 16 16">
              <path d = "M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d = "M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </a>
        </div>
        <div class = "offcanvas-body p-lg-0">
          <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li><a class="nav-link" href="/vision.html">ビジョン</a></li>
            <li><a class="nav-link" href="/feature.html">特徴</a></li>
            <li><a class="nav-link" href="/usecase.html">活用事例</a></li>
            <li><a class="nav-link" href="/c/news">お知らせ</a></li>
            <li><a class="nav-link" href="/c/blog">ブログ</a></li>
            <li><a class="nav-link" href="/contact.html">お問い合わせ</a></li>
          </ul>
          <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            <li><a class="nav-link" href="https://twitter.com/pickbox_online" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24.069" height="20" viewBox="0 0 24.069 20">
                <path d="M17.027,3.485a5.493,5.493,0,0,1,3.665,1.4,9.913,9.913,0,0,0,2.3-1.207A1,1,0,0,1,24.54,4.732a8.737,8.737,0,0,1-2,3.786c.015.162.023.326.023.488a16.188,16.188,0,0,1-1.117,6.074,13.329,13.329,0,0,1-3.034,4.574,13.637,13.637,0,0,1-9.636,3.831,16.055,16.055,0,0,1-7.761-2.066,1,1,0,0,1,.525-1.873c.141.006.284.008.424.008a10.635,10.635,0,0,0,4.473-.981,9.687,9.687,0,0,1-4.286-5.185,11.614,11.614,0,0,1-.24-6.065,13.654,13.654,0,0,1,.439-1.6c.056-.162.112-.315.167-.454.022-.056.04-.1.052-.127a1,1,0,0,1,1.756-.223,9.7,9.7,0,0,0,7.21,4.1,5.495,5.495,0,0,1,5.493-5.534ZM20.419,7.03a1,1,0,0,1-.755-.344,3.494,3.494,0,0,0-6.13,2.34s0,.009,0,.013v1a1,1,0,0,1-.974,1c-.1,0-.2,0-.3,0a11.706,11.706,0,0,1-8.345-3.5,10.948,10.948,0,0,0-.281,2.991c.169,3.218,1.951,5.6,5.3,7.091a1,1,0,0,1,.155,1.741,12.657,12.657,0,0,1-3.615,1.7,13.38,13.38,0,0,0,3.306.422,11.649,11.649,0,0,0,8.235-3.259,12.545,12.545,0,0,0,3.552-9.217,3.516,3.516,0,0,0-.062-.645,1,1,0,0,1,.28-.9,6.752,6.752,0,0,0,.627-.711q-.345.128-.7.234A1,1,0,0,1,20.419,7.03Z"
                  transform="translate(-0.5 -3.484)" />
              </svg>
            </a></li>
          </ul>
        </div>
      </div>

    </div>

  </nav>
  <!-- End Header/Navigation -->