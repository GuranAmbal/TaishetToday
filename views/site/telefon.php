<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Телефоны тайшета';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'тайшет вокзал номер телефона, жд вокзал тайшет телефон, жд больница тайшет телефон, медицинский центр тайшет телефон, окна тайшет телефон, автобус тайшет иркутск телефон, женская консультация тайшет телефон, детская поликлиника тайшет телефон, кедр тайшет бассейн телефон, гостиница бирюса тайшет телефон, налоговая тайшет телефон, пенсионный фонд тайшет телефон, центр мария тайшет телефон, пенсионный тайшет телефон, тайшет поликлиника регистратура телефон, тайшет поликлиника регистратура телефон, вокзал тайшет телефон, тайшет жд телефоны, тайшет больницы телефоны,тайшет номер телефона, телефоны г тайшет, поликлиника тайшет телефон, регистратура тайшет телефон, телефон стоматолога в тайшете, телефон врачей в тайшете']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Телефоны в городе Тайшете']);

?>

<div class="container_telefon">
		<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => false,

        'tableOptions' => [
            'class' => 'table_telefon',
        ],
        'rowOptions'=>[
        	'class'=>'row_telefon',
        ],
        'headerRowOptions'=>[
        	'class'=>'header_row_telefon',
        ],
       
        'columns' => [
            ['attribute'=>'title',
            'label'=>'Название',],
            ['attribute'=>'adress',
            'label'=>'Адресс',],
            ['attribute'=>'telefon',
            'label'=>'Телефон',],
        ]
    ]); ?> 	
</div>

