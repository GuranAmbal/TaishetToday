<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Загрузить изображение', ['set-image', 'id' => $model->id], ['class' => 'btn btn-dafault']) ?>
        <?= Html::a('Загрузить другие изображение', ['set-images', 'id' => $model->id], ['class' => 'btn btn-dafault']) ?>
        <?= Html::a('Выбрать категорию', ['set-category', 'id' => $model->id], ['class' => 'btn btn-dafault']) ?>
        <?= Html::a('Выбрать тег', ['set-tags', 'id' => $model->id], ['class' => 'btn btn-dafault']) ?>
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
            'content:ntext',
            'date',
            'image',
            'viewed',
            'user_id',
            'status',
            'category_id',
            'time',
            'time_end',
            'adress',
            'telefon',
            'smdeskription',
            'keywords',
            'money',
            'athorname',
            'img_s'
        ],
    ]) ?>

</div>