<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/admin/default/index']],
            ['label' => 'Статьи', 'url' => ['/admin/article/index']],
            ['label' => 'Комментарии', 'url' => ['/admin/comment/index']],
            ['label' => 'Категории', 'url' => ['/admin/category/index']],
            ['label' => 'Теги', 'url' => ['/admin/tag/index']],
            ['label' => 'Пользователи', 'url' => ['/user/admin/index']],
            ['label' => 'Объявления', 'url' => ['/admin/declaration/index']],
            ['label' => 'Категории объявлений', 'url' => ['/admin/declaration-category/index']],
            ['label' => 'Типы объявлений', 'url' => ['/admin/declaration-rasdel/index']]
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
<?php $this->registerJsFile('/web/ckeditor/ckeditor.js');?>
<?php $this->registerJsFile('/web/ckfinder/ckfinder.js');?>
<script>
  $(document).ready(function(){
    var editor = CKEDITOR.replaceAll();
    CKFinder.setupCKEditor(editor);
  })
</script>
</body>
</html>
<?php $this->endPage() ?>
