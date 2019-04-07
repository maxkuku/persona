<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/* кэш */
/*$obCache = new CPHPCache;
$life_time = 30*60; # 30 минут
$cache_id = $ELEMENT_ID.$SECTION_ID.$USER->GetUserGroupString();
if($obCache->InitCache($life_time, $cache_id, "/")) :
    $vars = $obCache->GetVars();
    $SECTION_TITLE = $vars["SECTION_TITLE"];
else :
    $arSection = GetIBlockSection($SECTION_ID);
    $SECTION_TITLE = $arSection["NAME"];
endif;
$APPLICATION->AddChainItem($SECTION_TITLE, $SECTION_URL."SECTION_ID=".$SECTION_ID);

if($obCache->StartDataCache()):*/

/* запрос и фильтр к блоку картинок */

$articleID = [];
if(strlen(htmlspecialchars($_REQUEST['ELEMENT_CODE'],3))>0){
    /* выбрать ID статьи по коду в адресе */
    $arSelect2 = Array("ID", "IBLOCK_ID", "CODE", "NAME", "DATE_ACTIVE_FROM", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PROPERTY_SHOW", "PROPERTY_ARTICLE");
    $arFilter2 = Array("IBLOCK_ID"=>$arParams["ARTICLES_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "CODE"=>htmlspecialchars($_REQUEST['ELEMENT_CODE'],3));
    $res2 = CIBlockElement::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter2, false, false, $arSelect2);

    while($ob2 = $res2->GetNextElement())
    {
        $articleID = $ob2->GetFields();
    }
}




$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PROPERTY_SHOW", "PROPERTY_ARTICLE");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");



# выборка картинок

$res = CIBlockElement::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arProps  = $ob->GetProperties();

    if(in_array($articleID['ID'], $arProps['article']['VALUE'])) {

        $arResult[$arFields['ID']]['DETAIL_PICTURE'] = CFile::ResizeImageGet($arFields['DETAIL_PICTURE'], array('width' => $arParams["DET_WIDTH"], 'height' => $arParams["DET_HEIGHT"]), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
        $arResult[$arFields['ID']]['DET_DESCR'] = CFile::GetFileArray($arFields['DETAIL_PICTURE']);
        $arResult[$arFields['ID']]['PREVIEW_PICTURE'] = CFile::ResizeImageGet($arFields['PREVIEW_PICTURE'], array('width' => $arParams["PREV_WIDTH"], 'height' => $arParams["PREV_HEIGHT"]), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
        $arResult[$arFields['ID']]['PRE_DESCR'] = CFile::GetFileArray($arFields['DETAIL_PICTURE']);
        $arResult[$arFields['ID']]['PROPS'] = $arProps;


        $ipropValues = new \Bitrix\Iblock\InheritedProperty\ElementValues(
            $arFields["IBLOCK_ID"],
            $arFields["ID"]
        );

        $arResult[$arFields['ID']]["IPROPERTY_VALUES"] = $ipropValues->getValues();

    }

}



$this->includeComponentTemplate();

/*    $obCache->EndDataCache(array(
        "SECTION_TITLE"    => $SECTION_TITLE
    ));
endif;*/