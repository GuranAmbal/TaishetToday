<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Войти';
$this->params['breadcrumbs'][] = $this->title;
?>
	<!-- section -->
  <div class="section">
			<!-- container -->
			<div class="container">
        <div class="row">
        <div class="form__container text-center">
            <h1><?= Html::encode($this->title) ?></h1>
          
          <?php $form = ActiveForm::begin([
              'id' => 'login-form',
              'options' => [
                'class' => 'justify-content-center',
                'enctype' => 'multipart/form-data'
              ],
              'layout' => 'horizontal',
              'fieldConfig' => [
                  'template' => "{input}\n<small class=\"form-text text-muted\">{error}</small>",
                  'labelOptions' => ['class' => 'col-lg-1 control-label'],
              ],
          ]); ?>
          <div class="control-group">
              <?= $form->field($model, 'email',['enableLabel' => false])->textInput(array('placeholder' => 'Напишите ваш email', 'class'=>'form-control text-center','autofocus' => true)) ?>
          </div>
          <div class="control-group">
              <?= $form->field($model, 'password',['enableLabel' => false])->passwordInput(array('placeholder' => 'Напишите ваш пароль', 'class'=>'form-control text-center')) ?>
          </div>
              <?= $form->field($model, 'rememberMe')->checkbox([
                  'template' => "<div class=\"col\">{input} {label}</div>\n<small class=\"form-text text-muted\">{error}</small>",
              ]) ?>

              <div class="col">
                 
                      <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                  
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
  </div>
</div>
