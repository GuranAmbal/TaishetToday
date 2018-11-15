<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'места тайшета';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Тайшетский сайт, городской портал тайшета, история тайшета, герои тайшета, Герои ВОВ тайшета, Ветераны города Тайшета, герои соц. труда тайшета, гражданская война в тайшете, почетные жители города тайшета, знаменитые люди тайшета, знаменитые места в тайшете, исторические памятники в тайшете, церкви тайшета, достопремечательности тайшета']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Биография великих жителей, описание исторических событий и мест города Тайшета']);
?>
<div class="main_place">
<?php foreach($articles as $article):?>
    <div class="place">
      <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img width="460px" height="300px" src="<?= $article->getImage();?>" alt=""></a>
      <div class="info_place">
        <div class="social-share">
          <div class="title_place"><h2><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?=$article->title;?></h2></div>
          <div class="viewed"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><i class="fa fa-eye"></i></a></li><?=(int) $article->viewed?></div>
        </div>
        <div class="text_place"><p><?=$article->description;?></p></div>
      </div>
      <div class="date_place"><i class="fab fa-algolia"></i><p><?=$article->time;?></p></div>
	    <div class="date_place"><i class="fas fa-map-marker-alt"></i><p><?=$article->adress;?></p></div>
			<div class="date_place"><i class="fas fa-at"></i><p><?=$article->smdeskription;?></p></div>
			<div class="address_place"><i class="far fa-address-book"></i><p><?=$article->telefon;?></p></div>
    </div>
<?php endforeach;?>
</div>
<?= $this->render('/partiales/sidebar', [
	'popular'=>$popular,
	'recent'=>$recent,
	'categories'=>$categories,
]);?>
