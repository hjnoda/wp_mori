<?php get_header();
  $cat = get_cat($post->ID);
?>

<main class="single">
  <div>
    <?php require('block/title.php'); ?>
  </div>
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="textarea mb-5">
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      </div>
    <?php endwhile;
    endif; ?>
    <?php
      $prevpost = get_adjacent_post(true, '', true); //前の記事
      $nextpost = get_adjacent_post(true, '', false); //次の記事
      if( $prevpost or $nextpost ){ ?>
      <ul class="pager">
        <?php if($prevpost) {
          echo '<li><a href="' . get_permalink($prevpost->ID) . '" class="d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16.061" height="30.707" viewBox="0 0 16.061 30.707">
            <path data-name="path316" d="M-4119.412-3930.515l-15.354-15.354,15.354-15.354.707.707-14.646,14.646,14.646,14.646Z" transform="translate(4134.766 3961.222)" fill="#707070"/>
          </svg>
          <div class="ps-3"><span class="pager-title">' . get_the_title($prevpost->ID) . '</span></div></a></li>';
        } else {
          echo '<li class="d-flex justify-content-center align-items-center"><span class="d-block text-muted small">前の記事がありません</span></li>';
        } ?>
        <li class="d-none d-md-block"><a href="/c/<?= $cat->slug; ?>" class="w-100 h-100 d-flex justify-content-center align-items-center">一覧に戻る</a></li>
        <?php if($nextpost) {
          echo '<li><a href="' . get_permalink($nextpost->ID) . '" class="d-flex align-items-center">
          <div class="ms-auto pe-3"><span class="pager-title">' . get_the_title($nextpost->ID) . '</span></div>
          <svg xmlns="http://www.w3.org/2000/svg" width="16.061" height="30.707" viewBox="0 0 16.061 30.707">
            <path data-name="path317" d="M-4133.705-3930.515l-.707-.707,14.646-14.646-14.646-14.646.707-.707,15.354,15.354Z" transform="translate(4134.412 3961.222)" fill="#707070"/>
          </svg>
          </a></li>'; 
        } else {
          echo '<li class="d-flex justify-content-center align-items-center"><span class="d-block text-muted small">次の記事がありません</span></li>';
        } ?>
      </ul>
    <?php } ?>
  </div>
</main>
<?php get_footer(); ?>