<!DOCTYPE html>
<html lang="ja">

<head>
  <?= get_option('admin_header') ?>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo(); ?></title>
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= uri(); ?>/assets/bundle/swiper8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?= uri(); ?>/assets/bundle/bootstrap5/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= uri(); ?>/assets/css/styles.min.css" />
</head>

<body>
  <?= get_option('admin_body'); ?>
  <?php require('block/common/nav.php'); ?>
  <main class="<?php if(is_home()) {echo 'index';} else {echo 'page';}?>">