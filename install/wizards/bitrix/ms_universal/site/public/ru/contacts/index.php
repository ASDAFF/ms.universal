<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контактная информация");
?>          	         	                
<table class="contacts"> 
  <tbody> 
    <tr> 		<td><small>Адрес:</small></td> 		<td>121821, г. Москва, Театральный проезд, д.5, стр. 2, БЦ &laquo;Театральный&raquo;, оф. 1525</td> 	</tr>
   
    <tr> 		<td><small>Телефон:</small></td> 		<td>+7 (495) 234-55-69</td> 	</tr>
   
    <tr> 		<td><small>Электронная почта:</small></td> 		<td><a href="mailto:mail@gmail.com" >mail@gmail.com</a></td> 	</tr>
   </tbody>
 </table>
 
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
 
<div id="ymaps-map-id_135784104313530962668" style="width: 450px; height: 350px;"></div>
 
<div style="width: 450px; text-align: right;"><a href="http://api.yandex.ru/maps/tools/constructor/index.xml" target="_blank" style="color: #1A3DC1; font: 13px Arial, Helvetica, sans-serif;" >Создано с помощью инструментов Яндекс.Карт</a></div>
 
<script type="text/javascript">function fid_135784104313530962668(ymaps) {var map = new ymaps.Map("ymaps-map-id_135784104313530962668", {center: [37.592904499999996, 55.737958474190094], zoom: 14, type: "yandex#map"});map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));map.geoObjects.add(new ymaps.Placemark([37.592905, 55.73515], {balloonContent: ""}, {preset: "twirl#lightblueDotIcon"}));};</script>
 
<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_135784104313530962668"></script>
 
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>