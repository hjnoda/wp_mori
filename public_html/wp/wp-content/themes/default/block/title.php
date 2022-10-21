<?php
$page = get_post(get_the_ID())->post_name;
$slug = $post->post_name;
?>
<div class="page-title">
  <div class="boxani-wrap">
    <div id="boxAni" class="container"></div>
  </div>
  <div class="pan breadcrumb" typeof="BreadcrumbList">
    <div class="container">
      <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>  
  <div class="container title-wrap">
    <?php if (is_page()) { ?>
      <h2><?= $slug; ?><span><?= the_title(); ?></span></h2>
    <?php } elseif (is_category()) { ?>
      <?php $cat = get_cat($post->ID); ?>
      <h2><?= $cat->slug; ?><span><?= $cat->name; ?></span></h2>
    <?php } elseif (is_search()) { ?>
      <h2>検索結果</h2>
    <?php } elseif(is_single()) { ?>
      <span><?= $cat->name; ?></span><h2 class="single-title"><?= the_title(); ?></h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <h2>Archives<span><?php the_time('Y年'); ?>の記事一覧</span></h2>
    <?php } ?>
  </div>

</div>