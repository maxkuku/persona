<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult))
	return;

$widthPreview = 375;
$heightPreview = 165;
foreach($arResult['ITEMS'] as $i => $arItem) {

    $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]['ID'], array('width' => $widthPreview, 'height' => $heightPreview), BX_RESIZE_IMAGE_EXACT, true);
    $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["SRC"] = $file["src"];
    $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["WIDTH"] = $file["width"];
    $arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["HEIGHT"] = $file["height"];
}
/*
$arGoodIds = array();
if (CModule::IncludeModule("iblock"))
{
	$arFilter = array(
		"SITE_ID"=>SITE_ID,
		"ACTIVE" => "Y",
		"IBLOCK_ID" => 1
	);

	$obCache = new CPHPCache();
	if ($obCache->InitCache(36000, serialize($arFilter), "/iblock/news"))
	{
		$arResult = $obCache->GetVars();
	}
	elseif ($obCache->StartDataCache())
	{
		$dbIBlock = CIBlock::GetList(array(), $arFilter);
		$dbIBlock = new CIBlockResult($dbIBlock);

		

			if(defined("BX_COMP_MANAGED_CACHE"))
			{
				global $CACHE_MANAGER;
				$CACHE_MANAGER->StartTagCache("/iblock/news");
				$CACHE_MANAGER->RegisterTag("iblock_id_".$arIBlock["ID"]);
				$CACHE_MANAGER->EndTagCache();
			}








		$obCache->EndDataCache($arResult);
	}
}
*/