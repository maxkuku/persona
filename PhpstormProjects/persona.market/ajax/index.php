<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Ajax");

CModule::IncludeModule('iblock');
CModule::IncludeModule('form');

$BX_USER_ID = $_COOKIE['BX_USER_ID'];
$SESSION_ID = end(explode('=', bitrix_sessid_get()));

# function show_all is in init.php

//request append to basket
if (htmlspecialchars($_REQUEST['product_id'], 3)) {
    $PRODUCT_ID = htmlspecialchars($_REQUEST['product_id'], 3);
}
if (htmlspecialchars($_REQUEST['WEB_FORM_ID'], 3)) {
    $WEB_FORM_ID = htmlspecialchars($_REQUEST['WEB_FORM_ID'], 3);
}
if (htmlspecialchars($_REQUEST['product_variant'], 3)) {
    $product_variant = htmlspecialchars($_REQUEST['product_variant'], 3);
}



# append to basket
if ($PRODUCT_ID && $WEB_FORM_ID) {

    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_PRICE", "PROPERTY_SALE", "DETAIL_PAGE_URL");
    $arFilter = Array("IBLOCK_ID" => 4, "ID" => $PRODUCT_ID, "ACTIVE" => "Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $PROD_NAME = $arFields['NAME'];
        if($arFields['PROPERTY_SALE_VALUE']):
        $PRICE = $arFields['PROPERTY_SALE_VALUE'];
        else:
        $PRICE = $arFields['PROPERTY_PRICE_VALUE'];
        endif;
        $P_URL = $arFields['DETAIL_PAGE_URL'];
    }

    $arValues = array(
        "form_text_8" => $PRODUCT_ID,
        "form_text_6" => $BX_USER_ID,
        "form_text_7" => $PROD_NAME,
        "form_text_9" => $product_variant,
        "form_text_10" => $PRICE,
    );

    if ($RESULT_ID = CFormResult::Add($WEB_FORM_ID, $arValues)) {

        # у одного заказа в форме несколько строк
        # выберем все строки с id сессии
        if(strlen($RIDS) > 0) {
            $res = $DB->Query("SELECT RESULT_ID FROM b_form_result_answer WHERE FORM_ID = ".$WEB_FORM_ID." AND USER_TEXT = '$BX_USER_ID' OR RESULT_ID IN ($RIDS)");
        }
        else{
            $res = $DB->Query("SELECT RESULT_ID FROM b_form_result_answer WHERE FORM_ID = ".$WEB_FORM_ID." AND USER_TEXT = '$BX_USER_ID'");
        }




        if($res->SelectedRowsCount() > 0) {

            $arAnswer1 = [];
            while ( $arAnswer = $res->Fetch() ) {
                $arAnswer1[] = $arAnswer['RESULT_ID'];
            }
            $ids = implode( ',', $arAnswer1 );
            # FIELD_ID = 8 -> item ID, 10 -> price
            $res1       = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = ".$WEB_FORM_ID." AND RESULT_ID IN ($ids) AND FIELD_ID = 8" );
            $res2      = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = ".$WEB_FORM_ID." AND RESULT_ID IN ($ids) AND FIELD_ID = 10" );



            while ( $idAnswer = $res1->Fetch() AND $priceAnswer = $res2->Fetch() ) {
                $x = $idAnswer['USER_TEXT'];
                $ITEM[$x]['ITEM'] = [$idAnswer['USER_TEXT'], $priceAnswer['USER_TEXT']];
                $ITEM[$x]['ID'] = $idAnswer['USER_TEXT'];
                $ITEM[$x]['PRICE'] += $priceAnswer['USER_TEXT'];
                $ITEM[$x]['QUAN']++;
                $price += $priceAnswer['USER_TEXT'];
                $quan++;
            }



        }


        # TODO add basket mini update
        $json['button'] = '<span class="products" data-quan="'.$quan.'"><b>'.$quan.'</b> товаров, </span>
								<span class="prices">на <b>'.$price.'
										<span class="sr-only">р.</span>
										<span class="roboto-forced ruble" aria-hidden="true" style="display:none"></span>
									</b>
								</span>';

        $json['good'] = "Товар <a href=\"" . $P_URL . "\">" . $PROD_NAME . " добавлен в вашу <a href=\"/basket/\">корзину</a>! на сумму " . $PRICE . " р.";
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
    } else {
        global $strError;
        echo $strError;
    }

}


# append / remove to basket in popup
$PRODUCT_ID = htmlspecialchars($_REQUEST['key'], 3);
$UPD = (int)htmlspecialchars($_REQUEST['quantity'], 3);
if ($PRODUCT_ID > 0 && $UPD > 0) {

    $WEB_FORM_ID = 2;

    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_PRICE", "DETAIL_PAGE_URL");
    $arFilter = Array("IBLOCK_ID" => GOODS, "ID" => $PRODUCT_ID, "ACTIVE" => "Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $PROD_NAME = $arFields['NAME'];
        $PRICE = $arFields['PROPERTY_PRICE_VALUE'];
        $P_URL = $arFields['DETAIL_PAGE_URL'];
    }


    $arValues = array(
        "form_text_8" => $PRODUCT_ID,
        "form_text_6" => $BX_USER_ID,
        "form_text_7" => $PROD_NAME,
        "form_text_9" => $product_variant,
        "form_text_10" => $PRICE,
    );

    $done = 0;
    for($i=0; $i<$UPD; $i++){
        $RESULT_ID = CFormResult::Add($WEB_FORM_ID, $arValues);
        $done++;
    }

    if ($done > 0) {

        show_all();

    } else {
        global $strError;
        echo $strError;
    }


}
elseif ($PRODUCT_ID > 0 && (int)$UPD < 1) { #?key=189&quantity='-1'


    $FORM_ID = 2;

    # у одного заказа в форме несколько строк
    # выберем все, где id товара нужный нам
    $res = $DB->Query("SELECT RESULT_ID FROM b_form_result_answer WHERE FORM_ID = " . $FORM_ID . " AND USER_TEXT = $PRODUCT_ID");
    $arAnswer1 = [];
    while ($arAnswer = $res->Fetch()) {
        $arAnswer1[] = $arAnswer['RESULT_ID'];
    }

    # у одного заказа в форме несколько строк
    # выберем все, где id сессии нужный нам
    $res = $DB->Query("SELECT RESULT_ID FROM b_form_result_answer WHERE FORM_ID = " . $FORM_ID . " AND USER_TEXT = '$BX_USER_ID'");
    $arAnswer2 = [];
    while ($arAnswer = $res->Fetch()) {
        $arAnswer2[] = $arAnswer['RESULT_ID'];
    }

    # пересечем массивы и оставим один элемент, потому что их может быть несколько
    $RESULT_ID = (array_splice(array_intersect($arAnswer1, $arAnswer2), 0, 1));


    #pr($RESULT_ID);
    #exit();

    if ($RESULT_ID) {
        CFormResult::Delete($RESULT_ID[0],"N");

        show_all();

    }
    else{
        show_all();
    }

}

if (strlen(htmlspecialchars($_REQUEST['fids_to_delete'], 3)) > 0){
    $res = "N";
    $del = explode('_', htmlspecialchars($_REQUEST['fids_to_delete'], 3));
    $json = [];
    $json['income'] = htmlspecialchars($_REQUEST['fids_to_delete'], 3);
    foreach($del as $d){

        if(CFormResult::Delete($d,"N")){
            $res = "Y";
        }
    }

    if($res == "Y")
        $json['success'] = "Y";


    echo json_encode($json);
}

if (htmlspecialchars($_REQUEST['callback'], 3) == "Y") {

    ?>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Заказать звонок</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="post" enctype="multipart/form-data" id="callback_form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input type="text" name="form_text_20" value="" id="input-name" class="form-control" placeholder="Ваше имя">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <input type="text" name="form_text_21" value="" id="input-phone" class="form-control" placeholder="Ваш телефон">
                        </div>
                    </div>
                    <input type="hidden" name="callback_order" value="Y"/>
                    <input type="hidden" name="sessid" value="<?=substr(bitrix_sessid_get(),7)?>"/>
                    <button class="btn btn-danger btn-block" name="web_form_submit" type="button" onclick="callback_send()"><i class="fa fa-bolt fa-fw"></i>&nbsp;Заказать</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function callback_send(){
            if($("[name=form_text_20]").val().length > 0){
                if($("[name=form_text_21]").val().length > 0){

                    if($("[name=form_text_21]").val().replace(/\D+/g, '').length == 11){

                        $('#callback_form').serialize();
                        $.ajax({
                            url: '/ajax/index.php?callback_order=Y',
                            type: 'post',
                            data: { name: $("[name=form_text_20]").val(), phone: $("[name=form_text_21]").val() },
                            dataType: 'json',
                            success: function (res) {
                                $('.modal-body').html();
                                $('.modal-body').html(res.good);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                $('.modal-body').html();
                                $('.modal-body').html('<p>Ошибка! ' + xhr.error + '</p><button class="btn btn-default btn-xs" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>');
                            }
                        });
                    }
                    else{
                        alert("Телефон указан не полностью");
                    }
                }
                else{
                    alert("Заполните телефон");
                }
            }
            else{
                alert("Заполните имя");
            }
        }
    </script>
    <?
}

if (htmlspecialchars($_REQUEST['callback_order'], 3) == "Y") {
    $arValues = array(
        "form_text_20" => htmlspecialchars($_REQUEST['name'], 3),
        "form_text_6" => $BX_USER_ID,
        "form_text_21" => htmlspecialchars($_REQUEST['phone'], 3),

    );
    $WEB_FORM_ID = 4;
    if ($RESULT_ID = CFormResult::Add($WEB_FORM_ID, $arValues)) {
        $adminEmail = COption::GetOptionString('main', 'email_from', 'default@admin.email');
        $arEventFields = array(
            "ID"                  => $RESULT_ID,
            "EMAIL_TO"            => implode(",", $adminEmail),
            "ACTIVE"              => "Y",
            "NAME"                => htmlspecialchars($_REQUEST['name'], 3),
        );

        $arEventFields = array_merge($arEventFields,$arValues);

        CEvent::Send("FORM_FILLING_callback", SITE_ID, $arEventFields);
        $json['good'] = "Спасибо. С вами свяжутся в ближайшее время.";
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
    } else {
        global $strError;
        $json['error'] = $strError;
    }
}


#get basket items
$READ = "N";
if (!null == htmlspecialchars($_REQUEST['read'], 3)) {
    $READ = htmlspecialchars($_REQUEST['read'], 3);
}

if ($READ == "Y") {
    show_all(); #show_all() is in init.php
}

$SHOW_ALL = "N";
if (htmlspecialchars($_REQUEST['show_all'], 3)) {
    $SHOW_ALL = htmlspecialchars($_REQUEST['show_all'], 3);
}
if ($SHOW_ALL == "Y") {
    show_all();
}


if (htmlspecialchars($_REQUEST['route'], 3) == "extension/module/xds_qview"
    && (int)htmlspecialchars($_REQUEST['product_id'], 3) > 0) {
    CModule::IncludeModule("iblock");
    $res = CIBlockElement::GetByID((int)htmlspecialchars($_REQUEST['product_id'], 3));
    if ($obRes = $res->GetNextElement()) {
        $item = $obRes->GetFields();
        $props = $obRes->GetProperties();

        $im = $item['DETAIL_PICTURE'];

        if(!$im) {
            $im = $item['PREVIEW_PICTURE'];
        }

        $ar['FILE'] = CFile::ResizeImageGet($item['DETAIL_PICTURE'], array('width' => 350,
            'height' => 350
        ), BX_RESIZE_IMAGE_PROPORTIONAL, true);

        #pr($item);
        #pr($props);
    }
    echo ""; ?>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><?= $item['NAME'] ?></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="images text-center">
                        <div class="thumb">
                            <?if($ar['FILE']['src']){?>
                                <img src="<?= $ar['FILE']['src'] ?>"
                                     title="<?= $item['NAME'] ?>" alt="<?= $item['NAME'] ?>"
                                     class="img-responsive center-block">
                            <?}
                            else if( is_file(SITE_TEMPLATE_PATH . '/images/' . strtolower(str_replace(' ', '-', $item['PROPERTIES']['brand']['VALUE'])) . '-pale.jpg') ){?>
                                <img src="<?= SITE_TEMPLATE_PATH . '/images/' . strtolower(str_replace(' ', '-', $item['PROPERTIES']['brand']['VALUE'])) . '-pale.jpg' ?>"
                                     title="<?= $item['NAME'] ?>" alt="<?= $item['NAME'] ?>"
                                     class="img-responsive center-block">
                            <?}?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 sm-xs-center">
                    <hr class="visible-xs visible-sm">
                    <div class="row">
                        <div class="col-md-9 middle-45px-parent">
                            <div class="middle-45px">
                                <div class="model">Тип средства: <span
                                            class="red-link"><?= $props['tip_sredstva']['VALUE'] ?></span></div>
                                <div class="manufacturer">
                                    Бренд: <a href="/catalog/brands/?brand_name=<?= $props['brand']['VALUE'] ?>"
                                              class="red-link"><?= $props['brand']['VALUE'] ?></a>
                                </div>
                            </div>
                        </div>
                        <!--div class="col-md-3 text-right middle-45px-parent">
							<div class="middle-45px">
								<div class="btn-group">
									<button type="button" data-toggle="tooltip" data-placement="top" class="btn btn-default" title="" onclick="qview_wishlist.add('<?= $item['ID'] ?>');" data-original-title="В закладки"><i class="fa fa-heart fa-fw"></i></button>
									<button type="button" data-toggle="tooltip" data-placement="top" class="btn btn-default" title="" onclick="qview_compare.add('<?= $item['ID'] ?>');" data-original-title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i></button>
								</div>
							</div>
						</div-->
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="price">
                                <hr>
                                <div><?= $props['price']['VALUE'] ?> <span class="sr-only">р.</span><span
                                            class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--div class="row">
                        <div class="col-sm-12">
                            <div class="review">
                                <hr>
                        <span class="stars">
                            <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                        </span>&nbsp;
                                <a href="https://hair-market.ru/londa/dry-refresh-it-shampoo#review">Отзывы (0)</a>
                            </div>
                        </div>
                    </div-->

                    <div class="row sm-xs-center">
                        <div class="col-sm-12">
                            <div class="description">
                                <hr>
                                <?= strip_tags($item['~PREVIEW_TEXT']) ?><a href="<?= $item['DETAIL_PAGE_URL'] ?>"
                                                                            class="red-link">→</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Вернуться</button>
                </div>
                <?
                if (strlen($props['brand']['VALUE']) > 0):?>
                    <div class="col-md-3 col-sm-6">
                        <div style="margin-top: 15px;" class="visible-xs"></div>
                        <button onclick="location.href='<?= $item['DETAIL_PAGE_URL'] ?>'" type="button"
                                class="btn btn-default btn-block">Подробнее
                        </button>
                    </div>
                <?endif ?>
                <div class="col-md-6 col-sm-12">
                    <div style="margin-top: 15px;" class="visible-sm visible-xs"></div>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">

                            <div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-default" id="minus"><i class="fa fa-minus fa-fw"></i></button>
						</span>

                                <input type="text" name="quantity" value="1" id="modal-input-quantity"
                                       class="form-control" style="text-align: center; font-weight: bold;">
                                <span class="input-group-btn">
							<button class="btn btn-default" id="plus"><i class="fa fa-plus fa-fw"></i></button>
						</span>
                            </div>
                            <input type="hidden" name="product_id" value="<?= $item['ID'] ?>">
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <div style="margin-top: 15px;" class="visible-xs"></div>

                            <button type="button" class="btn btn-danger btn-block" id="modal-button-cart"
                                    data-loading-text="Загрузка..."><b>В корзину</b></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $("#additional-images").owlCarousel({
                responsiveBaseWidth: '#additional-images',
                itemsCustom: [[0, 3], [300, 4]],
                theme: 'qview-images',
                navigation: true,
                slideSpeed: 200,
                paginationSpeed: 300,
                stopOnHover: true,
                touchDrag: true,
                mouseDrag: false,
                navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                pagination: false,
                autoPlay: false
            });

            $('#additional-images img').click(function () {
                var activeElement = $(this);
                oldSrc = activeElement.attr('src'),
                    newSrc = oldSrc.replace('55x55', '350x350');
                $.when($('#additional-images img').removeClass('active')).then(function () {
                    $('.thumb img').attr('src', newSrc);
                    activeElement.addClass('active');
                });
            });

            $('.date').datetimepicker({
                pickTime: false
            });

            $('.datetime').datetimepicker({
                pickDate: true,
                pickTime: true
            });

            $('.time').datetimepicker({
                pickDate: false
            });

            $('button[id^=\'button-upload\']').on('click', function () {
                var node = this;

                $('#form-upload').remove();

                $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

                $('#form-upload input[name=\'file\']').trigger('click');

                timer = setInterval(function () {
                    if ($('#form-upload input[name=\'file\']').val() != '') {
                        clearInterval(timer);

                        $.ajax({
                            url: 'index.php?route=tool/upload',
                            type: 'post',
                            dataType: 'json',
                            data: new FormData($('#form-upload')[0]),
                            cache: false,
                            contentType: false,
                            processData: false,
                            beforeSend: function () {
                                $(node).button('loading');
                            },
                            complete: function () {
                                $(node).button('reset');
                            },
                            success: function (json) {
                                $('.text-danger').remove();

                                if (json['error']) {
                                    $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                                }

                                if (json['success']) {
                                    alert(json['success']);

                                    $(node).parent().find('input').attr('value', json['code']);
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                            }
                        });
                    }
                }, 500);
            });

            $('#modal-button-cart').on('click', function () {
                $.ajax({
                    url: '/ajax/index.php',
                    type: 'post',
                    data: 'key=<?=$item["ID"]?>&quantity=' + $('[name=quantity]').val() + '&WEB_FORM_ID=2',
                    dataType: 'json',
                    beforeSend: function () {
                        $('#modal-button-cart').button('loading');
                    },
                    complete: function () {
                        $('#modal-button-cart').button('reset');
                    },
                    success: function (json) {
                        $('.text-danger').remove();
                        $('.form-group').removeClass('has-error');




                            location.reload();




                    }, error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                });
            });
            $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {
                $.ajax({
                    url: 'index.php?route=product/product/getRecurringDescription',
                    type: 'post',
                    data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
                    dataType: 'json',
                    beforeSend: function () {
                        $('#recurring-description').html('');
                    },
                    success: function (json) {
                        $('.text-danger').remove();

                        if (json['success']) {
                            $('#recurring-description').html(json['success']);
                        }
                    }
                });
            });


            $('#minus').click(function () {
                var $input = $(this).parent().parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('#plus').click(function () {
                var $input = $(this).parent().parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });


            var qview_wishlist = {
                'add': function (product_id) {
                    $('#modal-qview .alert').remove();
                    $.ajax({
                        url: 'index.php?route=account/wishlist/add',
                        type: 'post',
                        data: 'product_id=' + product_id,
                        dataType: 'json',
                        success: function (json) {

                            if (json['success']) {
                                html = '<div class="alert alert-success"><i class="fa fa-check"></i>&nbsp;&nbsp;' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>';
                            }

                            if (json['redirect']) {
                                html = '<div class="alert alert-info"><i class="fa fa-info-circle"></i> ' + json['info'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>';
                            }


                            $('#modal-qview .modal-body').prepend(html);


                            $('#wishlist-total').html(json['total']);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                },
                'remove': function () {

                }
            }

            var qview_compare = {
                'add': function (product_id) {
                    $('#modal-qview .alert').remove();
                    $.ajax({
                        url: 'index.php?route=product/compare/add',
                        type: 'post',
                        data: 'product_id=' + product_id,
                        dataType: 'json',
                        success: function (json) {

                            html = '<div class="alert alert-success"><i class="fa fa-check"></i>&nbsp;&nbsp;' + json['success'] + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';


                            $('#modal-qview .modal-body').prepend(html);


                            $('#compare-total').html(json['total']);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                },
                'remove': function () {

                }
            }
        </script>
    <?
}

/**
 * Array
 * (
 * [16] => Array
 * (
 * [NAME] => Набор кератинового восстановления волос (Ollin Keratin Royal Treatment)
 * [ID] => 16
 * [PRICE] => 1464
 * [QUAN] => 4
 * )
 *
 * [269] => Array
 * (
 * [NAME] => Шампунь против перхоти (Kapous Profilactic Anti-Dandruff Shampoo) – 250 мл
 * [ID] => 269
 * [PRICE] => 336
 * [QUAN] => 3
 * )
 *
 * [18] => Array
 * (
 * [NAME] => Моделирующий воск с матовым эффектом (Hair Company Inimitable Style Matt Modelling Wax) – 100 мл
 * [ID] => 18
 * [PRICE] => 724
 * [QUAN] => 1
 * )
 *
 * [14] => Array
 * (
 * [NAME] => Маска для блеска волос «Чарующее сияние» (Indola Glamorous Oil Treatment) – 200 мл / 750 мл
 * [ID] => 14
 * [PRICE] => 482
 * [QUAN] => 3
 * )
 *
 * [52] => Array
 * (
 * [NAME] => Маска-уход с кератином (Hair Company Hair Light Keratin Care Mask) – 500 мл
 * [ID] => 52
 * [PRICE] => 642
 * [QUAN] => 1
 * )
 *
 * [566] => Array
 * (
 * [NAME] => Моделирующий эластик-гель (Nexxt Professional Modeling Elastic Gel) – 100 мл
 * [ID] => 566
 * [PRICE] => 299
 * [QUAN] => 1
 * )
 *
 * [374] => Array
 * (
 * [NAME] => Спрей объём и уход  для укладки волос (Schwarzkopf Silhouette Flexible Hold Styling Care Lotion) – 200 мл
 * [ID] => 374
 * [PRICE] => 442
 * [QUAN] => 2
 * )
 *
 * [177] => Array
 * (
 * [NAME] => Фиксирующая маска с кератином (Ollin Keratin System Fixing Mask) – 500 мл
 * [ID] => 177
 * [PRICE] => 794
 * [QUAN] => 1
 * )
 *
 * )
 */


#echo "<pre>";
#echo "arrColumns:";
#print_r($arrColumns);
#echo "arrAnswers:";
#print_r($arrAnswers);
#echo "arrAnswersVarname:";
#print_r($arrAnswersVarname);
#echo "</pre>";

/*Array
(
    [186] => Array
        (
            [140] => Array
                (
                    [586] => Array
                        (
                            [RESULT_ID] => 186
                            [FIELD_ID] => 140
                            [SID] => VS_NAME
                            [TITLE] => Фамилия, имя, отчество
                            [TITLE_TYPE] => html
                            [FILTER_TITLE] =>
                            [RESULTS_TABLE_TITLE] =>
                            [ANSWER_ID] => 586
                            [ANSWER_TEXT] =>
                            [MESSAGE] =>
                            [ANSWER_VALUE] =>
                            [VALUE] =>
                            [USER_TEXT] => Иванов Дмитрий Витальевич
                            [USER_DATE] =>
                            [USER_FILE_ID] =>
                            [USER_FILE_NAME] =>
                            [USER_FILE_IS_IMAGE] =>
                            [USER_FILE_HASH] =>
                            [USER_FILE_SUFFIX] =>
                            [USER_FILE_SIZE] =>
                            [FIELD_TYPE] => text
                            [FIELD_WIDTH] => 50
                            [FIELD_HEIGHT] => 0
                            [FIELD_PARAM] =>
                        )
                )

            [144] => Array
                (
                    [594] => Array
                        (
                            [RESULT_ID] => 186
                            [FIELD_ID] => 144
                            [SID] => VS_INTEREST
                            [TITLE] => Какие области знаний вас интересуют ?
                 */


if (htmlspecialchars($_REQUEST['whish'], 3) == 1) {
    if (htmlspecialchars($_REQUEST['whish_id'], 3) > 1) {
        $wasCook = '';
        $json['totals'] = 0;
        $json['success'] = "";
        $cookAdd = "";
        $id_from_cookie = $COOKIE['BX_USER_ID'];
        $wasCook = htmlspecialchars($_COOKIE['wishPersona'], 3);
        if ($wasCook) {
            $cookArr = explode(',', $wasCook);
            array_push($cookArr, htmlspecialchars($_REQUEST['whish_id'], 3));
            $json['totals'] = count($cookArr);
            $cookAdd = implode(',', $cookArr);
        } else {
            $cookAdd = htmlspecialchars($_REQUEST['whish_id'], 3);
        }
        if (setcookie("wishPersona", $cookAdd, time() + 3600 * 24 * 7, "/", $_SERVER['HTTP_HOST'])) {
            $json['success'] = 'Товар добавлен в список желаний';
            $json['totals'] = count($cookArr);
        } else {
            $json['info'] = 'Ошибка добавления';
        }
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
    }
}

if (htmlspecialchars($_REQUEST['whish_rem'], 3) == 1) {
    if (htmlspecialchars($_REQUEST['whish_id'], 3) > 1) {
        $json['success'] = "";
        $json['totals'] = 0;
        $wasCook = '';
        $wasCook = htmlspecialchars($_COOKIE['wishPersona'], 3);
        if ($wasCook) {
            $cookArr = explode(',', $wasCook);
            //$json['success'] .= $cookArr;
            $arr = array_diff($cookArr, array(htmlspecialchars($_REQUEST['whish_id'], 3)));
            $json['totals'] = count($arr);
            $cookAdd = implode(',', $arr);
        } else {
            $json['info'] .= 'Нет товара в списке<br>';
        }
        if (setcookie("wishPersona", $cookAdd, time() + 3600 * 24 * 7, "/", $_SERVER['HTTP_HOST'])) {
            $json['success'] .= 'Товар удален из списка';
        } else {
            $json['info'] .= 'Ошибка удаления';
        }
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
    }
}

if (htmlspecialchars($_REQUEST['fastorder'], 3) == "Y") {
    if ((int)htmlspecialchars($_REQUEST['product_id'], 3) > 0) {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_PRICE", "DETAIL_PICTURE", "DETAIL_PAGE_URL", "PROPERTY_SALE", "PROPERTY_BRAND");
        $arFilter = Array("IBLOCK_ID" => GOODS, "ID" => (int)htmlspecialchars($_REQUEST['product_id'], 3), "ACTIVE" => "Y");
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $PROD_NAME = $arFields['NAME'];
            $PRICE = $arFields['PROPERTY_PRICE_VALUE'];
            $P_URL = $arFields['DETAIL_PAGE_URL'];
            $rsFile = CFile::GetPath($arFields["DETAIL_PICTURE"]);
        }

        $FORM_ID = 2;


        $arValues = array(
            "form_text_8" => (int)htmlspecialchars($_REQUEST['product_id'], 3),
            "form_text_6" => $BX_USER_ID,
            "form_text_7" => $PROD_NAME,
            "form_text_9" => $product_variant,
            "form_text_10" => $PRICE,
        );


        if (!$RESULT_ID = CFormResult::Add($FORM_ID, $arValues))
        {
            global $strError;
            $json["error"] = $strError;
        }

        ?>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Быстрый заказ: <?=$arFields['NAME']?></h4>
        </div>
        <div class="modal-body">

            <div class="row">
                <div class="col-sm-6 text-center">
                    <div class="image">
                        <?if($rsFile):?>
                        <img src="<?=$rsFile?>" onclick="location.href='<?= $arFields['DETAIL_PAGE_URL']?>'" alt="<?=$arFields['NAME']?>" class="img-responsive center-block">
                        <?else:?>
                        <img src="/bitrix/templates/persona/images/no-photo.png" onclick="location.href='<?= $arFields['DETAIL_PAGE_URL']?>'" alt="No image" class="img-responsive center-block">
                        <?endif?>
                    </div>
                    <div class="price"><?=(!$arFields['PROPERTY_SALE_VALUE'])?$arFields['PROPERTY_PRICE_VALUE'] . " <span class=\"roboto-forced ruble price-real\" aria-hidden=\"true\" style=\"display:none;\"></span>":""?>

                        <?if($arFields['PROPERTY_SALE_VALUE']):?>
                        <span class="price-old">&nbsp;<?=($arFields['PROPERTY_SALE_VALUE'])?$arFields['PROPERTY_PRICE_VALUE']:""?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span>&nbsp;</span>
                        <b><?=$arFields['PROPERTY_SALE_VALUE']?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></b>
                        <?endif?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <form action="/ajax/" method="post" enctype="multipart/form-data" id="fastorderform">
                        <!--input type="hidden" name="WEB_FORM_ID" value="2"/-->
                        <p id="f_err_1" style="display: none; color:red">Заполните поля</p>
                        <div class="form-group">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input type="text" name="form_text_13" value="" id="input-name" class="form-control" placeholder="Ваше имя">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                <input type="text" name="form_text_12" value="" id="input-phone" class="form-control" placeholder="Ваш телефон">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="MESSAGE" rows="5" id="input-enquiry" class="form-control" placeholder="Ваш комментарий, если требуется"></textarea>
                        </div>
                        <?
                        $r = $DB->Query("SELECT ID FROM  b_form_result ORDER BY ID DESC LIMIT 1");
                        $res = $r->Fetch();
                        $last = $res["ID"];
                        ?>
                        <input type="hidden" name="sessid" value="<?=substr(bitrix_sessid_get(),7)?>"/>
                        <input type="hidden" name="RESULT_ID" value="<?=$last?>"/>
                        <input type="hidden" name="product_id" value="<?=$arFields['ID']?>">
                        <button class="btn btn-danger btn-block" name="web_form_submit" type="button" onclick="fastordersend()"><i class="fa fa-bolt fa-fw"></i>&nbsp;Заказать</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function fastordersend(){
                if($("[name=form_text_13]").val().length && $("[name=form_text_12]").val().length) {
                    $('#f_err_1').hide();
                    $.post($('#fastorderform').attr('action'), $('#fastorderform').serialize(), function (html) {
                        $('#modal-fastorder .modal-content').html(html);
                    });
                }
                else{
                    $('#f_err_1').show();
                }
            }
            /*function fastordersend(){
                if($("[name=form_text_13]").val().length > 0){
                    if($("[name=form_text_12]").val().length > 0){
                        $('form').serialize();
                        $('form').submit();
                    }
                    else{
                        alert("Заполните телефон");
                    }
                }
                else{
                    alert("Заполните имя");
                }
            }*/
            jQuery(document).ready(function($) {
                var selector = $('[name=form_text_12]');
                var im = new Inputmask("+7(999)999-99-99");
                im.mask(selector);
            });
        </script>
        <?
    }
}

# если отправлен быстрый заказ
if(strlen(htmlspecialchars($_REQUEST['form_text_12'],3)) > 1 &&
    strlen(htmlspecialchars($_REQUEST['RESULT_ID'],3)) > 1){
    $RESULT_ID = htmlspecialchars($_REQUEST['RESULT_ID'],3);
    if (CFormResult::SetStatus($RESULT_ID, 3, "N"))
    {

        $res_form = CFormResult::GetDataByID($RESULT_ID);

	    $adminEmail = COption::GetOptionString('main', 'email_from', 'default@admin.email');

	    $var = "";
	    if($res_form['product_variant'][0]['USER_TEXT'])
		    $var = ", вариант: " . $res_form['product_variant'][0]['USER_TEXT'] . ",";

        $arEventFields = array(
            "EMAIL_TO"            => $adminEmail . ", maxkuku@gmail.com",
            "ORDER"               => "Название: " . $res_form['name'][0]['USER_TEXT'] . $var .
             ", цена: " . $res_form['price'][0]['USER_TEXT'] . ", ID: " . $res_form['product_id'][0]['USER_TEXT'] . "\r\n" . htmlspecialchars($_REQUEST['MESSAGE'], 3),
            "RS_USER_PHONE"       => htmlspecialchars($_REQUEST["form_text_12"],3),
            "RS_USER_NAME"        => htmlspecialchars($_REQUEST["form_text_13"],3),
            "RS_DATE_CREATE"        => date('d-m-Y H:i'),
            "MESSAGE"             => "Сообщение: " . htmlspecialchars($_REQUEST["MESSAGE"],3),
        );

        if($arEventFields['RS_USER_PHONE']):
            if(CEvent::Send("FORM_FILLING_SIMPLE_FORM_1", "s1", $arEventFields)){?>
                <script>console.log("sent");</script>
            <?
                CFormResult::Delete($RESULT_ID);
        }
        endif;

        echo "<div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h4 class=\"modal-title\">Быстрый заказ</h4>
    </div><div class=\"modal-body\"><div class=\"text-center white\">Заказ отправлен, спасибо. № заказа ".$RESULT_ID.".</div></div>";
    }
    else // ошибка
    {
        global $strError;
        echo $strError;
    }
}

if(htmlspecialchars($_REQUEST['com_write'],3) === "Y") {
    $el = new CIBlockElement;

    $PROP = array();


    $PROP['features'] = htmlspecialchars($_REQUEST['af']['plus'],3); #features
    $PROP['no_features'] = htmlspecialchars($_REQUEST['af']['minus'],3); #no_features
    $PROP[7] = htmlspecialchars($_REQUEST['af']['price_rating'],3); # how_is_price when 7 it works



    $PROP['for_what'] = htmlspecialchars($_REQUEST['for_what'],3);

    $PROP['your_rating'] = htmlspecialchars($_REQUEST['rating'],3); #your_rating
    $PROP[8] = htmlspecialchars($_REQUEST['rating'],3); #your_rating experiment number 8

    $PREVIEW_TEXT = htmlspecialchars($_REQUEST['product_name'],3); #PREVIEW_TEXT

    $arLoadProductArray = Array(
        "MODIFIED_BY"    => $USER->GetID(),
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID"      => 5,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => htmlspecialchars($_REQUEST['name'],3),
        "ACTIVE"         => "N",
        "PREVIEW_TEXT"   => htmlspecialchars($_REQUEST['text'],3),
        "DETAIL_TEXT"    => $PREVIEW_TEXT,
        #"DETAIL_PICTURE" => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/image.gif")
    );

    #print_r($PROP);

    if($PRODUCT_ID = $el->Add($arLoadProductArray))
        echo "<div class='modal-dialog'><div class='modal-content'><div class=\"modal-header\">
				<button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
				<div class=\"modal-title\">
					<span class=\"fa fa-shopping-basket fa-fw\"></span>&nbsp;&nbsp;Отзыв добавлен</div>
			</div>
			<div class=\"modal-body\">
			    <div>
			        Спасибо, ваш отзыв добавлен. Он будет опубликован после проверки модератором.
                </div>
                <script>
                    $('#ascpw3_comment_work_0').hide();
                </script>
            </div>
            <div class=\"modal-footer\"></div></div></div>
            <script>
                $('.close').click(function(){
                    $('#cmngr_message_modal').removeClass('in');
                    $('#cmngr_message_modal').hide();
                    $('#ascpw3_comment_work_0').hide();
                    })
            </script>";
    else
        echo "<div class=\"modal-body\">
        Ошибка: ".$el->LAST_ERROR."</div>";
}

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_after.php");