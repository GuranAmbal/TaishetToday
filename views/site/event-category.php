<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = $category->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $category->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $category->description]);

?>

<!-- Page Header -->
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<ul class="page-header-breadcrumb">
					<li><a href="<?= Url::toRoute(['site/index']); ?>">Главная</a></li>

					<li><?= $category->title ?></li>
				</ul>
				<h1><?= $category->title ?></h1>
			</div>
		</div>
	</div>
</div>
<!-- /Page Header -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<div class="row" id="categorys">
					<?php
					$i = 0;
					foreach ($articles as $article) :
						$i++;
					?>
						<?php if ($i == 1) : ?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><img class="post__main-img" src="<?= $article->getImage(); ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?= $article->category->id ?>" href="<?= Url::toRoute(['site/event-category', 'id' => $article->category->id]); ?>"><?= $article->category->title ?></a>
											<span class="post-date"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" viewBox="0 0 576 512" style="
width: 15px;
height: 11px;
">
													<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
												</svg><?= $article->viewed; ?></span>
										</div>
										<h3 class="post-title"><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->title ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
						<?php endif ?>
						<?php if (2 <= $i && $i <= 3) : ?>
							<!-- post -->
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><img class="post__next-img" src="<?= $article->getImage(); ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?= $article->category->id ?>" href="<?= Url::toRoute(['site/event-category', 'id' => $article->category->id]); ?>"><?= $article->category->title ?></a>
											<span class="post-date"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" viewBox="0 0 576 512" style="
width: 15px;
height: 11px;
">
													<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
												</svg><?= $article->viewed; ?></span>
										</div>
										<h3 class="post-title"><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->title ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->

						<?php endif ?>
						<?php if ($i == 3) : ?>
							<div class="clearfix visible-md visible-lg"></div>
							<!-- ad -->
							<div class="col-md-12">
								<div class="section-row">
									<a href="#">
										<img class="img-responsive center-block" src="./img/ad-2.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- ad -->
						<?php endif ?>
						<?php if ($i > 3) : ?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><img class="post__last-img" src="<?= $article->getImage(); ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="<?= Url::toRoute(['site/event-category', 'id' => $article->category->id]); ?>"><?= $article->category->title ?></a>
											<span class="post-date"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" viewBox="0 0 576 512" style="
width: 15px;
height: 11px;
">
													<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
												</svg><?= $article->viewed; ?></span>
										</div>
										<h3 class="post-title"><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->title ?></a></h3>
										<p><?= $article->description ?></p>
									</div>
								</div>
							</div>
							<!-- /post -->
						<?php endif ?>
					<?php endforeach ?>

					<div class="col-md-12">
						<div class="section-row">
							<button class="primary-button center-block" onclick="seeAllCategorys()">Загрузить еще</button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<!-- ad -->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-1.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->

				<!-- popular -->
				<?= $this->render('/partiales/leftbar', [
					'popular' => $popular,
					'recent' => $recent,

				]); ?>
				<!-- catagories -->
				<?php if ($article->category->id === 6 || $article->category->id === 11 || $article->category->id === 12 || $article->category->id === 13 || $article->category->id === 20 || $article->category->id === 21) : ?>
					<?= $this->render('/partiales/category', [
						'categoryName' => 'Категории истории',
						'category' => $categoryHistory,
					]); ?>
				<?php else : ?>

					<?= $this->render('/partiales/category', [
						'categoryName' => 'Категории мест',
						'category' => $categoryPlace,
					]); ?>
				<?php endif ?>
				<!-- /catagories -->




			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->