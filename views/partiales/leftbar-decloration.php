<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<div class="aside-widget">
	<div class="section-title">
		<h2>Последние объявления</h2>
	</div>
	<?php foreach ($recent as $article) : ?>
		<div class="post post-widget">
			<a class="post-img" href="<?= Url::toRoute(['site/view-decloration', 'id' => $article->id]); ?>"><img src="<?= $article->getImage(); ?>" alt=""></a>
			<div class="post-body">
				<h3 class="post-title"><a href="<?= Url::toRoute(['site/view-decloration', 'id' => $article->id]); ?>"><?= $article->title; ?></a></h3>
			</div>
		</div>
	<?php endforeach ?>

</div>