<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$widthPreview = 300;
$heightPreview = 200;
$widthPreviewBig = 300*2;
$heightPreviewBig = 200*2;
foreach($arResult['ITEMS'] as $i => $arItem) {

        $file = CFile::ResizeImageGet($arItem['FIELDS']["DETAIL_PICTURE"]['ID'], array('width' => $widthPreviewBig, 'height' => $heightPreviewBig), BX_RESIZE_IMAGE_EXACT, true);
        $arResult['ITEMS'][$i]["FIELDS"]["DETAIL_PICTURE"]["SRC"] = $file["src"];
        $arResult['ITEMS'][$i]["FIELDS"]["DETAIL_PICTURE"]["WIDTH"] = $file["width"];
        $arResult['ITEMS'][$i]["FIELDS"]["DETAIL_PICTURE"]["HEIGHT"] = $file["height"];

        $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]['ID'], array('width' => $widthPreview, 'height' => $heightPreview), BX_RESIZE_IMAGE_EXACT, true);
        $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["SRC"] = $file["src"];
        $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["WIDTH"] = $file["width"];
        $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["HEIGHT"] = $file["height"];
}