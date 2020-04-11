<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акции Персона маркет");

if ( isset ( $_REQUEST['limit'] ) && (int)$_REQUEST['limit'] > 0 ){
    setcookie("limit", (int)$_REQUEST['limit'], time() + 3600 * 24 * 365, "/catalog/", $_SERVER['HTTP_HOST'], 1);
}
else if ( isset( $_COOKIE['limit'] ) && (int)$_COOKIE['limit'] > 0 )  {
    $limit = (int)htmlspecialchars($_COOKIE['limit'],3);
}
else {
    $limit = 16;
}

$sort = "ID";
$sort_order = "ASC";

$price = (htmlspecialchars($_REQUEST['price'],3)) ? htmlspecialchars($_REQUEST['price'],3) : "";
if($price) {
    $sort = "PROPERTY_PRICE";
    $sort_order = $price;
}

$rating = (htmlspecialchars($_REQUEST['rating'],3)) ? htmlspecialchars($_REQUEST['rating'],3) : "";
if($rating) {
    $sort = "PROPERTY_RATING";
    $sort_order = $rating;
}

    #$filter = array("!PROPERTY_ACTION"=>false);


    # теперь не надо отмечать галочкой товар акционный
    # достаточно старой / новой цены
    $filter = array(
    	"!PROPERTY_SALE"=>false,
        "!PROPERTY_PRICE"=>false
	);


    $APPLICATION->IncludeComponent(
	"persona:catalog.section", 
	".default", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "NAME",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"DETAIL_URL" => "/catalog/#SECTION_CODE#/#CODE#/",
		"DISABLE_INIT_JS_IN_COMPONENT" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => $sort,
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "nulls,".$sort_order,
		"ELEMENT_SORT_ORDER2" => "asc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "filter",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "goods",
		"INCLUDE_SUBSECTIONS" => "A",
		"LABEL_PROP" => array(
		),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "Y",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "ELEMENT_META_DESCRIPTION",
		"META_KEYWORDS" => "ELEMENT_META_KEYWORDS",
		"OFFERS_LIMIT" => "0",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "hairmarket",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "18",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
			0 => "variants,recomended",
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':true}]",
		"PROPERTY_CODE" => array(
			0 => "artikul",
			1 => "price",
			2 => "recomend",
			3 => "brand",
			4 => "quick",
			5 => "variants",
			6 => "vid_tovara",
			7 => "category",
			8 => "quantity_cust",
			9 => "line",
			10 => "naznacheniye",
			11 => "our_choice",
			12 => "recomended",
			13 => "strana_brenda",
			14 => "tip_volos",
			15 => "tip_sredstva",
			16 => "action",
			17 => "recent",
			18 => "hit",
			19 => "sale",
			20 => "upakovka",
			21 => "",
		),
		"PROPERTY_CODE_MOBILE" => array(
			0 => "artikul",
			1 => "price",
			2 => "recomend",
			3 => "brand",
			4 => "quick",
			5 => "variants",
			6 => "vid_tovara",
			7 => "category",
			8 => "quantity_cust",
			9 => "line",
			10 => "naznacheniye",
			11 => "our_choice",
			12 => "recomended",
			13 => "strana_brenda",
			14 => "tip_volos",
			15 => "tip_sredstva",
			16 => "action",
			17 => "recent",
			18 => "hit",
			19 => "sale",
		),
		"RCM_PROD_ID" => $arResult["ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_ID_VARIABLE" => "SECTION_CODE",
		"SECTION_URL" => "/catalog/#SECTION_CODE#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_FROM_SECTION" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "N",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"USE_PRICE_COUNT" => "Y",
		"USE_PRODUCT_QUANTITY" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DATA_LAYER_NAME" => "dataLayer",
		"BRAND_PROPERTY" => "brand",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"SEF_RULE" => "#SECTION_CODE#",
		"SECTION_CODE_PATH" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"FILE_404" => ""
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>