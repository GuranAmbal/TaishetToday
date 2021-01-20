<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DeclarationCategory */

$this->title = 'Update Declaration Category: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Declaration Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="declaration-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
