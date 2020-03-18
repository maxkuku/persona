<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
#require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Структура разделов");
$APPLICATION->SetPageProperty("robots","noindex, nofollow");
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

#echo __DIR__;
# /home/virtwww/w_2315art-ru_25432bcf/http/
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"tree",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "31",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_FIELDS" => array("NAME","SORT","DESCRIPTION","IBLOCK_ID",""),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "/catalog/section.php?SECTION_ID=#SECTION_ID#",
		"SECTION_USER_FIELDS" => array("",""),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "4",
		"VIEW_MODE" => "LINE"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
