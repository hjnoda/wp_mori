  <!-- Start CTA & Footer section -->
  <?php if(!is_page(array('contact','confirm','complete'))) { ?>
    <section class="cta-section">
      <div class="cube-wrap container">
        <h2 class="text-center">もっと詳しい情報はこちら</h2>
        <div class="form-wrap">
          <div class="row g-3 row-cols-1 row-cols-md-2">
            <div class="col"><a href="#fileModal" data-bs-toggle="modal" class="btn btn-lg btn-secondary w-100">
                <img src="<?= uri(); ?>/assets/img/download.svg" alt="" class="icon">
                <span class="brand-logo">PickBox<em>.</em></span>&nbsp;案内ダウンロード</a>
            </div>
            <div class="col"><a href="/contact.html" class="btn btn-lg btn-primary w-100">
                <img src="<?= uri(); ?>/assets/img/contact.svg" alt="" class="icon">
                お問い合わせ・ご相談</a>
            </div>
          </div>
        </div>
        <div id="cubeArea"></div>
        <template id="cubeTemplate">
          <div class="cube">
            <div class="shadow"></div>
            <div class="sides">
              <div class="back"></div>
              <div class="top"></div>
              <div class="left"></div>
              <div class="front"></div>
              <div class="right"></div>
              <div class="bottom"></div>
            </div>
          </div>
        </template>
      </div>
    </section>
    <!-- fileModal -->
    <div id="fileModal" class="modal fade">
      <div class="modal-dialog modal-sorry modal-dialog-centered mx-auto">
        <div class="modal-content">
          <div class="modal-header">
            <div class="icon-box">
              <svg xmlns="http://www.w3.org/2000/svg" width="20.405" height="20.934" viewBox="0 0 20.405 20.934">
                <path id="pickbox" d="M119.414,23.14a.967.967,0,0,0-.668-.881l-8.8-2.829a2.331,2.331,0,0,0-1.421,0l-8.813,2.843a.966.966,0,0,0-.668.881V33.715a2.609,2.609,0,0,0,1.372,2.317l7.4,3.859a3.112,3.112,0,0,0,2.914,0l7.349-3.859a2.608,2.608,0,0,0,1.372-2.317v-2a.711.711,0,1,0-1.421,0v2a1.2,1.2,0,0,1-.611,1.059l-7.384,3.859h-.085V27.61a3.712,3.712,0,0,0,.761-.22l7.285-2.985V26.26a.711.711,0,0,0,1.421,0ZM101.092,34.774a1.2,1.2,0,0,1-.611-1.059v-9.31l7.285,2.985a3.71,3.71,0,0,0,.761.22V38.669h-.085Zm9.083-8.7a2.452,2.452,0,0,1-1.876,0l-6.936-2.843,7.612-2.445a.831.831,0,0,1,.526,0l7.611,2.445Z" transform="translate(-99.045 -19.319)" fill="#ffffff"/>
              </svg>
              sorry...
            </div>
            <h4 class="modal-title w-100">申し訳ありません</h4>
          </div>
          <div class="moda-body">
            <p class="text-center">現在準備中です。</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary w-100" data-bs-dismiss="modal">閉じる</button>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  
  <section class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <a class="brand-logo" href="/">PickBox<em>.</em></a>
          <a href="https://twitter.com/pickbox_online" target="_blank" class="icon-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="24.069" height="20" viewBox="0 0 24.069 20">
              <path id="twitter-footer"
                d="M17.027,3.485a5.493,5.493,0,0,1,3.665,1.4,9.913,9.913,0,0,0,2.3-1.207A1,1,0,0,1,24.54,4.732a8.737,8.737,0,0,1-2,3.786c.015.162.023.326.023.488a16.188,16.188,0,0,1-1.117,6.074,13.329,13.329,0,0,1-3.034,4.574,13.637,13.637,0,0,1-9.636,3.831,16.055,16.055,0,0,1-7.761-2.066,1,1,0,0,1,.525-1.873c.141.006.284.008.424.008a10.635,10.635,0,0,0,4.473-.981,9.687,9.687,0,0,1-4.286-5.185,11.614,11.614,0,0,1-.24-6.065,13.654,13.654,0,0,1,.439-1.6c.056-.162.112-.315.167-.454.022-.056.04-.1.052-.127a1,1,0,0,1,1.756-.223,9.7,9.7,0,0,0,7.21,4.1,5.495,5.495,0,0,1,5.493-5.534ZM20.419,7.03a1,1,0,0,1-.755-.344,3.494,3.494,0,0,0-6.13,2.34s0,.009,0,.013v1a1,1,0,0,1-.974,1c-.1,0-.2,0-.3,0a11.706,11.706,0,0,1-8.345-3.5,10.948,10.948,0,0,0-.281,2.991c.169,3.218,1.951,5.6,5.3,7.091a1,1,0,0,1,.155,1.741,12.657,12.657,0,0,1-3.615,1.7,13.38,13.38,0,0,0,3.306.422,11.649,11.649,0,0,0,8.235-3.259,12.545,12.545,0,0,0,3.552-9.217,3.516,3.516,0,0,0-.062-.645,1,1,0,0,1,.28-.9,6.752,6.752,0,0,0,.627-.711q-.345.128-.7.234A1,1,0,0,1,20.419,7.03Z"
                transform="translate(-0.5 -3.484)" />
            </svg>
          </a>
        </div>
        <div class="col-lg-7">
          <ul class="footer-site d-none d-md-flex">
            <li><a href="/vision.html" class="footer-link">ビジョン</a></li>
            <li><a href="/feature.html" class="footer-link">特徴</a></li>
            <li><a href="/usecase.html" class="footer-link">活用事例</a></li>
            <li><a href="/c/news" class="footer-link">お知らせ</a></li>
            <li><a href="/c/blog" class="footer-link">ブログ</a></li>
            <li><a href="/contact.html" class="footer-link">お問い合わせ</a></li>
          </ul>
          <ul class="footer-note">
            <li><a href="https://clear-design.jp" target="_blank">運営会社<img src="<?= uri(); ?>/assets/img/external.svg" alt=""
                  class="icon-external"></a></li>
            <li><a href="">©︎ 2022 PickBox.</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End CTA section -->