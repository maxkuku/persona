<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

#if (empty($arResult))
#	return;

#$ids = [];
#foreach($arResult['ITEMS']['PROPERTIES']['for_what']['VALUE'] as $r){
#	array_push($ids, $r);
#}

#$arGoodIds = array();
if (CModule::IncludeModule("iblock"))
{
	$arFilter = array(
		"ID"=>$ids,
		"SITE_ID"=>SITE_ID,
		"ACTIVE" => "Y",
		"IBLOCK_ID" => 4
	);

	$obCache = new CPHPCache();
	if ($obCache->InitCache(36000, serialize($arFilter), "/iblock/menu"))
	{
		$arResult = $obCache->GetVars();
	}
	elseif ($obCache->StartDataCache())
	{
		$dbIBlock = CIBlock::GetList(array(), $arFilter);
		$dbIBlock = new CIBlockResult($dbIBlock);

		foreach($arResult['ITEMS'] as $i => $a){
			$arRes = $dbIBlock->GetNext();
			$a[$i]['GOOD'] = $arRes['NAME'];
			$a[$i]['URL'] = $arRes['DETAIL_PAGE_URL'];
		}

			if(defined("BX_COMP_MANAGED_CACHE"))
			{
				global $CACHE_MANAGER;
				$CACHE_MANAGER->StartTagCache("/iblock/menu");
				$CACHE_MANAGER->RegisterTag("iblock_id_".$arIBlock["ID"]);
				$CACHE_MANAGER->EndTagCache();
			}

		$obCache->EndDataCache($arResult);
	}
}