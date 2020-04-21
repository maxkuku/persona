<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CModule::IncludeModule('iblock');
CModule::IncludeModule('form');
$APPLICATION->SetTitle("Оформление заказа");
$APPLICATION->AddHeadScript("/basket/region.js");
$APPLICATION->AddHeadScript("https://3dsec.sberbank.ru/demopayment/docsite/assets/js/ipay.js");
$APPLICATION->AddHeadString("<script>var ipay = new IPAY({api_token: '".TOKEN."'})</script>");
$APPLICATION->SetAdditionalCSS("/basket/style.css");
$APPLICATION->SetAdditionalCSS("https://securepayments.sberbank.ru/demopayment/docsite/assets/css/modal.css");


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


    $saleAnswer = Array();

	if ( $res->SelectedRowsCount() > 0 ) {

		$arAnswer1 = [];
		while ( $arAnswer = $res->Fetch() ) {
			$arAnswer1[] = $arAnswer['RESULT_ID'];
		}
		$ids = implode( ',', $arAnswer1 );


		# FIELD_ID = 8 -> item ID, 10 -> price, 9 -> price, 23 -> product-variant. Здесь сумма скидки, если есть скидка
		$res1 = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = " . $FORM_ID . " AND RESULT_ID IN ($ids) AND FIELD_ID = 8" );
		$res2 = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = " . $FORM_ID . " AND RESULT_ID IN ($ids) AND FIELD_ID = 10" );
		$res3 = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = " . $FORM_ID . " AND RESULT_ID IN ($ids) AND FIELD_ID = 9" );




		while ( $idAnswer = $res1->Fetch()
            AND $priceAnswer = $res2->Fetch()
            AND $saleAnswer = $res3->Fetch()
        ) {
			$x                   = $idAnswer['USER_TEXT'];
			$ITEM[ $x ]['ITEM']  = [ $idAnswer['USER_TEXT'], $priceAnswer['USER_TEXT'] ];
			$ITEM[ $x ]['NAME']  = $idAnswer['USER_TEXT'];
			$ITEM[ $x ]['ID']    = $idAnswer['USER_TEXT'];
			$ITEM[ $x ]['PRICE'] = $priceAnswer['USER_TEXT'];
			$ITEM[ $x ]['SALE']  = $saleAnswer['USER_TEXT'];
			$ITEM[ $x ]['QUAN'] ++;
            $ITEM[ $x ]['FID']   = $idAnswer['ID'];
			$price += $priceAnswer['USER_TEXT'];
			$quan ++;

		}

        $formlineids = str_replace(',', '_', $ids);

	}
}


if(strlen(htmlspecialchars($_REQUEST['orderId'],3)) > 11) {
    $orderId = htmlspecialchars($_REQUEST['orderId'], 3);


    $url = 'https://'.SBER_ADDR.'.sberbank.ru/payment/rest/getOrderStatusExtended.do';

    $postData = array(
        'token' => TOKEN,
        'orderId' => $orderId,
    );

    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, $url);
    curl_setopt($handle, CURLOPT_POST, true);
    curl_setopt($handle, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($handle);
    curl_close($handle);


    # result {"errorCode":"0","errorMessage":"Успешно","orderNumber":"837","orderStatus":2,"actionCode":0,"actionCodeDescription":"","amount":550000,"currency":"643","date":1587020974315,"orderDescription":"","ip":"176.14.117.11","merchantOrderParams":[],"transactionAttributes":[],"attributes":[{"name":"mdOrder","value":"66c0640d-c88c-76e6-9dfa-c4ff5e34c9d9"}],"cardAuthInfo":{"maskedPan":"411111**1111","expiration":"202412","cardholderName":"CARDHOLDER NAME","approvalCode":"123456","pan":"411111**1111"},"authDateTime":1587021008713,"terminalId":"123456","authRefNum":"088417256908","paymentAmountInfo":{"paymentState":"DEPOSITED","approvedAmount":550000,"depositedAmount":550000,"refundedAmount":0},"bankInfo":{"bankName":"TEST CARD","bankCountryCode":"RU","bankCountryName":"Россия"}}


    $out_verified_payment = json_decode($output, true);


    if ($out_verified_payment['errorCode'] == 0 && $out_verified_payment['orderNumber'] > 0) {
        $FORM_PRE_ID = 2;
        $BX_USER_ID = $_COOKIE['BX_USER_ID'];
        $res_pre = $DB->Query("SELECT RESULT_ID FROM b_form_result_answer WHERE FORM_ID = " . $FORM_PRE_ID . " AND USER_TEXT = '$BX_USER_ID'");
        if ($res_pre->SelectedRowsCount() > 0) {
            $arAns = [];
            while ($arAnswer2 = $res_pre->Fetch())
                $arAns[] = $arAnswer2['RESULT_ID'];
        }

        if (count($arAns) > 0) {
            foreach ($arAns as $a) {
                CFormResult::Delete($a);
            }
        }
    }
}
?>
<style>
    div#cart {
        display: none;
    }
</style>
<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12">

            <p></p>
            <div class="simple-content">
                <div id="simplecheckout_form_0">
                    <div class="simplecheckout">
                        <div class="simplecheckout-step" style="display: block;"><div class="simplecheckout-block" id="simplecheckout_cart">
                            <?if($price < MIN_ORDER_PRICE){?>
                            <div class="simplecheckout-warning-block" data-price="<?=$price?>">Внимание: Минимальная сумма для заказа <?=MIN_ORDER_PRICE?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span>!</div>
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
                                    $item_to_form = "<table><tr><td><b>Название</b></td><td><b>Артикул</b></td><td><b>ID</b></td><td><b>Количество</b></td><td><b>Скидка</b></td><td><b>Цена</b></td></tr>";



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
                                    <tr class="item-ids" data-formlineid="<?=$it["FID"]?>">
                                        <td class="image">
                                            <a href="/catalog/detail.php?ID=<?=$it["ID"]?>"><img src="<?=$ar["FILE"]['src']?>" alt="<?=$it["NAME"]?>" title="<?=$ar_res["NAME"]?>"></a>
                                        </td>
                                        <td class="name">
                                            <div class="image">
                                                <a href="/catalog/detail.php?ID=<?=$it["ID"]?>"><img src="<?=$ar["FILE"]['src']?>" alt="<?=$ar_res["NAME"]?>" title="<?=$ar_res["NAME"]?>"></a>
                                                <? $item_to_form .= "<tr><td>" . $ar_res["NAME"] . "</td><td>" . $SrcPropID . "</td><td>" . $it["ID"] . "</td><td>" . $it['QUAN'] . "</td><td>" . $it['SALE'] . "</td><td>" . $it["PRICE"] . "</td></tr>"?>
                                            </div>
                                            <a href="/catalog/detail.php?ID=<?=$it["ID"]?>"><?=$ar_res["NAME"]?></a>
                                            <div class="options">
                                            </div>
                                        </td>
                                        <td class="model"><?=$SrcPropID?></td>
                                        <td class="quantity">
                                            <div class="input-group btn-block" style="max-width: 200px;">
                    <!--span class="input-group-btn">
                        <button class="btn btn-primary" data-onclick="decreaseProductQuantity" data-toggle="tooltip" type="submit" data-original-title="" title="">
                            <i class="fa fa-minus"></i>
                        </button>
                    </span-->
                    <span class="form-control item-quan" type="text" data-onchange="changeProductQuantity" name="quantity[<?=$it["ID"]?>]" value="<?=$it["QUAN"]?>" size="1"><?=$it["QUAN"]?></span>
                    <!--span class="input-group-btn">
                        <button class="btn btn-primary" data-onclick="increaseProductQuantity" data-toggle="tooltip" type="submit" data-original-title="Убрать" title="Убрать">
                            <i class="fa fa-plus"></i>
                        </button>
                        <button class="btn btn-danger" data-onclick="removeProduct" data-product-key="<?=$it["ID"]?>" data-toggle="tooltip" type="button" data-original-title="Добавить" title="Добавить">
                            <i class="fa fa-times-circle"></i>
                        </button>
                    </span-->
                                            </div>
                                        </td>
                                        <td class="price" data-sale="<?=($it["SALE"])?$it["SALE"]:0?>"><span class="price-val"><?=$it["PRICE"]?></span> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></td>
                                        <td class="total"><span class="total-val"><?=$it["PRICE"] * $it["QUAN"]?></span> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></td>
                                        <td class="remove" style="text-align: center;">
                                            <div class="cartCellContent">
                                                <a href="#" onclick="cart.remove(<?=$it["ID"]?>,'Y');return false;" title="Удалить" class=""><i class="fa fa-trash-o fa-lg"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <?
                                        $all_items += $it["QUAN"];
                                        $all_sale  += $it["SALE"];
                                        $all_price += $it["PRICE"] * $it["QUAN"];
                                        #if(ONLY_DELIVERY || DELIVERY_PRICE > 0)
                                        #    $all_price = $all_price + DELIVERY_PRICE;
                                    }?>
                                    </tbody>
                                </table>
                            </div>


                            <div class="simplecheckout-cart-total" id="total_sub_total">
                                <span><b>Предварительная стоимость:</b></span>
                                <span class="simplecheckout-cart-total-value"><?=($all_price)?$all_price:0?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></span>
                                <span class="simplecheckout-cart-total-remove"></span>
                            </div>
                                <?$item_to_form .= "<tr><td colspan=5>Предварительная стоимость:" . "</td><td>" . $all_price . "</td></tr>";?>
                            <div class="simplecheckout-cart-total" id="total_total">
                                <span><b>Итого:</b></span>
                                <span class="simplecheckout-cart-total-value"><span id="itogo-sum"><?=($all_price)?($all_price + DELIVERY_PRICE):0?></span> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></span>
                                <? $dp = DELIVERY_PRICE;
                                $pr2 = $all_price + $dp;
                                $item_to_form .= "<tr><td colspan=5>Штук:" . "</td><td>" . $all_items . "</td></tr>
                                <tr><td colspan=5>ИТОГО:" . "</td><td>" . $pr2 . " руб.</td></tr>";?>
                                <span class="simplecheckout-cart-total-remove"></span>
                            </div>
                            <?if(PERCENT_SALE_DELIVERY > 0):?>
                            <div class="simplecheckout-cart-total" id="sale" >
                                <span><b>Учтена скидка:</b></span>
                                <span id="sale-sum"><?=($all_sale)?$all_sale:0?></span> <span class="roboto-forced sale ruble" aria-hidden="true" style="display:none;"></span>
                                <span class="simplecheckout-cart-total-remove"></span>
                                <?$item_to_form .= "<tr><td colspan=5>Скидка:" . "</td><td>" . $all_sale . " руб.(%)</td></tr>"?>
                            </div>
                            <?endif?>
                            <?if(ONLY_DELIVERY || DELIVERY_PRICE > 0):?>
                                <div class="simplecheckout-cart-total" id="delivery_price">
                                    <span><b>Включена стоимость доставки:</b></span>
                                    <span id="delivery-sum"><?=DELIVERY_PRICE?></span>&nbsp;<span class="roboto-forced sale ruble" aria-hidden="true" style="display:none;"></span>
                                    <span class="simplecheckout-cart-total-remove"></span>
                                </div>
                                <?$item_to_form .= "<tr><td colspan=5>Включена стоимость доставки:" . "</td><td>" . DELIVERY_PRICE . " руб.</td></tr>"?>
                            <?endif?>
                            <?$item_to_form .= "</table>"?>
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
                        <!--form-->





                        <?$APPLICATION->IncludeComponent(
"persona:form.result.new",
"sendorder",
array(
    "CACHE_TIME" => "3600",
    "CACHE_TYPE" => "A",
    "CHAIN_ITEM_LINK" => "",
    "CHAIN_ITEM_TEXT" => "",
    "EDIT_URL" => "result_edit.php",
    "IGNORE_CUSTOM_TEMPLATE" => "N",
    "LIST_URL" => "result_list.php",
    "SEF_MODE" => "N",
    "SUCCESS_URL" => "/basket/index.php",
    "USER_CONSENT" => "N",
    "FORMLINEIDS" => $formlineids,
    "USE_EXTENDED_ERRORS" => "Y",
    "WEB_FORM_ID" => "3",
    "COMPONENT_TEMPLATE" => "sendorder",
    "USER_CONSENT_ID" => "1",
    "USER_CONSENT_IS_CHECKED" => "Y",
    "USER_CONSENT_IS_LOADED" => "N",
    "VARIABLE_ALIASES" => array(
        "WEB_FORM_ID" => "WEB_FORM_ID",
        "RESULT_ID" => "RESULT_ID",
    ),
    "PARAMS" => array(
            "ORDER_ID" => "",
            "PRICE" => (int)$all_price,
    ),
),
false
);?>


                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");