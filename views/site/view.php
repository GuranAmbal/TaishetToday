
<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = $article->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $article->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $artiсle->deskription]);

?>
<div class="main_container">
  <div class="article_happends">
      <article class="post">
        <div class="post-thumb">
          <p class="post-thumb-img">
          <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
        </p>
        </div>
        <div class="social-share">
          <span>Автор <?=$article->athorname;?>  Дата <?=$article->getDate();?></span>
          <ul class="viewed-ul">
            <li><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><i class="fa fa-eye"></i></a></li><?=(int) $article->viewed?>
          </ul>
        </div>
        <div class="small_info">
          <div class="address_place"><i class="fab fa-algolia"></i><p><?=$article->time;?></p></div>
          <div class="address_place"><i class="fas fa-map-marker-alt"></i><p><?=$article->adress;?></p></div>
          <div class="address_place"><i class="far fa-address-book"></i><p><?=$article->telefon;?></p></div>
          <div class="address_place"><i class="fas fa-dollar-sign"></i><p><?=$article->money;?></p></div>
        </div>
        <div class="post-content">
          <header class="entry-header">
            <h1><?=$article->title;?></h1>
          </header>
          <div class="entry-content">
              <p><?=$article->content;?></p>
        </div>
      </article>
      <?= $this->render('/partiales/comments',[
        'article'=>$article,
        'comments'=>$comments,
        'commentForm'=>$commentForm,
      ])?>
      </div>

  <?= $this->render('/partiales/leftbar', [
  	'popular'=>$popular,
  	'recent'=>$recent,
  	'categories'=>$categories,
  ]);?>


 </div>
</div>
