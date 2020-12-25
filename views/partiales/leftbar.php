
<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
	<!-- post widget -->
  <div class="aside-widget">
								<div class="section-title">
									<h2>Популярные статьи</h2>
								</div>
								<?php foreach($popular as $article):?>
								<div class="post post-widget">
									<a class="post-img" href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
									<div class="post-body">
										<h3 class="post-title"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= $article->title;?></a></h3>
									</div>
								</div>
								<?php endforeach?>

							</div>
							<!-- /post widget -->

							<!-- post widget -->
							<div class="aside-widget">
								<div class="section-title">
									<h2>Последние события</h2>
								</div>
								<?php foreach($recent as $article):?>
								<div class="post post-thumb">
									<a class="post-img" href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img class="recent__img" src="<?= $article->getImage();?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3" href="category.html"><?= $article->category->title;?></a>
											<span class="post-date"><?=$article->getDate();?></span>
										</div>
										<h3 class="post-title"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= $article->title;?></a></h3>
									</div>
								</div>
								<?php endforeach?>
							
							</div>



