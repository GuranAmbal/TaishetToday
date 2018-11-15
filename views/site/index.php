<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Места в тайшете';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'главные новости тайшета, последние новости тайшета, новости тайшет, Тайшетский сайт, городской портал тайшета, афиша тайшета, места тайшета, развлечения в тайшете, сауны в тайшете, кафе в тайшете, телефоны тайшета, телефоны сауны тайшет, чем занятся в тайшете, развлечения в тайшете, куда сходить в тайшете, кафе тайшет, кафе париж тайшет, кафе рыжий кот тайшет, хобби в тайшете, клубы по интересам в тайшете ']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Городской портал города тайшета где можно найти актуальную информацию о развлечениях, местах, событиях, истории города тайшета']);
?>
<div class="main_container_index">
	<div class="header_happends">
		<p>клубы по интересам</p>
		<div class="button_happends"><a href="<?=Url::toRoute(['site/happends', 'id'=>15]);?>" class="entry-link">ВСЕ</a></div>
	</div>
	<div class="main_place">
	<?php foreach($tencategory as $article):?>
	  <div class="place">
	    <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
	    <div class="info_place">
				<div class="social-share">
					<div class="title_place"><h2><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?=$article->title;?></h2></div>
					<div class="viewed"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><i class="fa fa-eye"></i></a></li><?=(int) $article->viewed?></div>
				</div>
	      <div class="text_place"><?=$article->description;?></div>
	    </div>
	    <div class="date_place"><i class="fab fa-algolia"></i><p><?=$article->time;?></p></div>
	    <div class="date_place"><i class="fas fa-map-marker-alt"></i><p><?=$article->adress;?></p></div>
			<div class="date_place"><i class="fas fa-at"></i><p><?=$article->smdeskription;?></p></div>
			<div class="address_place"><i class="far fa-address-book"></i><p><?=$article->telefon;?></p></div>
	  </div>
	<?php endforeach;?>
	</div>

<div class="header_happends">
	<p>спорт</p>
	<div class="button_happends"><a href="<?=Url::toRoute(['site/happends', 'id'=>9]);?>" class="entry-link">ВСЕ</a></div>
</div>
<div class="main_place">
<?php foreach($onecategory as $article):?>
  <div class="place">
    <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
    <div class="info_place">
			<div class="social-share">
				<div class="title_place"><h2><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?=$article->title;?></h2></div>
				<div class="viewed"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><i class="fa fa-eye"></i></a></li><?=(int) $article->viewed?></div>
			</div>
      <div class="text_place"><?=$article->description;?></div>
    </div>
    <div class="date_place"><i class="fab fa-algolia"></i><p><?=$article->time;?></p></div>
    <div class="date_place"><i class="fas fa-map-marker-alt"></i><p><?=$article->adress;?></p></div>
		<div class="date_place"><i class="fas fa-at"></i><p><?=$article->smdeskription;?></p></div>
		<div class="address_place"><i class="far fa-address-book"></i><p><?=$article->telefon;?></p></div>
  </div>
<?php endforeach;?>
</div>

<div class="header_happends">
	<p>отдых</p>
	<div class="button_happends"><a href="<?=Url::toRoute(['site/happends', 'id'=>7]);?>" class="entry-link">ВСЕ</a></div>
</div>
<div class="main_place">
<?php foreach($twocategory as $article):?>
	  <div class="place">
	    <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
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

<div class="header_happends">
	<p>кафе</p>
	<div class="button_happends"><a href="<?=Url::toRoute(['site/happends', 'id'=>8]);?>" class="entry-link">ВСЕ</a></div>
</div>
<div class="main_place">
<?php foreach($threecategory as $article):?>
	  <div class="place">
	    <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
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

<div class="main_container_index">
	<div class="header_happends">
		<p>мед. учереждения в тайшете</p>
		<div class="button_happends"><a href="<?=Url::toRoute(['site/happends', 'id'=>16]);?>" class="entry-link">ВСЕ</a></div>
	</div>
	<div class="main_place">
	<?php foreach($elcategory as $article):?>
	  <div class="place">
	    <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
	    <div class="info_place">
				<div class="social-share">
					<div class="title_place"><h2><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?=$article->title;?></h2></div>
					<div class="viewed"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><i class="fa fa-eye"></i></a></li><?=(int) $article->viewed?></div>
				</div>
	      <div class="text_place"><?=$article->description;?></div>
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
</div>
