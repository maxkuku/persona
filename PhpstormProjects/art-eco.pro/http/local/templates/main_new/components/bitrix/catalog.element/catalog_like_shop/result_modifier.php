<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

if($arResult['PROPERTIES']['TVIDEO']['VALUE'])
{
	foreach($arResult['PROPERTIES']['TVIDEO']['VALUE'] as $k=>$video)
	{
		$arResult['VIDEOS'][] = [
			
			"VIDEO" => CFile::GetPath($video),
			"TITLE" => $arResult['PROPERTIES']['TVIDEO_TITLES']['VALUE'][$k],
			"NOTICE" => $arResult['PROPERTIES']['TVIDEO_NOTICE']['VALUE'][$k]
		
		];	
	}
	
	
}else{
 
 
	$nav = CIBlockSection::GetNavChain(false, $arResult['IBLOCK_SECTION_ID']);
	while($arNav = $nav->GetNext())
	{
		$ar_sections[] = $arNav['ID'];	
	}

	$db_sec = CIBlockSection::GetList(
									array(),
									array("IBLOCK_ID"=>$arResult['IBLOCK_ID'],"ID"=>$ar_sections),
									false,
									array("UF_VIDEO","UF_VIDEO_TITLE","UF_VIDEO_NOTICE"));
									
	while($ar_sec = $db_sec->GetNext())
	{
		if(count($ar_sec["UF_VIDEO"])>0)
		{
			foreach($ar_sec["UF_VIDEO"] as $k=>$item)
			{ 
				if(!$item)
				{
					continue;
				}

				$ar_videos = [
								"VIDEO"=>CFile::GetPath($item),
								"TITLE"=>$ar_sec["UF_VIDEO_TITLE"][$k],
								"NOTICE"=>$ar_sec["UF_VIDEO_NOTICE"][$k]
							];
							
				$arResult['VIDEOS'][] = $ar_videos;
			}
		}	
	}

	/*if($arResult['ID']==717 || $arResult['ID']==720 || $arResult['ID']==715 || $arResult['ID']==723 || $arResult['ID']==716 ||
	$arResult['ID']==721 || $arResult['ID']==717)
	{
		unset($arResult['VIDEOS'][0]);
	}*/

}

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();