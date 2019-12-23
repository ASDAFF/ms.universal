<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Галерея");
?>
<?$APPLICATION->IncludeComponent("bitrix:photo", "gallery", array(
	"IBLOCK_TYPE" => "gallery",
	"IBLOCK_ID" => "#GALLERY_IBLOCK_ID#",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "#SITE_DIR#gallery/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "N",
	"USE_PERMISSIONS" => "N",
	"USE_RATING" => "N",
	"USE_REVIEW" => "N",
	"USE_FILTER" => "N",
	"SECTION_COUNT" => "20",
	"TOP_ELEMENT_COUNT" => "4",
	"TOP_LINE_ELEMENT_COUNT" => "4",
	"SECTION_SORT_FIELD" => "sort",
	"SECTION_SORT_ORDER" => "asc",
	"TOP_ELEMENT_SORT_FIELD" => "sort",
	"TOP_ELEMENT_SORT_ORDER" => "asc",
	"TOP_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"TOP_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"SECTION_PAGE_ELEMENT_COUNT" => "20",
	"SECTION_LINE_ELEMENT_COUNT" => "3",
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"LIST_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"LIST_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"LIST_BROWSER_TITLE" => "-",
	"META_KEYWORDS" => "-",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"DETAIL_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"DETAIL_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Фотографии",
	"PAGER_SHOW_ALWAYS" => "Y",
	"PAGER_TEMPLATE" => "",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"AJAX_OPTION_ADDITIONAL" => "",
	"SEF_URL_TEMPLATES" => array(
		"sections_top" => "",
		"section" => "#SECTION_ID#/",
		"detail" => "#SECTION_ID#/#ELEMENT_ID#/",
	)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>