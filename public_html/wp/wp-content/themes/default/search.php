<?php
get_header();
$cur_url = $_SERVER['REQUEST_URI'];
$cur = explode("/", $cur_url);
switch ($cur[2]) {
  case "all":
    $eng_name = 'News';
    $title = '新着情報';
    break;
  case "news":
    $eng_name = 'News';
    $title = 'お知らせ';
    break;
  case "report":
    $eng_name = 'Report';
    $title = '活動報告';
    break;
}
?>

<main class="page">
  <section>
    <?php require('block/title.php'); ?>
  </section>

  <section id="searchbox">
    <div class="container">
      <!-- <h6 class="h4 text-center my-4">検索</h6> -->
      <div class="lead">
        <form class="d-block d-md-flex col-md-8 mx-auto" action="/" method="get">
          <input class="form-control d-block d-md-flex me-2" name="s" type="search" placeholder="Search" aria-label="Search" style="height: 46px;" value="<?= $_GET['s']; ?>">
          <button type="submit" class="ml-md-3 d-md-blex btn btn-primary">検索</button>
        </form>
      </div>
    </div>
  </section>

  <section class="section">

    <div class="container container-max-lg">
      <?php
      if (have_posts()) {
        while (have_posts()) : the_post();
          $cat = get_cat($post->ID);
      ?>
          <dl class="news-list row">
            <a href="<?php the_permalink($post); ?>" class="text-decoration-none">
              <dd class="col mt-3 mt-md-0"><h5><?= $post->post_title; ?></h5>
              <p class="text-muted small"><?php the_excerpt(); ?></p>
            </a>
          </dd>
          </dl>
        <?php endwhile; ?>
      <?php } else { ?>
      <div class="text-center border p-5">検索結果が存在しません。</div>
      <?php } ?>
    </div>
    <div class="text-center"><?php bootstrap_pagination_D(); ?></div>
  </section>
</main>
<?php get_footer(); ?>