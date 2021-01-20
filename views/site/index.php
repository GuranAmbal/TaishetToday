<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Места в тайшете';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'г тайшет, город тайшет, новости тайшет, официальный сайт тайшета, последние новости тайшета, расстояние тайшет, сайты тайшета, тайшет, тайшет 2018, тайшет 24, тайшет иркутская область, тайшет номер телефона, тайшет официальный, тайшет сегодня, телефоны тайшета, главные новости тайшета, последние новости тайшета, новости тайшет, тайшетский сайт, городской портал тайшета, афиша тайшета, места тайшета, развлечения в тайшете, сауны в тайшете, кафе в тайшете, телефоны тайшета, телефоны сауны тайшет, чем занятся в тайшете, развлечения в тайшете, куда сходить в тайшете, кафе тайшет, кафе париж тайшет, кафе рыжий кот тайшет, хобби в тайшете, клубы по интересам в тайшете, больницы тайшет, телефоны больниц тайшет, информация тайшет, детская поликлиника тайшет телефон, жд больница тайшет телефон, медицинский центр тайшет телефон, регион телеком тайшет телефон, тайшет больницы телефоны, телефоны г тайшет, харбор тайшет телефон, расписания тайшет, тайшет область, тайшет 2018, тайшет сегодня, тайшет центр, город тайшет магазин, сайты тайшета, новости тайшет сейчас, места тайшета, тайшет достопримечательности, тайшет достопримечательности города, тайшет достопримечательности города фото, тайшет интересные места, афиша тайшет, дкж тайшет афиша, кинотеатр тайшет афиша, события тайшет, событие города тайшета, новости тайшет, последние новости тайшета, новости тайшета +и тайшетского, новости тайшет сейчас, свежие новости тайшета, новости г тайшет, главные новости тайшета, новости города тайшета, новости тайшет 24 свежие, спорт тайшет, мастер класс тайшет, мастер класс тайшет телефон']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Городской портал города тайшета где можно найти актуальную информацию о развлечениях, местах, событиях, истории города тайшета']);
?>
<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>События</h2>
				</div>
			</div>
			<div class="slider">

				<div class="slider__wrapper swiper-no-swiping">

					<?php foreach ($events as $article) : ?>
						<!-- post -->
						<div class="slider__item col-md-6">

							<div class="post post-thumb">
								<a class="post-img" href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><img class="slider__img" src="<?= $article->getImage(); ?>" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-<?= $article->category->id; ?>" href="<?= Url::toRoute(['site/event-category', 'id' => $article->category->id]); ?>"><?= $article->category->title; ?></a>
										<span class="post-date"><?= $article->time; ?></span>
									</div>
									<h3 class="post-title"><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->title; ?></a></h3>
								</div>
							</div>

						</div>

						<!-- /post -->
					<?php endforeach ?>



				</div>
				<button class="swiper-button-next" role="button"></button>
				<button class="swiper-button-prev" role="button"></button>
			</div>


		</div>
		<!-- /row -->

		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Места</h2>
				</div>
			</div>
			<?php
			$i = 0;
			foreach ($places as $article) :
				$i++;
			?>
				<?php if ($i <= 6) : ?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><img class="places__img" src="<?= $article->getImage(); ?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-<?= $article->category->id; ?>" href="category.html"><?= $article->category->title; ?></a>
									<span class="post-date">
										<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" viewBox="0 0 576 512" style="
    width: 15px;
    height: 11px;
">
											<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
										</svg><?= $article->viewed; ?></span>
								</div>
								<h3 class="post-title"><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->title; ?></a></h3>
								<?php if ($article->telefon) : ?>
									<span class="post-place-info">
										<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-square-alt" class="svg-inline--fa fa-phone-square-alt fa-w-14" role="img" viewBox="0 0 448 512" style="
												width: 15px;
												height: 15px;
												margin-right: 5px;
											">
											<path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm-16.39 307.37l-15 65A15 15 0 0 1 354 416C194 416 64 286.29 64 126a15.7 15.7 0 0 1 11.63-14.61l65-15A18.23 18.23 0 0 1 144 96a16.27 16.27 0 0 1 13.79 9.09l30 70A17.9 17.9 0 0 1 189 181a17 17 0 0 1-5.5 11.61l-37.89 31a231.91 231.91 0 0 0 110.78 110.78l31-37.89A17 17 0 0 1 299 291a17.85 17.85 0 0 1 5.91 1.21l70 30A16.25 16.25 0 0 1 384 336a17.41 17.41 0 0 1-.39 3.37z"></path>
										</svg>
										<?= $article->telefon; ?>

									</span>
								<?php endif ?>
								<?php if ($article->adress) : ?>
									<span class="post-place-info">
										<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" viewBox="0 0 384 512" style="&#10;    width: 20px;&#10;    height: 20px;&#10;">
											<path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" /></svg>
										<?= $article->adress; ?>
									</span>
								<?php endif ?>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php if ($i == 3) : ?>
						<div class="clearfix visible-md visible-lg"></div>
					<?php endif ?>
				<?php else : ?>
					<?php if ($i == 7) : ?>
						<div class="row">
							<div class="col-md-8">
								<div class="row">
									<!-- post -->
									<div class="col-md-12">
										<div class="post post-thumb">
											<a class="post-img" href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><img src="<?= $article->getImage(); ?>" alt=""></a>
											<div class="post-body">
												<div class="post-meta">
													<a class="post-category cat-<?= $article->category->id; ?>" href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->category->title; ?></a>
													<span class="post-date"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" viewBox="0 0 576 512" style="
    width: 15px;
    height: 11px;
">
															<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
														</svg><?= $article->viewed; ?></span>
												</div>
												<h3 class="post-title"><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->title; ?></a></h3>
											</div>
										</div>
									</div>
									<!-- /post -->
								<?php endif ?>
								<!-- post -->
								<div class="col-md-6">
									<div class="post">
										<a class="post-img" href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><img src="<?= $article->getImage(); ?>" alt=""></a>
										<div class="post-body">
											<div class="post-meta">
												<a class="post-category cat-<?= $article->category->id; ?>" href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->category->title; ?></a>
												<span class="post-date"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" viewBox="0 0 576 512" style="
    width: 15px;
    height: 11px;
">
														<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
													</svg><?= $article->viewed; ?></span>
											</div>
											<h3 class="post-title"><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->title; ?></a></h3>
											<?php if ($article->telefon) : ?>
												<span class="post-place-info">
													<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-square-alt" class="svg-inline--fa fa-phone-square-alt fa-w-14" role="img" viewBox="0 0 448 512" style="
												width: 15px;
												height: 15px;
												margin-right: 5px;
											">
														<path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm-16.39 307.37l-15 65A15 15 0 0 1 354 416C194 416 64 286.29 64 126a15.7 15.7 0 0 1 11.63-14.61l65-15A18.23 18.23 0 0 1 144 96a16.27 16.27 0 0 1 13.79 9.09l30 70A17.9 17.9 0 0 1 189 181a17 17 0 0 1-5.5 11.61l-37.89 31a231.91 231.91 0 0 0 110.78 110.78l31-37.89A17 17 0 0 1 299 291a17.85 17.85 0 0 1 5.91 1.21l70 30A16.25 16.25 0 0 1 384 336a17.41 17.41 0 0 1-.39 3.37z"></path>
													</svg>
													<?= $article->telefon; ?>

												</span>
											<?php endif ?>
											<?php if ($article->adress) : ?>
												<span class="post-place-info">
													<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" viewBox="0 0 384 512" style="&#10;    width: 20px;&#10;    height: 20px;&#10;">
														<path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" /></svg>
													<?= $article->adress; ?>
												</span>
											<?php endif ?>
										</div>
									</div>
								</div>
								<!-- /post -->
								<?php if ($i == 8 || $i == 10) : ?>
									<div class="clearfix visible-md visible-lg"></div>
								<?php endif ?>
								<?php if ($i == 13) : ?>
								</div>
							</div>

						<?php endif ?>
					<?php endif ?>
				<?php endforeach ?>

						</div>
		</div>
		<div class="col-md-4">
			<!-- popular -->
			<?= $this->render('/partiales/leftbar', [
				'popular' => $popular,
				'recent' => $recent,

			]); ?>
			<!-- catagories -->
			<?= $this->render('/partiales/category', [
				'categoryName' => 'Категория мест',
				'category' => $categoryPlace,
			]); ?>

			<!-- /catagories -->
			<!-- /post widget -->

			<!-- ad -->
			<div class="aside-widget text-center">
				<a href="#" style="display: inline-block;margin: auto;">
					<img class="img-responsive" src="./img/ad-1.jpg" alt="">
				</a>
			</div>
			<!-- /ad -->
		</div>
		<!-- /row -->


	</div>
	<!-- /container -->
</div>
<!-- /section -->

<!-- section -->
<div class="section section-grey">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>Полезные расписания</h2>
				</div>
			</div>
			<div class="slider swiper-no-swiping">

				<div class="slider__wrapper">

					<?php foreach ($schedules->models as $value) : ?>

						<!-- post -->
						<div class="slider__item col-md-4">
							<div class="post">
								<a class="post-img" href="<?= Url::toRoute(['site/view', 'id' => $value->id]); ?>"><img style="height:300px" src="<?= $value->getImage(); ?>" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-<?= $value->category->id; ?>" href="<?= Url::toRoute(['site/event-category', 'id' => $value->category->id]); ?>"><?= $value->category->title; ?></a>
										<span class="post-date"><?= $value->getDate() ?></span>
									</div>
									<h3 class="post-title"><a href="<?= Url::toRoute(['site/view', 'id' => $value->id]); ?>"><?= $value->title; ?></a></h3>
									<?php if ($value->telefon) : ?>
										<span class="post-place-info">
											<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-square-alt" class="svg-inline--fa fa-phone-square-alt fa-w-14" role="img" viewBox="0 0 448 512" style="
												width: 15px;
												height: 15px;
												margin-right: 5px;
											">
												<path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm-16.39 307.37l-15 65A15 15 0 0 1 354 416C194 416 64 286.29 64 126a15.7 15.7 0 0 1 11.63-14.61l65-15A18.23 18.23 0 0 1 144 96a16.27 16.27 0 0 1 13.79 9.09l30 70A17.9 17.9 0 0 1 189 181a17 17 0 0 1-5.5 11.61l-37.89 31a231.91 231.91 0 0 0 110.78 110.78l31-37.89A17 17 0 0 1 299 291a17.85 17.85 0 0 1 5.91 1.21l70 30A16.25 16.25 0 0 1 384 336a17.41 17.41 0 0 1-.39 3.37z"></path>
											</svg>
											<?= $value->telefon; ?>

										</span>
									<?php endif ?>
									<?php if ($value->adress) : ?>
										<span class="post-place-info">
											<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" viewBox="0 0 384 512" style="&#10;    width: 20px;&#10;    height: 20px;&#10;">
												<path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" /></svg>
											<?= $value->adress; ?>
										</span>
									<?php endif ?>
								</div>
							</div>
						</div>
						<!-- /post -->

					<?php endforeach ?>


				</div>
				<button class="swiper-button-next" role="button"></button>
				<button class="swiper-button-prev" role="button"></button>
			</div>



		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<div class="row" id="history">
					<div class="col-md-12">
						<div class="section-title">
							<h2>История Тайшета</h2>
						</div>
					</div>
					<?php ?>
					<?php foreach ($history as $histores) : ?>
						<!-- post -->
						<div class="col-md-12">
							<div class="post post-row">
								<a class="post-img" href="<?= Url::toRoute(['site/view', 'id' => $histores->id]); ?>"><img class="history__img" src="<?= $histores->getImage(); ?>" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-<?= $histores->category->id; ?>" href="<?= Url::toRoute(['site/history', 'id' => $histores->category->id]); ?>"><?= $histores->category->title; ?></a>
										<span class="post-date"><?= $histores->getDate(); ?></span>
									</div>
									<h3 class="post-title"><a href="<?= Url::toRoute(['site/view', 'id' => $histores->id]); ?>"><?= $histores->title; ?></a></h3>
									<p><?= $histores->description; ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->
					<?php endforeach ?>


					<div class="col-md-12">
						<div class="section-row">
							<button class="primary-button center-block" onclick="seeAll()">Показать еще</button>
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

				<!-- catagories -->
				<?= $this->render('/partiales/category', [
					'categoryName' => 'Категория истории',
					'category' => $categoryHistory,
				]); ?>

				<!-- /catagories -->


			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->