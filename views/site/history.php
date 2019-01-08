<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<?php
echo LinkPager::widget([
'pagination' => $pagination,]);
?>
<div class="main_place">
<?php foreach($articles as $article):?>
    <div class="place">
      <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
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
<?php
echo LinkPager::widget([
'pagination' => $pagination,]);
?>
<?= $this->render('/partiales/sidebar', [
	'popular'=>$popular,
	'recent'=>$recent,
	'categories'=>$categories,
]);?>
