<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Информация о Taishettoday';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Taishettoday, информационный сайт тайшета, новости тайшета, сайт тайшета, информация о тайшетском сайте, тайшетский сайт, гид тайшета, места тайшета, события тайшета']);
?>

  <!-- Page Header -->
  <div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="<?=Url::toRoute(['site/index']);?>">Главная</a></li>
								<li>О нас</li>
							</ul>
							<h1>О нас</h1>
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
						<div class="section-row">
							<p>Taishettoday - это первый сервис в Тайшете призванный собрать информацию о местах и событиях в городе и районе. По мере возможности сервис будет дополнятся новой важной информацией в том числе собранной с помощю Вас дорогие жители города и района. </p>
							<figure class="figure-img">
								<img class="img-responsive" src="/public/img/about-1.jpg" alt="">
							</figure>
							<p>В городе Тайшете нет похожего сервиса и я надеюсь он будет полезен всем гражданнам города. Помогите мне создать понастоящему полезный и нужный справочник в нашем городе.</p>
						</div>
						<div class="row section-row">
							<div class="col-md-6">
								<figure class="figure-img">
									<img class="img-responsive" src="/public/img/about-2.jpg" alt="">
								</figure>
							</div>
							<div class="col-md-6">
								<h3>Миссия проекта</h3>
								<p>Данный проект я начинал писать еще в 2014 году и хотел решить с помощью него ряда проблем:</p>
								<ul class="list-style">
									<li><p>Получение достоверной информации о событиях и местах в нашем городе.</p></li>
									<li><p>Получение достоверной информации о расписании работы полезных городских заведений и городского транспорта.</p></li>
                  <li><p>Объединение активных граждан нашего города с целью создания сообществ и кружков для активного времяпрепровождения.</p></li>
                  <li><p>Публикация и продвижение достоверной информации о истории нашего города</p></li>
								</ul>
							</div>
						</div>
					</div>
					
					<!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Популярные посты</h2>
							</div>
              <?php foreach($popular as $article):?>
                <div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="<?= $article->getImage();?>" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html"><?= $article->title;?></a></h3>
								</div>
							</div>
              <?php endforeach?>
							

						
              
						</div>
						<!-- /post widget -->
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->



