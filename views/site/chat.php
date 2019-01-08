<?php
/**
 * @var yiiwebView $this
 * @var app\models\Massage $message
 * @var yiidbActiveQuery $messagesQuery
 */
?>
<?php yiiwidgetsPjax::begin([
    'timeout' => 3000,
    'enablePushState' => false,
    'linkSelector' => false,
    'formSelector' => '.pjax-form'
]) ?>
<?= $this->render('_chat', compact('messagesQuery', 'message')) ?>
<?php yiiwidgetsPjax::end() ?>
<?php $this->registerJs(<<<JS
function updateList() {
  $.pjax.reload({container: '#list-messages'});
}
setInterval(updateList, 1000);
JS
) ?>
