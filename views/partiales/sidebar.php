<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="best_been">
	<div class="about_us">
		<h3>Taishet today</h3>
		<p> Бессплатный гид по городу  Тайшету. Наш проект расскажет куда можно сходить и чем заняться в Тайшете, а также позволит познакомиться с историей города Тайшета</p>
		<a href="<?=Url::toRoute(['site/about']);?>">Подробно</a>
	</div>
	<div class="best_happends">
		<div class="title_happends"><h3>Популярные посты</h3></div>
	    <?php foreach ($popular as $article):?>
		    <div class="small_happends">
			    <img src="<?= $article->getImage();?>" />
				<div class="text_happends">
					<a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="name_happends"><?=$article->title?></a><br/>
				</div>
			</div>
 	    <?php endforeach;?>
    </div>
    <div class="best_places">
	    <div class="title_happends"><h3>Последние события</h3></div>
	    <?php foreach ($recent as $article):?>
		     <div class="small_happends">
		         <div class="small_img"><img src="<?= $article->getImage();?>" /></div>
		         <div class="text_happends">
			         <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="name_happends"><?=$article->title?></a><br/>
		         </div>
	         </div>
	    <?php endforeach;?>
    </div>
</div>
