<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Добро пожаловать");
?> 
<p>Строительство &mdash; возведение зданий и сооружений, а также их капитальный и текущий ремонт, реконструкция, реставрация и реновация.</p>
 
<p>Процесс строительства включает в себя все организационные, изыскательские, проектные, строительно-монтажные и пусконаладочные работы, связанные с созданием, изменением или сносом объекта, а также взаимодействие с компетентными органами по поводу производства таких работ. </p>
 
<p><?$APPLICATION->IncludeComponent(
	"bitrix:photo.section",
	"gallery-slider",
	Array(
		"IBLOCK_TYPE" => "gallery",
		"IBLOCK_ID" => "#GALLERY_IBLOCK_ID#",
		"SECTION_ID" => "",
		"SECTION_CODE" => "first",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"FILTER_NAME" => "arrFilter",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"PAGE_ELEMENT_COUNT" => "20",
		"LINE_ELEMENT_COUNT" => "3",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Фотографии",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?></p>
 
<p>Результатом строительства считается возведённое здание (сооружение) с внутренней отделкой, действующими инженерно-технологическими системами и полным комплектом документации, предусмотренной законом. </p>
 
<p> Исходя из того, что прочность стали примерно в 10 раз выше, чем у самого прочного бетона и каменной или кирпичной кладки, понятие сейсмостойкость ассоциируется с достаточно прочной постройкой, с мощным стальным каркасом или стенами, способными выдержать расчётное землетрясение без полного разрушения и с минимальными человеческими жертвами. </p>
 
<p>Примером такой постройки может служить изображенный рядом спальный корпус Университета Беркли, усиленный наружной антисейсмической стальной фермой. </p>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>