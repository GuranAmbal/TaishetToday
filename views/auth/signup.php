<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section">
			<!-- container -->
			<div class="container">
        <div class="row">
            <div class="form__container text-center">
                <h1><?= Html::encode($this->title) ?></h1>
            
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{input}\n<small class=\"form-text text-muted\">{error}</small>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>

                    <?= $form->field($model, 'name')->textInput(array('placeholder' => 'Напишите ваше имя', 'class'=>'form-control text-center','autofocus' => true)) ?>

                    <?= $form->field($model, 'email')->textInput(array('placeholder' => 'Напишите ваш email', 'class'=>'form-control text-center','autofocus' => true)) ?>

                    <?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'Напишите ваш пароль', 'class'=>'form-control text-center','autofocus' => true)) ?>


                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('Зарегестрироваться', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    </div>

                <?php ActiveForm::end(); ?>
                </div>
            </div>
      </div>
</div>
