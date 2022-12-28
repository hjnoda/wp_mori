<div class="pr">
  <div class="swiper prSwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-img" style="background:url(<?= uri(); ?>/assets/img/pr1.jpg) no-repeat center / cover;">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img" style="background:url(<?= uri(); ?>/assets/img/pr2.jpg) no-repeat center / cover;">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img" style="background:url(<?= uri(); ?>/assets/img/pr3.jpg) no-repeat center / cover;">
        </div>
      </div>
      <div class="pr-catch">
        <div class="container">
          <figure class="catch-img figure-clear">
            <img src="<?= img('pr.png'); ?>" class="pr-img" alt="">
          </figure>
          <div class="catch-text">
            <h2><ruby>清水<rt class="fs-4">しみず</rt></ruby>たかひろ</h2>
            <p>地域をつなぐ現場主義<br>手稲区からチャレンジ！</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">

  <section id="news" class="width-max">
    <h3 title="news">新着情報</h3>
    <div class="swiper newsSwiper">
      <div class="swiper-wrapper">
        <?php
        $obj = get_postByTax('post', 4, 'category', 'news');
        $cat = get_cat($post->ID);
        foreach ($obj as $post) {
      ?>
        <div class="swiper-slide">
          <a href="<?php the_permalink($post); ?>" class="news-link">
            <div class="news-thumb">
              <div class="news-cat"><?= $cat->name; ?></div>
              <figure>
                <img src="<?= get_eye_image($post->ID); ?>" class="img-fluid" alt="<?= $post->post_title; ?>">
              </figure>
            </div>
            <div class="news-content">
              <div class="news-date"><?= tm_date('Y.m.d'); ?></div>
              <div class="news-title"><?= $post->post_title; ?></div>
            </div>
          </a>
        </div>
        <?php }
        wp_reset_query();
      ?>
      </div>
      <div class="swiper-pagination swiper-pagination-custom swiper-pagination-news"></div>
    </div>
    <div class="btn-center">
      <a href="/c/news" class="btn btn-more btn-primary mx-auto">全件を見る</a>
    </div>
  </section>

  <section id="greeting">
    <h3 title="greeting">ご挨拶</h3>
    <div class="layer-l">
      <div id="carouselGreeting" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <figure><img src="<?= img('greeting1.jpg'); ?>" class="d-block w-100" alt=""></figure>
          </div>
          <div class="carousel-item">
            <figure><img src="<?= img('greeting2.jpg'); ?>" class="d-block w-100" alt=""></figure>
          </div>
          <div class="carousel-item">
            <figure><img src="<?= img('greeting3.jpg'); ?>" class="d-block w-100" alt=""></figure>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGreeting" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselGreeting" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="layer-text">
        <div>
          <h4 class="text-center text-md-start">手稲から<br>都市と農村をむすぶ<br>生産者と消費者の<br class="d-block d-md-none"><span
              class="text-primary">かけ橋</span>に</h4>
          <p class="mt-4">
            手稲区民のみなさん、私、清水たかひろは、みなさんの声を都政に届けていくため、手稲区が直面している様々な課題にしっかりと向き合います。<br>
            また、農業経験者として都市と農村をむすび、生産者と消費者の「かけ橋」となるため、<span
              class="text-primary fs-5">地域をつなぐ現場主義</span>を信条にしています。手稲区が持っている素晴らしい財産、<span
              class="text-primary fs-5">魅力を存分に活かし、活力あふれる元気なまち「ていね」</span>の未来実現に向けて、これまでの経験と持ってる力の全てを注ぎ、全力を尽くす決意です。<span
              class="text-primary fs-5">一緒に未来を作りましょう！</span>
          </p>
        </div>
      </div>
    </div>
    <div class="layer-r d-none">
      <figure><img src="<?= img('greeting.jpg'); ?>" alt=""></figure>
      <div class="layer-text">
        <p>
          みなさんの声を道政に届けていくため、<br>手稲区が直面している様々な課題にしっかりと向き合います。<br>手稲区が持っている素晴らしい財産、魅力を存分に活かし、<br>活力あふれる元気なまち「ていね」の未来実現に向けて、<br>自らのこれまでの経験と持てる力の全てを注ぎ、全力を尽くす決意です。<br>一緒に未来を創りましょう！
        </p>
      </div>
    </div>
  </section>

  <section id="idea">
    <h3 title="idea"><span class="fs-4 text-dark">清水たかひろがめざす<br>元気なまち<span class="text-primary">「ていね」</span>の未来</span>
    </h3>
    <ul class="idea-list">
      <li class="row">
        <div class="col-xl-4 order-xl-last">
          <figure class="ms-xl-5"><img src="<?= img('idea1.jpg'); ?>" alt=""></figure>
        </div>
        <div class="col-xl-8">
          <h4 title="01">子育て世代が安心して暮らせる元気なまち「ていね」</h4>
          <ul class="idea-ul">
            <li>子ども医療費助成引き上げ、学校給食費の無償化。</li>
            <li>保育士の待遇改善や増員による保育環境の充実改善。</li>
            <li>産前産後サポートや保健師、児童福祉司の増員などの支援推進。</li>
          </ul>
        </div>
      </li>
      <li class="row">
        <div class="col-xl-4">
          <figure class="me-xl-5"><img src="<?= img('idea2.jpg'); ?>" alt=""></figure>
        </div>
        <div class="col-xl-8">
          <h4 title="02">福祉・医療政策がすべての年齢層に対応する<br>元気なまち「ていね」</h4>
          <ul class="idea-ul">
            <li>区民の健康をサポートする医療提供体制と介護体制の支援強化。</li>
            <li>住み慣れた手稲区でこの先も暮らしていくための日常生活の支援強化。<br>（除排雪、買物、交通手段支援など）</li>
            <li>障がい者支援の充実と障がい者雇用の促進。</li>
          </ul>
        </div>
      </li>
      <li class="row row-eq-height">
        <div class="col-xl-4 order-xl-last">
          <figure class="ms-xl-5"><img src="<?= img('idea3.jpg'); ?>" alt=""></figure>
        </div>
        <div class="col-xl-8">
          <h4 title="03">女性も男性もすべての年齢層に働きがいのある<br>元気なまち「ていね」</h4>
          <ul class="idea-ul">
            <li>ワークライフバランスや男女共同参画に基づく働きやすい職場環境づくり。</li>
            <li>地元産業の後継者対策やワーケーション事業など関係人口創出。</li>
            <li>商店街や地元産業の活性化などを基軸とした起業支援。</li>
          </ul>
        </div>
      </li>
      <li class="row">
        <div class="col-xl-4">
          <figure class="me-xl-5"><img src="<?= img('idea4.jpg'); ?>" alt=""></figure>
        </div>
        <div class="col-xl-8">
          <h4 title="04">自然の豊かさ、都市と農村をむすぶ活力あふれる<br>元気なまち「ていね」</h4>
          <ul class="idea-ul">
            <li>食の安全安心、地域をつなぐ食育・食農教育などの取り組み推進。</li>
            <li>風水雪害・地震など、あらゆる災害に負けない防災・減災のまちづくり。</li>
            <li>地域資源を活かし、社会経済が循環する産業政策の確立。</li>
          </ul>
        </div>
      </li>
    </ul>
  </section>

  <section id="profile">
    <h3 title="profile">プロフィール</h3>
    <div class="row">
      <div class="col-xl-4">
        <figure class="vertical">
          <img src="<?= img('profile.png'); ?>" class="img-fluid d-none d-xl-block" alt="清水たかひろ">
          <img src="<?= img('profile_sp.jpg'); ?>" class="img-fluid d-block d-xl-none" alt="清水たかひろ">
        </figure>
      </div>
      <div class="col-xl-8">
        <dl class="profile-list">
          <dt>1975年 2月4日</dt>
          <dd>昭和50年、斜里郡清里町で農業を営む両親の長男として 生まれる。<br>高校卒業までスピードスケートと陸上競技で心身を鍛える。</dd>
          <dt>1995年 3月</dt>
          <dd>北海道立農業大学校を卒業(畑作園芸経営学科)</dd>
          <dt>1996年 3月</dt>
          <dd>幅広い農業知識と国際的感覚を身につけるためドイツ連邦共和国（ヘッセン州ノイホフ）に1年間の農業留学。帰国後、本籍地で農業に従事。</dd>
          <dt>2000年 12月</dt>
          <dd>妻と結婚</dd>
          <dt>2008年 9月</dt>
          <dd>農業団体「北見地区農民連盟」の専従職員として勤務。</dd>
          <dt>2018年 4月</dt>
          <dd>参議院議員徳永エリ北海道事務所で公設秘書として勤務。 <br>4年半、北海道内各地で徳永議員に帯同し、地域の多岐にわたる課題 解決を中心に議員間の連携や選挙応援などに奔走することで政治活動を学ぶ。
          </dd>
          <dt>2022年 10月15日</dt>
          <dd>立憲民主党ていね支部副代表として活動を開始。</dd>
        </dl>
      </div>
    </div>
  </section>

  <section id="message" class="width-max bg-light">
    <h3 title="message">応援メッセージ</h3>
    <div class="swiper messageSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="content-wrap">
            <figure class="figure-clear">
              <img src="<?= img('tokunagaeri.jpg'); ?>" class="rounded-circle" width="100" height="100" alt="">
              <figcaption>徳永エリ / 参議院議員</figcaption>
            </figure>
            <blockquote>
              <p>私の秘書として4年半、清水くんは、日本一広い、参議院北海道選挙区をともに走り回り、どんなにきついスケジュールでも不満一つ言わすに私を支えてくれました。真面目で努力家、何事にも熱心に取り組みま
                す。これからは、その経験と行動力を手稲区の皆さんのために活かし、地域の課題解決につなげてくれるものと確信しています。国政と道政、連携して働ける日を楽しみにしていま!</p>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-wrap">
            <figure class="figure-clear">
              <img src="<?= img('ootsukikureba.jpg'); ?>" class="rounded-circle" width="100" height="100" alt="">
              <figcaption>おおつき紅葉 / 参議院議員</figcaption>
            </figure>
            <blockquote>
              <p>一つ一つの仕事に対して真正面から向き合い結果を出すまで取り組む努力ができる誠実なお人柄。４年半の参議院議員徳永エリさんの秘書経験を活かし、共に活力あふれる元気な社会を目指し、頑張りましょう。</p>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-wrap">
            <figure class="figure-clear">
              <img src="<?= img('onomasami.jpg'); ?>" class="rounded-circle" width="100" height="100" alt="">
              <figcaption>おの正美 / 札幌市議会議員</figcaption>
            </figure>
            <blockquote>
              <p>誰に対しても変わらず丁寧に対応している清水たかひろさん
                一度決めたことは達成するまで粘り強く行動する姿勢に、いつも感服させられます。
                一緒に手稲区民の皆様ために働けることを切望しています。
                頑張れ！！　清水たかひろ</p>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-wrap">
            <figure class="figure-clear">
              <img src="<?= img('fukushikatsu.jpg'); ?>" class="rounded-circle" width="100" height="100" alt="">
              <figcaption>福士 勝 / 前・札幌市議会議員</figcaption>
            </figure>
            <blockquote>
              <p>自分の苦手分野でも周囲の協力を得て、あきらめず粘り強くお仕事を遂行していく姿勢が強く印象にあります。
                また、徳永エリ参議委員秘書時代は、持ち前の体力と行動力も活かし精力的に活動していました。
                地域と道政のかけ橋として共に考えよう！！</p>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="swiper-pagination swiper-pagination-custom swiper-pagination-message"></div>
    </div>
  </section>

  <section id="paper">
    <h3 title="newsletter">広報誌</h3>
    <p class="text-md-center">清水たかひろは「須田道議の想いをしつかりと受け継ぎながら、<br>これまでの経験を活かして手稲区民のみなさんと 緒に新しい政治をつくっていきたい」と抱負を述べていきます。</p>
    <div class="d-flex justify-content-center mt-5">
      <?= do_shortcode('[3d-flip-book mode="thumbnail-lightbox" cols="3" tax="3" title="true"][/3d-flip-book]'); ?>
    </div>

  </section>

</div>