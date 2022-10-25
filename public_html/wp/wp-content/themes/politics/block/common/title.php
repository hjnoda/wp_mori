<?php
$page = get_post(get_the_ID())->post_name;
$slug = $post->post_name;
?>
<div class="page-title">
  <div class="container">
    <div class="pan breadcrumb" typeof="BreadcrumbList">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
    <div class="title-data">
      <?php if (is_page()) { ?>
      <h2><span><?= strtoupper($slug); ?></span><?= the_title(); ?></h2>
      <?php } elseif (is_category()) { ?>
      <?php $cat = get_cat($post->ID); ?>
      <h2><span><?= $cat->slug; ?></span><?= $cat->name; ?></h2>
      <?php } elseif (is_search()) { ?>
      <h2>検索結果</h2>
      <?php } elseif (is_tag()) { ?>
      <h2><span>Tag</span><?= the_TagPmltoName(); ?></h2>
      <?php } elseif (is_single()) { ?>
      <h2 class="single-title"><span><?= $cat->slug; ?></span><?= $cat->name; ?></h2>
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <h2><span>Archives</span><?php the_time('Y年'); ?>の記事一覧</h2>
      <?php } ?>
    </div>
  </div>
</div>