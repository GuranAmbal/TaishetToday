<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="map_menu">
  <nav class="navbar_map">
    <div class="map_link active_link">
        Отдых
    </div>
    <div class="map_link">
      Спорт
    </div>
    <div class="map_link">
      Обучение
    </div>
    <div class="map_link">
      Кафе
    </div>
  </nav>
</div>
<div id="map"></div>

<div class="interest_place"><p>
Места отдыха
</p></div>

<div class="main_place">

  <div class="place">
    <div class="foto_place"></div>
    <div class="info_place">
      <div class="tipe_place"><p>Кафе</p></div>
      <div class="title_place"><h2>Кафе Париж</h2></div>
      <div class="text_place"><p></p></div>
    </div>
    <div class="date_place"><i class="fab fa-algolia"></i><p>По Будням</p></div>
    <div class="address_place"><i class="far fa-address-book"></i><p>г.Тайшет, ул. Андреева</p></div>
  </div>

</div>

<?= $this->render('/partiales/sidebar', [
	'popular'=>$popular,
	'recent'=>$recent,
	'categories'=>$categories,
]);?>

<script type="text/javascript">
var map;
var arrMarkers = [];
var arrInfoWindows = [];

function initMap() {
  var centerCoord = new google.maps.LatLng(55.940225, 98.004930);
  var mapOptions = {
      zoom: 13,
      center: centerCoord,
      mapTypeId: google.maps.MapTypeId.ROADMAP
 	  };

      map = new google.maps.Map(document.getElementById("map"), mapOptions);

      //Определяем область отображения меток на карте
      var latlngbounds = new google.maps.LatLngBounds();

      //Загружаем данные в формате JSON из файла map.json

    	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXvGcCzaPHIR9n-4TiIGk84JQzfP1bMDU&callback=initMap" async defer></script>
