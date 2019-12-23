<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?><?$APPLICATION->IncludeComponent("bitrix:catalog", "catalog", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "#CATALOG_IBLOCK_ID#",
	"BASKET_URL" => "/personal/basket.php",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "#SITE_DIR#catalog/",
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
	"USE_ELEMENT_COUNTER" => "Y",
	"USE_FILTER" => "N",
	"USE_COMPARE" => "N",
	"PRICE_CODE" => array(
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "N",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"USE_PRODUCT_QUANTITY" => "N",
	"SHOW_TOP_ELEMENTS" => "N",
	"SECTION_COUNT_ELEMENTS" => "Y",
	"SECTION_TOP_DEPTH" => "2",
	"PAGE_ELEMENT_COUNT" => "30",
	"LINE_ELEMENT_COUNT" => "3",
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"LIST_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"INCLUDE_SUBSECTIONS" => "Y",
	"LIST_META_KEYWORDS" => "-",
	"LIST_META_DESCRIPTION" => "-",
	"LIST_BROWSER_TITLE" => "-",
	"DETAIL_PROPERTY_CODE" => array(
		0 => "PRICECURRENCY",
		1 => "ADD",
		2 => "RECORD",
		3 => "MATRIX",
		4 => "OPTICS",
		5 => "MEMORY",
		6 => "POWER",
		7 => "MODES",
		8 => "COLOUR",
		9 => "PRICE",
		10 => "",
		11 => "",
	),
	"DETAIL_META_KEYWORDS" => "-",
	"DETAIL_META_DESCRIPTION" => "-",
	"DETAIL_BROWSER_TITLE" => "-",
	"LINK_IBLOCK_TYPE" => "",
	"LINK_IBLOCK_ID" => "",
	"LINK_PROPERTY_SID" => "",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
	"USE_STORE" => "N",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "Y",
	"PAGER_TEMPLATE" => "",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"AJAX_OPTION_ADDITIONAL" => "",
	"SEF_URL_TEMPLATES" => array(
		"sections" => "",
		"section" => "#SECTION_ID#/",
		"element" => "#SECTION_ID#/#ELEMENT_ID#/",
		"compare" => "compare.php?action=#ACTION_CODE#",
	),
	"VARIABLE_ALIASES" => array(
		"compare" => array(
			"ACTION_CODE" => "action",
		),
	)
	),
	false
);?>

<div id="order-form" class="hidden">
	<h2>Оформление заказа</h2>
	<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "catalog-order-form", Array(
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
		"OK_TEXT" => "Спасибо, ваш вопрос принят. В ближайшее время мы с вами свяжемся по указанному E-Mail адресу.",	// Сообщение, выводимое пользователю после отправки
		"EMAIL_TO" => "#SITE_EMAIL#",	// E-mail, на который будет отправлено письмо
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(0=>"7",),	// Почтовые шаблоны для отправки письма
		),
		false
	);?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>