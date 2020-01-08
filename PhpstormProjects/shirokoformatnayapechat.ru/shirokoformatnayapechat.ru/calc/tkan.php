<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if($_REQUEST['ajax']=='Y')
    $APPLICATION->RestartBuffer();?>
    <style type="text/css">
        .form .top-form {padding-top:0px !important;}
        input[type="number"] {max-width:100px; text-align: center;}
        input[type=number]::-webkit-inner-spin-button {opacity: 1;}
        input{text-align: center;}
    </style>
    <h2>Расчет стоимости печати на ткани</h2>
    <br>
<?php ######## CALCULATOR  index v 1.02 tkan !!!  ######### ?>
    <div class="row">
        <p style="color:#de002b;"><strong>Сначала нужно выбрать качество печати</strong></p>
        <div class="col-md-3">
            1. Качество печати:<br>
            <select size="1" name="dpi" class="btn btn-warning form-control">
                <option value="0" selected="selected">Выбрать качество</option>
                <option value="185">360 dpi (Обычное)</option>
                <option value="187">720 dpi (Хорошее)</option>
                <option value="188">1440 dpi (Высокое)</option>
            </select>
        </div>
        <div class="col-md-9">
            2. Выберите вариант ткани:<br>
            <select size="1" name="mat" class="btn btn-info form-control">
                <option selected="selected" value="0">Выберите вариант ткани</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-sm-6 control-label">Высота, мм.:</label><input name="hei" placeholder="0" value="10000" type="number">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-sm-6 control-label">Ширина, мм.:</label><input name="wid" placeholder="0" value="10000" type="number">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-sm-6 control-label">3. Кол-во копий:</label> <b class="minus"></b> <input name="num" value="1" maxlength="3" size="8" type="number"> <b class="plus"></b>
            </div>
        </div>
    </div>
    <p class="text_step">
        Постпечатная обработка:
    </p>
    <div class="col-sm-12 step settings_block">
        <div class="row options printing_options">
            <div class="col-sm-7 five-three">
                <div class="row">
                    <!--div class="col-sm-4">
                        <div class="option setting_row">
                            <p class="title_option">
                                <img src="icon_option1.png" alt=""><span class="setting_title">Люверсы</span>
                            </p>
                            <div class="to_check_block selection_hand eyelets">
                                <label for="eyelets_left" class="left"><input id="eyelets_left" class="eyelets_price setting_price_input" type="checkbox"></label> <label for="eyelets_top" class="top"><input id="eyelets_top" class="eyelets_price setting_price_input" type="checkbox"></label> <label for="eyelets_right" class="right"><input id="eyelets_right" class="eyelets_price setting_price_input" type="checkbox"></label> <label for="eyelets_bottom" class="bottom"><input id="eyelets_bottom" class="eyelets_price setting_price_input" type="checkbox"></label>
                                <div class="option3 border1 eyelets_price change_look" id="option3_eyelets_price_1" name="option3_eyelets_price_1">
                                    <p class="border_top">
                                    </p>
                                    <p class="border_bottom">
                                    </p>
                                    <p class="border_left">
                                    </p>
                                    <p class="border_right">
                                    </p>
                                </div>
                            </div>
                            <div style="clear:both">
                            </div>
                            <select size="1" name="luv_step">
                                <option value="229">Шаг 10 см</option>
                                <option value="230">Шаг 20 см</option>
                                <option value="237" selected="selected">Шаг 30 см</option>
                                <option value="231">Шаг 40 см</option>
                                <option value="232">Шаг 50 см</option>
                                <option value="233">Шаг 100 см</option>
                            </select>
                        </div>
                    </div-->
                    <div class="col-sm-4">
                        <!--div class="option setting_row">
                            <p class="title_option">
                                <img src="icon_option3.png" alt=""><span class="setting_title">Проварка краев</span>
                            </p>
                            <div class="selection_hand to_check_block prov">
                                <label for="prov_left" class="left"><input id="prov_left" class="strengs_price setting_price_input" type="checkbox"></label> <label for="prov_top" class="top"><input id="prov_top" class="strengs_price setting_price_input" type="checkbox"></label> <label for="prov_right" class="right"><input id="prov_right" class="strengs_price setting_price_input" type="checkbox"></label> <label for="prov_bottom" class="bottom"><input id="prov_bottom" class="strengs_price setting_price_input" type="checkbox"></label>
                                <div class="option3 border3 strengs_price change_look" id="prov_price_1" name="prov_price_1">
                                    <p class="border_top">
                                    </p>
                                    <p class="border_bottom">
                                    </p>
                                    <p class="border_left">
                                    </p>
                                    <p class="border_right">
                                    </p>
                                </div>
                            </div>
                        </div-->
                    </div>
                    <div class="col-sm-4">
                        <div class="option setting_row">
                            <p class="title_option">
                                <img src="icon_option4.png" alt=""><span class="setting_title">Резка в размер</span>
                            </p>
                            <div class="selection_hand to_check_block obrezka">
                                <label for="rez_left" class="left"><input id="rez_left" class="pruning_price setting_price_input" type="checkbox"></label> <label for="rez_top" class="top"><input id="rez_top" class="pruning_price setting_price_input" type="checkbox"></label> <label for="rez_right" class="right"><input id="rez_right" class="pruning_price setting_price_input" type="checkbox"></label> <label for="rez_bottom" class="bottom"><input id="rez_bottom" class="pruning_price setting_price_input" type="checkbox"></label>
                                <div class="option3 border4 pruning_price change_look" id="obrezka_price_1" name="obrezka_price_1">
                                    <p class="border_top">
                                    </p>
                                    <p class="border_bottom">
                                    </p>
                                    <p class="border_left">
                                    </p>
                                    <p class="border_right">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 five-two">
                <div class="row">
                    <!--div class="col-sm-6">
                        <div class="option setting_row">
                            <p class="title_option">
                                <img src="icon_option5.png" alt=""><span class="setting_title">Усиление шнуром</span>
                            </p>
                            <div class="selection_hand to_check_block shnur">
                                <label for="shnur_left" class="left"><input id="shnur_left" class="shnur_price setting_price_input" type="checkbox"></label> <label for="shnur_top" class="top"><input id="shnur_top" class="shnur_price setting_price_input" type="checkbox"></label> <label for="shnur_right" class="right"><input id="shnur_right" class="shnur_price setting_price_input" type="checkbox"></label> <label for="shnur_bottom" class="bottom"><input id="shnur_bottom" class="shnur_price setting_price_input" type="checkbox"></label>
                                <div class="option3 border5 shnur_price change_look" id="shnur_price_1" name="shnur_price_1">
                                    <p class="border_top">
                                    </p>
                                    <p class="border_bottom">
                                    </p>
                                    <p class="border_left">
                                    </p>
                                    <p class="border_right">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div-->
                    <!--div class="col-sm-6">
                        <div class="option setting_row">
                            <p class="title_option">
                                <img src="icon_option2.png" alt=""><span class="setting_title">Проклейка кармана </span>
                            </p>
                            <div class="selection_hand to_check_block karman">
                                <label for="karm_left" class="left"><input id="karm_left" class="pockets_price setting_price_input" type="checkbox"></label> <label for="karm_top" class="top"><input id="karm_top" class="pockets_price setting_price_input" type="checkbox"></label> <label for="karm_right" class="right"><input id="karm_right" class="pockets_price setting_price_input" type="checkbox"></label> <label for="karm_bottom" class="bottom"><input id="karm_bottom" class="pockets_price setting_price_input" type="checkbox"></label>
                                <div class="option3 border2 pockets_price change_look" id="karm_price_1" name="karm_price_1">
                                    <p class="border_top">
                                    </p>
                                    <p class="border_bottom">
                                    </p>
                                    <p class="border_left">
                                    </p>
                                    <p class="border_right">
                                    </p>
                                </div>
                            </div>
                            <div style="clear:both;">
                            </div>
                            <select size="1" name="karm">
                                <option value="235">Шаг 10 см</option>
                            </select>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
    <div style="clear:both;">
    </div>
    <br>
    <strong>Итоговые подсчеты:</strong><br>
    <br>
    <div id="calc_all_prices">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Цена печати:</label><input name="price_item" placeholder="0" disabled="disabled" size="8" type="text"> руб.
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Цена печати 1 м<sup>2</sup>:</label><input name="price_m" placeholder="0" disabled="disabled" size="4" type="text"> руб.
                </div>
            </div>
        </div>
        <!--div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Цена люверсов:</label><input name="luv_all" placeholder="0" disabled="disabled" size="8" type="text"> руб.
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Кол-во люверсов, шт.:</label><input name="luver_count" placeholder="0" disabled="disabled" size="19" type="text">
                </div>
            </div>
        </div-->
        <!--div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Цена проварки:</label><input name="provar_all" placeholder="0" disabled="disabled" size="8" type="text"> руб.
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Пог. м. проварки:</label><input name="provar_count" placeholder="0" disabled="disabled" size="19" type="text">
                </div>
            </div>
        </div-->
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Цена резки:</label><input name="rez_all" placeholder="0" disabled="disabled" size="8" type="text"> руб.
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Пог. м. резки:</label><input name="rez_count" placeholder="0" disabled="disabled" size="19" type="text">
                </div>
            </div>
        </div>
        <!--div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Цена шнура:</label><input name="shnur_all" placeholder="0" disabled="disabled" size="8" type="text"> руб.
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Пог.м. шнура:</label><input name="shnur_count" placeholder="0" disabled="disabled" size="19" type="text">
                </div>
            </div>
        </div-->
        <!--div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Цена карманов:</label><input name="karman_all" placeholder="0" disabled="disabled" size="8" type="text"> руб.
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Пог. м. карманов:</label><input name="karmans_count" placeholder="0" disabled="disabled" size="19" type="text">
                </div>
            </div>
        </div-->
        <div class="row btn btn-success" style="width:100%;padding-bottom:0;margin:0;">
            <div class="col-md-3" style="text-align:left;">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Итого:</label><input name="itogo" placeholder="0" disabled="disabled" size="8" type="text"> руб.
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Площадь:</label><input name="square" placeholder="0" disabled="disabled" size="6" type="text"> м<sup>2</sup>,
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Периметр:</label><input name="aper" placeholder="0" disabled="disabled" size="3" type="text"> м.
                </div>
            </div>
        </div>
        <div class="row" style="display:none !important;margin-top:30px;">
            <div class="col-sm-7 five-three">
                <div class="row">
                    <!--div class="col-sm-4">
                        <div style="display:none !important;">
                            Позиции люверсов: <input value="" disabled="disabled" name="luversy_position" size="24" type="text">
                        </div>
                    </div-->
                    <!--div class="col-sm-4">
                        <div style="display:none !important;">
                            Позиции карманов: <input value="" disabled="disabled" name="karman_position" size="24" type="text">
                        </div>
                    </div-->
                    <!--div class="col-sm-4">
                        <div style="display:none !important;">
                            Позиции проклейки: <input value="" disabled="disabled" name="provar_position" size="24" type="text">
                        </div>
                    </div-->
                </div>
            </div>
            <div class="col-sm-5 five-two">
                <div class="row">
                    <div class="col-sm-6">
                        <div style="display:none !important;">
                            Позиции обрезки: <input value="" disabled="disabled" name="rez_position" size="24" type="text">
                        </div>
                    </div>
                    <!--div class="col-sm-6">
                        <div style="display:none !important;">
                            Позиции шнуров: <input value="" disabled="disabled" name="shnur_position" size="24" type="text">
                        </div>
                    </div-->
                </div>
            </div>
            <!--div class="col-md-3" style="display:none !important;">
                шаг люверсов: <input name="luv_step" placeholder="0" disabled="disabled" size="4" type="text"> мм.
            </div>
            <div class="col-md-3" style="display:none !important;">
                шаг карманов: <input name="karman_step" placeholder="0" disabled="disabled" size="4" type="text"> мм.
            </div-->
        </div>
    </div>
    <script>
        $(document).ready(function(){
            // luversy
            /*$('#eyelets_left').change(function() {$("#option3_eyelets_price_1 .border_left").toggleClass("active");recalc();});
             $('#eyelets_top').change(function() {$("#option3_eyelets_price_1 .border_top").toggleClass("active");recalc();});
             $('#eyelets_right').change(function() {$("#option3_eyelets_price_1 .border_right").toggleClass("active");recalc();});
             $('#eyelets_bottom').change(function() {$("#option3_eyelets_price_1 .border_bottom").toggleClass("active");recalc();});*/

            // karmany
            /*$('#karm_left').change(function() {$("#karm_price_1 .border_left").toggleClass("active");recalc();});
             $('#karm_top').change(function() {$("#karm_price_1 .border_top").toggleClass("active");recalc();});
             $('#karm_right').change(function() {$("#karm_price_1 .border_right").toggleClass("active");recalc();});
             $('#karm_bottom').change(function() {$("#karm_price_1 .border_bottom").toggleClass("active");recalc();});*/

            // Проклейка
            /*$('#prov_left').change(function() {$("#prov_price_1 .border_left").toggleClass("active");recalc();});
             $('#prov_top').change(function() {$("#prov_price_1 .border_top").toggleClass("active");recalc();});
             $('#prov_right').change(function() {$("#prov_price_1 .border_right").toggleClass("active");recalc();});
             $('#prov_bottom').change(function() {$("#prov_price_1 .border_bottom").toggleClass("active");recalc();});*/

            // Обрезка
            $('#rez_left').change(function() {$("#obrezka_price_1 .border_left").toggleClass("active");recalc();});
            $('#rez_top').change(function() {$("#obrezka_price_1 .border_top").toggleClass("active");recalc();});
            $('#rez_right').change(function() {$("#obrezka_price_1 .border_right").toggleClass("active");recalc();});
            $('#rez_bottom').change(function() {$("#obrezka_price_1 .border_bottom").toggleClass("active");recalc();});

            // Усиление шнуром
            /*$('#shnur_left').change(function() {$("#shnur_price_1 .border_left").toggleClass("active");recalc();});
             $('#shnur_top').change(function() {$("#shnur_price_1 .border_top").toggleClass("active");recalc();});
             $('#shnur_right').change(function() {$("#shnur_price_1 .border_right").toggleClass("active");recalc();});
             $('#shnur_bottom').change(function() {$("#shnur_price_1 .border_bottom").toggleClass("active");recalc();});*/

            var param = {
                225:{price:30, edz:10},				//<!-- Резка по периметру -->
                //226:{price:30, edz:10},				//<!-- Усиление шнуром -->
                //227:{price:20, edz:10},				//<!-- Сварка и проварка -->

                //229:{price:20, edz:10, step: 100},	//<!-- Шаг между люверсами: 10 см (100 мм) -->
                //230:{price:20, edz:10, step: 200},	//<!-- Шаг между люверсами: 20 см (200 мм) -->
                //237:{price:20, edz:10, step: 300},	//<!-- Шаг между люверсами: 30 см (300 мм) -->
                //231:{price:20, edz:10, step: 400},	//<!-- Шаг между люверсами: 40 см (400 мм) -->
                //232:{price:20, edz:10, step: 500},	//<!-- Шаг между люверсами: 50 см (500 мм) -->
                //233:{price:20, edz:10, step: 1000},	//<!-- Шаг между люверсами: 100 см (1000 мм) -->

                //235:{price:30, edz:10, step: 100}	//<!-- Карман 10 см (100 мм)	-->

            };

            var mat = {
                185:{
                    901:{name:'Флаговая ткань на подложке 230 гр.',price_1_100:600,price_101_300:570,price_301_1000:480,price_1001:480},
                    902:{name:'Текстиль ТРМ 150 гр. (Корея)',price_1_100:550,price_101_300:500,price_301_1000:485,price_1001:485},
                    903:{name:'Холст натуральный 350 г.',price_1_100:700,price_101_300:640,price_301_1000:580,price_1001:580},
                },
                187:{
                    901:{name:'Флаговая ткань на подложке 230 гр.',price_1_100:625,price_101_300:580,price_301_1000:495,price_1001:495},
                    902:{name:'Текстиль ТРМ 150 гр. (Корея)',price_1_100:565,price_101_300:530,price_301_1000:490,price_1001:490},
                    903:{name:'Холст натуральный 350 г.',price_1_100:800,price_101_300:780,price_301_1000:700,price_1001:700},
                },
                188:{
                    901:{name:'Флаговая ткань на подложке 230 гр.',price_1_100:725,price_101_300:680,price_301_1000:595,price_1001:595},
                    902:{name:'Текстиль ТРМ 150 гр. (Корея)',price_1_100:665,price_101_300:630,price_301_1000:590,price_1001:590},
                    903:{name:'Холст натуральный 350 г.',price_1_100:900,price_101_300:880,price_301_1000:800,price_1001:800},
                }
            };

            $('input[name="num"]').bind("change keyup input click", function() {if (this.value.match(/[^0-9]/g)) {this.value = this.value.replace(/[^0-9]/g, '');} recalc();});
            $('input[name="wid"]').bind("change keyup input click", function() {if (this.value.match(/[^0-9]/g)) {this.value = this.value.replace(/[^0-9]/g, '');} recalc();});
            $('input[name="hei"]').bind("change keyup input click", function() {if (this.value.match(/[^0-9]/g)) {this.value = this.value.replace(/[^0-9]/g, '');} recalc();});

            $('input[name="wid"]').change(function(){recalc();});
            $('input[name="hei"]').change(function(){recalc();});
            $('select[name="mat"]').change(function(){recalc();});
            //$('select[name="luv_step"]').on('click', function(){recalc();});
            //$('select[name="karm"]').on('click', function(){recalc();});


            $('select[name="dpi"]').change(function() {
                if($(this).val() && $(this).val()!=0) {
                    $('select[name="mat"]').empty();
                    $('select[name="mat"]').append( $('<option selected="selected" value="0" >Выбрать...</option>'));
                    $.each( mat[$(this).val()], function( key, value ) {
                        $('select[name="mat"]').append( $('<option value="'+key+'" >'+value.name+'</option>'));
                    });
                }
                else {
                    $('select[name="mat"]').empty();
                    $('select[name="mat"]').append( $('<option selected="selected" value="0" >Выбрать...</option>')); }
                recalc();
            });

            /*var EYELET_PRICE = 20;*/
            /*var PROV_PRICE = 20;*/
            var OBREZKA_PRICE = 30;
            /*var SHNUR_PRICE = 30;
             var KARMAN_PRICE = 30;*/

            // Люверсы
            /*var eyelet_left_checkbox = document.getElementById("eyelets_left"); var eyelet_right_checkbox = document.getElementById("eyelets_right");
             var eyelet_top_checkbox = document.getElementById("eyelets_top"); var eyelet_bottom_checkbox = document.getElementById("eyelets_bottom");
             luv_pos = [];
             $('.eyelets input').click(function(){if($(this).is('.checked')){ $(this).removeClass('checked'); luv_pos.splice(luv_pos.indexOf($(this).parent().attr('class')),1);} else { $(this).addClass('checked');
             luv_pos.push($(this).parent().attr('class'));} $('input[name="luversy_position"]').val(luv_pos);
             });*/

            // Проклейка Карманы
            /*var karm_left_checkbox = document.getElementById("karm_left"); var karm_right_checkbox = document.getElementById("karm_right");
             var karm_top_checkbox = document.getElementById("karm_top"); var karm_bottom_checkbox = document.getElementById("karm_bottom");
             karm_pos = [];
             $('.karman input').click(function(){if($(this).is('.checked')){$(this).removeClass('checked');karm_pos.splice(karm_pos.indexOf($(this).parent().attr('class')),1);}else{$(this).addClass('checked');
             karm_pos.push($(this).parent().attr('class'));} $('input[name="karman_position"]').val(karm_pos);
             });*/

            // Проварка
            /*var prov_left_checkbox = document.getElementById("prov_left"); var prov_right_checkbox = document.getElementById("prov_right");
             var prov_top_checkbox = document.getElementById("prov_top"); var prov_bottom_checkbox = document.getElementById("prov_bottom");
             prov_pos = [];
             $('.prov input').click(function(){if($(this).is('.checked')){$(this).removeClass('checked');prov_pos.splice(prov_pos.indexOf($(this).parent().attr('class')),1);}else{$(this).addClass('checked');
             prov_pos.push($(this).parent().attr('class'));} $('input[name="provar_position"]').val(prov_pos);
             });*/

            // Резка в размер
            var rez_left_checkbox = document.getElementById("rez_left"); var rez_right_checkbox = document.getElementById("rez_right");
            var rez_top_checkbox = document.getElementById("rez_top"); var rez_bottom_checkbox = document.getElementById("rez_bottom");
            obrez_pos = [];
            $('.obrezka input').click(function(){if($(this).is('.checked')){$(this).removeClass('checked');obrez_pos.splice(obrez_pos.indexOf($(this).parent().attr('class')),1);}else{$(this).addClass('checked');
                obrez_pos.push($(this).parent().attr('class'));} $('input[name="rez_position"]').val(obrez_pos);
            });

            // Усиление шнуром
            /*var shnur_left_checkbox = document.getElementById("shnur_left"); var shnur_right_checkbox = document.getElementById("shnur_right");
             var shnur_top_checkbox = document.getElementById("shnur_top"); var shnur_bottom_checkbox = document.getElementById("shnur_bottom");
             shnur_pos = [];
             $('.shnur input').click(function(){if($(this).is('.checked')){$(this).removeClass('checked'); shnur_pos.splice(shnur_pos.indexOf($(this).parent().attr('class')),1);}else{$(this).addClass('checked');
             shnur_pos.push($(this).parent().attr('class'));}$('input[name="shnur_position"]').val(shnur_pos);
             });*/


            function recalc()
            {
                var w = $('input[name="wid"]').val(); 		// Ширина
                var h = $('input[name="hei"]').val();		// Высота
                var num = $('input[name="num"]').val(); 	// Копий
                var idpi = $('select[name="dpi"]').val();	// dpi
                var imat = $('select[name="mat"]').val();	// Материал
                /*var obr_provarka = $('input[name="obr_provarka"]').val();*/	// Проварка и проклейка
                //var obr_rezka = $('input[name="obr_rezka"]').val();	// резка
                //var obr_shnur = $('input[name="obr_shnur"]').val();	// Обработка шнур

                //var luv = $('select[name="luv_step"] option:selected').val(); 	// Шаг между люверсами
                //var luv_step = param[luv].step;

                //var karm = $('select[name="karm"] option:selected').val();	// Карман
                //var karm_step = param[karm].step;

                var per = 0; // Периметр = ширина + ширина + длина + длина
                var per_all = 0;
                var square = 0;  // Площадь = ширина * высота
                var square_all = 0; // Площадь всех изделий = ширина * высота * количество изделий
                var square_m = 0; // Площадь, m²
                var price_mat = 0; // Цена 1 м² материала
                var price_rezka = 0; // Цена резки
                var price_provarka = 0;
                var price_shnur = 0;
                var price_o = 0;	// Цена * периметр в метрах
                var price_all = 0;
                var itogo = 0;		// Итого

                if(w && h){
                    per = 2*w + 2*h;
                    per_all = per*num;
                    square = roundPlus(h*w, 2);
                    square_all = roundPlus(h*w*num, 2);
                    square_m = roundPlus(square/1000000, 4);
                    //$('input[name="square"]').val(square_m);
                    $('input[name="square"]').val(square_all/1000000, 4);	// Площадь
                    //$('input[name="square_send"]').val(square_m);
                    $('input[name="aper"]').val(roundPlus(per_all/1000, 4));	// Периметр
                }

                if(square_m && imat!=0 && idpi!=0)
                {
                    if(square_m*num < 101){price_mat = mat[idpi][imat].price_1_100;}
                    else if(square_m*num < 301){price_mat = mat[idpi][imat].price_101_300;}
                    else if(square_m*num < 1001){price_mat = mat[idpi][imat].price_301_1000;}
                    else {price_mat = mat[idpi][imat].price_1001;}

                    price_mat = roundPlus(price_mat, 2);

                    // Люверсы
                    /*var luv_left = (eyelet_left_checkbox.checked == true && !eyelet_left_checkbox.disabled) ? Math.round(h / luv_step) : 0;
                     var luv_right = (eyelet_right_checkbox.checked == true && !eyelet_right_checkbox.disabled) ? Math.round((h / luv_step)) : 0;
                     var luv_top = (eyelet_top_checkbox.checked == true && !eyelet_top_checkbox.disabled) ? Math.round(w / luv_step) : 0;
                     var luv_bottom = (eyelet_bottom_checkbox.checked == true && !eyelet_bottom_checkbox.disabled) ? Math.round(w / luv_step) : 0;

                     var luv_qty = luv_left+ luv_right + luv_top + luv_bottom;
                     var luv_price = luv_qty * EYELET_PRICE *num;*/

                    /*function count_luvers() {
                     var luvers = "";
                     luvers += luv_left*num  == 0 ? "" : luv_left*num ;
                     luvers += luv_right*num  == 0 ? "" : ((luvers == "" ? "" : "+") + luv_right*num );
                     luvers += luv_top*num  == 0 ? "" : ((luvers == "" ? "" : "+") + luv_top*num );
                     luvers += luv_bottom*num  == 0 ? "" : ((luvers == "" ? "" : "+") + luv_bottom*num );
                     if (luvers.indexOf('+') != -1) {luvers += "=" + luv_qty*num; }
                     if (luvers != "") { luvers += "" } else { return "Без люверсов"; }
                     return luvers;
                     }
                     var luvers = count_luvers();
                     $('input[name="luver_count"]').val(luvers);    // Количество люверсов
                     $('input[name="luv_step"]').val(luv_step); 	   // Шаг люверсов
                     $('input[name="luv_all"]').val(luv_price); // Цена люверсов
                     */

                    // Проклейка карманов
                    /*var karms_left = (karm_left_checkbox.checked == true && !karm_left_checkbox.disabled) ? Math.round(h / karm_step /10) : 0;
                     var karms_right = (karm_right_checkbox.checked == true && !karm_right_checkbox.disabled) ? Math.round((h / karm_step/10)) : 0;
                     var karms_top = (karm_top_checkbox.checked == true && !karm_top_checkbox.disabled) ? Math.round(w / karm_step/10) : 0;
                     var karms_bottom = (karm_bottom_checkbox.checked == true && !karm_bottom_checkbox.disabled) ? Math.round(w / karm_step/10) : 0;

                     var karms_qty = karms_left + karms_right + karms_top + karms_bottom;
                     var karms_price = karms_qty * KARMAN_PRICE *num;

                     function count_karmans() {
                     var karms = "";
                     karms += karms_left*num == 0 ? "" : karms_left*num;
                     karms += karms_right*num == 0 ? "" : ((karms == "" ? "" : "+") + karms_right*num);
                     karms += karms_top*num == 0 ? "" : ((karms == "" ? "" : "+") + karms_top*num);
                     karms += karms_bottom*num == 0 ? "" : ((karms == "" ? "" : "+") + karms_bottom*num);
                     if (karms.indexOf('+') != -1) {karms += "=" + karms_qty*num; }
                     if (karms != "") { karms += "" } else { return "Без карманов"; }
                     return karms;
                     }
                     var karms = count_karmans();
                     $('input[name="karmans_count"]').val(karms); 	 // Количество карманов
                     $('input[name="karman_step"]').val(karm_step);	 // Шаг карманов
                     $('input[name="karman_all"]').val(karms_price);	 // Цена карманов
                     */

                    // Проварка
                    /*var prov_left = (prov_left_checkbox.checked == true && !prov_left_checkbox.disabled) ? Math.round(h /1000) : 0;
                     var prov_right = (prov_right_checkbox.checked == true && !prov_right_checkbox.disabled) ? Math.round((h /1000)) : 0;
                     var prov_top = (prov_top_checkbox.checked == true && !prov_top_checkbox.disabled) ? Math.round(w /1000) : 0;
                     var prov_bottom = (prov_bottom_checkbox.checked == true && !prov_bottom_checkbox.disabled) ? Math.round(w /1000) : 0;

                     var prov_qty = prov_left + prov_right + prov_top + prov_bottom;
                     var prov_all = prov_qty * PROV_PRICE *num;

                     function count_prov() {
                     var prov = "";
                     prov += prov_left*num == 0 ? "" : prov_left*num;
                     prov += prov_right*num == 0 ? "" : ((prov == "" ? "" : "+") + prov_right*num);
                     prov += prov_top*num == 0 ? "" : ((prov == "" ? "" : "+") + prov_top*num);
                     prov += prov_bottom*num == 0 ? "" : ((prov == "" ? "" : "+") + prov_bottom*num);
                     if (prov.indexOf('+') != -1) {prov += "=" + prov_qty*num; }
                     if (prov != "") { prov += "" } else { return "Без Проварки"; }
                     return prov;
                     }
                     var prov = count_prov();
                     $('input[name="provar_count"]').val(prov); 	 		// Количество Проварка
                     $('input[name="provar_all"]').val(prov_all);	 // Цена Проварка
                     */


                    // Резка
                    var rez_left = (rez_left_checkbox.checked == true && !rez_left_checkbox.disabled) ? Math.round(h /1000) : 0;
                    var rez_right = (rez_right_checkbox.checked == true && !rez_right_checkbox.disabled) ? Math.round((h /1000)) : 0;
                    var rez_top = (rez_top_checkbox.checked == true && !rez_top_checkbox.disabled) ? Math.round(w /1000) : 0;
                    var rez_bottom = (rez_bottom_checkbox.checked == true && !rez_bottom_checkbox.disabled) ? Math.round(w /1000) : 0;

                    var obrezka_qty = rez_left + rez_right + rez_top + rez_bottom;
                    var rezka_price = obrezka_qty * OBREZKA_PRICE *num;

                    function count_obrezka() {
                        var obrezka = "";
                        obrezka += rez_left*num == 0 ? "" : rez_left*num;
                        obrezka += rez_right*num == 0 ? "" : ((obrezka == "" ? "" : "+") + rez_right*num);
                        obrezka += rez_top*num == 0 ? "" : ((obrezka == "" ? "" : "+") + rez_top*num);
                        obrezka += rez_bottom*num == 0 ? "" : ((obrezka == "" ? "" : "+") + rez_bottom*num);
                        if (obrezka.indexOf('+') != -1) {obrezka += "=" + obrezka_qty*num; }
                        if (obrezka != "") { obrezka += "" } else { return "Без резки"; }
                        return obrezka;
                    }
                    var obrezka = count_obrezka();
                    $('input[name="rez_count"]').val(obrezka); 	 	 // Количество obrezka
                    $('input[name="rez_all"]').val(rezka_price);	 // Цена obrezka


                    // Шнуры
                    /*var shnur_left = (shnur_left_checkbox.checked == true && !shnur_left_checkbox.disabled) ? Math.round(h /1000) : 0;
                     var shnur_right = (shnur_right_checkbox.checked == true && !shnur_right_checkbox.disabled) ? Math.round((h /1000)) : 0;
                     var shnur_top = (shnur_top_checkbox.checked == true && !shnur_top_checkbox.disabled) ? Math.round(w /1000) : 0;
                     var shnur_bottom = (shnur_bottom_checkbox.checked == true && !shnur_bottom_checkbox.disabled) ? Math.round(w /1000) : 0;

                     var shnur_qty = shnur_left + shnur_right + shnur_top + shnur_bottom;
                     var shnur_price = shnur_qty * SHNUR_PRICE *num;

                     function count_shnur() {
                     var shnur = "";
                     shnur += shnur_left*num == 0 ? "" : shnur_left*num;
                     shnur += shnur_right*num == 0 ? "" : ((shnur == "" ? "" : "+") + shnur_right*num);
                     shnur += shnur_top*num == 0 ? "" : ((shnur == "" ? "" : "+") + shnur_top*num);
                     shnur += shnur_bottom*num == 0 ? "" : ((shnur == "" ? "" : "+") + shnur_bottom*num);
                     if (shnur.indexOf('+') != -1) {shnur += "=" + shnur_qty*num; }
                     if (shnur != "") { shnur += "" } else { return "Без шнуров"; }
                     return shnur;
                     }
                     var shnur = count_shnur();
                     $('input[name="shnur_count"]').val(shnur); 	 	 // Количество shnur
                     $('input[name="shnur_all"]').val(shnur_price);	 // Цена shnur
                     */
                    price_item = roundPlus(square_m * price_mat*num, 2);	// Цена изделия = площадь * цена 1 м2 материала

                    price_items = roundPlus(price_item*num,2);	// Цена за все изделия

                    price_all = roundPlus(price_item*num + rezka_price*num /*+ prov_all*num + shnur_price*num + luv_price*num + karms_price*num*/, 2);	// Цена итого * количество копий

                    $('input[name="price_m"]').val(price_mat); // Цена за 1м² = цена / площадь изделия
                    $('input[name="price_item"]').val(roundPlus(price_item,2));
                    $('input[name="itogo"]').val(roundPlus(price_all/num,2));

                    //	build send form
                    $('#calc_data_banner').text('');

                    $('#calc_data_banner').append($('input[name="num"]').val()+' копий;- ');
                    $('#calc_data_banner').append($('input[name="itogo"]').val()+' руб. Итого (СУММА); \r\n\r');

                    $('#calc_data_banner').append($('select[name="dpi"] option:selected').text()+' / ');
                    $('#calc_data_banner').append($('select[name="mat"] option:selected').text()+'; ');
                    $('#calc_data_banner').append($('input[name="price_m"]').val()+' руб. (по цене за 1 м²); \r\n\r');

                    $('#calc_data_banner').append($('input[name="hei"]').val()+' мм. - Высота; ');
                    $('#calc_data_banner').append($('input[name="wid"]').val()+' мм. - Ширина; ');
                    $('#calc_data_banner').append($('input[name="square"]').val()+' м² - Площадь; ');
                    $('#calc_data_banner').append($('input[name="aper"]').val()+' м - Периметр \r\n\r');

                    /*$('#calc_data_banner').append($('input[name="luv_all"]').val()+' руб. - Стоимость люверсов; ');
                     $('#calc_data_banner').append($('input[name="luv_step"]').val()+' мм. - Шаг люверсов \r');
                     $('#calc_data_banner').append($('input[name="luver_count"]').val()+' - Кол-во люверсов \r');
                     $('#calc_data_banner').append($('input[name="luversy_position"]').val()+' - Расположение люверсов \r\n\r');*/

                    /*$('#calc_data_banner').append($('input[name="provar_all"]').val()+' руб. - Стоимость проварки \r');
                     $('#calc_data_banner').append($('input[name="provar_count"]').val()+' - края проварки \r');
                     $('#calc_data_banner').append($('input[name="provar_position"]').val()+' - Расположение проварки \r\n\r');*/

                    $('#calc_data_banner').append($('input[name="rez_all"]').val()+' руб. - Стоимость резки \r');
                    $('#calc_data_banner').append($('input[name="rez_count"]').val()+' - края резки \r');
                    $('#calc_data_banner').append($('input[name="rez_position"]').val()+' - Расположение резки \r\n\r');

                    /*$('#calc_data_banner').append($('input[name="shnur_all"]').val()+' руб. - Стоимость шнуров \r');
                     $('#calc_data_banner').append($('input[name="shnur_count"]').val()+' - кол-во шнуров \r');
                     $('#calc_data_banner').append($('input[name="shnur_position"]').val()+' - Расположение шнуров \r\n\r');*/

                    /*$('#calc_data_banner').append($('input[name="karman_all"]').val()+' руб. -  Стоимость карманов; ');
                     $('#calc_data_banner').append($('input[name="karman_step"]').val()+' мм. - шаг карманов \r');
                     $('#calc_data_banner').append($('input[name="karmans_count"]').val()+' - кол-во карманов \r');
                     $('#calc_data_banner').append($('input[name="karman_position"]').val()+' - Расположение карманов \r\n\r');*/

                } else {

                    $('input[name="price_m"]').val(0); // Цена за 1м2 = цена изделия / площадь изделия
                    $('input[name="price_item"]').val(0); // Цена изделия
                    $('input[name="itogo"]').val(0); // Цена Итого изделия * количество копий

                    $('input[name="luv_all').val(0);
                    $('input[name="provar_all').val(0);
                    $('input[name="rez_all').val(0);
                    $('input[name="shnur_all').val(0);
                    $('input[name="karman_all').val(0);

                }


            }

            function roundPlus(x, n) {if(isNaN(x) || isNaN(n)) return false; var m = Math.pow(10,n); return Math.round(x*m)/m;}

            $('.minus').click(function () {var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1; count = count < 1 ? 1 : count; $input.val(count); $input.change();
                return false;
            });
            $('.plus').click(function () {var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1); $input.change();
                return false;
            });

        });
    </script>
<?if(!$_REQUEST['ajax']=='Y')
    die();?>