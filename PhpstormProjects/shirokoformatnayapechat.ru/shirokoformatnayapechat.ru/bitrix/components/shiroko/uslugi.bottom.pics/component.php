<? /*was a copy of news.list*/
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();



$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PROPERTY_SHOW", "PROPERTY_ARTICLE");
$RFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_SHOW" => htmlspecialchars($_SERVER['PHP_SELF'],3));



$arFilter = $RFilter;


#if($arParams['ID']){
#    $arFilter = array_merge($RFilter, ["ID" => $arParams['ID']]);
#}

$res = CIBlockElement::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, false, Array("nPageSize"=>$arParams["QUAN"]), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arProps  = $ob->GetProperties();
    $arResult[$arFields['ID']]['DETAIL_PICTURE'] = CFile::ResizeImageGet($arFields['DETAIL_PICTURE'], array('width'=>$arParams["DET_WIDTH"], 'height'=>$arParams["DET_HEIGHT"]), BX_RESIZE_IMAGE_PROPORTIONAL_ALT , true);
    $arResult[$arFields['ID']]['DET_DESCR'] = CFile::GetFileArray($arFields['DETAIL_PICTURE']);
    $arResult[$arFields['ID']]['PREVIEW_PICTURE'] = CFile::ResizeImageGet($arFields['PREVIEW_PICTURE'], array('width'=>$arParams["PREV_WIDTH"], 'height'=>$arParams["PREV_HEIGHT"]), BX_RESIZE_IMAGE_PROPORTIONAL_ALT , true);
    $arResult[$arFields['ID']]['PRE_DESCR'] = CFile::GetFileArray($arFields['DETAIL_PICTURE']);
    $arResult[$arFields['ID']]['PROPS'] = $arProps;


    $ipropValues = new \Bitrix\Iblock\InheritedProperty\ElementValues(
        $arFields["IBLOCK_ID"],
        $arFields["ID"]
    );

    $arResult[$arFields['ID']]["IPROPERTY_VALUES"] = $ipropValues->getValues();

}



$this->includeComponentTemplate();
