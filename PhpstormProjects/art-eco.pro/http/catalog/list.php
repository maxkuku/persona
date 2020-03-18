<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог товаров");
?>
    <div class="page row">
    <div class="main_width">
        <div class="breadcrumbs">
            <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0"
                )
            ); ?>
        </div>
    </div>
    <section class="white">
    <div class="main_width">
    <h1><? $APPLICATION->ShowTitle() ?></h1>
    <div class="row">
<?
CModule::IncludeModule('iblock');



    /*if($_REQUEST['SECTION_ID']){
        CModule::IncludeModule('iblock');
        if(\Bitrix\Iblock\SectionTable::getList(['filter' => ['ID' => $_REQUEST['SECTION_ID']], 'select' => ['IBLOCK_ID']])->fetch()['IBLOCK_ID'] == 24){
           $GLOBALS['arrFilter']['ID'] = [];
            $dbItems = CIBlockElement::GetList([], ['IBLOCK_ID' => 21, 'PROPERTY_CATEGORY' => $_REQUEST['SECTION_ID']], false, false, ['ID']);
            while($item = $dbItems->fetch())
               $GLOBALS['arrFilter']['ID'][] = $item['ID'];
            if(!$GLOBALS['arrFilter']['ID'])
                $GLOBALS['arrFilter']['ID'] = -1;
       }
    }*/

    #$arFilter = array("=PROPERTY_CATEGORY_VALUE" => $_REQUEST['SECTION_ID']);

    $APPLICATION->IncludeComponent(

"bitrix:catalog.section",
"catalog_like_shop",
array(
"ACTION_VARIABLE" => "action",
"ADD_PICT_PROP" => "-",
"ADD_PROPERTIES_TO_BASKET" => "Y",
"ADD_SECTIONS_CHAIN" => "Y",
"ADD_TO_BASKET_ACTION" => "ADD",
"AJAX_MODE" => "N",
"AJAX_OPTION_ADDITIONAL" => "",
"AJAX_OPTION_HISTORY" => "N",
"AJAX_OPTION_JUMP" => "N",
"AJAX_OPTION_STYLE" => "Y",
"BACKGROUND_IMAGE" => "-",
"BASKET_URL" => "/personal/basket.php",
"BROWSER_TITLE" => "-",
"CACHE_FILTER" => "N",
"CACHE_GROUPS" => "Y",
"CACHE_TIME" => "36000000",
"CACHE_TYPE" => "A",
"COMPATIBLE_MODE" => "N",
"COMPONENT_TEMPLATE" => "catalog_like_shop",
"CONVERT_CURRENCY" => "N",
"CUSTOM_FILTER" => "",
"DETAIL_URL" => "",
"DISABLE_INIT_JS_IN_COMPONENT" => "N",
"DISPLAY_BOTTOM_PAGER" => "Y",
"DISPLAY_COMPARE" => "N",
"DISPLAY_TOP_PAGER" => "N",
"ELEMENT_SORT_FIELD" => "sort",
"ELEMENT_SORT_FIELD2" => "id",
"ELEMENT_SORT_ORDER" => "asc",
"ELEMENT_SORT_ORDER2" => "desc",
"ENLARGE_PRODUCT" => "STRICT",
"FILTER_NAME" => "arFilter",
"HIDE_NOT_AVAILABLE" => "N",
"HIDE_NOT_AVAILABLE_OFFERS" => "N",
"IBLOCK_ID" => "30",
"IBLOCK_TYPE" => "catalog",
"INCLUDE_SUBSECTIONS" => "Y",
"LABEL_PROP" => array(
),
"LAZY_LOAD" => "N",
"LINE_ELEMENT_COUNT" => "1000",
"LOAD_ON_SCROLL" => "N",
"MESSAGE_404" => "",
"MESS_BTN_ADD_TO_BASKET" => "В корзину",
"MESS_BTN_BUY" => "Купить",
"MESS_BTN_DETAIL" => "Подробнее",
"MESS_BTN_SUBSCRIBE" => "Подписаться",
"MESS_NOT_AVAILABLE" => "Нет в наличии",
"META_DESCRIPTION" => "-",
"META_KEYWORDS" => "-",
"OFFERS_LIMIT" => "5",
"PAGER_BASE_LINK_ENABLE" => "N",
"PAGER_DESC_NUMBERING" => "N",
"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
"PAGER_SHOW_ALL" => "N",
"PAGER_SHOW_ALWAYS" => "Y",
"PAGER_TEMPLATE" => "forum",
"PAGER_TITLE" => "Товары",
"PAGE_ELEMENT_COUNT" => "51",
"PAGER_SHOW_ALWAYS" => "Y",
"PARTIAL_PRODUCT_PROPERTIES" => "N",
"PRICE_CODE" => array(
),
"PRICE_VAT_INCLUDE" => "Y",
"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
"PRODUCT_ID_VARIABLE" => "id",
"PRODUCT_PROPERTIES" => array(
),
"PRODUCT_PROPS_VARIABLE" => "prop",
"PRODUCT_QUANTITY_VARIABLE" => "quantity",
"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
"PRODUCT_SUBSCRIPTION" => "Y",
"PROPERTY_CODE" => array(
   0 => "CATEGORY",
   1 => "FILES",
   2 => "",
),
"PROPERTY_CODE_MOBILE" => array(
   0 => "FILES",
),
"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
"RCM_TYPE" => "personal",
"SECTION_CODE" => $GLOBALS["arrFilter"]["ID"]?false:$_REQUEST["SECTION_CODE"],
"SECTION_ID" => $GLOBALS["arrFilter"]["ID"]?false:$_REQUEST["SECTION_ID"],
"SECTION_ID_VARIABLE" => "SECTION_ID",
"SECTION_URL" => "section.php?SECTION_ID=#SECTION_ID#",
"SECTION_USER_FIELDS" => array(
   0 => "UF_LOGO",
   1 => "UF_FILES",
   2 => "",
),
"SEF_MODE" => "N",
"SET_BROWSER_TITLE" => "Y",
"SET_LAST_MODIFIED" => "N",
"SET_META_DESCRIPTION" => "N",
"SET_META_KEYWORDS" => "Y",
"SET_STATUS_404" => "N",
"SET_TITLE" => "Y",
"SHOW_404" => "N",
"SHOW_ALL_WO_SECTION" => "Y",
"SHOW_CLOSE_POPUP" => "N",
"SHOW_DISCOUNT_PERCENT" => "N",
"SHOW_FROM_SECTION" => "Y",
"SHOW_MAX_QUANTITY" => "N",
"SHOW_OLD_PRICE" => "N",
"SHOW_PRICE_COUNT" => "1",
"SHOW_SLIDER" => "N",
"SLIDER_INTERVAL" => "3000",
"SLIDER_PROGRESS" => "N",
"TEMPLATE_THEME" => "",
"USE_ENHANCED_ECOMMERCE" => "N",
"USE_MAIN_ELEMENT_SECTION" => "N",
"USE_PRICE_COUNT" => "N",
"USE_PRODUCT_QUANTITY" => "N",
"OFFERS_SORT_FIELD" => "sort",
"OFFERS_SORT_ORDER" => "asc",
"OFFERS_SORT_FIELD2" => "id",
"OFFERS_SORT_ORDER2" => "desc",
"OFFERS_FIELD_CODE" => array(
   0 => "",
   1 => "",
),
"OFFERS_PROPERTY_CODE" => array(
   0 => "",
   1 => "",
),
"PRODUCT_DISPLAY_MODE" => "N",
"OFFERS_CART_PROPERTIES" => ""
),
false
);


/*
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PAGE_URL", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", "PROPERTY_*");
$arFilter = Array(
    "IBLOCK_ID" => 30,
    "ACTIVE_DATE" => "Y",
    "ACTIVE" => "Y",
    "PROPERTY_CATEGORY" => $_REQUEST['SECTION_ID']
);
$res = CIBlockElement::GetList(Array("SORT" => "ASC"), $arFilter, false, Array("nPageSize" => 51), $arSelect);*/?>
        <ul class="row item_list container item_ul"><?/*
while ($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arProps = $ob->GetProperties();



    $widthPreviewSmall = 200;
    $heightPreviewSmall = 200;

    if($arFields["PREVIEW_PICTURE"]) {
        $file = CFile::ResizeImageGet($arFields["PREVIEW_PICTURE"], array('width' => $widthPreviewSmall, 'height' => $heightPreviewSmall), BX_RESIZE_IMAGE_EXACT, true);
    }
    else if($arProps['PHOTOS']['VALUE'][0]){
        $file = CFile::ResizeImageGet($arProps['PHOTOS']['VALUE'][0], array('width' => $widthPreviewSmall, 'height' => $heightPreviewSmall), BX_RESIZE_IMAGE_EXACT, true);
    }
*/

    #pr_admin($arProps['PHOTOS']['VALUE'][0]);

    # $file
    #[src] => /upload/resize_cache/iblock/2a0/200_200_2/romanak02.jpg
    #[width] => 200
    #[height] => 200
    #[size] => 20348


 /*   if(!is_file("/home/virtwww/w_2315art-ru_25432bcf/http".$file['src']))
        $file['src'] = '/images/no_photo.png';



    ?>

        <li id="list_item_<?=$arFields['ID']?>">
            <div class="list_item">
                <a class="section_image"
                   href="<? echo $arFields['IBLOCK_ID'] == 21 ? "/shop/" : "/catalog/"; ?><? echo $arFields['DETAIL_PAGE_URL']; ?>"
                   class="bx_catalog_line_img"
                   style="background: url('<?=$file['src']?>') no-repeat center / cover; height:<?=$heightPreviewSmall?>px; display: block; margin:auto; box-shadow: 0 0 5px 2px #eee;"
                   title="<? echo $arFields['NAME']; ?>"></a>
                <a class="catalog_section_name" style="margin-top: 20px"
                   href="<? echo $arFields['IBLOCK_ID'] == 21 ? "/shop/" : "/catalog/"; ?><? echo $arFields['DETAIL_PAGE_URL']; ?>"><?= $arFields['NAME'] ?></a>
            </div>
        </li>

    <?
}*/?>
        </ul><?
    /* if($_REQUEST['SECTION_ID']){
         CModule::IncludeModule('iblock');
         if(\Bitrix\Iblock\SectionTable::getList(['filter' => ['ID' => $_REQUEST['SECTION_ID']], 'select' => ['IBLOCK_ID']])->fetch()['IBLOCK_ID'] == 24){
            $GLOBALS['arrFilter']['ID'] = [];
             $dbItems = CIBlockElement::GetList([], ['IBLOCK_ID' => 21, 'PROPERTY_CATEGORY' => $_REQUEST['SECTION_ID']], false, false, ['ID']);
             while($item = $dbItems->fetch())
                $GLOBALS['arrFilter']['ID'][] = $item['ID'];
             if(!$GLOBALS['arrFilter']['ID'])
                 $GLOBALS['arrFilter']['ID'] = -1;
        }
     }
     $APPLICATION->IncludeComponent(
"bitrix:catalog.section",
"links",
array(
"ACTION_VARIABLE" => "action",
"ADD_PICT_PROP" => "-",
"ADD_PROPERTIES_TO_BASKET" => "Y",
"ADD_SECTIONS_CHAIN" => "N",
"ADD_TO_BASKET_ACTION" => "ADD",
"AJAX_MODE" => "N",
"AJAX_OPTION_ADDITIONAL" => "",
"AJAX_OPTION_HISTORY" => "N",
"AJAX_OPTION_JUMP" => "N",
"AJAX_OPTION_STYLE" => "Y",
"BACKGROUND_IMAGE" => "-",
"BASKET_URL" => "/personal/basket.php",
"BROWSER_TITLE" => "-",
"CACHE_FILTER" => "N",
"CACHE_GROUPS" => "Y",
"CACHE_TIME" => "36000000",
"CACHE_TYPE" => "A",
"COMPATIBLE_MODE" => "N",
"COMPONENT_TEMPLATE" => "links",
"CONVERT_CURRENCY" => "N",
"CUSTOM_FILTER" => "",
"DETAIL_URL" => "",
"DISABLE_INIT_JS_IN_COMPONENT" => "N",
"DISPLAY_BOTTOM_PAGER" => "N",
"DISPLAY_COMPARE" => "N",
"DISPLAY_TOP_PAGER" => "N",
"ELEMENT_SORT_FIELD" => "sort",
"ELEMENT_SORT_FIELD2" => "id",
"ELEMENT_SORT_ORDER" => "asc",
"ELEMENT_SORT_ORDER2" => "desc",
"ENLARGE_PRODUCT" => "STRICT",
"FILTER_NAME" => "arrFilter",
"HIDE_NOT_AVAILABLE" => "N",
"HIDE_NOT_AVAILABLE_OFFERS" => "N",
"IBLOCK_ID" => "21",
"IBLOCK_TYPE" => "catalog",
"INCLUDE_SUBSECTIONS" => "Y",
"LABEL_PROP" => array(
),
"LAZY_LOAD" => "N",
"LINE_ELEMENT_COUNT" => "10",
"LOAD_ON_SCROLL" => "N",
"MESSAGE_404" => "",
"MESS_BTN_ADD_TO_BASKET" => "В корзину",
"MESS_BTN_BUY" => "Купить",
"MESS_BTN_DETAIL" => "Подробнее",
"MESS_BTN_SUBSCRIBE" => "Подписаться",
"MESS_NOT_AVAILABLE" => "Нет в наличии",
"META_DESCRIPTION" => "-",
"META_KEYWORDS" => "-",
"OFFERS_LIMIT" => "5",
"PAGER_BASE_LINK_ENABLE" => "N",
"PAGER_DESC_NUMBERING" => "N",
"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
"PAGER_SHOW_ALL" => "N",
"PAGER_SHOW_ALWAYS" => "N",
"PAGER_TEMPLATE" => "forum",
"PAGER_TITLE" => "Товары",
"PAGE_ELEMENT_COUNT" => "18",
"PARTIAL_PRODUCT_PROPERTIES" => "N",
"PRICE_CODE" => array(
),
"PRICE_VAT_INCLUDE" => "Y",
"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
"PRODUCT_ID_VARIABLE" => "id",
"PRODUCT_PROPERTIES" => array(
),
"PRODUCT_PROPS_VARIABLE" => "prop",
"PRODUCT_QUANTITY_VARIABLE" => "quantity",
"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
"PRODUCT_SUBSCRIPTION" => "Y",
"PROPERTY_CODE" => array(
    0 => "",
    1 => "CATEGORY",
    2 => "FILES",
    3 => "",
),
"PROPERTY_CODE_MOBILE" => array(
    0 => "FILES",
),
"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
"RCM_TYPE" => "personal",
"SECTION_CODE" => $GLOBALS["arrFilter"]["ID"]?false:$_REQUEST["SECTION_CODE"],
"SECTION_ID" => $GLOBALS["arrFilter"]["ID"]?false:$_REQUEST["SECTION_ID"],
"SECTION_ID_VARIABLE" => "SECTION_ID",
"SECTION_URL" => "section.php?SECTION_ID=#SECTION_ID#",
"SECTION_USER_FIELDS" => array(
    0 => "UF_LOGO",
    1 => "",
),
"SEF_MODE" => "N",
"SET_BROWSER_TITLE" => "Y",
"SET_LAST_MODIFIED" => "N",
"SET_META_DESCRIPTION" => "N",
"SET_META_KEYWORDS" => "Y",
"SET_STATUS_404" => "N",
"SET_TITLE" => "Y",
"SHOW_404" => "N",
"SHOW_ALL_WO_SECTION" => "Y",
"SHOW_CLOSE_POPUP" => "N",
"SHOW_DISCOUNT_PERCENT" => "N",
"SHOW_FROM_SECTION" => "N",
"SHOW_MAX_QUANTITY" => "N",
"SHOW_OLD_PRICE" => "N",
"SHOW_PRICE_COUNT" => "1",
"SHOW_SLIDER" => "N",
"SLIDER_INTERVAL" => "3000",
"SLIDER_PROGRESS" => "N",
"TEMPLATE_THEME" => "",
"USE_ENHANCED_ECOMMERCE" => "N",
"USE_MAIN_ELEMENT_SECTION" => "N",
"USE_PRICE_COUNT" => "N",
"USE_PRODUCT_QUANTITY" => "N",
"OFFERS_SORT_FIELD" => "sort",
"OFFERS_SORT_ORDER" => "asc",
"OFFERS_SORT_FIELD2" => "id",
"OFFERS_SORT_ORDER2" => "desc",
"OFFERS_FIELD_CODE" => array(
    0 => "",
    1 => "",
),
"OFFERS_PROPERTY_CODE" => array(
    0 => "",
    1 => "",
),
"PRODUCT_DISPLAY_MODE" => "N",
"OFFERS_CART_PROPERTIES" => array(
)
),
false
);*/ ?>
    </div>
    </div>
    </section>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>