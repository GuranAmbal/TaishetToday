<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Места в тайшете';
$this->registerMetaTag(['name' => 'keywords', 'content' =>'Тайшетский сайт, городской портал тайшета, события в тайшете, что делать в тайшете, куда пойти в тайшете, афиша тайшета, театры в тайшете, цирк в тайшете, интересное в тайшете, лучшие места тайшета, куда пойти в тайшете, интересное в тайшете, развлечения тайшет, цирк тайшет, цирк в тайшете, цирк шапито в тайшете, афиша тайшет, афиша тайшета, новости тайшет, события в тайшете, куда пойти в тайшете, в центре событий тайшет, события города тайшета, Фестиваль в тайшете, афиша тайшета, чем занятся в тайшете, культура в тайшете, куда сходить в тайшете, фестиваль детского юношеского творчества в Тайшете']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Места в Тайшете']);

?>
	<!-- Page Header -->
	<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="<?=Url::toRoute(['site/index']);?>">Главная</a></li>
								<li>Места</li>
							</ul>
							<h1>Места</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		
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
							foreach($places as $article):
							$i++;
							?>
								<?php if($i==1):?>
													<!-- post -->
								<div class="col-md-12">
									<div class="post post-thumb">
										<a class="post-img" href="blog-post.html"><img class="post__main-img" src="<?= $article->getImage();?>" alt=""></a>
										<div class="post-body">
											<div class="post-meta">
												<a class="post-category cat-2" href="#"><?= $article->category->title?></a>
												<span class="post-date"><?=$article->getDate();?></span>
											</div>
											<h3 class="post-title"><a href="blog-post.html"><?= $article->title?></a></h3>
										</div>
									</div>
								</div>
								<!-- /post -->
								<?php endif?>
								<?php if(2<=$i && $i<=3):?>
										<!-- post -->
									<div class="col-md-6">
										<div class="post">
											<a class="post-img" href="blog-post.html"><img class="post__next-img" src="<?= $article->getImage();?>" alt=""></a>
											<div class="post-body">
												<div class="post-meta">
													<a class="post-category cat-2" href="#"><?= $article->category->title?></a>
													<span class="post-date"><?=$article->getDate();?></span>
												</div>
												<h3 class="post-title"><a href="blog-post.html"><?= $article->title?></a></h3>
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
											<a class="post-img" href="blog-post.html"><img class="post__last-img" src="<?= $article->getImage();?>" alt=""></a>
											<div class="post-body">
												<div class="post-meta">
													<a class="post-category cat-2" href="#"><?= $article->category->title?></a>
													<span class="post-date"><?=$article->getDate();?></span>
												</div>
												<h3 class="post-title"><a href="blog-post.html"><?= $article->title?></a></h3>
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
						
						<!-- post widget -->
					<!-- popular -->
					<?= $this->render('/partiales/leftbar', [
					'popular'=>$popular,
					'recent'=>$recent,
					
					]);?>
						<!-- /post widget -->
						
							<!-- catagories -->
							<?= $this->render('/partiales/category', [
					
					'category'=>$categoryPlace,
					]);?>
			
				<!-- /catagories -->
						
					
						
						
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		