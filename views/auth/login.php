<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Войти';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login">
  <div class="site-login">
    <div class="app-title">
      <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
    <div class="control-group">
        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
    </div>
    <div class="control-group">
        <?= $form->field($model, 'password')->passwordInput() ?>
    </div>
        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="col-md-2">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
<div>
    <div class="site-login">
      <script type="text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
  <script type="text/javascript">
    VK.init({apiId: 6716057});
  </script>

  <!-- VK Widget -->
  <div id="vk_auth"></div>
  <script type="text/javascript">
    VK.Widgets.Auth("vk_auth", {"authUrl":"/auth/login-vk"});
  </script>
    </div>
  </div>
</div>
</div>
