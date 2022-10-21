<?php $contents = (object) get_field('greetings_c', '210'); ?>

<section class="section section-light">
    <div class="container">
        <h3 class="index-h3">ご挨拶</h3>
        <div class="row d-flex align-items-center">
            <div class="col-md-5">
                <img src="<?= get_img_url($contents->img, 'full'); ?>" class="img-fluid d-block mx-auto" alt="理事長">
            </div>
            <div class="col-md-7">
                <h4 class="index-h4"><?= $contents->title; ?></h4>
                <p class="mt-4"><?= $contents->content; ?></p>
                <p class="mt-4">
                    <a href="<?= $contents->donate_url; ?>" class="btn btn-primary">
                    <i class='bx bxs-donate-heart bx-flashing mr-2'></i>寄付する</a>
                    <a href="<?= $contents->detail_url; ?>" class="btn btn-primary">もっと見る</a>
                </p>
            </div>
        </div>
    </div>
</section>