<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul class="gal top-sections">
<?foreach($arResult["SECTIONS"] as $arSection):?>
	<?
	$this->AddEditAction('section_'.$arSection['ID'], $arSection['ADD_ELEMENT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "ELEMENT_ADD"), array('ICON' => 'bx-context-toolbar-create-icon'));
	$this->AddEditAction('section_'.$arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction('section_'.$arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_SECTION_DELETE_CONFIRM')));
	?>
	
	<?$arSection["PICTURE"] = CFile::GetFileArray($arSection["PICTURE"])?>
	
	<li id="<?=$this->GetEditAreaId('section_'.$arSection['ID']);?>">
		<?if($arSection["PICTURE"]["SRC"]):?>
		<a class="img" href="<?=$arSection["SECTION_PAGE_URL"]?>">
			<img src="<?=$arSection["PICTURE"]["SRC"]?>" alt="<?=$arSection["NAME"]?>" title="<?=$arSection["NAME"]?>" /><span></span>
		</a>
		<?endif;?>
		
		<a href="<?=$arSection["SECTION_PAGE_URL"]?>">
			<?=$arSection["NAME"]?>
		</a>		
	</li>
	
<?endforeach;?>
</ul>
