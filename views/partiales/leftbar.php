
<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="post_happends">
  <div class="small_happends">
    <aside>
      <h3>Популярные посты</h3>
      <?php foreach ($popular as $article):?>
        <div class="small-thamb">
          <div class="small-thamb-img">
              <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" /></a>
          </div>
          <div class="p-content">
            <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="text-uppercase"><?=$article->title?></a><br />
            <span class="p-date"><?=$article->getDate();?></span>
          </div>
        </div>
      <?php endforeach;?>
    </aside>
    <aside class="resend_post">
      <h3>Последние посты</h3>
      <?php foreach ($recent as $article):?>
        <div class="small-thamb">
        <div class="small-thamb-img">
          <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" /></a>
         </div>
          <div class="p-content">
            <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="text-uppercase"><?=$article->title?></a><br />
            <span class="p-date"><?=$article->getDate();?></span>
          </div>
        </div>
      <?php endforeach;?>
    </aside>
  </div>
</div>
