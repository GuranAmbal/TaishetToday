<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'История тайшета';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Тайшетский сайт, городской портал тайшета, история тайшета, герои тайшета, Герои ВОВ тайшета, Ветераны города Тайшета, герои соц. труда тайшета, гражданская война в тайшете, почетные жители города тайшета, знаменитые люди тайшета, знаменитые места в тайшете, исторические памятники в тайшете, церкви тайшета, достопремечательности тайшета']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Биография великих жителей, описание исторических событий и мест города Тайшета']);

?>


<div class="header_happends">
	<p>Герои ВОВ Тайшета</p>
	<div class="button_happends"><a href="<?=Url::toRoute(['site/history', 'id'=>6]);?>" class="entry-link">ВСЕ</a></div>
</div>
<!--<div class="main_happends">
<?php foreach($articles as $article):?>
	<div class="one_happends">
			<a href="#"><img src="<?= $article->getImage();?>" alt=""></a>
		<div class="left_date">
			<p>Выходные</p>
		</div>
		<div class="bottom_header">
			<a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><h2><?=$article->title;?></h2></a><br>
			<a href="<?=Url::toRoute(['site/happends', 'id'=>$article->category->id]);?>">Подробнее <i class="fas fa-arrow-right"></i></a>
		</div>
	</div>
<?php endforeach;?>
</div>-->
<div class="main_place">
<?php foreach($forecategory as $article):?>
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
	  </div>
<?php endforeach;?>
</div>
<div class="header_happends">
	<p>Герои Соц. труда Тайшета</p>
	<div class="button_happends"><a href="<?=Url::toRoute(['site/history', 'id'=>11]);?>" class="entry-link">ВСЕ</a></div>
</div>
<div class="main_place">
<?php foreach($fivecategory as $article):?>
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
	  </div>
<?php endforeach;?>
</div>
<div class="header_happends">
	<p>Гражданская война на территории Тайшетского района</p>
	<div class="button_happends"><a href="<?=Url::toRoute(['site/history', 'id'=>12]);?>" class="entry-link">ВСЕ</a></div>
</div>
<div class="main_place">
<?php foreach($sixcategory as $article):?>
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
	  </div>
<?php endforeach;?>
</div>
<div class="header_happends">
	<p>Памятники Великой Отечественной Войны в Тайшете</p>
	<div class="button_happends"><a href="<?=Url::toRoute(['site/history', 'id'=>13]);?>" class="entry-link">ВСЕ</a></div>
</div>
<div class="main_place">
<?php foreach($eightcategory as $article):?>
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
	  </div>
<?php endforeach;?>
</div>
<div class="header_happends">
	<p>История православных храмов в Тайшетском районе</p>
	<div class="button_happends"><a href="<?=Url::toRoute(['site/history', 'id'=>14]);?>" class="entry-link">ВСЕ</a></div>
</div>
<div class="main_place">
<?php foreach($ninecategory as $article):?>
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
	  </div>
<?php endforeach;?>
</div>
<?= $this->render('/partiales/sidebar', [
	'popular'=>$popular,
	'recent'=>$recent,
	'categories'=>$categories,
]);?>
