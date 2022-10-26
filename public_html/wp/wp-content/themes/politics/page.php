<?php get_header(); ?>
<?php require('block/common/title.php'); ?>
<div class="post-area">
  <div class="container">
    <?php
    if (have_posts()) {
      while (have_posts()) : the_post();
        if ($post->post_content) {
          the_content('<p class="serif">Read the rest of this page &raquo;</p>');
        } else {
    ?>
    <?php
        }
      endwhile;
    }
    ?>
  </div>
</div>
<?php get_footer(); ?>