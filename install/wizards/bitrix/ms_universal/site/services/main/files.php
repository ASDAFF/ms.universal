<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_SITE_ID"))
	return;

if (!defined("WIZARD_SITE_DIR"))
	return;
 
if (WIZARD_INSTALL_DEMO_DATA)
{
	$path = str_replace("//", "/", WIZARD_ABSOLUTE_PATH."/site/public/".LANGUAGE_ID."/"); 
	
	$handle = @opendir($path);
	if ($handle)
	{
		while ($file = readdir($handle))
		{
			if (in_array($file, array(".", "..")))
				continue; 
/*			elseif (
				is_file($path.$file) 
				&& 
				(
					($file == "index.php"  && trim(WIZARD_SITE_PATH, " /") == trim(WIZARD_SITE_ROOT_PATH, " /"))
					|| 
					($file == "_index.php" && trim(WIZARD_SITE_PATH, " /") != trim(WIZARD_SITE_ROOT_PATH, " /"))
				)
			)
				continue; 
*/
			CopyDirFiles(
				$path.$file,
				WIZARD_SITE_PATH."/".$file,
				$rewrite = true, 
				$recursive = true,
				$delete_after_copy = false
			);
		}
	}

	WizardServices::PatchHtaccess(WIZARD_SITE_PATH);

	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."company/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."contacts/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."news/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."products/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."services/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."catalog/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."gallery/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."questions/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."_index.php", Array("SITE_DIR" => WIZARD_SITE_DIR));

	$arUrlRewrite = array(); 
	if (file_exists(WIZARD_SITE_ROOT_PATH."/urlrewrite.php"))
	{
		include(WIZARD_SITE_ROOT_PATH."/urlrewrite.php");
	}
	$arNewUrlRewrite = array(
		array(
			"CONDITION" => "#^".WIZARD_SITE_DIR."catalog/#",
			"RULE" => "", 
			"ID" => "bitrix:catalog",
			"PATH" => WIZARD_SITE_DIR."catalog/index.php"
		),
		array(
			"CONDITION" => "#^".WIZARD_SITE_DIR."gallery/#",
			"RULE" => "", 
			"ID" => "bitrix:news",
			"PATH" => WIZARD_SITE_DIR."gallery/index.php"
		),
		array(
			"CONDITION" => "#^".WIZARD_SITE_DIR."questions/#",
			"RULE" => "", 
			"ID" => "bitrix:news",
			"PATH" => WIZARD_SITE_DIR."questions/index.php"
		),		
		array(
			"CONDITION" => "#^".WIZARD_SITE_DIR."news/#",
			"RULE" => "", 
			"ID" => "bitrix:news",
			"PATH" => WIZARD_SITE_DIR."news/index.php"
		)
	); 
	
	foreach ($arNewUrlRewrite as $arUrl)
	{
		if (!in_array($arUrl, $arUrlRewrite))
		{
			CUrlRewriter::Add($arUrl);
		}
	}
}

function ___writeToAreasFile($fn, $text)
{
	if(file_exists($fn) && !is_writable($abs_path) && defined("BX_FILE_PERMISSIONS"))
		@chmod($abs_path, BX_FILE_PERMISSIONS);

	$fd = @fopen($fn, "wb");
	if(!$fd)
		return false;

	if(false === fwrite($fd, $text))
	{
		fclose($fd);
		return false;
	}

	fclose($fd);

	if(defined("BX_FILE_PERMISSIONS"))
		@chmod($fn, BX_FILE_PERMISSIONS);
}

CheckDirPath(WIZARD_SITE_PATH."include/");

$wizard =& $this->GetWizard();

___writeToAreasFile(WIZARD_SITE_PATH."include/phone.php", $wizard->GetVar("sitePhone"));
___writeToAreasFile(WIZARD_SITE_PATH."include/copyright.php", $wizard->GetVar("siteCopy"));

CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."include/email.php", Array("SITE_EMAIL" => htmlspecialcharsbx($wizard->GetVar("siteEmail"))));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."contacts/feedback.php", Array("SITE_EMAIL" => htmlspecialcharsbx($wizard->GetVar("siteEmail"))));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."catalog/index.php", Array("SITE_EMAIL" => htmlspecialcharsbx($wizard->GetVar("siteEmail"))));

$siteLogo = $wizard->GetVar("siteLogo");
if($siteLogo>0)
{
	$ff = CFile::GetByID($siteLogo);
	if($zr = $ff->Fetch())
	{
		$strOldFile = str_replace("//", "/", WIZARD_SITE_ROOT_PATH."/".(COption::GetOptionString("main", "upload_dir", "upload"))."/".$zr["SUBDIR"]."/".$zr["FILE_NAME"]);
		@copy($strOldFile, WIZARD_SITE_PATH."include/logo.png");
		___writeToAreasFile(WIZARD_SITE_PATH."include/company_name.php", '<img src="'.WIZARD_SITE_DIR.'include/logo.png"  />');
		CFile::Delete($siteLogo);
	}
}
elseif(!file_exists(WIZARD_SITE_PATH."include/logo.png"))
{
	copy(WIZARD_THEME_ABSOLUTE_PATH."/lang/".LANGUAGE_ID."/logo.png", WIZARD_SITE_PATH."include/bx_default_logo.png");
	___writeToAreasFile(WIZARD_SITE_PATH."include/company_name.php", '<img src="'.WIZARD_SITE_DIR.'include/bx_default_logo.png"  />');
}

if (WIZARD_INSTALL_DEMO_DATA)
{ 
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.section.php", array("SITE_DESCRIPTION" => htmlspecialcharsbx($wizard->GetVar("siteMetaDescription"))));
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.section.php", array("SITE_KEYWORDS" => htmlspecialcharsbx($wizard->GetVar("siteMetaKeywords"))));
}
?>