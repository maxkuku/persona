<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$widthPreview = 200;
$heightPreview = 200;

if ($arResult["DETAIL_PICTURE"]) {
    $file = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width'=> $widthPreview, 'height'=> $heightPreview), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["PREVIEW_PICTURE"]["SRC"] = $file["src"];
    $arResult["PREVIEW_PICTURE"]["WIDTH"] = $file["width"];
    $arResult["PREVIEW_PICTURE"]["HEIGHT"] = $file["height"];
} elseif($arResult["PREVIEW_PICTURE"]) {
    $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=> $widthPreview, 'height'=> $heightPreview), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["PREVIEW_PICTURE"]["SRC"] = $file["src"];
    $arResult["PREVIEW_PICTURE"]["WIDTH"] = $file["width"];
    $arResult["PREVIEW_PICTURE"]["HEIGHT"] = $file["height"];
}