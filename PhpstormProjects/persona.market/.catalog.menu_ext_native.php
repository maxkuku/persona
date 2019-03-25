<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"persona:menu.sections",
	"",
	Array(
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => SITE_DIR."catalog/",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "4",
		"DEPTH_LEVEL" => "4",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"PATH" => rtrim(str_replace(SITE_DIR . 'catalog/', '', $APPLICATION->GetCurDir()), '/')
	),
	false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>