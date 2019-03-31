<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->IncludeComponent( "abricos:antisovetnik", "", array(), false);

$APPLICATION->SetTitle("Каталог «Персона» маркет");
$url_arr = explode('/',$_SERVER['REQUEST_URI']);
$cat_code = array_slice($url_arr,-2,1)[0];
$brand = (htmlspecialchars($_REQUEST['brand_name'],3)) ? htmlspecialchars($_REQUEST['brand_name'],3) : "";
$arrFilter = [];
if($brand)
    $arrFilter = ["PROPERTY_BRAND"=>$brand];

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
?>
	<div class="list-selection-element">
<?
$arrFilter = [];
if(htmlspecialchars($_REQUEST['ajax'],3) == "Y" &&
strlen(htmlspecialchars($_REQUEST['brand'],3) ) > 0){
    array_push($arrFilter, ["PROPERTY_BRAND" => htmlspecialchars($_REQUEST['brand'],3)]);
}

$APPLICATION->IncludeComponent(
	"persona:catalog.section", 
	".default", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
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
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_SORT_FIELD" => $sort,
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => $sort_order,
		"ELEMENT_SORT_ORDER2" => "asc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "goods",
		"INCLUDE_SUBSECTIONS" => "A",
		"LABEL_PROP" => array(
			"0" => "recent",
			"1" => "hit",
			"2" => "sale",
		),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "4",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "Y",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "ELEMENT_META_DESCRIPTION",
		"META_KEYWORDS" => "ELEMENT_META_KEYWORDS",
		"OFFERS_LIMIT" => (htmlspecialchars($_REQUEST['limit'],3))?htmlspecialchars($_REQUEST['limit'],3):16,
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "hairmarket",
		"PAGER_TITLE" => "Страницы",
		"PAGE_ELEMENT_COUNT" => (htmlspecialchars($_REQUEST['limit'],3))?htmlspecialchars($_REQUEST['limit'],3):16,
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
			0 => "variants",
			1 => "recomended",
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
        "SECTION_ID" => htmlspecialchars($_REQUEST["SECTION_ID"],3),
		"SECTION_CODE" => htmlspecialchars($_REQUEST["SECTION_CODE"],3),
		"SECTION_ID_VARIABLE" => "SECTION_CODE",
		"SECTION_URL" => "/catalog/#SECTION_CODE#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
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
		"SECTION_ID" => $_REQUEST["SECTION_CODE"]
	),
	false
);?>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>