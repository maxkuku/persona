<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CModule::IncludeModule('iblock');
CModule::IncludeModule('form');
$APPLICATION->SetTitle("Список заказов корзины");
$APPLICATION->SetAdditionalCSS("/basket/style.css");

$BX_USER_ID = htmlspecialchars($_COOKIE['BX_USER_ID'], 3);
$SHOW_ALL = "Y";
if($SHOW_ALL == "Y") {
    global $USER;
    global $DB;
    $FORM_ID = 2;
    $ITEM    = [];
    $price   = 0;
    $quan    = 0;
    $json    = [];
    $RIDS    = "";
    $RIDS_ARR = [];
    $formlineids = "";

    # если авторизован, то выберем все незаконченные формы
    /*if ( $USER->GetID() ) {
        $forms = $DB->Query( "SELECT ID FROM b_form_result WHERE FORM_ID = " . $FORM_ID . " AND USER_ID = " . $USER->GetID() );

        while ( $form = $forms->Fetch() ) {
            $RIDS_ARR[] = $form['ID'];
        }
        $RIDS = implode( ",", $RIDS_ARR );
    }*/


    # у одного заказа в форме несколько строк
    # выберем все строки с id сессии
    if ( strlen( $RIDS ) > 0 ) {
        $res = $DB->Query( "SELECT RESULT_ID FROM b_form_result_answer WHERE FORM_ID = " . $FORM_ID . " AND USER_TEXT = '$BX_USER_ID' OR RESULT_ID IN ($RIDS)" );
    } else {
        $res = $DB->Query( "SELECT RESULT_ID FROM b_form_result_answer WHERE FORM_ID = " . $FORM_ID . " AND USER_TEXT = '$BX_USER_ID'" );
    }


    if ( $res->SelectedRowsCount() > 0 ) {

        $arAnswer1 = [];
        while ( $arAnswer = $res->Fetch() ) {
            $arAnswer1[] = $arAnswer['RESULT_ID'];
        }
        $ids = implode( ',', $arAnswer1 );
        # FIELD_ID = 8 -> item ID, 10 -> price
        $res1 = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = " . $FORM_ID . " AND RESULT_ID IN ($ids) AND FIELD_ID = 8" );
        $res2 = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = " . $FORM_ID . " AND RESULT_ID IN ($ids) AND FIELD_ID = 10" );




        while ( $idAnswer = $res1->Fetch() AND $priceAnswer = $res2->Fetch() ) {
            $x                   = $idAnswer['USER_TEXT'];
            $ITEM[ $x ]['ITEM']  = [ $idAnswer['USER_TEXT'], $priceAnswer['USER_TEXT'] ];
            $ITEM[ $x ]['NAME']  = $idAnswer['USER_TEXT'];
            $ITEM[ $x ]['ID']    = $idAnswer['USER_TEXT'];
            $ITEM[ $x ]['PRICE'] = $priceAnswer['USER_TEXT'];
            $ITEM[ $x ]['QUAN'] ++;
            $ITEM[ $x ]['FID'] = $idAnswer['ID'];
            $price += $priceAnswer['USER_TEXT'];
            $quan ++;

        }

        $formlineids = str_replace(',', '_', $ids);

    }
}
?>
    <div class="container">
    <div class="row">
        <div id="content" class="col-sm-12">

            <p></p>
            <div class="simple-content">
                <div id="simplecheckout_form_0">
                    <div class="simplecheckout">
                        <div class="simplecheckout-step" style="display: block;"><div class="simplecheckout-block" id="simplecheckout_cart">
                                <?if($price < MIN_ORDER_PRICE){?>
                                    <div class="simplecheckout-warning-block">Внимание: Минимальная сумма для заказа <?=MIN_ORDER_PRICE?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span>!</div>
                                <?}?>
                                <div class="table-responsive">
                                    <table class="simplecheckout-cart">
                                        <colgroup>
                                            <col class="image">
                                            <col class="name">
                                            <col class="model">
                                            <col class="quantity">
                                            <col class="price">
                                            <col class="total_title">
                                            <col class="remove">
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <th class="image">Фото</th>
                                            <th class="name">Наименование товара</th>
                                            <th class="model">Модель</th>
                                            <th class="quantity"><span title="Количество">Кол-во</span></th>
                                            <th class="price">Цена</th>
                                            <th class="total_title">Итого</th>
                                            <th class="remove" style="text-align: center;"><i class="fa fa-trash-o fa-lg"></i></th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <?
                                        $item_to_form[] = "\t\tНазвание\tАртикул\tID\tКоличество\tЦена\n";
                                        foreach ($ITEM as $it){

                                            $res = CIBlockElement::GetByID($it["ID"]);
                                            if($ar_res = $res->GetNext()) {
                                                $im = $ar_res['PREVIEW_PICTURE'];
                                                $ar['FILE'] = CFile::ResizeImageGet($im, array('width'=>47, 'height'=>47), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                                                $db_props = CIBlockElement::GetProperty(GOODS, $it["ID"], array("sort" => "asc"), Array("CODE"=>"artikul"));
                                                if($ar_props = $db_props->Fetch())
                                                    $SrcPropID = $ar_props['VALUE'];
                                            }



                                            ?>
                                            <tr class="item-ids basket-list-template" data-formlineid="<?=$it["FID"]?>">
                                                <td class="image">
                                                    <a href="/catalog/detail.php?ID=<?=$it["ID"]?>"><img src="<?=$ar["FILE"]['src']?>" alt="<?=$it["NAME"]?>" title="<?=$ar_res["NAME"]?>"></a>
                                                </td>
                                                <td class="name">
                                                    <div class="image">
                                                        <a href="/catalog/detail.php?ID=<?=$it["ID"]?>"><img src="<?=$ar["FILE"]['src']?>" alt="<?=$ar_res["NAME"]?>" title="<?=$ar_res["NAME"]?>"></a>
                                                        <? $item_to_form[] = $ar_res["NAME"] . "\t" . $SrcPropID . "\t" . $it["ID"] . "\t" . $it['QUAN'] . "\t" . $it["PRICE"] . "\n"?>
                                                    </div>
                                                    <a href="/catalog/detail.php?ID=<?=$it["ID"]?>"><?=$ar_res["NAME"]?></a>
                                                    <div class="options">
                                                    </div>
                                                </td>
                                                <td class="model"><?=$SrcPropID?></td>
                                                <td class="quantity">
                                                    <div class="input-group btn-block" style="max-width: 200px;">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-primary" onclick="cart.updateInCart('<?=$it["ID"]?>', '-1')" data-toggle="tooltip" type="submit" data-original-title="Убрать" title="Убрать">
                                                                <i class="fa fa-minus"></i>
                                                            </button>
                                                        </span>
                                                        <span id="incart_span_<?=$it["ID"]?>" class="form-control" type="text" data-onchange="" name="quantity[<?=$it["ID"]?>]" value="<?=$it["QUAN"]?>" size="1"><?=$it["QUAN"]?></span>
                            <span class="input-group-btn">
                                <button class="btn btn-primary" onclick="cart.updateInCart('<?=$it["ID"]?>', 1)" data-toggle="tooltip" type="submit" data-original-title="Добавить" title="Добавить">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span>
                                <!--button class="btn btn-danger" data-onclick="removeProduct" data-product-key="<?=$it["ID"]?>" data-toggle="tooltip" type="button" data-original-title="Добавить" title="Добавить">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                            </span-->
                                                    </div>
                                                </td>
                                                <td class="price"><?=$it["PRICE"]?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></td>
                                                <td class="total"><?=$it["PRICE"] * $it["QUAN"]?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></td>
                                                <td class="remove" style="text-align: center;">
                                                    <div class="cartCellContent">
                                                        <a href="#" onclick="cart.remove(<?=$it["ID"]?>,'Y');return false;" title="Удалить" class=""><i class="fa fa-trash-o fa-lg"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <?
                                            $all_items += $it["QUAN"];
                                            $all_price += $it["PRICE"] * $it["QUAN"];
                                        }?>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="simplecheckout-cart-total" id="total_sub_total">
                                    <span><b>Предварительная стоимость:</b></span>
                                    <span class="simplecheckout-cart-total-value"><?=($all_price)?$all_price:0?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></span>
                                    <span class="simplecheckout-cart-total-remove">
                                            </span>
                                </div>
                                <div class="simplecheckout-cart-total" id="total_total">
                                    <span><b>Итого:</b></span>
                                    <span class="simplecheckout-cart-total-value"><?=($all_price)?$all_price:0?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></span>
                                    <?$item_to_form[] = "ИТОГО:" . "\t" . ($all_items)?$all_items:0 . " шт.\t" . ($all_price)?$all_price:0 . "руб.\n"?>
                                    <span class="simplecheckout-cart-total-remove">
                                            </span>
                                </div>
                                <!--div class="simplecheckout-cart-total">
                                    <span class="inputs">Купон:&nbsp;<input class="form-control" type="text" data-onchange="reloadAll" name="coupon" value=""></span>
                                </div-->
                                <!--div class="simplecheckout-cart-total">
                                    <span class="inputs">Подарочный сертификат:&nbsp;<input class="form-control" type="text" name="voucher" data-onchange="reloadAll" value=""></span>
                                </div-->
                                <!--div class="simplecheckout-cart-total simplecheckout-cart-buttons">
                                    <span class="inputs buttons"><a id="simplecheckout_button_cart" data-onclick="reloadAll" class="button btn-primary button_oc btn"><span>Обновить</span></a></span>
                                </div-->
                                <input type="hidden" name="remove" value="" id="simplecheckout_remove">
                                <div style="display:none;" id="simplecheckout_cart_total"><div class="products"><b><?=$all_items?></b> товаров, </div><div class="prices">на <b><?=$all_price?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></b>
                                    </div>
                                </div>
                                <!--div style="display:none;" id="simplecheckout_cart_weight">300.00г</div-->
                            </div>

                            <script type="text/javascript">
                                domReady(function(){
                                    $(function(){
                                        if (typeof Simplecheckout === "function") {
                                            var simplecheckout_0 = new Simplecheckout({
                                                mainRoute: "checkout/simplecheckout",
                                                additionalParams: "",
                                                additionalPath: "",
                                                mainUrl: "index.php?route=checkout/simplecheckout&group=0",
                                                mainContainer: "#simplecheckout_form_0",
                                                currentTheme: "",
                                                loginBoxBefore: "",
                                                displayProceedText: 1,
                                                scrollToError: 1,
                                                scrollToPaymentForm: 1,
                                                useAutocomplete: 1,
                                                useGoogleApi: 0,
                                                useStorage: 0,
                                                popup: 0,
                                                agreementCheckboxStep: '',
                                                enableAutoReloaingOfPaymentFrom: 0,
                                                javascriptCallback: function() {}
                                            });

                                            simplecheckout_0.init();

                                            $(document).ajaxComplete(function(e, xhr, settings) {
                                                if (settings.url.indexOf("route=module/cart&remove") > 0 || (settings.url.indexOf("route=module/cart") > 0 && settings.type == "POST") || settings.url.indexOf("route=checkout/cart/add") > 0 || settings.url.indexOf("route=checkout/cart/remove") > 0) {
                                                    window.resetSimpleQuantity = true;
                                                    simplecheckout_0.reloadAll();
                                                }
                                            });

                                            $(document).ajaxSend(function(e, xhr, settings) {
                                                if (settings.url.indexOf("checkout/simplecheckout&group") > 0 && typeof window.resetSimpleQuantity !== "undefined" && window.resetSimpleQuantity) {
                                                    settings.data = settings.data.replace(/quantity.+?&/g,"");
                                                    window.resetSimpleQuantity = false;
                                                }
                                            });
                                        }
                                    });
                                });
                            </script>

                            <div class="order-footer texted-right">
                                <div class="row">
                                    <div class="col-sm-2 col-sm-offset-8 btn-col-1">
                                        <a class="btn btn-default btn-block" href="/catalog/">Продолжить покупки</a>
                                    </div>
                                    <div class="col-sm-2 btn-col-2">
                                        <a href="/basket/" class="btn btn-block btn-danger">Оформить заказ</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");