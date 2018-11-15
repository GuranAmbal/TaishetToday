<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

  <?php if($q==""){?>
    <h2>Вы ввели пустой запрос</h2>
  <?php } else {?>
    <h1>Результаты поиска: <?=$q?></h1>
  <?php if(!$articles) { ?>
    <p>Ничего не найдено</p>
  <?php } else { ?>
    <div class="post_search">
    <?php foreach($articles as $article):?>
      <article class="article-search">
        <div class="post-thumb">
          <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img width="250px" height="200px" src="<?= $article->getImage();?>" alt=""></a>
        </div>
        <div class="post-content">
          <header class="entry-header">
            <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><h1><?=$article->title;?></h1></a>
          </header>
          <div class="entry-content">
              <p><?=$article->description;?></p>
        </div>
        <div class="social-share">
          <span>By <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>">Rubel</a> On <?=$article->getDate();?></span>
          <ul class="viewed-ul">
            <li><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><i class="fa fa-eye"></i></a></li><?=(int) $article->viewed?>
          </ul>
        </div>
        </div>
      </article>
    <?php endforeach;?>
    </div>

  <?php } ?>
<?php } ?>
