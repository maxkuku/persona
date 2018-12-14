<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
IncludeTemplateLangFile(__FILE__);
foreach($arResult["ITEMS"] as $arItem):?>
    DG.marker([<?=$arItem['PROPERTIES']['CENTER']['VALUE']?>], {icon: myIcon}).addTo(map)
<?endforeach;
