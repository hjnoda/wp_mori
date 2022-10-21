<?php require('block/footer.php'); ?>
<?php require('block/popup.php'); ?>
<?php wp_footer(); ?>
  <script
    src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
    integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
    crossorigin="anonymous"></script>
  <script src="<?= uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
  <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
  <script src="https://unpkg.co/gsap@3/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="<?= uri(); ?>/assets/js/script.js"></script>
  <?php if(is_home()) { ?>
    <script src="<?= uri(); ?>/assets/js/index.js"></script>
  <?php } else { ?>
    <script>
      //page title background animation (https://codepen.io/porsake/pen/ZEyapXY)
      if(!navigator.userAgent.match(/(iPhone|iPod|Android.*Mobile)/i)) {
        setInterval(anim,500);
        function anim(){
        let y = document.createElement('div');
        let b = document.getElementById('boxAni');
        let bWidth = document.documentElement.clientWidth;
        let bHeight = document.documentElement.clientHeight;
        y.classList.add('box-node');
        y.style.width = '60px';
        y.style.height = '60px';
        let color = 'white';
        y.style.background = color;
        y.style.left = Math.random()*bWidth + 'px';
        y.style.top = Math.random()*bHeight / 2 + 'px';
        b.appendChild(y);
        setTimeout(() => {
          y.remove();
        }, 5000);
      }
      }
    </script>
    <?php } ?>
    <?= get_option('admin_footer'); ?>
</body>
</html>