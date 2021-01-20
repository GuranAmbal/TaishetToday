<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Declaration */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Declarations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="declaration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Загрузить изображение', ['set-image', 'id' => $model->id], ['class' => 'btn btn-dafault']) ?>
        <?= Html::a('Другие изображения', ['set-images', 'id' => $model->id], ['class' => 'btn btn-dafault']) ?>
        <?= Html::a('Категория', ['set-category', 'id' => $model->id], ['class' => 'btn btn-dafault']) ?>
        <?= Html::a('Раздел', ['set-razdel', 'id' => $model->id], ['class' => 'btn btn-dafault']) ?>
        <?= Html::a('Пользователь', ['set-users', 'id' => $model->id], ['class' => 'btn btn-dafault']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'user_id',
            'category_id',
            'date',
            'image',
            'viewed',
            'id_razd',
            'is_actual',
            'adress',
            'telefon',
            'vk',
            'ok',
            'confurm',
            'time_over',
            'price',
            'img_s',
        ],
    ]) ?>

</div>