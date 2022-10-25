<?php get_header();
  $cat = get_cat($post->ID);
?>

<main class="single">
  <?php require('block/common/title.php'); ?>

  <div class="post-area">
    <div class="container">
      <p class="small text-muted"><?= tm_date('Y/m/d'); ?></p>
      <h3><?php the_title(); ?></h3>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="textarea mb-5">
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      </div>
      <?php endwhile;
      endif; ?>
      <div class="pager text-center">
        <a href="/c/news" class="btn btn-more btn-primary">一覧に戻る</a>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
</main>
<?php get_footer(); ?>