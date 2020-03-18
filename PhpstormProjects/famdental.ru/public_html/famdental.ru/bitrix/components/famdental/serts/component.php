<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
CModule::IncludeModule('iblock');
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PREVIEW_PICTURE", "DETAIL_PICTURE");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "SECTION_ID"=>$arParams["SECTION_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array($arParam["SORT_BY1"]=>$arParam["SORT_ORDER1"]), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()){ 
	$r = $ob->GetFields();  
	$arResult['ITEMS'][$r['ID']] = $r;
	$arResult['ITEMS'][$r['ID']]['FILE_SMALL'] = CFile::ResizeImageGet($r['PREVIEW_PICTURE'], array('width'=>260, 'height'=>187), BX_RESIZE_IMAGE_EXACT, true);
	$arResult['ITEMS'][$r['ID']]['FILE_BIG'] = CFile::ResizeImageGet($r['DETAIL_PICTURE'], array('width'=>1500, 'height'=>905), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
}
$arResult['TITLE'] = $arParams['TITLE'];
$arResult['BCOLOR'] = $arParams['BCOLOR'];
$this->includeComponentTemplate();	