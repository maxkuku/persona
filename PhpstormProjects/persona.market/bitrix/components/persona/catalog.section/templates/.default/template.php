<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');

$rs_Section = CIBlockSection::GetList(
    array(),
    array("IBLOCK_ID" => 4, "SECTION_CODE"=>urldecode($_REQUEST['SECTION_CODE'])),
    false,
    array('ID')
);

while($ar_Section = $rs_Section->GetNext(true, false))
{
    $_REQUEST['SECTION_ID'] = $ar_Section["ID"];
}



if(strlen($_REQUEST['SECTION_CODE']) < 1){
    $_REQUEST['SECTION_CODE'] = $cat_code;
}

$res = CatalogSectionComponent::getPageText($_REQUEST['SECTION_ID'], $_REQUEST['SECTION_CODE']);
$brands = [];
$ratings_all = [];
$brands_all = [];



foreach ($arResult['ITEMS'] as $item)
{
    $brands_all[] = $item['PROPERTIES']['brand']['VALUE'];
    if($item['PROPERTIES']['rating']['VALUE']) {
        $ratings_all[] = $item['PROPERTIES']['rating']['VALUE'];
    }
}
//для фильтра по брендам
if($brands_all)
    $brands = array_unique($brands_all);

//для корневой страницы Бренды
if(strpos($_SERVER['QUERY_STRING'], 'brand') == false){
    $brands = [];
    $brands_req = $DB->Query("SELECT ID, VALUE FROM b_iblock_element_property WHERE iblock_property_id = 32 GROUP BY VALUE");
    while($i = $brands_req->Fetch()){
        $brands[] = $i['VALUE'];
    }
}



if($ratings_all)
    $ratings = array_unique($ratings_all);



if(strlen($res[0]['DETAIL_TEXT'])>1):?>
    <div class="red-links desc_cat" data-readmore="" aria-expanded="false" id="rmjs-<?=$res[0]['ID']?>">
        <div>
            <?=$res[0]['DETAIL_TEXT']?>
            <div class="clearfix"></div>
        </div>
    </div>

    <hr>
<?endif?>

<?$url_was = substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'],'?'));
parse_str($_SERVER['QUERY_STRING'], $url_query);

?>

<div>
<div class="row">
    <div class="col-lg-12 col-xs-12 products-filter text-center">
        <div class="btn-group pull-left">
            <div class="btn-group">
                <button type="button" id="grid-view" class="btn btn-default active">
                    <i class="fa fa-th fa-fw"></i><span class="hidden-md hidden-sm hidden-xs "> Сетка</span>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" id="list-view" class="btn btn-default">
                    <i class="fa fa-th-list fa-fw"></i><span class="hidden-md hidden-sm hidden-xs "> Список</span>
                </button>
            </div>
        </div>

        <div class="btn-group">
            <div class="btn-group hidden-xs hidden-sm hidden-md ">
                <button type="button" id="manufact" class="btn " style="border-color: #ccc;">
                    <span class="">Производитель:</span>
                </button>
            </div>
            <div class="btn-group <?=(count($brands)>0 && strpos($_SERVER['QUERY_STRING'], 'brand_name') > -1)?"get-brand":"clear"?>" id="filter_manufacturer">
                <button class="btn btn-default dropdown-toggle brands-toggle" type="button" data-toggle="dropdown" role="menu">
                    <span class=" button-text">&nbsp;&nbsp;</span><i class="fa fa-angle-down caretalt"></i>
                </button>

                <ul class="dropdown-menu pull-right">
                    <li><a href="<?=$url_was?>"><b>Все производители</b></a></li>
                    <?for ($r = 0; $r < count($brands); $r++):?>
                        <li data-property="<?=$brands[$r]?>" data-brand="<?=htmlspecialchars($_REQUEST['brand_name'])?>" class="<?=($brands[$r] == htmlspecialchars($_REQUEST['brand_name']))?"active":""?>"><a href="<?=$url?>?brand_name=<?=$brands[$r]?>"><?=$brands[$r]?></a></li>
                    <?endfor?>
                </ul>
                <button class="btn btn-default dropdown-toggle filt-but pull-right" type="button">
                    <span class="-text"></span><i class="fa fa-filter striked" title="Очистить фильтр" data-tooltip="Очистить фильтр" onclick="location.href='<?=$url_was?>'"></i>
                </button>
            </div>
        </div>





        <div class="btn-group pull-right">
            <div class="btn-group <?=(strlen(htmlspecialchars($_GET['price'],3))>0 || strlen(htmlspecialchars($_GET['rating'],3))>0)?"get-sort":"clear"?>" title="Сортировать:" id="sort-button">
                <button class="btn btn-default dropdown-toggle price-toggle" id="rate_to_show" type="button" data-toggle="dropdown">
                    <i class="fa fa-sort"></i>&nbsp;&nbsp;
                    <span class="button-text">&nbsp;&nbsp;</span><i class="fa fa-angle-down caretalt"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="<?=$url_was?>"><b>По умолчанию</b></a></li>
                    <?$r1 = array_merge($url_query,array("price"=>"ASC"));?>
                    <li class="<?=(htmlspecialchars($_GET['price'],3)=="ASC")?"active":""?>"><a href="<?=$url_was?>?<?=http_build_query($r1)?>">По цене (возрастанию)</a></li>
                    <?$r2 = array_merge($url_query,array("price"=>"DESC"));?>
                    <li class="<?=(htmlspecialchars($_GET['price'],3)=="DESC")?"active":""?>"><a href="<?=$url_was?>?<?=http_build_query($r2)?>">По цене (убыванию)</a></li>
                    <?if($ratings): // если есть хоть один рейтинг?>
                        <?$r3 = array_merge($url_query,array("rating"=>"DESC"));?>
                        <li class="<?=(htmlspecialchars($_GET['rating'],3)=="ASC")?"active":""?>"><a href="<?=$url_was?>?<?=http_build_query($r3)?>">По рейтингу (убыванию)</a></li>
                        <?$r4 = array_merge($url_query,array("rating"=>"ASC"));?>
                        <li class="<?=(htmlspecialchars($_GET['rating'],3)=="DESC")?"active":""?>"><a href="<?=$url_was?>?<?=http_build_query($r4)?>">По рейтингу (возрастанию)</a></li>
                    <?endif?>
                </ul>
            </div>
            <div class="btn-group <?=(strlen(htmlspecialchars($_GET['limit'],3))>0)?"get-limit":"clear"?>" title="Показывать:" id="limit-button">
                <button class="btn btn-default dropdown-toggle limit-toggle" type="button" id="lim_button" data-toggle="dropdown">
                    <i class="fa fa-eye"></i>&nbsp;&nbsp;
                    <span class="button-text">&nbsp;&nbsp;</span><i class="fa fa-angle-down caretalt"></i>
                </button>
                <ul class="dropdown-menu pull-right">
                    <?$r5 = array_merge($url_query,array("limit"=>"16"));?>
                    <li class="text-right <?=(htmlspecialchars($_GET['limit'],3)=="16")?"active":""?>"><a href="<?=$url_was?>?<?=http_build_query($r5)?>"><i class="fa fa-eye"></i><b>16</b></a></li>
                    <?$r6 = array_merge($url_query,array("limit"=>"28"));?>
                    <li class="text-right <?=(htmlspecialchars($_GET['limit'],3)=="28")?"active":""?>"><a href="<?=$url_was?>?<?=http_build_query($r6)?>"><i class="fa fa-eye"></i>  28</a></li>
                    <?$r7 = array_merge($url_query,array("limit"=>"54"));?>
                    <li class="text-right <?=(htmlspecialchars($_GET['limit'],3)=="54")?"active":""?>"><a href="<?=$url_was?>?<?=http_build_query($r7)?>"><i class="fa fa-eye"></i>  54</a></li>
                    <?$r8 = array_merge($url_query,array("limit"=>"100"));?>
                    <li class="text-right <?=(htmlspecialchars($_GET['limit'],3)=="100")?"active":""?>"><a href="<?=$url_was?>?<?=http_build_query($r8)?>"><i class="fa fa-eye"></i>  100</a></li>
                </ul>
                <button class="btn btn-default filt-but" type="button">
                    <span class="-text"></span><i class="fa fa-filter striked" title="Очистить фильтр" data-tooltip="Очистить фильтр" onclick="location.href='<?=$url_was?>'"></i>
                </button>
            </div>
        </div>
    </div>
</div>
</div>
<?
if (!empty($arResult['NAV_RESULT']))
{
    $navParams =  array(
        'NavPageCount' => $arResult['NAV_RESULT']->NavPageCount,
        'NavPageNomer' => $arResult['NAV_RESULT']->NavPageNomer,
        'NavNum' => $arResult['NAV_RESULT']->NavNum
    );
}
else
{
    $navParams = array(
        'NavPageCount' => 1,
        'NavPageNomer' => 1,
        'NavNum' => $this->randString()
    );
}

$showTopPager = false;
$showBottomPager = false;
$showLazyLoad = false;

if ($arParams['PAGE_ELEMENT_COUNT'] > 0 && $navParams['NavPageCount'] > 1)
{
    $showTopPager = $arParams['DISPLAY_TOP_PAGER'];
    $showBottomPager = $arParams['DISPLAY_BOTTOM_PAGER'];
    $showLazyLoad = $arParams['LAZY_LOAD'] === 'Y' && $navParams['NavPageNomer'] != $navParams['NavPageCount'];
}

$templateLibrary = array('popup', 'ajax', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES']))
{
    $templateLibrary[] = 'currency';
    $currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
    'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
    'TEMPLATE_LIBRARY' => $templateLibrary,
    'CURRENCIES' => $currencyList
);
unset($currencyList, $templateLibrary);

$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));

$positionClassMap = array(
    'left' => 'product-item-label-left',
    'center' => 'product-item-label-center',
    'right' => 'product-item-label-right',
    'bottom' => 'product-item-label-bottom',
    'middle' => 'product-item-label-middle',
    'top' => 'product-item-label-top'
);

$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
    foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
    {
        $discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
    }
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
    foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
    {
        $labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
    }
}

$arParams['~MESS_BTN_BUY'] = $arParams['~MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_BUY');
$arParams['~MESS_BTN_DETAIL'] = $arParams['~MESS_BTN_DETAIL'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_DETAIL');
$arParams['~MESS_BTN_COMPARE'] = $arParams['~MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_COMPARE');
$arParams['~MESS_BTN_SUBSCRIBE'] = $arParams['~MESS_BTN_SUBSCRIBE'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_SUBSCRIBE');
$arParams['~MESS_BTN_ADD_TO_BASKET'] = $arParams['~MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_ADD_TO_BASKET');
$arParams['~MESS_NOT_AVAILABLE'] = $arParams['~MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCS_TPL_MESS_PRODUCT_NOT_AVAILABLE');
$arParams['~MESS_SHOW_MAX_QUANTITY'] = $arParams['~MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCS_CATALOG_SHOW_MAX_QUANTITY');
$arParams['~MESS_RELATIVE_QUANTITY_MANY'] = $arParams['~MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCS_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['~MESS_RELATIVE_QUANTITY_FEW'] = $arParams['~MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCS_CATALOG_RELATIVE_QUANTITY_FEW');

$arParams['MESS_BTN_LAZY_LOAD'] = $arParams['MESS_BTN_LAZY_LOAD'] ?: Loc::getMessage('CT_BCS_CATALOG_MESS_BTN_LAZY_LOAD');

$generalParams = array(
    'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
    'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
    'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
    'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
    'MESS_SHOW_MAX_QUANTITY' => $arParams['~MESS_SHOW_MAX_QUANTITY'],
    'MESS_RELATIVE_QUANTITY_MANY' => $arParams['~MESS_RELATIVE_QUANTITY_MANY'],
    'MESS_RELATIVE_QUANTITY_FEW' => $arParams['~MESS_RELATIVE_QUANTITY_FEW'],
    'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
    'USE_PRODUCT_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
    'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
    'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
    'ADD_PROPERTIES_TO_BASKET' => $arParams['ADD_PROPERTIES_TO_BASKET'],
    'PRODUCT_PROPS_VARIABLE' => $arParams['PRODUCT_PROPS_VARIABLE'],
    'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'],
    'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
    'COMPARE_PATH' => $arParams['COMPARE_PATH'],
    'COMPARE_NAME' => $arParams['COMPARE_NAME'],
    'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
    'PRODUCT_BLOCKS_ORDER' => $arParams['PRODUCT_BLOCKS_ORDER'],
    'LABEL_POSITION_CLASS' => $labelPositionClass,
    'DISCOUNT_POSITION_CLASS' => $discountPositionClass,
    'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
    'SLIDER_PROGRESS' => $arParams['SLIDER_PROGRESS'],
    '~BASKET_URL' => $arParams['~BASKET_URL'],
    '~ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
    '~BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE'],
    '~COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
    '~COMPARE_DELETE_URL_TEMPLATE' => $arResult['~COMPARE_DELETE_URL_TEMPLATE'],
    'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
    'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
    'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
    'BRAND_PROPERTY' => $arParams['BRAND_PROPERTY'],
    'MESS_BTN_BUY' => $arParams['~MESS_BTN_BUY'],
    'MESS_BTN_DETAIL' => $arParams['~MESS_BTN_DETAIL'],
    'MESS_BTN_COMPARE' => $arParams['~MESS_BTN_COMPARE'],
    'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
    'MESS_BTN_ADD_TO_BASKET' => $arParams['~MESS_BTN_ADD_TO_BASKET'],
    'MESS_NOT_AVAILABLE' => $arParams['~MESS_NOT_AVAILABLE']
);

$obName = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $this->GetEditAreaId($navParams['NavNum']));
$containerName = 'container-'.$navParams['NavNum'];

if ($showTopPager)
{
    ?>
    <div data-pagination-num="<?=$navParams['NavNum']?>">
        <!-- pagination-container -->
        <?=$arResult['NAV_STRING']?>
        <!-- pagination-container -->
    </div>
    <?
}

if ($arParams['HIDE_SECTION_DESCRIPTION'] !== 'Y')
{
    ?>
    <div class="bx-section-desc bx-<?=$arParams['TEMPLATE_THEME']?>">
        <p class="bx-section-desc-post"><?=$arResult['DESCRIPTION']?></p>
    </div>
    <?
}
?>


<div class="catalog-section row template-<?=$arParams['TEMPLATE_THEME']?>" data-entity="<?=$containerName?>"  data-bal="append-bal">
    <?
    if (!empty($arResult['ITEMS']) && !empty($arResult['ITEM_ROWS']))
    {
        $areaIds = array();

        foreach ($arResult['ITEMS'] as $item)
        {
            $uniqueId = $item['ID'].'_'.md5($this->randString().$component->getAction());
            $areaIds[$item['ID']] = $this->GetEditAreaId($uniqueId);
            $this->AddEditAction($uniqueId, $item['EDIT_LINK'], $elementEdit);
            $this->AddDeleteAction($uniqueId, $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);
        }
        ?>
        <!-- items-container -->
        <?
        foreach ($arResult['ITEM_ROWS'] as $rowData)
        {
            $rowItems = array_splice($arResult['ITEMS'], 0, $rowData['COUNT']);
            ?>
            <div class="line <?=$rowData['CLASS']?>" data-entity="items-lines">
                <?
                switch ($rowData['VARIANT'])
                {
                    case 0:
                        ?>
                        <div class="col-xs-12 product-item-small-card">
                            <div class="row">
                                <div class="col-xs-12 product-item-big-card">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?
                                            $item = reset($rowItems);
                                            $APPLICATION->IncludeComponent(
                                                'persona:catalog.item',
                                                '',
                                                array(
                                                    'RESULT' => array(
                                                        'ITEM' => $item,
                                                        'AREA_ID' => $areaIds[$item['ID']],
                                                        'TYPE' => $rowData['TYPE'],
                                                        'BIG_LABEL' => 'N',
                                                        'BIG_DISCOUNT_PERCENT' => 'N',
                                                        'BIG_BUTTONS' => 'N',
                                                        'SCALABLE' => 'N'
                                                    ),
                                                    'PARAMS' => $generalParams
                                                        + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                                                ),
                                                $component,
                                                array('HIDE_ICONS' => 'Y')
                                            );
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?
                        break;

                    case 1:
                        ?>
                        <div class="col-xs-12 product-item-small-card">
                            <div class="row">
                                <?
                                foreach ($rowItems as $item)
                                {
                                    ?>
                                    <div class="col-xs-6 product-item-big-card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?
                                                $APPLICATION->IncludeComponent(
                                                    'persona:catalog.item',
                                                    '',
                                                    array(
                                                        'RESULT' => array(
                                                            'ITEM' => $item,
                                                            'AREA_ID' => $areaIds[$item['ID']],
                                                            'TYPE' => $rowData['TYPE'],
                                                            'BIG_LABEL' => 'N',
                                                            'BIG_DISCOUNT_PERCENT' => 'N',
                                                            'BIG_BUTTONS' => 'N',
                                                            'SCALABLE' => 'N'
                                                        ),
                                                        'PARAMS' => $generalParams
                                                            + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                                                    ),
                                                    $component,
                                                    array('HIDE_ICONS' => 'Y')
                                                );
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?
                                }
                                ?>
                            </div>
                        </div>
                        <?
                        break;

                    case 2:
                        ?>
                        <!--we have case 2-->

                        <?
                        foreach ($rowItems as $item)
                        {

                            $APPLICATION->IncludeComponent(
                                'persona:catalog.item',
                                '',
                                array(
                                    'RESULT' => array(
                                        'ITEM' => $item,
                                        'AREA_ID' => $areaIds[$item['ID']],
                                        'TYPE' => $rowData['TYPE'],
                                        'BIG_LABEL' => 'N',
                                        'BIG_DISCOUNT_PERCENT' => 'N',
                                        'BIG_BUTTONS' => 'Y',
                                        'SCALABLE' => 'N'
                                    ),
                                    'PARAMS' => $generalParams
                                        + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                                ),
                                $component,
                                array('HIDE_ICONS' => 'Y')
                            );


                        }

                        break;

                    case 3:
                        ?>
                        <div class="col-xs-12 product-item-small-card">
                            <div class="row">
                                <?
                                foreach ($rowItems as $item)
                                {
                                    ?>
                                    <div class="col-xs-6 col-md-3">
                                        <?
                                        $APPLICATION->IncludeComponent(
                                            'persona:catalog.item',
                                            '',
                                            array(
                                                'RESULT' => array(
                                                    'ITEM' => $item,
                                                    'AREA_ID' => $areaIds[$item['ID']],
                                                    'TYPE' => $rowData['TYPE'],
                                                    'BIG_LABEL' => 'N',
                                                    'BIG_DISCOUNT_PERCENT' => 'N',
                                                    'BIG_BUTTONS' => 'N',
                                                    'SCALABLE' => 'N'
                                                ),
                                                'PARAMS' => $generalParams
                                                    + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                                            ),
                                            $component,
                                            array('HIDE_ICONS' => 'Y')
                                        );
                                        ?>
                                    </div>
                                    <?
                                }
                                ?>
                            </div>
                        </div>
                        <?
                        break;

                    case 4:
                        $rowItemsCount = count($rowItems);
                        ?>
                        <div class="col-sm-6 product-item-big-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <?
                                    $item = array_shift($rowItems);
                                    $APPLICATION->IncludeComponent(
                                        'persona:catalog.item',
                                        '',
                                        array(
                                            'RESULT' => array(
                                                'ITEM' => $item,
                                                'AREA_ID' => $areaIds[$item['ID']],
                                                'TYPE' => $rowData['TYPE'],
                                                'BIG_LABEL' => 'N',
                                                'BIG_DISCOUNT_PERCENT' => 'N',
                                                'BIG_BUTTONS' => 'Y',
                                                'SCALABLE' => 'Y'
                                            ),
                                            'PARAMS' => $generalParams
                                                + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                                        ),
                                        $component,
                                        array('HIDE_ICONS' => 'Y')
                                    );
                                    unset($item);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 product-item-small-card">
                            <div class="row">
                                <?
                                for ($i = 0; $i < $rowItemsCount - 1; $i++)
                                {
                                    ?>
                                    <div class="col-xs-6">
                                        <?
                                        $APPLICATION->IncludeComponent(
                                            'persona:catalog.item',
                                            '',
                                            array(
                                                'RESULT' => array(
                                                    'ITEM' => $rowItems[$i],
                                                    'AREA_ID' => $areaIds[$rowItems[$i]['ID']],
                                                    'TYPE' => $rowData['TYPE'],
                                                    'BIG_LABEL' => 'N',
                                                    'BIG_DISCOUNT_PERCENT' => 'N',
                                                    'BIG_BUTTONS' => 'N',
                                                    'SCALABLE' => 'N'
                                                ),
                                                'PARAMS' => $generalParams
                                                    + array('SKU_PROPS' => $arResult['SKU_PROPS'][$rowItems[$i]['IBLOCK_ID']])
                                            ),
                                            $component,
                                            array('HIDE_ICONS' => 'Y')
                                        );
                                        ?>
                                    </div>
                                    <?
                                }
                                ?>
                            </div>
                        </div>
                        <?
                        break;

                    case 5:
                        $rowItemsCount = count($rowItems);
                        ?>
                        <div class="col-sm-6 product-item-small-card">
                            <div class="row">
                                <?
                                for ($i = 0; $i < $rowItemsCount - 1; $i++)
                                {
                                    ?>
                                    <div class="col-xs-6">
                                        <?
                                        $APPLICATION->IncludeComponent(
                                            'persona:catalog.item',
                                            '',
                                            array(
                                                'RESULT' => array(
                                                    'ITEM' => $rowItems[$i],
                                                    'AREA_ID' => $areaIds[$rowItems[$i]['ID']],
                                                    'TYPE' => $rowData['TYPE'],
                                                    'BIG_LABEL' => 'N',
                                                    'BIG_DISCOUNT_PERCENT' => 'N',
                                                    'BIG_BUTTONS' => 'N',
                                                    'SCALABLE' => 'N'
                                                ),
                                                'PARAMS' => $generalParams
                                                    + array('SKU_PROPS' => $arResult['SKU_PROPS'][$rowItems[$i]['IBLOCK_ID']])
                                            ),
                                            $component,
                                            array('HIDE_ICONS' => 'Y')
                                        );
                                        ?>
                                    </div>
                                    <?
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-6 product-item-big-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <?
                                    $item = end($rowItems);
                                    $APPLICATION->IncludeComponent(
                                        'persona:catalog.item',
                                        '',
                                        array(
                                            'RESULT' => array(
                                                'ITEM' => $item,
                                                'AREA_ID' => $areaIds[$item['ID']],
                                                'TYPE' => $rowData['TYPE'],
                                                'BIG_LABEL' => 'N',
                                                'BIG_DISCOUNT_PERCENT' => 'N',
                                                'BIG_BUTTONS' => 'Y',
                                                'SCALABLE' => 'Y'
                                            ),
                                            'PARAMS' => $generalParams
                                                + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                                        ),
                                        $component,
                                        array('HIDE_ICONS' => 'Y')
                                    );
                                    unset($item);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?
                        break;

                    case 6:
                        ?>
                        case6
                        <div class="col-xs-12 product-item-small-card">
                            <div class="row">
                                <?
                                foreach ($rowItems as $item)
                                {
                                    ?>
                                    <div class="col-xs-6 col-sm-4 col-md-2">
                                        <?
                                        $APPLICATION->IncludeComponent(
                                            'persona:catalog.item',
                                            '',
                                            array(
                                                'RESULT' => array(
                                                    'ITEM' => $item,
                                                    'AREA_ID' => $areaIds[$item['ID']],
                                                    'TYPE' => $rowData['TYPE'],
                                                    'BIG_LABEL' => 'N',
                                                    'BIG_DISCOUNT_PERCENT' => 'N',
                                                    'BIG_BUTTONS' => 'N',
                                                    'SCALABLE' => 'N'
                                                ),
                                                'PARAMS' => $generalParams
                                                    + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                                            ),
                                            $component,
                                            array('HIDE_ICONS' => 'Y')
                                        );
                                        ?>
                                    </div>
                                    <?
                                }
                                ?>
                            </div>
                        </div>
                        <?
                        break;

                    case 7:
                        $rowItemsCount = count($rowItems);
                        ?>
                        <div class="col-sm-6 product-item-big-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <?
                                    $item = array_shift($rowItems);
                                    $APPLICATION->IncludeComponent(
                                        'persona:catalog.item',
                                        '',
                                        array(
                                            'RESULT' => array(
                                                'ITEM' => $item,
                                                'AREA_ID' => $areaIds[$item['ID']],
                                                'TYPE' => $rowData['TYPE'],
                                                'BIG_LABEL' => 'N',
                                                'BIG_DISCOUNT_PERCENT' => 'N',
                                                'BIG_BUTTONS' => 'Y',
                                                'SCALABLE' => 'Y'
                                            ),
                                            'PARAMS' => $generalParams
                                                + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                                        ),
                                        $component,
                                        array('HIDE_ICONS' => 'Y')
                                    );
                                    unset($item);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 product-item-small-card">
                            <div class="row">
                                <?
                                for ($i = 0; $i < $rowItemsCount - 1; $i++)
                                {
                                    ?>
                                    <div class="col-xs-6 col-md-4">
                                        <?
                                        $APPLICATION->IncludeComponent(
                                            'persona:catalog.item',
                                            '',
                                            array(
                                                'RESULT' => array(
                                                    'ITEM' => $rowItems[$i],
                                                    'AREA_ID' => $areaIds[$rowItems[$i]['ID']],
                                                    'TYPE' => $rowData['TYPE'],
                                                    'BIG_LABEL' => 'N',
                                                    'BIG_DISCOUNT_PERCENT' => 'N',
                                                    'BIG_BUTTONS' => 'N',
                                                    'SCALABLE' => 'N'
                                                ),
                                                'PARAMS' => $generalParams
                                                    + array('SKU_PROPS' => $arResult['SKU_PROPS'][$rowItems[$i]['IBLOCK_ID']])
                                            ),
                                            $component,
                                            array('HIDE_ICONS' => 'Y')
                                        );
                                        ?>
                                    </div>
                                    <?
                                }
                                ?>
                            </div>
                        </div>
                        <?
                        break;

                    case 8:
                        $rowItemsCount = count($rowItems);
                        ?>
                        <div class="col-sm-6 product-item-small-card">
                            <div class="row">
                                <?
                                for ($i = 0; $i < $rowItemsCount - 1; $i++)
                                {
                                    ?>
                                    <div class="col-xs-6 col-md-4">
                                        <?
                                        $APPLICATION->IncludeComponent(
                                            'persona:catalog.item',
                                            '',
                                            array(
                                                'RESULT' => array(
                                                    'ITEM' => $rowItems[$i],
                                                    'AREA_ID' => $areaIds[$rowItems[$i]['ID']],
                                                    'TYPE' => $rowData['TYPE'],
                                                    'BIG_LABEL' => 'N',
                                                    'BIG_DISCOUNT_PERCENT' => 'N',
                                                    'BIG_BUTTONS' => 'N',
                                                    'SCALABLE' => 'N'
                                                ),
                                                'PARAMS' => $generalParams
                                                    + array('SKU_PROPS' => $arResult['SKU_PROPS'][$rowItems[$i]['IBLOCK_ID']])
                                            ),
                                            $component,
                                            array('HIDE_ICONS' => 'Y')
                                        );
                                        ?>
                                    </div>
                                    <?
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-6 product-item-big-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <?
                                    $item = end($rowItems);
                                    $APPLICATION->IncludeComponent(
                                        'persona:catalog.item',
                                        '',
                                        array(
                                            'RESULT' => array(
                                                'ITEM' => $item,
                                                'AREA_ID' => $areaIds[$item['ID']],
                                                'TYPE' => $rowData['TYPE'],
                                                'BIG_LABEL' => 'N',
                                                'BIG_DISCOUNT_PERCENT' => 'N',
                                                'BIG_BUTTONS' => 'Y',
                                                'SCALABLE' => 'Y'
                                            ),
                                            'PARAMS' => $generalParams
                                                + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                                        ),
                                        $component,
                                        array('HIDE_ICONS' => 'Y')
                                    );
                                    unset($item);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?
                        break;

                    case 9:
                        ?>
                        <div class="col-xs-12">
                            <div class="row">
                                <?
                                foreach ($rowItems as $item)
                                {
                                    ?>
                                    <div class="col-xs-12 product-item-line-card">
                                        <?
                                        $APPLICATION->IncludeComponent(
                                            'persona:catalog.item',
                                            '',
                                            array(
                                                'RESULT' => array(
                                                    'ITEM' => $item,
                                                    'AREA_ID' => $areaIds[$item['ID']],
                                                    'TYPE' => $rowData['TYPE'],
                                                    'BIG_LABEL' => 'N',
                                                    'BIG_DISCOUNT_PERCENT' => 'N',
                                                    'BIG_BUTTONS' => 'N'
                                                ),
                                                'PARAMS' => $generalParams
                                                    + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                                            ),
                                            $component,
                                            array('HIDE_ICONS' => 'Y')
                                        );
                                        ?>
                                    </div>
                                    <?
                                }
                                ?>

                            </div>
                        </div>
                        <?
                        break;
                }
                ?>
            </div>
            <?
        }
        unset($generalParams, $rowItems);
        ?>
        <!-- items-container -->
        <?

    }
    else
    {
        // load css for bigData/deferred load

        echo "<div class='container'><p class='no-found-in-catalog'>К сожалению по вашему запросу ничего не найдено. Попробуйте расширить параметры поиска.</p></div>";

        $APPLICATION->IncludeComponent(
            'persona:catalog.item',
            '',
            array(),
            $component,
            array('HIDE_ICONS' => 'Y')
        );
    }
    ?>
</div>
<?
if ($showLazyLoad)
{
    ?>
    <div class="row bx-<?=$arParams['TEMPLATE_THEME']?>">
        <div class="btn btn-default btn-lg center-block" style="margin: 15px;"
             data-use="show-more-<?=$navParams['NavNum']?>">
            <?=$arParams['MESS_BTN_LAZY_LOAD']?>
        </div>
    </div>
    <?
}

if ($showBottomPager)
{
    ?>
    <div data-pagination-num="<?=$navParams['NavNum']?>">
        <!-- pagination-container -->
        <?=$arResult['NAV_STRING']?>
        <!-- pagination-container -->
    </div>
    <?
}

$signer = new \Bitrix\Main\Security\Sign\Signer;
$signedTemplate = $signer->sign($templateName, 'catalog.section');
$signedParams = $signer->sign(base64_encode(serialize($arResult['ORIGINAL_PARAMETERS'])), 'catalog.section');
?>
<script>
    BX.message({
        BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
        BASKET_URL: '<?=$arParams['BASKET_URL']?>',
        ADD_TO_BASKET_OK: '<?=GetMessageJS('ADD_TO_BASKET_OK')?>',
        TITLE_ERROR: '<?=GetMessageJS('CT_BCS_CATALOG_TITLE_ERROR')?>',
        TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCS_CATALOG_TITLE_BASKET_PROPS')?>',
        TITLE_SUCCESSFUL: '<?=GetMessageJS('ADD_TO_BASKET_OK')?>',
        BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCS_CATALOG_BASKET_UNKNOWN_ERROR')?>',
        BTN_MESSAGE_SEND_PROPS: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_SEND_PROPS')?>',
        BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_CLOSE')?>',
        BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
        COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCS_CATALOG_MESS_COMPARE_OK')?>',
        COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCS_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
        COMPARE_TITLE: '<?=GetMessageJS('CT_BCS_CATALOG_MESS_COMPARE_TITLE')?>',
        PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCS_CATALOG_PRICE_TOTAL_PREFIX')?>',
        RELATIVE_QUANTITY_MANY: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY'])?>',
        RELATIVE_QUANTITY_FEW: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW'])?>',
        BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
        BTN_MESSAGE_LAZY_LOAD: '<?=CUtil::JSEscape($arParams['MESS_BTN_LAZY_LOAD'])?>',
        BTN_MESSAGE_LAZY_LOAD_WAITER: '<?=GetMessageJS('CT_BCS_CATALOG_BTN_MESSAGE_LAZY_LOAD_WAITER')?>',
        SITE_ID: '<?=CUtil::JSEscape($component->getSiteId())?>'
    });
    var <?=$obName?> = new JCCatalogSectionComponent({
        siteId: '<?=CUtil::JSEscape(SITE_ID)?>',
        componentPath: '<?=CUtil::JSEscape($componentPath)?>',
        navParams: <?=CUtil::PhpToJSObject($navParams)?>,
        deferredLoad: false, // enable it for deferred load
        initiallyShowHeader: '<?=!empty($arResult['ITEM_ROWS'])?>',
        bigData: <?=CUtil::PhpToJSObject($arResult['BIG_DATA'])?>,
        lazyLoad: !!'<?=$showLazyLoad?>',
        loadOnScroll: !!'<?=($arParams['LOAD_ON_SCROLL'] === 'Y')?>',
        template: '<?=CUtil::JSEscape($signedTemplate)?>',
        ajaxId: '<?=CUtil::JSEscape($arParams['AJAX_ID'])?>',
        parameters: '<?=CUtil::JSEscape($signedParams)?>',
        container: '<?=$containerName?>'
    });
</script>
<script type="text/javascript">
    function adddotdotdot($element) {
        $(".subcategory .name-wrapper").dotdotdot();
    }
    domReady(adddotdotdot);
    domReady(function(){
        $(window).resize(adddotdotdot);
    });

    domReady(function(){
        $('#limit-button').find('.button-text').prepend($('#limit-button').find("b").text());
        $('#sort-button').find('.button-text').prepend($('#sort-button').find("b").text());
    });
</script>
<script type="text/javascript">
    domReady(function(){
        $('.desc_cat').readmore({
            speed:600,
            collapsedHeight: 133,
            heightMargin: 20,
            moreLink:'<div class="readmore-button"><a href="#"><i class="fa fa-percent"></i> Прочитать и найти скидку <i class="fa fa-percent"></i></a></div>',
            lessLink:'<div class="readmore-button"><a href="#">Свернуть</a></div>',
        });
    });

</script>
<script type="text/javascript">
    domReady(function(){
        $('#block_sticky').sticky({
            sticktype: 'afterall',
            topspacing:20,
            marginbottom:20,
            stopper: 'footer',
        });
    });
</script>
<script type="text/javascript">
    domReady(function(){
        $('#filter_manufacturer').find('.button-text').prepend($('#filter_manufacturer').find("b").text());
    });
</script>
