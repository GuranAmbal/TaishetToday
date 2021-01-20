<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = $article->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $article->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $description]);
?>

<!-- Page Header -->
<div id="post-header" class="page-header">
	<div class="background-img" style="background-image: url('<?= $article->getImage(); ?>');"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="post-meta">
					<a class="post-category cat-<?= $article->category->id; ?>" href="<?= Url::toRoute(['site/event-category', 'id' => $article->category->id]); ?>"><?= $article->category->title; ?></a>
					<span class="post-date"><?= $article->getDate(); ?></span>
				</div>
				<h1><?= $article->title; ?></h1>
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
			<!-- Post content -->
			<div class="col-md-8">
				<div class="section-row sticky-container">
					<div class="main-post">
						<?php if ($article->adress || $article->telefon) : ?>
							<h3>Контакты:</h3>
							<p>
								<span <?= $article->telefon ? '' : 'style="display:none"' ?>>
									<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-square-alt" class="svg-inline--fa fa-phone-square-alt fa-w-14" role="img" viewBox="0 0 448 512" style="
                    width: 15px;
                    height: 15px;
                    margin-right: 5px;
                  ">
										<path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm-16.39 307.37l-15 65A15 15 0 0 1 354 416C194 416 64 286.29 64 126a15.7 15.7 0 0 1 11.63-14.61l65-15A18.23 18.23 0 0 1 144 96a16.27 16.27 0 0 1 13.79 9.09l30 70A17.9 17.9 0 0 1 189 181a17 17 0 0 1-5.5 11.61l-37.89 31a231.91 231.91 0 0 0 110.78 110.78l31-37.89A17 17 0 0 1 299 291a17.85 17.85 0 0 1 5.91 1.21l70 30A16.25 16.25 0 0 1 384 336a17.41 17.41 0 0 1-.39 3.37z"></path>
									</svg>
									<?= $article->telefon; ?>
								</span>
								<span <?= $article->adress ? '' : 'style="display:none"' ?>>
									<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" viewBox="0 0 384 512" style="&#10;    width: 20px;&#10;    height: 20px;&#10;">
										<path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" /></svg>
									<?= $article->adress; ?>
								</span>
							</p>
						<?php endif ?>
						<?php if ($article->money || $article->time) : ?>
							<h3>Информация о событии: </h3>
							<p>
								<span <?= $article->time ? '' : 'style="display:none"' ?>>
									<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16" role="img" viewBox="0 0 512 512" style="&#10;    width: 15px;&#10;    height: 15px;&#10;    margin-right: 5px;&#10;">
										<path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z" /></svg>
									<?= $article->time; ?>
								</span>
								<span <?= $article->money ? '' : 'style="display:none"' ?>>
									<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ruble-sign" class="svg-inline--fa fa-ruble-sign fa-w-12" role="img" viewBox="0 0 384 512" style="&#10;    width: 15px;&#10;    height: 15px;&#10;    margin-right: 5px;&#10;">
										<path fill="currentColor" d="M239.36 320C324.48 320 384 260.542 384 175.071S324.48 32 239.36 32H76c-6.627 0-12 5.373-12 12v206.632H12c-6.627 0-12 5.373-12 12V308c0 6.627 5.373 12 12 12h52v32H12c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h52v52c0 6.627 5.373 12 12 12h58.56c6.627 0 12-5.373 12-12v-52H308c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12H146.56v-32h92.8zm-92.8-219.252h78.72c46.72 0 74.88 29.11 74.88 74.323 0 45.832-28.16 75.561-76.16 75.561h-77.44V100.748z" /></svg>
									<?= $article->money; ?> рулей
								</span>
							</p>
						<?php endif ?>
						<h3>Статья:</h3>
						<p><a id="single_image" href="<?= $article->getImagesOne(); ?>"><img src="<?= $article->getImagesOne(); ?>" alt=""></a></p>
						<p><?= $article->content; ?></p>
					</div>
					<div class="post-shares sticky-shares">
						<a href="#" class="share-facebook"><svg style="margin-top: 5px;" xmlns="http://www.w3.org/2000/svg" data-name="Layer 45" height="24" id="Layer_45" viewBox="0 0 24 24" width="24">
								<title></title>
								<path d="M12,5a2,2,0,1,1-2,2,2.00227,2.00227,0,0,1,2-2m0-3a5,5,0,1,0,5,5,5,5,0,0,0-5-5Z" style="fill:#ddd"></path>
								<path d="M12,16.25a9.39173,9.39173,0,0,1-4.83008-1.334,1.40038,1.40038,0,0,1,1.44141-2.40137,6.71562,6.71562,0,0,0,6.88281-.064,1.39994,1.39994,0,1,1,1.48438,2.374A9.37761,9.37761,0,0,1,12,16.25Z" style="fill:#ddd"></path>
								<path d="M16,21.6001a1.396,1.396,0,0,1-.99023-.41016L12,18.18018,8.99023,21.18994a1.40006,1.40006,0,1,1-1.98047-1.97949L12,14.22021l4.99023,4.99023A1.3999,1.3999,0,0,1,16,21.6001Z" style="fill:#ddd"></path>
							</svg></i></a>

					</div>
				</div>

				<!-- ad -->
				<div class="section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- ad -->

				<!-- author -->
				<!--<div class="section-row">
							<div class="post-author">
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="public/img/author.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h3> <?= $article->athorname; ?></h3>
										</div>
										<p>Можете написать автору</p>
										<ul class="author-social">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>-->
				<!-- /author -->

				<!-- comments -->
				<?= $this->render('/partiales/comments', ['article' => $article, 'comments' => $comments, 'commentForm' => $commentForm,]) ?>

			</div>
			<!-- /Post content -->

			<!-- aside -->
			<div class="col-md-4">
				<!-- ad -->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-1.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->

				<?= $this->render('/partiales/leftbar', ['popular' => $popular, 'recent' => $recent]); ?>
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




				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->