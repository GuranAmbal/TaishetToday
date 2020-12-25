<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\SearchForm;
use yii\widgets\ActiveForm;

$model = new SearchForm();

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="vVNUbn3OhOQEmJRgqKn_TIE8Q3ZFwN4i3Dlu15PTcLc" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="593301561ab8f94b" />
    <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl;?>/favicon.ico" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(52055310, "init", {
        id:52055310,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58668408-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-58668408-1');
</script>

<noscript><div><img src="https://mc.yandex.ru/watch/52055310" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
<?php $this->beginBody() ?>


<!--<nav class="Navbar__Items Navbar__Items--right">
    
  
    </nav>-->
	<!-- Header -->
    <header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="<?=Url::toRoute(['site/index']);?>" class="logo">Taishetto<b class="nav-logo__b">Day</b></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href="<?=Url::toRoute(['site/places']);?>">Места</a></li>
							<li><a href="<?=Url::toRoute(['site/events']);?>">События</a></li>
							<li><a href="<?=Url::toRoute(['site/historical']);?>">История</a></li>
							<li><a href="<?=Url::toRoute(['site/telefon']);?>">Телефоны</a></li>
							
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<?php if(Yii::$app->user->isGuest):?>
								<button class="aside-btn">
								<a href="<?= Url::toRoute(['auth/login'])?>"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="power-off" class="svg-inline--fa fa-power-off fa-w-16" role="img" viewBox="0 0 512 512" style="&#10;    width: 15px;&#10;    height: 15px;&#10;"><path fill="currentColor" d="M400 54.1c63 45 104 118.6 104 201.9 0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4 7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31-41.5 30.8-68 79.6-68 134.9-.1 92.3 74.5 168.1 168 168.1 91.6 0 168.6-74.2 168-169.1-.3-51.8-24.7-101.8-68.1-134-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z"/></svg>
								</a>
								</button>
								<button class="aside-btn">
									<a href="<?= Url::toRoute(['auth/signup'])?>">
									<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" viewBox="0 0 448 512" style="&#10;    width: 15px;&#10;    height: 15px;&#10;"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/></svg>									</a>
								</button>
							<?php else: ?>
								
								<button class="aside-btn">
									<a href="<?= Url::toRoute(['/auth/logout'])?>">
									<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="door-open" class="svg-inline--fa fa-door-open fa-w-20" role="img" viewBox="0 0 640 512" style="&#10;    width: 15px;&#10;    height: 15px;&#10;"><path fill="currentColor" d="M624 448h-80V113.45C544 86.19 522.47 64 496 64H384v64h96v384h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM312.24 1.01l-192 49.74C105.99 54.44 96 67.7 96 82.92V448H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h336V33.18c0-21.58-19.56-37.41-39.76-32.17zM264 288c-13.25 0-24-14.33-24-32s10.75-32 24-32 24 14.33 24 32-10.75 32-24 32z"/></svg>

								</button>
								
							<?php endif;?>
							<div class="search-form">
							<?php $form = ActiveForm::begin();?>
								<?= $form->field($model, 'q')->textInput(['class'=>'search-input', 'placeholder'=>'Найти...']);?>
								<button type="submit" class="search-close"><i class="fa fa-times"></i></button>
							<?php ActiveForm::end();?>
							
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="<?=Url::toRoute(['site/index']);?>">Главная</a></li>
							<li><a href="<?=Url::toRoute(['site/about']);?>">О нас</a></li>
							
							<li><a href="<?=Url::toRoute(['site/contact']);?>">Контакты</a></li>
						</ul>
					</div>
					<!-- /nav -->

					

					<!-- social links -->
					<div class="section-row">
						<h3>Следи за нами в сети</h3>
						<ul class="nav-aside-social">
							<li><a href="#"><svg style="margin-top: 2px;" xmlns="http://www.w3.org/2000/svg" data-name="Layer 45" height="24" id="Layer_45" viewBox="0 0 24 24" width="24"><title/><path d="M12,5a2,2,0,1,1-2,2,2.00227,2.00227,0,0,1,2-2m0-3a5,5,0,1,0,5,5,5,5,0,0,0-5-5Z" style="fill:#fff"/><path d="M12,16.25a9.39173,9.39173,0,0,1-4.83008-1.334,1.40038,1.40038,0,0,1,1.44141-2.40137,6.71562,6.71562,0,0,0,6.88281-.064,1.39994,1.39994,0,1,1,1.48438,2.374A9.37761,9.37761,0,0,1,12,16.25Z" style="fill:#fff"/><path d="M16,21.6001a1.396,1.396,0,0,1-.99023-.41016L12,18.18018,8.99023,21.18994a1.40006,1.40006,0,1,1-1.98047-1.97949L12,14.22021l4.99023,4.99023A1.3999,1.3999,0,0,1,16,21.6001Z" style="fill:#fff"/></svg></a></li>
							
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->


    <?= $content ?>

		<!-- Footer -->
	<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="<?=Url::toRoute(['site/index']);?>" class="logo">Taishetto<b class="nav-logo__b" style="font-size:16px">Day</b></a>
							</div>
						
							<div class="footer-copyright">
								<span>&copy; 2006 -2020 Все права защищены</span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">О нас</h3>
									<ul class="footer-links">
										<li><a href="<?=Url::toRoute(['site/about']);?>">О нас</a></li>
										
										<li><a href="<?=Url::toRoute(['site/contact']);?>">Контакты</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Категории</h3>
									<ul class="footer-links">
                                    <li><a href="<?=Url::toRoute(['site/places']);?>">Места</a></li>
							        <li><a href="<?=Url::toRoute(['site/information']);?>">События</a></li>
							        <li><a href="<?=Url::toRoute(['site/place']);?>">История</a></li>
							        <li><a href="<?=Url::toRoute(['site/telefon']);?>">Телефоны</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Подписаться на рассылку</h3>
							<div class="footer-newsletter">
								<form>
									<input class="input" type="email" name="newsletter" placeholder="Введи свой email">
									<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<!--<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>-->
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
