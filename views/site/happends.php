<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = $category->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $category->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $category->description]);

?>
<div class="main_container_index">
<div class="main_place">
<?php foreach($articles as $article):?>
    <div class="place">
      <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img class="view_img" src="<?= $article->getImage();?>" alt=""></a>
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
