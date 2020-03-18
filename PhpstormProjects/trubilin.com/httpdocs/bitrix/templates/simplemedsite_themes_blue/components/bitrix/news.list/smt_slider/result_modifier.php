<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(mob_detect())
    $arResult['mob'] = true; 

if($arResult['mob']) {


    $widthPreview = 300;
    $heightPreview = 200;
    $widthPreviewBig = 450;
    $heightPreviewBig = 378;
    foreach($arResult['ITEMS'] as $i => $arItem) {

        $file = CFile::ResizeImageGet($arResult['ITEMS'][$i]["DETAIL_PICTURE"]['ID'],
            array('width' => $widthPreviewBig, 'height' => $heightPreviewBig), BX_RESIZE_IMAGE_EXACT, true);
        $arResult['ITEMS'][$i]["DETAIL_PICTURE"]["SRC"] = $file["src"];
        $arResult['ITEMS'][$i]["DETAIL_PICTURE"]["WIDTH"] = $file["width"];
        $arResult['ITEMS'][$i]["DETAIL_PICTURE"]["HEIGHT"] = $file["height"];

        $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]['ID'],
            array('width' => $widthPreview, 'height' => $heightPreview), BX_RESIZE_IMAGE_EXACT, true);
        $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["SRC"] = $file["src"];
        $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["WIDTH"] = $file["width"];
        $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["HEIGHT"] = $file["height"];
    }
}