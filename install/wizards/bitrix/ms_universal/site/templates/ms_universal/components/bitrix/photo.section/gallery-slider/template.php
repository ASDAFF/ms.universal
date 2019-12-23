<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="jcarousel-1" class="jcarousel-1-skin">
<ul>
	<?foreach($arResult["ROWS"] as $arItems):?>
		<?foreach($arItems as $arItem):?>
			<?if(is_array($arItem)):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_ELEMENT_DELETE_CONFIRM')));
				?>
				<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<?if($arResult["USER_HAVE_ACCESS"]):?>
						<?if(is_array($arItem["PICTURE"])):?>
							<a title="<?=$arItem["NAME"]?>" rel="gal" class="fancybox" href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"><img src="<?=$arItem["PICTURE"]["SRC"]?>" width="<?=$arItem["PICTURE"]["WIDTH"]?>" height="<?=$arItem["PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" /><span></span></a>
						<?endif?>
					<?else:?>
						<?if(is_array($arItem["PICTURE"])):?>
							<img border="0" src="<?=$arItem["PICTURE"]["SRC"]?>" width="<?=$arItem["PICTURE"]["WIDTH"]?>" height="<?=$arItem["PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" />
						<?endif?>
					<?endif?>
				</li>
			<?else:?>
			<?endif;?>
		<?endforeach?>
	<?endforeach?>
</ul>
</div>
