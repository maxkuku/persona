<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult))
	return;

/*$ids = [];
foreach($arResult['ITEMS']['PROPERTIES']['for_what']['VALUE'] as $r){
	array_push($ids, $r);
}*/

$arGoodIds = array();
if (CModule::IncludeModule("iblock"))
{
	$arFilter = array(
		"SITE_ID"=>SITE_ID,
		"ACTIVE" => "Y",
		"IBLOCK_ID" => 13
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