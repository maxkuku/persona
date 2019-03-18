<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$widthPreview = 180;
$heightPreview = 260;



foreach($arResult['ITEMS'] as $i => $arItem) {



    $file = CFile::ResizeImageGet($im, array('width' => $widthPreview, 'height' => $heightPreview), BX_RESIZE_IMAGE_EXACT, true);
    $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["SRC"] = $file["src"];
    $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["WIDTH"] = $file["width"];
    $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["HEIGHT"] = $file["height"];
    $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["ALT"] = $arResult['ITEMS'][$i]['NAME'];
    $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["TITLE"] = $arResult['ITEMS'][$i]['NAME'];



    $res1 = CIBlockSection::GetByID($arResult['ITEMS'][$i]['IBLOCK_SECTION_ID']);
    if ($ar_res1 = $res1->GetNext())
        $arResult['ITEMS'][$i]['DIR'] = $ar_res1['CODE'];



}