<!DOCTYPE html>
<html lang="ja">

<head>
  <?= get_option('admin_header') ?>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo(); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= uri(); ?>/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= uri(); ?>/assets/css/styles.min.css" />
</head>

<body>
  <?= get_option('admin_body'); ?>
  <?php require('block/loading.php'); ?>
  <header>
    <?php require('block/nav.php'); ?>
  </header>