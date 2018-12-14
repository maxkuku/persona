<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<? if ($arResult["isFormErrors"] == "Y"): ?>
    <div class="error form_error">
        <?= $arResult["FORM_ERRORS_TEXT"]; ?>
    </div>
<? endif; ?>
<?= $arResult["FORM_NOTE"] ?>
<? if ($arResult["isFormNote"] != "Y") {
    ?>
    <?= $arResult["FORM_HEADER"] ?>
    <?
    /***********************************************************************************
     * form questions
     ***********************************************************************************/
    global $item_to_form;
    ?>

    <div class="simplecheckout-left-column">
        <div class="simplecheckout-block" id="simplecheckout_customer">
            <div class="checkout-heading panel-heading"><span>Покупатель</span>
                <!--span class="checkout-heading-button"><a href="javascript:void(0)" data-onclick="openLoginBox">Я зарегистрирован</a></span-->
            </div>
            <div class="simplecheckout-block-content">
                <fieldset class="form-horizontal">
                    <!--div class="form-group  row-customer_register">
						<label class="control-label col-sm-4">Зарегистрироваться</label>
						<div class="col-sm-8">
							<div>
								<div class="radio">
									<label><input type="radio" name="customer[register]" value="1" data-onchange="reloadAll">Да</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="customer[register]" value="0" checked="checked" data-onchange="reloadAll">Нет</label>
								</div>
							</div>
						</div>
					</div-->
                    <div class="form-group  row-customer_email">
                        <label class="control-label col-sm-4">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="inputtext form-control" name="form_email_11" value=""
                                   id="customer_email" value="" placeholder="Отслеживать свой заказ"
                                   data-reload-payment-form="true">
                            <div class="simplecheckout-rule-group" data-for="customer_email">
                                <div style="display:none;" data-for="customer_email" data-rule="api"
                                     class="simplecheckout-error-text simplecheckout-rule"
                                     data-method="checkEmailForUniqueness" data-filter="customer_register"
                                     data-filter-value="0">Адрес уже зарегистрирован!
                                </div>
                                <div style="display:none;" data-for="customer_email" data-rule="regexp"
                                     class="simplecheckout-error-text simplecheckout-rule" data-regexp=".+@.+">
                                    Некорректный адрес электронной почты!
                                </div>
                            </div>
                            <div class="simplecheckout-tooltip" data-for="customer_email">Обязателен для безналичной
                                оплаты!
                            </div>
                        </div>
                    </div>
                    <div class="form-group required row-customer_firstname">
                        <label class="control-label col-sm-4">Имя</label>
                        <div class="col-sm-8">
                            <input type="text" class="inputtext form-control" name="form_text_13"
                                   id="customer_firstname" value="<?= htmlspecialchars($_REQUEST['form_text_13']) ?>"
                                   placeholder="" data-reload-payment-form="true">

                            <div class="simplecheckout-rule-group" data-for="customer_firstname">
                                <div style="display:none;" data-for="customer_firstname" data-rule="byLength"
                                     class="simplecheckout-error-text simplecheckout-rule" data-length-min="1"
                                     data-length-max="32" data-required="true">Имя должно быть от 1 до 32 символов!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group required row-customer_telephone">
                        <label class="control-label col-sm-4">Телефон</label>
                        <div class="col-sm-8">
                            <input type="tel" class="inputtext form-control" name="form_text_12" id="customer_telephone"
                                   value="<?= htmlspecialchars($_REQUEST['form_text_12']) ?>" placeholder=""
                                   data-reload-payment-form="true">

                            <div class="simplecheckout-rule-group" data-for="customer_telephone">
                                <div style="display:none;" data-for="customer_telephone" data-rule="byLength"
                                     class="simplecheckout-error-text simplecheckout-rule" data-length-min="3"
                                     data-length-max="32" data-required="true">Телефон должен быть от 3 до 32 символов!
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="simplecheckout-block" id="simplecheckout_payment_form" style="margin: 0px; padding: 0px;"></div>
        <div class="simplecheckout-block" id="simplecheckout_comment">
            <div class="checkout-heading panel-heading">Комментарий к заказу (не обязательно)</div>
            <div class="simplecheckout-block-content">
                <textarea name="form_textarea_17" cols="47" rows="3" class="inputtextarea form-control" id="comment"
                          placeholder="Можете оставить свой комментарий к заказу"
                          data-reload-payment-form="true"></textarea>
                <textarea style="display:none" name="form_textarea_18" cols="47" rows="3"
                          class="inputtextarea"><?= implode("", $item_to_form) ?></textarea>
            </div>
        </div>
    </div>
    <div class="simplecheckout-right-column">
        <div class="simplecheckout-block" id="simplecheckout_samo_address">
            <div class="checkout-heading panel-heading">Самовывоз из пункта</div>
            <div class="simplecheckout-block-content">
                <fieldset class="form-horizontal">
                    <div class="form-group required row-payment_address_country_id">
                        <label class="control-label col-sm-4">Самовывоз</label>
                        <div class="col-sm-8">

                            <select class="form-control" name="form_text_23" id="samo_address_country_id"
                                    data-onchange="reloadAll">
                                <option value="0">Выберите при самовывозе</option>
                                <? $APPLICATION->IncludeComponent(
                                    "persona:news.list",
                                    "addresses_for_order",
                                    array(
                                        "IBLOCK_ID" => "15",
                                        "NEWS_COUNT" => "10020",
                                        "SORT_BY1" => "SORT",
                                        "SORT_ORDER1" => "ASC",
                                        "PROPERTY_CODE" => array(
                                            0 => "CENTER",
                                            1 => "",
                                        ),
                                        "CHECK_DATES" => "Y",
                                        "CACHE_TYPE" => "A",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "COMPONENT_TEMPLATE" => "addresses",
                                        "IBLOCK_TYPE" => "news",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER2" => "ASC",
                                        "FILTER_NAME" => "",
                                        "FIELD_CODE" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "DETAIL_URL" => "",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "SET_TITLE" => "N",
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                        "ADD_SECTIONS_CHAIN" => "Y",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "STRICT_SECTION_CHECK" => "N",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "PAGER_TEMPLATE" => ".default",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "DISPLAY_BOTTOM_PAGER" => "Y",
                                        "PAGER_TITLE" => "Новости",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "SET_STATUS_404" => "N",
                                        "SHOW_404" => "N",
                                        "MESSAGE_404" => ""
                                    ),
                                    false
                                ); ?>
                            </select>
                            <div class="simplecheckout-rule-group" data-for="payment_address_country_id">
                                <div style="display:none;" data-for="samo_address_country_id" data-rule="notEmpty"
                                     class="simplecheckout-error-text simplecheckout-rule" data-not-empty="1"
                                     data-required="true">Выберите адрес
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <input type="hidden" name="samo_address[current_address_id]" id="psamo_address_current_address_id"
                       value="0">
            </div>
        </div>
        <div class="simplecheckout-block" id="simplecheckout_payment_address">
            <div class="checkout-heading panel-heading">Адрес доставки</div>
            <div class="simplecheckout-block-content">
                <fieldset class="form-horizontal">
                    <div class="form-group required row-payment_address_country_id">
                        <label class="control-label col-sm-4">Страна</label>
                        <div class="col-sm-8">

                            <select class="form-control countries" name="city[]">
                                <ul class="dropdown-menu">
                                    <?$country = fopen('country.csv','r');
                                    $f = file('country.csv');
                                    $row = [];
                                    $from = ['"', '\n', '\r'];
                                    $to = ['','',''];
                                    foreach($f as $line){
                                        $row[] = explode(';', str_replace($from,$to,$line));
                                    }
                                    fclose($country);
                                    foreach($row as $i=>$r){?>
                                            <option value='<?=$r[2]?>' data-country-id="<?=$r[0]?>"><?=$r[2]?></option>
                                    <?}?>
                                </ul>
                            </select>

                            <div class="simplecheckout-rule-group" data-for="payment_address_country_id">
                                <div style="display:none;" data-for="payment_address_country_id" data-rule="notEmpty"
                                     class="simplecheckout-error-text simplecheckout-rule" data-not-empty="1"
                                     data-required="true">Выберите страну!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group required row-payment_address_zone_id">
                        <label class="control-label col-sm-4">Регион</label>
                        <div class="col-sm-8">

                            <select class="form-control regions" name="city[]">
                                <ul class="dropdown-menu">
                                    <?$region = fopen('region.csv','r');
                                    $f = file('region.csv');
                                    $row = [];
                                    $from = ['"', '\n', '\r'];
                                    $to = ['','',''];
                                    foreach($f as $line){
                                        $row[] = explode(';', str_replace($from,$to,$line));
                                    }
                                    fclose($region);
                                    foreach($row as $i=>$r){
                                        #if($r[1] == '3159'){?>
                                            <option value='<?=$r[3]?>' data-country-id="<?=$r[1]?>"><?=$r[3]?></option>
                                        <? # }
                                    }?>
                                </ul>
                            </select>

                            <div class="simplecheckout-rule-group" data-for="payment_address_zone_id">
                                <div style="display:none;" data-for="payment_address_zone_id" data-rule="notEmpty"
                                     class="simplecheckout-error-text simplecheckout-rule" data-not-empty="1"
                                     data-required="true">Выберите регион!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group required row-payment_address_city">
                        <label class="control-label col-sm-4">Город</label>
                        <div class="col-sm-8">

                            <select class="form-control cities" name="city[]">
                                <ul class="dropdown-menu">
                                    <?$city = fopen('city.csv','r');
                                    $f = file('city.csv');
                                    $row = [];
                                    $from = ['"', '\n', '\r'];
                                    $to = ['','',''];
                                    foreach($f as $line){
                                        $row[] = explode(';', str_replace($from,$to,$line));
                                    }
                                    fclose($region);
                                    foreach($row as $i=>$r){
                                        #if($r[1] == '3159'){?>
                                        <option value='<?=$r[3]?>' data-country-id="<?=$r[1]?>"  data-region-id="<?=$r[2]?>"><?=$r[3]?></option>
                                        <? # }
                                    }?>
                                </ul>
                            </select>

                            <div class="simplecheckout-rule-group" data-for="payment_address_city">
                                <div style="display:none;" data-for="payment_address_city" data-rule="byLength"
                                     class="simplecheckout-error-text simplecheckout-rule" data-length-min="2"
                                     data-length-max="128" data-required="true">Город должен быть от 2 до 128 символов!
                                </div>
                            </div>
                            <!--div class="simplecheckout-tooltip" data-for="payment_address_city">Начните вводить и выберите из предложенного</div-->
                        </div>
                    </div>
                    <div class="form-group  row-payment_address_postcode">
                        <label class="control-label col-sm-4">Индекс</label>
                        <div class="col-sm-8">
                            <input type="text" class="inputtext form-control" name="form_text_15" value=""
                                   id="payment_address_postcode" placeholder="Обязателен для заказов Почтой"
                                   data-reload-payment-form="true">

                            <div class="simplecheckout-rule-group" data-for="payment_address_postcode">
                                <div style="display:none;" data-for="payment_address_postcode" data-rule="byLength"
                                     class="simplecheckout-error-text simplecheckout-rule" data-length-min="2"
                                     data-length-max="10">Индекс должен быть от 2 до 10 символов!
                                </div>
                            </div>
                            <div class="simplecheckout-tooltip" data-for="payment_address_postcode">Введите индекс
                                своего почтового отделения
                            </div>
                        </div>
                    </div>
                    <div class="form-group required row-payment_address_address_1">
                        <label class="control-label col-sm-4">Адрес</label>
                        <div class="col-sm-8">

                            <input type="text" class="inputtext form-control" name="form_text_16" value=""
                                   id="payment_address_address_1" value="" placeholder="Заполните для доставки!"
                                   data-onchange="reloadAll">
                            <div class="simplecheckout-rule-group" data-for="payment_address_address_1">
                                <div style="display:none;" data-for="payment_address_address_1" data-rule="byLength"
                                     class="simplecheckout-error-text simplecheckout-rule" data-length-min="3"
                                     data-length-max="128" data-required="true">Адрес должен быть от 3 до 128 символов!
                                </div>
                            </div>
                            <div class="simplecheckout-tooltip" data-for="payment_address_address_1">Введите улицу и №
                                дома
                            </div>
                        </div>
                    </div>
                </fieldset>
                <input type="hidden" name="payment_address[current_address_id]" id="payment_address_current_address_id"
                       value="0">
            </div>
        </div>
    </div>
    <?
    /* foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
    {
        if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
        {
            echo $arQuestion["HTML_CODE"];
        }
        else
        {
    ?>
        <tr>
            <td>
                <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
                <span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
                <?endif;?>
                <?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?>
                <?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""?>
            </td>
            <td><?=$arQuestion["HTML_CODE"]?></td>
        </tr>
    <?
        }
    } */ //endwhile
    ?>
    <?
    if ($arResult["isUseCaptcha"] == "Y") {
        ?>
        <table id="captcha">
            <tr>
                <th colspan="2"><b><?= GetMessage("FORM_CAPTCHA_TABLE_TITLE") ?></b></th>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="hidden" name="captcha_sid"
                           value="<?= htmlspecialcharsbx($arResult["CAPTCHACode"]); ?>"/><img
                            src="/bitrix/tools/captcha.php?captcha_sid=<?= htmlspecialcharsbx($arResult["CAPTCHACode"]); ?>"
                            width="180" height="40"/></td>
            </tr>
            <tr>
                <td><?= GetMessage("FORM_CAPTCHA_FIELD_TITLE") ?><?= $arResult["REQUIRED_SIGN"]; ?></td>
                <td><input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext"/></td>
            </tr>
        </table>
        <?
    } // isUseCaptcha
    ?>
    <!--div class="simplecheckout-block" id="simplecheckout_shipping">
                                    <div class="checkout-heading panel-heading">Способ доставки</div>
                                    <div class="simplecheckout-warning-block" style="display:none">Вы должны выбрать способ доставки!</div>
                                    <div class="simplecheckout-block-content">
                                        <div class="simplecheckout-warning-text">Введите Ваш адрес для доставки</div>
                                    </div>
                                </div-->
    <!--div class="simplecheckout-block" id="simplecheckout_payment">
		<div class="checkout-heading panel-heading">Способ оплаты</div>
		<div class="simplecheckout-warning-block" style="display:none">Вы должны выбрать способ оплаты!</div>
		<div class="simplecheckout-block-content">
		</div>
	</div-->

    </div>
    <div id="simplecheckout_bottom" style="width:100%;height:1px;clear:both;"></div>
    <div class="simplecheckout-proceed-payment" id="simplecheckout_proceed_payment" style="display:none;">Подождите...
        Происходит переход к оплате
    </div>
    <div class="simplecheckout-warning-block" id="agreement_warning" style="display:none;">Вы должны согласиться с
        условиями соглашения "Политика конфиденциальности"!
    </div>
    <div class="simplecheckout-button-block buttons" id="buttons">
        <div class="simplecheckout-button-right">
            <!--span id="agreement_checkbox"><label><input type="checkbox" name="agreement" value="1" checked="checked">Нажимая "Оформить заказ", вы подтверждаете свою дееспособность, согласие на обработку персональных данных, получение информации о заказе в соответствии c <a class="colorbox fancybox agree" href="/about-us/policy" alt="Политика конфиденциальности"><b>Политикой конфиденциальности.</b></a></label>&nbsp;
            </span-->
            <? if ($arParams['USER_CONSENT'] == 'Y'):?>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.userconsent.request",
                    "",
                    array(
                        "ID" => $arParams["USER_CONSENT_ID"],
                        "IS_CHECKED" => $arParams["USER_CONSENT_IS_CHECKED"],
                        "AUTO_SAVE" => "Y",
                        "IS_LOADED" => $arParams["USER_CONSENT_IS_LOADED"],
                        "REPLACE" => array(
                            'button_caption' => 'Подписаться!',
                            'fields' => array('Email', 'Телефон', 'Имя')
                        ),
                    )
                ); ?>
            <? endif; ?>
        </div>
        <div class="simplecheckout-button-left">
            <a class="button btn-primary button_oc btn" data-onclick="backHistory"
               id="simplecheckout_button_back"><span>Назад</span></a>
            <input <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?> type="submit"
                                                                                              name="web_form_submit"
                                                                                              value="<?= htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?>"
                                                                                              class="button btn-primary btn"/>
            <? if ($arResult["F_RIGHT"] >= 15):?>
                &nbsp;<input type="hidden" name="web_form_apply" value="Y"/>
            <? endif; ?>
        </div>
    </div>


    <?= $arResult["FORM_FOOTER"] ?>
    <?
} //endif (isFormNote)
?>