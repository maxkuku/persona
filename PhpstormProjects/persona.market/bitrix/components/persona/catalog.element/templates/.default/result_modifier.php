<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */




$arResult['MY_TITLE'] = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_META_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_META_TITLE']
    : $arResult['NAME'];
$arResult['MY_KEYWORDS'] = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_META_KEYWORDS'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_META_KEYWORDS']
    : $arResult['NAME'];
$arResult['MY_DESCRIPTION'] = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_META_DESCRIPTION'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_META_DESCRIPTION']
    : $arResult['PREVIEW_TEXT'];

$arResult['MY_H1'] = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
    : $arResult['NAME'];





$arResult["META_TAGS"]["TITLE"] = $arResult["MY_TITLE"];
$arResult["META_TAGS"]["BROWSER_TITLE"] = $arResult["MY_TITLE"];



// не работает

$widthPreview = 360;
$heightPreview = 260;



foreach($arResult['ITEMS'] as $i => $arItem) {

    $im = $arResult['ITEMS'][$i]["DETAIL_PICTURE"];

    $arResult['ITEMS'][$i]["DETAIL_PICTURE"] = [];

    $file = CFile::ResizeImageGet($im, array('width' => $widthPreview, 'height' => $heightPreview), BX_RESIZE_IMAGE_EXACT, true);
    $arResult['ITEMS'][$i]["DETAIL_PICTURE"] = $file["src"];
    $arResult['ITEMS'][$i]["DETAIL_PICTURE"]["WIDTH"] = $file["width"];
    $arResult['ITEMS'][$i]["DETAIL_PICTURE"]["HEIGHT"] = $file["height"];
    $arResult['ITEMS'][$i]["DETAIL_PICTURE"]["ALT"] = $arResult['ITEMS'][$i]['NAME'];
    $arResult['ITEMS'][$i]["DETAIL_PICTURE"]["TITLE"] = $arResult['ITEMS'][$i]['NAME'];



}






#$component = $this->getComponent();
#$arParams = $component->applyTemplateModifications();