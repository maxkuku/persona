<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
IncludeTemplateLangFile(__FILE__);
foreach($arResult["ITEMS"] as $arItem):?>
	<option value="<?=$arItem['NAME']?>"><?=$arItem['NAME']?></option>
<?endforeach;
