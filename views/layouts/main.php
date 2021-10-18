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
<?php function check_mobile_device()
{
	$mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
	$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
	foreach ($mobile_agent_array as $value) {
		if (strpos($agent, $value) !== false) return true;
	};
	return false;
}; ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-B323FL8SGH"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-B323FL8SGH');
	</script>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-site-verification" content="vVNUbn3OhOQEmJRgqKn_TIE8Q3ZFwN4i3Dlu15PTcLc" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="593301561ab8f94b" />
	<link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
	<meta name="google-site-verification" content="vVNUbn3OhOQEmJRgqKn_TIE8Q3ZFwN4i3Dlu15PTcLc" />
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(m, e, t, r, i, k, a) {
			m[i] = m[i] || function() {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(52055310, "init", {
			id: 52055310,
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true
		});
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58668408-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-58668408-1');
	</script>

	<noscript>
		<div><img src="https://mc.yandex.ru/watch/52055310" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
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
						<a href="<?= Url::toRoute(['site/index']); ?>" class="logo">Taishetto<b class="nav-logo__b">Day</b></a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<ul class="nav-menu nav navbar-nav">
						<li><a href="<?= Url::toRoute(['site/places']); ?>">Места</a></li>
						<li><a href="<?= Url::toRoute(['site/event-category', 'id' => 4]); ?>">События</a></li>
						<li><a href="<?= Url::toRoute(['site/historical']); ?>">История</a></li>
						<li><a href="<?= Url::toRoute(['site/telefon']); ?>">Телефоны</a></li>
						<li><a href="<?= Url::toRoute(['site/decloration']); ?>">Объявления</a></li>
						<li><a href="<?= Url::toRoute(['site/map']); ?>">Карта</a></li>
					</ul>
					<!-- /nav -->

					<!-- search & aside toggle -->
					<div class="nav-btns">

						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<?php if (Yii::$app->user->isGuest) : ?>
							<button class="aside-btn">
								<a href="<?= Url::toRoute(['/user/security/login']) ?>"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="power-off" class="svg-inline--fa fa-power-off fa-w-16" role="img" viewBox="0 0 512 512" style="&#10;    width: 15px;&#10;    height: 15px;&#10;">
										<path fill="currentColor" d="M400 54.1c63 45 104 118.6 104 201.9 0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4 7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31-41.5 30.8-68 79.6-68 134.9-.1 92.3 74.5 168.1 168 168.1 91.6 0 168.6-74.2 168-169.1-.3-51.8-24.7-101.8-68.1-134-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z" /></svg>
								</a>
							</button>
							<button class="aside-btn">
								<a href="<?= Url::toRoute(['/user/registration/register']) ?>">
									<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" viewBox="0 0 448 512" style="&#10;    width: 15px;&#10;    height: 15px;&#10;">
										<path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" /></svg> </a>
							</button>
						<?php else : ?>

							<button class="aside-btn">
								<a href="<?= Url::toRoute(['/user/security/logout']) ?>" data-method='post'>
									<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="door-open" class="svg-inline--fa fa-door-open fa-w-20" role="img" viewBox="0 0 640 512" style="&#10;    width: 15px;&#10;    height: 15px;&#10;">
										<path fill="currentColor" d="M624 448h-80V113.45C544 86.19 522.47 64 496 64H384v64h96v384h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM312.24 1.01l-192 49.74C105.99 54.44 96 67.7 96 82.92V448H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h336V33.18c0-21.58-19.56-37.41-39.76-32.17zM264 288c-13.25 0-24-14.33-24-32s10.75-32 24-32 24 14.33 24 32-10.75 32-24 32z" /></svg>

							</button>
							<button class="aside-btn">
								<a href="<?= Url::toRoute(['/user/profile/show', 'id' => Yii::$app->user->id]); ?>">
									<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house-user" class="svg-inline--fa fa-house-user fa-w-18" role="img" viewBox="0 0 576 512" style="&#10;    width: 15px;&#10;    height: 15px;&#10;">
										<path fill="currentColor" d="M570.69,236.27,512,184.44V48a16,16,0,0,0-16-16H432a16,16,0,0,0-16,16V99.67L314.78,10.3C308.5,4.61,296.53,0,288,0s-20.46,4.61-26.74,10.3l-256,226A18.27,18.27,0,0,0,0,248.2a18.64,18.64,0,0,0,4.09,10.71L25.5,282.7a21.14,21.14,0,0,0,12,5.3,21.67,21.67,0,0,0,10.69-4.11l15.9-14V480a32,32,0,0,0,32,32H480a32,32,0,0,0,32-32V269.88l15.91,14A21.94,21.94,0,0,0,538.63,288a20.89,20.89,0,0,0,11.87-5.31l21.41-23.81A21.64,21.64,0,0,0,576,248.19,21,21,0,0,0,570.69,236.27ZM288,176a64,64,0,1,1-64,64A64,64,0,0,1,288,176ZM400,448H176a16,16,0,0,1-16-16,96,96,0,0,1,96-96h64a96,96,0,0,1,96,96A16,16,0,0,1,400,448Z" /></svg>
							</button>

						<?php endif; ?>
						<div class="search-form">
							<?php $form = ActiveForm::begin(); ?>
							<?= $form->field($model, 'q')->textInput(['class' => 'search-input', 'placeholder' => 'Найти...']); ?>
							<button type="submit" class="search-close"><i class="fa fa-times"></i></button>
							<?php ActiveForm::end(); ?>

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
						<li><a href="<?= Url::toRoute(['site/index']); ?>">Главная</a></li>
						<li><a href="<?= Url::toRoute(['site/places']); ?>">Места</a></li>
						<li><a href="<?= Url::toRoute(['site/event-category', 'id' => 4]); ?>">События</a></li>
						<li><a href="<?= Url::toRoute(['site/historical']); ?>">История</a></li>
						<li><a href="<?= Url::toRoute(['site/telefon']); ?>">Телефоны</a></li>
						<li><a href="<?= Url::toRoute(['site/decloration']); ?>">Объявления</a></li>
						<li><a href="<?= Url::toRoute(['site/map']); ?>">Карта</a></li>
					</ul>
				</div>
				<!-- /nav -->



				<!-- social links -->
				<div class="section-row">
					<h3>Следи за нами в сети</h3>
					<ul class="nav-aside-social">
						<li><a href="https://ok.ru/sobytiyavt"><svg style="margin-top: 2px;" xmlns="http://www.w3.org/2000/svg" data-name="Layer 45" height="24" id="Layer_45" viewBox="0 0 24 24" width="24">
									<title />
									<path d="M12,5a2,2,0,1,1-2,2,2.00227,2.00227,0,0,1,2-2m0-3a5,5,0,1,0,5,5,5,5,0,0,0-5-5Z" style="fill:#fff" />
									<path d="M12,16.25a9.39173,9.39173,0,0,1-4.83008-1.334,1.40038,1.40038,0,0,1,1.44141-2.40137,6.71562,6.71562,0,0,0,6.88281-.064,1.39994,1.39994,0,1,1,1.48438,2.374A9.37761,9.37761,0,0,1,12,16.25Z" style="fill:#fff" />
									<path d="M16,21.6001a1.396,1.396,0,0,1-.99023-.41016L12,18.18018,8.99023,21.18994a1.40006,1.40006,0,1,1-1.98047-1.97949L12,14.22021l4.99023,4.99023A1.3999,1.3999,0,0,1,16,21.6001Z" style="fill:#fff" /></svg></a></li>
						<?php if (check_mobile_device()) : ?>
							<li><a href="viber://add?number=79642673180" style="background-color:#fff">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 192 210.0428" id="viber" version="1.1" viewBox="0 0 192 210.0428" xml:space="preserve" style="&#10;    width: 25px;&#10;    height: 25px;&#10;">
										<g>
											<path d="M116.004,0H75.996C34.0916,0,0,34.086,0,75.9804v36.0392c0,31.1992,19.172,59.2384,48,70.66v23.3632   c0,1.582,0.9316,3.0156,2.3788,3.6564c0.5196,0.2304,1.0724,0.3436,1.6212,0.3436c0.9728,0,1.9356-0.3552,2.6856-1.0348   L77.8788,188h38.1252C157.9084,188,192,153.914,192,112.0196V75.9804C192,34.086,157.9084,0,116.004,0z M184,112.0196   C184,149.504,153.498,180,116.004,180H76.336c-0.9924,0-1.9492,0.3672-2.6856,1.0352L56,197.0236v-17.1172   c0-1.6956-1.0684-3.2072-2.668-3.7696C26.2188,166.5508,8,140.7852,8,112.0196V75.9804C8,38.496,38.502,8,75.996,8h40.008   C153.498,8,184,38.496,184,75.9804V112.0196z" />
											<path d="M148.8632,121.9728l-24.586-15.9688c-2.6892-1.746-5.8864-2.34-9.0212-1.6916c-3.1368,0.6604-5.8304,2.512-7.5804,5.2112   l-1.156,1.7772c-10.6408-3.5156-22.3732-8.008-29.3964-28.34l2.908-2.5272h0.002c4.9904-4.34,5.5156-11.9336,1.174-16.9336   L61.9748,41.3748c-1.4496-1.6676-3.9768-1.8396-5.6448-0.3944l-12.074,10.496c-10.594,9.2072-5.6428,22.8284-4.0156,27.3048   c0.072,0.1992,0.16,0.3908,0.2636,0.578c0.42,0.754,10.4492,18.6488,26.6424,35.1448   c16.26,16.5624,45.6172,31.8592,46.5176,32.3044c3.3536,2.176,7.1252,3.2188,10.8556,3.2188   c6.5508,0,12.9764-3.2108,16.8064-9.1016l8.7132-13.4176C151.242,125.6524,150.7148,123.1756,148.8632,121.9728z    M134.6172,136.5664c-3.6056,5.5508-11.0508,7.1288-16.9336,3.336c-0.2928-0.1524-29.4552-15.34-44.828-31   C58.4884,94.2656,48.9492,78.008,47.6464,75.7384c-3.17-8.8828-2.6092-14.344,1.8556-18.2228l9.0584-7.8712L75.168,68.75   c1.4744,1.6952,1.3048,4.1756-0.3848,5.6444l-4.908,4.2656c-1.1956,1.0392-1.6664,2.6836-1.1996,4.1956   c8.3692,27.1912,24.6408,32.5312,36.5216,36.4336l1.7304,0.57c1.7308,0.586,3.6292-0.082,4.6192-1.6132l2.838-4.3672   c0.586-0.9024,1.4804-1.5156,2.5196-1.7344c1.0428-0.2224,2.1092-0.0156,3.0136,0.5704l21.2324,13.7892L134.6172,136.5664z" />
											<path d="M105.1288,64.9884c-2.1288-0.6136-4.3396,0.6248-4.9432,2.7536c-0.6036,2.1252,0.6288,4.336,2.752,4.9416   c5.9608,1.6952,10.7068,6.4532,12.3884,12.418c0.4964,1.7616,2.1016,2.914,3.848,2.914c0.3592,0,0.7244-0.0468,1.0876-0.1484   c2.1252-0.6016,3.3636-2.8088,2.7636-4.9376C120.5976,74.3124,113.7384,67.4376,105.1288,64.9884z" />
											<path d="M135.5704,88.8748c0.3592,0,0.7244-0.0468,1.088-0.1484c2.1268-0.6016,3.3632-2.8124,2.7636-4.9372   c-4.7188-16.7308-18.0372-30.0784-34.756-34.836c-2.1248-0.6132-4.338,0.6328-4.9412,2.754   c-0.6036,2.1248,0.6288,4.3356,2.7536,4.9412c14.0664,4,25.2736,15.2344,29.2444,29.3124   C132.2208,87.7228,133.8244,88.8748,135.5704,88.8748z" />
											<path d="M102.9432,30.328c-2.1288-0.6132-4.3396,0.6252-4.9432,2.754c-0.6036,2.1252,0.6288,4.336,2.752,4.9416   c23.838,6.7812,42.824,25.8124,49.5508,49.664c0.496,1.7616,2.1016,2.914,3.8476,2.914c0.3592,0,0.7248-0.0468,1.088-0.1484   c2.1248-0.6016,3.3632-2.8124,2.7636-4.9376C150.5272,59.0116,129.4296,37.8672,102.9432,30.328z" />
										</g>
									</svg> </a></li>
						<?php else : ?>
							<li><a href="viber://chat?number=+79642673180" style="background-color:#fff">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 192 210.0428" id="viber" version="1.1" viewBox="0 0 192 210.0428" xml:space="preserve" style="&#10;    width: 25px;&#10;    height: 25px;&#10;">
										<g>
											<path d="M116.004,0H75.996C34.0916,0,0,34.086,0,75.9804v36.0392c0,31.1992,19.172,59.2384,48,70.66v23.3632   c0,1.582,0.9316,3.0156,2.3788,3.6564c0.5196,0.2304,1.0724,0.3436,1.6212,0.3436c0.9728,0,1.9356-0.3552,2.6856-1.0348   L77.8788,188h38.1252C157.9084,188,192,153.914,192,112.0196V75.9804C192,34.086,157.9084,0,116.004,0z M184,112.0196   C184,149.504,153.498,180,116.004,180H76.336c-0.9924,0-1.9492,0.3672-2.6856,1.0352L56,197.0236v-17.1172   c0-1.6956-1.0684-3.2072-2.668-3.7696C26.2188,166.5508,8,140.7852,8,112.0196V75.9804C8,38.496,38.502,8,75.996,8h40.008   C153.498,8,184,38.496,184,75.9804V112.0196z" />
											<path d="M148.8632,121.9728l-24.586-15.9688c-2.6892-1.746-5.8864-2.34-9.0212-1.6916c-3.1368,0.6604-5.8304,2.512-7.5804,5.2112   l-1.156,1.7772c-10.6408-3.5156-22.3732-8.008-29.3964-28.34l2.908-2.5272h0.002c4.9904-4.34,5.5156-11.9336,1.174-16.9336   L61.9748,41.3748c-1.4496-1.6676-3.9768-1.8396-5.6448-0.3944l-12.074,10.496c-10.594,9.2072-5.6428,22.8284-4.0156,27.3048   c0.072,0.1992,0.16,0.3908,0.2636,0.578c0.42,0.754,10.4492,18.6488,26.6424,35.1448   c16.26,16.5624,45.6172,31.8592,46.5176,32.3044c3.3536,2.176,7.1252,3.2188,10.8556,3.2188   c6.5508,0,12.9764-3.2108,16.8064-9.1016l8.7132-13.4176C151.242,125.6524,150.7148,123.1756,148.8632,121.9728z    M134.6172,136.5664c-3.6056,5.5508-11.0508,7.1288-16.9336,3.336c-0.2928-0.1524-29.4552-15.34-44.828-31   C58.4884,94.2656,48.9492,78.008,47.6464,75.7384c-3.17-8.8828-2.6092-14.344,1.8556-18.2228l9.0584-7.8712L75.168,68.75   c1.4744,1.6952,1.3048,4.1756-0.3848,5.6444l-4.908,4.2656c-1.1956,1.0392-1.6664,2.6836-1.1996,4.1956   c8.3692,27.1912,24.6408,32.5312,36.5216,36.4336l1.7304,0.57c1.7308,0.586,3.6292-0.082,4.6192-1.6132l2.838-4.3672   c0.586-0.9024,1.4804-1.5156,2.5196-1.7344c1.0428-0.2224,2.1092-0.0156,3.0136,0.5704l21.2324,13.7892L134.6172,136.5664z" />
											<path d="M105.1288,64.9884c-2.1288-0.6136-4.3396,0.6248-4.9432,2.7536c-0.6036,2.1252,0.6288,4.336,2.752,4.9416   c5.9608,1.6952,10.7068,6.4532,12.3884,12.418c0.4964,1.7616,2.1016,2.914,3.848,2.914c0.3592,0,0.7244-0.0468,1.0876-0.1484   c2.1252-0.6016,3.3636-2.8088,2.7636-4.9376C120.5976,74.3124,113.7384,67.4376,105.1288,64.9884z" />
											<path d="M135.5704,88.8748c0.3592,0,0.7244-0.0468,1.088-0.1484c2.1268-0.6016,3.3632-2.8124,2.7636-4.9372   c-4.7188-16.7308-18.0372-30.0784-34.756-34.836c-2.1248-0.6132-4.338,0.6328-4.9412,2.754   c-0.6036,2.1248,0.6288,4.3356,2.7536,4.9412c14.0664,4,25.2736,15.2344,29.2444,29.3124   C132.2208,87.7228,133.8244,88.8748,135.5704,88.8748z" />
											<path d="M102.9432,30.328c-2.1288-0.6132-4.3396,0.6252-4.9432,2.754c-0.6036,2.1252,0.6288,4.336,2.752,4.9416   c23.838,6.7812,42.824,25.8124,49.5508,49.664c0.496,1.7616,2.1016,2.914,3.8476,2.914c0.3592,0,0.7248-0.0468,1.088-0.1484   c2.1248-0.6016,3.3632-2.8124,2.7636-4.9376C150.5272,59.0116,129.4296,37.8672,102.9432,30.328z" />
										</g>
									</svg> </a></li>
						<?php endif; ?>
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
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="<?= Url::toRoute(['site/index']); ?>" class="logo">Taishetto<b class="nav-logo__b" style="font-size:16px">Day</b></a>
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
									<li><a href="<?= Url::toRoute(['site/about']); ?>">О нас</a></li>

									<li><a href="<?= Url::toRoute(['site/contact']); ?>">Контакты</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="footer-widget">
								<h3 class="footer-title">Категории</h3>
								<ul class="footer-links">
									<li><a href="<?= Url::toRoute(['site/places']); ?>">Места</a></li>
									<li><a href="<?= Url::toRoute(['site/event-category', 'id' => 4]); ?>">События</a></li>
									<li><a href="<?= Url::toRoute(['site/place']); ?>">История</a></li>
									<li><a href="<?= Url::toRoute(['site/telefon']); ?>">Телефоны</a></li>
									<li><a href="<?= Url::toRoute(['site/decloration']); ?>">Объявления</a></li>
									<li><a href="<?= Url::toRoute(['site/map']); ?>">Карта</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<div class="footer-widget">
						<!--<div class="footer-widget">-->
						<!--<h3 class="footer-title">Подписаться на рассылку</h3>
							<div class="footer-newsletter">
								<form>
									<input class="input" type="email" name="newsletter" placeholder="Введи свой email">
									<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>-->
						<script src="https://yastatic.net/q/forms-frontend-ext/_/embed.js"></script>
						<iframe src="https://forms.yandex.ru/u/5ff1651645cd2f567f5ac291/?iframe=1" frameborder="0" name="ya-form-5ff1651645cd2f567f5ac291" width="100%"></iframe>
						<!--	</div>-->
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