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
    <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl;?>/favicon.ico" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="Navbar">
   <div class="Navbar__Link Navbar__Link-brand">
      <a href="<?=Url::toRoute(['site/index']);?>" class="Brand">Taishettoday</a>
    </div>
    <div class="Navbar__Link Navbar__Link-toggle">
      <i class="fa fa-align-justify"></i>
    </div>
  <nav class="Navbar__Items">
    <div class="Navbar__Link">
      <a href="<?=Url::toRoute(['site/index']);?>">Места</a>
    </div>
    <div class="Navbar__Link">
      <a href="<?=Url::toRoute(['site/information']);?>">События</a>
    </div>
    <div class="Navbar__Link">
      <a href="<?=Url::toRoute(['site/place']);?>">История</a>
    </div>
    <div class="Navbar__Link">
      <a href="<?=Url::toRoute(['site/telefon']);?>">Телефоны</a>
    </div>
  </nav>
  <nav class="Navbar__Items Navbar__Items--right">
    <?php $form = ActiveForm::begin();?>
      	<?= $form->field($model, 'q')->textInput(['class'=>'input'])->label('');?>
      	<button type="submit" class="button-search"><i class="fas fa-search"></i></button>
    <?php ActiveForm::end();?>
      <?php if(Yii::$app->user->isGuest):?>
                              <div class="Navbar__Link"><a href="<?= Url::toRoute(['auth/login'])?>">Войти</a></div>
                              <div class="Navbar__Link raund"><a href="<?= Url::toRoute(['auth/signup'])?>"><i class="fas fa-plus"></i></a></div>
                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Выйти (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>

  </nav>
</div>

<!--<div class="send_place">
	<p>Напиши нам о событии или месте в Тайшете</p>
	<form class="Nameplace__form">
		<input type="text" placeholder="">
	</form>
	<form class="Email__form">
		<input type="text" placeholder="Ваш email">
		<button type="submit"><i class="fas fa-arrow-right"></i></button>
	</form>
</div>-->

<?= $content ?>

<footer class="main_footer">
  <div class="footer_menu"><a href="<?=Url::toRoute(['site/about']);?>">О Нас</a></div>
  <div class="footer_menu"><a href="<?=Url::toRoute(['site/contact']);?>">Обратная связь</a></div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
