<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Места в тайшете';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'г тайшет, город тайшет, новости тайшет, официальный сайт тайшета, последние новости тайшета, расстояние тайшет, сайты тайшета, тайшет, тайшет 2018, тайшет 24, тайшет иркутская область, тайшет номер телефона, тайшет официальный, тайшет сегодня, телефоны тайшета, главные новости тайшета, последние новости тайшета, новости тайшет, тайшетский сайт, городской портал тайшета, афиша тайшета, места тайшета, развлечения в тайшете, сауны в тайшете, кафе в тайшете, телефоны тайшета, телефоны сауны тайшет, чем занятся в тайшете, развлечения в тайшете, куда сходить в тайшете, кафе тайшет, кафе париж тайшет, кафе рыжий кот тайшет, хобби в тайшете, клубы по интересам в тайшете, больницы тайшет, телефоны больниц тайшет, информация тайшет, детская поликлиника тайшет телефон, жд больница тайшет телефон, медицинский центр тайшет телефон, регион телеком тайшет телефон, тайшет больницы телефоны, телефоны г тайшет, харбор тайшет телефон, расписания тайшет, тайшет область, тайшет 2018, тайшет сегодня, тайшет центр, город тайшет магазин, сайты тайшета, новости тайшет сейчас']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Городской портал города тайшета где можно найти актуальную информацию о развлечениях, местах, событиях, истории города тайшета']);
?>
<div class="main_container_index">
	<div class="header_happends">
		<p>клубы по интересам</p>
		<div class="button_happends"><a href="<?=Url::toRoute(['site/happends', 'id'=>15]);?>" class="entry-link">ВСЕ</a></div>
		<div class="round_namber"><?=$countclabs?></div>
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
	<div class="round_namber"><?=$countsport?></div>
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
	<div class="round_namber"><?=$countrest?></div>
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
	<div class="round_namber"><?=$countcafe?></div>
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
		<p>мед. учереждения</p>
		<div class="button_happends"><a href="<?=Url::toRoute(['site/happends', 'id'=>16]);?>" class="entry-link">ВСЕ</a></div>
		<div class="round_namber"><?=$counthospital?></div>
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

<div class="main_container_index">
	<div class="header_happends">
		<p>расписание транспорта</p>
		<div class="button_happends"><a href="<?=Url::toRoute(['site/happends', 'id'=>17]);?>" class="entry-link">ВСЕ</a></div>
		<div class="round_namber"><?=$counttransport?></div>
	</div>
	<div class="main_place">
	<?php foreach($twelvecategory as $article):?>
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
