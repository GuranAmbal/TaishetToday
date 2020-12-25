
<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
	<div class="aside-widget">
							<div class="section-title">
								<h2>Категории</h2>
							</div>
							<div class="category-widget">
								<ul>
								<?php foreach($category as $categories):?>
									
									<li><a href="<?=Url::toRoute(['site/history-category', 'id'=>$categories->id]);?>" class="cat-<?=$categories->id?>"><?=$categories->title?><span><?=$categories->getArticles()->count()?></span></a></li>
								<?php endforeach?>
								
									
								</ul>
							</div>
						</div>



