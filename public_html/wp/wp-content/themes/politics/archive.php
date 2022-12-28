<?php
get_header();
?>

<?php require('block/common/title.php'); ?>
<div class="post-area">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
                $cat = get_cat($post->ID);
            ?>
        <a href="<?php the_permalink($post); ?>" class="news-link d-flex mt-3">
          <img src="<?= get_eye_image($post->ID); ?>" class="img-fluid d-none d-md-inline"
            alt="<?= $post->post_title; ?>" style="aspect-ratio: 16/10; object-fit:cover;">
          <div class="news-overlay"></div>
          <div class="news-content w-100">
            <div class="news-date"><span class="news-cat"><?= $cat->name; ?></span><span
                class="divider">|</span><?= tm_date('Y/m/d'); ?></div>
            <div class="news-title"><?= $post->post_title; ?></div>
          </div>
        </a>
        <?php
            endwhile;
            endif;
          ?>
        <div class="text-center"><?php bootstrap_pagination(); ?></div>
      </div>
      <div class="col-md-3 mt-5 mt-md-0">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>