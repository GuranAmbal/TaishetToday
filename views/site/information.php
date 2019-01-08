<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'События в тайшете';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Тайшетский сайт, городской портал тайшета, события в тайшете, что делать в тайшете, куда пойти в тайшете, афиша тайшета, театры в тайшете, цирк в тайшете, интересное в тайшете, лучшие места тайшета, куда пойти в тайшете, интересное в тайшете, развлечения тайшет, цирк тайшет, цирк в тайшете, цирк шапито в тайшете, афиша тайшет, афиша тайшета, новости тайшет, события в тайшете, куда пойти в тайшете, в центре событий тайшет, события города тайшета, Фестиваль в тайшете, афиша тайшета, чем занятся в тайшете, культура в тайшете, куда сходить в тайшете, фестиваль детского юношеского творчества в Тайшете']);
$this->registerMetaTag(['name' => 'description', 'content' => 'афиша событий и мероприятий в городе Тайшете']);

?>
<div class="header_happends">
	<p>Интересные события</p>
	<div class="button_happends"><a href="<?=Url::toRoute(['site/happends', 'id'=>4]);?>" class="entry-link">ВСЕ</a></div>
</div>

<div class="main_place">
<?php foreach($sevencategory as $article):?>
	  <div class="place">
			<div class="post-thumb">
				<p class="post-thumb-img">
	    <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
				</p>
			</div>
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
     <div class="date_place"><i class="far fa-address-book"></i><p><?=$article->telefon;?></p></div>
     <div class="address_place"><i class="fas fa-dollar-sign"></i><p><?=$article->money;?></p></div>

	  </div>
<?php endforeach;?>
</div>

<?= $this->render('/partiales/sidebar', [
	'popular'=>$popular,
	'recent'=>$recent,
	'categories'=>$categories,
]);?>
