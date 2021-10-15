<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DeclarationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Declarations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="declaration-index">

    <h1>Создание объявления</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <p>
        <?= Html::a('Создание объявления', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'user_id',
            'category_id',
            [
                'attribute' => 'is_actual',
                'label' => 'Активность объявления',
                'filter' => array("1" => "Активно", "2" => "Не активно")


            ],
            [
                'attribute' => 'date',
                'format' =>  ['date', 'dd.MM.YYYY'],
                'options' => ['width' => '200']
            ],

            //'image',
            //'viewed',
            //'id_razd',

            //'adress',
            //'telefon',
            //'vk',
            //'ok',
            //'confurm',
            //'time_over',
            //'price',
            //'img_s',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>