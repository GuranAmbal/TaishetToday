<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Declaration */

$this->title = 'Create Declaration';
$this->params['breadcrumbs'][] = ['label' => 'Declarations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="declaration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
