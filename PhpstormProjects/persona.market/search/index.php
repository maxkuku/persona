<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");


$arr = Array(
    "AJAX_MODE" => "N",
    "RESTART" => "N",
    "CHECK_DATES" => "Y",
    "USE_TITLE_RANK" => "N",
    "DEFAULT_SORT" => "rank",
    "arrWHERE" => Array(),
    "FILTER_NAME" => "arSectionFilter",
    "SHOW_WHERE" => "N",
    "PAGE_RESULT_COUNT" => "52",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000",
    "PAGER_TITLE" => "Результаты поиска",
    "PAGER_SHOW_ALWAYS" => "Y",
    "PAGER_TEMPLATE" => "",
    "AJAX_OPTION_SHADOW" => "Y",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
	"IMAGES" => "Y"
);



if(htmlspecialchars( $_REQUEST['category_id']) ){

    global $arSectionFilter;
    $arSectionFilter = array();
    $arFilter_goods = array ( );


    $sec = htmlspecialchars( $_REQUEST['category_id'] );
    $arSectionFilter = array( "PARAMS" => array( "iblock_section" => $sec ) ); #если хотим искать в определенной секции каталога, то указываем
    $arFilter_goods = array ( 0 => $sec );


    $arr ["arrFILTER"] = $arSectionFilter;
    $arr ["arrFilter_goods"] = $arFilter_goods;

}




$APPLICATION->IncludeComponent(
	"persona:search.page",
	"suggest",
	$arr,
false
);


#pr($arr);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>