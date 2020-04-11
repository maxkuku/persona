<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');

$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES'])) {
    $templateLibrary[] = 'currency';
    $currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
    'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
    'TEMPLATE_LIBRARY' => $templateLibrary,
    'CURRENCIES' => $currencyList,
    'ITEM' => array(
        'ID' => $arResult['ID'],
        'IBLOCK_ID' => $arResult['IBLOCK_ID'],
        'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
        'JS_OFFERS' => $arResult['JS_OFFERS']
    )
);
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
    'ID' => $mainId,
    'DISCOUNT_PERCENT_ID' => $mainId . '_dsc_pict',
    'STICKER_ID' => $mainId . '_sticker',
    'BIG_SLIDER_ID' => $mainId . '_big_slider',
    'BIG_IMG_CONT_ID' => $mainId . '_bigimg_cont',
    'SLIDER_CONT_ID' => $mainId . '_slider_cont',
    'OLD_PRICE_ID' => $mainId . '_old_price',
    'PRICE_ID' => $mainId . '_price',
    'DISCOUNT_PRICE_ID' => $mainId . '_price_discount',
    'PRICE_TOTAL' => $mainId . '_price_total',
    'SLIDER_CONT_OF_ID' => $mainId . '_slider_cont_',
    'QUANTITY_ID' => $mainId . '_quantity',
    'QUANTITY_DOWN_ID' => $mainId . '_quant_down',
    'QUANTITY_UP_ID' => $mainId . '_quant_up',
    'QUANTITY_MEASURE' => $mainId . '_quant_measure',
    'QUANTITY_LIMIT' => $mainId . '_quant_limit',
    'BUY_LINK' => $mainId . '_buy_link',
    'ADD_BASKET_LINK' => $mainId . '_add_basket_link',
    'BASKET_ACTIONS_ID' => $mainId . '_basket_actions',
    'NOT_AVAILABLE_MESS' => $mainId . '_not_avail',
    'COMPARE_LINK' => $mainId . '_compare_link',
    'TREE_ID' => $mainId . '_skudiv',
    'DISPLAY_PROP_DIV' => $mainId . '_sku_prop',
    'DISPLAY_MAIN_PROP_DIV' => $mainId . '_main_sku_prop',
    'OFFER_GROUP' => $mainId . '_set_group_',
    'BASKET_PROP_DIV' => $mainId . '_basket_prop',
    'SUBSCRIBE_LINK' => $mainId . '_subscribe',
    'TABS_ID' => $mainId . '_tabs',
    'TAB_CONTAINERS_ID' => $mainId . '_tab_containers',
    'SMALL_CARD_PANEL_ID' => $mainId . '_small_card_panel',
    'TABS_PANEL_ID' => $mainId . '_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob' . preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
    : $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
    : $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
    : $arResult['NAME'];


$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers) {
    $actualItem = isset($arResult['OFFERS'][$arResult['OFFERS_SELECTED']])
        ? $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]
        : reset($arResult['OFFERS']);
    $showSliderControls = false;

    foreach ($arResult['OFFERS'] as $offer) {
        if ($offer['MORE_PHOTO_COUNT'] > 1) {
            $showSliderControls = true;
            break;
        }
    }
} else {
    $actualItem = $arResult;
    $showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['CATALOG_SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$positionClassMap = array(
    'left' => 'product-item-label-left',
    'center' => 'product-item-label-center',
    'right' => 'product-item-label-right',
    'bottom' => 'product-item-label-bottom',
    'middle' => 'product-item-label-middle',
    'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION'])) {
    foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos) {
        $discountPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION'])) {
    foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos) {
        $labelPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}


$protocol = (CMain::IsHTTPS()) ? "https://" : "http://";

?>

    <div class="bx-catalog-element bx-<?= $arParams['TEMPLATE_THEME'] ?>" id="<?= $itemIds['ID'] ?>"
         itemscope itemtype="<?= $protocol ?>schema.org/Product">
        <h1><?= ($arResult['MY_H1']) ? $arResult['MY_H1'] : $arResult['NAME'] ?></h1>
        <div class="well well-sm">
            <div class="inline-info">
                <b>Код товара:</b> <span><?= $arResult['PROPERTIES']['artikul']['VALUE'] ?></span>
            </div>
            <!--div class="inline-info">
                #TODO: бонусные баллы пользователя
                <b>Бонусные баллы:</b> <span class="autocalc-product-reward"></span>
            </div-->
            <? $r = CatalogElementComponent::choozeFeedback($arResult['ID']);
            # $r[0] = rating sum / items, $r[1] = items, $r[2] = maximum, $r[3] = minimum, $r[4] - "0 отзывыв", $r[5] - $arFeed;
            /*$arFeed[$item['ID']] = array(
                        0 $item['ID'],
                        1 $item['NAME'],
                        2 $item['DETAIL_TEXT'],
                        3 $item['TIMESTAMP_X'],
                        4 $item['PROPERTY_YOUR_RATING_VALUE'],
                        5 $item['PROPERTY_FOR_WHAT_VALUE'],
                        6 $item['PROPERTY_USEFULL_VALUE'],
                        7 $item['PROPERTY_FEATURES_VALUE'],
                        8 $item['PROPERTY_HOW_IS_PRICE_VALUE'],
                        9 $item['PROPERTY_NO_FEATURES_VALUE']);        */
            #pr($r);
            ?>
            <div class="inline-info-right">
			<span class="stars">
                <? for ($i = 1; $i <= 5; $i++): ?>
                    <? if ($i <= $r[0]): ?>
                        <i class="fa fa-star active"></i>
                    <? else: ?>
                        <i class="fa fa-star"></i>
                    <? endif ?>
                <? endfor ?>
            </span>
                <? if ($r[1] > 0) { ?>
                    <a href=""
                       onclick="$('a[href=\'#tab-html-3\']').trigger('click');  $('html, body').animate({ scrollTop: $('a[href=\'#tab-html-3\']').offset().top - 5}, 250); return false;"> <?= $r[1] ?> <?= (in_array($r[1] % 10, array(2, 3, 4)) && $r[1] < 10) ? "отзыва" : ($r[1] == 1 ? "отзыв" : "отзывов") ?></a>
                <?
                } else {
                    echo "<span>" . $r[4] . "</span>";
                } ?>
            </div>
        </div>

        <? $APPLICATION->SetPageProperty("description", $arResult['PREVIEW_TEXT']); ?>


        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <div class="row thumb-line">
                            <div class="col-lg-6">
                                <div class="product-sticker stickers sticker_rectangle sticker_left">
                                    <? if ($arResult['PROPERTIES']['our_choice']['VALUE']): ?>
                                        <div class="sticker_custom0"
                                             style="background: url('/bitrix/templates/persona/images/custom1.png');">
                                            <div>Наш выбор</div>
                                        </div>
                                    <? endif ?>
                                    <? if ($arResult['PROPERTIES']['hit']['VALUE']): ?>
                                        <div class="sticker_bestseller">
                                            <div>Хит</div>
                                        </div>
                                    <? endif ?>
                                    <? if ($arResult['PROPERTIES']['quick']['VALUE']): ?>
                                        <div class="sticker_bestseller"
                                             style="background: url('/bitrix/templates/persona/images/stock.png');">
                                            <div>Быстро доставим</div>
                                        </div>
                                    <? endif ?>
                                    <? if ($arResult['PROPERTIES']['action']['VALUE']): ?>
                                        <div class="sticker_special"
                                             style="background: url('/bitrix/templates/persona/images/special.png');">
                                            <div>Акция</div>
                                        </div>
                                    <? endif ?>

                                </div>

                                <div class="thumbnails">
                                    <div class="main-image-wrapper">
                                        <? if ($arResult['PROPERTIES']['sale']['VALUE']): ?>
                                        <img src="<?=SITE_TEMPLATE_PATH?>/images/actino.png" id="act-image"/>
                                        <? endif; ?>
                                        <div class="main-image" href="#"
                                             title="<?= $arResult['NAME'] ?>" data-number="0">
                                            <? if (strlen($arResult['PREVIEW_PICTURE']['SRC']) > 5) { ?>
                                                <img src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>"
                                                     title="<?= $arResult['NAME'] ?>" alt="<?= $arResult['NAME'] ?>"
                                                     class="img-responsive center-block">
                                            <?
                                            } else { ?>
                                                <img src="/upload/resize_cache/iblock/51e/248_260_1/Persona_sign_gold_01_1.jpg"
                                                     title="<?= $arResult['NAME'] ?>" alt="<?= $arResult['NAME'] ?>"
                                                     class="img-responsive center-block">
                                            <?
                                            }
                                            # is_file(SITE_TEMPLATE_PATH . '/images/' . strtolower(str_replace(' ', '-', $arResult['PROPERTIES']['brand']['VALUE'])) . '-pale.jpg')
                                            ?>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-lg-6 hidden-md hidden-sm hidden-xs">
                                <p><strong>Краткое описание</strong></p>

                                <p><?= $arResult['PREVIEW_TEXT'] ?>
                                    <a href="" class="red-link"
                                       onclick="$('a[href=\'#tab-description\']').trigger('click'); $('html, body').animate({ scrollTop: $('a[href=\'#tab-description\']').offset().top - 6}, 250); return false;">
                                        Читать полностью →</a></p>


                                <p><strong>Характеристики:</strong></p>
                                <?php
                                if (!empty($arResult['DISPLAY_PROPERTIES']) || $arResult['SHOW_OFFERS_PROPS']) {
                                    ?>
                                    <table class="short-attr-table">
                                        <tbody>
                                        <?
                                        if (!empty($arResult['DISPLAY_PROPERTIES'])) {


                                            foreach ($arResult['DISPLAY_PROPERTIES'] as $property) {
                                                $name = $property['NAME'];
                                                $arParams = array("replace_space" => "-", "replace_other" => "-");
                                                $trans = Cutil::translit($name, "ru", $arParams);
                                                ?>
                                                <tr class="<?= $trans ?>">
                                                    <td class="left"><?= $property['NAME'] ?></td>
                                                    <td class="right">
                                                        <?= (is_array($property['DISPLAY_VALUE'])
                                                            ? implode(' / ', $property['DISPLAY_VALUE'])
                                                            : $property['DISPLAY_VALUE']) ?>
                                                    </td>
                                                </tr>
                                                <?
                                            }
                                            unset($property);
                                            ?>

                                            <?
                                        }

                                        if ($arResult['SHOW_OFFERS_PROPS']) {
                                            ?>
                                            <tr>
                                                <td class="left"></td>
                                                <td class="right" id="<?= $itemIds['DISPLAY_PROP_DIV'] ?>"></td>
                                            </tr>
                                            <?
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                    <?
                                }
                                ?>


                                <p>...</p>
                                <p>
                                    <button class="btn btn-sm btn-default"
                                            onclick="$('a[href=\'#tab-specification\']').trigger('click'); $('html, body').animate({ scrollTop: $('a[href=\'#tab-specification\']').offset().top - 2}, 250); return false;">
                                        Все характеристики
                                    </button>
                                </p>


                                <!-- BEGIN cdek_widget -->
                                <!--p><button class="btn btn-sm btn-default" onclick="cdekPopupOpen();">Посмотреть пункты выдачи <img src="/bitrix/templates/persona/images/cdek_logo.png"></button></p-->
                                <!-- END cdek_widget -->

                                <!--#TODO: поделиться ссылкой-->
                                <!--div class="social-likes social-likes_visible social-likes_ready"
                                     style="margin-bottom:20px;">
                                    <div class="social-likes__widget social-likes__widget_facebook"
                                         title="Поделиться ссылкой на Facebook"><span
                                                class="social-likes__button social-likes__button_facebook"><span
                                                    class="social-likes__icon social-likes__icon_facebook"></span>Facebook</span><span
                                                class="social-likes__counter social-likes__counter_facebook social-likes__counter_empty"></span>
                                    </div>
                                    <div class="social-likes__widget social-likes__widget_twitter"
                                         title="Поделиться ссылкой в Twitter"><span
                                                class="social-likes__button social-likes__button_twitter"><span
                                                    class="social-likes__icon social-likes__icon_twitter"></span>Twitter</span>
                                    </div>
                                    <div class="social-likes__widget social-likes__widget_vkontakte"
                                         title="Поделиться ссылкой во Вконтакте"><span
                                                class="social-likes__button social-likes__button_vkontakte"><span
                                                    class="social-likes__icon social-likes__icon_vkontakte"></span>Вконтакте</span><span
                                                class="social-likes__counter social-likes__counter_vkontakte social-likes__counter_empty"></span>
                                    </div>
                                    <div class="social-likes__widget social-likes__widget_plusone"
                                         title="Поделиться ссылкой в Google+"><span
                                                class="social-likes__button social-likes__button_plusone"><span
                                                    class="social-likes__icon social-likes__icon_plusone"></span>Google+</span><span
                                                class="social-likes__counter social-likes__counter_plusone social-likes__counter_empty"></span>
                                    </div>
                                </div-->

                            </div>


                        </div>
                    </div>


                    <div class="col-md-4 col-sm-5" id="product">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div>
                                    <div class="price">

                                        <? # просто переключение вида кнопок заказа
                                        # global $USER; if ($USER->IsAdmin()):
                                        if (1 == 1) :?>

                                            <span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                <meta itemprop="priceCurrency" content="RUB">
                                                <link itemprop="availability" href="http://schema.org/InStock">
                                                <? if ($arResult['PROPERTIES']['sale']['VALUE']): ?>
                                                <div class="product_price_div product_price_color1">
                                                    
                                                    <table class="product_price">
                                                        <tbody>
                                                        <tr>
                                                            <td class="id1_wrap">
                                                                <div class="id1_con">Акция<br>
                                                                    <a class="product_price_subtext" href="/payment-delivery/" target="_blank">скидки не суммируются</a>
                                                                </div>
                                                            </td>
                                                            <td class="id2_wrap">
                                                                <div class="id2_con"></div>
                                                            </td>
                                                            <td class="id3_wrap">
                                                                <div class="id3_con ">
                                                                    <span class="inlineb"><?= $arResult['PROPERTIES']['sale']['VALUE'] ?></span>
                                                                    <span class="hide" itemprop="price"><?= $arResult['PROPERTIES']['sale']['VALUE'] ?></span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?endif?>
                                                <div class="product_price_div product_price_color1">
                                                    <table class="product_price">
                                                        <tbody>
                                                        <tr>
                                                            <td class="id1_wrap">
                                                                <div
                                                                        class="id1_con">При доставке<br>
                                                                    <a
                                                                            class="product_price_subtext"
                                                                            href="/payment-delivery/"
                                                                            target="_blank">скидка 20%</a>
                                                                </div>
                                                            </td>
                                                            <td class="id2_wrap">
                                                                <div class="id2_con"></div>
                                                            </td>
                                                            <td class="id3_wrap">
                                                                <div class="id3_con">
                                                                    <span class="inlineb"><?= $arResult['PROPERTIES']['price']['VALUE'] * (100 - PERCENT_SALE_DELIVERY) / 100 ?></span>
                                                                    <span class="hide" itemprop="price"><?= $arResult['PROPERTIES']['price']['VALUE'] * (100 - PERCENT_SALE_DELIVERY) / 100 ?></span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="product_price_div product_price_color4">
                                                    <table class="product_price samo">
                                                        <tbody>
                                                        <tr>
                                                            <td class="id1_wrap">
                                                                <div class="id1_con">При самовывозе<br>
                                                                    <a class="product_price_subtext" href="/basket/" target="_blank">Адрес при оформлении</a>
                                                                </div>
                                                            </td>
                                                            <td class="id2_wrap">
                                                                <div class="id2_con"></div>
                                                            </td>
                                                            <td class="id3_wrap">
                                                                <div class="id3_con ">
                                                                    <span class="inlineb"><?=($arResult['PROPERTIES']['sale']['VALUE'])?$arResult['PROPERTIES']['sale']['VALUE']:$arResult['PROPERTIES']['price']['VALUE']?></span>
                                                                    <span class="hide">7644</span>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </span>

                                        <? else: ?>

                                            <div class="priceBig">
                                                <? if ($arResult['PROPERTIES']['sale']['VALUE']): ?>
                                                    <span class="price-old">&nbsp;
                                                <span class="autocalc-product-price"><?= $arResult['PROPERTIES']['price']['VALUE'] ?>
                                                    <span class="sr-only">р.</span>
                                                    <span class="roboto-forced ruble" aria-hidden="true"
                                                          style="display:none;"></span>
                                                </span>&nbsp;
                                            </span>

                                                    <span>
                                            <span class="autocalc-product-special"><?= $arResult['PROPERTIES']['sale']['VALUE'] ?>
                                                <span class="sr-only">р.</span>
                                                <span class="roboto-forced ruble" aria-hidden="true"
                                                      style="display:none;"></span>
                                            </span>
                                        </span>
                                                <? else: ?>
                                                    <span class="price-new">
                                                <span class="autocalc-product-price"><?= $arResult['PROPERTIES']['price']['VALUE'] ?>
                                                    <span class="sr-only">р.</span><span class="roboto-forced ruble"
                                                                                         aria-hidden="true"
                                                                                         style="display:none;"></span></span></span>

                                                <? endif ?>

                                                <span class="deliv"
                                                      style="display: block; font-size: 20px; color: #e4003a;">При доставке <?= $arResult['PROPERTIES']['price']['VALUE'] * (100 - PERCENT_SALE_DELIVERY) / 100 ?>
                                                    <span class="sr-only">р.</span><span class="roboto-forced ruble"
                                                                                         aria-hidden="true"
                                                                                         style="display:none; color: #e4003a;"></span>
                                        </span>

                                                <!--span class="points">Цена в бонусных баллах: <strong><span
                                                        class="autocalc-product-points"><?= $arResult['PROPERTIES']['sale']['VALUE'] ? $arResult['PROPERTIES']['sale']['VALUE'] : $arResult['PROPERTIES']['price']['VALUE'] ?></span></strong></span-->
                                            </div>

                                        <? endif ?>
                                    </div>
                                    <div class="alert-alt alert-success-alt">
                                        <? if ($arResult['PROPERTIES']['quantity_cust']['VALUE']): ?>
                                            <strong>На складе (<?= $arResult['PROPERTIES']['quantity_cust']['VALUE'] ?>
                                                )</strong>
                                        <? else: ?>
                                            <strong>Нет на складе</strong>
                                        <? endif ?>
                                    </div>
                                </div>


                                <div class="options">
                                    <? if ($arResult['PROPERTIES']['variants']['VALUE']): ?>
                                        <div class="form-group">
                                            <label class="control-label">
                                                <i class="fa fa-exclamation-circle required" data-toggle="tooltip"
                                                   data-placement="left" title=""
                                                   data-original-title="Обязательное поле"></i>
                                                Упаковка <?= $arResult['PROPERTIES']['vid_tovara']['VALUE'] ?> <?= $arResult['SECTION']['NAME'] ?>
                                            </label>
                                            <div id="input-option<?= $arResult['ID'] ?>">
                                                <? foreach ($arResult['PROPERTIES']['variants']['VALUE'] as $i => $opt): ?>
                                                    <div class="radio-checbox-options">
                                                        <input type="radio" name="option[<?= $arResult['ID'] ?>]"
                                                               value="<?= $opt ?>" data-reward="0" data-points="0"
                                                               data-prefix="+" data-price="0.0000"
                                                               id="<?= $arResult['ID'] ?>_<?= $arResult['PROPERTIES']['variants']['DESCRIPTION'][$i] ?>">

                                                        <label for="<?= $arResult['ID'] ?>_<?= $arResult['PROPERTIES']['variants']['DESCRIPTION'][$i] ?>">
                                                            <img src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>"
                                                                 alt="<?= $opt ?> – артикул <?= $arResult['PROPERTIES']['variants']['DESCRIPTION'][$i] ?>"
                                                                 class="img-thumbnail">
                                                            <span class="option-name"><?= $opt ?>
                                                                – артикул <?= $arResult['PROPERTIES']['variants']['DESCRIPTION'][$i] ?></span>
                                                        </label>
                                                    </div>
                                                <? endforeach ?>
                                            </div>
                                        </div>
                                    <? endif ?>
                                </div>


                                <div class="addcart">


                                    <div class="row">

                                        <div class="col-lg-3 col-md-4 col-sm-12">
                                            <div class="input-group quantity" data-toggle="tooltip" title=""
                                                 data-original-title="Кол-во">

                                            <span class="input-group-addon quantity-plus-minus">
                                                <button type="button" id="plus" class="btn">+</button>
                                                <button type="button" id="minus" class="btn">−</button>
                                            </span>

                                                <input type="text" name="quantity" value="1" size="2"
                                                       id="input-quantity"
                                                       class="form-control">


                                            </div>
                                            <input type="hidden" name="product_id" value="<?= $arResult['ID'] ?>">
                                        </div>
                                        <div class="col-lg-9  col-md-8 col-sm-12">

                                            <div class="addtocart-group">

                                                <button type="button" id="button-cart"
                                                        onclick="cart.add(<?= $arResult['ID'] ?>, 1);"
                                                        data-loading-text="Загрузка..."
                                                        data-id="<?= $arResult['ID'] ?>"
                                                        class="btn btn-danger gradiented">В корзину
                                                </button>

                                                <!--noindex-->
                                                <div id="out-stock" style="display: none;"><!--Нет в наличии-->
                                                    <button type="button" onclick="addPreOrderProduct();"
                                                            class="btn btn-danger btn-block"><i class="fa fa-bell"></i>
                                                        Уведомить
                                                    </button>
                                                </div>
                                                <!--/noindex-->
                                                <button class="btn btn-danger gradiented" data-toggle="tooltip"
                                                        data-original-tooltip="Быстрый заказ" id="button-fastorder"
                                                        onclick="fastorder('<?= $arResult['ID'] ?>');"
                                                        title="Быстрый заказ"><i class="fa fa-bolt"></i></button>
                                                <div class="btn-group pull-right">
                                                    <button type="button" data-toggle="tooltip" data-placement="top"
                                                            class="btn btn-default"
                                                            title="В избранное" onclick="wishlist.add('<?= $arResult['ID'] ?>');"
                                                            data-original-title="В избранное"><i class="fa fa-heart"></i></button>
                                                    <!--button type="button" data-toggle="tooltip" data-placement="top" class="btn btn-default"
                                        title="" onclick="compare.add('<?= $arResult['ID'] ?>');"
                                        data-original-title="В сравнение"><i class="fa fa-bar-chart"></i></button-->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default brand_info">
                            <div class="panel-body">
                                <div class="inline_info">
                                    <b>Бренд:</b> <a
                                            href="/catalog/brands/?brand_name=<?= rus2translit($arResult['PROPERTIES']['brand']['VALUE']) ?>"
                                            class="red-link"><?= $arResult['PROPERTIES']['brand']['VALUE'] ?></a>
                                </div>
                            </div>
                        </div>
                        <!--div class="panel panel-default brand_info">
                        <div class="panel-body">
                            <div class="inline_info">
                                <b>Линия:</b>
                                <a href="/catalog/?line=<?= $arResult['PROPERTIES']['line']['VALUE'] ?>"
                                   class="red-link"><?= $arResult['PROPERTIES']['line']['VALUE'] ?></a>
                            </div>
                        </div>
                    </div-->


                    </div>

                    <div class="col-sm-12">
                        <ul class="nav nav-tabs product-tabs">
                            <li class="active">
                                <a href="#tab-description" data-toggle="tab">
                                    <i class="fa fa-file-text-o"></i><span class="hidden-xs">&nbsp;&nbsp;Описание</span></a>
                            </li>
                            <li><a href="#tab-specification" data-toggle="tab">
                                    <i class="fa fa-list"></i><span class="hidden-xs">&nbsp;&nbsp;Характеристики</span></a>
                            </li>
                            <!--блок отзывов и доставки-->
                            <li class="tab_pvz_bb"><a data-toggle="tab" href="#tab-html-10">
                                    <img alt="CDek" src="/bitrix/templates/persona/images/logo-cdek-tab.png"
                                         class="img-responsive"></a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane active red-links" id="tab-description">
                                <?= str_replace(array("<div>", "</div>"), array("", ""), $arResult['DETAIL_TEXT']) ?>
                            </div>
                            <div class="tab-pane" id="tab-specification">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td colspan="2"><strong>Характеристики:</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (!empty($arResult['DISPLAY_PROPERTIES']) || $arResult['SHOW_OFFERS_PROPS']) {
                                        ?>

                                        <?
                                        if (!empty($arResult['DISPLAY_PROPERTIES'])) {
                                            ?>

                                            <?
                                            foreach ($arResult['DISPLAY_PROPERTIES'] as $property) {
                                                ?>
                                                <tr>
                                                    <td class="left"><?= $property['NAME'] ?></td>
                                                    <td class="right"><?= (
                                                        is_array($property['DISPLAY_VALUE'])
                                                            ? implode(' / ', $property['DISPLAY_VALUE'])
                                                            : $property['DISPLAY_VALUE']
                                                        ) ?>
                                                    </td>
                                                </tr>
                                                <?
                                            }
                                            unset($property);
                                            ?>

                                            <?
                                        }

                                        if ($arResult['SHOW_OFFERS_PROPS']) {
                                            ?>
                                            <tr>
                                                <td class="left"></td>
                                                <td class="right" id="<?= $itemIds['DISPLAY_PROP_DIV'] ?>"></td>
                                            </tr>
                                            <?
                                        }
                                        ?>

                                        <?
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div id="tab-html-3" class="tab-pane">
                                <div id="ascpw3_div_comment_<?= $arResult['ID'] ?>">

                                    <div id="ascpw3_comment_<?= $arResult['ID'] ?>">
                                        <div class="container_comments"
                                             id="container_comments_product_id_<?= $arResult['ID'] ?>">
                                            <!-- <noindex> -->
                                            <div class="container_comments_vars acc3"
                                                 id="container_comments_vars_product_id_<?= $arResult['ID'] ?>"
                                                 style="display: none">
                                                <div class="mark" data-text="product_id"></div>
                                                <div class="mark_id" data-text="<?= $arResult['ID'] ?>"></div>
                                                <div class="text_rollup_down" data-text="развернуть ветку"></div>
                                                <div class="text_rollup" data-text="свернуть ветку"></div>
                                                <div class="visual_editor" data-text=""></div>
                                                <div class="sorting" data-text="desc"></div>
                                                <div class="page" data-text="1"></div>
                                                <div class="ascp_widgets_position" data-text="3"></div>
                                                <div class="text_voted_blog_plus"
                                                     data-text="Вы проголосовали положительно."></div>
                                                <div class="text_voted_blog_minus"
                                                     data-text="Вы проголосовали отрицательно."></div>
                                                <div class="text_all" data-text="Всего"></div>
                                                <div class="prefix" data-text="ascpw3_"></div>
                                            </div>
                                            <!-- </noindex> -->

                                            <div id="comment_stat" class="comment-stat">
                                                <div class="row">
                                                    <div class="col-sm-7">
                                                        <div style="margin-bottom:10px">
                                                            <div class="sc-reviews-stat sc-stat-vertical-middle sc-stat-big marginbottom10">
                                                                <div class="sc-reviews-stat_column sc-reviews-stat_column_theme_blue sc-stat-comments">
                                                                    <span class="sc-reviews-stat__value sc-stat-text-center "><?= $r[1] ?></span>
                                                                    <span class="sc-reviews-stat__description sc-stat-text-center"><?= (in_array($r[1] % 10, array(2, 3, 4)) && $r[1] < 10) ? "отзыва" : ($r[1] == 1 ? "отзыв" : "отзывов") ?></span>
                                                                    <span class="sc-reviews-stat__corner"></span>
                                                                </div>
                                                                <div class="sc-reviews-stat_column sc-reviews-stat_column_theme_blue sc-stat-answer">
                                                                    <? $useful = 0;
                                                                    if ($r[5]):
                                                                        foreach ($r[5] as $feed) {
                                                                            $useful++;
                                                                        }
                                                                    endif ?>
                                                                    <span class="sc-reviews-stat__value sc-stat-text-center "><?= $useful ?></span>
                                                                    <span class="sc-reviews-stat__description sc-stat-text-center"><?= (in_array($useful % 10, array(2, 3, 4)) && $useful < 10) ? "полезных" : ($useful == 1 ? "полезный" : "полезных") ?></span>
                                                                    <span class="sc-reviews-stat__corner"></span>
                                                                </div>
                                                                <div class="sc-reviews-stat_column sc-reviews-stat_column_theme_blue sc-stat-ratings">
                                                                    <span class="sc-reviews-stat__value sc-stat-text-center "><?= $r[1] ?></span>
                                                                    <span class="sc-reviews-stat__description sc-stat-text-center"><?= (in_array($useful % 10, array(2, 3, 4)) && $useful < 10) ? "оценки" : ($useful == 1 ? "оценка" : "оценок") ?></span>
                                                                    <span class="sc-reviews-stat__corner"></span>
                                                                </div>
                                                                <div class="sc-reviews-stat_column sc-reviews-stat_column_theme_blue sc-stat-good">
                                                                    <span class="sc-reviews-stat__value sc-stat-text-center"><?= $r[6] ?>
                                                                        %</span>
                                                                    <span class="sc-reviews-stat__description sc-stat-text-center"> положительных</span>
                                                                    <span class="sc-reviews-stat__corner"></span>
                                                                </div>
                                                                <div class="sc-reviews-stat_column sc-reviews-stat_column_theme_blue sc-stat-white stars_stat_block">
                                                                <span class="stars_stat">

	                                	                                        <span class="stars">
                                                                                <? for ($i = 1; $i <= 5; $i++): ?>
                                                                                    <? if ($i <= $r[0]): ?>
                                                                                        <i class="fa fa-star active"></i>
                                                                                    <? else: ?>
                                                                                        <i class="fa fa-star"></i>
                                                                                    <? endif ?>
                                                                                <? endfor ?>
                                                                                </span>
	                                                                </span>
                                                                </div>
                                                            </div>

                                                            <div class="hidden">
                                                                <div class="sc-reviews-stat sc-stat-vertical-middle sc-stat-small marginbottom5">
                                                                    <div class="sc-stat-field">
                                                                        Полезность отзывов
                                                                    </div>
                                                                    <div class="sc-reviews-stat_column sc-reviews-stat_column_theme_blue sc-stat-ratings">
                                                                        <span class="sc-reviews-stat__value sc-stat-text-center "><?= $r[5] ?></span>
                                                                        <span class="sc-reviews-stat__description sc-stat-text-center">голосов</span>
                                                                    </div>
                                                                    <div class="sc-reviews-stat_column sc-reviews-stat_column_theme_blue sc-stat-white">
              <span class="sc-reviews-stat__value sc-stat-text-center">
				        <img title="0" alt="0" src="/bitrix/templates/persona/images/blogstars-0.png">
                </span>
                                                                        <span class="sc-reviews-stat__description sc-stat-text-center">&nbsp;</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="col-sm-5">
                                                        <div class="paddingleft10 floatright width100">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <span vocab="<?= $protocol ?>schema.org/" typeof="Product">
                                            <span property="name" content="<?= $arResult['NAME'] ?>"></span>
                                            <span property="aggregateRating" typeof="AggregateRating">
                                                <span property="ratingValue" content="<?= $r[0] ?>"></span>
                                                <span property="bestRating" content="<?= $r[2] ?>"></span>
                                                <span property="worstRating" content="<?= $r[3] ?>"></span>
                                                <span property="ratingCount" content="<?= $r[1] ?> оценок"></span>
                                            </span>
                                        </span>


                                            <? if (isset($r[5])):
                                                foreach ($r[5] as $arFeed):?>


                                                    <div class="comment_block">

                                                        <div class="seocms_author">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-xs-7">
                                                                    <div class="block_author">

                                                                        <span class="name_author"><?= $arFeed[1] ?></span>
                                                                        <span class="buyer_status">
                                                                <!-- <noindex> -->
                                                                <span class="seocmspro_buy"></span>
                                                                            <!-- </noindex> -->
                                                            </span>

                                                                        <div class="rating comment_rating">
                                                                <span class="stars">
                                                                    <? for ($i = 1; $i <= 5; $i++) {
                                                                        ?>
                                                                        <i class="fa fa-star <? if ($i <= $arFeed[4]) {
                                                                            echo "active";
                                                                        } ?>"></i>
                                                                    <? } ?>
															</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4 col-xs-5 comment_date_added">
                                                                    <div class="date_added">
                                                                        <?= CIBlockFormatProperties::DateFormat("j F Y", strtotime($arFeed["TIMESTAMP_X"]), CSite::GetDateFormat()) ?>
                                                                        &nbsp;&nbsp;
                                                                        <a href="<?= $_SERVER['REQUEST_URI'] ?>#commentlink_<?= $arFeed[0] ?>">
                                                                            <i class="fa fa-link"
                                                                               aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="com_text color_000">
                                                            <div class="bbcode-text" id="bbcode-text-<?= $arFeed[0] ?>">
                                                                <?= $arFeed[2] ?>
                                                            </div>
                                                            <div class="block_fields">
                                                                <div class="width100">

                                                                    <div class="marginbottom2">
                                                                        <div class="floatleft marginright5">

                                                                        </div>
                                                                        <div>
                                                                            <ins class="field_title">Достоинства:</ins>
                                                                            <ins class=" marginbottom2"><?= $arFeed[7] ?></ins>
                                                                        </div>
                                                                    </div>

                                                                    <div class="marginbottom2">
                                                                        <div class="floatleft marginright5">

                                                                        </div>
                                                                        <div>
                                                                            <ins class="field_title">Недостатки:</ins>
                                                                            <ins class=" marginbottom2"><?= $arFeed[9] ?></ins>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field_title">Цена:</div>
                                                                    <div class="rating comment_rating">
					                                        <span class="stars">
                                                                <? for ($i = 1; $i <= 5; $i++) {
                                                                    ?>
                                                                    <i class="fa fa-star <? if ($i <= $arFeed[8]) {
                                                                        echo "active";
                                                                    } ?>"></i>
                                                                <? } ?>
                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>


                                                <? endforeach ?>
                                            <? endif ?>


                                        </div>
                                        <script>
                                            domReady(function () {
                                                $('.sc_h_s').show();
                                            });
                                        </script>
                                    </div>

                                    <div id="ascpw3_comment-title" class="ascpw3_button_review"
                                         style="margin: 20px 0px;">
                                        <a href="#tab-html-3" id="ascpw3_comment_id_reply_0" data-cmswidget="3"
                                           data-prefix="ascpw3_"
                                           class="ascpw3_write_review btn btn-default comment_reply comment_buttons">
                                            <i class="fa fa-pencil"></i>&nbsp;&nbsp;Оставить отзыв</a>
                                    </div>


                                    <div id="ascpw3_comment_work_0" class="ascpw3_comment_work comment_work"
                                         style="display: none">
                                        <div id="ascpw3_c_w_0" class="ascpw3_form_customer_pointer well">

                                            <div class="modal" id="form_customer_3">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                            <div class="modal-title" style="font-size: 18px;">
                                                                Авторизация
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/auth/" method="post"
                                                                  enctype="multipart/form-data" class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">E-Mail:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="email"
                                                                               class="form-control" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Пароль:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password" name="password"
                                                                               class="form-control" value="">
                                                                        <a href="/forgot-password/">Забыли пароль?</a>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group" style="margin-bottom: 0;">
                                                                    <div class="col-sm-10 col-sm-offset-2">
                                                                        <input type="submit" value="Войти"
                                                                               class="button btn btn-primary">
                                                                        <a href="/auth/registration/"
                                                                           class="marginleft10">Регистрация</a>
                                                                        <input type="hidden" name="redirect"
                                                                               value="#tabs">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                domReady(function () {
                                                    $(".button_login_3").click(function () {
                                                        $("#form_customer_3").modal('show');
                                                        //location.href='/auth/'
                                                    });
                                                });
                                            </script>


                                            <form id="ascpw3_form_work_0" class="form-horizontal">

                                                <div class="seocmspro_customer_name">

                                                    <div class="form-group required seocmspro_author">
                                                        <label class="col-sm-3 control-label">Ваше имя:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="name" class="form-control"
                                                                   value="">

                                                            <div class="asc_textlogin">
                                                                <a href="#" class="button_login_3" data-cmswidget="3"
                                                                   data-prefix="ascpw3_">
                                                                    <ins class="hrefajax customer_enter customer_auth"
                                                                         data-prefix="ascpw3_" data-cmswidget="3">Войти
                                                                    </ins>
                                                                </a>
                                                                или <a href="/auth/registration/">зарегистрироваться</a>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="marginbottom5">
                                                </div>

                                                <div class="width100 addfields" style="">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Достоинства:</label>
                                                        <div class="col-sm-9"><input type="text" name="af[plus]"
                                                                                     class="form-control blog-record">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Недостатки:</label>
                                                        <div class="col-sm-9"><input type="text" name="af[minus]"
                                                                                     class="form-control blog-record">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Цена:</label>
                                                        <div class="col-sm-9">
                                                            <!--<input type="hidden" name="af[price_rating]" value="">
                                                                            <input type="radio" class="visual_star" name="af[price_rating]" alt="#8c0000"  value="1" >
                                                                            <input type="radio" class="visual_star" name="af[price_rating]" alt="#8c4500"  value="2" >
                                                                            <input type="radio" class="visual_star" name="af[price_rating]" alt="#b6b300"  value="3" >
                                                                            <input type="radio" class="visual_star" name="af[price_rating]" alt="#698c00"  value="4" >
                                                                            <input type="radio" class="visual_star" name="af[price_rating]" alt="#008c00"  value="5" >
                                                            <span id="hover-test" ></span>-->

                                                            <div class="field_rat">
                                                                <input id="rat_1" type="radio" name="af[price_rating]"
                                                                       value="1"><label class="rat_star" for="rat_1"><i
                                                                            class="fa fa-star"></i></label>
                                                                <input id="rat_2" type="radio" name="af[price_rating]"
                                                                       value="2"><label class="rat_star" for="rat_2"><i
                                                                            class="fa fa-star"></i></label>
                                                                <input id="rat_3" type="radio" name="af[price_rating]"
                                                                       value="3"><label class="rat_star" for="rat_3"><i
                                                                            class="fa fa-star"></i></label>
                                                                <input id="rat_4" type="radio" name="af[price_rating]"
                                                                       value="4"><label class="rat_star" for="rat_4"><i
                                                                            class="fa fa-star"></i></label>
                                                                <input id="rat_5" type="radio" name="af[price_rating]"
                                                                       value="5"><label class="rat_star" for="rat_5"><i
                                                                            class="fa fa-star"></i></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script type="text/javascript">
                                                        domReady(function () {
                                                            $('.rat_star').hover(function () {
                                                                $(this).prevAll('.rat_star').addClass('active');
                                                                $(this).addClass('active');
                                                            }, function () {
                                                                $(this).prevAll('.rat_star').removeClass('active');
                                                                $(this).removeClass('active');
                                                            });

                                                            $('.rat_star').click(function () {
                                                                $('.rat_star').each(function () {
                                                                    $(this).removeClass('checked');
                                                                    $(this).prevAll('.rat_star').removeClass('checked');
                                                                });

                                                                $(this).addClass('checked');
                                                                $(this).prevAll('.rat_star').addClass('checked');
                                                            });
                                                        });
                                                    </script>
                                                </div>

                                                <div class="form-group required">
                                                    <label class="col-sm-3 control-label">Ваш отзыв:</label>
                                                    <div class="col-sm-9 ascp_bbode">
                                                        <textarea name="text" id="ascpw3_editor_0"
                                                                  class="form-control blog-record-textarea ascpw3_editor blog-textarea_height"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group  required ">
                                                    <label class="col-sm-3 control-label">Рейтинг</label>
                                                    <div class="col-sm-9">
                                                        <div class="prod-rat">
                                                            <input id="rat1" type="radio" name="rating" value="1"><label
                                                                    class="rat-star" for="rat1"><i
                                                                        class="fa fa-star"></i></label>
                                                            <input id="rat2" type="radio" name="rating" value="2"><label
                                                                    class="rat-star" for="rat2"><i
                                                                        class="fa fa-star"></i></label>
                                                            <input id="rat3" type="radio" name="rating" value="3"><label
                                                                    class="rat-star" for="rat3"><i
                                                                        class="fa fa-star"></i></label>
                                                            <input id="rat4" type="radio" name="rating" value="4"><label
                                                                    class="rat-star" for="rat4"><i
                                                                        class="fa fa-star"></i></label>
                                                            <input id="rat5" type="radio" name="rating" value="5"><label
                                                                    class="rat-star" for="rat5"><i
                                                                        class="fa fa-star"></i></label>
                                                        </div>
                                                        <script type="text/javascript">
                                                            domReady(function () {
                                                                $('.rat-star').hover(function () {
                                                                    $(this).prevAll('.rat-star').addClass('active');
                                                                    $(this).addClass('active');
                                                                }, function () {
                                                                    $(this).prevAll('.rat-star').removeClass('active');
                                                                    $(this).removeClass('active');
                                                                });

                                                                $('.rat-star').click(function () {
                                                                    $('.rat-star').each(function () {
                                                                        $(this).removeClass('checked');
                                                                        $(this).prevAll('.rat-star').removeClass('checked');
                                                                    });

                                                                    $(this).addClass('checked');
                                                                    $(this).prevAll('.rat-star').addClass('checked');
                                                                });
                                                            });
                                                        </script>
                                                    </div>
                                                </div>


                                                <!--div class="form-group ">
                                                    <label class="col-sm-3 control-label">Получать ответы  на e-mail</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="email_ghost" class="form-control" value="">
                                                    </div>
                                                </div-->

                                                <div class="form-group" style="margin-bottom: 0;">
                                                    <div class="col-sm-9 col-sm-offset-3">
                                                        <input type="hidden" name="product_name" class="form-control"
                                                               value="<?= $arResult['NAME'] ?>">
                                                        <input type="hidden" name="for_what" class="form-control"
                                                               value="<?= $arResult['ID'] ?>">
                                                        <button type="button" id="ascpw3_button-comment-0"
                                                                data-loading-text=""
                                                                class="btn btn-primary button button-comment">Продолжить
                                                        </button>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab-html-2">
                                <? #TODO: оформить краткую информацию по доставке?>
                                <div id="cmswidget-section-2">
                                    <!--noindex-->
                                    <h3>Краткая информация о доставке</h3>

                                    <p>Доставка по Москве и и ближайшему Подмосковью осуществляется с понедельника по
                                        субботу через день после подтверждения и обработки заказа. К примеру: вы
                                        оформили
                                        заказ до 13.00 в понедельник, то доставка в среду. Доставка в Санкт-Петербург
                                        осуществляется с понедельника по пятницу на 2 будний день после передачи заказа
                                        в
                                        курьерскую службу. Заказы сделанные в выходные и праздничные дни обрабатываются
                                        на
                                        следующий рабочий день.</p>

                                    <hr>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#moskva">Москва</a></li>
                                        <!--li><a data-toggle="tab" href="#piter">Санкт-Петербург</a></li>
                                        <li><a class="region" data-toggle="tab" href="#russia">Другие города</a></li-->
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active fade in" id="moskva">
                                            <div class="delivery_courier col-sm-6">
                                                <div class="delivery_title">Курьерская доставка</div>

                                                <ul>
                                                    <li><span style="color:#FF0000;">Бесплатная доставка</span> при
                                                        сумме
                                                        покупки 3000 рублей
                                                    </li>
                                                    <li>Доставка в пределах МКАД 250 рублей</li>
                                                    <li>Доставка за пределы МКАД от 350 рублей (есть бесплатная
                                                        доставка)
                                                    </li>
                                                    <li>Звонок курьера за час перед доставкой</li>
                                                    <li>Оплата наличными или банковской картой</li>
                                                </ul>
                                            </div>

                                            <div class="delivery_pvz col-sm-6">
                                                <div class="delivery_title">Пункты самовывоза</div>

                                                <ul>
                                                    <li>Бюджетный вариант доставки от 150 рублей</li>
                                                    <li>Возможность забрать заказ в удобное время</li>
                                                    <li>Пункт выдачи можно выбрать в процессе оформления заказа</li>
                                                    <li>Оплата заказа при получении</li>
                                                    <li>СМС уведомление о прибытии посылки в пункт выдачи</li>
                                                </ul>
                                            </div>

                                            <div class="clearfix">&nbsp;</div>
                                        </div>

                                        <!--div class="tab-pane fade" id="piter">
                                            <div class="delivery_courier col-sm-4">
                                                <div class="delivery_title">Курьерская доставка</div>

                                                <ul>
                                                    <li>Бесплатная доставка при сумме покупки 4000 рублей</li>
                                                    <li>Доставка в пределах КАД от 350 рублей</li>
                                                    <li>Звонок курьера за час перед доставкой</li>
                                                    <li>Оплата возможна наличными и банковской картой</li>
                                                    <li>Курьерской доставки по Ленинградской обл. нет</li>
                                                </ul>
                                            </div>

                                            <div class="delivery_post col-sm-4">
                                                <div class="delivery_title">Почта России</div>

                                                <ul>
                                                    <li>Получение заказа в любом отд. Почты России</li>
                                                    <li>Обязательно указываете почтовый индекс и Ф.И.О.</li>
                                                    <li>СМС уведомление о прибытии посылки</li>
                                                    <li>Есть возможность предоплаты только доставки</li>
                                                </ul>
                                            </div>

                                            <div class="delivery_pvz col-sm-4">
                                                <div class="delivery_title">Пункты самовывоза</div>

                                                <ul>
                                                    <li>Бюджетный вариант доставки от 200 рублей</li>
                                                    <li>Возможность забрать заказ в удобное время</li>
                                                    <li>Пункт выдачи можно выбрать при оформлении заказа</li>
                                                    <li>СМС уведомление о прибытии посылки в пункт выдачи</li>
                                                    <li>Есть возможность предоплаты только доставки</li>
                                                    <li>100% оплата онлайн после подтверждения</li>
                                                </ul>
                                            </div>

                                            <div class="clearfix">&nbsp;</div>
                                        </div-->

                                        <!--div class="tab-pane fade" id="russia">
                                            <div class="delivery_post col-sm-4">
                                                <div class="delivery_title">Почта России</div>

                                                <ul>
                                                    <li>Цена рассчитывается на этапе оформления заказа</li>
                                                    <li>Срок доставки от 5 дней до 30 дней</li>
                                                    <li>Есть возможность предоплаты только доставки</li>
                                                    <li>100% оплата после подтверждения</li>
                                                    <li>Получение в любом отделении Почты России</li>
                                                    <li>СМС уведомление о прибытии посылки</li>
                                                </ul>
                                            </div>

                                            <div class="delivery_courier col-sm-4">
                                                <div class="delivery_title">Курьерская доставка</div>

                                                <ul>
                                                    <li>Доставка осуществляется службой доставки Boxberry</li>
                                                    <li>Звонок оператора перед доставкой</li>
                                                    <li>Есть возможность предоплаты только доставки</li>
                                                    <li>100% предоплата после подтверждения</li>
                                                </ul>
                                            </div>

                                            <div class="delivery_pvz col-sm-4">
                                                <div class="delivery_title">Пункты самовывоза</div>

                                                <ul>
                                                    <li>Бюджетный вариант доставки от 200 рублей</li>
                                                    <li>Возможность забрать заказ в удобное время</li>
                                                    <li>СМС уведомление о прибытии посылки</li>
                                                    <li>Есть возможность предоплаты только доставки</li>
                                                    <li>100% предоплата после подтверждения</li>
                                                </ul>
                                            </div>

                                            <div class="clearfix">&nbsp;</div>
                                        </div-->
                                    </div>
                                    <!--/noindex-->
                                    <script>
                                        domReady(function () {
                                            if ($(window).width() <= '384') {
                                                $('.region').text('Регионы');
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <div id="tab-html-10" class="tab-pane">
                                <div id="cmswidget-section-10">
                                    <a href="#" onclick="cdekPopupOpen(); return false;">
                                        <img alt="Список пунктов выдачи"
                                             class="img-responsive"
                                             src="<?= SITE_TEMPLATE_PATH ?>/images/karta-cdek-1.png"
                                             title="Список пунктов выдачи"></a>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default box-product related-products">
                            <!--div class="panel-heading"><i class="glyphicon glyphicon-link"></i>&nbsp;&nbsp;Рекомендуемые
                                товары
                            </div-->
                            <div class="panel-body owl-carousel product-carousel" id="related-products"
                                 style="opacity: 1; display: block;">


                                <!--for recomend-->
                                <?

                                $arrFilter = array
                                (
                                    #"=PROPERTY_RECOMEND" => "1",
                                    #"ID" => array(explode(',', $arResult['PROPERTIES']['recomended']['VALUE'])),
                                    #"LOGIC" => "AND",
                                    "!PREVIEW_PICTURE" => false,
                                    "!DETAIL_PICTURE" => false
                                ); ?>
                                <? $APPLICATION->IncludeComponent(
                                    "persona:news.list",
                                    "recomend_goods",
                                    array(
                                        "IBLOCK_TYPE" => "goods",
                                        "IBLOCK_ID" => "4",
                                        "NEWS_COUNT" => "10",
                                        "DISPLAY_PICTURE" => "Y",
                                        "SORT_BY1" => "RAND",
                                        "SORT_ORDER1" => "ASC",
                                        "FILTER_NAME" => "arrFilter",
                                        "FIELD_CODE" => array(
                                            0 => "PREVIEW_PICTURE",
                                            1 => "DETAIL_PICTURE",
                                            2 => "",
                                        ),
                                        "PROPERTY_CODE" => array(
                                            0 => "artikul",
                                            1 => "price",
                                            2 => "strana_brenda",
                                            3 => "sale",
                                            4 => "",
                                        ),
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_SHADOW" => "Y",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "CACHE_TYPE" => "N",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "DISPLAY_PANEL" => "N",
                                        "SET_TITLE" => "N",
                                        "SET_STATUS_404" => "N",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "DISPLAY_BOTTOM_PAGER" => "N",
                                        "PAGER_TITLE" => "Рекомендуемые",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => "",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "COMPONENT_TEMPLATE" => "recomend_goods",
                                        "SORT_BY2" => "ID",
                                        "SORT_ORDER2" => "RAND",
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "STRICT_SECTION_CHECK" => "N",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "SHOW_404" => "N",
                                        "MESSAGE_404" => ""
                                    ),
                                    false
                                ); ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <!--microdatapro 6.1 breadcrumb start [microdata & json-ld] -->
                <span itemscope="" itemtype="<?= $protocol ?>schema.org/BreadcrumbList">
            <span itemprop="itemListElement" itemscope="" itemtype="<?= $protocol ?>schema.org/ListItem">
            <link itemprop="item" href="/">
            <meta itemprop="name" content="Главная">
            <meta itemprop="position" content="1">
            </span>
            <span itemprop="itemListElement" itemscope="" itemtype="<?= $protocol ?>schema.org/ListItem">
            <link itemprop="item" href="/brands/">
            <meta itemprop="name" content="Бренды">
            <meta itemprop="position" content="2">
            </span>
            <span itemprop="itemListElement" itemscope="" itemtype="<?= $protocol ?>schema.org/ListItem">
            <link itemprop="item" href="/brands/<?= $arResult['PROPERTIES']['brand']['VALUE'] ?>/">
            <meta itemprop="name" content="<?= $arResult['NAME'] ?>">
            <meta itemprop="position" content="4">
            </span>
            </span>

                <!--microdatapro 6.1 breadcrumb end [microdata & json-ld] -->
                <!--microdatapro 6.1 product start [microdata] -->
                <span itemscope="" itemtype="<?= $protocol ?>schema.org/Product">
            <meta itemprop="name" content="<?= $arResult['NAME'] ?>">
            <link itemprop="url" href="<?= $arResult['DETAIL_PAGE_URL'] ?>">
            <link itemprop="image" href="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>">
            <meta itemprop="brand" content="<?= $arResult['PROPERTIES']['brand']['VALUE'] ?>">
            <meta itemprop="manufacturer" content="<?= $arResult['PROPERTIES']['brand']['VALUE'] ?>">
            <meta itemprop="model" content="<?= $arResult['PROPERTIES']['artikul']['VALUE'] ?>">
            <meta itemprop="category" content="<?= $arResult['PROPERTIES']['vid_tovara']['VALUE'] ?>">
            <span itemprop="offers" itemscope="" itemtype="<?= $protocol ?>schema.org/Offer">
            <meta itemprop="priceCurrency" content="RUB">
            <meta itemprop="price" content="<?= $arResult['PROPERTIES']['price']['VALUE'] ?>">
            <meta itemprop="itemCondition" content="<?= $protocol ?>schema.org/NewCondition">
            <link itemprop="availability" href="<?= $protocol ?>schema.org/InStock">
            </span>
            <meta itemprop="description" content="<?= strip_tags($arResult['DETAIL_TEXT']) ?>">
                    <!--for recomended meta-->
                    <? $arrFilter = array("=PROPERTY_RECOMEND" => "1",
                        "ID" => array(explode(',', $arResult['PROPERTIES']['recomended']['VALUE']))) ?>
                    <? $APPLICATION->IncludeComponent(
                        "persona:news.list",
                        "recomend_goods_meta",
                        array(
                            "IBLOCK_TYPE" => "goods",
                            "IBLOCK_ID" => "4",
                            "NEWS_COUNT" => "20",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "FILTER_NAME" => "arrFilter",
                            "FIELD_CODE" => array(
                                0 => "PREVIEW_PICTURE",
                                1 => "DETAIL_PICTURE",
                                2 => "",
                            ),
                            "PROPERTY_CODE" => array(
                                0 => "artikul",
                                1 => "price",
                                2 => "sale",
                                3 => "",
                            ),
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_SHADOW" => "Y",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "DISPLAY_PANEL" => "N",
                            "SET_TITLE" => "N",
                            "SET_STATUS_404" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "PAGER_TITLE" => "Рекомендуемые",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => "",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
                            "PAGER_SHOW_ALL" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "COMPONENT_TEMPLATE" => "recomend_main",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER2" => "ASC",
                            "SET_BROWSER_TITLE" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "STRICT_SECTION_CHECK" => "N",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => ""
                        ),
                        false
                    ); ?>
</span>
                <!--microdatapro 6.1 product end [microdata] -->
                <h3>Вопросы и ответы</h3>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="collapse-group00">
                            <!--for answers product-->
                            <? $arr_2_Filter = array(
                                "=PROPERTY_TO_GOOD" => $arResult['ID'],
                                ">=PROPERTY_QUANTITY_CUST" => 1
                            );
                            $APPLICATION->IncludeComponent(
                                "persona:news.list",
                                "answers_product",
                                array(
                                    "IBLOCK_TYPE" => "faq",
                                    "IBLOCK_ID" => "13",
                                    "NEWS_COUNT" => "20",
                                    "SORT_BY1" => "SORT",
                                    "SORT_ORDER1" => "ASC",
                                    "FILTER_NAME" => "arr_2_Filter",
                                    "FIELD_CODE" => array(
                                        0 => "PREVIEW_PICTURE",
                                        1 => "DETAIL_PICTURE",
                                        2 => "",
                                    ),
                                    "PROPERTY_CODE" => array(
                                        0 => "to_good",
                                        1 => "quantity_cust",
                                    ),
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_SHADOW" => "Y",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "CACHE_TYPE" => "A",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "DISPLAY_PANEL" => "N",
                                    "SET_TITLE" => "N",
                                    "SET_STATUS_404" => "N",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "PAGER_TITLE" => "Рекомендуемые",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => "",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "COMPONENT_TEMPLATE" => "recomend_main",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER2" => "ASC",
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "SHOW_404" => "N",
                                    "MESSAGE_404" => ""
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    domReady(function () {
                        $('#cmswidget-3').hide();

                        comment_form_ascpw3_ = $('#ascpw3_reply_comments').clone();
                        $('#ascpw3_reply_comments').remove();

                    });
                </script>
                <script type="text/javascript">
                    domReady(function () {


                        var prefix = 'ascpw3_';
                        var cmswidget = '3';
                        var heading_title = 'Отзывы';
                        var heading_title2 = 'Оставить отзыв';
                        var total = '<?=$r[1]?>';

                        var name = '<?=$arResult['NAME']?>';
                        var url = '<?=$arResult['DETAIL_PAGE_URL']?>';

                        var product_name = '<?=$arResult['NAME']?>';
                        var product_url = '<?=$arResult['DETAIL_PAGE_URL']?>';

                        var data = $('#cmswidget-3').clone();

                        if ($('a[href=\'#tab-review\']').closest('li').length) {
                            $('a[href=\'#tab-review\']').closest('li').remove();
                        } else {
                            $('a[href=\'#tab-review\']').remove();
                        }
                        $('#tab-review').remove();
                        $('#cmswidget-' + cmswidget).remove();
                        tabs = $('.nav-tabs').children().length;
                        $('.nav-tabs:first').append('<li><a data-toggle=\'tab\' href=\'#tab-html-' + cmswidget + '\'><i class="fa fa-comment-o" aria-hidden="true"></i><span class="hidden-xs">&nbsp;&nbsp; ' + heading_title + '</span></a></li>');
                        $('#content .tab-content:first').append($(data).html());
                        if (tabs == 0 || $('.nav-tabs').children().filter('.active').length == 0) $('a[href$=\'#tab-html-' + cmswidget + '\']').click();

                        $('#cmswidget-3').show();

                        $('.cmswidget-new-3').attr('id', 'cmswidget-3');

                        delete data;
                        delete prefix;
                        delete cmswidget;
                        delete total;

                        delete product_name;
                        delete product_url;

                        delete name;
                        delete url;


                    });

                    domReady(function () {
                        $('#ascpw3_comment_id_reply_0').click();
                    });

                    domReady(function () {
                        if (typeof tab_select == "undefined") {
                            var tab_select = new Array();
                        }

                        tab_select[3] = '#tab-html-3';


                        url = location.href, idx_3 = url.indexOf("#")
                        hash_3 = idx_3 != -1 ? url.substring(idx_3 + 1) : "";
                        var idx_cmswidget_3 = hash_3.lastIndexOf("_");
                        url_cmswidget_3 = idx_cmswidget_3 != -1 ? hash_3.substring(idx_cmswidget_3 + 1) : "";

                        if (url_cmswidget_3 != '') {
                            switch_tab_3 = true;
                        } else {
                            switch_tab_3 = false;
                        }


                        if (url_cmswidget_3 != '') {
                            if (url_cmswidget_3 == '3' && switch_tab_3) {
                                $('a[href=\'' + tab_select[3] + '\']').trigger('click');
                            }

                            $('html, body').animate({scrollTop: $('#' + hash_3).offset().top}, 500, function () {
                            });
                        }

                    });

                </script>
                <script type="text/javascript">
                    domReady(function () {
                        if (typeof tab_select == "undefined") {
                            var tab_select = new Array();
                        }

                        tab_select[3] = '#tab-html-3';


                        if (tab_select[3] == '#tab-html-3') {
                            title_tab_3 = $('a[href=\'' + tab_select[3] + '\']').html();
                            $('a[href=\'' + tab_select[3] + '\']').html(title_tab_3 + ' (' + <?=$r[1]?> +')');
                        }

                        $('.leavereview-3').hide();

                    });
                </script>
                <script type="text/javascript">
                    domReady(function () {
                        $('.ascpw3_button_review').show();
                        $('.ascpw3_write_review').on('click', function () {
                            $('.ascpw3_button_review').hide();
                            $('.ascpw3_comment_work').show();
                        });
                        $('.comment_content .comment_reply').on('click', function () {
                            $('.ascpw3_button_review').show();
                        });
                    });
                </script>
                <script type="text/javascript">
                    domReady(function () {
                        var prefix = 'ascpw2';
                        var cmswidget = '2';
                        var heading_title = 'Доставка';
                        //var data = $('#cmswidget-2').html($('#cmswidget-2').clone());
                        var data = $('#cmswidget-2').clone();
                        $('#cmswidget-' + cmswidget).remove();
                        tabs = $('.nav-tabs').children().length;
                        $('.nav-tabs').append('<li><a data-toggle=\'tab\' href=\'#tab-html-' + cmswidget + '\'>' +
                            '<i class="fa fa-truck" aria-hidden="true"></i>' +
                            '<span class="hidden-xs">&nbsp;&nbsp; ' + heading_title + '</span></a></li>');
                        $('#content .tab-content').append($(data).html());
                        if (tabs == 0 || $('.nav-tabs').children().filter('.active').length == 0) $('a[href$=\'#tab-html-' + cmswidget + '\']').click();
                        ;
                        delete data;
                        delete prefix;
                        delete cmswidget;
                    });
                </script>
                <!--script type="text/javascript">
                    domReady(function () {
                        var prefix = 'ascpw10';
                        var cmswidget = '10';
                        var heading_title = 'ПВЗ';
                        //var data = $('#cmswidget-10').html($('#cmswidget-10').clone());
                        var data = $('#cmswidget-10').clone();
                        $('#cmswidget-' + cmswidget).remove();
    //$('.nav-tabs:first').append ('<li class="tab_pvz_bb"><a data-toggle=\'tab\' href=\'#tab-html-'+cmswidget+'\'><i class="fa fa-map-marker" aria-hidden="true"></i><span class="hidden-xs">&nbsp;&nbsp; '+heading_title+'</span></a></li>');

                        $('.nav-tabs:first').append('<li class="tab_pvz_bb"><a data-toggle=\'tab\' href=\'#tab-html-' + cmswidget + '\'><img alt="" src="/bitrix/templates/persona/images/logo-cdek-tab.png" class="img-responsive" /></a></li>');


                        $('.tab-content:first').append($(data).html());
                        ;
                        delete data;
                        delete prefix;
                        delete cmswidget;
                    });
                </script-->
            </div>
        </div>
    </div>
    <script>
        setTimeout(function () {
            $('.filter-left').hide();
            $('#content').toggleClass('col-sm-10');
        }, 100);
    </script>
<?

unset($actualItem, $itemIds, $jsParams);