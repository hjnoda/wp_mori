<?php require('block/common/footer.php'); ?>
<?php wp_footer(); ?>
<script src="<?= uri(); ?>/assets/bundle/bootstrap5/bootstrap.bundle.min.js"></script>
<script src="<?= uri(); ?>/assets/bundle/swiper8/swiper-bundle.min.js"></script>
<script src="<?= uri(); ?>/assets/js/common.js"></script>
<?php if(is_home()) { ?>
<script src="<?= uri(); ?>/assets/js/index.js"></script>
<?php } else { ?>
<script src="<?= uri(); ?>/assets/js/page.js"></script>
<?php } ?>
<?= get_option('admin_footer'); ?>
</body>

</html>