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
            <p>新たな世代で政治を変える<br>手稲区と道政をつなぐ</p>
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
      <figure><img src="<?= img('greeting.jpg'); ?>" alt=""></figure>
      <div class="layer-text">
        <p class="text-start text-md-center text-xl-start">
          みなさんの声を道政に届けていくため、<br>手稲区が直面している様々な課題にしっかりと向き合います。<br>手稲区が持っている素晴らしい財産、魅力を存分に活かし、<br>活力あふれる元気なまち「ていね」の未来実現に向けて、<br>自らのこれまでの経験と持てる力の全てを注ぎ、全力を尽くす決意です。<br>一緒に未来を創りましょう！
        </p>
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
    <h3 title="idea">めざすこと</h3>
    <ul class="idea-list">
      <li class="row">
        <div class="col-xl-4 order-xl-last">
          <figure class="ms-xl-5"><img src="<?= img('idea1.jpg'); ?>" alt=""></figure>
        </div>
        <div class="col-xl-8">
          <h4 title="01">みなさんの笑顔が輝く元気なまち「ていね」</h4>
          <p>
            子どもたちが健やかに笑顔で暮らせるまち、子育てがしやすいまちは、人々の心が通じる思いやりに満ちたまちであると思います。それは、高齢者や障がいのある方などにとっても優しく、ぬくもりあるまちです。みなさんの笑顔が輝く元気なまち「ていね」をめざします。
          </p>
        </div>
      </li>
      <li class="row">
        <div class="col-xl-4">
          <figure class="me-xl-5"><img src="<?= img('idea2.jpg'); ?>" alt=""></figure>
        </div>
        <div class="col-xl-8">
          <h4 title="02">自然の豊かさを活かした<br>魅力あふれる元気なまち「ていね」</h4>
          <p>
            手稲区は市内でも極めて自然に恵まれた地域です。また、豊かな景観が四季折々の表情を見せる魅力あふれるまちであり、道都札幌の発展には欠かすことのできない潜在性を秘めた地域です。食と緑を守る政策を道政に届けるため、自然の豊かさを活かした魅力あふれる元気なまち「ていね」をめざします。
          </p>
        </div>
      </li>
      <li class="row row-eq-height">
        <div class="col-xl-4 order-xl-last">
          <figure class="ms-xl-5"><img src="<?= img('idea3.jpg'); ?>" alt=""></figure>
        </div>
        <div class="col-xl-8">
          <h4 title="03">産業を軸に資源と経済が循環する<br>活力あふれる元気なまち「ていね」</h4>
          <p>長引くコロナ禍や円安の影響などにより、地域の社会経済・産業が深く疲弊し傷んでしまいました 。商店街や地元産業の活性化を基軸とした地域資源と経済が循環する活力あふれる元気なまち「ていね」をめざします。</p>
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
          <dd>北海道立農業大学校を卒業</dd>
          <dt>1996年 3月</dt>
          <dd>幅広い 農業知誨と国際的感覚を身につけるためドイツ連邦共和国（ヘッセン州ノイホフ）に1年間の農業留学。帰国後、本籍地で農業に従事。</dd>
          <dt>2000年 12月</dt>
          <dd>妻と結婚（現在娘19歳息子16歳）</dd>
          <dt>2008年 9月</dt>
          <dd>農業団体「北見地区農民連盟」の専従睦員として勤務。</dd>
          <dt>2018年 4月</dt>
          <dd>参議院議員徳永エリ北海道事務所で公設秘書として勤務。 <br>4年半、北海道内各地で徳永議員に帯同し、地域の多岐にわたる課題 解決を中心に議員間の連携や選挙応援などに奔走することで政治活 動を学ぶ。
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
              <img src="//picsum.photos/100/100?random" class="rounded-circle" width="100" height="100" alt="">
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
              <img src="//picsum.photos/100/100?random" class="rounded-circle" width="100" height="100" alt="">
              <figcaption>おおつき紅葉 / 参議院議員</figcaption>
            </figure>
            <blockquote>
              <p>私も全力で応援します。</p>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-wrap">
            <figure class="figure-clear">
              <img src="//picsum.photos/100/100?random" class="rounded-circle" width="100" height="100" alt="">
              <figcaption>おの正美 / 札幌市議会議員</figcaption>
            </figure>
            <blockquote>
              <p>共に頑張ります！</p>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-wrap">
            <figure class="figure-clear">
              <img src="//picsum.photos/100/100?random" class="rounded-circle" width="100" height="100" alt="">
              <figcaption>福士 勝 / 前・札幌市議会議員</figcaption>
            </figure>
            <blockquote>
              <p>共に頑張ります！</p>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="swiper-pagination swiper-pagination-custom swiper-pagination-message"></div>
    </div>
  </section>

  <section id="paper">
    <h3 title="newsletter">ニュースレター</h3>
    <div class="row row-cols-1 row-cols-lg-2 row-eq-height">
      <div class="col justify-content-center align-items-center">
        <?= do_shortcode('[3d-flip-book mode="thumbnail-lightbox" id="13" title="true" thumbnail="/wp/wp-content/themes/politics/assets/img/newsletter-thumb.jpg"][/3d-flip-book]'); ?>
      </div>
      <div class="col">
        <p class="mt-4 mt-lg-0">
          立憲民主党は、清水たかひろを須田靖子道議の後継として北海道議会議員選挙(手稲区)の公認候補予定者に決定しました。須田道議は「働く仲間の労働条件向上、安心な医療体制作り、環境問題」などの実現に向け、市民自治の向上や福祉のまちづくりに長年取り組んできました。
        </p>
        <p>清水たかひろは「須田道議の想いをしつかりと受け継ぎながら、これまでの経験を活かして手稲区民のみなさんと 緒に新しい政治をつくっていきたい」と抱負を述べていきます。</p>
      </div>
    </div>

  </section>

</div>