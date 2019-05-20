<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$widthPreview = 248;
$heightPreview = 260;

if($arResult["ITEM"]["PREVIEW_PICTURE"]['ID']) {
    

    $file = CFile::ResizeImageGet($arResult["ITEM"]["PREVIEW_PICTURE"]['ID'], array('width' => $widthPreview, 'height' => $heightPreview), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult['ITEM']["PREVIEW_PICTURE"]["SRC"] = $file["src"];
    $arResult['ITEM']["PREVIEW_PICTURE"]["WIDTH"] = $widthPreview;
    $arResult['ITEM']["PREVIEW_PICTURE"]["HEIGHT"] = $heightPreview;

}
