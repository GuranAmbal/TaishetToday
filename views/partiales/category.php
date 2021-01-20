<?php

use yii\helpers\Url;

?>
<div class="aside-widget">
	<div class="section-title">
		<?php if ($categoryName) : ?>
			<h2><?= $categoryName ?></h2>

		<?php else : ?>
			<h2>Категории</h2>
		<?php endif ?>
	</div>
	<div class="category-widget">
		<ul>

			<?php foreach ($category as $categories) : ?>

				<li><a href="<?= Url::toRoute(['site/event-category', 'id' => $categories->id]); ?>" class="cat-<?= $categories->id ?>"><?= $categories->title ?><span><?= $categories->getArticles()->count() ?></span></a></li>
			<?php endforeach ?>


		</ul>
	</div>
</div>