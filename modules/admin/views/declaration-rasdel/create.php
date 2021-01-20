<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DeclarationRasdel */

$this->title = 'Create Declaration Rasdel';
$this->params['breadcrumbs'][] = ['label' => 'Declaration Rasdels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="declaration-rasdel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
