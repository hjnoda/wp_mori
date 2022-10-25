<?php get_header(); ?>
<main class="page">
  <div>
    <?php require('block/common/title.php'); ?>
  </div>
  <section>
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
  </section>
</main>
<?php get_footer(); ?>