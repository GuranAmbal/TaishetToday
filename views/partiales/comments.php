<?php if (!empty($comments)) : ?>
    <div class="section-row">

        <div class="post-comments">
            <?php foreach ($comments as $comment) : ?>



                <!-- comment -->
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="<?= $comment->user->image; ?>" alt="">
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h4><?= $comment->user->name; ?></h4>
                            <span class="time"><?= $comment->getDate(); ?></span>

                        </div>
                        <p><?= $comment->text; ?></p>


                        <!-- /comment -->


                    <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!Yii::$app->user->isGuest) : ?>
                <!-- reply -->
                <div class="section-row">
                    <div class="section-title">
                        <h2>Напишите ваш комментарий</h2>
                        <?php if (Yii::$app->session->getFlash('comment')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= Yii::$app->session->getFlash('comment'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php $form = \yii\widgets\ActiveForm::begin([
                        'action' => ['site/comment', 'id' => $article->id],
                        'options' => ['class' => 'post-reply', 'role' => 'form']
                    ]) ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?= $form->field($commentForm, 'comment')->textarea(['class' => 'form-control', 'placeholder' => 'Написать комментарий'])->label(false) ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="primary-button">Отправить </button>
                    <?php \yii\widgets\ActiveForm::end(); ?>

                </div>

                <!-- /reply -->
            <?php else : ?>
                <div class="section-row">
                    <div class="section-title text-center">
                        <p style="font-size: 16px;font-weight: 600;">Зарегестрируйтесь что бы оставить комментарий:</p>
                    </div>
                </div>
            <?php endif; ?>