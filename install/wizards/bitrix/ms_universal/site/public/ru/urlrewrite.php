<?
$arUrlRewrite = array(
	array(
		"CONDITION"	=>	"#^/questions/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/questions/index.php",
	),
	array(
		"CONDITION"	=>	"#^/products/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:catalog",
		"PATH"	=>	"/products/index.php",
	),
	array(
		"CONDITION"	=>	"#^/catalog/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:catalog",
		"PATH"	=>	"/catalog/index.php",
	),
	array(
		"CONDITION"	=>	"#^/gallery/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/gallery/index.php",
	),
	array(
		"CONDITION"	=>	"#^/news/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/news/index.php",
	),
);

?>