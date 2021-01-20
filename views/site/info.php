
<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="main_container">
  <div class="article_happends">
    <?php foreach($articles as $article):?>
      <article class="post">
        <div class="post-thumb">
          <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
        </div>
        <div class="post-content">
          <header class="entry-header">
            <h6><a href="<?=Url::toRoute(['site/happends', 'id'=>$article->category->id]);?>" class="entry-link"><?= $article->category->title;?></a></h6>
            <h1><?=$article->title;?></h1>
          </header>
          <div class="entry-content">
              <p><?=$article->description;?></p>
          <div class="continue-reading">
              <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="link-contine">Continue Reading</a>
          </div>
        </div>
        <div class="social-share">
          <span>By <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>">Rubel</a> On <?=$article->getDate();?></span>
          <ul class="viewed-ul">
            <li><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><i class="fa fa-eye"></i></a></li><?=(int) $article->viewed?>
          </ul>
        </div>
      </article>
    <?php endforeach;?>


    <?php
    echo LinkPager::widget([
    'pagination' => $pagination,]);
    ?>
  </div>
  <div class="post_happends">
    <div class="small_happends">
      <aside>
        <h3>Популярные посты</h3>
        <?php foreach ($popular as $article):?>
          <div class="small-thamb">
            <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" /></a>
            <div class="p-content">
              <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="text-uppercase"><?=$article->title?></a>
              <span class="p-date"><?=$article->getDate();?></span>
            </div>
          </div>
        <?php endforeach;?>
      </aside>
      <aside class="resend_post">
        <h3>Последние посты</h3>
        <?php foreach ($recent as $article):?>
          <div class="small-thamb">
            <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" /></a>
            <div class="p-content">
              <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="text-uppercase"><?=$article->title?></a>
              <span class="p-date"><?=$article->getDate();?></span>
            </div>
          </div>
        <?php endforeach;?>
      </aside>
    </div>
  </div>
</div>
</div>
