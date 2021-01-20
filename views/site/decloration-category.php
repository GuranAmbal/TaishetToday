<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = $category->name;
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

					<li><?= $category->name ?></li>
				</ul>
				<h1><?= $category->name ?></h1>
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

					foreach ($decloration as $declorate) :

					?>


						<!-- post -->
						<div class="col-md-12">
							<div class="post post-row">
								<a class="post-img" href="<?= Url::toRoute(['site/view-decloration', 'id' => $declorate->id]); ?>"><img class="post__last-img" src="<?= $declorate->getImage(); ?>" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-<?= $declorate->category->id; ?>" href="<?= Url::toRoute(['site/decloration-category', 'id' => $declorate->category->id]); ?>"><?= $declorate->category->name ?></a>
										<span class="post-date"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" viewBox="0 0 576 512" style="
width: 15px;
height: 11px;
">
												<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
											</svg><?= $declorate->viewed; ?></span>
									</div>
									<h3 class="post-title"><a href="<?= Url::toRoute(['site/view-decloration', 'id' => $declorate->id]); ?>"><?= $declorate->title ?></a></h3>
									<p><?= $declorate->description ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

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
				<?= $this->render('/partiales/leftbar-decloration', [

					'recent' => $recent,

				]); ?>
				<!-- catagories -->
				<?= $this->render('/partiales/category-decloration', [

					'category' => $categoryDecloration,
				]); ?>

				<!-- /catagories -->




			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->