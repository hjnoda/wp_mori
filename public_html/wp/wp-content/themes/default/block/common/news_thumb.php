<!-- bs5 card grid base -->
<section class="section section-y">
    <div class="container col-xxl-8">
        <h3 id="js-news1" class="anchor">サムネールお知らせ</h3>
        <div class="news row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php
            $new = get_postByTax('post', 4, 'category', 'all');
            foreach ($new as $post) {
            ?>
                <div class="col news-item js-sr-interval">
                    <a href="<?= the_permalink($post); ?>" class="news__link">
                        <div class="scale news__eye">
                            <img src="<?= get_eye_image($post->ID); ?>" class="img-fluid news__eye-img" />
                        </div>
                        <div class="news__label">
                            <span class="news__label-cat news__label-cat--solid <?= the_cLableSlug(); ?>"><?= the_cLable(); ?></span>
                            <span class="news__label-date news__label-date--gray"><?= tm_date('Y/m/d'); ?></span>
                        </div>
                        <div class="news__content">
                            <p class="news__content-title"><?= $post->post_title; ?></p>
                            <p class="news__content-text">
                            <?php
                            the_strlen($post->post_content, 60); ?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php }
            wp_reset_query();
            ?>
        </div>
        <div class="btn-center">
            <button class="btn btn-default" href="/c/all">全件を見る</button>
        </div>
    </div>
</section>

<!-- swiper base -->
<section>
    <div class="container col-xxl-8">
        <h3>サムネールお知らせ</h3>
        <p>投稿4件出力</p>
        <ul>
            <li>スマホで2件スライド</li>
            <li>786~997: 3件スライド,active以外薄く</li>
            <li>998~ 4件スライドなし</li>
        </ul>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                $new = get_postByTax('post', 4, 'category', 'all');
                foreach ($new as $post) {
                ?>
                <div class="swiper-slide js-sr-interval">
                    <a href="<?= the_permalink($post); ?>" class="news__link">
                        <div class="scale news__eye">
                            <img src="<?= get_eye_image($post->ID); ?>" class="img-fluid news__eye-img" />
                        </div>
                        <div class="news__label">
                            <span class="news__label-cat news__label-cat--solid <?= the_cLableSlug(); ?>"><?= the_cLable(); ?></span>
                            <span class="news__label-date news__label-date--gray"><?= tm_date('Y/m/d'); ?></span>
                        </div>
                        <div class="news__content">
                            <p class="news__content-title"><?= $post->post_title; ?></p>
                            <p class="news__content-text">
                            <?php
                            the_strlen($post->post_content, 40); ?>
                            </p>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="swiper-paginations d-flex justify-content-center my-4 d-lg-none"></div>
    </div>
</section>

<!-- no thumbnail -->
<section>
    <div class="container container-y col-xxl-8 news-list">
    <h3 id="js-news2">リストお知らせ</h3>
        <?php
        $new = get_postByTax('post', 5, 'category', 'all');
        foreach ($new as $post) {
        ?>
            <div class="news-item js-sr-interval">
                <a href="<?php the_permalink($post); ?>" class="news-link">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="news__label">
                                <span class="news__label-cat news__label-cat--solid <?= the_cLableSlug(); ?>"><?= the_cLable(); ?></span>
                                <span class="news__label-date news__label-date--gray"><?= tm_date('Y/m/d'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="news__content">
                                <p class="news__content-title"><?= $post->post_title; ?></p>
                                <p class="news__content-text">
                                    <?php the_strlen($post->post_content, 50); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php }
        wp_reset_query();
        ?>
        <div class="btn-center mt-5">
            <button class="btn btn-default" href="/c/all">全件を見る</button>
        </div>
    </div>


</section>

