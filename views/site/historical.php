<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'История тайшета';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Тайшетский сайт, городской портал тайшета, история тайшета, герои тайшета, Герои ВОВ тайшета, Ветераны города Тайшета, герои соц. труда тайшета, гражданская война в тайшете, почетные жители города тайшета, знаменитые люди тайшета, знаменитые места в тайшете, исторические памятники в тайшете, церкви тайшета, достопремечательности тайшета']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Биография великих жителей, описание исторических событий и мест города Тайшета']);

?>
	<!-- Page Header -->
	<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="<?=Url::toRoute(['site/index']);?>">Главная</a></li>
								<li>История</li>
							</ul>
							<h1>История</h1>
						</div>
					</div>
				</div>
			</div>
				
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row"  id="categorys">
							<?php 
							$i=0;
							foreach($history as $article):
							$i++;
							?>
								<?php if($i==1):?>
													<!-- post -->
								<div class="col-md-12">
									<div class="post post-thumb">
										<a class="post-img" href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img class="post__main-img" src="<?= $article->getImage();?>" alt=""></a>
										<div class="post-body">
											<div class="post-meta">
												<a class="post-category cat-<?= $article->category->id?>" href="<?=Url::toRoute(['site/event-category', 'id'=>$article->category->id]);?>"><?= $article->category->title?></a>
												<span class="post-date"><?=$article->getDate();?></span>
											</div>
											<h3 class="post-title"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= $article->title?></a></h3>
										</div>
									</div>
								</div>
								<!-- /post -->
								<?php endif?>
								<?php if(2<=$i && $i<=3):?>
										<!-- post -->
									<div class="col-md-6">
										<div class="post">
											<a class="post-img" href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img class="post__next-img" src="<?= $article->getImage();?>" alt=""></a>
											<div class="post-body">
												<div class="post-meta">
													<a class="post-category cat-<?= $article->category->id?>" href="<?=Url::toRoute(['site/event-category', 'id'=>$article->category->id]);?>"><?= $article->category->title?></a>
													<span class="post-date"><?=$article->getDate();?></span>
												</div>
												<h3 class="post-title"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= $article->title?></a></h3>
											</div>
										</div>
									</div>
									<!-- /post -->
									
								<?php endif?>
								<?php if($i==3):?>
									<div class="clearfix visible-md visible-lg"></div>
									<!-- ad -->
									<div class="col-md-12">
										<div class="section-row">
											<a href="#">
												<img class="img-responsive center-block" src="./img/ad-2.jpg" alt="">
											</a>
										</div>
									</div>
									<!-- ad -->
								<?php endif?>
								<?php if($i>3):?>
										<!-- post -->
									<div class="col-md-12">
										<div class="post post-row">
											<a class="post-img" href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img class="post__last-img" src="<?= $article->getImage();?>" alt=""></a>
											<div class="post-body">
												<div class="post-meta">
													<a class="post-category cat-<?= $article->category->id?>" href="<?=Url::toRoute(['site/event-category', 'id'=>$article->category->id]);?>"><?= $article->category->title?></a>
													<span class="post-date"><?=$article->getDate();?></span>
												</div>
												<h3 class="post-title"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= $article->title?></a></h3>
												<p><?= $article->description?></p>
											</div>
										</div>
									</div>
							<!-- /post -->
								<?php endif?>		
							<?php endforeach?>
						
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block" onclick="seeAllCategorys()">Загрузить еще</button>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						<?=$this->render('/partiales/leftbar', ['popular' => $popular, 'recent' => $recent]); ?>
            	<!-- catagories -->
						<?=$this->render('/partiales/category', ['category' => $categoryHistory, ]); ?>
						
						
					
						
						
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
	
		