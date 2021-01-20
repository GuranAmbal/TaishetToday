<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="section">
			<!-- container -->
			<div class="container">
  <?php if($q==""){?>
    <p class="post-title">Вы ввели пустой запрос</p>
  <?php } else {?>
    <p class="post-title">Результаты поиска: <?=$q?></p>
  <?php if(!$articles) { ?>
    <p class="post-title">Ничего не найдено</p>
  <?php } else { ?>
    <div class="post_search">
    <?php foreach($articles as $article):?>
      <div class="col-md-4">
								<div class="post">
									<a class="post-img" href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img class="places__img" src="<?= $article->getImage();?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-7" href="category.html"><?=$article->category->title;?> </a>
											<span class="post-date">
												<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" viewBox="0 0 576 512" style="
    width: 15px;
    height: 11px;
"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg>5844</span>
										</div>
										<h3 class="post-title"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?=$article->title;?></a></h3>


																			</div>
								</div>
							</div>



    <?php endforeach;?>
    </div>

  <?php } ?>
<?php } ?>
</div>
</div>
