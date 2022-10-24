<div class="sidebar">
	<ul class="list-group list-group-flush">
		<li class="list-group-item title">カテゴリー</li>
		<?php get_category_list(); ?>
	</ul>
	<ul class="list-group list-group-flush">
		<li class="list-group-item title">タグ</li>
		<?php get_tags_list(); ?>
	</ul>
	<ul class="list-group list-group-flush">
		<li class="list-group-item title">アーカイブ</li>
		<?php get_archive_list(); ?>
	</ul>
</div>