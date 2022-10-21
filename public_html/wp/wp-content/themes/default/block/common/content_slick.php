<?php $content_slick = get_field('cslick_c', '210'); ?>

<section class="section section-dark fill"  style="background-image:url('<?= img("bgimg.jpg") ?>');" id="feature">
    <div class="container-fluid">
		<h3 class="index-h3 text-warning">酪農学園基金の種類</h3>
		<div class="row d-flex align-items-center">
			<div class="col-lg-6 p-0">
				<ul id="feature-slider-for">
					<?php foreach ($content_slick as $cslick) {
							$cslick = (object) $cslick;
							if ($cslick->title) { ?>
								<li class="slide-item"><img src="<?= get_img_url($cslick->img, 'full'); ?>" alt=""></li>
					<?php } } ?>
				</ul>
				<div>
					<div id="feature-slider-dot"></div>
				</div>
			</div>
			<div class="col-lg-6 p-0">
				<ul id="feature-slider-nav">
					<?php foreach ($content_slick as $cslick) {
						$cslick = (object) $cslick;
						if ($cslick->title) { ?>
							<li class="slide-item">
								<h4 class="index-h4 text-warning"><?= $cslick->title; ?></h4>
								<p class="slide-item-text"><?= $cslick->content; ?></p>
								<p>
									<a href="<?= $cslick->donate_url; ?>" class="btn btn-secondary">
									<i class='bx bxs-donate-heart bx-flashing mr-2'></i>寄付する</a>
									<a href="<?= $cslick->detail_url; ?>" class="btn btn-secondary">もっと見る</a>
								</p>
							</li>
					<?php } } ?>
				</ul>
			</div>
		</div>
	</div>
</section>