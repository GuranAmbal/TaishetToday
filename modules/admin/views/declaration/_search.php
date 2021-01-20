<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeclarationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="declaration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'viewed') ?>

    <?php // echo $form->field($model, 'id_razd') ?>

    <?php // echo $form->field($model, 'is_actual') ?>

    <?php // echo $form->field($model, 'adress') ?>

    <?php // echo $form->field($model, 'telefon') ?>

    <?php // echo $form->field($model, 'vk') ?>

    <?php // echo $form->field($model, 'ok') ?>

    <?php // echo $form->field($model, 'confurm') ?>

    <?php // echo $form->field($model, 'time_over') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'img_s') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
