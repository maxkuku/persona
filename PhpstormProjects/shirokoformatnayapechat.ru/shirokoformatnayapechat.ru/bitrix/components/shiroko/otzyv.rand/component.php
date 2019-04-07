<? /* feedback random */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();



$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PREVIEW_PICTURE", "PREVIEW_TEXT", "PROPERTY_POST");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "!PREVIEW_PICTURE"=>false);



$res = CIBlockElement::GetList(Array("RAND"=>"ASC"), $arFilter, false, Array("nPageSize"=>$arParams["QUAN"]), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arProps = $ob->GetProperties();
    $arResult[$arFields['ID']]['FIELDS'] = $arFields;
    $arResult[$arFields['ID']]['PREVIEW_PICTURE'] = CFile::ResizeImageGet($arFields['PREVIEW_PICTURE'], array('width'=>$arParams["PREV_WIDTH"], 'height'=>$arParams["PREV_HEIGHT"]), BX_RESIZE_IMAGE_PROPORTIONAL_ALT , true);
    $arResult[$arFields['ID']]['PRE_DESCR'] = CFile::GetFileArray($arFields['PREVIEW_PICTURE']);
    $arResult[$arFields['ID']]['PROPS'] = $arProps;


    $ipropValues = new \Bitrix\Iblock\InheritedProperty\ElementValues(
        $arFields["IBLOCK_ID"],
        $arFields["ID"]
    );

    $arResult[$arFields['ID']]["IPROPERTY_VALUES"] = $ipropValues->getValues();

}



$this->includeComponentTemplate();
