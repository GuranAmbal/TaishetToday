<?php
use yii\helpers\Url;
?>

<div class="about">
  <div class="about_text">
    <h1>Проект Taishettoday - полная афиша мест и событий города Тайшета</h1><hr />
    <p>Taishettoday - это первый сервис в Тайшете призванный собрать информацию о местах и событиях в городе и районе. По мере возможности сервис будет дополнятся новой важной информацией
      в том числе собранной с помощю Вас дорогие жители города и района. В городе Тайшете нет похожего сервиса и я надеюсь он будет полезен всем гражданнам города. Помогите мне создать
      понастоящему полезный и нужный справочник в нашем городе.
  </p>
</div>
<div class="contact">
  <div class="about_text">
    <p class="contact_about">Контакты:</p>
    <p>С уважением редакция проекта Taishettoday.ru:</p>
    <p class="text_round">Гурлев А.А - руководитель проекта.
      <a href="<?=Url::toRoute(['site/contact']);?>">Написать письмо</a></p>
  </div>
</div>
<?= $this->render('/partiales/sidebar', [
	'popular'=>$popular,
	'recent'=>$recent,
	'categories'=>$categories,
]);?>
</div>
