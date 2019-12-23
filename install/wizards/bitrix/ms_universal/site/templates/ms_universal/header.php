<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!doctype html>
<html><head><meta charset="utf-8">
	<title><?$APPLICATION->ShowTitle()?></title>
	
	<!--
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'/>
	-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic,600,600italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	
	<?$APPLICATION->ShowHead();?>

	<!--[if lt IE 9]><script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/html5shiv.js"></script><![endif]-->
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery1.8.2-min.js"></script>
	
	<!--jCarousel-->
	<script src="<?=SITE_TEMPLATE_PATH?>/libs/jcarousel/jquery.jcarousel.min.js" type="text/javascript"></script>
	<link href="<?=SITE_TEMPLATE_PATH?>/libs/jcarousel/jcarousel.css" rel="stylesheet" type="text/css"/>
	
	<!-- Fancy Box -->
	<link href="<?=SITE_TEMPLATE_PATH?>/libs/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
	<script src="<?=SITE_TEMPLATE_PATH?>/libs/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	
	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/libs/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/libs/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<script type="text/javascript">
		var tplUrl = '<?=SITE_TEMPLATE_PATH?>';
		var priceListTitle = '<?=GetMessage('PRICE_LIST_TITLE')?>';
		var orderInformationTitle = '<?=GetMessage('ORDER_INFORMATION_TITLE')?>';
		var orderChoose = '<?=GetMessage('ORDER_CHOSE')?>';
	</script>

	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>

	<style>
		#top-menu li.active a, #header-image img, .text-field input[type="text"], .text-field input[type="password"], .text-field textarea, .btn > input, .btn > a, .btn > button{behavior:url(<?=SITE_TEMPLATE_PATH?>/js/pie.htc);}
	</style>
	
	<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" rel="stylesheet" type="text/css"/>
	
</head>
<body>

<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<?$page = $APPLICATION->GetCurPage();?>

<?if($page==SITE_DIR || $page==SITE_DIR . 'index.php'):?>	
<div id="container" class="main">
<?else:?>
<div id="container" class="inner">
<?endif;?>
	<header>
		<div id="header-in">
			<a id="logo" href="<?=SITE_DIR?>">
				<?
				$APPLICATION->IncludeFile(
					SITE_DIR."include/company_name.php",
					Array(),
					Array("MODE"=>"html")
				);
				?>
			</a>
			
<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
			
			<div id="header-contacts">
				<div class="phone">
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/phone.php",
					Array(),
					Array("MODE"=>"html")
				);?>
				</div>
				<div class="mail">
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/email.php",
					Array(),
					Array("MODE"=>"html")
				);?>
				</div>
			</div>
		</div>
		
		<?if($page==SITE_DIR || $page==SITE_DIR . 'index.php'):?>	
			<div class="wrap-c">
				<div id="header-image">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/header.jpg" alt=""/>
				</div>
				
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/icons_menu.php",
					Array(),
					Array("MODE"=>"html")
				);?>
			</div>
		<?endif;?>
		
		
	</header>
	
	<div id="container-in">
		<section>
			<aside id="column-l">
<?if($page==SITE_DIR || $page==SITE_DIR . 'index.php'):?>
				<h3><?=GetMessage('NEWS_TITLE')?></h3>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "left-news", array(
	"IBLOCK_TYPE" => "news",
	"IBLOCK_ID" => "#NEWS_IBLOCK_ID#",
	"NEWS_COUNT" => "20",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FILTER_NAME" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "j F Y",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Новости",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
	"PAGER_SHOW_ALL" => "N",
	"DISPLAY_DATE" => "Y",
	"DISPLAY_NAME" => "Y",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "N",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<?else:?>
	<?if (strpos($APPLICATION->GetCurPage(),"catalog")):?>
	<div id="left-menu-wrap" class="left-menu-bg">
	<?$APPLICATION->IncludeComponent("bitrix:menu", "left-tree", array(
	"ROOT_MENU_TYPE" => "left",
	"MENU_CACHE_TYPE" => "Y",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "4",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
	</div>
	
	<?else:?>
		<div id="left-menu-tree">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "left-tree", array(
	"ROOT_MENU_TYPE" => "leftfirst",
	"MENU_CACHE_TYPE" => "N",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "4",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
		</div>
	<?endif;?>
	
		<div class="left-fixed">
		
			<div class="btn-feedback btn">
				<a href="<?=SITE_DIR?>contacts/feedback.php"><?=GetMessage('FEEDBACK_TITLE')?></a>
			</div>		
			
			<?$APPLICATION->IncludeFile(
				SITE_DIR."include/side_icons_menu.php",
				Array(),
				Array("MODE"=>"html")
			);?>
		</div>	
	
<?endif;?>
			</aside>
			
			<div id="content">

<?if($page!==SITE_DIR && $page!==SITE_DIR . 'index.php'):?>			
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
	
	),
	false
);?>
<?endif;?>			
			
			<h1><?$APPLICATION->ShowTitle(false)?></h1>