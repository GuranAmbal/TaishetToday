<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DeclarationCategory */

$this->title = 'Create Declaration Category';
$this->params['breadcrumbs'][] = ['label' => 'Declaration Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="declaration-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
