<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'Напиши нам';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Page Header -->
<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="<?=Url::toRoute(['site/index']);?>">Главная</a></li>
								<li>Контакты</li>
							</ul>
							<h1>Контакты</h1>
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
					<div class="col-md-6">
						<div class="section-row">
							<h3>Контактная информация</h3>
							<p>Вы можите прислать нам информацию о интересном событии или месте в нашем городе или статью о истории нашего города</p>
							<ul class="list-style">
								<li><p><strong>Email:</strong> <a href="#">dedguran@gmail.com</a></p></li>
								<li><p><strong>Телефон:</strong> 89642673180</p></li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<div class="section-row">
                            <h3><?= Html::encode($this->title) ?></h3>
                            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                            <div class="alert alert-success">
                            Спасибо что написали нам.
                            </div>

                            <p>
                                Note that if you turn on the Yii debugger, you should be able
                                to view the mail message on the mail panel of the debugger.
                                <?php if (Yii::$app->mailer->useFileTransport): ?>
                                    Because the application is in development mode, the email is not sent but saved as
                                    a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                    Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                                    application component to be false to enable email sending.
                                <?php endif; ?>
                            </p>

                            <?php else: ?>
                          

                                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                    <div class="row">
                                    <div class="col-md-7">
										<div class="form-group">
											<span>Имя</span>
                                            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                                            </div>
                                    </div>
                                    <div class="col-md-7">
										<div class="form-group">
                                        <span>Email</span>
                                            <?= $form->field($model, 'email') ?>
                                            </div>
                                    </div>
                                    <div class="col-md-7">
										<div class="form-group">
                                        <span>Тема</span>
                                            <?= $form->field($model, 'subject') ?>
                                            </div>
                                    </div>
                                    <div class="col-md-7">
										<div class="form-group">
                                        <span>Сообщение</span>
                                            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                                            </div>
                                    </div>
                                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className('verifyCode'), [
                                                'template' => '<div class="col-md-7"><div class="form-group"><span>Введите код</span>{image}</div><div class="col-md-7"><div class="form-group">{input}</div></div></div>',
                                            ]) ?>

                                            <div class="col-md-7">
                                                <?= Html::submitButton('Отправить', ['class' => 'primary-button', 'name' => 'contact-button']) ?>
                                            </div>
                                        </div>
                                    <?php ActiveForm::end(); ?>

                            

                            <?php endif; ?>
							
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

