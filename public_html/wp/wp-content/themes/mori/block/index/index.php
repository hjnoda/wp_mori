<div class="pr">
  <div class="swiper prSwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-img" style="background:url(<?= uri(); ?>/assets/img/pr1.webp) no-repeat center bottom/ cover;"
          loading="lazy">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img" style="background:url(<?= uri(); ?>/assets/img/pr2.webp) no-repeat center / cover;"
          loading="lazy">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img" style="background:url(<?= uri(); ?>/assets/img/pr3.webp) no-repeat center / cover;"
          loading="lazy">
        </div>
      </div>
      <div class="pr-catch">
        <div class="container">
          <figure class="catch-img figure-clear">
            <img src="<?= img('pr.webp'); ?>" class="pr-img" alt="森きよのり" loading="lazy">
          </figure>
          <div class="catch-text text-center">
            <img src="<?= img('rikken.svg'); ?>" width="150" class="d-none d-md-block mx-auto" alt="立憲民主党ロゴ">
            <h2><ruby>森<rt class="fs-4">もり</rt></ruby><span class="ps-4">きよのり</span></h2>
            <p>あなたの<br>「声」をつなげて創る<br>まちづくり</p>
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
        $obj = get_postsByType('post', 5);
        foreach ($obj as $post) {
        $cat = get_cat($post->ID);
      ?>
        <div class="swiper-slide">
          <a href="<?php the_permalink($post); ?>" class="news-link">
            <div class="news-thumb">
              <div class="news-cat"><?= $cat->name; ?></div>
              <figure>
                <img src="<?= get_eye_image($post->ID); ?>" class="img-fluid" alt="<?= $post->post_title; ?>"
                  loading="lazy">
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
      <a href="/newslist.html" class="btn btn-more btn-primary mx-auto">全件を見る</a>
    </div>
  </section>

  <section id="greeting">
    <h3 title="greeting">ご挨拶</h3>
    <div class="layer-l">
      <div id="carouselGreeting" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <figure><img src="<?= img('greeting1.webp'); ?>" class="d-block w-100" alt="森きよのりからのご挨拶" loading="lazy">
            </figure>
          </div>
          <div class="carousel-item">
            <figure><img src="<?= img('greeting2.webp'); ?>" class="d-block w-100" alt="森きよのりからのご挨拶" loading="lazy">
            </figure>
          </div>
          <div class="carousel-item">
            <figure><img src="<?= img('greeting3.webp'); ?>" class="d-block w-100" alt="森きよのりからのご挨拶" loading="lazy">
            </figure>
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
          <h4 class="text-center">あなたの<br class="d-block d-md-none"><span class="text-dark">「声」をつなげて</span>創る<br>まちづくり
          </h4>
          <p class="mt-4">
            ラジオは、パーソナリティーとリスナーが<span class="text-dark fs-5">コミュニケーションを瞬時に藁くことができる双方向で声を上げるメディア</span>です。
            このユニークなメディアに私は愛情をもっています。ラジオは、リスナーからの1通のメールで化学変化が起こります。
          </p>
          <p>
            リスナーから寄せられる声は、今日1日がんばりたいので応援してほしい、恋愛相談、法律上のトラブル対処法など千差万別です。
            行政や政治に対して疑問を持っている声や、将来に対する不安を相談するものも数多くありました。
            わたしはこうした思いを代弁するだけで、自分にももっとできることがあるのではないだろうかと自問し、悩み続けていました。
          </p>
          <p>
            導き出した答えが、<span class="text-dark fs-5">リスナーが感じている声を札幌市政に直接届けたい</span>というものでした。
            ラジオを通して25年間、多くのリスナーとの会話を重ねて、<span class="text-dark fs-5">実生活では大きな声を上げることができない人に寄り添い、声なき声に耳を傾けることの大切さ</span>を学びました。
          </p>
          <p>
            声なき声を言葉にすることを鍛えてき た経験を生かし、<span class="text-dark fs-5">行政、議会、市民の双方向による街づくりを進めていきたい。</span>
            「森きよのり」と一緒に新しい札幌づく りに挑戦しませんか。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="idea">
    <h3 title="idea"><span class="fs-4">一緒に<span class="text-dark">新しい札幌づくり</span>に挑戦しましょう！</span>
    </h3>
    <ul class="idea-list">
      <li class="row">
        <div class="col-xl-4 order-xl-last">
          <figure class="ms-xl-5"><img src="<?= img('idea1.webp'); ?>" class="img-fluid" alt="いつまでも健康に" loading="lazy">
          </figure>
        </div>
        <div class="col-xl-8">
          <h4 title="01">いつまでも健康に</h4>
          <p>道民の健康向上を目的とした「北海道特定健診受診アンバサダー」を拝命しています。特定健診は生 活習慣病等の早期発見に役立ち、健康寿命を延ば す対策として有益です。多くの市民が安心して受診 できる取組みを進めます。
          </p>
        </div>
      </li>
      <li class="row">
        <div class="col-xl-4">
          <figure class="me-xl-5"><img src="<?= img('idea2.webp'); ?>" class="img-fluid" alt="誰でも歩ける街を" loading="lazy">
          </figure>
        </div>
        <div class="col-xl-8">
          <h4 title="02">誰でも歩ける街を</h4>
          <p>健康づくりには定期的な運動が効果的ですが、最も手軽なものがウォーキングです。札幌は魅力溢れ歩きたくなる景観も多くありますが、悪天候や冬期間でも屋根がある歩行空間を整備し、市民や観光客で溢れる街をつくります。
          </p>
        </div>
      </li>
      <li class="row row-eq-height">
        <div class="col-xl-4 order-xl-last">
          <figure class="ms-xl-5"><img src="<?= img('idea3.webp'); ?>" class="img-fluid" alt="命と暮らしを守る" loading="lazy">
          </figure>
        </div>
        <div class="col-xl-8">
          <h4 title="03">命と暮らしを守る</h4>
          <p>国内外で地震や大雨などの災害が頻繁に発生しています。災害時の避難スペースの確保や避難所の安定的な運営の必要性を「防災士」の立場から痛感しています。災害に強いまちと緊急支援体制の整備を積極的に進めていきます。
          </p>
        </div>
      </li>
      <li class="row">
        <div class="col-xl-4">
          <figure class="me-xl-5"><img src="<?= img('idea4.webp'); ?>" class="img-fluid" alt="安心できる子育て環境"
              loading="lazy"></figure>
        </div>
        <div class="col-xl-8">
          <h4 title="04">安心できる子育て環境</h4>
          <p>これまで経験したことのない少子高齢化社会を迎えます。 出産や子育てを希望する全ての人が、安心して子どもを産 み育てることのできる環境の整備が必要です。給食費や子
            ども医療費の無料化などを実現し、札幌の将来を担う子
            どもたちが安心して育つ環境をつくります。
          </p>
        </div>
      </li>
    </ul>
  </section>

  <section id="profile">
    <h3 title="profile">プロフィール</h3>
    <div class="row">
      <div class="col-xl-4">
        <figure class="vertical">
          <img src="<?= img('profile.webp'); ?>" class="img-fluid d-none d-xl-block" alt="森きよのり" loading="lazy">
          <img src="<?= img('profile_sp.webp'); ?>" class="img-fluid d-block d-xl-none" alt="森きよのり" loading="lazy">
        </figure>
      </div>
      <div class="col-xl-8">
        <div class="ms-5 fs-3 text-primary">森 基誉則<small>（もり きよのり）</small></div>
        <dl class="profile-list">
          <dt>1975年3月</dt>
          <dd>札幌市生まれ。 父親の転勤に伴い、道内各地で幼少期を過ごしました。</dd>
          <dt>1994年3月〜</dt>
          <dd>札幌手稲高校卒業、北海学園大学経済学部経済学科入学。<br>大学在学中にラジオでパーソナリティを始める。</dd>
          <dt>1999年4月〜</dt>
          <dd>大学卒業後、ラジオを主戦場に、道内のテレビやイベントで司会やレポ
            トを担当しました。<br>ラジオではAIR-G'で15年ほど平日夕方のプログラムを担当した後、<br>「朝の顔」ならぬ「朝の声」として平日の生番組「朝MORi」を5年間続けました。</dd>
          <dt>2023年１月</dt>
          <dd>札幌市議会議員選挙（厚別区）の候補予定者として立憲民主党の公認決定。</dd>
        </dl>
        <div class="ms-md-5 mt-4 border border-primary border-2 p-4">
          <h3 class="text-start mb-2">最近のラジオ番組出演（2023年1月末まで）</h3>
          <ul class="mb-0">
            <li>朝MORi（月-金曜日6:00 - 9:00）</li>
            <li>夜MORi（月曜日19:00ー19:30）</li>
          </ul>
        </div>
        <div class="ms-md-5 border border-primary border-2 p-4 mt-3">
          <h3 class="text-start mb-2">過去のラジオ番組</h3>
          <ul>
            <li>Dive into The Night</li>
            <li>T.G.I.F.</li>
            <li>Bum! Bul! Beat!</li>
            <li>scratch!</li>
            <li>MOXY</li>
            <li>ASAHI BEER presents NIKKA Bottoms up! CONNECTION（金曜日17:50 - 18:00）</li>
          </ul>
          <h3 class="text-start mb-2">過去のテレビ番組出演</h3>
          <ul>
            <li>ともだっち〜ず（北海道文化放送)</li>
            <li>土曜えき☆スタUP（北海道文化放送) 等</li>
          </ul>
          <h3 class="text-start mb-2">ナレーション</h3>
          <ul class="mb-0">
            <li>アサヒビール「ブラックニッカ」CM 等</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="message" class="width-max bg-light">
    <h3 title="message">応援メッセージ</h3>
    <div class="swiper messageSwiper pb-5">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="content-wrap">
            <figure class="figure-clear">
              <img src="<?= img('oen2.webp'); ?>" class="rounded-circle" width="100" height="100" alt="勝部賢志">
              <figcaption>勝部賢志 / 参議院議員</figcaption>
            </figure>
            <!--<blockquote>
              <p>国政と連携して、厚別区の皆様ために一緒に働ける日を楽しみにしています！！<br />森きよのりを全面バックアップします。</p>
            </blockquote>-->
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-wrap">
            <figure class="figure-clear">
              <img src="<?= img('oen3.webp'); ?>" class="rounded-circle" width="100" height="100" alt="菅原和忠">
              <figcaption>菅原和忠 / 道議会議員</figcaption>
            </figure>
            <!--<blockquote>
              <p>誰に対しても気さくに丁寧に対応する森きよのりさん。共に道政と連携し、札幌市民の皆様のために働けることを切望しています。<br />頑張れ　森きよのり！！</p>
            </blockquote>-->
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-wrap">
            <figure class="figure-clear">
              <img src="<?= img('oen1.webp'); ?>" class="rounded-circle" width="100" height="100" alt="池田まき">
              <figcaption>池田まき / 立憲民主党北海道第5区総支部代表</figcaption>
            </figure>
            <!--<blockquote>
              <p>ラジオパーソナリティーとしての25年間をフル活用して、共に活力あふれる元気な社会を目指し、頑張りましょう。</p>
            </blockquote>-->
          </div>
        </div>
      </div>
      <div class="swiper-pagination swiper-pagination-custom swiper-pagination-message"></div>
    </div>
  </section>

  <section id="paper">
    <div class="row">
      <div class="col-lg-6">
        <div class="sns-wrap">
          <h3 title="Twitter" class="text-center"><i class="bi bi-twitter pe-2"></i>ツイッター</h3>
          <a class="twitter-timeline" data-height="500" data-theme="light"
            href="https://twitter.com/KiyonoriMori?ref_src=twsrc%5Etfw">Tweets by KiyonoriMori</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="sns-wrap">
          <h3 title="newsletter" class="mt-5 mt-lg-0">広報誌</h3>
          <div class="d-flex justify-content-center mt-5">
            <?= do_shortcode('[3d-flip-book mode="thumbnail-lightbox" cols="3" tax="3" title="true"][/3d-flip-book]'); ?>
          </div>
        </div>
      </div>
      <!--
      <div class="col-12">
        <div class="sns-wrap">
          <h3 title="Instagram" class="text-center"><i class="bi bi-instagram pe-2"></i>インスタグラム</h3>
          insta
        </div>
      </div>
        -->
    </div>

  </section>
</div>