<section>
    <div class="container">
        <h3>お知らせ</h3>
        <div class="row row-cols-2 row-cols-md-4 g-4">
            <?php
            $obj = get_postByTax('post', 4, 'category', 'all');
            ?>
            <div class="col">
                <?php
                foreach ($obj as $post) {
                ?>
                    <a href="<?php the_permalink($post); ?>">
                        <img src="<?= $thumb; ?>">
                        <div class="card-body px-0">
                            <?= the_cLable(); ?>
                            <small><?= tm_date('Y/m/d'); ?></small>
                            <h6><?= $post->post_title; ?></h6>
                        </div>
                    </a>
            </div>
        <?php
                }
                wp_reset_query();
        ?>
        </div>
        <a href="/c/all" class="btn btn-primary">全件を見る</a>
    </div>
</section>